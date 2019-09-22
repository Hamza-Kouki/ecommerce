// javascript

//change font size
function changeSize(e) {
  var size = e.target.value;
  document.getElementById("text").style.fontSize = size + "px";
}

// change font family
function changeFont(e) {
  var font = e.target.value;
  document.getElementById("text").style.fontFamily = font;
}

// here we use query selector not getElementById
// change font weight
function changeBold() {
  var fontweight = document.querySelector("textarea").style.fontWeight;
  if (fontweight == "bold") {
    document.querySelector("#text").style.fontWeight = "";
  } else {
    document.querySelector("#text").style.fontWeight = "bold";
  }
}
// change text style to italic
function changeItalic() {
  var fontStyle = document.querySelector("textarea").style.fontStyle;
  if (fontStyle == "italic") {
    document.querySelector("#text").style.fontStyle = "";
  } else {
    document.querySelector("#text").style.fontStyle = "italic";
  }
}
// change text decoration to underlined
function changeUnderlined() {
  var textDecoration = document.querySelector("textarea").style.textDecoration;
  // use this syntax if u have single instruction in the if statement
  textDecoration == "underline"
    ? (document.querySelector("#text").style.textDecoration = "none")
    : (document.querySelector("#text").style.textDecoration = "underline");
}
// change align text to left
function leftMe() {
  $("#textarea").css("text-align", "left");
}
// change align text to center
function centerMe() {
  $("#textarea").css("text-align", "center");
}
// change align text to right
function rightMe() {
  $("#textarea").css("text-align", "right");
}
