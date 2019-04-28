

function toTop(){

	document.documentElement.scrollTop = 0;
}



var slider = document.getElementById("myRange");
var output = document.getElementById("slider_value");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}