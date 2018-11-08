function connexion_admin()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/connexionAdmin",
            success:function(data)
            {
                $("#ville").empty();
                $("#region").empty();
                $("#region").append(data);
            },
            error:function()
            {
                alert("Erreur Récupération information");
            }
        }
    )
}

function connexion_simple()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/connexion_simple",
            success:function(data)
            {
                $("#ville").empty();
                $("#region").empty();
                $("#region").append(data);
            },
            error:function()
            {
                alert("Erreur Récupération information");
            }
        }
    )
}

function ville(id)
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/afficherVille",
            data:"id="+id,
            success:function(data)
            {
                $("#ville").empty();
                $("#ville").append(data);
            },
            error:function()
            {
                alert("Erreur Récupération information");
            }
        }
    )
}

function ajouterScore(nbVille)
{
    if ($("#nom").val() == "girard" || $("#nom").val() == "Girard")
    {
        $.ajax
        (
            {
                type:"get",
                url:"index.php/Welcome/ajouterScoreAdmin",
                data:"id="+$("#regionS").val()+"&nbVille="+nbVille,
                success:function(data)
                {
                    alert("Calcul effectuer");
                    $("#ville").empty();
                    $("#region").empty();
                    $("#region").append(data);
                },
                error:function()
                {
                    alert("Erreur Récupération information");
                }
            }
        )
    }
    else
    {
        $.ajax
        (
            {
                type:"get",
                url:"index.php/Welcome/ajouterScore",
                data:"id="+$("#regionS").val()+"&nbVille="+nbVille,
                success:function(data)
                {
                    alert("Calcul effectuer");
                    $("#ville").empty();
                    $("#region").empty();
                    $("#region").append(data);
                },
                error:function()
                {
                    alert("Erreur Récupération information");
                }
            }
        )
    }
}