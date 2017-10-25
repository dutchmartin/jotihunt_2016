var getJSON = function(url, callback) {
	var xhr = new XMLHttpRequest();
	xhr.open("get", url, true);
	xhr.responseType = "json";
	xhr.onload = function() {
		var status = xhr.status;
		if (status == 200) {
			callback(null, xhr.response);
		} else {
			callback(status);
		}
	};
	xhr.send();
};

function deletecoord(num) {
	var r = confirm("are you sure about deleting it?");
	if (r === true) {
		getJSON("http://dev.slaafke.be/workspace/maps/includes/deletecoord.php?num=" + num,
			function(err, data) {
				if (err !== null) {
					alert("Something went wrong: " + err);
				}
			});
		location.reload();
	}
}