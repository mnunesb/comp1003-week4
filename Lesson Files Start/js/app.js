// Grab the INPUT element with the id="rate"
var rateInput = document.getElementById('rateInput');
// Grab the OUTPUT element for displaying the value of the range INPUT element
var rateValue = document.getElementById('rateValue');
// Create an event listener for any changes by the user to the range INPUT element
rateInput.addEventListener('change', updateValue);
// Create a function to grab the value of the range slider INPUT element
function updateValue(event){
	var newValue = event.target.value;
	rateValue.textContent = newValue;
}
