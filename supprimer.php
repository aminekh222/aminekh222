<!DOCTYPE html>
<html>
<head>
    <title>Suppression d'une commande</title>
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

        .message {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
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
        <h2>Suppression d'une commande :</h2>
        <div class="message">
            <?php
                $ids=$_GET["ids"];
                $server="localhost";
                $user="root";
                $pw="";
                $db="stock";
                $con=mysqli_connect($server,$user,$pw,$db) or die("Erreur de connexion");
                $req="DELETE FROM commandes WHERE id=".$ids;
                $result=mysqli_query($con,$req);
                if ($result) {
                    echo "La suppression de la commande ayant l'ID " . $ids . " a été effectuée.";
                } else {
                    echo "Une erreur est survenue lors de la suppression de la commande.";
                }
                mysqli_close($con);
            ?>
        </div>
        <div class="btn-container">
            <a href="listner.php" class="btn">Retour à la page d'affichage</a>
            <a href="index.html" class="btn">Afficher la page d'accueil</a>
        </div>
    </div>
</body>
</html>
