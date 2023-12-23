const confirmDeleteLitter = (id) => {
    if (confirm(`Vous allez supprimer la portée, en êtes-vous sûr ??`)) {
        location.assign('../Controllers/litter.php?litterID=' + id + "&delete=true");
    }
}