  var res = document.getElementById('res');
  var evtSource = new EventSource('sse.php');
  evtSource.onmessage = function(e) {
	res.innerHTML += e.data + "<br />";
  }
