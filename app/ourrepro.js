                                    /* Nos Reproducteurs */

let ourRepro = document.getElementById("our-repro");

let navDiapo = 0;


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
 
    if (nav < (dogArray.length - 1) && nav >= 0)
        imgToChange.src = path + dogArray[nav] + jpg;

        console.log(nav);

}


const actionClic = (e) => {

    let nav = 0;

    if (e.target.textContent.indexOf(" >> ") === 0)
    {
        nav = 1;
    }

    let dogNameChoose = e.target.parentNode.id;
    let dogName = dogNameChoose.slice(0, -6);
    let lastButton = document.getElementById(dogName + "-last-button");
    let nextButton = document.getElementById(dogName + "-next-button");


    let dogArray = [];
    dogArray = createImgArray(dogName);
    showDiapo(dogName, dogArray, nav);

   lastButton.addEventListener("click", function(){
       // if (nav > 0) 
        if (nav < 0) // Revoir les conditions de défilements
        {
            nav = 1;
        }
        nav -= 1;
        showDiapo(dogName, dogArray, nav);
      
   });
   nextButton.addEventListener("click", function(){

        //if (dogArray.length < (nav - 1)) Revoir les conditions de défilements
        if (nav < 0)
        {
            nav = -1;
        }

        nav += 1
        showDiapo(dogName, dogArray, nav);

    });


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

        /* Partie Infos du chien */

    let dogInfo = document.createElement("aside");
        dogInfo.classList.add("repro-info")
    let divInfo = document.createElement("div");
        divInfo.classList.add("dog-info");
    let dogNamePrint = document.createElement("h1");
        dogNamePrint.textContent = dogName + dogBreeder;
    let dogSexPrint = document.createElement("p");
        dogSexPrint.textContent = dogSex;
    let dogBirthPrint = document.createElement("p");
        dogBirthPrint.textContent = "née le : " +  dogBirth;

        /* Partie Diapo */


    let lastButton = document.createElement("button");
        lastButton.textContent = " << ";
        lastButton.id = dogName.toLowerCase() + "-last-button";
    let nextButton = document.createElement("button");
        nextButton.textContent = " >> ";
        nextButton.id = dogName.toLowerCase() + "-next-button";


    let divDiapo = document.createElement("div");
        divDiapo.classList.add("diapo-dog");
        divDiapo.id = dogName.toLowerCase() + "-diapo";

    let imgDiapo = document.createElement("img");
        imgDiapo.id = dogName.toLowerCase() + "-image";
        imgDiapo.src = path + images[0] + jpg;
        imgDiapo.classList.add("img-scaling");


        /* Insertions */

    femaleSection.insertAdjacentElement("beforeend",dogInfo);
    dogInfo.appendChild(divInfo);
    divInfo.appendChild(dogNamePrint);
    divInfo.appendChild(dogSexPrint);
    divInfo.appendChild(dogBirthPrint);
    dogInfo.appendChild(divDiapo);
    divDiapo.appendChild(lastButton);
    divDiapo.appendChild(imgDiapo);
    divDiapo.appendChild(nextButton);


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



    let dogInfo = document.createElement("aside");
    let dogNamePrint = document.createElement("h1");
        dogNamePrint.textContent = dogName + dogBreeder;
    let dogSexPrint = document.createElement("p");
        dogSexPrint.textContent = dogSex;
    let dogBirthPrint = document.createElement("p");
        dogBirthPrint.textContent = "née le : " +  dogBirth;





    maleSection.insertAdjacentElement("beforeend",dogInfo);
    dogInfo.appendChild(dogNamePrint);
    dogInfo.appendChild(dogSexPrint);
    dogInfo.appendChild(dogBirthPrint);
    
});