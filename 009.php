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
	<h1 class="display-2">the Battle of Flavion</h1>
	<h3><i>In which mr. Rommel bravely bypasses the French</i></h3>

<!--Info box-->
	<div class="card float-right m-3" style="width:500px">
		<img class="mx-auto d-block" src="draw/pz38/pz38c-1l.png" alt="PzKpfw38(t)">
		<div class="card-body">
		<h4 class="card-title">"Moonshine"</h4>
		<!-- <h5 class="card-title">Type</h5> -->
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><i class="fas fa-bicycle"></i> PzKpfw38(t)</li>
				<li class="list-group-item"><i class="fas fa-map-marker"></i> Flavion, Belgium</li>
				<li class="list-group-item"><i class="fas fa-calendar"></i> 12th of May 1940</li>
				<li class="list-group-item"><i class="fas fa-cubes"></i> 25. PR "Mondschein", 7. PD</li>
			</ul>
		</div>
	</div>

<!--Spacer-->
	<div style="height:100px"></div>
	
<!--Page contents-->
	<h2>Fall Gelb comes to Belgium</h2>	
	<p>The battle of Flavion was fought on the 15th of May, 1940 near Charleroi, in Belgium, during the opening days of Fall Gelb. It’s considered to be the second large tank battle in human history, the first one being the battle for Hanut – a few days earlier. It’s quite an interesting fight because it illustrates the value of flexibility, persistence, combined arms warfare and proper logistics support. It also features a certain Herr Rommel. The tank displayed here is a Panzer 38(t), an old Czech tank fighting with the 7th Panzer Division. It was pressed into Wehrmacht service because it was really better than anything the Germans had built themselves. That morning, the maitre d’hotel suggested pancakes.</p>
	
	<h2>Setting the trap</h2>
	<p>After the war started on May 10th, the French sent a lot of reinforcements north to meet the enemy in Belgium. Why was that? Long story, that. First, we have the 1870 Franco-Prussian war. This was fought directly in the border area of both countries and ended in the siege of Paris, which pissed off a lot of French people. The effect of this was that the French massively reinforced their border with Germany. Then, along came the First World War. In that war, the Germans executed what they called the “von Schlieffen-plan”. This plan stated that the German armies should sweep west, then south, through Belgium to circumvent said French defences. Belgium was a neutral country, you see, and it was generally believed that this neutrality would be respected. This didn’t work as well as expected and the flashy German plan ended up being a horrible trench war.</p>
	
	<img src="pic/009/009-3.jpg" class="img-fluid rounded float-lg-right p-3" alt="Paris">
	
	<h2>Von Manstein to the rescue</h2>
	<p>The third version, as used by Hitler in WW2, was redesigned by OKH General von Manstein. He figured out that simulating the original von Schlieffen plan would draw the French and British defences north. The French border with Germany was heavily defended by the Maginot line and the Ardennes region considered impassable; therefore the only viable attack route for the Germans was seen as coming from Belgium. And the Netherlands, but that was a flank-defending backwater move. Suck on that, Holland! Well, who brings bicycles to an armoured battle, anyway? Well, the Germans painted just that picture with their Army Group B moving south through the Low Countries. The French took the bait and started taking up defensive positions in Belgium, leaving their eastern flank unprotected from attacks through those not-so-impassable Ardennes. But that’s another story.</p>
	
	<h2>Enter the French</h2>
	<p>On the outbreak of Fall Gelb, the French 1e DCR moves from their bases to Charleroi, Belgium, by road and rail to support their infantry forces already there. They are redirected to the east, however, when information about advancing German armour becomes available. It takes them a lot of time and gasoline to get to their assigned stations around Dinant however; the roads are clogged with refugees and Stukas are buzzing all around, smashing towns and tanks alike. Parts of 1e DCR reach Flavion by the evening of the 14th but their fuel tankers are still a long way off. Only the next morning do the supplies and more tanks arrive but it’s never enough. Thus, French general Bruneau is forced to take up defensive positions and hope for the best.</p>
	
	<blockquote class="blockquote">
		<p>Kamerad! Kamerad! Der Befehl is da, wir starten!</br>
		Kamerad! Kamerad! Die Mädels mussen warten!</p>
		<footer class="blockquote-footer">German armour song</footer>
	</blockquote>
	
	<h2>The Germans attack</h2>
	<p>At the same time, the Germans were having no such problems. All right, their tanks were quite small in comparison to the huge French B1bis, but there were a lot of them. They had infantry, they had air support. Fuel, ammunition, everything they needed. And cleanly shaven faces. Rommel’s 7. PzDiv had spent the night at Morville, just to the southeast of Flavion. At 0800 they moved to attach the French while 5. PzDiv came in from Falaen, to the northeast. About half an hour later, they met. The French were between a rock and a fuel station, really. Most of their vehicles were still refuelling, only 6 tanks of 3/28e BCC was able to resist as a unit. A little later, 10 tanks of 1/28e BCC joined their ranks a bit to the north. Finally, 10 more B1bis of 2/28e closed the rear. Those 26 French tanks were facing about 250 German Panzer, artillery, Grenadiere and air support by Stuka. That, Ladies and Gentlemen, is Blitzkrieg: overwhelming an enemy with locally superior, combined firepower. That is also why the French lost the war. They did very well, at first. The French immediately destroyed several German tanks, who were quite shaken by the French Kolosse. But as good tankers, they immediately started using the terrain for cover. Also, there’s a small hill between the 1/28e and 3/28e BCC. The Germans weren’t bothered as they used radios and three-man turrets. The French, however, used flags and one-man turrets. What’s the difference? Well, let’s examine.</p>
	
	<img src="pic/009/009-2.jpg" class="img-fluid carousel-inner"></br></br>  	
	
	<h2>A firing sequence</h2>
	<h4>French</h4>
	<p>The char commander sees a target.</br>His vehicle is equipped with two different type of cannon: one against infantry, one against tanks. The latter is in the turret, where this commander is all alone. So he’s hanging out of the back of the turret, scanning those tree lines. He sees his target by eye, goes into the turret and takes a shell out of the rack. He loads his gun, all on his own. He aims the gun by rotating the turret and looking through the gunsights. Which, I promise you, is insanely difficult. He has to look outside to scan for other threats. Re-acquire the target tank, who is on the move. Aim and… Fire! Miss! He orders the driver to move. He then has to stick his head outside (again, risking it getting shot off) and re-acquire the target by eyeball. Possibly, he has the chance to flag-signal his colleagues about the situation. Damn, where has that Panzer gone? Re-acquire, load, aim, fire!</p>
	<h4>German</h4>
	<p>The Panzer commander sees a target from the relative safety of his turret cupola.</br>
	Commander: “French tank, two o’clock, 400 meters. Radio, warn command!”</br>
	Gunner: “Check!” – <b>BAAAAM!!!</b> – “Miss!”</br>
	Commander: “Verdammt! You wait for my command!”</br>
	Loader: “AP shell, ready!”</br>
	Commander: “He’s moved to one o’clock!”</br>
	Gunner: “I see him!”</br>
	Commander: “Good, Bobby. Now…”</br>
	<b>BLAAAAM!!!</b></br>
	Gunner: “Whoo! Hit!”</br>
	Commander: “Scheisse, Mensch… OK, new target at eleven!”</p>

	<h2>The French get shot to pieces</h2>
	<p>The Germans had one problem, though. They used 37mm AP guns in their tanks and those shells were rather ineffective against the huge French tanks. The shells kept bouncing off, to the dismay of the Panzer crews. The combat was getting real close, about 100m. Most 37mm PaK shells bounced off their French targets but slowly, one by one, the French machines were disabled – possibly by ablation. One was put on fire, another’s commander got killed. Plus, they were quickly running low on fuel. After their last litres are spent, the electrically operated turrets stop working. About an hour into the battle, the French line was slowly dying. And, of course, around 0930 more German tanks moved into outflank the French, who were suddenly hit by many, many shells. They valiantly attempted to defend their positions but really, the battle was already over.</p>

	<h2>Tombouctou</h2>
	<p>While several German Panzer were burning in front of the French line, most of the French tanks were by now dead. For example, “Tombouctou”, a Renault B1bis. After 2 hours of battle, the hull was pierced by shells and splinters and the superstructure penetrated several times. Close to being immobilized, the poisonous ricin oil of the Naeder system was leaking. After a big effort from the crew, the tank started moving but she was facing German artillery and 8 German tanks attacking it on the rear. A fire started in the tank but was quickly stopped – the battle goes on. Finally, a track was hit and blown 20 meters away, stopping the tank. The crew exited by the floor hatch, armed with pistols, but was quickly captured. They were close to being executed by the Grenadiere 2) but they got saved by a German colonel.</p>

	<img src="pic/009/009-1.jpg" class="img-fluid rounded float-lg-right p-3">
	
	<h2>This is the end, my friend</h2>
	<p>One after one, out of fuel, the other French tanks are completely destroyed. The 8.8cm FlaK from the 5.PzD and 7.PzD, used as AT guns, fired at the French tanks from over a kilometre away. The ammunition racks of the French tanks are empty but the German attack remains extremely violent. Under heavy enemy fire, seething with rage, many French abandoned their vehicles or simply scuttled them. Many French crews kept offering resistance with miscellaneous small arms instead of retreating.</p>

	<p>At 14h00, after 6h30 of battle in impossible odds, the 28e BCC still held its position but was slowly submerged by the packs of German tanks. Still operational tanks open fire at point-blank range. Losses increasing, they kept up the defence. Around 1800, a retreat order was received. Some of the French tanks retreated to Stave and Chastre while the rest fought and died on the spot. At 19h00, several B1bis tanks were still firing but the battle was over.</p>

	<h2>Lessons Learned</h2>
	<p>The French could field about 150 chars de combat in this battle against about 550 Panzer. While the French offered heavy resistance and killed a lot more German vehicles than they lost themselves, the remains of 1e DCR was but a shadow of its former self. They lost the battle because they were completely alone, unsupported and undefended. Badly used, the tanks and men fought with courage but died completely in vain. Well, they did scare the German High command who halted Rommel for a day. Which annoyed him so much, he completely ignored his own High Command from that moment on, earning his group the honorific “Gespensterdivision” because nobody knew where they were.</p>

