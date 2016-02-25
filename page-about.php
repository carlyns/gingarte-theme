<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/about.css">

<title><?php wp_title(); ?> | Gingarte Capoeira Chicago</title>
</head>

<body>
<header>

	<?php include ('brandhead.php'); ?>

	<div class="contents">
		<!-- <?php the_meta(); ?> Use this to return everything. -->
		<?php $postid = get_the_ID(); ?>		<!-- This defines the variable $postid to be used in the following function. -->
		<?php echo get_post_meta($postid, 'Tagline', true); ?>
	</div>
</header>

<?php include ('menu.php'); ?>



<div class="section-collapsed">
	<div class="toggle-brazil">
		<div class="titleicon"><img src="imgs/abt-brasil.png"></div>
	<h1 class="section-title">Brazilian Roots</h1>
	<div><a class="fliparrow" href="javascript:;"><i class="fa fa-chevron-down"></i></a></div>
	</div>
</div>

<div class="brazil">
	<div class="description"><p>We always try to stay connected with current events happening in Brazil.  Capoeira stems from the struggles of the lower-class, so these social issues are close to our hearts.  </p>	</div>
	<hr>

	<h2>capoeira origins</h2>
	<p>Capoeira started as during the slave trade in Brazil, as a way for slaves to practice self-defense without getting caught.  They disguised it as a dance by incorporating music, instruments, and dance-live movements that could turn deadly.  It was outlawed in Brazil until Mestre Bimba legitimized it.  </p>

	<div class="dances" id="dances">
		<h2>related dances and music</h2>
		<p>Other traditional cultural dances are go ahnd-in-hand with the training capoeira since its origins.  </p>
		<div class="dance"><h3>Maculelê</h3>
			<img src="imgs/dances/maculele1.jpg" alt="maculele image">
			<p>Either originating from slaves in sugar-cane plantations or from a real-life African hero named "Maculele" (conflicting stories), the tradition is represented today with a spectacular, high-energy mock-fight dance performed with sticks and machetes to the rapid beat of drums.
			</p></div>
		<div class="dance"><h3>Dança Guerreira</h3>
			<img src="imgs/dances/dancaguerreira1.jpg" alt="guerreira image">
			<p>Dança Guerreira is a powerful dance representing a tribe preparing for fight. The choreography includes dancers in traditional clothing and body paint who are armed with swords and shields.
			</p></div>
		<div class="dance"><h3>Samba</h3>
			<img src="imgs/dances/samba2.jpg" alt="samba image">
			<p>Samba, characterized by vibrating hips and fast moving feet, is the official Brazilian dance of Carnaval. Radiant dancers wear Carnaval costumes and dance to live samba percussion.
			</p></div>
		<div class="dance"><h3>Puxada de Rede</h3>
			<img src="imgs/dances/puxadaderede1.jpg" alt="puxada image">
			<p>Puxada de Rede (or ‘pulling of the net’) is a folkloric theatrical dance about the simple life of Brazilian fishermen and the celebration of a successful catch. The graceful dance involves live music with passionate lyrics reflecting the natural beauty and daily struggles of the life of a fisherman.
			</p></div>
	</div>

</div><!-- //end of "brazil"-->




