<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un employé</title>
    <!-- Intégration de Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Ajouter un nouvel employé</h1>
        <form action="<?= site_url('/employesajout/save') ?>" method="post" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" name="nom" id="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" name="prenom" id="prenom" required>
            </div>

            <div class="form-group">
                <label for="dateNaissance">Date de Naissance:</label>
                <input type="date" class="form-control" name="dateNaissance" id="dateNaissance" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="numeroTelephone">Numéro de Téléphone:</label>
                <input type="tel" class="form-control" name="numeroTelephone" id="numeroTelephone" required>
            </div>

            <div class="form-group">
                <label for="poste">Poste:</label>
                <input type="text" class="form-control" name="poste" id="poste" required>
            </div>

            <div class="form-group">
                <label for="departement">Département:</label>
                <input type="text" class="form-control" name="departement" id="departement" required>
            </div>

            <div class="form-group">
                <label for="dateEmbauche">Date d'Embauche:</label>
                <input type="date" class="form-control" name="dateEmbauche" id="dateEmbauche" required>
            </div>

            <div class="form-group">
                <label for="salaire">Salaire (Mensuel):</label>
                <input type="number" class="form-control" name="salaire" id="salaire" step="0.01" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter Employé</button>
        </form>
    </div>

    <!-- Intégration de Bootstrap JS et dépendances -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