<!--Spacer-->
	<div style="height:50px"></div>

<!-- Bibiografie -->
	<h3>Biblio</h3>
	<ul class="list-group list-group-flush">
		<li class="list-group-item"><a href="#" data-toggle="tooltip" title="Hooray!">“Divided and Conquered: The French High Command and the Defeat of the West, 1940.” (Jeffery A. Gunsburg, 1979)</a></li>
		<li class="list-group-item"><a href="#" data-toggle="tooltip" title="Hooray!">chars-francais.net</a></li>
		<li class="list-group-item"><a href="#" data-toggle="tooltip" title="Hooray!">testofbattle.com</a></li>
	</ul>

<!--Spacer-->
	<div style="height:50px"></div>

<!-- ImageCarousel -->
	<h3>Map</h3>
	<div class="embed-responsive embed-responsive-16by9">
		<div id="map_canvas" class="embed-responsive-item" style="border: 1px solid black"></div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11759.742156987102!2d4.709485243569332!3d50.249612892194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c1ed5513a12003%3A0x4676a5319534bdb7!2sFlavion%2C%205620%20Florennes%2C%20Belgi%C3%AB!5e1!3m2!1snl!2snl!4v1608201045538!5m2!1snl!2snl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="pz38.php" class="btn btn-outline-secondary">Back</a>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--Footer-->
<?php include("php/footer2.php"); ?>


</div>

</body>
</html>
