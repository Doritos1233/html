let a = document.getElementById('przycisk');
let b = document.getElementById('element_div');
let c = document.getElementById('element_span');

function wypiszId() {
    document.getElementById("opis").textContent = this.id;
};

a.addEventListener("click", wypiszId);
b.addEventListener("click", wypiszId);
c.addEventListener("click", wypiszId);