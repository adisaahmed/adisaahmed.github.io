var a = document.getElementsByClassName("accordion");

for(var i = 0; i<a.length;i++) {
	a[i].onclick = function() {
		var s = this.nextElementSibling;
		if(s.style.display === "block") {
			s.style.display = "none";
		}
		else {
			s.style.display = "block";
		}
	}
}