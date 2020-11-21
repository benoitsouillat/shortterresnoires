let nav = document.getElementById("nav");
let list = document.createElement("ul");
let accueil = document.createElement("a");
let accueilIco = document.createElement("img");
let index = document.createElement("a");
let puppies = document.createElement("a");
let repro = document.createElement("a");
let breed = document.createElement("a");
let contact = document.createElement("a");

list.id = "menu";

accueil.href = "../index.html";
accueil.classList.add("menu-link");

accueilIco.src = "../src/img/home.png";
accueilIco.style.width = "21px";

index.textContent = "Accueil";
index.id = "index-link";
index.href = "index.html";
index.classList.add("menu-link");

puppies.textContent = "Nos Chiots"; 
puppies.id = "puppy-link";
puppies.href = "weeding.php";
puppies.classList.add("menu-link"); 

repro.textContent = "Nos Reproducteurs";
repro.id = "repro-link";
repro.href = "ourdog.html";
repro.classList.add("menu-link");

breed.textContent = "Le Cane Corso";
breed.id = "breed-link";
breed.href = "breed.html";
breed.classList.add("menu-link");

contact.textContent = "Nous Contacter";
contact.id = "contact-link";
contact.href = "contact.html";
contact.classList.add("menu-link");


nav.appendChild(list);
list.appendChild(accueil);
accueil.appendChild(accueilIco);
list.appendChild(index);
list.appendChild(repro);
list.appendChild(puppies); 
list.appendChild(breed);
list.appendChild(contact);
