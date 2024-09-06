<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de commande</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; 
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            background-color: #fff; 
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        }

        h2 {
            text-align: center;
            color: #333; 
        }

        .confirmation-info {
            margin-bottom: 20px;
        }

        .confirmation-info label {
            font-weight: bold;
        }

        .confirmation-info p {
            margin: 5px 0;
        }

        .btn-container {
            text-align: center;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Confirmation de commande :</h2>
        <div class="confirmation-info">
            <label for="nom">Nom :</label>
            <?php echo $_POST["nom"]; ?><br><br>
            <label for="produit">Produit :</label>
            <?php echo $_POST["prod"]; ?><br><br>
            <label for="qts">Quantité :</label>
            <?php echo $_POST["qts"]; ?><br><br>
            <label for="date">Date :</label>
            <?php echo $_POST["date"]; ?><br><br>
            <label for="type">Type :</label>
            <?php echo $_POST["type"]; ?><br><br>
            <label for="couleur">Couleur :</label>
            <?php echo $_POST["couleur"]; ?><br><br><br>
        </div>
        <?php
            $serveur="localhost";
            $user="root";
            $pw="";
            $db="stock";
            $con=mysqli_connect($serveur,$user,$pw,$db);
            $req="INSERT INTO  commandes (nom,produit,quantite,datec,typep,couleur) VALUES ('{$_POST['nom']}','{$_POST['prod']}','{$_POST['qts']}','{$_POST['date']}','{$_POST['type']}','{$_POST['couleur']}')";
            $result=mysqli_query($con,$req);
            if($result){
                echo "<p style='color: green; text-align: center;'>Les données ont été enregistrées avec succès.</p>";
            } else {
                echo "<p style='color: red; text-align: center;'>Erreur lors de l'enregistrement des données.</p>";
            }
            mysqli_close($con);
        ?>
        <div class="btn-container">
            <a href="javascript:history.back()" class="btn">Retour à la page de commandes</a>
            <a href="listner.php" class="btn">Afficher les commandes</a>
        </div>
    </div>
</body>
</html>
