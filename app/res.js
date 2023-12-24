
const breederNumber = "362026";
const affixeNumber = "92123";
const siretNumber = "871460644 00026";
const capacityNumber = "";
const breedName = "Le Domaine des Terres Noires";
const terresNoires = " du Domaine des Terres Noires";
const templeJade = " du Temple de Jade";
const deessetemple = " des Déesses du Temple";
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
    getNecklaceColor() {
        let necklacesColor = ['rose', 'violet', 'rouge', 'bordeaux', 'orange', 'jaune', 'bleu', 'vert', 'noir', 'blanc', 'marron', 'cyan'];
        necklacesColor.forEach(color => {
            if (this.puppyNecklace.match(color)) {
                return ("Collier " + color);
            }
        }
        )
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

let male16 = new puppy("14 Octobre 2021", male, "Bringé Noir", "Jaune", "jaune", reserv, " Skar ");
let male17 = new puppy("14 Octobre 2021", male, "Froment", "Bleu", "bleu", reserv, " Stark ");
let male18 = new puppy("14 Octobre 2021", male, "Fauve", "Vert", "vert", reserv, " Soan ");
let female9 = new puppy("14 Octobre 2021", female, "Fauve", "Violet", "violet", reserv, " Selva ");
let female10 = new puppy("14 Octobre 2021", female, "Bringée Noire", "Rose", "rose", reserv, " Stone ");
let female11 = new puppy("14 Octobre 2021", female, "Bringée Noire", "Orange", "orange", reserv, " Samouraï ");
let female12 = new puppy("14 Octobre 2021", female, "Froment", "Noir", "noir", reserv, " Shadow ");
let female13 = new puppy("14 Octobre 2021", female, "Bringée Noire", "Marron", "marron", reserv, " Sakura ");
let female14 = new puppy("14 Octobre 2021", female, "Bringée Grise", "Aucun", "aucun", reserv, " Shelby ");


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


/* Raia 1 */

let female21 = new puppy("31 Juillet 2023", female, "Gris", "violet", "violet", reserv, "Uranie");
let female22 = new puppy("31 Juillet 2023", female, "Gris", "rose", "rose", reserv, "Une sacrée revanche");
let male26 = new puppy("31 Juillet 2023", male, "Gris", "noir", "noir", reserv, "Uhtred");

/* Panama 3 */

let female23 = new puppy("13 Août 2023", female, "Noire", "rose", "rose", reserv, "Ubysse");
let female24 = new puppy("13 Août 2023", female, "Froment", "femfro", "femfro", reserv, "Unité dites Ulka");
let female25 = new puppy("13 Août 2023", female, "Grise", "violet", "violet", reserv, "Urkane");
let female26 = new puppy("13 Août 2023", female, "Grise", "bordeaux", "bordeaux", reserv, "Uma");

let male27 = new puppy("13 Août 2023", male, "Fauve", "fauve", "fauve", reserv, "Ulk");
let male28 = new puppy("13 Août 2023", male, "Froment", "malfro", "malfro", reserv, "Ulky");
let male29 = new puppy("13 Août 2023", male, "Noir", "vert", "vert", reserv, "Urkov");
let male30 = new puppy("13 Août 2023", male, "Gris Bringé", "noir", "noir", reserv, "U'Bruce");
let male31 = new puppy("13 Août 2023", male, "Gris", "jaune", "jaune", reserv, "Un Optimus Prime");
let male32 = new puppy("13 Août 2023", male, "Gris", "bleu", "bleu", reserv, "Uppercut");
let male33 = new puppy("13 Août 2023", male, "Gris Bringé", "orange", "orange", reserv, "Ulysse");


/* Safari 1 */

let female27 = new puppy("26 Novembre 2023", female, "Noire", "jaune", "jaune", dispo, "");
let female28 = new puppy("26 Novembre 2023", female, "Bringée Noire", "violet", "violet", dispo, "");
let female29 = new puppy("26 Novembre 2023", female, "Grise", "rose", "rose", dispo, "");
let female30 = new puppy("26 Novembre 2023", female, "Bringée Rouge-Cerf", "orange", "orange", dispo, "");
let female31 = new puppy("26 Novembre 2023", female, "Grise", "bordeaux", "bordeaux", reserv, "Utopie");
let female32 = new puppy("26 Novembre 2023", female, "Noire", "marron", "marron", dispo, "");
let female33 = new puppy("26 Novembre 2023", female, "Noire", "femaucun", "femaucun", 0, "");
let female34 = new puppy("26 Novembre 2023", female, "Grise", "noir", "noir", reserv, "Unity");

let male34 = new puppy("26 Novembre 2023", male, "Noir", "vert", "vert", reserv, "");
let male35 = new puppy("26 Novembre 2023", male, "Bringé Noir", "malaucun", "malaucun", dispo, "");
let male36 = new puppy("26 Novembre 2023", male, "Bringé Noir", "bleu", "bleu", reserv, "");
let male37 = new puppy("26 Novembre 2023", male, "Bringé Noir", "rouge", "rouge", dispo, "");
let male38 = new puppy("26 Novembre 2023", male, "Bringé Noir", "blanc", "blanc", dispo, "");



let okkainaLitterOne = [male1, male2, male3, male4, male5, male6, male7];
let panamaLitterOne = [male11, male12, male13, male14, male15, female1, female2, female3, female4, female5, female6, female7, female8];
let panamaLitterTwo = [male16, male17, male18, female9, female10, female11, female12, female13, female14];
let okkainaLitterTwo = [male25, male24, male21, male22, male23, male19, male20, female15, female16, female17, female18, female19, female20];
let raiaLitterOne = [female21, female22, male26];
let panamaLitterThree = [female23, female24, female25, female26, male27, male28, male29, male30, male31, male32, male33];
let safariLitterOne = [male34, male35, male36, male37, male38, female27, female28, female29, female30, female31, female32, female33, female34];

let okkaina = new dog("Okkaina", "10 Septembre 2018", caneCorso, templeJade, female, true, okkainaLitterTwo, "okkaina2");
let panama = new dog("Panama", "02 Juin 2019", caneCorso, templeJade, female, true, panamaLitterThree, "panama3");
let raia = new dog("Raia", "28 Septembre 2020", caneCorso, templeJade, female, true, raiaLitterOne, "raia1");
let nixon = new dog("Nixon", "22 Août 2017", caneCorso, templeJade, male, false, false, false);
let rock = new dog("Rock", "18 Mars 2018", caneCorso, diMunteanu, male, false, false, false);
let safari = new dog("Safari", "7 Février 2021", caneCorso, terresNoires, female, true, safariLitterOne, "safari1");
let tornade = new dog("Tornade", "22 Avril 2022", caneCorso, terresNoires, female, false, false, false);
let tsunami = new dog("Tsunami", "22 Avril 2022", caneCorso, terresNoires, female, false, false, false);
let tonnerre = new dog("Tonnerre", "22 Avril 2022", caneCorso, terresNoires, male, false, false, false);
//let thelma = new dog("Thelma", "06 Juillet 2022", caneCorso, templeJade, female, false, false, false);
let paco = new dog("Paco", "22 Juillet 2019", caneCorso, 0, male, false, false, false);
let poyel = new dog("Poyel", "07 Août 2019", caneCorso, deessetemple, male, false, false, false);

let femaleClass = [okkaina, panama, raia, safari, tornade, tsunami];
let maleClass = [tonnerre, nixon];
let dogClass = femaleClass.concat(maleClass);


let path = "../src/img/";
let imgPath = "../src/img/";
let vidPath = "/src/vid/";
let jpg = ".jpg";
let mp4 = ".mp4";

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