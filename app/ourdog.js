window.onload = function () {
    const cards = document.querySelectorAll('.vignet-dog');
    cards.forEach(card => {
        card.addEventListener('click', function () {
            const id = this.dataset.reproid;
            showReproCard(id);
        });
    });
};

let reproData = '';
let reprosWithPuppies = [];
let littersActive = [];
let reproImages = [];

const fetchRepro = (reproID, callback) => {
    fetch('../content/API/repros.php',
        {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                'reproID': reproID
            }),
        })
        .then(response => response.json())
        .then(data => {
            reproData = data.reproData;
            reprosWithPuppies = data.reprosWithPuppies;
            littersActive = data.littersActive;
            reproImages = data.reproImages;
            callback();
        })
        .catch(error => {
            console.error('Erreur lors de la requète fetch ' + error);
        })
}

const showReproCard = (id) => {
    fetchRepro(id, () => {
        let card = document.getElementById("dog-card");
        let cardImg = document.getElementById("dog-card-img");
        let cardDogName = document.getElementById("dog-card-name");
        let cardDogBirth = document.getElementById("dog-card-birth");
        let cardDogSex = document.getElementById("dog-card-sex");
        let cardDogBabyLink = document.getElementById('baby-link');

        let birthdate = new Date(reproData.birthdate);
        // Retirer la classe qui camoufle la carte
        card.classList.remove('card-hidden');
        //Entrer les données du chien dans la carte
        cardImg.src = reproData.mainImg;
        cardImg.alt = reproData.name;
        cardDogName.innerText = ' ' + reproData.name + ' ' + reproData.breeder;
        cardDogBirth.innerText = ' Né le : ' + birthdate.toLocaleString('fr-FR', {
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });
        // Définir si la carte est femelle ou mâle et affiche
        if (reproData.sex === 'Female') {
            cardDogSex.innerText = ' Femelle ';
            cardDogSex.classList.add('fa-venus');
            cardDogSex.classList.remove('fa-mars');
        }
        else {
            cardDogSex.innerText = ' Mâle ';
            cardDogSex.classList.remove('fa-venus');
            cardDogSex.classList.add('fa-mars');
        }

        // Affichage du bouton voir les chiots
        cardDogBabyLink.classList.add('hidden');
        reprosWithPuppies.forEach(repro => {
            if (repro.id === reproData.id) {
                cardDogBabyLink.classList.remove('hidden');
                littersActive.forEach(litter => {
                    if (litter.mother === reproData.id) {
                        cardDogBabyLink.href = '/content/Vues/weeding_litter.php?litterID=' + litter.litterId;
                    }
                });
            }
        });
        var albumButton = document.getElementById('album-photo');
        var modalDiapo = document.getElementById('modal-diapos');
        modalDiapo.dataset.dogId = id;

        var leftArrow = document.getElementById('left-arrow');
        var rightArrow = document.getElementById('right-arrow');

        var diapoDiv = document.getElementById('diapo-div');
        var imgContainer = document.getElementById('img-container');
        imgContainer.removeAttribute('class');
        imgContainer.classList.add('diapo', 'diapo-' + id)


        // Style pour adapté la longueur aux nombres d'images
        imgContainer.style.width = (reproImages.length * 100) + "%";

        // Affichage du bouton uniquement s'il y a des images et fonction d'affichage de la modale
        if (reproImages.length !== 0) {
            albumButton.classList.remove('hidden');

            // Suppresion de toutes les images qui ont pu être générées pour un autre Repro
            while (imgContainer.hasChildNodes()) {
                imgContainer.removeChild(imgContainer.firstChild);
            }

            // Génération des div contenant les images pour le diaporama
            reproImages.forEach(image => {
                div = document.createElement('div');
                div.classList.add('img-div')
                el = document.createElement('img');
                el.src = image.path;
                el.alt = "repro " + image.reproID;
                div.appendChild(el);
                imgContainer.appendChild(div);
            });
            // Ajout de la dernière image équivalente à la première
            lastImgDiv = document.createElement('div');
            lastImgDiv.classList.add('img-div');
            lastImg = document.createElement('img');
            lastImg.src = reproImages[0].path;
            lastImg.alt = reproData.name + ' ' + reproData.breeder;
            lastImgDiv.appendChild(lastImg);
            imgContainer.appendChild(lastImgDiv);

            leftArrow.children[0].classList.remove(leftArrow.children[0].classList[2]);
            rightArrow.children[0].classList.remove(rightArrow.children[0].classList[2]);
            leftArrow.children[0].classList.add('bi-caret-left-' + id);
            rightArrow.children[0].classList.add('bi-caret-right-' + id);

            albumButton.addEventListener('click', (e) => {
                // e.preventDefault();
                diapoDiv.classList.remove('hidden');
                modalDiapo.classList.remove('hidden');
                leftArrow.classList.remove('hidden');
                rightArrow.classList.remove('hidden');
                document.getElementById('grey-bg').classList.remove('hidden');
            });
            slider();
        }
        else {
            albumButton.classList.add('hidden');
        }
    });
}

const hideModal = () => {
    document.getElementById('diapo-div').classList.add('hidden');
    document.getElementById('modal-diapos').classList.add('hidden');
    document.getElementById('left-arrow').classList.add('hidden');
    document.getElementById('right-arrow').classList.add('hidden');
    document.getElementById('grey-bg').classList.add('hidden');
}
