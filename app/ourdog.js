
let ourRepro = document.getElementById("our-repro");

const createImgArray = (dogName) => {

    let dogArray = [];
    let j = 0;

    for (let i in images)
    {
        if (images[i].indexOf(dogName.toLowerCase()) === 0)
        {
            dogArray[j] = images[i];
            j++
        }
    }
    return dogArray;
}

                    /* Les Femelles */

let femaleSection = document.createElement("section");
    femaleSection.classList.add("container-fluid");
let femaleTitle = document.createElement("h3");
    femaleTitle.textContent = "Nos Femelles ";
    femaleTitle.style.marginTop = "1rem";


ourRepro.insertAdjacentElement("beforeend", femaleTitle);
ourRepro.insertAdjacentElement("beforeend", femaleSection);


femaleClass.forEach(elm => {

    let dogName = elm.dogName;
    let dogSex = elm.dogSex;
    let dogBirth = elm.dogBirth;
    let dogBreeder = elm.dogBreeder;
    let dogLitter = elm.dogLitter;

        /* Partie Infos du chien */

    let dogInfo = document.createElement("aside");
        dogInfo.classList.add("repro-info");
        dogInfo.classList.add("row");
        dogInfo.id = dogName + "-row";
        dogInfo.style.marginBottom = "40px";
        dogInfo.style.display = "flex";
        dogInfo.style.justifyContent = "space-evenly";
        dogInfo.style.alignItems = "center";

    let divInfo = document.createElement("div");
        divInfo.classList.add("dog-info");
        divInfo.classList.add("col-6");
        divInfo.classList.add("col-lg-4");

    let dogNamePrint = document.createElement("h2");
        dogNamePrint.textContent = dogName + dogBreeder;
    let dogSexPrint = document.createElement("p");
        dogSexPrint.textContent = dogSex;
    let dogBirthPrint = document.createElement("p");
        dogBirthPrint.textContent = "née le : " +  dogBirth;
    let dogLitterLink = document.createElement("a");
        dogLitterLink.href = "weeding.html";
        dogLitterLink.textContent = " Voir ses bébés";

        /* Partie Diapo */

    let lastButton = document.createElement("a");
        lastButton.classList.add("carousel-control-prev");
        lastButton.role = "button";
        lastButton.href = "#" + dogName + "-carousel";
        lastButton.dataset.slide = "prev";
    let lastButtonIco = document.createElement("span");
        lastButtonIco.classList.add("carousel-control-prev-icon");
    let lastButtonBack = document.createElement("span");
        lastButtonBack.classList.add("sr-only");
        lastButtonBack.textContent = "Précédent"

    let nextButton = document.createElement("a");
        nextButton.classList.add("carousel-control-next");
        nextButton.role = "button";
        nextButton.href = "#" + dogName + "-carousel";
        nextButton.dataset.slide = "next";
    let nextButtonIco = document.createElement("span");
        nextButtonIco.classList.add("carousel-control-next-icon");
    let nextButtonSwitch = document.createElement("span");
        nextButtonSwitch.classList.add("sr-only");
        nextButtonSwitch.textContent = "Suivant";

    let divDiapo = document.createElement("div");
        divDiapo.classList.add("diapo-dog");
        divDiapo.classList.add("col-6");
        divDiapo.classList.add("col-lg-5");
        divDiapo.style.display = "flex";
        divDiapo.style.justifyContent = "center";

    let divCarousel = document.createElement("div");
        divCarousel.classList.add("carousel");
        divCarousel.classList.add("slide");
        divCarousel.dataset.ride = "carousel";
        divCarousel.id = dogName + "-carousel";

    let divCarouselInner = document.createElement("div");
        divCarouselInner.classList.add("carousel-inner");

    imgArray = createImgArray(dogName);

        /* Insertions */

    femaleSection.insertAdjacentElement("beforeend",dogInfo);
    dogInfo.appendChild(divInfo);
    divInfo.appendChild(dogNamePrint);
    divInfo.appendChild(dogSexPrint);
    divInfo.appendChild(dogBirthPrint);
    if(dogLitter === true)
    {
        divInfo.appendChild(dogLitterLink);
    }
    dogInfo.appendChild(divDiapo);

    divDiapo.appendChild(divCarousel);
    divCarousel.appendChild(divCarouselInner);
    imgArray.forEach(elm => {

        let divImg = document.createElement("div");
            divImg.classList.add("carousel-item");
            divImg.style.transitionDuration = "0s";
        let image = document.createElement("img");
            image.src = path + elm + jpg;
            image.classList.add("d-block");
            //image.classList.add("w-100");
            image.style.width = "auto";
            image.style.maxHeight = "299px";

           /* if (window.innerWidth < 1100)
            {
                image.style.height = "15%";
            }
            */

        divCarouselInner.appendChild(divImg);
        divImg.appendChild(image);
    });

    divCarouselInner.children[0].classList.add("active");

    divDiapo.appendChild(lastButton);
    lastButton.appendChild(lastButtonIco);
    lastButton.appendChild(lastButtonBack);

    divDiapo.appendChild(nextButton);
    nextButton.appendChild(nextButtonIco);
    nextButton.appendChild(nextButtonSwitch);


});

 

