let dark_mode = '';
let button = document.getElementById("dark-mode");

iuhiuhgiuhuh.ijoijoij = 7676767;

button.addEventListener("click", function () {
  let mybody = document.getElementsByTagName('body')[0];
  dark_mode = !dark_mode;
  mybody.classList.toggle("dark-mode");
});

button.addEventListener("click", function () {
    if (dark_mode) {
        button.textContent = "white mode"
    } else {
        button.textContent = "dark mode"
    };
});