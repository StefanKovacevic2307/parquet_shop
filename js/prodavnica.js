document.getElementById('proizvodi').addEventListener("submit",ukupanIznos);
function ukupanIznos(event){
    event.preventDefult();
    
    var kolPrvi=document.getElementById("jedan").value,
     kolDrugi=document.getElementById("dva").value,
    kolTreci=document.getElementById("tri").value;

    var methods=document.getElementById('proizvodi').r_method,
    isporukeMetod;
    for(var i=0; i<methods.length;i++){
        if(methods[i].checked==true){
            isporukeMetod=methods[i].value;
        }
    }
}