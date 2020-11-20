let content = document.getElementById('puppies');

let puppySection = document.createElement("div");
    puppySection.id = "puppiesTab";

content.appendChild(puppySection);



const listingPuppy = (puppyClass) => {

    let maleCount = 0;
    let femaleCount = 0;

puppyClass.forEach(elm => {
        
let puppyCard = document.createElement("div");
    puppyCard.classList.add('puppy__card');

let puppyCardInfo = document.createElement('div');
    puppyCardInfo.classList.add('puppy-info-align');

let puppySex = document.createElement("p");

    if (elm.puppySex === " ♂ mâle")
    {
        maleCount++;
        puppySex.textContent = "Mâle" + " N°" + maleCount + " ♂";
        puppyCard.classList.add("puppy_male");
    }
    else 
    {
        femaleCount++;
        puppySex.textContent = "Femelle" + " N°" + femaleCount + " ♀";
        puppyCard.classList.add("puppy_female");
    }


let puppyColor = document.createElement("p");
    puppyColor.textContent = "Couleur : " + elm.puppyColor;

let puppyNecklace = document.createElement("p");
    puppyNecklace.textContent = "Collier " + elm.puppyNecklace;

let puppyCardImgLink = document.createElement("a");
    puppyCardImgLink.href = path + "okkaina-puppies/" + elm.puppyHead + jpg;
    puppyCardImgLink.classList.add("puppy-img");
let puppyCardImgLink2 = document.createElement("a");
    puppyCardImgLink2.href = path + "okkaina-puppies/" + elm.puppyProfil + jpg;
    puppyCardImgLink2.classList.add("puppy-img");


let puppyCardImg = document.createElement('img');
    puppyCardImg.src =  path + "okkaina-puppies/" + elm.puppyHead + jpg;
let puppyCardImg2 = document.createElement('img');
    puppyCardImg2.src = path + "okkaina-puppies/" + elm.puppyProfil + jpg;

let puppyAvail = document.createElement("button");
    puppyAvail.classList.add("btn-avail");

    if (elm.puppyAvailable === "y" || elm.puppyAvailable === "Y")
    {
        puppyAvail.classList.add("btn-dispo");
        puppyAvail.textContent = "Disponible";
    }
    else if (elm.puppyAvailable === "n" || elm.puppyAvailable === "N")
    {
        puppyAvail.classList.add("btn-undispo");
        puppyAvail.textContent = "Réservé";
    }
    else 
    {
        puppyAvail.classList.add("btn-option");
        puppyAvail.textContent = "En option";
    }
    


    puppySection.appendChild(puppyCard);
    puppyCard.appendChild(puppyCardInfo);
        puppyCardInfo.appendChild(puppySex);
        puppyCardInfo.appendChild(puppyNecklace);
        puppyCardInfo.appendChild(puppyColor);
        puppyCardInfo.appendChild(puppyAvail);
    puppyCard.appendChild(puppyCardImgLink);
    puppyCard.appendChild(puppyCardImgLink2);
    puppyCardImgLink.appendChild(puppyCardImg);
    puppyCardImgLink2.appendChild(puppyCardImg2);
});

}

listingPuppy(okkainaLitterOne);