// Les Mâles

let maleSection = document.createElement("section");
    maleSection.classList.add("container-fluid")
let maleTitle = document.createElement("h3");
    maleTitle.textContent = "Nos Mâles ";
    maleTitle.style.marginTop = "1rem";


ourRepro.insertAdjacentElement("beforeend", maleTitle);
ourRepro.insertAdjacentElement("beforeend", maleSection);


maleClass.forEach(elm => {

    let dogName = elm.dogName;
    let dogSex = elm.dogSex;
    let dogBirth = elm.dogBirth;
    let dogBreeder = elm.dogBreeder;
    let dogLitter = elm.dogLitter;

        /* Partie Infos du chien */

    let dogInfo = document.createElement("aside");
        dogInfo.classList.add("repro-info");
        dogInfo.classList.add("row");
        dogInfo.id = dogName + "-row";
        dogInfo.style.marginBottom = "40px";
        dogInfo.style.display = "flex";
        dogInfo.style.justifyContent = "space-evenly";
        dogInfo.style.alignItems = "center";

    let divInfo = document.createElement("div");
        divInfo.classList.add("dog-info");
        divInfo.classList.add("col-6");
        divInfo.classList.add("col-lg-4");

    let dogNamePrint = document.createElement("h2");
        dogNamePrint.textContent = dogName + dogBreeder;
    let dogSexPrint = document.createElement("p");
        dogSexPrint.textContent = dogSex;
    let dogBirthPrint = document.createElement("p");
        dogBirthPrint.textContent = "né le : " +  dogBirth;
    let dogLitterLink = document.createElement("a");
        dogLitterLink.href = "okkainaweeding.html";
        dogLitterLink.textContent = " Voir ses bébés";

        /* Partie Diapo */

    let lastButton = document.createElement("a");
        lastButton.classList.add("carousel-control-prev");
        lastButton.role = "button";
        lastButton.href = "#" + dogName + "-carousel";
        lastButton.dataset.slide = "prev";
    let lastButtonIco = document.createElement("span");
        lastButtonIco.classList.add("carousel-control-prev-icon");
    let lastButtonBack = document.createElement("span");
        lastButtonBack.classList.add("sr-only");
        lastButtonBack.textContent = "Précédent"

    let nextButton = document.createElement("a");
        nextButton.classList.add("carousel-control-next");
        nextButton.role = "button";
        nextButton.href = "#" + dogName + "-carousel";
        nextButton.dataset.slide = "next";
    let nextButtonIco = document.createElement("span");
        nextButtonIco.classList.add("carousel-control-next-icon");
    let nextButtonSwitch = document.createElement("span");
        nextButtonSwitch.classList.add("sr-only");
        nextButtonSwitch.textContent = "Suivant";

    let divDiapo = document.createElement("div");
        divDiapo.classList.add("diapo-dog");
        divDiapo.classList.add("col-6");
        divDiapo.classList.add("col-lg-5");
        divDiapo.style.display = "flex";
        divDiapo.style.justifyContent = "center";

    let divCarousel = document.createElement("div");
        divCarousel.classList.add("carousel");
        divCarousel.classList.add("slide");
        divCarousel.dataset.ride = "carousel";
        divCarousel.id = dogName + "-carousel";

    let divCarouselInner = document.createElement("div");
        divCarouselInner.classList.add("carousel-inner");

    imgArray = createImgArray(dogName);

        /* Insertions */

    maleSection.insertAdjacentElement("beforeend",dogInfo);
    dogInfo.appendChild(divInfo);
    divInfo.appendChild(dogNamePrint);
    divInfo.appendChild(dogSexPrint);
    divInfo.appendChild(dogBirthPrint);
    if(dogLitter === true)
    {
        divInfo.appendChild(dogLitterLink);
    }
    dogInfo.appendChild(divDiapo);

    divDiapo.appendChild(divCarousel);
    divCarousel.appendChild(divCarouselInner);
    imgArray.forEach(elm => {

        let divImg = document.createElement("div");
            divImg.classList.add("carousel-item");
            divImg.style.transitionDuration = "0s";
        let image = document.createElement("img");
            image.src = path + elm + jpg;
            image.classList.add("d-block");
            image.style.width = "auto";
            image.style.maxHeight = "299px";

           /* if (window.innerWidth < 1100)
            {
                image.style.height = "15%";
            }
            */

        divCarouselInner.appendChild(divImg);
        divImg.appendChild(image);
    });

    divCarouselInner.children[0].classList.add("active");

    divDiapo.appendChild(lastButton);
    lastButton.appendChild(lastButtonIco);
    lastButton.appendChild(lastButtonBack);

    divDiapo.appendChild(nextButton);
    nextButton.appendChild(nextButtonIco);
    nextButton.appendChild(nextButtonSwitch);


});