$(document).ready(function() { // après chargement du DOM
    
});

// fonctions globales
function suivant(enCours, suivant, limite){
    if (enCours.value.length == limite){
        $(suivant).focus();
    }
};