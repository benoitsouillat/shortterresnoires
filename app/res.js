
const breederNumber = "362026";
const affixeNumber = "92123";
const siretNumber = "871460644 00018";
const capacityNumber = "";
const breedName = "Le Domaine des Terres Noires";
const terresNoires = " du Domaine des Terres Noires";
const templeJade = " du Temple de Jade";
const diMunteanu = " Corso di Munteanu";
const caneCorso = " Cane Corso ";
const male = " Mâle";
const female = " Femelle";
const dispo = "y";
const reserv = "n";


/* Test Classes étendues avec des nom en Francais */

class chien {
    constructor(chienName, chienBirth, chienColor, chienSex, chienDad, chienMom) {
        this.chienName = chienName;
        this.chienBirth = chienBirth;
        this.chienColor = chienColor;
        this.chienSex = chienSex;
        this.chienDad = chienDad;
        this.chienMom = chienMom;

    }
    isMale() {
        if (this.chienSex === male)
            return true;
        return false;
    }
}
class lof extends chien {
    constructor(lofNumber, puceNumber) {
        this.lofNumber = lofNumber;
        this.puceNumber = puceNumber;
    }
}
class litter {
    constructor(puppyMom, puppyDad, puppyBirth, maleNumber, femaleNumber) {
        this.puppyMom = puppyMom;
        this.puppyDad = puppyDad;
        this.puppyBirth = puppyBirth;
        this.maleNumber = maleNumber;
        this.femaleNumber = femaleNumber;
    }
}

/* FIN des tests */

class dog {
    constructor(dogName, dogBirth, dogBreed, dogBreeder, dogSex, dogLitter, dogLitterOne, dogLitterPage) {

        this.dogName = dogName;
        this.dogBirth = dogBirth;
        this.dogBreed = dogBreed;
        this.dogBreeder = dogBreeder;
        this.dogSex = dogSex;
        this.dogLitter = dogLitter;
        this.dogLitterOne = dogLitterOne;
        this.dogLitterPage = dogLitterPage;
    }
}
class puppy {
    constructor(puppyBirth, puppySex, puppyColor, puppyNecklace, puppyProfil, puppyAvailable, puppyName) {
        this.puppyBirth = puppyBirth;
        this.puppySex = puppySex;
        this.puppyColor = puppyColor;
        this.puppyProfil = puppyProfil;
        this.puppyNecklace = puppyNecklace;
        this.puppyAvailable = puppyAvailable;
        this.puppyName = puppyName;
    }
    isPuppyMale() {
        if (this.puppySex === male)
            return true;
        return false;
    }
}

/* Okkaina 1 */

let male1 = new puppy("16 Novembre 2020", male, "Noir", "Vert", "vert4s006", reserv, "Riscott");
let male2 = new puppy("16 Novembre 2020", male, "Noir", "Rouge", "randy-joue", reserv, "Randy");
let male3 = new puppy("16 Novembre 2020", male, "Noir", "Bleu Foncé", "bleuf4s001", reserv, "Rod");
let male4 = new puppy("16 Novembre 2020", male, "Noir Bringé", "Bleu Clair", "ramses", reserv, "Ramsès");
let male5 = new puppy("16 Novembre 2020", male, "Bringé", "Marron", "marron4s002", reserv, "Raoul");
let male6 = new puppy("16 Novembre 2020", male, "Noir Bringé", "Jaune", "jaune4s001", reserv, "Reïko");
let male7 = new puppy("16 Novembre 2020", male, "Noir", "Beige", "beige", reserv, "Rosko");

/* Panama 1 */

let male11 = new puppy("7 Février 2021", male, "Bringé Gris", "Vert", "vert-j45", reserv, "Djo");
let male12 = new puppy("7 Février 2021", male, "Bringé Gris", "Rouge", "rouge-j45", reserv, "Sirius Kairos");
let male13 = new puppy("7 Février 2021", male, "Bringé Noir", "Bleu Clair", "bleuc-j45", reserv, "Scott");
let male14 = new puppy("7 Février 2021", male, "Bringé", "Jaune", "jaune-j45", reserv, "Sköll Amiral");
let male15 = new puppy("7 Février 2021", male, "Fauve", "Bleu Foncé", "bleuf-j45", reserv, "Socrate");

