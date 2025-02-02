<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="css/datatables.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/datatables.js"></script>
    <script>
        $(document).ready(function () {
            $('#controles').DataTable({
                "language": {
                    "url": "js/French.json"
                }
            });
        });
    </script>
    <title>Controles - Controlo</title>
</head>

<body>
    <header>
        <img src="img/logo.png" alt="Logo de Controlo">
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Controles</a></li>
                <li><a href="etudiants.php">Etudiants</a></li>
                <li><a href="salles.php">Salles</a></li>
                <li><a href="promotions.php">Promotions</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>Liste des contrôles</h1>
            <table id="controles" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nom long</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Tiers-temps</th>
                        <th>Promotion</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>R2.03 Qualité de développement</td>
                        <td>09/03/2022</td>
                        <td>14h30-16h00</td>
                        <td>14h00-16h00</td>
                        <td>BUT INFO S2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>R2.10 Gestion de projet</td>
                        <td>10/03/2022</td>
                        <td>16h30-18h00</td>
                        <td>16h30-18h00</td>
                        <td>BUT INFO S2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>R2.11 Droits des contrats et du numérique</td>
                        <td>11/03/2022</td>
                        <td>15h30-17h00</td>
                        <td>15h30-17h30</td>
                        <td>BUT INFO S2</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </section>
    </main>
    <footer>
        <p>© 2022 Controlo | <a href="mentions_legales.php">Mentions Légales</a> | <a
                href="politique_confidentialite.php">Politique de confidentialité</a></p>
    </footer>
</body>

</html>