<!DOCTYPE html>
<?php $thisPage="story"; ?>
<html lang="en">
<head>
	<title>My Little Panzer | Armoured Pixels</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site over Panzer en de tweede wereldoorlog. Tanks worden getekend in pixels met behulp van MSPaint en geillustreerd door verhalen en kaarten of fotos waar mogelijk." />
	<meta name="keywords" content="Panzer,PzKfw,PzPkfw,JPz,StuG,SdKfz,tiger,panther,KwK,tank,tanks,WW2,war,pixel,pixels" />
	<meta name="author" content="Martijn Proper" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
		.bg-pzgrey { background-color: #4A5054; }
		.carousel-inner img { width: 100%; height: 100%; }
	</style>
	<script>
		$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
</head>

<body>

<div class="container">

<!--Top navbar-->
<?php include("php/menu.php"); ?>

<!--Page title-->
	<h1 class="display-2">An awkward victory</h1>
	<h3><i>When the Dutch met the Germans</i></h3>

<!--Info box-->
	<div class="card float-right m-3" style="width:500px">
		<img class="mx-auto d-block" src="draw/pz3/pzbfw3e-1l.png" alt="PzBfw III Ausf. E">
		<div class="card-body">
		<h4 class="card-title">"Heinenoord"</h4>
		<!-- <h5 class="card-title">Type</h5> -->
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><i class="fas fa-bicycle"></i> PzBfw III Ausf. E</li>
				<li class="list-group-item"><i class="fas fa-map-marker"></i> south of Rotterdam, the Netherlands</li>
				<li class="list-group-item"><i class="fas fa-calendar"></i> May 13th, 1940</li>
				<li class="list-group-item"><i class="fas fa-cubes"></i> PR. 33, 9. PD</li>
			</ul>
		</div>
	</div>

<!--Spacer-->
	<div style="height:100px"></div>
	
<!--Page contents-->
	<h2>Stategically uninteresting</h2>	
	<p>The German invasion of the Netherlands was, well, a bit of a foregone conclusion. The Dutch army hadn't fought a proper battle sinds the 18th century - it was completely out of touch with military reality. They were certain they could kick out the enemy just like they did to the Spanish back in 1648. But when the Germans came to the party it all went bad; the Fallschirmjäger and Panzer had passed Dutch lines before these had all had breakfast. - the Dutch officers insisted there was time to spare.</p>
	
	<h2>Across the bridge</h2>
    <p>On the 13th, in the afternoon a light German tank platoon (I./PR.33) was ordered cross the brigde and drive off the Dutch defenders. It was equipped with four Pz.IIs and Leutnant Grix was told to bring along his Pz.III. The troops of the German IR.16 occuped the Northern bank of the Maas (<i>Meuse river</i>) and the bicycle factory behind it. Behind the dike, two Pz.II on either side of the bridge prepared their attack. Together with machine guns and mortars of the airborne troops they would force the defense into coverage. Two Pz.II and Grix' Pz.III would then attack across the bridge and destroy the Dutch heavy weapons.</p>
    
    <p>On the (southern) Dutch side were one and a half company of 3.GB (border guards), five heavy machine guns and two AT guns. Both pieces were not directly in line of sight with the bridge but a little further back in order to avoid German fire.</p>
    <p>The German attack was preceded by a sudden artillery attack, which led to panic among the Dutch troops in neighbouring sectors. The bridge's defenders, though, remained cool. Their AT guns started firing as soon as the Panzer rolled onto the bridge. Four shells hit the leading Pz.III, disabling it - while it killed a Dutch gun crew. The two Pz.II's were knocked out by the other AT gun - one was hit in its ammunition storage so that the tank exploded and burnt like a torch. The crews of the tanks took cover between the tram tracks on the bridge, while behind them their airborne comrades gave fire support. Under cover of darkness they could later withdraw.</p>

    <h2>Failed attack is still succesfull</h2>
    <p>So, the German attack had failed. One would expect the defender's morale to be quite high, especially after their less successful operations on the 10th and 11th of May. The Dutch army leadership, however, ordered a general retreat because of a) sounds of battle and b) rumours of a German breakthrough (which were at the time untrue). Thus the only decent attempt at defending "Fortress Holland" also had a seriously negative effect on the Dutch defenses.</p>
    
    <img src="pic/002/002map.png" class="img-fluid carousel-inner">

<!--Spacer-->
	<div style="height:50px"></div>

<!-- Bibiografie -->
	<h3>Biblio</h3>
	<ul class="list-group list-group-flush">
		<li class="list-group-item"><a href="#">http://www.grebbeberg.nl</a></li>
		<li class="list-group-item"><a href="#">http://www.zuidfront-holland1940.nl</a></li>
		<li class="list-group-item"><a href="#">"DIE DEUTSCHEN DIVISIONEN 1939-1945, Band 2", Peter Schmitz, Klaus-Jürgen Thies, Günter Wegmann & Christian Zweng</a></li>
	</ul>

<!--Spacer-->
	<div style="height:50px"></div>

<!-- ImageCarousel -->
	<h3>Map</h3>
	<div class="embed-responsive embed-responsive-16by9">
		<div id="map_canvas" class="embed-responsive-item" style="border: 1px solid black"></div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7174.3010292160625!2d4.535752834186716!3d51.83186147455665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c4310f14c56c37%3A0x6eb530d26d5764b2!2sHeinenoord!5e1!3m2!1snl!2snl!4v1608542766573!5m2!1snl!2snl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="pz3.php" class="btn btn-outline-secondary">Back</a>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--Footer-->
<?php include("php/footer2.php"); ?>


</div>

</body>
</html>
