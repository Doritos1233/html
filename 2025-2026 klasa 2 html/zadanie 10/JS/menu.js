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

  if (a === 1) {
    console.log("przelączam do dzialu obslugi reklamacji");
  } else if (a === 2 || a === 5 || a === 8) {
    console.log("hakuję...");
  } else if (a === 3) {
    alert("haslo: okoń");
    doWork();
  } else if (a === 4 || a === 6 || a === 7 || a === 9) {
    doWork();
  } else if (a === "secretInput") {
    console.log("secretInput");
  } else {
    console.log("not implement method");
  }

  function doWork() {
    console.log("provde magic");
  }
}
