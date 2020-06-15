<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/list.css">
    <title>Document</title>
</head>
<body>
<h1 class="text-center">Liste des Joueurs par Score</h1>
<div class="cols-12">
<div id="scrollZone" class="col">
    <table class="table table-striped">
        <thead>
            <tr class="text-center">
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <tr class="text-center">
                <td>18H50</td>
                <td>771544313</td>
                <td>100000</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<script src="../public/js/jquery.js"></script>
<script>
  $(document).ready(function(){

let offset = 0;
const tbody = $('#tbody');
$.ajax({
        type: "GET",
        url: "getJoueur",
        data: {limit:3,offset:offset},
        dataType: "JSON",
        success: function (data) {
            tbody.html('')
            printData(data,tbody);
            offset +=3
        }
    });

    //  Scroll
const scrollZone = $('#scrollZone')
scrollZone.scroll(function(){
//console.log(scrollZone[0].clientHeight)
const st = scrollZone[0].scrollTop;
const sh = scrollZone[0].scrollHeight;
const ch = scrollZone[0].clientHeight;

if(sh-st <= ch){
    $.ajax({
        type: "GET",
        url: "getJoueur",
        data: {limit:3,offset:offset},
        dataType: "JSON",
        success: function (data) {
            
            printData(data,tbody);
            offset +=3;
        }
    });
}
   
})
});

function printData(data,tbody){
$.each(data, function(indice,utilisateur){
    tbody.append(`
    <tr class="text-center">
        <td>${utilisateur.nom}</td>
        <td>${utilisateur.prenom}</td>
        <td>${utilisateur.score}</td>
    </tr>
`);
});
}
</script>
</body>
</html>