<div class="bluebkgrd">

	<div class="section-collapsed">
		<div class="toggle-group">
		<div class="titleicon"><img src="imgs/abt-berimbau-blue-white.png"></div>
		<h1 class="section-title">Our Group</h1>
		<div><a class="fliparrow" href="javascript:;"><i class="fa fa-chevron-down"></i></a></div>
		</div>
	</div>


	<div class="group">
		<div class="description">
			<p>Marisa Cordeiro brought capoeira from Brazil to Chicago, founding Gingarte Capoeira in 1991.  Since then, our group has grown into a thriving community of over 100 students and performers, many of whom have been with the school for over a decade.
			</p>
		</div>
		<hr>
			<h2>group history</h2>
				<p>Our group started as a few capoeiristas in a park in Washington Park on Chicago's south side.
				</p>
				<p>We have been housed at Jane Addams, in Hyde Park and in West Town.  Many of our longest students have been promoted to teachers and continue to volunteer their time to teach for the organization presently.
				</p>
				<p>You may have seen us performing around town in Millennium Park, Old Town School of Folk Music, Texas de Brasil, Carnivale, and other corporate events.
				</p>
			<h2>mestre marisa</h2>
				<div class="marisa"><img src="imgs/teachers/marisa1.jpg" alt="mestre marisa thumbnail"></div>
				<p>Our group trains and practices under the tutelage of Mestre Marisa Cordeiro, who ranks among the highest female capoeiristas in the United States. She is well respected both in the U.S. and Brazil as a pioneer for women in capoeira.				</p>

				<p>Mestre Marisa Cordeiro is the founder and executive director of Gingarte Capoeira and a shining symbol of the Brazilian community in Chicago. Born in Curvelo, Brazil, Marisa trained at the prestigious Cordão de Ouro Capoeira Academy in São Paulo with top instructors such as Mestre Suassuna, Mestre Canguru, and Mestre Urubu Malandro. She is one of the highest-ranking female capoeiristas in the world.
				</p>
				<p>Mestre Marisa first came to the United States in 1989 as a performer with the renowned international group Oba Oba. They performed throughout the United States and Latin America. Two years later, she returned to Chicago and established Gingarte Capoeira in 1991.
				</p>
		<h2>instructors</h2>
			<a href="comingsoon.html"><div class="teacher"><h3>Profesor Tinta Forte</h3>
					<div class="headshot"><img src="imgs/teachers/tinta5.jpg" alt="tinta forte thumbnail"></div>
				<!--<p>Profesor Tinta Forte (Victor Murrell) has been training capoeira since 1999. Although the majority of his training has been in Chicago, he has also traveled for extensive periods of time in Brazil, training at a variety of Cordão de Ouro Academies. He received his 'profesor' cord in 2010 and is now teaching in Albuquerque, New Mexico.-->
				</p></div></a>
			<a href="comingsoon.html"><div class="teacher"><h3>Profesor Ligeirinho</h3>
					<div class="headshot"><img src="imgs/teachers/pele-headshot.jpg" alt="ligerinho thumbnail"></div>
				<!--<p>Profesor Ligeirinho (Pele Santiago) has been training with Gingarte Capoeira since 1999. He received his ‘profesor’ cord in 2010, and has traveled to Brazil and around the U.S., training with several Cordão de Ouro masters of capoeira. He presently teaches at the Gingarte academy as well as other locations in Chicago.-->
				</p></div></a>
			<a href="comingsoon.html"><div class="teacher"><h3>Instrutor Artista</h3>
					<div class="headshot"><img src="imgs/teachers/artista.jpg" alt="artista thumbnail"></div>
				<!--<p>Instrutor Artista started training capoeira with Gingarte in 1997. He is also an accomplished musician, giving rise to his nickname. He has been residing and teaching capoeira in Crystal Lake, IL, and he continues to commute between his home and the city to take classes at Gingarte’s academy. Along with a trip to Brazil in 2001, Artista has traveled to numerous capoeira events throughout the US, and he received his ‘instrutor’ cord in 2010.-->
				</p></div></a>
			<a href="comingsoon.html"><div class="teacher"><h3>Instrutora Bamba</h3>
					<div class="headshot"><img src="imgs/teachers/bamba-berimbau.jpg" alt="bamba thumbnail"></div>
				<!--<p>Instrutora Bamba began training capoeira with CM Marisa of Gingarte Capoeira in 1999. Since 2002 she has trained and worked extensively with CM Relampago of Canoa Grande in Igarassu, PE, Brazil (www.canoagrande.org). She received her ‘instrutora’ cordão from Gingarte Capoeira in 2010. Bamba teaches kids and adult capoeira classes at the academy in Chicago and continues to work with Canoa Grande after the disappearance of CM Relampago. She is also a full-time faculty member at UIC where she teaches Acting and Movement. She has shared her theater wisdom by acting as stage manager for many of Gingarte’s annual productions. You also can see her on stage here and there with the Physical Theatre Company Plasticene. (www.plasticene.com).-->
				</p></div></a>
			<a href="comingsoon.html"><div class="teacher"><h3>Instrutora Biriba</h3>
					<div class="headshot"><img src="imgs/teachers/biriba-maculele.jpg" alt="biriba thumbnail"></div>
				<!--<p>Instrutora Biriba ....-->
				</p></div>
			<a href="comingsoon.html"><div class="teacher"><h3>Instrutor Girafa</h3>
						<div class="headshot"><img src="imgs/teachers/girafa30-214.jpg" alt="girafa thumbnail"></div></a>
				<!--<p>Instrutor Girafa has been training with Gingarte Capoeira since 1998. Teaching since 2002, he is now instructing Gingarte classes primarily at the University of Chicago. He is also teaching capoeira through after-school programs at the University of Chicago Lab Schools and Ashburn Lutheran School. Girafa has implemented and led programs for Children’s Home + Aid and After School Matters, which are two organizations offering enrichment programs for inner-city youth. He has played pivotal roles as the group’s emcee, sound man, and stage manager as well. Girafa received his ‘instrutor’ cord in 2010.-->
				</p></div></a>
			<a href="comingsoon.html"><div class="teacher"><h3>Instrutor Manhoso</h3>
					<div class="headshot"><img src="imgs/teachers/manhoso-millpk.jpg" alt="manhoso thumbnail"></div>
				<!--<p>Instrutor Manhoso began training with Gingarte Capoeira in 2002. Having made trips to Rio de Janeiro and Sao Paulo, he helps teach classes at Gingarte’s academy. He also helps maintain Gingarte’s website and serves as the in-house IT advisor. He received his ‘instrutor’ cord in 2010.-->
				</p></div></a>
			<a href="comingsoon.html"><div class="teacher"><h3>Instrutor Poderoso</h3>
					<div class="headshot"><img src="imgs/teachers/poder.jpg" alt="poderoso thumbnail"></div>
				<!--<p>Instrutor Poderoso found capoeira in 2000, training initially with Capoeira Zoador in Tokyo, Japan. After returning to the U.S. in 2001, he joined Gingarte Capoeira Chicago, where he trained extensively until moving away for graduate school. Starting in 2004, he trained with capoeira groups around the country—including Roda De Fogo (United Capoeira Association), Senzala Seattle, and Mestre Espirro Mirim (Tucson Cordão de Ouro)—while still maintaining his connection to Gingarte. Poderoso returned home to Chicago in 2013, ready to learn more from Gingarte and share what he has learned elsewhere. He received his 'instrutor' cordão in 2013.-->
				</p></div></a>
			<a href="comingsoon.html"><div class="teacher"><h3>Instrutor Tamanduá</h3>
					<div class="headshot"><img src="imgs/teachers/tam with atlas cropped.jpg" alt="tamanduá thumbnail"></div>
				<!--<p>Instrutor Tamanduá started capoeira with Capoeira Mandinga in Detroit in 2003. He trained briefly with Cordão de Ouro in Des Moines before training with Gingarte Capoeira beginning in 2005. Since then he has traveled to capoeira events in Brasil, China, across the US and has taught classes in Beijing. Tamanduá has also been teaching regularly at Gingarte's academy and has officially become a member of Gingarte Capoeira Chicago. He received his 'instrutor' cordão in 2012. -->
				</p></div></a>
			<a href="comingsoon.html"><div class="teacher"><h3>Instrutor Urso Polar</h3>
					<div class="headshot"><img src="imgs/teachers/urso-role.JPG" alt="urso polar thumbnail"></div>
				<!--<p>Instrutor Urso Polar started training capoeira in 2002. After a 2.5 month stint in Brazil, he returned home to Chicago and joined Gingarte in the fall of 2003. His continued training has led him to attend numerous events here within the U.S., as well as Brazil. He received his "instrutor" cord in 2010 and teaches in the Gingarte academy in Chicago. As the group's videographer/editor, he also contributes by producing trailers used for grant submittals as well as promotional use via social media forums.-->
				</p></div></a>
		<div class="students">
			<h2>our students - our family</h2>
				<p>Gingarte students have volunteered countless hours to the art of Capoeira. The group could not function as it does without their tireless dedication to teaching, performing, and helping with the daily operations of our group throughout the Chicagoland area and US. This includes Professors and Instructors but also a core group of committed students - from beginners to advanced. Thank you teachers and students!</p>
		</div>

		<div class="troupe">
			<h2>our performance group</h2>
			<p>An integral part of Gingarte Capoeira Chicago is the Gingarte Capoeira Performance Company, created in 1996 under the direction of Marisa Cordeiro. Performances including Capoeira, Maculelê, Samba, Dança Guerrera, and Puxada de Rede are available for a wide range of audiences. </br><a href="perform.html">Click here</a> for more about booking us to perform.</p>
		</div>

	</div><!-- //end of "group"-->
