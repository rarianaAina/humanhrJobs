// Fonction pour afficher l'information liée au bouton survolé
function showInfo(infoId) {
    // Masquer le texte par défaut
    document.getElementById('defaultInfo').style.display = 'none';

    // Afficher la boîte d'information correspondante
    document.getElementById(infoId).style.display = 'block';
}

// Fonction pour cacher les informations quand le curseur quitte le bouton
function hideInfo() {
    // Réafficher le texte par défaut
    document.getElementById('defaultInfo').style.display = 'block';

    // Cacher toutes les boîtes d'information
    document.getElementById('infoPostuler').style.display = 'none';
    document.getElementById('infoChatbot').style.display = 'none';
    document.getElementById('infoTransformation').style.display= 'none';
}
