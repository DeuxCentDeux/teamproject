<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des Projets</title>
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
        <h1 class="mt-4">Liste des Projets</h1>

        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Budget</th>
                    <th>Échéances</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projets as $projet): ?>
                    <tr>
                        <td><?= esc($projet['nom']); ?></td>
                        <td><?= esc($projet['description']); ?></td>
                        <td><?= esc($projet['budget']); ?></td>
                        <td>
                            <?php
                                $echeances = json_decode($projet['echeances'], true);
                                if (is_array($echeances)) {
                                    // Triez les échéances par date
                                    usort($echeances, function($a, $b) {
                                        $dateA = strtotime($a['date']);
                                        $dateB = strtotime($b['date']);
                                        return $dateA - $dateB;
                                    });

                                    echo '<ul>';
                                    foreach ($echeances as $echeance) {
                                        $formattedDate = date("d/m/Y", strtotime($echeance['date']));
                                        echo '<li> Nom : ' . esc($echeance['nom']) . ' / Date : ' . esc($formattedDate) . '</li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo '<span class="text-muted">Aucune échéance définie</span>';
                                }
                            ?>
                        </td>
                        <td>
                            <form action="ProjetController/supprimer/<?= esc($projet['id']); ?>" method="post">
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
