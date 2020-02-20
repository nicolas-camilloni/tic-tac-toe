<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <main>
        <section class="cformupload">
            <form method="post" action="uploadyouria.php" enctype="multipart/form-data">
                <label>Importez votre ia</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input class="btnindex" type="submit" name="modifier" value="Charger" />
            </form>

                        <?php 
                            if (isset($_POST['modifier']) ) {

                                // UPDATE IMAGE DE PROFIL
                                if ( !empty($_FILES["fileToUpload"]["name"]) ) {
                                    $target_dir = "";
                                    $name = $_FILES["fileToUpload"]["name"];
                                    $yo = explode(".", $name);
                                    $ext = end($yo);
                                    var_dump($ext);
                                    $sessionid = $_SESSION['id'];
                                    $target_file = "ia2.".$ext;
                                    $uploadOk = 1;

                                    // Autorise que certains format d'images
                                    if( $ext != "php" ) {
                                        $uploadOk = 0;
                                    }
                                    else {
                                        if ($uploadOk == 1 && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                            header("Location: iavsia.php");
                                        }
                                    }
                                }
                            }
                            ?>
        </section>
    </main>
</body>

</html>