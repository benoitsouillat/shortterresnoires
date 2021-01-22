let content = document.getElementById("weedings");

const createPart = (female, male, countLitter) => {


    let litterDate = document.createElement("h5");
        litterDate.style.textAlign = "right";
        litterDate.style.marginBottom = "4rem";
        litterDate.style.marginRight = "3rem";
    let puppyPath = './' + countLitter + '.php';



    if (female.dogLitter === true)
    {
        litterDate.textContent = "Chiots nés le " + female.dogLitterOne[0].puppyBirth ;
    }
    else 
    {
        litterDate.textContent = "Portée prévue le " + female.dogLitterOne[0];
    }
        
        let weedingPart = document.createElement("aside");
            weedingPart.classList.add("aside-weeding");
        let femaleDiv = document.createElement("div");
            femaleDiv.classList.add('female-weeding');
        let maleDiv = document.createElement("div");
            maleDiv.classList.add('male-weeding');

        let femaleImg = document.createElement("img");
            femaleImg.src = path + female.dogName.toLowerCase() + "-pres" + jpg;
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
    let showPuppies = document.createElement('a');
    let separate = document.createElement("hr");
        separate.style.backgroundColor = "white";
        separate.style.width = "50%";



    if (female.dogLitter === true) 
    {
            contentLink.classList.add("row");
            contentLink.classList.add("justify-content-around");
            contentLink.style.marginBottom = "50px"
            showPuppies.href = puppyPath;
            showPuppies.role = "button";
            showPuppies.classList.add('btn');
            showPuppies.classList.add('btn-beige');
            showPuppies.classList.add('btn-lg');
            showPuppies.classList.add('btn__anim');
            showPuppies.textContent = "Voir les bébés";
    }


        content.appendChild(weedingPart);
        weedingPart.insertAdjacentElement("afterend", separate);
        weedingPart.insertAdjacentElement("afterend", litterDate);

    if (female.dogLitter === true)
    {
        weedingPart.insertAdjacentElement("afterend", contentLink);
        contentLink.appendChild(showPuppies);
    }

    
        weedingPart.appendChild(femaleDiv);
        weedingPart.appendChild(maleDiv);
        femaleDiv.appendChild(femaleImg);
        femaleDiv.appendChild(femaleName);
        femaleDiv.appendChild(femaleBirth);
        femaleDiv.appendChild(femaleBreeder);
        maleDiv.appendChild(maleImg);
        maleDiv.appendChild(maleName);
        maleDiv.appendChild(maleBirth);
        maleDiv.appendChild(maleBreeder);

}

createPart(panama, rock, 'panama1');
createPart(okkaina, rock, 'okkaina1');