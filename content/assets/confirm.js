const confirmDeleteLitter = (id) => {
    if (confirm(`Vous allez supprimer la portée, en êtes-vous sûr ??`)) {
        location.assign('../Controllers/litter.php?litterID=' + id + "&delete=true");
    }
}
const confirmDeleteRepro = (id) => {
    if (confirm(`Vous allez supprimer ce reproducteur, en êtes-vous sûr ??`)) {
        location.assign('../Controllers/repro.php?reproID=' + id + "&delete=true");
    }
}