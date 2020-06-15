function chargerPage(target,filename,data) {
    target.load(`../pages/${filename}`,data,function(response,status,detail){
        if (status==="error") {
            $("#contenu").html(`<p class="text-center alert alert-danger col">Le contenu n'est pas disponoble</p>`)
        }
    }); 
}