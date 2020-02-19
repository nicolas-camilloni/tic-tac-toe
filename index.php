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
    	        <h1><span class="blue">Chosir</span> <span class="red">votre</span> <span class="blue">Mode</span></h1>
                <form action="tictactoe.php" method="post">
                    <input class="btnrestart" type="submit" value="P Vs IA" name="PVIA">
                </form>
                <form action="pvp.php" method="post">
                    <input class="btnrestart" type="submit" value="P Vs P" name="PVP">
                </form>

       
    </main>
</body>
</html>