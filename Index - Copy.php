<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="user-scalable = yes">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

<link rel="stylesheet" href="./css/styles.css"></link>
 <script type="text/javascript" src="./js/slideshow.js"></script>
 
  <link rel="icon" type="image/png" href="./img/favicon.ico" />
 
 <!-- Opera Speed Dial Favicon -->
  <link rel="icon" type="image/png" href="./img/favicon.ico" />
			
<!-- Standard Favicon -->
  <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />

<!-- For iPhone 4 Retina display: -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./img/favicon.ico">

<!-- For iPad: -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./img/favicon.ico">

<!-- For iPhone: -->
  <link rel="apple-touch-icon-precomposed" href="./img/favicon.ico">
</head>
	<body>

<div data-role="page" id="Home">
  <div data-role="header">
    <h1>Creepers Corner</h1>
	<div data-role="navbar" position="fixed">
		<ul>
			<li><a href="#Home">Home</a></li>
			<li><a href="#Modes">Modes</a></li>
			<li><a href="#Recipes">Recipes</a></li>
			<li><a href="#MineCon">MineCon</a></li>
			<li><a href="#Mods">Mods</a></li>
		</ul>
	</div>
 
  </div>

   <div data-role="content" id="container">
                <div id="right-col-header">
                    Welcome to Creepers Corner
                </div>

                <div id="right-col-text">
                    <div >
                        <img src="./img/minecraft_face.jpg" alt="Minecraft Face" />
                        <p>
                            Minecraft is a game about placing blocks to build anything you can imagine. At night monsters come out, make sure to build a shelter before that happens. Minecraft is developed by Markus Persson and it's been under development since May 2009.
                        </p>
                        <p>
                            The game is focused on creativity and building, allowing players to build constructions out of textured cubes in a 3D world.
                        </p>
                        <p id="viaLink">
                            Via: <a href="http://www.minecraft.net">Minecraft Website</a>
                        </p>
                    </div>
                </div>
  </div>
  
  <div id="slideshowContainer">
                    <script type="text/javascript">
                        addImage('./img/slideshow/minecraft_header.jpg', 'http://www.minecraft.net/');
                        addImage('./img/slideshow/minecraft_wiki.jpg', 'http://www.minecraftwiki.net/');
                        startSlideShow();
                    </script>
                    <a href="javascript:goToLink()"><img id="slideshow" src="./img/slideshow/loading.gif" alt="Slideshow Images" /></a>
                </div>

  
</div> 

<div data-role="page" id="Modes">
  <div data-role="header">
    <h1>Creepers Corner</h1>
	<div data-role="navbar" data-position-fixed="true">
		<ul>
			<li><a href="#Home">Home</a></li>
			<li><a href="#Modes">Modes</a></li>
			<li><a href="#Recipes">Recipes</a></li>
			<li><a href="#MineCon">MineCon</a></li>
			<li><a href="#Mods">Mods</a></li>
		</ul>
	</div>
  </div>

  <div data-role="content" id="container">
	  <div id="right-col-header">
						Modes
					</div>         
					
					 <p id="text" >
                          New to Minecraft?Creepers Corner provides suggestions for the best user experience out of this insanely addictive sandbox game.
						  Let's start with what kind of mode you want to play in<br></br>
						  <img src="./img/Modes/Creative-start.jpg" alt="creative" style="width:50" style="height:50"/><br></br>
						  </p>
					
				<div data-role="collapsible-set" data-theme="a">

						<div data-role="collapsible" data-collapsed="true">
							<h3>Creative</h3>
								<div id = "ModesContent">
									<p>Creative Mode<br></br>
									<img src="./img/Modes/Creative-Item.jpg" alt="creative" style="width:50" style="height:50" /><br></br>
									Wanted to build the most amazing project in a game but never had the resources or ability to create it? Creative mode is the option for you! The world is your oyster with an infinite source of blocks to build anything you can imagine. This mode allows you to build (or destroy) as much as you please. Make a castle out of diamonds, 
								    an underground lair; the possibilities of creative mode are endless.<br></br>
								<img src="./img/Modes/shuttle.jpg" alt="creative" style="width:50" style="height:50"/><br></br>
								<img src="./img/Modes/metropolis.jpg" alt="creative" style="width:auto" style="height:auto"/><br></br>
									</p>
								</div>
						 </div>  
								
						<div data-role="collapsible">
							<h3>Survival</h3>
								<div id = "ModesContent">
									<p>Survival Mode<br></br>
										<img src="./img/Modes/ender.png" alt="creative" /><br></br>
											If you feel there is a lack of challenge in creativity mode why not try survival mode? This forces you to essentially survive with no inventory and seek resources from scratch. Begin with punching trees; build the essential tools as we see in Recipes and go out mining for the rare elusive diamonds. Don’t forget our favourites the creepers along with zombies, spiders, skeletons and endermen. There is never a dull moment in the survival mode of a game. 
											Be sure to be well equipped with a sword and armour at night time! 
									</p>
								</div>
						</div>	 	
				</div>		
					
	</div>					
	
