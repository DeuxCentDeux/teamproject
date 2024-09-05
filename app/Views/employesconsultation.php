<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des Employés</title>
    <!-- Ajoutez les liens CSS de Bootstrap et votre propre fichier CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        .table {
            margin-top: 20px;
        }
        .table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class="mt-4">Liste des Employés</h1>

        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de Naissance</th>
                    <th>Email</th>
                    <th>Numéro de Téléphone</th>
                    <th>Poste</th>
                    <th>Département</th>
                    <th>Date d'Embauche</th>
                    <th>Salaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employes as $employe): ?>
                    <tr>
                        <td><?= esc($employe['Nom']); ?></td>
                        <td><?= esc($employe['Prenom']); ?></td>
                        <td><?= esc($employe['DateNaissance']); ?></td>
                        <td><?= esc($employe['Email']); ?></td>
                        <td><?= esc($employe['NumeroTelephone']); ?></td>
                        <td><?= esc($employe['Poste']); ?></td>
                        <td><?= esc($employe['Departement']); ?></td>
                        <td><?= esc($employe['DateEmbauche']); ?></td>
                        <td><?= esc($employe['Salaire']); ?></td>
                        <td>
                            <form action="EmployeController/delete/<?= esc($employe['EmployeID']); ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Ajoutez le lien JavaScript de Bootstrap si nécessaire -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
