class Slider {
    constructor(
        compteur = 0,
        dogId = 0,
        elements = null,
        slides = null,
    ) {
        this.compteur = compteur;
        this.dogId = dogId;
        this.elements = elements;
        this.slides = slides;
        this.length = slides.length;
        this.transform = elements.style.transform;
    }

    // slide(direction) {
    //     return () => {
    //         this.adjustCompteur(direction);
    //         this.activeTransition();
    //         this.updateTransform();
    //         this.checkBoundary();
    //     };
    // }

    // adjustCompteur(direction) {
    //     this.compteur += direction;
    //     if (this.compteur < 0) this.compteur = this.length;
    //     if (this.compteur > this.length) this.compteur = 0;
    // }

    // updateTransform() {
    //     let decal = -100 * this.compteur;
    //     this.elements.style.transform = `translateX(${decal}%)`;
    // }

    // checkBoundary() {
    //     if (this.compteur === this.length) {
    //         setTimeout(() => this.resetDiapoToFirstImage(), 1000);
    //         this.resetCompteur();
    //     }
    // }

    slideNext() {
        return () => {
            this.incrementeCompteur();
            this.activeTransition();
            console.log('Compteur Next = ' + this.compteur + ' length = ' + this.length);
            let decal = -100 * this.compteur;
            this.elements.style.transform = `translateX(${decal}%)`;
            if (this.compteur >= this.length - 1) {
                this.resetCompteur();
                setTimeout(() => this.resetDiapoToFirstImage(), 1000);
            }
        };
    }
    slideBefore() {
        return () => {
            this.decrementeCompteur();
            this.activeTransition();
            if (this.compteur < 0) {
                this.maxCompteur();
                this.pushDiapoToLastImage()
                setTimeout(() => this.slideBefore()(), 1);
            }
            let decal = -100 * this.compteur;
            this.elements.style.transform = `translateX(${decal}%)`;
        }
    }
    pushDiapoToLastImage() {
        let decal = (this.compteur) * -100;
        this.elements.style.transition = 'unset';
        this.elements.style.transform = `translateX(${decal}%)`;
    }
    resetDiapoToFirstImage() {
        this.elements.style.transition = 'unset';
        this.elements.style.transform = 'translateX(0)';
    }

    incrementeCompteur() {
        this.compteur++;
    }
    decrementeCompteur() {
        this.compteur--;
    }
    maxCompteur() {
        this.compteur = this.length - 1;
    }
    resetCompteur() {
        this.compteur = 0;
    }
    activeTransition() {
        this.elements.style.transition = '1s ease-in-out';
    }
    unsetTransition() {
        this.elements.style.transition = 'unset';
    }

}

const slider = () => {
    const diapos = document.querySelectorAll('.diapo-container');
    diapos.forEach((diapo) => {
        let dogId = diapo.dataset.dogId;
        let elements = document.querySelector('.diapo-' + dogId);
        let slides = Array.from(elements.children);
        let state = new Slider(0, dogId, elements, slides);

        let closeButton = document.getElementById('close');
        if (closeButton != null) { // Condition pour que le slider continue de fonctionner sur weeding-litter.php
            closeButton.addEventListener('click', () => {
                state.resetCompteur();
                state.resetDiapoToFirstImage();
            })
        }

        let next = document.querySelector('.bi-caret-right-' + state.dogId);
        let before = document.querySelector('.bi-caret-left-' + state.dogId);
        next.addEventListener('click', state.slideNext());
        before.addEventListener('click', state.slideBefore());
    });
}

// function slideNext(state) {
//     return function () {
//         state.compteur++;
//         console.log('Compteur Next = ' + state.compteur + ' CHIEN : ' + state.dogId);
//         let decal = -100 * state.compteur;
//         state.elements.style.transition = '1s ease-in-out';
//         state.elements.style.transform = `translateX(${decal}%)`;
//         setTimeout(function () {
//             if (state.compteur >= state.slides.length - 1) {
//                 state.compteur = 0;
//                 state.elements.style.transition = 'unset';
//                 state.elements.style.transform = 'translateX(0)';
//             }
//         }, 1000);
//     }
// }

// function slideBefore(state) {
//     return function () {
//         state.compteur--;
//         state.elements.style.transition = '1s ease-in-out';
//         if (state.compteur < 0) {
//             state.compteur = state.slides.length - 1;
//             let decal = -100 * state.compteur;
//             state.elements.style.transition = 'unset';
//             state.elements.style.transform = `translateX(${decal}%)`;
//             setTimeout(() => {
//                 slideBefore(state)
//             }, 1);
//         }
//         let decal = -100 * state.compteur;
//         state.elements.style.transform = `translateX(${decal}%)`;
//     }
// }