</div> 	

<div data-role="page" id="Recipes">
  <div data-role="header">
    <h1>Creepers Corner</h1>
	<div data-role="navbar" data-position-fixed="true">
		<ul>
			<li><a href="#Home">Home</a></li>
			<li><a href="#Modes">Modes</a></li>
			<li><a href="#Recipes">Recipes</a></li>
			<li><a href="#MineCon">MineCon</a></li>
			<li><a href="#Mods">Mods</a></li>
		</ul>
	</div>
  </div>

  <div data-role="content" id="container">
			<div id="right-col-header">
                    Recipes/Crafting Basics
                </div>

                <div id="right-col-text">
				<!--Text and Images for Recipes page sourced by http://www.minecraft-crafting.net/ 9th December 2013 -->
				<p>To craft something in Minecraft move the required items from your 
					inventory into the crafting grid and arrange them in the pattern 
					representing the item you wish to create. The 2x2 crafting grid 
					can be accessed from the inventory screen and a 
					workbench contains a 3x3 grid when right clicked.</p>
				</div>
                    <div>
                      <div data-role="collapsible-set" data-theme="a">
 
						<div data-role="collapsible" data-content-theme = "a">
						<h3>Basic Recipes</h3>
							<div id = "RecipesContent">
						<p>Some basic essentials for survival mode MineCraft</p>
						<p style="font-family:Courier New">Wooden Planks (Build a cabin to be safe in the nighttime or fuel for furnace)</p><img id ="Recipe" src="./img/Recipes/basics/woodPlanks.png" alt="wood planks" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Crafting Bench (3X3 Crafting Grid; Really Important!)</p><img id ="Recipe" src="./img/Recipes/basics/craftbench.png" alt="craft bench" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Sticks (make some torches maybe?)</p><img id ="Recipe" src="./img/Recipes/basics/sticks.png" alt="sticks" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Torches (Put some down in areas so mobs don't spawn at night!)</p><img id ="Recipe" src="./img/Recipes/basics/torch.png" alt="torches" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Bed (Sets your spawn point for in case you die)</p><img id ="Recipe" src="./img/Recipes/basics/bed.png" alt="bed" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Chest (Store all the loot and mining goodies you found)</p><img id ="Recipe" src="./img/Recipes/basics/chest.png" alt="chest" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Furnace (Smelts all the ore you were mining)</p><img id ="Recipe" src="./img/Recipes/basics/furnace.png" alt="furnace" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Ladder</p><img id ="Recipe" src="./img/Recipes/basics/ladder.png" alt="ladder" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Fence</p><img id ="Recipe" src="./img/Recipes/basics/fence.png" alt="fence" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Boat</p><img id ="Recipe" src="./img/Recipes/basics/boat.png" alt="boat" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Slabs</p><img id ="Recipe" src="./img/Recipes/basics/slabs.gif" alt="slabs" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Stone Slabs</p><img id ="Recipe" src="./img/Recipes/basics/stoneslabs.gif" alt="stone slabs" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Sign</p><img id ="Recipe" src="./img/Recipes/basics/sign.png" alt="sign" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Door</p><img id ="Recipe" src="./img/Recipes/basics/door.gif" alt="door" style="width:50" style="height:50"/>
								</div>
						</div>
 
						<div data-role="collapsible" data-content-theme = "a">
						<h3>Tools</h3>
						<div id = "RecipesContent">
						
						<p style="font-family:Courier New">Pickaxe (For mining of course!) </p><img id ="Recipe" src="./img/Recipes/tools/pickaxe.gif" alt="pickaxe" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Shovel (Dig up some dirt and sand)</p><img id ="Recipe" src="./img/Recipes/tools/shovel.gif" alt="shovel" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Axe (Tired of punching trees for wood? Get an axe!)</p><img id ="Recipe" src="./img/Recipes/tools/axe.gif" alt="axe" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Hoe (Ready to start your own farm)<p><img id ="Recipe" src="./img/Recipes/tools/hoe.gif" alt="hoe" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Fishing Rod (Go fishing!)</p><img id ="Recipe" src="./img/Recipes/tools/fishingrod.png" alt="fishing rod" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Flint and Steel (Right Click on a 4X5 obsidian structure to go to the nether)</p><img id ="Recipe" src="./img/Recipes/tools/flintsteel.png" alt="flint and steel" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Sheers (Be a little humane and sheer the sheep for their wool to craft your bed)</p><img id ="Recipe" src="./img/Recipes/tools/sheers.png" alt="sheers" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Bucket (Collect water or milk)</p><img id ="Recipe" src="./img/Recipes/tools/bucket.png" alt="bucket" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Clock (What time is it?)</p><img id ="Recipe" src="./img/Recipes/tools/clock.png" alt="clock" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Compass (Just in case you get lost)</p><img id ="Recipe" src="./img/Recipes/tools/compass.png" alt="compass" style="width:50" style="height:50"/>
						</div>
						</div>
						
						<div data-role="collapsible" data-content-theme = "a">
						<h3>Defence and Armour</h3>
						<div id = "RecipesContent">
						<p>Get ready to fight the mobs before it gets dark out!</p>
						<p style="font-family:Courier New">Helmet</p><img id ="Recipe" src="./img/Recipes/defence/helmet.gif" alt="Helmet" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Chest Plate</p><img id ="Recipe" src="./img/Recipes/defence/chestplate.gif" alt="ChestPlate" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Leggings</p><img id ="Recipe" src="./img/Recipes/defence/leggings.gif" alt="Leggings" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Boots</p><img id ="Recipe" src="./img/Recipes/defence/boots.gif" alt="Boots" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Sword</p><img id ="Recipe" src="./img/Recipes/defence/sword.gif" alt="Sword" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Bow</p><img id ="Recipe" src="./img/Recipes/defence/bow.png" alt="Bow" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Arrow</p><img id ="Recipe" src="./img/Recipes/defence/arrow.png" alt="Arrow" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Horse Armour</p><img id ="Recipe" src="./img/Recipes/defence/horseArmour.gif" alt="Horse Armour" style="width:50" style="height:50"/>
						</div>
						</div>
						
						<div data-role="collapsible" data-content-theme = "a">
						<h3>Food</h3>
						<div id = "RecipesContent">
						<p>Hungry? Get that health up with some snacks!</p>
						<p style="font-family:Courier New">Cake</p><img id ="Recipe" src="./img/Recipes/food/cake.png" alt="Cake" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Bread</p><img id ="Recipe" src="./img/Recipes/food/bread.png" alt="Bread" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Cookie</p><img id ="Recipe" src="./img/Recipes/food/cookie.png" alt="cookie" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Bowl</p><img id ="Recipe" src="./img/Recipes/food/bowl.png" alt="bowl" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Mushroom Stew</p><img id ="Recipe" src="./img/Recipes/food/mushroomstew.png" alt="mushroom stew" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Golden Apple (Regenerates health)</p><img id ="Recipe" src="./img/Recipes/food/goldenapple.png" alt="golden apple" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Enchanted Golden Apple (Completes regenerates all your health; Great in PVP)</p><img id ="Recipe" src="./img/Recipes/food/enchantedgoldenapple.png" alt="enchanted golden apple" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Pumpkin Seeds</p><img id ="Recipe" src="./img/Recipes/food/pumpkinseeds.png" alt="pumpkin seeds" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Melon Seeds</p><img id ="Recipe" src="./img/Recipes/food/melonseeds.png" alt="melon seeds" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Melon Block</p><img id ="Recipe" src="./img/Recipes/food/melonBlock.png" alt="melon block" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Golden Carrot</p><img id ="Recipe" src="./img/Recipes/food/goldencarrot.png" alt="golden carrot" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Sugar</p><img id ="Recipe" src="./img/Recipes/food/sugar.png" alt="sugar" style="width:50" style="height:50"/>
						<p style="font-family:Courier New">Pumpkin Pie</p><img id ="Recipe" src="./img/Recipes/food/pumpkinpie.png" alt="pumpkin pie" style="width:50" style="height:50"/>

						</div>
						</div>
</div>
                    </div>
                
  </div>
</div> 

<div data-role="page" id="MineCon">

  <div data-role="header">
    <h1>Creepers Corner</h1>
	<div data-role="navbar" data-position-fixed="true">
		<ul>
			<li><a href="#Home">Home</a></li>
			<li><a href="#Modes">Modes</a></li>
			<li><a href="#Recipes">Recipes</a></li>
			<li><a href="#MineCon">MineCon</a></li>
			<li><a href="#Mods">Mods</a></li>
		</ul>
	</div>
  </div>

  <div data-role="content" id="container">
			<div id="right-col-header">
                Minecon
                </div>
  <a href = "http://minecon.mojang.com" > <img src="./img/minecon_logo.jpg" alt="Minecon Logo Image"></a>
                  <div id="right-col-text">
                    <div > <!--Image of Creeper Face sourced from http://janishenderson.com/musings/tag/minecraft/ 8th December 2013 -->
                        <img src="./img/creeper_face.jpg" alt="Minecraft Creeper Face" />
                        <p>
                           Minecon is the world's biggest minecraft conventions and bring people from all corners of the world. 
						   2013 Minecon did not disappoint with a complete sell out. 
                        </p>
						
						<p>
						If you sadly were unable to attend wherever you were in the world (like we were!) there are live streams of the event available =)
						</p>
						<a href = "http://www.twitch.tv/mojang">Take Me To Minecon! (Virtually) </a>
						<p>
                        <p id="viaLink">
                            Via: <a href="http://www.minecraft.net">Minecraft Website</a>
                        </p>
                    </div>
                </div>
				 <div id="right-col-text">
				 <p>Here was a schedule of the different panels that were on this year</p>
                      <div data-role="collapsible-set" data-theme="a" >
					  <div>
						<div data-role="collapsible" data-theme = "a" >
						<h3>Saturday, November 2nd</h3>
						<ul>
			<li>10:00AM EDT	Opening Ceremony</li>
			<li>12:00PM EDT	Developing Mods</li>
			<li>01:00PM EDT	Running A Server</li>
			<li>02:00PM EDT	SparkleSlamaroo Extravaganza: Animators of Minecraft</li>
			<li>03:00PM EDT The Future of Minecraft</li>
			<li>04:00PM EDT The Creatures</li>
			<li>05:00PM EDT Costume Contest</li>
						</ul>
						</div>
						<div data-role="collapsible" data-theme = "a">
						<h3>Sunday, November 3rd</h3>
						<ul>
							<li>10:40AM EST Redstone </li>
							<li>11:40AM EST Growing a Server Community </li>
							<li>12:40PM EST Life on YouTube with SkyDoesMinecraft, Captainsparklez, ihasCupquake, and AntVenom </li>
							<li>01:40PM EST Mindcrack </li>
							<li>02:40PM EST Interview with Notch </li>
							<li>03:40PM EST Bringing Modding to the Masses </li>
							<li>05:00PM EST Closing Ceremony </li>
						</ul>
			</div>
			</div>
			</div>
			</div>
			</div>
            </div>
  </div>
