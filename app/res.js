const breedName = "Le Domaine des Terres Noires";
const terresNoires = "du domaine des terres noires";
const templeJade = " du temple de jade";
const diMunteanu = " Corso di munteanu";
const caneCorso = " Cane Corso ";

class dog {
    constructor(dogName, dogBirth, dogBreed, dogBreeder, dogSex, dogLitter){

    this.dogName = dogName;
    this.dogBirth = dogBirth;
    this.dogBreed = dogBreed;
    this.dogBreeder = dogBreeder;
    this.dogSex = dogSex;
    this.dogLitter = dogLitter;
    }
}

let okkaina = new dog ("Okkaina", "10 Septembre 2018", caneCorso, templeJade, " ♀ femelle", false);
let panama = new dog ("Panama", "02 Juin 2019", caneCorso, templeJade, " ♀ femelle", false);
let rock = new dog ("Rock", "18 Mars 2018", caneCorso, diMunteanu, " ♂ mâle", false);

let dogClass = [okkaina, panama, rock];
let femaleClass = [okkaina, panama];
let maleClass = [rock];

let path = "../src/img/";
let images = ["okkaina1", "okkaina2", "okkaina3",
"okkaina4", "okkaina5", "okkaina6", "okkaina7", "okkaina8", //"okkaina9",
"okkaina10", "okkaina11",
"panama1", "panama2","panama3", "panama4", "panama5", "panama6", 
"okkainapanama", "rock1", "rock2", "rock3", "rock4", "rock5",
"okkainarock", "irréelle1", "nuit d'étoiles1"];
let jpg = ".jpg";



/* -------------------------- News & Articles ---------------------------------- */

formatDate = (value) => {

    let year = value.substr(6, 4);
    let month = value.substr(3, 2);
    let day = value.substr(0, 2);
    month--;

    let date = new Date(year, month, day);
    let dateReturn = date.toLocaleString('fr-FR', {
        weekday: 'long',
        day: 'numeric',
        month: 'long',
        year: 'numeric'
    });
    return dateReturn;
}

class article {
    constructor(artId, artTitle, artDate, artDescription, artAuthor, artDog)
    {
        this.artId = artId;
        this.artTitle = artTitle;
        this.artDate = formatDate(artDate);
        this.artDescription = artDescription;
        this.artAuthor = artAuthor;
        this.artDog = artDog;
    }
}


/* Author */
let eva = " Eva Brochet. ";
let benoit = " Benoit Souillat. ";
let lesTerresNoires = " Les Terres Noires. ";

/* Article Description */

let textRockArrived = "Nous sommes ravis de l'arrivée de Rock parmi nos loulous. \n Bienvenue parmi nous Rock. \n Le voyage fût éprouvant" + 
" mais Rock s'est bien acclimaté et a fait connaissance avec Okkaina et Panama, nos deux autres Cane Corso, ainsi qu'avec nos Whippets et notre Jack \n" 
+ " Ce chien est un amour, et tout se passe très bien.";
let textExpoDompierre20 = "Nous avons effectué l'exposition CACS de Dompierre Sur Besbre 2020 ce " + formatDate("13/09/2020") + ". \n" + 
" Voici les résultats de l'exposition : ";
let textOkkainaMarried = "Bravo Okkaina";


/* Creating Instance */

let rockArrived = new article("rock-arrivee","Arrivée de Rock", "01/06/2020", textRockArrived, benoit, rock);
let expoDompierre20 = new article("dompierre-20","CACS Dompierre / Besbre", "13/09/2020", textExpoDompierre20, lesTerresNoires, panama);
let okkainaMarried = new article("mariage-okkaina","Mariage d'Okkaina et Rock", "10/10/2020", textOkkainaMarried, eva, okkaina);

let articles = [rockArrived, expoDompierre20, okkainaMarried];


