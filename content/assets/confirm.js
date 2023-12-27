const confirmDeleteLitter = (id) => {
    if (confirm(`Vous allez supprimer une portée, en êtes-vous sûr ??`)) {
        location.assign('../Vues/delete_litter.php?litterID=' + id);
    }
}
const confirmDeleteRepro = (id) => {
    if (confirm(`Vous allez supprimer ce reproducteur, en êtes-vous sûr ??`)) {
        location.assign('../Controllers/repro.php?reproID=' + id + "&delete=true");
    }
}