</div>  

 <div data-role="page" id="Mods">
  <div data-role="header">
    <h1>Creepers Corner</h1>
	<div data-role="navbar" data-position-fixed="true">
		<ul>
			<li><a href="#Home">Home</a></li>
			<li><a href="#Modes">Modes</a></li>
			<li><a href="#Recipes">Recipes</a></li>
			<li><a href="#MineCon">MineCon</a></li>
			<li><a href="#Mods">Mods</a></li>
		</ul>
	</div>
  </div>

  <div data-role="content" id="container">
			<div id="right-col-header">
                   <h4> Minecraft Mods </h4>
                </div>
				<div>
				<!-- Image for FTB Logo sourced from http://wiki.feed-the-beast.com/index.php?title=File:Logo_ftb.png 8th December 2013 -->
                <a href = "http://feed-the-beast.com/"><img src="./img/ftb_logo.png" alt="Minecraft Face" /></a>
				</div>
				<p></p>
                <div id="right-col-text">

                        <p>
                            Mods are essentially what make Minecraft so creative. Developers from all parts of the globe are writing mods in java to help optimise gameplay. This results in a much more complex and compelling user experience. From extra building blocks to advanced machinery, here is a sample of some of the exciting mods that are currently out at the moment.
                        </p>
						
						<div data-role="collapsible-set" data-theme="a">
					  <div>
						<div data-role="collapsible" data-theme = "a">
						<h3>Mod List</h3>
						<ul>
							<li>Industrial Craft 2</li>
							<li>BuildCraft</li>
							<li>ThaumCraft</li>
							<li>Thermal Expansion</li>
							<li>Applied Energistics</li>
							<li>Modular Power Suits</li>
							<li>Computer Craft </li>
							<li>Forestry</li>
						</ul>
						</div>
						</div>
						</div>
						<p>
						Want all these amazing mods in one easy accessible place? Feed the Beast mod pack gives Industrial Craft, Thaumcraft, 
						AE, modular power suits and many more in one accessible user friendly launcher. It has over 50 mods to keep you busy and provides much more blocks, 
						tools and machines as compared to conventional Minecraft.
						The latest version of the FTB pack is 1.5. 
						Make sure to follow FTB on twitter to keep up to date with the upcoming release of 1.6.4 which should be sometime over the holidays! </p>
						
						<!--Twitter Feed for https://twitter.com/FTB_Team Widget from www.twitter.com-->
						<a class="twitter-timeline" data-dnt="true" 
						href="https://twitter.com/FTB_Team" 
						data-widget-id="409797712347803648">Tweets by @FTB_Team</a>
						<script>!
						function(d,s,id)
						{var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
						if(!d.getElementById(id)){js=d.createElement(s);
						js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
						fjs.parentNode.insertBefore(js,fjs);}}
						(document,"script","twitter-wjs");
						</script>


				</div>
				<div id ="right-col-text">
						<div data-role="collapsible-set" data-theme="a">
					  <div>
						<div data-role="collapsible">
						<h3>DireWolf20</h3>
						<!-- DireWolf20 Logo Sourced from http://www.youtube.com/user/direwolf20 8th December 2013 -->
						<a href = "http://www.youtube.com/user/direwolf20"><img src="./img/direwolf20_logo.jpg" alt="DireWolf20 Logo"></a> 
						<p></p>
						<p>Many YouTubers make MineCraft videos based on the Feed the Beast mod pack. 
						Our recommendation is to download the Direwolf20 pack and follow his single player/server play series on YouTube. 
						He also does Mod Spotlights to 
						introduce brand new mods to players and learn himself to bring more to his server/single play series. </p>
						<p>This is the best place to start learning the advanced mods in this pack. His highly anticipated season 6 of his single player series
						should be out soon. Be sure to keep in touch with Dire on his twitter and his <a href ="http://www.youtube.com/user/direwolf20">YouTube</a>
						channel for the latest on the release of the Feed the Beast DireWolf20 Pack 1.6.4</p>
						</div>
						
						<div data-role="collapsible">
						<h3>Hat Films</h3>
						<!-- Hat Logo Sourced from "http://www.youtube.com/user/HaatFilms" 8th December 2013 -->
						<a href = "http://www.youtube.com/user/HaatFilms"><img src="./img/hatfilms_logo.jpg" alt="Hat Films Hat Logo"></a> 
						<br></br>
						<p>But if you are a beginner with the pack but think you need extra help learning the mods then we have another recommendation of who to look out for.
							3 MineCraft YouTubers are Christopher Trottimus, Ross Hornby, and Alex Smith. 
							You may already know them as Trottimus, Djh3max and Alsmiffy; the famous MineCraft trio from Bristol known as HatFilms! </p>
							<p>
							Their FTB series on YouTube provides their perspective of beginning of the mod pack. They learn the various mods of the mod pack. 
							There is also the occasional visit from the man himself Direwolf20 to give tips to the guys and guide them through so be sure 
							to keep up to date with episodes.</p>
							
							<p>Join them in their wide community <a href = "http://www.hatventures.net/page/index.html">Hatventures</a> and become a devoted mad Hatter on their public server</p>
							<p></p>
						</div>

						</div>
						</div>
						</div>
                        <p id="viaLink">
                            Via: <a href="http://www.minecraft.net">Minecraft Website</a>
                        </p>
                </div>
  </div>
 </div> 
  
	</body>
</html>