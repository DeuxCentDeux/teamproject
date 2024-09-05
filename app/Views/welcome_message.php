<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ProjectTeam+</title>
</head>
<body>
    <style>
        /* Style de base pour le corps du site */
body {
    font-family: Arial, sans-serif;
    background-color: #fff;
    color: #333;
    line-height: 1.6;
    text-align: center;
}

/* Style de l'en-tête */
header {
    background-color: #0099cc ;
    color: #fff;
    padding: 20px;
    text-align: left; /* Alignement à gauche */
}

/* Style des liens de navigation */
/* Style de la barre de navigation */
nav ul {
    list-style: none; /* Supprime les puces (points) */
    padding: 0;
    margin: 0;
    background-color: #333; /* Couleur de fond de la barre de navigation */
    text-align: center; /* Centrer les éléments de la liste horizontalement */
}

/* Style des éléments de la barre de navigation */
nav li {
    display: inline-block; /* Les éléments s'affichent en ligne */
}

/* Style des liens de navigation */
nav a {
    display: block;
    color: #fff; /* Couleur du texte des liens */
    text-align: center;
    padding: 25px 16px;
    text-decoration: none;
}

/* Style des liens au survol */
nav a:hover {
    background-color: #0099cc; /* Couleur de fond au survol */
    color: #fff; /* Couleur du texte au survol */
}

/* Style des sections principales */
main {
    padding: 20px;
}

/* Style des fonctionnalités clés */
.feature ul {
    list-style-type: none;
}

/* Style de la section de présentation des fonctionnalités */
.feature-presentation {
    margin-top: 30px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 50px;

}

/* Style des éléments de fonctionnalités */
.feature-item {
    flex: 1;
    text-align: center;
    margin: 10px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 7px;
}

.feature-item img {
    width: 100px;
    height: 100px;
    margin-bottom: 10px;
}

/* Ajustez les styles selon vos besoins */


/* Style de l'appel à l'action (CTA) */
.cta {
    background-color: #0099cc;
    color: #fff;
    padding: 20px;
}

/* Style du lien d'inscription */
.cta a {
    display: inline-block;
    background-color: #fff;
    color: #0099cc;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
}

/* Style du pied de page */
/* Styles pour le footer */
footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}


footer a:visited {
    color: #fff;
}

footer a:link {
    color: #fff;
}

footer a:active {
    color: #1559d6;
}

.footer-content {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
}

.footer-section {
    flex: 1;
    padding: 20px;
}

.footer-section h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin-bottom: 5px;
}

.social-icon {
    display: inline-block;
    background-color: #0099cc;
    color: #fff;
    padding: 5px 10px;
    text-decoration: none;
    margin-right: 10px;
}

.footer-bottom {
    margin-top: 20px;
    background-color: #222;
    padding: 10px 0;
}

.feature-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #f9f9f9;
}

.feature-form h1 {
    text-align: center;
}

.feature-form form {
    margin-top: 20px;
}

.feature-form label {
    display: block;
    margin-bottom: 5px;
}

.feature-form input[type="text"],
.feature-form input[type="date"],
.feature-form select,
.feature-form input[type="email"],
.feature-form input[type="tel"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.feature-form select {
    height: 50px;
}

.feature-form input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}

.feature-form input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
    <header>
        <h1>ProjectTeam+</h1>
    </header>

    <main>

    <section class="feature-login">
    <div class="feature-item">
            <h1>Connexion</h1>
            <a href="login">pour accéder au différents modules de gestion connectez-vous</a>
        </div>
    </section>

    <section class="feature-presentation">
        <div class="feature-item">
            <h3>Gestion des employés</h3>
            <a href="employesajout">Ajouter</a><br>
            <a href="employesconsultation">Consulter</a> <br>

            <p>Facilement ajoutez, gérez et suivez les informations de vos employés, y compris leurs compétences et qualifications.</p>
        </div>

        <div class="feature-item">
            <h3>Gestion des projets</h3>
            <a href="projetajout">Ajouter</a> <br>
            <a href="projetconsultation">Consulter</a> <br>

            <p>Gérez vos projets, définissez des échéances, attribuez des responsables et affectez des membres de l'équipe de manière simple et efficace.</p>
        </div>
    </section>

</main>


<footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contactez-nous</h3>
                <p>Email : contact@projecteamplus.com</p>
                <p>Téléphone : 0254878844</p>
            </div>
            <div class="footer-section">
                <h3>Suivez-nous</h3>
                <a href="#" class="social-icon">Instagram</a>
                <a href="#" class="social-icon">Twitter</a>
                <a href="#" class="social-icon">LinkedIn</a>
                <a href="#" class="social-icon">DansLaRue</a>

            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2023 ProjectTeam+ - Tous droits réservés
        </div>
    </footer>
</body>
</html>
