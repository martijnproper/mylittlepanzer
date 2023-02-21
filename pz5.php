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
			<h1 class="display-2">PzKpfw. V "Panther"</h1>
			<img src="pic/pz5/pz5-main.jpg" class="rounded float-lg-right p-3" alt="I'll have the bacon cheesburger please">
			<h3><i>Primus inter pares</i></h3>
			<div style="height:50px"></div>			
			<p>The Panther is, simply put, a beautiful tank. The first of a new generation, the golden poster boy of German engineering excellence. It was fast, mobile and had a wicked main gun. Then again, it was overly complicated, easily overheated and very, very expensive. This is normal for Germans, by the way. You see, a Russian engineer will generally be happy if a machine <i>just works</i> and can be repaired by hitting it with a mallet. A German engineer will feel his design is succesful if it is a) complicated and b) expensive. Well, they succeeded on both counts! <br><br>But criticism aside, it's a wonderful machine. Even though the first ideas were put on paper before the war, the design process was speeded up after the Germans met the Soviet T-34. The Panzer 3's <i>Panzer Anklopfgerät</i> had trouble penetrating its armour, not to speak of the Panzer 4D's HE pop gun. And it's the speeding up that was part of the problem; this machine was rushed into service and, understandably, broke down a lot. <br><br> All in all, during the war and after the kinks had been worked out, this was the best tank in the world. Centurion and IS-2 could certainly match it, maybe (very maybe) so could Pershing. Thing is, all those tanks were designed and built <i> to counter the Panther</i>. This one was here first, the OG and primus inter pares. And still, STILL, it's not as badass as Tiger.</p>
		</div>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--CARDS-->
    <div class="row justify-content-center">
        
		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw V ausf. D</h4>
				<img class="mx-auto d-block" src="draw/pz5/pz5d-432.png" alt="PzKpfw V ausf. D">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Gremuchiy, near Kursk, Ukraine, USSR</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> July 7th, 1943</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "432", PzAbt 51, PR 39, PzGrenDiv "Großdeutschland"</li>
					</ul>
					<p class="card-text">The first use of Panther tanks was at Kursk in 1943. The battle was even delayed because the things needed <i>just a little more work</i>. And, being the first production models, most broke down before even reaching the battlefield. But the ones that did work, were excellent.</p>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw V "Panther" ausf. D/VI-H</h4>
				<img class="mx-auto d-block" src="draw/pz5/pz5-4-653.png" alt="PzKpfw V Panther ausf. D/VI-H">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Genzano di Roma, Italy</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> February 10th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 1. Kp, 653e sJpzAbt</li>
					</ul>
					<p class="card-text">Schwere Jagdpanzerabteilung 653 was supposed to use Elefants, but it's workshop had a reputation for turning out "funnies". For example, a T34-FlaKpanzer or this one: Major Steinwachs' Bergepanther that got a Panzer IV H's turret fixed to it. </p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw V ausf. A</h4>
				<img class="mx-auto d-block" src="draw/pz5/pz5a-wiking.png" alt="PzKpfw V ausf. A">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Teklyne forest, near Tsjerkasy, Ukraine, USSR</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> January 20th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 5e SS PzDiv "Viking"</li>
					</ul>
					<p class="card-text">After Stalingrad and Kursk, the Germans retreated to the Panther-Wotan line in Ukraine, waiting for better times. But there were brigdeheads and one such was jumped by the Russians. This "kessel" contained the non-German Nazis of the 5th SS Panzer Division "Wiking" and the SS Sturmbrigade "Wallonien", lead by a Walloon named Leon Degrelle.</p>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw V ausf. A</h4>
				<img class="mx-auto d-block" src="draw/pz5/pz5a-langkeit.png" alt="PzKpfw V ausf. A">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Târgu Frumos, Romania</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> January 20th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "01", General-major Willi Langkeit's tank, PzReg "Großdeutschland"</li>
					</ul>
					<p class="card-text">The Soviet juggernaut was slowly closing in on the German <i>Heimat</i>. The advance was costly because the Germans knew what was going to happen if Ivan got his hands on the Fatherland. The fight was desperate and the Germans defended every inch of the way home. Not that it mattered - the Soviet wave was just too high.</p>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw V ausf. G</h4>
				<img class="mx-auto d-block" src="draw/pz5/pz5g-barkmann.png" alt="PzKpfw IV ausf. D/G">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Le Lorey, bij Saint Lo, Normandie, Frankrijk</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> July 27th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 2e SS PzDiv "Das Reich"</li>
					</ul>
					<p class="card-text">After the Allied invasion in Normandy, there there was an ever growing flood of Sherman tanks for the Germans to overcome. By that time the war was already over for them and I think many of the smarter Germans knew that very well. Maybe Ernst Barkmann knew too, but he was defending his crossroads and he wasn't giving up.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw V ausf. G</h4>
				<img class="mx-auto d-block" src="draw/pz5/pz5g-dr.png" alt="PzKpfw IV ausf. G">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> 2e SS PzDiv "Das Reich"</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> August 16th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> Hill 69.9, Tannenberg-line, Sinimäe, Estland</li>
					</ul>
					<p class="card-text">After the Germans pulled back from Leningrad, they fell back on the Narva line. A little further to the east, you'll find three low hills and a small village: Sinimae. That village saw a LOT of fighting and some very sad Estonians.</p>
                	<a href="013.php" class="btn btn-outline-info">Northern Doom</a>
                </div>
            </div>
        </div>
        
                <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw V ausf. G mit FG1250</h4>
				<img class="mx-auto d-block" src="draw/pz5/pz5g-sperber-fg.png" alt="PzKpfw IV ausf. G ">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> PzKp z.b.V. “Dreyer”, KG "Ritter"</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> April 1945</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> Zossen, Duitsland</li>
					</ul>
					<p class="card-text">The Panther was the world's first tank with night vision optics. A lot of myth surrounds these machines; no, they weren't used during <i>Wacht am Rhein</i>. On the Eastern front, though, they were: Hungary, Seelow and Zossen all saw IR assisted night fighting.</p>
                </div>
            </div>
        </div>
	
	</div>
 
<!--Spacer-->
	<div style="height:100px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="pz4.php" class="btn btn-outline-secondary">< PzKpfw IV</a>
		<a href="pz6.php" class="btn btn-outline-secondary">PzKpfw VI ></a>
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
				<img src="pic/pz5/pz5_1.jpg" alt="Los Angeles">
				<div class="carousel-caption">
					<h3>So, Willy...</h3>
					<p><b>how did we get into this mess?</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz5/pz5-2.jpg" alt="Chicago">
				<div class="carousel-caption">
					<h3>Baby it's cold outside</h3>
					<p><b>Say what's in this drink?</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz5/pz5_3.jpg" alt="New York">
								<div class="carousel-caption">
					<h3>in Breda</h3>
					<p><b>You're allowed to climb this thing</b></p>
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
