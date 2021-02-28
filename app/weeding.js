let content = document.getElementById("weedings");

const createPart = (female, male, countLitter) => {


    let litterDate = document.createElement("h5");
        litterDate.classList.add("date-weeding");
    let puppyPath = './' + countLitter + '.php';

    if (female.dogLitter === true)
    {
        litterDate.textContent = "Chiots nés le " + female.dogLitterOne[0].puppyBirth ;
    }
    else 
    {
        litterDate.textContent = "Portée prévue le " + female.dogLitterOne[0];
    }
        
    let weedingPart = document.createElement("div");
        weedingPart.classList.add("div-weeding");
    let femaleSection = document.createElement("section");
        femaleSection.classList.add('female-weeding');
    let femaleTxtDiv = document.createElement("div");
        femaleTxtDiv.classList.add("txt-weeding");
    let femaleImgDiv = document.createElement("div");
        femaleImgDiv.classList.add("img-weeding")
    let maleSection = document.createElement("section");
        maleSection.classList.add('male-weeding');
    let maleTxtDiv = document.createElement("div");
        maleTxtDiv.classList.add("txt-weeding");
    let maleImgDiv = document.createElement("div");
        maleImgDiv.classList.add("img-weeding")

    let femaleImg = document.createElement("img");
        femaleImg.src = imgPath + female.dogName.toLowerCase() + "-pres" + jpg;
        femaleImg.alt = female.dogName.toLowerCase();
    let femaleName = document.createElement("h3");
        femaleName.textContent = female.dogName;
    let femaleBirth = document.createElement("p");
        femaleBirth.textContent = "née le : " + female.dogBirth;
    let femaleBreeder = document.createElement("p");
        femaleBreeder.textContent = "Issue " + female.dogBreeder;

    let maleImg = document.createElement("img");
        maleImg.src = imgPath + male.dogName.toLowerCase() + "16-09debout3" + jpg;
        maleImg.alt = female.dogName.toLowerCase();
    let maleName = document.createElement("h3");
        maleName.textContent = male.dogName;
    let maleBirth = document.createElement("p");
        maleBirth.textContent = "né le : " + male.dogBirth;
    let maleBreeder = document.createElement("p");
        maleBreeder.textContent = "Issu " + male.dogBreeder;

    let contentLink = document.createElement("div");
    let showPuppies = document.createElement('a');
    let separate = document.createElement("hr");
        separate.classList.add("separate-weeding")



    if (female.dogLitter === true) 
    {
            contentLink.classList.add("weeding-baby")
            showPuppies.href = puppyPath;
            showPuppies.role = "button";
            showPuppies.classList.add('btn');
            showPuppies.classList.add('btn-beige');
            showPuppies.classList.add('btn-lg');
            showPuppies.classList.add('btn__anim');
            showPuppies.textContent = "Voir les bébés";
            if (window.innerWidth < 1024) {
                showPuppies.classList.remove("btn-lg");
            }
    }

        content.appendChild(weedingPart);
        weedingPart.insertAdjacentElement("afterend", separate);
        weedingPart.insertAdjacentElement("afterend", litterDate);

    if (female.dogLitter === true)
    {
        weedingPart.insertAdjacentElement("afterend", contentLink);
        contentLink.appendChild(showPuppies);
    }

    
        weedingPart.appendChild(femaleSection);
        weedingPart.appendChild(maleSection);

        femaleSection.appendChild(femaleTxtDiv);
        femaleSection.appendChild(femaleImgDiv);
        femaleImgDiv.appendChild(femaleImg);
        femaleTxtDiv.appendChild(femaleName);
        femaleTxtDiv.appendChild(femaleBirth);
        femaleTxtDiv.appendChild(femaleBreeder);
        maleSection.appendChild(maleTxtDiv);
        maleSection.appendChild(maleImgDiv);
        maleImgDiv.appendChild(maleImg);
        maleTxtDiv.appendChild(maleName);
        maleTxtDiv.appendChild(maleBirth);
        maleTxtDiv.appendChild(maleBreeder);

}

createPart(panama, rock, 'panama1');
createPart(okkaina, rock, 'okkaina1');