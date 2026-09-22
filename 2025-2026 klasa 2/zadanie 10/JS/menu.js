function menu(opcje) {
  switch (opcje) {
    case 1:
      console.log("przelączam do dzialu obslugi reklamacji");
      break;
    case 2:
    case 5:
    case 8:
      console.log("hakuję...");
      break;
    case 3:
      alert("haslo: okoń");
    case 4:
    case 6:
    case 7:
    case 9:
      doWork();
      break;
    case "secretInput":
      console.log("secretInput");
      break;
    default:
      console.log("not implement method");
      break;
  }
}