let female1 = new puppy("7 Février 2021", female, "Fauve", "Violet", "violet-j45", reserv, "Safari");
let female2 = new puppy("7 Février 2021", female, "Bringée", "Orange", "orange-j45", reserv, "Shanelle");
let female3 = new puppy("7 Février 2021", female, "Noire", "Rose Pâle", "rosepale-j45", reserv, "Sen");
let female4 = new puppy("7 Février 2021", female, "Bringée", "Beige", "beige-j45", reserv, "Sahara");
let female5 = new puppy("7 Février 2021", female, "Bringée", "Marron", "marron-j45", reserv, "Schoupa");
let female6 = new puppy("7 Février 2021", female, "Grise (Froment)", "Noir", "noir-j45", reserv, "Simone");
let female7 = new puppy("7 Février 2021", female, "Fauve", "Rose", "rose-j45", reserv, "S'Bunker");
let female8 = new puppy("7 Février 2021", female, "Fauve", "Aucun", "aucun-j45", reserv, "Stella");

/* Panama 2 */

let male16 = new puppy("14 Octobre 2021", male, "Bringé Noir", "Jaune", "jaune", reserv , " Skar ");                
let male17 = new puppy("14 Octobre 2021", male, "Froment", "Bleu", "bleu", reserv, " Stark ");                      
let male18 = new puppy("14 Octobre 2021", male, "Fauve", "Vert", "vert", reserv , " Soan ");                        
let female9 = new puppy("14 Octobre 2021", female, "Fauve", "Violet", "violet", reserv , " Selva ");                
let female10 = new puppy("14 Octobre 2021", female, "Bringée Noire", "Rose", "rose", reserv, " Stone ");            
let female11 = new puppy("14 Octobre 2021", female, "Bringée Noire", "Orange", "orange", reserv, " Samouraï ");     
let female12 = new puppy("14 Octobre 2021", female, "Froment", "Noir", "noir", reserv, " Shadow ");                 
let female13 = new puppy("14 Octobre 2021", female, "Bringée Noire", "Marron", "marron", reserv, " Sakura ");       
let female14 = new puppy("14 Octobre 2021", female, "Bringée Grise", "Aucun", "aucun", reserv  , " Shelby ");       


/* Okkaina 2 */

let male19 = new puppy("22 Avril 2022", male, "Bringé Noir", "Vert", "vert", reserv, "Tango");
let male20 = new puppy("22 Avril 2022", male, "Noir", "Cyan", "cyan", reserv, "Torx");
let male21 = new puppy("22 Avril 2022", male, "Noir", "Bleu", "bleu", reserv, "Tonnerre des Vents");
let male22 = new puppy("22 Avril 2022", male, "Noir", "Marron", "marron", reserv, "Toxic");
let male23 = new puppy("22 Avril 2022", male, "Bringé Noir", "Citron", "citron", reserv, "Thaï");
let male24 = new puppy("22 Avril 2022", male, "Bringé Noir", "Aucun", "aucun", reserv, "Tex");
let male25 = new puppy("22 Avril 2022", male, "Noir", "Rouge", "rouge", reserv, "Texas");
let female15 = new puppy("22 Avril 2022", female, "Noire", "Rose", "rose", reserv, "Tosca II");
let female16 = new puppy("22 Avril 2022", female, "Noire", "Orange", "orange", reserv, "Tsunami");
let female17 = new puppy("22 Avril 2022", female, "Noire", "violet", "violet", reserv, "Talisman");
let female18 = new puppy("22 Avril 2022", female, "Noire", "Fuschia", "fuschia", reserv, "Tornade de succès");
let female19 = new puppy("22 Avril 2022", female, "Noire", "Bordeaux", "bordeaux", reserv, "Tayka");
let female20 = new puppy("22 Avril 2022", female, "Noire", "Jaune", "jaune", reserv, "Tosca");



