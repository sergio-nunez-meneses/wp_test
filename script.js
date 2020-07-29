const COLOR_MODE = getID("colorMode"),
  SHEET = document.styleSheets[4],
  BODY = document.body,
  HOME = getID("homepage"),
  BUTTONS = getSelector(".btn-contact"),
  TITLES = getSelector("h1"),
  LINKS = getSelector(".permalink"),
  NAV_LINK = getSelector(".nav-link"),
  IMAGES = getSelector("img"),
  LABELS = getSelector("label"),
  DIVS = getSelector("div"),
  SECTIONS = getSelector("section"),
  PARAGRAPHS = getSelector("p"),
  HR = getSelector("hr");

function getID(id) {
  return document.getElementById(id);
}

function getSelector(selector) {
  return document.querySelectorAll(selector);
}

function randHex() {
  return "#"+(Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, "0");
}

function randInt(maxInt) {
  return Math.floor(Math.random() * maxInt);
}

function colorReplacing(bodyBg, bodyCol, bodyRot, homeBg, homeCol, homeRot, titleBg, titleCol, titleRot, buttonBg, buttonCol, buttonRot, linkBg, linkCol, linkRot, labelBg, labelCol, labelRot, hrBg, hrCol, hrRot, imgBlur, imgContr, imgSep, imgRot) {

  BODY.style.backgroundColor = bodyBg;
  BODY.style.color = bodyCol;
  BODY.style.transform = "rotate(" + bodyRot + "deg)";
  BODY.style.transform = "rotate(" + bodyRot + "deg)";
  BODY.style.transition = "all 0.5s";

  HOME.style.backgroundColor = homeBg;
  HOME.style.color = homeCol;
  HOME.style.transform = "rotate(" + homeRot + "deg)";
  HOME.style.transition = "all 0.5s";

  for (let i = 0; i < TITLES.length; i++) {
    TITLES[i].style.backgroundColor = titleBg;
    TITLES[i].style.color = titleCol;
    TITLES[i].style.transform = "rotate(" + titleRot + "deg)";
    TITLES[i].style.transition = "all 0.5s";
  }

  for (let i = 0; i < BUTTONS.length; i++) {
    BUTTONS[i].style.backgroundColor = buttonBg;
    BUTTONS[i].style.color = buttonCol;
    BUTTONS[i].style.transform = "rotate(" + buttonRot + "deg)";
    BUTTONS[i].style.transition = "all 0.5s";
  }

  for (let i = 0; i < LINKS.length; i++) {
    LINKS[i].style.backgroundColor = linkBg;
    LINKS[i].style.color = linkCol;
    LINKS[i].style.transform = "rotate(" + linkRot + "deg)";
    LINKS[i].style.transition = "all 0.5s";
  }

  for (let i = 0; i < LABELS.length; i++) {
    LABELS[i].style.backgroundColor = labelBg;
    LABELS[i].style.color = labelCol;
    LABELS[i].style.transform = "rotate(" + labelRot + "deg)";
    LABELS[i].style.transition = "all 0.5s";
  }

  for (let i = 0; i < HR.length; i++) {
    HR[i].style.backgroundColor = hrBg;
    HR[i].style.color = hrCol;
    HR[i].style.transform = "rotate(" + hrRot + "deg)";
    HR[i].style.transition = "all 0.5s";
  }

  for (let i = 0; i < IMAGES.length; i++) {
    IMAGES[i].style.filter = "blur(" + imgBlur + "px)";
    IMAGES[i].style.filter = "sepia(" + imgSep + "%)";
    IMAGES[i].style.filter = "contrast(" + imgContr + "%)";
    IMAGES[i].style.transform = "rotate(" + imgRot + "deg)";
    IMAGES[i].style.transition = "all 0.5s";
  }
}

COLOR_MODE.addEventListener("click", () => {
  if (COLOR_MODE.value === "normal") {
    colorReplacing("#17171E", "#fff", 0, "#232329", "#fff", 0, "transparent", "#FE9000", 0, "#FE9000", "#000", 0, "transparent", "#1E88E5", 0, "transparent", "#6c757d", 0, "#FFC107", "#FFC107", 0, 0, 100, 0, 0);
    SHEET.insertRule(".nav-link:hover { color: #FE9000 !important; }", SHEET.cssRules.length);
  } else if (COLOR_MODE.value === "protanopia") {
    colorReplacing("#1c1e24", "#fff", 0, "#27282d", "#fff", 0, "transparent", "#c1aa13", 0, "#c1aa13", "#000", 0, "transparent", "#1656b1", 0, "transparent", "#73727b", 0, "#e4ca14", "#e4ca14", 0, 0, 100, 0, 0);
    SHEET.insertRule(".nav-link:hover { color: #1656b1 !important; }", SHEET.cssRules.length);
  } else if (COLOR_MODE.value === "deuteranopia") {
    colorReplacing("#1e1d23", "#fff", 0, "#2a272d", "#fff", 0, "transparent", "#d9a100", 0, "#d9a100", "#000", 0, "transparent", "#005b9c", 0, "transparent", "#7a707e", 0, "#ffbf32", "#ffbf32", 0, 0, 100, 0, 0);
    SHEET.insertRule(".nav-link:hover { color: #005b9c !important; }", SHEET.cssRules.length);
  } else if (COLOR_MODE.value === "tritanopia") {
    colorReplacing("#1d1e20", "#fff", 0, "#27282b", "#fff", 0, "transparent", "#ff8790", 0, "#ff8790", "#000", 0, "transparent", "#006369", 0, "transparent", "#6c747d", 0, "#ffb6c1", "#ffb6c1", 0, 0, 100, 0, 0);
    SHEET.insertRule(".nav-link:hover { color: #006369 !important; }", SHEET.cssRules.length);
  } else if (COLOR_MODE.value === "random") {
    let randBlur = randInt(10),
      randContr = randInt(200),
      randSep = randInt(100),
      randRot = randInt(360);

    colorReplacing(String(randHex()), String(randHex()), randRot, String(randHex()), String(randHex()), randRot, String(randHex()), String(randHex()), randRot, String(randHex()), String(randHex()), randRot, String(randHex()), String(randHex()), randRot, String(randHex()), String(randHex()), String(randHex()), String(randHex()), randRot, randBlur, randContr, randSep, randRot);
    SHEET.insertRule(".nav-link:hover { color: " + String(randHex()) + " !important; }", SHEET.cssRules.length);
  }
});
