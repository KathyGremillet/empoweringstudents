<!DOCTYPE html>
<html lang="fr">
<head>
	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

	<meta charset="utf-8">
	<title><?php echo $page ?></title>
	<meta name="description" xml:lang="fr" content="<?php echo $description ?>" />

	<link rel="stylesheet" type="text/css" href="./css/global.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script src="./js/production.min.js" type="text/javascript"></script>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

</head>

<body>
	<header class="wrapper" id="main-header">
		<div class="">
			<div class="logo">
				<div id="nom_projet">				 
					<a href="./"><h1>Empowering Students</h1></a>
			    </div>				
			</div>
		    
		    <nav role="navigation">
                <ul class="">
                    <li<?php if ($page == 'concertations') {echo ' class="active"';} ?> ><a href="./concertations.php">Concertations</a></li>
                </ul>
            </nav>
		</div>
	</header>
	
