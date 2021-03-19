/* exported myFunction */
/*eslint no-unused-vars: ["error", { "vars": "local" }]*/
/*global document, window, alert, console, require*/


function validateForm() {
  var x = document.forms["MyForm"]["firstname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}