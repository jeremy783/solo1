<!DOCTYPE html>
<html lang="fr">

<meta charset="utf-8">
	<title>Application QUINDOS</title>

	<style type="text/css">

	html {
		height: 100%;
		margin: auto;
	}

	body {
		background-color: #111111;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		height: 100%;
	}

	h1, h2 {
		text-align: center;
	}

	#corps {
		width: 1000px;
		background: #7F97FF;
		height: 80%;
		margin: auto;
		padding: 20px;
	}


	

	
	</style>

	</head>
		<body>
		<h1>Recherche d'un professionnel</h1>
		
		<div id="corps">
		<form method="post" action="">

        Quel profil recherchez-vous ?<br/><br/>
        <input type="radio" name="profil" value="dev" id="dev" /> <label for="dev">Développeur</label><br />
       <input type="radio" name="profil" value="des" id="des" /> <label for="des">Designer</label><br />
       <input type="radio" name="profil" value="mus" id="mus" /> <label for="mus">Musicien</label><br />
       <input type="radio" name="profil" value="sce" id="sce" /> <label for="sce">Scénariste</label><br />
       <input type="radio" name="profil" value="art" id="art" /> <label for="art">Artiste</label><br />
       <input type="radio" name="profil" value="sci" id="sci" /> <label for="sci">Scientifique</label><br />
       <input type="radio" name="profil" value="aut" id="aut" /> <label for="aut">Autres</label>

       <input type="submit" value="Envoyer" />

       </form>
			
		</div>
	</body>
</html>