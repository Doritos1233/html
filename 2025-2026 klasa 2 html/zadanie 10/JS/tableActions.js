function tableActions() {
  let Numbers = [
    randomNumber(),
    randomNumber(),
    randomNumber(),
    randomNumber(),
    randomNumber(),
    randomNumber(),
    randomNumber(),
    randomNumber(),
    randomNumber(),
    randomNumber(),
  ];
  console.log(Numbers.toString() + " (zadanie 1)"); // zadanie 1

  console.log(Numbers[7].toString() + " (zadanie 2)"); // zadanie 2

  Numbers.pop();
  console.log(Numbers.toString() + " (zadanie 4)"); // zadanie 4

  Numbers.push(number69());
  console.log(Numbers.toString() + " (zadanie 5)"); // zadanie 5

  [Numbers[0], Numbers[Numbers.length - 1]] = [
    Numbers[Numbers.length - 1],
    Numbers[0],
  ];
  console.log(Numbers.toString() + " (zadanie 6)"); // zadanie 6

  function number69() {
    let random = Math.floor(Math.random() * 100);

    if (random < 69) {
      return random;
    } else if (random >= 69) {
      return "secretInput";
    }
  }

  console.log(sortNumbers());
  // console.log(sortNumbers());
}
