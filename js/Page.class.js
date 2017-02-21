function Page(numero, texte){
    
    this.numero = numero;
    this.texte = texte;
    this.choix = [];
    
    this.afficher = function(){
        console.log("Page numéro " + this.numero + "\n\n");
        console.log(texte + "\n\n");
        
        var listChoix = "";
        this.choix.forEach(function (ch){
            listChoix += ch.numero + ".  " +ch.texte + "\t\t";
        });
        console.log(listChoix);
    }
}