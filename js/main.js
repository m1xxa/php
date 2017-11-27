var form = document.getElementById("calc-form");

document.getElementById("b7").onclick = function () {
  document.getElementById("text-field").value = document.getElementById("text-field").value + "7";
};
document.getElementById("b8").onclick = function () {
    document.getElementById("text-field").value = document.getElementById("text-field").value + "8";
};
document.getElementById("b9").onclick = function () {
    document.getElementById("text-field").value = document.getElementById("text-field").value + "9";
};
document.getElementById("b4").onclick = function () {
    document.getElementById("text-field").value = document.getElementById("text-field").value + "4";
};
document.getElementById("b5").onclick = function () {
    document.getElementById("text-field").value = document.getElementById("text-field").value + "5";
};
document.getElementById("b6").onclick = function () {
    document.getElementById("text-field").value = document.getElementById("text-field").value + "6";
};
document.getElementById("b1").onclick = function () {
    document.getElementById("text-field").value = document.getElementById("text-field").value + "1";
};
document.getElementById("b2").onclick = function () {
    document.getElementById("text-field").value = document.getElementById("text-field").value + "2";
};
document.getElementById("b3").onclick = function () {
    document.getElementById("text-field").value = document.getElementById("text-field").value + "3";
};
document.getElementById("b+").onclick = function () {
    var value = document.getElementById("text-field").value;
    if(value.indexOf("+") != -1) form.submit();
    if(value.indexOf("-") != -1) form.submit();
    if(value.indexOf("*") != -1) form.submit();
    if(value.indexOf("/") != -1) form.submit();
    else document.getElementById("text-field").value = document.getElementById("text-field").value + " + ";
};
document.getElementById("b-").onclick = function () {
    var value = document.getElementById("text-field").value;
    if(value.indexOf("+") != -1) form.submit();
    if(value.indexOf("-") != -1) form.submit();
    if(value.indexOf("*") != -1) form.submit();
    if(value.indexOf("/") != -1) form.submit();
    else document.getElementById("text-field").value = document.getElementById("text-field").value + " - ";
};
document.getElementById("b*").onclick = function () {
    var value = document.getElementById("text-field").value;
    if(value.indexOf("+") != -1) form.submit();
    if(value.indexOf("-") != -1) form.submit();
    if(value.indexOf("*") != -1) form.submit();
    if(value.indexOf("/") != -1) form.submit();
    else document.getElementById("text-field").value = document.getElementById("text-field").value + " * ";
};
document.getElementById("b/").onclick = function () {
    var value = document.getElementById("text-field").value;
    if(value.indexOf("+") != -1) form.submit();
    if(value.indexOf("-") != -1) form.submit();
    if(value.indexOf("*") != -1) form.submit();
    if(value.indexOf("/") != -1) form.submit();

    else document.getElementById("text-field").value = document.getElementById("text-field").value + " / ";
};
document.getElementById("c").onclick = function () {
    document.getElementById("text-field").value = "";
};
document.getElementById("b0").onclick = function () {
    document.getElementById("text-field").value = document.getElementById("text-field").value + "0";
};
document.getElementById("b-dot").onclick = function () {
    document.getElementById("text-field").value = document.getElementById("text-field").value + ".";
};
