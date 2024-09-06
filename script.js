function validerFormulaire() {
    var nom = document.getElementById('nom').value;
    var produit = document.getElementById('produit').value;
    var quantite = document.getElementById('qts').value;
    var date = document.getElementById('date').value;
    var type = document.querySelector('input[name="type"]:checked');
    var couleur = document.getElementById('couleur').value;

    document.getElementById('Nom').style.display = 'none';
    document.getElementById('produits').style.display = 'none';
    document.getElementById('quts').style.display = 'none';
    document.getElementById('dates').style.display = 'none';
    document.getElementById('types').style.display = 'none';
    document.getElementById('couleur').style.display = 'none';

    var valide = true;

    if (nom.length < 4) {
        document.getElementById('Nom').style.display = 'inline-block';
        valide = false;
    }

    if (produit.length < 4) {
        document.getElementById('produits').style.display = 'inline-block';
        valide = false;
    }

    if (quantite <= 0) {
        document.getElementById('quts').style.display = 'inline-block';
        valide = false;
    }

    if (date === '') {
        document.getElementById('dates').style.display = 'inline-block';
        valide = false;
    }

    if (!type) {
        document.getElementById('types').style.display = 'inline-block';
        valide = false;
    }

    if (couleur === '') {
        document.getElementById('couleur').style.display = 'inline-block';
        valide = false;
    }

    if (valide) {
        document.formCommandes.submit();
    }
}
function actualiserPage() {
    location.reload();
}