</div> <!-- / #bluebkgrd-->

<div class="section-collapsed">
	<div class="toggle-chicago">
		<div class="titleicon"><img src="imgs/abt-chicago.png"></div>
		<h1 class="section-title">A Home in Chicago</h1>
		<div><a class="fliparrow" href="javascript:;"><i class="fa fa-chevron-down"></i></a></div>
	</div>
</div>




<div class="chicago">
	<div class="description"><p>
		Capoeira has the incredible power to provide focus, creativity and opportunity.  We strive to bring our programs to underserved communities in Chicago.  The struggle is strikingly and unfortunately similar to the struggle in Brazil, but capoeira's potential to provide a path towards success and education remains the same. </p>

		<p>We also stay connected with Chicago's vibrant Brazilian community, by partnering with local cultural organizations as much as possible. </p>


	</div>
<hr>

<h2>after-school programs</h2>
	<p>We are dedicated to bringing capoeira to as many people as possible.  These are some of the many schools that we've worked with:  </p>

<div class="partnerlogos">
	<div class="plogo">
		<img src="imgs/partners/asm.png" alt="after school matters">
	</div>
	<div class="plogo">
		<img src="imgs/partners/cps.jpg" alt="chicago public schools">
	</div>
	<div class="plogo">
		<img src="imgs/partners/uofccharter.jpg" alt="U of C Charter Schools">
	</div>
	<div class="plogo">
		<img src="imgs/partners/enlace.png" alt="enlace">
	</div>
	<div class="plogo">
		<img src="imgs/partners/uofclab.jpg" alt="U of C Lab Schools">
	</div>
	<div class="plogo">
		<img src="imgs/partners/youngaud.jpg" alt="Young Audiences">
	</div>
	<div class="plogo">
		<img src="imgs/partners/chiarts.jpg" alt="Chicago High School for the Arts">
	</div>
	<div class="plogo">
		<img src="imgs/partners/gallery37.jpg" alt="Gallery 37">
	</div>
	<div class="plogo">
		<img src="imgs/partners/childrens.jpg" alt="Children's Home and Aid">
	</div>
	<div class="plogo">
		<img src="imgs/partners/qcdc.jpg" alt="Quad Communities Development Corporation">
	</div>
	<div class="plogo">
		<img src="imgs/partners/urbgateways.png" alt="Urban Gateways">
	</div>
