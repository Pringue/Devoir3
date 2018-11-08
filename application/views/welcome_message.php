<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="assets/JQuery/jquery-3.1.1.js"></script>
	<script src="assets/JS/mesFonctions.js"></script>
	<script>
	$(
		function()
		{
			$("#connexion").click(function()
			{
				if ($("#nom").val() == "girard" || $("#nom").val() == "Girard")
				{
					connexion_admin();
				}
				else if ($("#nom").val() == "royer" || $("#nom").val() == "Royer")
				{
					connexion_simple();
				}
			});
		}
	)
	</script>
</head>
<body>
	<h1>Votre nom</h1><br>
	<input type="text" id="nom"></br>
	<input type="button" value="Connexion" id="connexion"></br>
	<div id="region"></div><br>
	<div id="ville"></div><br>
</body>
</html>