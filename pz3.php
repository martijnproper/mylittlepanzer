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
			<h1 class="display-2">PzKpfw. III</h1>
			<img src="pic/pz3/pz3_main.jpg" class="rounded float-lg-right p-3" alt="I'll have the bacon cheesburger please">
			<h3><i>A good little tank</i></h3>
			<div style="height:50px"></div>			
			<p>The Panzer III is a pretty little tank, and a very good one. Yes, it had a smaller gun than the similar Somua S35. And no, it wasn’t as massive as TOG-2. But it had the right idea: <b>a three-man turret, good radio sets and torsion bar suspension.</b> <br>Well-designed and adaptable, it was used mainly in the beginning of the war. The tank played an important role in the invasion of Poland, the battle for France, the North-African theatre and Operation Barbarossa. Later in the war it served mainly as support vehicle, carrying the old Panzer IV's 7,5cm gun.<br> <b>If I could choose one single tank to park on my driveway, this would be it.</b></p>
		</div>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--CARDS-->
    <div class="row justify-content-center">
        
		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw III ausf. E</h4>
				<img class="mx-auto d-block" src="draw/pz3/pz3e-1s.png" alt="PzKpfw III ausf. E">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Ochota, Warsaw, Poland</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> September 8th, 1939</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> PR. 35, PD. 4</li>
					</ul>
					<p class="card-text">Fall Weiss was not the armoured rollercoaster people sometimes imagine it to be. Ask Hauptfeldwebel Ziegler - he was kicked straight back out of Warsaw by the defending Poles.</p>
					<a href="001.php" class="btn btn-outline-info">Read Ziegler's story</a>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center" data-toggle="tooltip" title="Panzerbefehlswagen, so a command vehicle."><u>PzBfw</u> III ausf. E</h4>
				<img class="mx-auto d-block" src="draw/pz3/pzbfw3e-1s.png" alt="PzBfw III ausf. E">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Heinenoord bridge, near Rotterdam, the Netherlands</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> May 13th, 1940</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 1. Abt, 33. PR, 9. PD</li>
					</ul>
					<p class="card-text">Not a lot happened in the Netherlands, during the war. So the things that did happen are taken Very Seriously indeed. At this bridge, Dutch and German soldiers shot at each other. Then, the entire country suddenly surrendered.</p>
					<a href="002.php" class="btn btn-outline-info">Read on...</a>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw III ausf. E</h4>
				<img class="mx-auto d-block" src="draw/pz3/pz3e-2s.png" alt="PzKpfw III ausf. E">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Chateau de Quesnoy, Quesnoy-sur-Airaines, Frankrijk</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> May 25th, 1940</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 25. PR "Mondschein", 7. PD</li>
					</ul>
					<p class="card-text">The French sometimes used colonial troops and in this case, it's <i>Germans versus Nigerians</i>. The black soldiers proved quite tough. As usual, the German armour just drove on and let their infantry deal with the problem.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw III ausf. J (Kurz)</h4>
				<img class="mx-auto d-block" src="draw/pz3/pz3j-kurz-1s.png" alt="PzKpfw III ausf. J">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Rostov on Don, Russia, USSR</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> 22 november 1941</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 13. PD, 1.PzArmee, AG Süd</li>
					</ul>
					<p class="card-text">By novermber 1941, Fall Barbarossa was grinding to a halt because supplies were running out. The Germans just managed to take Rostov on the Don but were soon kicked out again. This was their first serious defeat in the east.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw III ausf. J (Lang)</h4>
				<img class="mx-auto d-block" src="draw/pz3/pz3j-lang-1s.png" alt="PzKpfw III ausf. J">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> near Charkov, Russia</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> March 30th, 1943</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "4L1", 2e LPzK, 4e Co, IIe Abt, 1e PzReg, 1e SS PzDiv "LSSAH"</li>
					</ul>
					<p class="card-text">This is Michael Wittmann's little tank. He really wanted to command a Tiger but instead, he was given a Panzer III and sent off as a screening force. He was actually quite talented as a commander and quickly got his own platoon.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw III ausf. L</h4>
				<img class="mx-auto d-block" src="draw/pz3/pz3l-16PD.png" alt="PzKpfw III ausf. L">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Agropoli, Italie</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> September 9th, 1943</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 1e Co, 2e PzReg, 16e PzDiv, LXXVI Korps</li>
					</ul>
					<p class="card-text">This Panzer was driven by Hauptmann Friedrich-August Graf von Brühl. He fought in a large delaying action after the Allies landed at Taranto in Italy. After the war, he joined the newly formed Heer and went on as a major.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw III ausf. M</h4>
				<img class="mx-auto d-block" src="draw/pz3/pz3m-2PD.png" alt="PzKpfw III ausf. M">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> near Koersk, Russia, USSR</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> July 1943</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 23e PzReg, 2e PzDiv</li>
					</ul>
					<p class="card-text">Around the time of Kursk the venerable Panzer III was getting quite old. Its 5cm KWK 38 L42 was just about scratching the T34s and KVs sent against it. The Wehrmacht was slowly replacing them with Panthers, even though there were never enough of those to go around.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw III ausf. N</h4>
				<img class="mx-auto d-block" src="draw/pz3/pz3n-501.png" alt="PzKpfw III ausf. N">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Tebourba, Tunesie</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> December 3rd, 1943</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "21", 2e Zug, 1e Co, sPzAbt 501</li>
					</ul>
					<p class="card-text">The new Tiger tanks were assigned to heavy tank regiments. For support, they were paired with Panzer IIIs equipped with the old Panzer IV gun. These were set upon the Vichy French who had been lightning fast in surrendering to the allies. </p>
                </div>
            </div>
        </div>
	</div>
       

<!--Spacer-->
	<div style="height:100px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="pz38.php" class="btn btn-outline-secondary">< PzKpfw 38</a>
		<a href="pz4.php" class="btn btn-outline-secondary">PzKpfw IV ></a>
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
				<img src="pic/pz3/pz3_1.jpg" alt="Clunk">
				<div class="carousel-caption">
					<h3>Panzer vor!</h3>
					<p><b>...warte mal, da stimmt was nicht...</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz3/pz3_2.jpg" alt="Tunisia">
                <div class="carousel-caption">
                    <h3>Suspended</h3>
					<p><b>Hey! Put me down!</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz3/pz3_3.jpg" alt="Pink">
                <div class="carousel-caption">
                    <h3>Sendin' out the message to all of my friends</h3>
					<p><b>We'll be lookin' flashy in my Mercedes Benz</b></p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
		<a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
	</div>

<!--Spacer-->
	<div style="height:100px"></div>
	
<!--Footer-->
<?php include("php/footer2.php"); ?>

</div>

</body>
</html>
