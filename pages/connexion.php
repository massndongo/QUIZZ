<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/connexion.css">
    <title>Connexion Admin</title>
</head>
<body>
    <header>
    <div class="logo"><img src="../public/images/logo.png" alt="error" /></div>
    <h1>BIENVENUE SUR LE SITE DE QUIZZ</h1>
    </header>
    <div class="contenu">
    <div class="section1">
        <div class="ssection1">
            <h2>Connectez-vous</h2>
            <form action="" method="post">
                <div>
                    <label for="">Login</label><br>
                    <input type="text" name="login" class="input">
                    <span id="message" style="color:red"><?= isset($message) ? $message : '' ?></span>
                </div>
                <div>
                    <label for="">Mot de Passe</label><br>
                    <input type="password" name="mdp" class="input">
                    <span id="message" style="color:red"><?= isset($message) ? $message : '' ?></span>
                </div>
                <div class="submit">
                    <input type="submit" name="connexion" value="Connexion" id="sub">
                </div>
            </form>
        </div>
    </div>
    <div class="section2">
        <img src="../public/images/quiz.jpg" alt="" srcset="">
        <a href="inscriptionj.php"><div>S'inscrire pour jouer</div></a>
    </div>
    </div>
</body>
</html>