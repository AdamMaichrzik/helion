function showTable() {
	$.getJSON("../JSON/JSONTableFromXML.json", function (data) {
		JSONItems = data;
		var tr;
		for (var i = 0; i < JSONItems.length; i++) {
			tr = $("<tr/>");
			tr.append("<td>" + data[i].ident + "</td>");
			tr.append("<td>" + data[i].tytul + "</td>");
			tr.append("<td>" + data[i].liczbaStron + "</td>");
			tr.append("<td>" + data[i].dataWydania + "</td>");
			$("table").append(tr);
		}
	});
}
