document.addEventListener('DOMContentLoaded', function () {
    var btn = document.getElementById('haslo');
    var input = document.querySelector('.prawy input[type="password"]');
    if (!btn || !input) return;

    btn.addEventListener('click', function () {
        var pw = input.value || '';

        var wynik = document.getElementById('wynik');
        if (!wynik) {
            wynik = document.createElement('div');
            wynik.id = 'wynik';
            wynik.style.marginTop = '8px';
            input.after(wynik);
        }

        if (!pw) {
            wynik.textContent = 'WPISZ HASŁO!';
            wynik.style.color = 'red';
            return;
        }

        var hasLower = /[a-ząęćłńóśżź]/.test(pw);
        var hasUpper = /[A-ZĄĘĆŁŃÓŚŻŹ]/.test(pw);
        var hasDigit = /\d/.test(pw);
        var hasSpecial = /[^A-Za-z0-9ĄĘĆŁŃÓŚŻŹąęćłńóśżź]/.test(pw);

        var categories = 0;
        if (hasLower) categories++;
        if (hasUpper) categories++;
        if (hasDigit) categories++;
        if (hasSpecial) categories++;

        var len = pw.length;
        var label = 'SŁABE', color = 'yellow';

        if (len >= 12 && categories === 4) {
            label = 'BARDZO DOBRE';
            color = 'green';
        } else if (len >= 8 && categories >= 3) {
            label = 'DOBRE';
            color = 'greenyellow';
        } else if (len >= 6 && categories >= 2) {
            label = 'ŚREDNIE';
            color = 'blue';
        } else {
            label = 'SŁABE';
            color = 'yellow';
        }

        wynik.textContent = label;
        wynik.style.color = color;
    });
});