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
	<h1 class="display-2">Carius at Sinimae</h1>
	<h3><i>The Old Man and the Snow</i></h3>

<!--Info box-->
	<div class="card float-right m-3" style="width:500px">
		<img class="mx-auto d-block" src="draw/pz6/011b.png" alt="PzKpfw VI Tiger">
		<div class="card-body">
		<!-- <h5 class="card-title">Type</h5> -->
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><i class="fas fa-bicycle"></i> PzKpfw VI "Tiger"</li>
				<li class="list-group-item"><i class="fas fa-map-marker"></i> Sinimae, Estonia</li>
				<li class="list-group-item"><i class="fas fa-calendar"></i> Winter 1943-1944</li>
				<li class="list-group-item"><i class="fas fa-cubes"></i> AG Nord, sPz.Abt. 502</li>
			</ul>
		</div>
	</div>

<!--Spacer-->
	<div style="height:100px"></div>
	
<!--Page contents-->
	<p>The subject of this story, Otto Carius, was a brilliant tank commander who got to play with the first generation of Tiger tanks. In this article, we follow him and the schwere Panzer-abteilung 502 while they fight it out with the Soviets during the beginning of the Battle for the Blue Hills at Sinimae, Estonia. In the first months of 1944, the Russians (or Soviets, or Ivan, whatever you like) tried to push the German army back into the Baltic sea after pushing them out of Leningrad. The German defense centered around Narva, Sinimae (a small village to the west) and the railway line to the south. It was a terribly harsh series of battles that are sometimes compared to Verdun in the First World War. It is also the point where, a few months after this story ends, the back of Army Group North was definitely broken.</p>
  	
	<h2>The Long Way Back</h2>
    <p>After Stalingrad, Kursk and the second battle of Kiev happened in 1943, the Germans were starting to weaken beyond the point of no return. The Soviets just kept coming at them, losing tons of men and equipment. But they could replace their losses where the Germans couldn’t. In that way, their armies in Russia were slowly bled dry. They became more and more vulnerable to the ever bolder soviet offensives. This story focuses on Army Group North during that time, and especially on a young reserve officer named Otto Carius.</p>
    <img src="pic/011/carius.jpg" class="img-fluid rounded float-lg-left p-3">
    <p>When he arrived in the area in July 1943, he had just received training on the new Tiger tanks and he positively marvelled at their size and strength. His first action was near Mga, during the final battles for Leningrad. They got as far as <a href="https://goo.gl/maps/wF3wLbhpdBQ2">Sinyavino<a> but were forced back after <a href="https://en.wikipedia.org/wiki/Battle_of_Krasny_Bor">the battle of Krasny Bor</a>, to the railhead at Gatsjina and further along the <a href="https://goo.gl/maps/X9ND4HThwX42">rollbahn</a>, the main strategic road, to Volosovo and <a href="https://en.wikipedia.org/wiki/Kingisepp%E2%80%93Gdov_Offensive">Kingisepp</a>. After the heavy fighting there, the Germans were forced to retreat even further – to the river Narva and the <a href="https://en.wikipedia.org/wiki/Panther%E2%80%93Wotan_line">‘Panther line’</a>. These battles were the end of the Siege of Leningrad and really, the beginning of the end for Army Group North.</p>
	<p>Carius then met with SS-Brigadeführer Fritz von Scholz in his headquarters, an old bus. The two men talked quite openly and von Scholtz admitted that “if you want to be exact about it, this entire line exists only on paper. (…) When we then wanted to occupy the front line of the bridgehead indicated on the map, we discovered that Ivan was already sitting in it. I then set up a new bridgehead line. It will be your mission to help the men up front in reaching the best positions for their sectors. They then have to be fortified and held. Since the Russians only have weak advance guard forces in the area, it shouldn’t be all too difficult to push them back, thus enabling my men to fortify their front line.”</p>
	<p>Thus, Carius and his 502. Schwere Panzer-Abteilung spent a short time with the SS Division “Nordland” who he really grew to admire. He helped defend the city of Narva on the Estonian-Russian border during the (obviously) <a href="https://en.wikipedia.org/wiki/Narva_Offensive">battle of Narva</a>. After a short time, though, he was pulled back to Sinimae, where the Waffen-SS men would later fight the battle of the Blue Hills. Carius, however, was there for the opening phases and Operation Strachwitz, after which he would be pulled back to rest and sent to another part of Russia.</p>
	
	<h2>Otto Carius, Ivan and Orphanage Hill</h2>
	<p>Newly arrived at his new station, Carius and his buddy Kerscher went to look at the front line which ran along the Narva – Tallinn railway line. The Soviets (or generically Ivan, to use his words) had dug bunkers into the high railway embankment and posted AT-guns along the line. “Our line ran north of the railway embankment and consisted of strongpoints.”, Carius tells us. “At about the middle of this leg, however, it pushed into the enemy bridgehead on both sides of a trail. There it had the shape of a boot. The northern portion of the Russian-occupied terrain was thus split into two parts, the east sack and the west sack.” They went to inspect the defensive strongpoints and were amazed by the lack of men and equipment. Remember, we’re talking five strongpoints, two Tiger tanks, and some StuG against several thousand Soviet soldiers with AT-guns, T-34s and field artillery. The strongpoint had been occupied by a company, just like the farmhouse.</p>

    <blockquote class="blockquote">
		<p>“One shouldn't be deceived by the word 'company', however. That meant twenty-five to thirty men.”</p>
		<footer class="blockquote-footer">Carius</footer>
	</blockquote>
	
	<p>In the freezing winter cold, the Soviets were in their element. Slowly, they were building up their strength while being “suspiciously quiet”. The Germans spent their days scrounging food, freezing their butts off and delousing themselves. And, of course, getting peppered by mortar rounds. The German strongpoints were thus destroyed one by one, making the infantry’s task even more difficult.</p>
	
	<h2>Ivan digs in</h2>

    <p>And a short while later, infantry strength was reduced even further: they were left with twelve men. However, Carius was able to scrounge up a platoon of StuGs and some 2cm quad FlaK-guns to help defend the ruined farmhouses. They were truly living on the front lines, then, in a very cold winter. He writes: “Living in a tank for weeks at a time wasn’t something to shout about. One needs a little bit of fantasy to be able to imagine it in real terms. The confinement and the grim cold took its toll after a while. Our health was under considerable attack, even though we didn’t want to admit it to ourselves. The results showed up later, however. Moisture from our breath and the petroleum lamp settled onto the inner walls of the tank. It soon froze and formed a thick, white coat of frost. If one of the crew nodded off and wound up with his hair on the wall of the tank, then it was actually frozen to it when he woke up.”</p>
	<p>Then, on the early morning of March 17th 1944, it was time to wake up. The Russians opened up on them with everything they had, from light infantry mortars to heavy field guns. Carius and his men had been sleeping in one of the farmhouses and the grenade hell outside prevented them from getting to their tanks.</p>
    <img src="pic/011/carius_kerscher.jpg" class="img-fluid rounded float-lg-right p-3"> 
	<p>The Russian’s plan, of course, was to break through the German lines, go around Sinimae and thus cut off the German defenders between there and Narva. They made quite a show of it. The German tankers were able to reach their machines after a while, though, and that was when the fight really got going. Carius and Kerscher, another Tiger commander, were advancing together. Carius turned his attention towards the AT-guns around the railway embankment to the south and Kerscher was looking towards the open field to the east. There, a bunch of T-34s was already advancing along the Rollbahn. While Carius’ gunner shot up the guns, he himself just happened to look in the right direction. Suddenly, a wild T-34 appeared just behind Kerscher (who obviously didn’t see it) and Carius shouted a warning into the radio. Kerscher managed to turn his gun around and fired point-blank into the Russian, who ended up dead in a shell crater.</p>
	<p>They were all very lucky, then. Had the Russian tank commander been any better, he would have shot the back of Kerscher’s Tiger, possibly killing him. The T-34s along the Rollbahn never even saw the German Tigers, also because they were all buttoned up. They were knocked out one by one before any of them understood where the fire was coming from. That’s the advantage a tank commander has when he sticks his head out of the tank: it’s bloody cold and he risks getting his head shot off, but he can see around him. Those Russians didn’t, and they couldn’t see, so they died.</p>
	<p>The Russian Army, however, had lots of replacement Ivans. However severe their losses were, they kept attacking the Narva bridgehead. Around noon on the 19th of March, the Russians attacked again after an artillery barrage. They wanted to straighten out their front lines to create better starting points for further attacks. Carius and Kerscher knocked out another six T-34s in that fight but the Russians were still able to penetrate the German lines. Panic was about to spread among the German infantry – one would for less. We’re talking a handful of tanks and about ten German soldiers against thousands and thousands of Russians. Luckily, the mere presence of two Tigers deterred Ivan. Well, not just that; the Russians needed a breather too because the Germans had by then caused extremely heavy casualties on them: thirty-eight tanks, four assault guns, seventeen artillery pieces and perhaps a thousand men.</p>
	<p>At this point, the Germans were quite satisfied with their performance. But a lot more was to come.</p>
	
	<h2>Operation Strachwitz part One</h2>
	<p>Oberst der Reserve Hyazinth Graf Strachwitz was a peculiar man, to say the least. Heavily decorated, he pressured everyone –his boss included- to call him “Herr Graf” in stead of “Herr Oberst”. He was really good at organizing and trusting his troops to do what he wanted. The Count was called in to repel Ivan once and for all. We know now this would never happen; this was the whole of the Northern Soviet armies against a small patch of Germans. Very able Germans, it must be said, but still. Ivan wasn’t going to be stopped by anything short of a nuclear device. And even that is doubtful; uncle Stalin didn’t care much for the health of his troopers. And nukes didn't exist yet, of course.</p>
	    <img src="pic/011/011-2.jpg" class="img-fluid rounded float-lg-left p-3"> 
	<p>The route of attack into the “West sack” that the Panzergraf had chosen wasn’t wide nor firm enough to carry the heavy Tiger tanks; he had taken four Panzer IVs along, scrounged from somewhere, for this first push. He personally rode in the front tank and so won the confidence of his men.</p>
	<p>“The main thing I want to emphasize is that the entire operation has to run according to schedule. That means that no tank may remain on the road and block me. The success of the entire action may be jeopardized through delay. And I won’t allow any of that!”</p>
	<p>Initially, Carius and his company were put in a support role, holding back the pressure so that their colleagues in the SdKfz’s and Panzer IVs could advance easily. The Soviets in the western area were completely overwhelmed by this small, fast force and most of their men and equipment fell into German hands. As a reaction, of course, STAVKA pumped up the “East sack” even more. They didn’t see that the German’s next attack would be in a entirely different fashion.</p>
	<p><i>“Well, gentlemen, this is how I see things,”</i> Graf Strachwitz said. <i>“Our Kampfgruppe will conduct a frontal attack against the so-called ‘east sack.’ Starting at the ‘Kinderheim,’ it will move across the plain to the rail crossing. Four ‘Tigers’ will drive point. After crossing the railway embankment, they will swing to the right and roll it up. The following four ‘Tigers,’ which will each have a squad of infantry mounted on them, will drive like the devil to the fork in the road, which is 100 meters southeast of the rail crossing. This fork must be reached as quickly as possible and kept open. That way, the four Panzer IVs and the APCs can advance and occupy the plain, which runs even with the bottom of the pocket.” He pointed to the map. “So, that takes care of that. But the main thing I want to emphasize is that the entire operation has to run according to schedule. That means that no tank may remain on the road and block me. The success of the entire action may be jeopardized through delay. And I won’t allow any of that! I hereby expressly order that every immobile tank be shoved into the marsh by any means possible so it doesn’t hold up the other vehicles. The responsibility for the success of the operation lies squarely on the tank commander, regardless of his rank. Is everything clear?”</p>
	<p>“Jawohl, Herr Graf!”</p></i>
	<p>OK, let’s think about that. Here we have a still-world-famous General commanding a still-world-famous Panzer division. They’re fighting literally thousands upon thousands of Soviets, all hell-bent on revenge and Geman blood. In theory, at least. They have tanks, assault guns, AT-guns, huge artillery pieces, lots of men AND vodka. The Germans are planning their defense with twelve tanks, a couple of soldiers and a few armoured personnel carriers. They’re not expecting to lose and that, ladies and gentlemen, I think is amazing. This is tenacity. Or stupidity, if you’re so inclined.</p>
    <img src="pic/011/strachwitz.jpg" class="img-fluid carousel-inner"></br></br>
	<p>The Germans were doing things by the book. Graf Strachwitz had the artillery fire off some rounds in the general Russian direction to mask the noise of this own tanks. Those tanks broke out and advanced rapidly through the woods, racing past Soviet guns and not getting shot at.</p>
	<p>Carius recounts an incident that showed “how much our operation was also dependent upon chance. In addition to carefulness and bravery, a soldier needs a bit of luck—more so than someone in civilian life. A T34 suddenly surfaced out of a cut in the woods to the side. It was driving south along our trail. Of course, it had no intention of attacking. It just wanted to escape to the south. We, on the other hand, weren’t going to knock it out, because it then would have blocked the all-important, and only, way for us. So for once, our intentions were the same.”</p>

	<h2>A bit of quiet returns</h2>
	<p>And the, all was quiet. The Germans at Sinimae were reinforced by Großdeutschland after that unit had broken through the Soviet lines, captured an enemy division and its equipment plus a commander in his underpants. Carius wanted to see the battlefield so he jumped in his Kübelwagen and went to see the mess they had made. The Russians left a lot of heavy weapons when they fled and the air stank of burning flesh and gasoline.</p>
	<p>“On the plain, I found a Russian tank turret all by itself. The turret had been ripped off the hull by the explosion and flew through the air. The cannon bored into the marshy ground almost up to the gun mantlet, while the turret jutted upright as if on a stick. Almost all the trees in the woods south of the railway embankment were charred black and shot to pieces. It created a ghostly impression, as if all life had completely died out. Not a single living creature was to be seen in these dead woods. The birds had withdrawn after all of nature had been trampled on by the humans.”</p>
	<p>Carius and his company kept doggedly defended the area until they were sent to the rear for rest and recuperation. He survived the war (by surrendering to the Americans) and spent his remaining days a) running his pharmacy and b) restoring the status of the common German soldier. I tend to agree – they certainly weren’t all Nazis. Most were just men with a strong sense of duty.</p>
	<p>Let me, then, finish with his words: “All people want to live in peace and freedom. But we shouldn’t just always talk about human rights; we should also point out human obligations. Let us hope that the young generation creates a peaceful order that is lasting. The prerequisite for that will be the readiness to compromise on the part of all nations. In any case, we former combat troops know from bitter experience and, in memory of our fallen comrades, wish to pass on this reminder: War is the worst alternative to politics!”</p>
	
