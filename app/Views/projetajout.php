<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Projet</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center">Ajouter un Projet Informatique</h2>
            <form action="ProjetController/save" method="post" id="formProjet">

        <div class="form-group text-center">
            <label for="nomProjet">Nom du Projet</label>
            <input type="text" class="form-control" id="nomProjet" name="nomProjet" placeholder="Entrez le nom du projet">
        </div>

        <div class="form-group text-center">
            <label for="descriptionProjet">Description</label>
            <textarea class="form-control" id="descriptionProjet" name="descriptionProjet" rows="3" placeholder="Décrivez le projet"></textarea>
        </div>

        <div class="form-group text-center">
            <label for="budgetProjet">Budget</label>
            <input type="number" class="form-control" id="budgetProjet" name="budgetProjet" placeholder="Entrez le budget du projet">
        </div>

        <div class="form-group text-center">
            <label>Échéances</label>
            <p class="text-muted">Ajoutez les dates clés pour le projet.</p>
            <div id="echeances">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="nomsEcheances[]" placeholder="Nom de l'échéance">
        <input type="date" class="form-control" name="datesEcheances[]">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" onclick="ajouterEcheance()">+</button>
        </div>
    </div>
</div>

        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

<script>
function ajouterEcheance() {
    var div = document.createElement('div');
    div.className = 'input-group mb-3';
    div.innerHTML = `
        <input type="text" class="form-control" name="nomsEcheances[]" placeholder="Nom de l'échéance">
        <input type="date" class="form-control" name="datesEcheances[]">
        <div class="input-group-append">
            <button class="btn btn-outline-danger" type="button" onclick="supprimerEcheance(this)">-</button>
        </div>
    `;
    document.getElementById('echeances').appendChild(div);
}

    function supprimerEcheance(btn) {
        var row = btn.parentNode.parentNode;
        document.getElementById('echeances').removeChild(row);
    }
</script>

<!-- Bootstrap JS, Popper.js, et jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
