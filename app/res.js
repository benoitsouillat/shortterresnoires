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
let rock = new dog ("Rock", "18 Mars 2018", caneCorso, diMunteanu, " ♂ mâle", true);

let dogClass = [okkaina, panama, rock];
let femaleClass = [okkaina, panama];
let maleClass = [rock];

let path = "../src/img/";
let images = ["okkaina1", "okkaina2", "okkaina3", 
"okkaina4", "okkaina5", "okkaina6", "okkaina7", "okkaina8", "okkaina9",
"okkaina10", "okkaina11",
"panama1", "panama2","panama3", "panama4", "panama5", "panama6", 
"okkainapanama", "rock1", "rock2", "rock3", "rock4", "rock5",
"okkainarock", "irréelle1", "nuit d'étoiles1"];
let jpg = ".jpg";