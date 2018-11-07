function a()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/",
            success:function(data)
            {

            },
            error:function()
            {
                alert("Erreur Récupération information");
            }
        }
    )
}