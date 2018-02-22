"use strict";

var shortcuts = [
    {shortcut: "CG", replacement: "CodeGorilla"},
    {shortcut: "gn", replacement: "Groningen"}
];

function showShortcuts(){
  var html = "Shortcuts:";
  html += "<ul>";

  for (var i = 0; i < shortcuts.length; i++){
    html += "<li>";
    html += shortcuts[i].shortcut + ": " + shortcuts[i].replacement;
    html += "</li>";
  }

  html += "</ul>";

  document.getElementById('shortcuts').innerHTML = html;
}

function expandText(text){
   for (var i = 0; i < shortcuts.length; i++){
        text = text.replace(new RegExp("\\b" + shortcuts[i].shortcut + "\\b", 'g'), shortcuts[i].replacement);
    }

    return text;
}
