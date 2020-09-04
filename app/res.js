const breedName = "Le Domaine des Terres Noires";
const terresNoires = "du domaine des terres noires";
const templeJade = " du temple de jade";
const diMunteanu = " Cane di munteanu";
const caneCorso = " Cane Corso ";

class dog {
    constructor(dogName, dogBirth, dogBreed, dogBreeder, dogSex){

    this.dogName = dogName;
    this.dogBirth = dogBirth;
    this.dogBreed = dogBreed;
    this.dogBreeder = dogBreeder;
    this.dogSex = dogSex;
    }
}

let okkaina = new dog ("Okkaina", "10 Septembre 2018", caneCorso, templeJade, " ♀ femelle");
let panama = new dog ("Panama", "02 Juin 2019", caneCorso, templeJade, " ♀ femelle");
let rock = new dog ("Rock", "18 Mars 2018", caneCorso, diMunteanu, " ♂ mâle");

let dogClass = [okkaina, panama, rock];
let femaleClass = [okkaina, panama];
let maleClass = [rock];

let path = "../src/img/";
let images = ["okkaina1", "okkaina2", "okkaina3", "okkaina4", "okkainapanama", "panama1", "panama2","panama3", "panama4", "rock1", "rock2", "rock3", "irréelle1", "nuit d'étoiles1"];
let jpg = ".jpg";