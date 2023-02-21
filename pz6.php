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
			<h1 class="display-2">PzKpfw VI "Tiger"</h1>
			<img src="pic/pz6/pz6_main.jpg" class="rounded float-lg-right p-3" alt="I'll have the bacon cheesburger please">
			<h3><i>Bad Kitteh</i></h3>
			<div style="height:50px"></div>			
			<p>The Panzerkampfwagen VI “Tiger” is pure evil coolness, much like an Imperial Star Destroyer or Jean-Baptiste Emanuel Zorg. If you see one sitting next to a modern Challenger II, it still looks good. It wouldn’t last two seconds when facing said Challenger, but that somehow doesn’t matter. Even back then, it was an over-engineered, fragile box on tracks. It was far too expensive and the engine was positively anemic. However, if US soldiers faced a tank, it was a Tiger – even if it wasn’t. If you show one to a milennial baby, he’ll say “Tank!”. And this particular tank was commanded by Otto Carius, the most succesful tanker in history.</p>
		</div>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--CARDS-->
    <div class="row justify-content-center">

		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw VI "Tiger" ausf. H1</h4>
				<img class="mx-auto d-block" src="draw/pz6/005.png" alt="PzKpfw VI Tiger ausf. H1">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Mga, Russia, USSR</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> August 29th 1942</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "100", sPzAbt 502</li>
					</ul>
					<p class="card-text">The first Tigers were field-tested near Mga, during the Siege of Leningrad. It was not a success. The engines overheated (in the snow!) and 'the guy from the factory' kept swearing at the crews. One Tiger got stuck so bad it had to be abandoned overnight, only to be recovered <i>by the Russians</i> who were quite unimpressed.</p>
                </div>
            </div>
        </div>
        
		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw VI "Tiger" ausf. H1</h4>
				<img class="mx-auto d-block" src="draw/pz6/pz6-241.png" alt="PzKpfw VI Tiger ausf. H1">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Tataouine, Tunisia</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> January 12th, 1943</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "241", 2. Kp, sPzAbt 501, 10e PzDiv</li>
					</ul>
					<p class="card-text">You may well know Tiger 313 at the Bovington museum. This is not that tiger. This one spent its time shootung up Shermans at the Kesserine pass, before having to pull back. This was the first time the US Army saw actual combat and became a grown-up army in stead of a bunch of boy scouts.</p>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw VI "Tiger" ausf. H</h4>
				<img class="mx-auto d-block" src="draw/pz6/pz6-baeke.png" alt="PzKpfw VI Tiger ausf. H">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Zhurzhyntsi, the road to Tsjerkasy, Ukraine, USSR</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> 11 februari 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "123", Schweres Panzer Regiment Bäke</li>
					</ul>
					<p class="card-text">Gruppe Stemmerman was caught in a kessel near Korsun. The breakout attempt halted at Shanderovka because the Soviets were raining down shells and bombs on the retreating Germans. So much so, that the Germans named the village "the Gates to Hell" - and this from people who went through Kursk.</p>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PPzKpfw VI "Tiger" ausf. E (mitte)</h4>
				<img class="mx-auto d-block" src="draw/pz6/pz6-s04.png" alt="PzKpfw VI Tiger ausf. E (mitte)">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Mezhirichka, Oekraine</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i>  November 21st, 1943</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "S04", 2e Co sSSPzAbt 101 "Leibstandarte Adolf Hitler"</li>
					</ul>
					<p class="card-text">It was cold out there, and wet. Wittmann had the flu, but nevertheless decided to go out and make life miserable for the Russians. He was a Nazi posterboy and he had to be seen in battle - sick or not. He went to recon, on foot, and had a brief scuffle with a Russian tank commander who was doing the same. These things happen, you know…</p>
                </div>
            </div>
        </div>
                
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PPzKpfw VI "Tiger" ausf. E (mitte)</h4>
				<img class="mx-auto d-block" src="draw/pz6/011.png" alt="PzKpfw VI Tiger ausf. E (mitte)">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Sinimäe, Estland</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i>  November 21st, 1943</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> Otto Carius, sPzAbt 501</li>
					</ul>
					<p class="card-text">With four Tigers, two StuGs and about 40 Panzergrenadiere, Otto Carius helped to form the defence of Sinimae. The Russians brought two whole armies, so even if Otto and his friends tried really hard, they were never going to hold the line.</p>
					<a href="011.php" class="btn btn-outline-info">The Old Man and the Snow</a>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PPzKpfw VI "Tiger" ausf. E (spät)</h4>
				<img class="mx-auto d-block" src="draw/pz6/pz6-a.png" alt="PzKpfw VI Tiger ausf. E (spät)">
                    <ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> "A", 2e Zug, 1e Co, sPzAbt 504</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> 16 maart 1944/li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> Fossigano, bij Aprilia, Italie</li>
					</ul>
					<p class="card-text">The Leibstandarte SS "Adolf Hitler" had been fighting the Red Army for some time when, suddenly, they were shipped out to Italy. The Oberkommando expected them to kick out the Allies but I'm quite certain the soldiers were more interested in wine, food and Italian girls. Call it a holiday, then. Sometimes you have to seize the moment!</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PPzKpfw VI "Tiger" ausf. E (spät)</h4>
				<img class="mx-auto d-block" src="draw/pz6/pz6-tiki.png" alt="PzKpfw VI Tiger ausf. E (spät)">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> "812", III Abt. "DF", sSSPzAbt.102, 2eSS PzGrenDiv "Das Reich"</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> August 6th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> The crossroad near L'Abbaye Blanche, Mortain, Frankrijk</li>
					</ul>
					<p class="card-text">Very early in the morning III Abteilung "DF" approached the crossroads at L'Abbaye Blanche, just north of Mortain. They were told to defend it as part of operation Luttich, but the Allies knew all about that. They were ready and waiting. The battle of Falaise that followed effectively broke the Wehrmacht in France.</p>
                </div>
            </div>
        </div>
        
	</div>
 
<!--Spacer-->
	<div style="height:100px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="pz5.php" class="btn btn-outline-secondary">< PzKpfw V</a>
		<a href="pz7.php" class="btn btn-outline-secondary">PzKpfw VI-II ></a>
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
				<img src="pic/pz6/pz6_1.jpg" alt="Los Angeles">
				<div class="carousel-caption">
					<h3>See that T-34?</h3>
					<p><b>No, not anymore...</b></p>
				</div>
			</div>
						<div class="carousel-item">
				<img src="pic/pz6/pz6_3.jpg" alt="New York">
								<div class="carousel-caption">
					<h3>Tiger 131</h3>
					<p><b>It's The One and Only</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz6/pz6_2.jpg" alt="Chicago">
								<div class="carousel-caption">
					<h3>Another 131</h3>
					<p><b>Definitely not That One</b></p>
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
