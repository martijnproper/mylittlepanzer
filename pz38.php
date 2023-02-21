<!DOCTYPE html>
<html lang="en">
<?php $thisPage="panzer"; ?>
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
		.carousel-caption { background: rgba(0, 0, 0, 0.35); }
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

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--Page title-->
	<div class="row">
		<div class="col-auto mb-3">
			<h1 class="display-2">PzKpfw. 38(t)</h1>
			<img src="pic/pz38/pz38-main.jpg" class="rounded float-lg-right p-3" alt="They had one at Tankf">
			<h3><i>Zloděj!</i></h3>
			<div style="height:50px"></div>			
			<p>After they split off from Austria-Hungary, the Czech had quite a massive arms industry for such a small country. And they built high quality stuff, like the BRNO rifles or the Lt Vz.38. That tank was far more reliable and better armed than contemporary German armour. The Germans stole them after they invaded Czechoslovakia and renamed them Panzer 38(t). <br><br> It bravely served the Wehmacht in France, the Balkans and Russia but because the turret was rather small, it couldn't be upgraded like the Panzer 3 or 4 could. But the chassis was good and that formed the basis for many, many variants like the cute litte Jagdpanzer 38(t) aka. the Hetzer</p>
		</div>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--CARDS-->
    <div class="row justify-content-center">
        
		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw 38(t) Ausf. C</h4>
				<img class="mx-auto d-block" src="draw/pz38/pz38c-1s.png" alt="PzKpfw 38(t)">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Flavion, Belgium</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> early in the morning, May 15th, 1940</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i>  25e PzReg, 7e PzDiv "Gespensterdivision"</li>
					</ul>
					<p class="card-text">Rommel's 7th Panzerdivision met some French Char B1b's near the Belgian town of Flavion. The French tanks were larger, stronger and better armed than the German forces but dispersed and confused. Rommel did what he did best; drive on and let the rear guard use their FlaKs on the French.</p>
					<a href="009.php" class="btn btn-outline-info">Rommel in Flavion</a>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw 38(t) Ausf. E</h4>
				<img class="mx-auto d-block" src="draw/pz38/pz38e-1s.png" alt="PzKpfw 38(t)">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Borisov, bij Minsk, Wit-Rusland</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> July 12th, 1941</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> PzAbt I, 28e PzReg, 18e PzDiv, XXXXVII Armeekorps, 2e PzGruppe</li>
					</ul>
					<p class="card-text">The Germans got quite a scare when they first met Soviet T-34s. In one instance, the 18e Panzerdivsion was flank attacked by brand new T-34s from the local military school and Yakov Kreizer's 1st "Moscow" motorised infantry division. Those hit the Germans pretty hard, but could not stop them.</p>
                </div>
            </div>
        </div>
        
	</div>
 
<!--Spacer-->
	<div style="height:100px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="pz2.php" class="btn btn-outline-secondary">< PzKpfw II</a>
		<a href="pz3.php" class="btn btn-outline-secondary">PzKpfw III ></a>
	</div>


<!--Spacer-->
	<div style="height:100px"></div>	
	
<!-- ImageCarousel -->
	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="pic/pz38/pz38-1.jpg" alt="Los Angeles">
				<div class="carousel-caption">
					<h3>Czech colours</h3>
					<p><b>and a silly helmet</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz38/pz38-2.jpg" alt="Chicago">
                <div class="carousel-caption">
					<h3>Pink slip racing</h3>
					<p><b>And they're like, mine's better than yours</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz38/pz38-3.jpg" alt="New York">
                <div class="carousel-caption">
					<h3>Lost my keys!</h3>
					<p><b>I'm sure I saw them just now</b></p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
		<a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
	</div>

<!--Spacer-->
	<div style="height:100px"></div>
	
<!--Footer-->
<?php include("php/footer.php"); ?>

</div>

</body>
</html>
