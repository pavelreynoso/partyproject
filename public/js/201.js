var el1;

function countCharacters() {
  var textEntered, countRemaining, counter;
  textEntered = document.getElementById('package_name').value;
  counter = (50 - (textEntered.length));
  countRemaining = document.getElementById('charactersRemainingName');
  countRemaining.textContent = counter;
}
el1 = document.getElementById('package_name');
el1.addEventListener('keyup', countCharacters, false);

var el2;

function countCharacters2() {
  var textEntered, countRemaining, counter;
  textEntered = document.getElementById('package_description').value;
  counter = (200 - (textEntered.length));
  countRemaining = document.getElementById('charactersRemainingDescription');
  countRemaining.textContent = counter;
}
el2 = document.getElementById('package_description');
el2.addEventListener('keyup', countCharacters2, false);
