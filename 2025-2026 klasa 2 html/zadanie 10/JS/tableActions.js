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

  let temp = Numbers[0];
  Numbers[0] = Numbers[Numbers.length - 1];
  Numbers[Numbers.length - 1] = temp;
  console.log(Numbers.toString() + " (zadanie 6)"); // zadanie 6

  return Numbers;
}

// console.log(sortNumbers());
// console.log(sortNumbers());

// function sortNumbers(Numbers) {
//   if (a < b) {
//     return -1;
//   } else if (a > b) {
//     return 1;
//   } else if (a === b) {
//     return 0;
//   }
// }
