//jquery
//change font size
function changeSize(e) {
  $("#text").css("font-size", e.target.value + "px");
}

// change font family
function changeFont(e) {
  $("#text").css("font-family", e.target.value);
}

// change font weight
function changeBold() {
  $("#text").css("font-weight", "bold");
}

function changeItalic() {
  var fontStyle = $("#textarea").css("font-style");
  if (fontStyle == "italic") {
    $("#text").css("font-style", "");
  } else {
    $("#text").css("font-style", "italic");
  }
}

function changeUnderlined() {
  var textDecoration = $("#textarea").css("text-decoration");
  textDecoration == "underline"
    ? $("#text").css("text-decoration", "none")
    : $("#text").css("text-decoration", "underline");
}
function leftMe() {
  $("#text").css("text-align", "left");
}
function centerMe() {
  $("#text").css("text-align", "center");
}
function rightMe() {
  $("#text").css("text-align", "right");
}
