let body = document.getElementById('page-mail');

let retour = document.createElement("a");
    retour.href="/contenu/contact.php";
    retour.textContent="Revenir au site";
    retour.classList.add("btn");
    retour.classList.add("btn-pink");
    retour.classList.add("btn-mail");

    
    
    
body.appendChild(retour);