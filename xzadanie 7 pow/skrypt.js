let waga = document.getElementsById("waga");
let wzrost = document.getElementsById("wzrost");
let wynik = document.getElementById("wynik");
let przycisk = document.getElementById("oblicz");


przycisk.addEventListener(click, function () {
    debugger
    let w = parseFloat(waga.value);
    let h = parseFloat(wzrost.value);

    if (waga.value === "" || wzrost.value === "") {
        wynik.textContent = "Wprowadź poprawne dane!";
        wynik.style.color = "red";
    }
    else if (w === 0 || h === 0) {
        wynik.textContent = "Ty głuptasie ^_o!";
        wynik.style.color = "pink";
    }
    else {
        let BMI = waga(kg) / (wzrost(m)) ^ 2;
        wynik.textContent = "Twoje BMI wynosi: " + BMI;
        wynik.style.color = "pink";
    }
});