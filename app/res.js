
const breederNumber = "362026";
const affixeNumber = "92123";
const siretNumber = "";
const capacityNumber = "";
const breedName = "Le Domaine des Terres Noires";
const terresNoires = " du Domaine des Terres Noires";
const templeJade = " du Temple de Jade";
const diMunteanu = " Corso di Munteanu";
const caneCorso = " Cane Corso ";

class litter {
    constructor (puppyMom, puppyDad, puppyBirth, maleNumber, femaleNumber)
    {
        this.puppyMom = puppyMom;
        this.puppyDad = puppyDad;
        this.puppyBirth = puppyBirth;
        this.maleNumber = maleNumber;
        this.femaleNumber = femaleNumber;
    }
}

class dog {
    constructor(dogName, dogBirth, dogBreed, dogBreeder, dogSex, dogLitter, dogLitterOne){

    this.dogName = dogName;
    this.dogBirth = dogBirth;
    this.dogBreed = dogBreed;
    this.dogBreeder = dogBreeder;
    this.dogSex = dogSex;
    this.dogLitter = dogLitter;
    this.dogLitterOne = dogLitterOne;
    }
}

class puppy {
    constructor ( puppyBirth, puppySex, puppyColor, puppyNecklace, puppyProfil, puppyAvailable, puppyName)
    {
        this.puppyBirth = puppyBirth;
        this.puppySex = puppySex;
        this.puppyColor = puppyColor;
        this.puppyProfil = puppyProfil;
        this.puppyNecklace = puppyNecklace;
        this.puppyAvailable = puppyAvailable;
        this.puppyName = puppyName;
    }
}


let male1 = new puppy("16 Novembre 2020", " ♂ mâle", "Noir", "Vert", "vert4s006", "n", "Riscott");
let male2 = new puppy("16 Novembre 2020", " ♂ mâle", "Noir", "Rouge", "rouge001", "n", "Randy");
let male3 = new puppy("16 Novembre 2020", " ♂ mâle", "Noir", "Bleu Foncé", "bleuf4s001", "n", "Rod");
let male4 = new puppy("16 Novembre 2020", " ♂ mâle", "Noir Bringé", "Bleu Clair", "bleuc4s003", "n", "Ramsès");
let male5 = new puppy("16 Novembre 2020", " ♂ mâle", "Bringé", "Marron", "marron4s002", "n", "Raoul");
let male6 = new puppy("16 Novembre 2020", " ♂ mâle", "Noir Bringé", "Jaune", "jaune4s001","n", "Reïko");
let male7 = new puppy("16 Novembre 2020", " ♂ mâle", "Noir", "Beige", "beige4s002","n", "Rosko");

let okkainaLitterOne = [male1, male2, male3, male4, male5, male6, male7];
let panamaLitterOne = ["12 Février 2021"];

let okkaina = new dog ("Okkaina", "10 Septembre 2018", caneCorso, templeJade, " ♀ femelle", true, okkainaLitterOne);
let panama = new dog ("Panama", "02 Juin 2019", caneCorso, templeJade, " ♀ femelle", false, panamaLitterOne);
let rock = new dog ("Rock", "18 Mars 2018", caneCorso, diMunteanu, " ♂ mâle", false, false);

let dogClass = [okkaina, panama, rock];
let femaleClass = [okkaina, panama];
let maleClass = [rock];


let path = "../src/img/";
let images = ["okkaina1", "okkaina2", "okkaina3",
"okkaina4", "okkaina5", "okkaina7", "okkaina8", //"okkaina9",
"okkaina10", "okkaina11",
"panama1", "panama2","panama3", "panama4", "panama5", "panama6", "panama7",
"panama8",
"okkainapanama", "rock16-9couché", "rockface", "rock3", "rock4", "rock5", "rock6", "rockprofil", 
"rockpropuls", "rocktete",
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


/* --------------------------- Generating Footer --------------------- */

const generateFooter = () => {
    let body = document.body;
    let footer = document.createElement('footer');
    let footerContainer = document.createElement('div');
    let paraThanks = document.createElement('p');
        paraThanks.id = "footer-merci";
        paraThanks.innerHTML = "<b>Merci d'avoir visité notre site</b><br/><b>Passez une excellente journée</b>";
    let paraCopyright = document.createElement('p');
        paraCopyright.id = "footer-copyright";
        paraCopyright.innerHTML = "<u>Photos : </u><br/><i>Cathy Thouvenin</i><br/><i>Eva Brochet</i><br/><i>Benoit Souillat</i><br/> <i>© Reproduction Interdite</i>";
    let paraSign = document.createElement('p');
        paraSign.id = "footer-signature";
        paraSign.innerHTML = "Eva Brochet - Eleveuse Canin <br/> Titulaire du Baccalauréat : Conduite et Gestion dans le secteur élevage Canin et Félin <br/> Titulaire du Brevet Professionnel Agricole : Travaux en élevage Canin et Félin<br/> N°Eleveur : 362026 - N°Affixe : 92123 <br/><i>Textes, vidéos et photos tous droits réservés pour tous pays</i>";

    body.insertAdjacentElement("beforeend", footer);
    footer.appendChild(footerContainer);
    footerContainer.appendChild(paraThanks);
    footerContainer.appendChild(paraCopyright);
    footerContainer.appendChild(paraSign);

}


/* ---------------------- FANCYBOX ---------------------------- */

$(document).ready(function() {
    $(".fancybox").fancybox({
        fitToView: false,
        beforeShow: function () {
            this.width = '90%';
            this.height = 576;
        },

        openEffect	: 'elastic',
    	closeEffect	: 'elastic',

    });
});