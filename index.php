<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/connexion.css">
    <title>Connexion Admin</title>
</head>
<body>
    <header>
    <div class="logo"><img src="public/images/logo.png" alt="error" /></div>
    <h1>BIENVENUE SUR LE SITE DE QUIZZ</h1>
    </header>
    <div class="contenu">
    <div class="section1">
        <div class="ssection1">
            <h2>Connectez-vous</h2>
            <form action="" method="post" id="myform">
                <div class="control">
                    <label for="" class="label">Login</label>
                    <input type="text" error="error-1" class="input" name="nom" id="login">
                    <div class="error-form" id="error-1"></div>
                </div>
                <div class="control">
                    <label for="" class="label">Mot de Passe</label>
                    <input type="password" error="error-2" class="input" name="pwd" id="pwd">
                    <div class="error-form" id="error-2"></div>
                </div>
                <div class="control">
                    <input type="submit" value="Connexion" class="btn-submit" name="btn" id="">
                </div>
            </form>
        </div>
    </div>
    <div class="section2">
        <img src="public/images/quiz.jpg" alt="" srcset="">
        <a href="pages/inscriptionj.php"><div>S'inscrire pour jouer</div></a>
    </div>
    </div>
    <script>
const inputs=document.getElementsByTagName("input");
for(input of inputs){
   input.addEventListener("keyup", function (e) {
     if(e.target.hasAttribute("error")) {
         var idDivError=e.target.getAttribute("error")
         document.getElementById(idDivError).innerText=""
     }
   })
}

document.getElementById("myform").addEventListener("submit", function(e){
const inputs=document.getElementsByTagName("input");
    var error=false;
    for(input of inputs){
        if (input.hasAttribute("error")) {
            var idDivError=input.getAttribute("error");
            if (!(input.value)) {
                error=true;
                document.getElementById(idDivError).innerText="Ce champ est obligatoire";
            }
        }
    }
    if (error) {
        e.preventDefault();
        return false;
    }
    
})
</script>
</body>
</html>