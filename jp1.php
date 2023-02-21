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
			<h1 class="display-2">Jagdpanzer</h1>
			<img src="pic/jp1/jp1-mains.jpg" class="rounded float-lg-right p-3" alt="I'll have the bacon cheesburger please">
			<h3><i>Bushwhacking the Allies</i></h3>
			<div style="height:50px"></div>			
			<p>To the untrained eye, there is little visual difference between a Sturmgeschütz and a Jadgpanzer. They're both low, turretless tracked vehicles with a big gun. However, they were actually quite different. For example: a StuG IV is boxy box on tracks, intended to support the infantry and taken an occasional pot shot at an enemy tank. A Jagdpanzer IV, built on the same chassis, is designed as a dedicated tank hunter. It has a different internal lay-out, better rangefinders, sloped armour and a larger gun - that of the Panther, in fact. The Germans built a Jagdpanzer on the basis of every chassis they used, ending in the behemoth Jagdtiger.</p>
		</div>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--CARDS-->
    <div class="row justify-content-center">
        
		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">Jagdpanzer "Hornisse"</h4>
				<img class="mx-auto d-block" src="draw/jp1_1.jpg" alt="Jagdpanzer Hornisse">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Vitebsk, Russia</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> December 15th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 1e Co, sPzJgAbt 519</li>
					</ul>
					<p class="card-text">The Nashorn had a good gun but little protection for the crew - the top was open (molotov cocktails!) and the side armor only offered protection against rifle bullets. It started life as the "Hornisse" but Hitler renamed it to "Nashorn", which on closer inspection is not a bad name. This one belonged to Albert "<i>the Tiger of Vitebsk</i>" Emst, who would later fight one of the few Jagdtigers...</p>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">Jagdpanzer IV/48</h4>
				<img class="mx-auto d-block" src="draw/jp1_2.jpg" alt="Jagdpanzer IV/48">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Ramscheid, near Hellenthal, Germany</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> December 16th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 12e SS PzJgAbt, 12e SS PzDiv "Hitlerjugend", 6e Pz. Armee</li>
					</ul>
					<p class="card-text">This jagdpanzer was commanded by Rudolf Roy, who whould get his head shot off on the next day. The "Hitlerjugend" that he was part of, was intended to exploit the first breakthroughs in the Battle for the Ardennes. Which would have gone the Allies' way, even <b>if</b> Rudolf had survived. This illustrates the tank commander's conundrum: if you stick your head outside of the hatch, you can see better what to shoot at, but be prepared to lose your head.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">Ferdinand</h4>
				<img class="mx-auto d-block" src="draw/jp2e_1.jpg" alt="Freddy">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Kursk, Russia</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> July 5t, 1943</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> sPzJgAbt 654, PzJgReg 656, 41 PzCor, AG Mitte</li>
					</ul>
					<p class="card-text">At Kursk, sPzJgAbt 654 had 44 Ferdinands. That was one too few; the missing one was still on the test bench in Kummersdorf. These early Ferdinand were unreliable pieces of junk, and most of them just broke down. However, the gun was great. So they were not unsuccessful in the short time they were in service - many Russian tanks can testify to that.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">Elefant</h4>
				<img class="mx-auto d-block" src="draw/jp2f_2.jpg" alt="Dumbo">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Zossen, near Berlin, Germany</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> April 20th, 1945</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> sPzJgAbt 614, KG "Ritter"</li>
					</ul>
					<p class="card-text">After the battle of Kursk, the surviving Ferdinands were sent on to the Nibelungenwerke factory in Austria where they were converted into Elefants. That means: extra armour, a ball mounted MG, Zimmerit and a cupola. Also, the silliest rifle in history: a StG44 Krummlauf. sPzJgAbt 614 was equipped 4 remaining Elefants and added to Kampfgruppe "Ritter" near Zossen, to the south of Berlin. They uselessly defended the city against the approaching Russian army.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">Hetzer</h4>
				<img class="mx-auto d-block" src="draw/hetzer_3.jpg" alt="PzKpfw III ausf. J">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Tulkincia, Lithuania</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> September 3rd, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 1e Co, PzJgAbt 551</li>
					</ul>
					<p class="card-text">Kompanieführer Oberleutnant Wolf-Dieter Lützow's Hetzer. 551 was part of the massive retreat of Armeegruppe Nord after the failure of the siege of Leningrad. The German army fought with the usual conviction and expertise, and the Russians suffered heavy losses. However, they could afford these losses, which was not the case for the Germans. PzJgAbt 551 came to Tulkincia in a particularly dangerous situation - they were threatened with yet another encirclement - and had to be liberated by the tanks of Panzer-Regiment Großdeutschland.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">Jagdpanther</h4>
				<img class="mx-auto d-block" src="draw/jpant_4.jpg" alt="PzKpfw III ausf. L">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Les Loges, Normandie, France/li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> July 30th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 2e Co, sPzJgAbt 654</li>
					</ul>
					<p class="card-text">On 30 July, the Jagdpanthers of 654 were lying in ambush, something for which the Normandy bocage was exceptionally suitable. Within minutes they were able to take out a dozen Churchill tanks from the British 6th Guards tank brigade before being chased away by tanks from the same unit.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">Jagdtiger</h4>
				<img class="mx-auto d-block" src="draw/jtig_2.jpg" alt="PzKpfw III ausf. M">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Rimling, France</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i>  January 5th, 1945</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 3rd Co, sPzJgAbt 653, 17e SS Korps</li>
					</ul>
					<p class="card-text">"Heavy tank hunter division 653" fought its way back from Italy, to the Ardennes and operation Nordwind. There, remnants of the Wehmacht tried once more to cut of the American supply lines - to no avail. After this, the division went to Austria where it joined the 1st and was one of the last units in the war to surrender.</p>
                </div>
            </div>
        </div>
        S        
	</div>       

<!--Spacer-->
	<div style="height:100px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="sg3.php" class="btn btn-outline-secondary">< StuG</a>
		<a href="#" class="btn btn-outline-secondary">Prototypes ></a>
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
				<img src="pic/jp1/jp1-1.jpg" alt="Los Angeles">
				<div class="carousel-caption">
					<h3>By the numbers shall you know them</h3>
					<p><b>323 from 653</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/jp1/jp1-2.jpg" alt="Chicago">
								<div class="carousel-caption">
					<h3>Tiger stripes</h3>
					<p><b>on a Panther</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/jp1/jp1-3.jpg" alt="New York">
								<div class="carousel-caption">
					<h3>The dust in Kursk</h3>
					<p><b>stays mainly in the plain</b></p>
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
