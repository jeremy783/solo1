<!DOCTYPE html>
<html lang="fr">

<meta charset="utf-8">
	<title>Application QUINDOS</title>

	<style type="text/css">

	html {
		height: 100%;
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

	.pro, .contenu {
			width: 25%;
			height: 300px;
			background-color: #7F97FF;
			float: left;
			margin-top: 5%;
		}

		.pro {
			margin-right: 10%;
			margin-left: 20%;
			
		}

		#debut {
			height: 15%;
		}

		#choix {
			height: 85%;
			vertical-align: center;
		}

		a {
			color: red;
			text-align: center;
			text-decoration: none;
		}

	
	</style>

	</head>
		<body>

		<div id="debut">
			<h1>Bienvenue</h1>
		</div>

		<div id="choix">
		<h2>Je recherche :</h2>
			<div class="pro">
				<a href="<?php echo site_url('Pro');?>">Un professionnel</a>
			</div>

			<div class="contenu">
				<a>Du contenu</a>
			</div>
		</div>

	</body>
</html>