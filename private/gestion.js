let addDogForm = document.getElementById("add-a-dog");
let addDogButton = document.getElementById("add-dog-button");


/* -------- Création de l'instance dog dans dogClass[] / femaleClass[] et maleClass[] /-----------*/

let newDogName = document.getElementById("add-a-dog-name");
let newDogBirth = document.getElementById("add-a-dog-birth");
let newDogSex = document.getElementById("add-a-dog-sexe");
let newDogBreeding = document.getElementById("add-a-dog-breeding");
let breed = "Cane Corso";
let litter = false;


const addDog = (e) => {

    e.preventDefault(); // Utile de le garder ??? Lorsque le code sera fonctionnel ?

    let n = dogClass.length;
    dogClass[n] = new dog(newDogName.value, newDogBirth.value, breed, newDogBreeding.value, newDogSex.value, litter);

    if (newDogSex.value === "Femelle")
    {
        let j = femaleClass.length;
        femaleClass[j] = new dog(newDogName.value, newDogBirth.value, breed, newDogBreeding.value, newDogSex.value, litter);
    }
    else if (newDogSex.value === "Mâle")
    {
        let j = maleClass.length;
        maleClass[j] = new dog(newDogName.value, newDogBirth.value, breed, newDogBreeding.value, newDogSex.value, litter);
    }
}

addDogButton.addEventListener("click", addDog);

/* ---------------------- Recevoir la dogClass en AJAX GET ----------------------------------- */

let maClass = [];

const parseArray = (infos) => {

    dogList = JSON.toParse(infos)
    let i = 0;
    dogList.forEach(elm => {
        maClass[i] = new dog(elm.dogName, elm.dogBirth, elm.dogBreed, elm.dogBreeder, elm.dogSex, elm.dogLitter);
        i++;
    });

}

//ajaxGet( ,parseArray);