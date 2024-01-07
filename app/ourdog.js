document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.vignet-dog');

    cards.forEach(card => {
        card.addEventListener('click', function () {
            const id = this.dataset.reproid;
            showReproCard(id);
        });
    });
});

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
        card.classList.remove('card-hidden');
        document.getElementById("dog-card-img").src = reproData.mainImg;
        document.getElementById("dog-card-img").alt = reproData.name;
        document.getElementById("dog-card-name").innerText = ' ' + reproData.name + ' ' + reproData.breeder;
        let birthdate = new Date(reproData.birthdate);

        document.getElementById("dog-card-birth").innerText = ' Né le : ' + birthdate.toLocaleString('fr-FR', {
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });

        // Définir si la carte est femelle ou mâle et affiche
        if (reproData.sex === 'Female') {
            document.getElementById("dog-card-sex").innerText = ' Femelle ';
            document.getElementById("dog-card-sex").classList.add('fa-venus');
            document.getElementById("dog-card-sex").classList.remove('fa-mars');
        }
        else {
            document.getElementById("dog-card-sex").innerText = ' Mâle ';
            document.getElementById("dog-card-sex").classList.remove('fa-venus');
            document.getElementById("dog-card-sex").classList.add('fa-mars');
        }

        // Affichage du bouton voir les chiots
        reprosWithPuppies.forEach(repro => {
            if (repro.id === reproData.id) {
                document.getElementById("baby-link").classList.remove('hidden');
                littersActive.forEach(litter => {
                    if (litter.mother === reproData.id) {
                        document.getElementById("baby-link").href = '/content/Vues/weeding_litter.php?litterID=' + litter.litterId;
                    }
                });
            }
        });

        albumButton = document.getElementById('album-photo');
        modalDiapo = document.getElementById('modal-diapos');
        modalDiapo.dataset.dogId = id;
        imgContainer = document.getElementById('img-container');
        imgContainer.classList.add('diapo')
        imgContainer.classList.add('diapo-' + id)


        // Style pour adapté la longueur aux nombres d'images
        imgContainer.style.width = (reproImages.length * 100) + "%";

        // Affichage du bouton uniquement s'il y a des images et fonction d'affichage de la modale
        if (reproImages != 0) {
            albumButton.classList.remove('hidden');
            albumButton.addEventListener('click', (e) => {
                e.preventDefault();
                modalDiapo.classList.remove('hidden');
            });

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

            if (reproImages.length > 1) {
                let arrowDiv = document.createElement('div');
                arrowDiv.classList.add('arrow-div');
                let leftButton = document.createElement('button');
                let rightButton = document.createElement('button');
                leftButton.classList.add('left-arrow');
                rightButton.classList.add('right-arrow');
                let leftSpan = document.createElement('span');
                let rightSpan = document.createElement('span');
                leftSpan.classList.add('bi', 'bi-caret-left', 'bi-caret-left-' + id, 'text-light');
                rightSpan.classList.add('bi', 'bi-caret-left', 'bi-caret-left-' + id, 'text-light');

                leftButton.appendChild(leftSpan);
                rightButton.appendChild(rightSpan);
                arrowDiv.appendChild(leftButton);
                arrowDiv.appendChild(rightButton);
                modalDiapo.appendChild(arrowDiv);
            }
        }
        else {
            albumButton.classList.add('hidden');
        }


    });
}


const hideModal = () => {
    modal = document.getElementById('modal-diapos');
    modal.classList.add('hidden');
}
