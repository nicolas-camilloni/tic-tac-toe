<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="css/style.css">

            <link rel="stylesheet" href="css/croix.css">
            
            <link rel="stylesheet" href="css/rond.css">
            
</head>
<body>
    <main>      
    	        <h1><span class="blue">Choisir</span> <span class="red">votre</span> <span class="blue">mode</span></h1>
                <form action="tictactoe.php" method="post">
                    <input class="btnrestart" type="submit" value="Joueur VS IA" name="restart">
                </form>
                <form action="pvp.php" method="post">
                    <input class="btnrestart" type="submit" value="Joueur VS Joueur" name="restart">
                </form>
                <form action="uploadyouria.php" method="post">
                    <input class="btnrestart" type="submit" value="IA VS IA" name="restart">
                </form>

       
    </main>
</body>
</html>