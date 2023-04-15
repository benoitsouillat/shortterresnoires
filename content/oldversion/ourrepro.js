                                    /* Nos Reproducteurs */

let ourRepro = document.getElementById("our-repro");

const reformingImg = (dogName) => {

    let img = document.getElementById(dogName + "-image");
    let button = document.getElementById(dogName + "-next-button");
    let div = document.getElementById(dogName + "-diapo");

    let buttonValue = getComputedStyle(button);
    let divValue = getComputedStyle(div);

    let buttonValueW = buttonValue.width.slice(0, -2);
    let divValueW = divValue.width.slice(0, -2);

    img.style.maxWidth =  divValueW - (buttonValueW * 2 ) + 'px';

    if(window.innerWidth >= 840)
    {
        div.style.height = '330' + 'px';
        img.style.height = "330px";
    }
    else if(window.innerWidth < 840)
    {
        div.style.height = '170px';
        img.style.height = "170px";
    }
    console.log(window.innerWidth);


}


const createImgArray = (dogName) => {

    let dogArray = [];
    let j = 0;

    for (let i in images)
    {
        if (images[i].indexOf(dogName) >= 0)
        {
            dogArray[j] = images[i];
            j++
        }
    }
    return dogArray;

}

const showDiapo = (dogName, dogArray, nav) => {

    let imgToChange = document.getElementById(dogName + "-image");
 
    if (nav <= (dogArray.length - 1) && nav >= 0)
        imgToChange.src = path + dogArray[nav] + jpg;

}

const defilate = (dogName, dogArray, nav) => {

    let lastButton = document.getElementById(dogName + "-last-button");
    let nextButton = document.getElementById(dogName + "-next-button");

        lastButton.addEventListener("click", function(){

                if (nav === 1) 
                {
                    nav = 0;
                }
                else if ( nav > 1)
                {
                    nav -= 1;

                }
                showDiapo(dogName, dogArray, nav);
            
        });
        nextButton.addEventListener("click", function(){
        
                if (nav === 0)
                {
                    nav = 1;
                }
                else if (nav === (dogArray.length - 1))
                {
                    nav = dogArray.length - 1;
                }
                else
                {
                    nav += 1
                }

                showDiapo(dogName, dogArray, nav);
        
            });
}

const actionClic = (e) => {

    let nav = 0;

    if (e.target.textContent.indexOf(" >> ") === 0)
    {
        nav = 1;
    }

    let dogNameChoose = e.target.parentNode.id;
    let dogName = dogNameChoose.slice(0, -6);
    let dogArray = [];
    dogArray = createImgArray(dogName);
    showDiapo(dogName, dogArray, nav);
    defilate(dogName,dogArray, nav);

}


                    /* Les Femelles */

let femaleSection = document.createElement("section");
let femaleTitle = document.createElement("h3");
    femaleTitle.textContent = "Nos Femelles ";

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
    let divInfo = document.createElement("div");
        divInfo.classList.add("dog-info");
    let dogNamePrint = document.createElement("h2");
        dogNamePrint.textContent = dogName + dogBreeder;
    let dogSexPrint = document.createElement("p");
        dogSexPrint.textContent = dogSex;
    let dogBirthPrint = document.createElement("p");
        dogBirthPrint.textContent = "née le : " +  dogBirth;
    let dogLitterLink = document.createElement("a");
        dogLitterLink.href = "okkainaweeding.html";
        dogLitterLink.textContent = " Voir ses bébés";

        /* Partie Diapo */


    let lastButton = document.createElement("button");
        lastButton.textContent = " << ";
        lastButton.id = dogName.toLowerCase() + "-last-button";
        lastButton.classList.add("diapo-button");
    let nextButton = document.createElement("button");
        nextButton.textContent = " >> ";
        nextButton.id = dogName.toLowerCase() + "-next-button";
        nextButton.classList.add("diapo-button");

    let divDiapo = document.createElement("div");
        divDiapo.classList.add("diapo-dog");
        divDiapo.id = dogName.toLowerCase() + "-diapo";


    let imgDiapo = document.createElement("img");
        imgDiapo.id = dogName.toLowerCase() + "-image";
        imgDiapo.src = path + dogName.toLowerCase() + "1" + jpg;

    /*let clicky = document.createElement("p");
        clicky.textContent = " Cliquez pour défiler. ";
        clicky.classList.add("clicky-flex-align");*/



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
    divDiapo.appendChild(lastButton);
    divDiapo.appendChild(imgDiapo);
    divDiapo.appendChild(nextButton);
    //dogInfo.appendChild(clicky);


lastButton.addEventListener("click", actionClic, {once:true});
nextButton.addEventListener("click", actionClic, {once:true});

});

                    /* Les Mâles */


let maleSection = document.createElement("section");
let maleTitle = document.createElement("h3");
    maleTitle.textContent = "Nos Mâles ";

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
        dogInfo.classList.add("repro-info")
    let divInfo = document.createElement("div");
        divInfo.classList.add("dog-info");
    let dogNamePrint = document.createElement("h2");
        dogNamePrint.textContent = dogName + dogBreeder;
    let dogSexPrint = document.createElement("p");
        dogSexPrint.textContent = dogSex;
    let dogBirthPrint = document.createElement("p");
        dogBirthPrint.textContent = "née le : " +  dogBirth;
    let dogLitterLink = document.createElement("a");
        dogLitterLink.href = "okkainaweeding.html";
        dogLitterLink.textContent = " Voir ses bébés";


        /* Partie Diapo */


    let lastButton = document.createElement("button");
        lastButton.textContent = " << ";
        lastButton.id = dogName.toLowerCase() + "-last-button";
        lastButton.classList.add("diapo-button");
    let nextButton = document.createElement("button");
        nextButton.textContent = " >> ";
        nextButton.id = dogName.toLowerCase() + "-next-button";
        nextButton.classList.add("diapo-button");



    let divDiapo = document.createElement("div");
        divDiapo.classList.add("diapo-dog");
        divDiapo.id = dogName.toLowerCase() + "-diapo";

    let imgDiapo = document.createElement("img");
        imgDiapo.id = dogName.toLowerCase() + "-image";
        imgDiapo.src = path + dogName.toLowerCase() + "1" + jpg;

   /* let clicky = document.createElement("p");
        clicky.textContent = " Cliquez pour défiler. ";
        clicky.classList.add("clicky-flex-align"); */


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
    divDiapo.appendChild(lastButton);
    divDiapo.appendChild(imgDiapo);
    divDiapo.appendChild(nextButton);
   // divDiapo.appendChild(clicky);


lastButton.addEventListener("click", actionClic, {once:true});
nextButton.addEventListener("click", actionClic, {once:true});

});

dogClass.forEach(elm => {
    reformingImg(elm.dogName.toLowerCase());
})