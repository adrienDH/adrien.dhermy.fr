$( document ).ready(function() {
	drawLineChart($(".line-chart"))
});

function drawLineChart($container) {
	
	// Données utilisées
	var datas = [[
		{x:0, y:0},
		{x:10, y:5},
		{x:15, y:15},
		{x:20, y:15},
		{x:25, y:20},
		{x:30, y:25},
		{x:35, y:30},
		{x:40, y:25},
		{x:45, y:15},
		{x:50, y:25}
		],[
		{x:0, y:5},
		{x:10, y:5},
		{x:15, y:10},
		{x:20, y:15},
		{x:25, y:10},
		{x:30, y:20},
		{x:35, y:22},
		{x:40, y:20},
		{x:45, y:15},
		{x:50, y:18}
	]];
	
	// Dimension du graphique
	var width = 500;
	var height = 350;
	var margin = 50;
	
	// Couleur
	var colors = d3.scale.category10()
		.domain(datas);
	
	var minY = d3.min(datas, function (subdatas) {
	return d3.min(subdatas, function (d) {
		return d.y;
		});
	});
	
	var maxY = d3.max(datas, function (subdatas) {
		return d3.max(subdatas, function (d) {
			return d.y;
		});
	});
	
	var minX = d3.min(datas, function (subdatas) {
		return d3.min(subdatas, function (d) {
			return d.x;
		});
	});
	
	var maxX = d3.max(datas, function (subdatas) {
		return d3.max(subdatas, function (d) {
			return d.x;
		});
	});
	
	// Création du SVG
	var svg = d3.select($container[0])
		.append("svg")
		.attr("viewBox", "0 0 " + (width + margin * 2) + " " + (height + margin * 2))
		//.attr("width", width + margin * 2)
		//.attr("height", height + margin * 2)
		.append("g")
		.attr('transform', "translate(" + margin + ", " + margin + ")");
		
	// Création de l'échelle Y
	var yScale = d3.scale.linear()
		.domain([0, maxY])
		.range([300, 0]);

	// Création de l'axe Y
	var Yaxis = d3.svg.axis()
		.scale(yScale)
		.tickSize(0, 1)
		.orient('left')

	var yAxisGroup = svg.append('g')
		.attr('class', 'y-axis')
		.attr('transform', "translate(" + margin + ", 0)")
		.call(Yaxis);
	
	yAxisGroup.selectAll('line')
		.attr('x2', -6)
		.attr('stroke', '#000')
		.attr('stroke-width', '1px');

	yAxisGroup.selectAll('text')
		.attr('transform', "translate(-7, 0)");
	
	// Création de l'échelle X
	var xScale = d3.scale.linear()
		.domain([0, maxX])
		.range([0, 400]);
	
	// Création de l'axe X
	var xAxis = d3.svg.axis()
		.scale(xScale)
		.tickSize(0, 1)

	var xAxisGroup = svg.append('g')
		.attr('class', 'x-axis')
		.attr('transform', "translate(" + margin + ", " + (height - margin) + ")")
		.call(xAxis);
	
	xAxisGroup.selectAll('line')
		.attr('y2', 6)
		.attr('stroke', '#000')
		.attr('stroke-width', '1px');
	
	xAxisGroup.selectAll('text')
		.attr('transform', "translate(0, 7)");
	
	// Affichage des données
	datas.forEach(function (subdatas, index) {
		var scaledDatas = [];

		subdatas.forEach(function (item) {
			scaledDatas.push({
				x: xScale(item.x),
				y: yScale(item.y)
			})
		});
		
		// Création de la ligne d'un série
		var line_function = d3.svg.line()
			.x(function (d) {
				return d.x;
			})
			.y(function (d) {
				return d.y;
			})
			.interpolate('cardinal');
			

		var lineGroup = svg.append('g');

		lineGroup.append('path')
			.attr('d', line_function(scaledDatas))
			.attr('transform', "translate(" + margin + ", 0)")
			.attr('stroke', colors(index))
			.attr('stroke-width', 2)
			.attr('fill', 'none');
	});
}