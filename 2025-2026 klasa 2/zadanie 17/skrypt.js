
document.getElementById("btn").onclick = function () {
 
    let polePliku = document.getElementById("inp_wzor");
    let kolor = document.getElementById("sel_kolor").value;
    let cena = document.getElementById("inp_cena").value;

    let pelnaNazwa = polePliku.value;

    alert("Wzór: " + pelnaNazwa + ", kolor " + kolor + " w cenie " + cena + " zł");

    let obraz = document.createElement("img");
    obraz.src = pelnaNazwa;
    obraz.alt = pelnaNazwa;
    obraz.className = "miniatury";

    let sekcja = document.querySelector("section");
    sekcja.appendChild(obraz);
};