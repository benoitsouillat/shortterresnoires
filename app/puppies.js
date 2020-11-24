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
    puppyCardImgLink.href = path + "okkaina-puppies/" + elm.puppyProfil + jpg;
    puppyCardImgLink.classList.add("puppy-img");
    puppyCardImgLink.classList.add("fancybox");
    puppyCardImgLink.classList.add("col-5");

    puppyCardImgLink.rel = elm.puppyNecklace.toLowerCase();

let puppyAlbumDiv = document.createElement("div");
    puppyAlbumDiv.classList.add("puppy-list-button")
    puppyAlbumDiv.classList.add("col-2");


let puppyAlbum = document.createElement('a');
    puppyAlbum.textContent = "Album Photo";
    puppyAlbum.rel = "vert";                            //elm.puppyNecklace.toLowerCase();
    puppyAlbum.role = "button";
    puppyAlbum.href = path + "okkaina-puppies/" + elm.puppyProfil + jpg;
    puppyAlbum.classList.add("fancybox");
    puppyAlbum.classList.add("btn");
    puppyAlbum.classList.add("btn-success");

let puppyCardImg = document.createElement('img');
    puppyCardImg.src =  path + "okkaina-puppies/" + elm.puppyProfil + jpg;

let puppyAvail = document.createElement("button");
    puppyAvail.classList.add("btn-avail");
    puppyAvail.classList.add("btn-sm");

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
    puppyCardImgLink.appendChild(puppyCardImg);
    puppyCard.appendChild(puppyAlbumDiv);
    puppyAlbumDiv.appendChild(puppyAlbum);

});

}

listingPuppy(okkainaLitterOne);
