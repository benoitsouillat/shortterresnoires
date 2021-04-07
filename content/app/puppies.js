let content = document.getElementById('puppies');

let puppySection = document.createElement("div");
    puppySection.id = "puppiesTab";

content.appendChild(puppySection);

const listingPuppy = (puppyClass, puppyLice) => {

    let maleCount = 0;
    let femaleCount = 0;
    let litterLice = puppyLice.toLowerCase();

puppyClass.forEach(elm => {
        
let puppyCard = document.createElement("div");
    puppyCard.classList.add('puppy__card');

let puppyCardInfo = document.createElement('div');
    puppyCardInfo.classList.add('puppy_info-align');

let puppyName = document.createElement("p");
    puppyName.textContent = elm.puppyName;
    puppyName.classList.add('puppy_info-align_dogname');


let puppySex = document.createElement("p");
    puppySex.classList.add("fa");

    if (elm.isPuppyMale())
    {
        maleCount++;
        puppySex.textContent = " Mâle" + " N°" + maleCount;
        puppySex.classList.add("fa-mars");
        puppyCard.classList.add("puppy_male");
    }
    else 
    {
        femaleCount++;
        puppySex.textContent = " Femelle" + " N°" + femaleCount;
        puppySex.classList.add("fa-venus");
        puppyCard.classList.add("puppy_female");
    }


let puppyColor = document.createElement("p");
    puppyColor.textContent = "Couleur : " + elm.puppyColor;

let puppyNecklace = document.createElement("p");
    puppyNecklace.textContent = "Collier " + elm.puppyNecklace;

let puppyCardImgLink = document.createElement("a");
    puppyCardImgLink.href = imgPath + litterLice + "-puppies/" + 
    /* elm.puppyNecklace + */ elm.puppyProfil + jpg;
    puppyCardImgLink.classList.add("puppy_img");
    puppyCardImgLink.classList.add("fancybox");

    puppyCardImgLink.rel = elm.puppyNecklace.toLowerCase();

let puppyAlbumDiv = document.createElement("div");
    puppyAlbumDiv.classList.add("puppy_list-button")

let puppyAlbum = document.createElement('a');
    puppyAlbum.textContent = "Son Album Photo";
    puppyAlbum.rel = elm.puppyNecklace.toLowerCase();
    puppyAlbum.href = imgPath + litterLice + "-puppies/" + elm.puppyProfil + jpg;
    puppyAlbum.classList.add("fancybox");
    puppyAlbum.classList.add("btn");
    puppyAlbum.classList.add("btn-success");
    puppyAlbum.classList.add("btn__anim");

/*
let puppyAlbumExt = document.createElement('a');
    puppyAlbumExt.textContent = "Photos d'extérieur";
    puppyAlbumExt.rel = "ext";
    puppyAlbumExt.href = imgPath + litterLice + "-puppies/groupe/Image0000" + maleCount + jpg;
    puppyAlbumExt.classList.add("fancybox");
    puppyAlbumExt.classList.add("btn");
    puppyAlbumExt.classList.add("btn-primary");
    puppyAlbumExt.classList.add("btn__anim");
*/

let puppyCardImg = document.createElement('img');
    puppyCardImg.src =  imgPath + litterLice + "-puppies/" + elm.puppyProfil + jpg;

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
        if (elm.isPuppyMale())
            puppyAvail.textContent = "Réservé";
        else if (!(elm.isPuppyMale()))
            puppyAvail.textContent = "Réservée";
    }
    else 
    {
        puppyAvail.classList.add("btn-option");
        puppyAvail.textContent = "En option";
    }
    


    puppySection.appendChild(puppyCard);
    puppyCard.appendChild(puppyCardInfo);
    if (!(elm.puppyName === ""))
    {
        puppyCardInfo.appendChild(puppyName);
    }
        puppyCardInfo.appendChild(puppySex);
        puppyCardInfo.appendChild(puppyNecklace);
        puppyCardInfo.appendChild(puppyColor);
        puppyCardInfo.appendChild(puppyAvail);
    puppyCard.appendChild(puppyCardImgLink);
    puppyCardImgLink.appendChild(puppyCardImg);
    puppyCard.appendChild(puppyAlbumDiv);
    puppyAlbumDiv.appendChild(puppyAlbum);
    /* puppyAlbumDiv.appendChild(puppyAlbumExt);*/

});

}