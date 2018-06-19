/*var elementBtn = document.getElementById("btn");
elementBtn.addEventListener("click", function(){
    alert("Clic sur le bouton");
});

var elementRecherche = document.getElementById("recherche");
elementRecherche.addEventListener("keyup", function(){
    document.getElementById("titre").innerHTML = elementRecherche.value;
});

var paras = document.getElementsByTagName("p");

for(var i=0; i<paras.length; i++){
    var para = paras[i];
    para.addEventListener("click", function () {
        alert();
    });
};

for(var i=0; i<paras.length; i++){
    var para = paras[i];
    para.addEventListener("click", function () {
        var id = this.getAttribute("id");
        alert(id);
    });
};

var imgMain = document.getElementById("main");          // Exercice très difficile !
var elementImg = document.getElementsByClassName("mini");
for(var i=0; i<elementImg.length; i++){
    var elImage = elementImg[i];
    elImage.addEventListener("click", function(){
        var lien = this.getAttribute("src");
        imgMain.src = lien;
    });

};
*/


var onglets = document.getElementsByClassName("onglet");
var display = document.getElementsByClassName("bloc");
for(var i=0; i<onglets.length; i++){
    var onglet = onglets[i];
    onglet.addEventListener("click", function() {
        for(var j=0; j<onglets.length; j++){
            onglets[j].setAttribute("class", "onglet btn btn-default");
        }
        this.className = "onglet btn btn-primary";
        var id = this.getAttribute("id").replace("btn-","");

        for(var k=0; k<display.length; k++){
            display[k].setAttribute("class", "row bloc hidden");
        }

        document.getElementById("bloc-"+id).setAttribute("class", "row bloc");
        })

    }

    var lignes = document.getElementsByClassName("idiot");
    for(var i=0; i<lignes.length; i++){
        lignes[i].addEventListener("click", function() {
            var ck = this.getAttribute("data-ck");
            ck = document.getElementById(ck);
            ck.addEventListener("click", function (e) {
                e.stopPropagation();
            });
            ck.checked = (ck.checked === true)?false : true;
        })
    }

    var ajout = document.getElementById("add");
    ajout.addEventListener("click", function() {
        var liste = document.getElementById("liste");
        var uneTache = document.createElement("li");
        uneTache.innerHTML = document.getElementById("tache").value;
        liste.appendChild(uneTache);
    });
    

