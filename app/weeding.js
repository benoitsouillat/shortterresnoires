let content = document.getElementById("weedings");

const createPart = (female, male, countLitter) => {

    let litterDate = document.createElement("h5");
        litterDate.textContent = "Chiots nés le 16 Novembre 2020 ";
        litterDate.style.textAlign = "right";
        litterDate.style.marginBottom = "3rem";

    let puppyPath = './' + countLitter + '.php';
    
    let aside = document.createElement("aside");
        aside.classList.add("aside-weeding");
    let femaleDiv = document.createElement("div");
        femaleDiv.classList.add('female-weeding');
    let maleDiv = document.createElement("div");
        maleDiv.classList.add('male-weeding');

    let femaleImg = document.createElement("img");
        femaleImg.src = path + female.dogName.toLowerCase() + " 16-9" + jpg;
    let femaleName = document.createElement("h3");
        femaleName.textContent = female.dogName;
    let femaleBirth = document.createElement("p");
        femaleBirth.textContent = "née le : " + female.dogBirth;
    let femaleBreeder = document.createElement("p");
        femaleBreeder.textContent = "Issue " + female.dogBreeder;

    let maleImg = document.createElement("img");
        maleImg.src = path + male.dogName.toLowerCase() + "16-09debout3" + jpg;
    let maleName = document.createElement("h3");
        maleName.textContent = male.dogName;
    let maleBirth = document.createElement("p");
        maleBirth.textContent = "né le : " + male.dogBirth;
    let maleBreeder = document.createElement("p");
        maleBreeder.textContent = "Issu " + male.dogBreeder;

    let contentLink = document.createElement("div");
        contentLink.classList.add("row");
        contentLink.classList.add("justify-content-center");
    let showPuppies = document.createElement('a');
        showPuppies.href = puppyPath;
    let showPuppiesBtn = document.createElement('button');
        showPuppiesBtn.type = "button";
        showPuppiesBtn.classList.add("btn");
        showPuppiesBtn.classList.add("btn-beige");
        showPuppiesBtn.classList.add("btn-lg");
        showPuppiesBtn.textContent = "Voir les bébés";


    content.appendChild(aside);
    aside.insertAdjacentElement("afterend", litterDate);
    aside.insertAdjacentElement("afterend", contentLink);
    contentLink.appendChild(showPuppies);
    showPuppies.appendChild(showPuppiesBtn);
    aside.appendChild(femaleDiv);
    aside.appendChild(maleDiv);
    femaleDiv.appendChild(femaleImg);
    femaleDiv.appendChild(femaleName);
    femaleDiv.appendChild(femaleBirth);
    femaleDiv.appendChild(femaleBreeder);
    maleDiv.appendChild(maleImg);
    maleDiv.appendChild(maleName);
    maleDiv.appendChild(maleBirth);
    maleDiv.appendChild(maleBreeder);

}

createPart(okkaina, rock, 'okkaina1');