function randomNumber() {
  return Math.floor(Math.random() * 100);
}

function number69() {
  let random = Math.floor(Math.random() * 100);

  if (random < 69) {
    return random;
  } else if (random >= 69) {
    return "secretInput";
  }
}

function doWork() {
  console.log("provde magic");
}
