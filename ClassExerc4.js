document.getElementById("apples").onchange=calculate;
document.getElementById("bananas").onchange=calculate;
document.getElementById("oranges").onchange=calculate;

var totalCost=0;

function calculate(){

    totalCost=0;

    totalCost+=parseInt(document.getElementById("apples").value)*0.1;
    totalCost+=parseInt(document.getElementById("bananas").value)*0.2;
    totalCost+=parseInt(document.getElementById("oranges").value)*0.3;

}

function displayTotal(){

    window.alert("Thank you for your order. Your total cost is: "+totalCost+"$");

}