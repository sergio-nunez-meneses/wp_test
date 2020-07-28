const BODY = document.body,
  TOGGLE_BTN = getID("toggle"),
  DIVS = getSelector("div"),
  HEADINGS = getSelector("h"),
  PARAGRAPHS = getSelector("p"),
  ANCHORS = getSelector("a"),
  IMAGES = getSelector("img");

function getID(id) {
  return document.getElementById(id);
}

function getSelector(selector) {
  return document.querySelectorAll(selector);
}

function randHex() {
  return "#"+(Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, "0");
}

TOGGLE_BTN.addEventListener("click", () => {
  for (let i = 0; i < DIVS.length; i++) {
    DIVS[i].style.backgroundColor = String(randHex());
  }
  for (let i = 0; i < HEADINGS.length; i++) {
    HEADINGS[i].style.backgroundColor = String(randHex());
  }
  for (let i = 0; i < PARAGRAPHS.length; i++) {
    PARAGRAPHS[i].style.backgroundColor = String(randHex());
  }
  for (let i = 0; i < ANCHORS.length; i++) {
    ANCHORS[i].style.backgroundColor = String(randHex());
  }
  for (let i = 0; i < IMAGES.length; i++) {
    let rand = Math.floor(Math.random() * 100);
    IMAGES[i].style.filter = "sepia(" + rand.toString() + "%)";
  }
});