let okkainaLitterOne = [male1, male2, male3, male4, male5, male6, male7];
let panamaLitterOne = [male11, male12, male13, male14, male15, female1, female2, female3, female4, female5, female6, female7, female8];
let panamaLitterTwo = [male16, male17, male18, female9, female10, female11, female12, female13, female14];
let okkainaLitterTwo = [male25, male24, male21, male22, male23, male19, male20, female15, female16, female17, female18, female19, female20];

let okkaina = new dog("Okkaina", "10 Septembre 2018", caneCorso, templeJade, female, true, okkainaLitterTwo, "okkaina2");
let panama = new dog("Panama", "02 Juin 2019", caneCorso, templeJade, female, true, panamaLitterTwo, "panama2");
let raia = new dog("Raia", "28 Septembre 2020", caneCorso, templeJade, female, false, false, false);
let nixon = new dog("Nixon", "22 Août 2017", caneCorso, templeJade, male, false, false, false);
let rock = new dog("Rock", "18 Mars 2018", caneCorso, diMunteanu, male, false, false, false);
let safari = new dog("Safari", "7 Février 2021", caneCorso, terresNoires, female, false, false, false);
let tornade = new dog("Tornade", "22 Avril 2022", caneCorso, terresNoires, female, false, false, false);
let tsunami = new dog("Tsunami", "22 Avril 2022", caneCorso, terresNoires, female, false, false, false);
let tonnerre = new dog("Tonnerre", "22 Avril 2022", caneCorso, terresNoires, male, false, false, false);
let thelma = new dog("Thelma", "06 Juillet 2022", caneCorso, templeJade, female, false, false, false);
let paco = new dog("Paco", "22 Juillet 2019", caneCorso, 0, male, false, false, false);

let femaleClass = [okkaina, panama, raia, safari, tornade, tsunami, thelma];
let maleClass = [tonnerre];
let dogClass = femaleClass.concat(maleClass);


let path = "../src/img/";
let imgPath = "../src/img/";
let vidPath = "/src/vid/";
let jpg = ".jpg";
let mp4 = ".mp4";


/* -------------------------- News & Articles ---------------------------------- */
/*
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


/* Author 
let eva = " Eva Brochet. ";
let benoit = " Benoit Souillat. ";
let lesTerresNoires = " Les Terres Noires. ";

/* Article Description 

let textRockArrived = "Nous sommes ravis de l'arrivée de Rock parmi nos loulous. \n Bienvenue parmi nous Rock. \n Le voyage fût éprouvant" + 
" mais Rock s'est bien acclimaté et a fait connaissance avec Okkaina et Panama, nos deux autres Cane Corso, ainsi qu'avec nos Whippets et notre Jack \n" 
+ " Ce chien est un amour, et tout se passe très bien.";
let textExpoDompierre20 = "Nous avons effectué l'exposition CACS de Dompierre Sur Besbre 2020 ce " + formatDate("13/09/2020") + ". \n" + 
" Voici les résultats de l'exposition : ";
let textOkkainaMarried = "Bravo Okkaina";


/* Creating Instance 

let rockArrived = new article("rock-arrivee","Arrivée de Rock", "01/06/2020", textRockArrived, benoit, rock);
let expoDompierre20 = new article("dompierre-20","CACS Dompierre / Besbre", "13/09/2020", textExpoDompierre20, lesTerresNoires, panama);
let okkainaMarried = new article("mariage-okkaina","Mariage d'Okkaina et Rock", "10/10/2020", textOkkainaMarried, eva, okkaina);

let articles = [rockArrived, expoDompierre20, okkainaMarried];
*/

/* ---------------------- FANCYBOX ---------------------------- */

$(document).ready(function () {
    $(".fancybox").fancybox({
        fitToView: false,
        beforeShow: function () {
            this.width = '90%';
            this.height = 576;
        },

        openEffect: 'elastic',
        closeEffect: 'elastic',
    })

});
$(document).ready(function () {
    $(".fancyvid").fancybox({
        type: "iframe",
        minHeight: '90%',
    })
});