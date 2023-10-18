var image1 =createImage1();

function createImage1() {
    var leftDiv = document.createElement("div");
    leftDiv.style.backgroundImage = "url('./images/image1.jpg')";
    leftDiv.style.backgroundRepeat = "no-repeat";
    leftDiv.style.backgroundSize = "cover";
    leftDiv.style.float = "left";
    leftDiv.style.height = "700px";
    leftDiv.style.width = "50%";
    leftDiv.style.display = "flex";
    leftDiv.style.justifyContent = "center";
    leftDiv.style.alignItems = "flex-end";
    var subDIV = document.createElement("subDIV");
    subDIV.innerHTML = "\"Je vous raconte l'histoire\"";
    subDIV.style.marginBottom = "20px";
    subDIV.style.color = "#fff";
    subDIV.style.fontFamily = "'Times New Roman'";
    subDIV.style.fontSize = "2em";
    leftDiv.appendChild(subDIV);
    return leftDiv ;
   
}

var image2_3 =createImage2_3();
function createImage2_3() {
    var rightDiv = document.createElement("div");
    var upperDiv = document.createElement("div");
    upperDiv.style.backgroundImage = "url('./images/image2.png')";
    upperDiv.style.backgroundRepeat = "no-repeat";
    upperDiv.style.backgroundSize = "cover";
    upperDiv.style.height = "50%";
    var bottomDiv = document.createElement("div");
    bottomDiv.style.backgroundImage = "url('./images/image3.png')";
    bottomDiv.style.backgroundRepeat = "no-repeat";
    bottomDiv.style.backgroundSize = "cover";
    bottomDiv.style.height = "50%";
    rightDiv.appendChild(upperDiv);
    rightDiv.appendChild(bottomDiv);
    rightDiv.style.width = "50%";
    rightDiv.style.height = "700px";
    rightDiv.style.float = "right";
    return rightDiv;
}

var paragarphe = createParagraphe();
function createParagraphe() {
    var lineHeight = "25px";
    var div = document.createElement("div");
    var parDiv = document.createElement("div");
    div.style.float = "left";
    div.style.height = "700px";
    div.style.width = "65%";
    div.style.textAlign = "center";
    div.style.backgroundColor = "#EDCCAD";
    parDiv.style.paddingRight = parDiv.style.paddingLeft = "25px";
    var pText1 = "A Fleur PATIISERIE est un site de recette de cuisine faciles, gourmande et originale.Chaque jour,de nouvelles idées de petits plats à preparer, expliqués étape par étape avec des illustrations.Alors n'attendez-pas, régalez-vous ";
    var pEelement1 = document.createElement("p");
    pEelement1.textContent = pText1;
    pEelement1.style.lineHeight = lineHeight;
    var pText2 = "Passionnée de pâtisserie depuis l'âge de 12 ans, j'ai appris à cuisiner mes premières gourmandises en famille.. J'ai commencé par les gateaux les plus simples :cakes, gateaux, biscuits et c'etait mon plus grand moment de plaisir. Déjà, je me délectais de faire plaisir aux autres avec des recettes faciles , trouvées dans les bouquins de cuisine de ma mère et de ma grand-mère .Aujourd'hui, cette passion fait partie intégrante de ma vie et pourquoi pas mon métier un jour .Je vous souhaite beaucoup de plaisir à cuisiner pour chaque personne que vous aimez, à travers ces idées recettes de mon blog de pâtisserie.";
    var pEelement2 = document.createElement("p");
    pEelement2.textContent = pText2;
    pEelement2.style.lineHeight = lineHeight;
    var pText3 = "Envie de goûter mes petits gâteaux ? Découvrez mes recettes";
    var pEelement3 = document.createElement("p");
    pEelement3.textContent = pText3;
    pEelement3.style.lineHeight = lineHeight;
    parDiv.appendChild(pEelement1);
    parDiv.appendChild(document.createElement("br"));
    parDiv.appendChild(pEelement2);
    parDiv.appendChild(pEelement3);
    div.appendChild(parDiv);
    return div;
}

var image4 =createImage4();
function createImage4() {
    var div = document.createElement("div");
    div.style.float = "right";
    div.style.width = "35%";
    div.style.backgroundImage = "url('./images/image4.png')";
    div.style.backgroundRepeat = "no-repeat";
    div.style.backgroundSize = "cover";
    div.style.height = "700px";
    var img = document.createElement("img");
    img.src = "";
    img.style.height = "500px";
    img.style.width = "100%";
    img.style.float = "right";
    return div ;
}

var image5 =createImage5();
function createImage5() {
    var div = document.createElement("div");
    var img = document.createElement("img");
    img.src = "./images/image5.png";
    img.style.height = "300px";
    img.style.width = "730px";
    img.style.float = 'left';
    div.appendChild(img);   //avant tout ca c'est la creation de l'image, appendchild ajoute l'image 
    return div ;
}

var image6 =createImage6();
function createImage6() {
    var div = document.createElement("div");
    var img = document.createElement("img");
    img.src = "./images/image6.png";
    img.style.height = "300px";
    img.style.width = "730px";
    img.style.float = "right";
    div.appendChild(img);
    return div ;
}

affectDOM();
function affectDOM() {
    var header = document.getElementsByTagName("header")[0];
    header.insertAdjacentElement('afterend', image1);
    image1.insertAdjacentElement('afterend', image2_3);
    image2_3.insertAdjacentElement('afterend', paragarphe);
    paragarphe.insertAdjacentElement('afterend', image4);
    image4.insertAdjacentElement('afterend', image5);
    image5.insertAdjacentElement('afterend', image6);
}







