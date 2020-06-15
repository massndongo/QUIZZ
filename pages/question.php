<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/question.css">
    <title>Questions</title>
</head>
<body>
<div class="container">
<div class="row">
    <h1 class="text-center">Paramétrer Vos Questions</h1>
</div>
<form>
    <div class="form-group row">
        <label for="question" class="col-sm-2 col-form-label">Question</label>
        <div class="col-sm-5 md-form">
            <input type="textarea"  class="md-textarea form-control" rows="4" id="question">
        </div>
    </div>
    <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Nbre de Point</label>
        <div class="col-sm-5">
            <input type="number" class="form-control" id="nombre">
        </div>
    </div>
    <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Type de Réponse</label>
        <div class="col-sm-5">
            <select name="type_rep" id="type" error="error-3">
                <option value="">Donner le type de réponse</option>
                <option value="choixM" id="choixM">Choix Multiple</option>
                <option value="choixS" id="choixS">Choix Simple</option>
                <option value="choixT" id="choixT">Choix Texte</option>
            </select>
        </div>
        <div class="col"><button style="width:40px;border-color:white;background-color:white" type="button" class=""  name="" id="btnAjout"><img src="../public/icones/ic-ajout-réponse.png" alt="" srcset="" id="imgAjout" style="width:25px;height: 25px;"></button>
            <div class="error-form" id="error-3"></div></div>
    </div>
    <div class="form-group row ajout" id=""></div>

    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-warning">Enrégistrer</button>
        </div>
    </div>
</form>
</div>
    <script src="..public/js/jquery.js"></script>
    <script>

$(document).ready(function(){
    var a = 0;// var pour col 1
    $("#btnAjout").click(function(){
        var type = $("#type").val();
        alert(type);
            $('<input type="text" />').append(".ajout");
        
    });
});


</script>

             
</body>
</html>