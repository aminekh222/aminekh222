<!DOCTYPE html>
<html>
<head>
    <title>Liste des commandes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; 
        }
        
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333; 
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff; 
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px  #dee2e6; 
            padding: 12px;
            text-align: left;
            font-size: 15px;
            font-weight: bold;
            color: #333; 
        }

        th {
            background-color: #007bff; 
            color: #fff; 
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; 
        }

        tr:hover {
            background-color: #e2e6ea; 
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; 
            color: #fff; 
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3; 
        }

        a {
            text-decoration: none;
            color: #007bff; 
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3; 
        }
    </style>
</head>
<body>
    <h1>Liste des commandes :</h1>
    <table border="1">
        <tr>
            <th>Nom client</th>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Suppression</th>
        </tr>
        <?php
        $serveur = "localhost";
        $user = "root";
        $pw = "";
        $db = "stock";
        $con = mysqli_connect($serveur, $user, $pw, $db) or die("Erreur de connexion !");
        $req = "SELECT * FROM commandes";
        $result = mysqli_query($con, $req);
        foreach ($result as $line) {
            echo "<tr>";
            echo "<td>" . $line["nom"] . "</td>";
            echo "<td>" . $line["produit"] . "</td>";
            echo "<td>" . $line["quantite"] . "</td>";
            echo "<td><a href='supprimer.php?ids=".$line["id"]."' class='btn'>Supprimer</a></td>";
            echo "</tr>";
        }
        mysqli_close($con);
        ?> 
    </table>
    <div class="btn-container">
        <a href="index.html" class="btn">Afficher la page d'accueil</a>
    </div>
</body>
</html>
