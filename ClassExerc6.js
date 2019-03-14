document.getElementById("radio1").checked=true;

function updatePos(index){

    if(document.getElementById("checkbox"+index).checked)

        document.getElementById("img"+index).style.visibility="visible";

    else

        document.getElementById("img"+index).style.visibility="hidden";

}