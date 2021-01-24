let fiche = document.getElementById("dog-card");
let image = document.getElementById("dog-card-img");
let info = document.getElementById("dog-info");

let figures = document.getElementsByClassName('vignet-dog');

const createBlock = (name) => {

    dogClass.forEach(elm => {
        if (elm.dogName.toLowerCase() === name)
        {
            fiche.classList.remove('card-hidden');
            info.children[0].textContent = ' ' + elm.dogName + '  ' + elm.dogBreeder;
            if (elm.dogSex === " ♂ mâle")
            {
                info.children[1].textContent = " Né le " + elm.dogBirth;
                info.children[2].classList.add("fa-mars");
            }
            else 
            {
                info.children[1].textContent = " Née le " + elm.dogBirth;
                info.children[2].classList.add("fa-venus");

            }
            info.children[0].classList.add("fa-paw");
            info.children[1].classList.add("fa-calendar-check");
            info.children[2].textContent = elm.dogSex;
            
            if (elm.dogLitter === true)
            {
                info.children[3].classList.remove("hidden");
                info.children[3].href = elm.dogName.toLowerCase() + '1.php';
            }
            else
            {
                info.children[3].classList.add("hidden");
            }
            
            info.children[4].rel = elm.dogName.toLowerCase();
            info.children[4].href = path + elm.dogName.toLowerCase() + '-pres' + jpg;

            image.src = path + elm.dogName.toLowerCase() + '-pres' + jpg;
            image.alt = elm.dogName;
        }
    });
}

const checkName = (name) => {
    dogClass.forEach(elm => {
        if (elm.dogName.toLowerCase() === name)
        {
            createBlock(name);
        }
    });
}

const figureIdCatch = (e) => {
    e.preventDefault();
    let figureId = "0";

    for (let i = 0; i < e.path.length; i++)
    {
        if (e.path[i].localName == 'a')
        {
            figureId = e.path[i].id;
            checkName(figureId);
        }
    }
}

for (let i = 0; i < figures.length; i++)
{
    figures[i].addEventListener("click", figureIdCatch);
}
