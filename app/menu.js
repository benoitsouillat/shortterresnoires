let nav = document.getElementById("nav");
let list = document.createElement("ul");
let index = document.createElement("a");
let puppy = document.createElement("a");
let repro = document.createElement("a");
let breed = document.createElement("a");
let contact = document.createElement("a");

list.id = "menu";

index.textContent = "Accueil";
index.id = "index-link";
index.href = "index.html";
index.classList.add("menu-link");

/* puppy.textContent = "Nos Chiots"; // A afficher quand il y aura des chiots
puppy.id = "puppy-link";
puppy.href = "puppy.html";
puppy.classList.add("menu-link"); */

repro.textContent = "Nos Reproducteurs";
repro.id = "repro-link";
repro.href = "ourrepro.html";
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
list.appendChild(index);
list.appendChild(repro);
// list.appendChild(puppy); A Afficher quand il y aura des chiots
list.appendChild(breed);
list.appendChild(contact);