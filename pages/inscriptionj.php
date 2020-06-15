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
     <div class="container-fluid">
    <div class="logo"><img src="../public/images/logo.png" alt="error" /></div>
    <div class="container contenu">
        <h1>Créer un Compte</h1>
        <form action="" method="post" id="myform">
            <div class="form-control control">
                <input type="number" name="score" hidden="hidden" id="">
                <input type="text" class="input-form" error="error-1" name="prenom" id="prenom" placeholder="Prenoms">
                <span class="error-form" id="error-1"></span>
            </div>
            <div class="form-control control">
                <input type="text" class="input-form" error="error-2" name="nom" id="nom" placeholder="Nom">
                <span class="error-form" id="error-2"></span>
            </div>
            <div class="form-control control">
                <input type="text" class="input-form" error="error-3" name="login" id="login" placeholder="Login">
                <span class="error-form" id="error-3"><?= isset($message) ? $message : "" ?></span>
            </div>
            <div class="form-control control">
                <input type="password" class="input-form" error="error-4" name="pwd1" id="pwd1" placeholder="Password">
                <span class="error-form" id="error-4"></span>
            </div>
            <div class="form-control control">
                <input type="password" class="input-form" error="error-5" name="pwd2" id="pwd2" placeholder="Confirm Password">
                <span class="error-form" id="error-5"></span>
            </div>
            <div class="form-control control" id="div-avatar">
                <label class="btn-file">Avatar</label>
                <input type="file"  accept="image/jpeg, image/png" onchange="load_image(this)" name="file" id="fichier">
            <div class="avatar-img"><img src="" style="width:100%;height:100%; border-radius:60%" id="img" alt=""></div>
            </div>
            <div class="form-control control">
                <input type="submit" value="Connexion" class="btn btn-submit" name="btn" id="bouton">
            </div>
        </form>
    </div>
</div>
<script src="../public/js/jquery.js"></script>
    <script>
    $(document).ready(function(){
       
       $('#bouton').on('click',function (e) {
        let form= document.getElementById('myform');
        let fd= new FormData(form);
        if ($('#nom').val()=='' || $('#prenom').val()=='' || $('#login').val()==''|| $('#pwd1').val()=='' || $('#pwd2').val()=='') {
            $('.error-form').html('Champ Obligatoire');
            e.preventDefault();
        }else{
            $('#bouton').attr("disabled", "disabled");
           $.ajax({
            url:'sendJoueur.php',
            type:'post',
            data: fd,
            processData:false,
            contentType: false,
            success: function (data, statut) {
                if (data=="ok") {
                    window.location.href = "../index.php";
                    }
                }
           });
        }
       });
    });
    </script>
</body>
</html>