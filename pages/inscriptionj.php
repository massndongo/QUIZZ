<?php
$array_login=[];
if (isset($_POST['btn'])) {
    include_once "../traitement/fonctions.php";
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $login=$_POST['login'];
    $pwd1=password_hash($_POST['pwd1'],PASSWORD_DEFAULT);
    $pwd2=password_hash($_POST['pwd2'],PASSWORD_DEFAULT);
    $image=$_POST['file'];
    if (!empty($login)) {
        if ($pwd1==$pwd2) {
            if (connexion_bd()) {
                $sql1="SELECT login FROM utilisateur WHERE role='joueur'";
                $req1=mysqli_query(connexion_bd(),$sql1);
                if(!$req1) echo "Requete invalide:".mysql_error();
                if (mysqli_num_rows($req1)>0) {
                    while ($row=mysqli_fetch_array($req1,MYSQLI_ASSOC)) {
                        array_push($array_login,$row);
                    }
                    var_dump($array_login);
                        foreach ($array_login as $value) {
                            var_dump($value);
                        if ($value['login']==$login) {
                            $message="Ce login existe!!";
                        }else {
                            $sql2="INSERT INTO utilisateur (`nom`,`prenom`,`login`,`password`,`role`,`score`,`image`) VALUES ('$nom','$prenom',$login,'$pwd1','joueur','0','$image')";
                            $result=mysqli_query(connexion_bd(),$sql2);
                            if (!$result) {
                                die ("Probleme : ".mysqli_error(connexion_bd()));
                            }else {
                                header("Location:../index.php");
                                mysqli_close(connexion_bd());
                            }
                    }
            }
        }
        }
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/inscriptionj.css">
    <title>PAGE INSCRIIPTION</title>
    <script type='text/javascript'>
    function load_image(avatar) {
        let image = document.getElementById('img');
        image.src = window.URL.createObjectURL(avatar.files[0])
     }
    </script>
</head>
<body>
    <div class="logo"><img src="../public/images/logo.png" alt="error" /></div>
    <div class="contenu">
        <h1>Créer un Compte</h1>
        <form action="" method="post" id="myform">
            <div class="control">
                <input type="number" name="score" hidden="hidden" id="">
                <input type="text" class="input-form" error="error-1" name="prenom" id="" placeholder="Prenoms">
                <span class="error-form" id="error-1"></span>
            </div>
            <div class="control">
                <input type="text" class="input-form" error="error-2" name="nom" id="" placeholder="Nom">
                <span class="error-form" id="error-2"></span>
            </div>
            <div class="control">
                <input type="text" class="input-form" error="error-3" name="login" id="" placeholder="Login">
                <span class="error-form" id="error-3"><?=isset($message)?$message:""?></span>
            </div>
            <div class="control">
                <input type="password" class="input-form" error="error-4" name="pwd1" id="pwd1" placeholder="Password">
                <span class="error-form" id="error-4"></span>
            </div>
            <div class="control">
                <input type="password" class="input-form" error="error-5" name="pwd2" id="pwd2" placeholder="Confirm Password">
                <span class="error-form" id="error-5"></span>
            </div>
            <div class="control" id="div-avatar">
                <label class="btn-file">Avatar</label>
                <input type="file"  accept="image/jpeg, image/png" onchange="load_image(this)" name="file" id="fichier">
            <div class="avatar-img"><img src="" style="width:100%;height:100%; border-radius:60%" id="img" alt=""></div>
            </div>
            <div class="control">
                <input type="submit" value="Connexion" class="btn-submit" name="btn" id="">
            </div>
        </form>
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
            }else{
                pwd1=document.getElementById('pwd1').value
                pwd2=document.getElementById('pwd2').value
                if(pwd1!=pwd2){
                    document.getElementById('error-5').innerText="Mot de pass doit etre identique"
                }
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