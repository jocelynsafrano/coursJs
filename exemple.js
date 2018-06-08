var elementBtn = document.getElementById("btn");
elementBtn.addEventListener("click", function(){
    alert("Clic sur le bouton");
});

var elementRecherche = document.getElementById("recherche");
elementRecherche.addEventListener("keyup", function(){
    document.getElementById("titre").innerHTML = elementRecherche.value;
});