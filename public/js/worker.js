
onmessage = function(e) {
    timedCount();
  postMessage("workerResult");
}

function timedCount() {
  
    postMessage("workerResult");
    setTimeout("timedCount()",100);
}