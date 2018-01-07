$(document).ready(function() {
    let currentDate = new Date();
	let hours = currentDate.getHours();
	if(hours > 22 || hours < 8) { 
		document.getElementById("bear-gif").src = "images/Snooze.gif";
	}
});