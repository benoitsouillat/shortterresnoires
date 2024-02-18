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

const confirmDeleteDiapo = (idDiapo, idOwner, type) => {
    if (confirm(`Voulez-vous supprimer cette image ? `)) {
        // if (type === 'repro') {
        location.assign('../Controllers/diapo.php?delete=true&diapoID=' + idDiapo + '&type=' + type + '&id=' + idOwner);

        // }
        // else if (type === 'puppy') {
        //     location.assign('../images/delete.php?id=' + idDiapo + '&puppy_id=' + idPuppy);
        // }
    }
}