</div>


<div class="alsopartners">
	<p>Also: Reavis Elementary, Cameron Elementary, Castellanos Elementary, Mark Sheridan Academy, Evanston?, Libraries?, UIC Jazz Camp
	</p>
</div>

	<p>If you're interested in bringing capoeira to your school, please let us know here.  If you're not ready for a program, you can always have us do a demonstration!</p>


<h2>board of Directors</h2>
	<p>Our board meets regularly to help guide the overall vision of the group alongside Mestre Marisa, our Executive Director.  This is distinct from our daily operations.  </p>
	<h3>Board President: James White</h3>
	<h3>Board Treasurer: Patrick Cameron</h3>
	<h3>Board Director: Emilios Chronopolous</h3>
	<h3>Board Director: Kris Kopriva</h3>
	<h3>Board Director: Carlyn So</h3>
	<h3>Board Director: Rhea Yap</h3>
	<p>If you are interested in joining our Board of Directors, we accept nominations once a year.  We look for members that hold a genuine interest in Capoeira and who can help expand our vision as a nonprofit.  </p>


<h2>support our nonprofit</h2>
	<p>As a completely volunteer-run organization, we are proud of our accomplishments.  		We have: </p>
		<ul>
		<li>Over 100 visits to our classes every month.</li>
		<li>15+ long-term students (involved with Gingarte Capoeira for 10 to 20 years)</li>
		<li>Brought over 100 resident artists from Brazil and other parts of the world to share their talents with our group.</li>
		<li>Organized over 20 events with budgets of over $10K.</li>
		<li>Performed hundreds of times throughout the Midwest and produced over 20 full-length shows with over 1500 cumliative attendees.</li>
	</ul>

	<div class="button">Donate to our 501c3</div>

	<p>We have been generously sponsored throughout the years by countless partners.  These are just a few: </p>

	<div class="partnerlogos">
		<div class="plogo">
			<img src="imgs/partners/united.jpg" alt="United Airlines">
		</div>
		<div class="plogo">
			<img src="imgs/partners/chgodcase.png" alt="chicago department of cultural affairs and special events">
		</div>
		<div class="plogo">
			<img src="imgs/partners/eriehouse.jpg" alt="Erie Neighborhood House">
		</div>
		<div class="plogo">
			<img src="imgs/partners/ihouse.png" alt="International House at the University of Chicago">
		</div>
		<div class="plogo">
			<img src="imgs/partners/scelec.png" alt="S and C Electric">
		</div>
		<div class="plogo">
			<img src="imgs/partners/iac.jpg" alt="Illinois Arts Council">
		</div>
		<div class="plogo">
			<img src="imgs/partners/driehaus.jpg" alt="Driehaus Foundation">
		</div>

		<div class="plogo">
			<img src="imgs/partners/uictheater.png" alt="UIC Theater">
		</div>
		<div class="plogo">
			<img src="imgs/partners/oldtownmus.jpg" alt="Old Town School of Folk Music">
		</div>
		<div class="plogo">
			<img src="imgs/partners/driehaus.jpg" alt="DuSable Museum">
		</div>
		<div class="plogo">
			<img src="imgs/partners/msi.png" alt="Museum of Science and Industry">
		</div>
		<div class="plogo">
			<img src="imgs/partners/mca.png" alt="Museum of Contemporary Art">
		</div>
		<div class="plogo">
			<img src="imgs/partners/field.png" alt="Field Museum">
		</div>
		<div class="plogo">
			<img src="imgs/partners/millpk.png" alt="Millennium Park">
		</div>
		<div class="plogo">
			<img src="imgs/partners/chgopkd.png" alt="Chicago Park District">
		</div>

	</div>


	<div class="alsopartners">
		<p>Also: University of Chicago RSO, Chicago Samba School, Evanston Samba School, Swing Brasileiro, Ruth Page Center for the Arts, Union Church?, Easter Seals?,
		</p>
	</div>

	<div class="button">Please contact us on for coporate sponsorships and partnerships.</div>



</div><!-- //end of "chicago"-->

	<!-- NOTES:
show students and Community Atmosphere!  Welcoming!  Embracing broader Brazilian community and social good.  The impacts capoeira can have on people / life.
need to develop inclusive atmosphere, events & shows well-executed and demonstrates organization/efficiency, our board of directors, fundraisers-->




<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo rawurlencode(get_permalink()); ?>&amp;layout=standard&amp;show-faces=true&amp;width=450&amp;action=like&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" id="facebook-like"></iframe>

<?php get_footer(); ?>
