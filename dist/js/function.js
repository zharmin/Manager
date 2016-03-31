function myStart() {
	var request = $.ajax({
		url: "dist/php/start-seedbox.php",
		type: "GET",
		dataType: "html"
	});

request.done(function(msg) {
		$("#mybox").html(msg);
	});

request.fail(function(jqXHR, textStatus) {
		alert( "Request failed: " + textStatus );
	});
}

function myStop() {
	var request = $.ajax({
		url: "dist/php/stop-seedbox.php",
		type: "GET",
		dataType: "html"
	});

request.done(function(msg) {
		$("#mybox").html(msg);
	});

request.fail(function(jqXHR, textStatus) {
		alert( "Request failed: " + textStatus );
	});
}

function myRestart() {
	var request = $.ajax({
		url: "dist/php/restart-seedbox.php",
		type: "GET",
		dataType: "html"
	});

request.done(function(msg) {
		$("#mybox").html(msg);
	});

request.fail(function(jqXHR, textStatus) {
		alert( "Request failed: " + textStatus );
	});
}