<!--Spacer-->
	<div style="height:50px"></div>

<!-- Bibiografie -->
	<h3>Biblio</h3>
	<ul class="list-group list-group-flush">
		<li class="list-group-item"><a href="https://books.google.nl/books/about/Tigers_in_the_Mud.html?id=aFPJMFZIZvMC&redir_esc=y">Tigers in the Mud, O. Carius</a></li>
		<li class="list-group-item">Wikipedia <a href="https://en.wikipedia.org/wiki/Battle_for_Narva_Bridgehead">1</a> | <a href="https://en.wikipedia.org/wiki/Battle_of_Tannenberg_Line">2</a></li></a></li>
	</ul>

<!--Spacer-->
	<div style="height:50px"></div>

<!-- ImageCarousel -->
	<h3>Map</h3>
	<div class="embed-responsive embed-responsive-16by9">
		<div id="map_canvas" class="embed-responsive-item" style="border: 1px solid black"></div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14297.643197719382!2d20.94927679032426!3d52.207257086815964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471eccaf97b7ca0d%3A0x60172ba24f8e93ea!2sOchota%2C%20Warschau%2C%20Polen!5e1!3m2!1snl!2snl!4v1608290676825!5m2!1snl!2snl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="pz6.php" class="btn btn-outline-secondary">Back</a>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--Footer-->
<?php include("php/footer2.php"); ?>


</div>

</body>
</html>
