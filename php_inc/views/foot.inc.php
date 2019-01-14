		<div id="sub-nav">
			<?php
			if(file_exists($MY_DOC_ROOT . "php_inc/views/sidebars/" . $section . ".inc.php")) {
				include("sidebars/" . $section . ".inc.php");
			}
			?>
			<br />

			<?php
				if ($section != 'film') {
					print("<a href=\"film-trailer.php\"><img src=\"images/watch_trailer.gif\" /></a>\n");
				}
			?>
			<?php
				if ($section == 'film' || $section == 'festivals') {
					print("<img src=\"images/laurels/fort-lauderdale.gif\" /></a>\n");
					print("<img src=\"images/laurels/2dnot2d.gif\" /></a>\n");
					print("<img src=\"images/laurels/phoenix.gif\" /></a>\n");
					print("<img src=\"images/laurels/lake-arrowhead.gif\" /></a>\n");
					print("<img src=\"images/laurels/worldfest-gold-remi.gif\" /></a>\n");
					print("<img src=\"images/laurels/mexico.gif\" /></a>\n");
					print("<img src=\"images/laurels/milan.gif\" /></a>\n");
					print("<img src=\"images/laurels/method-fest.gif\" /></a>\n");
					print("<img src=\"images/laurels/burbank.gif\" /></a>\n");
					print("<img src=\"images/laurels/british-best-short-film.gif\" /></a>\n");
					print("<img src=\"images/laurels/british-best-actor.gif\" /></a>\n");
					print("<img src=\"images/laurels/british-best-actress.gif\" /></a>\n");
					print("<img src=\"images/laurels/syracuse.gif\" /></a>\n");
				}
			?>
			<?php
				if ($section == 'cast') {
					if ($sub_section == 'marsden') {
						print("<img src=\"images/laurels/british-best-actor.gif\" /></a>\n");
					}
					if ($sub_section == 'turner') {
						print("<img src=\"images/laurels/british-best-actress.gif\" /></a>\n");
				}

					}
			?>
		</div>
			<br class="clear" />

		</div>
		</div>
		</div>

		<div id="navbar">
			<div id="nav-film"><a href="index.php"<?php echo $section=="film"?' class="active"':''?>>The Film</a></div>
				<div id="nav-cast"><a href="cast.php"<?php echo $section=="cast"?' class="active"':''?>>The Cast</a></div>
				<div id="nav-team"><a href="team.php"<?php echo $section=="team"?' class="active"':''?>>The Team</a></div>
				<div id="nav-behind"><a href="behind.php"<?php echo $section=="behind"?' class="active"':''?>>Behind The Scenes</a></div>
				<div id="nav-festivals"><a href="festivals-awards.php"<?php echo $section=="Festivals"?' class="active"':''?>>Festivals &amp; Awards</a></div>
				<div id="nav-press"><a href="press.php"<?php echo $section=="press"?' class="active"':''?>>Press</a></div>
				<div id="nav-store"><a href="store.php"<?php echo $section=="store"?' class="active"':''?>>Store</a></div>
				<div id="nav-contact"><a href="contact.php"<?php echo $section=="contact"?' class="active"':''?>>Contact</a></div>
			</ul>
		</div>
	</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-283302-5");
pageTracker._trackPageview();
</script>
</body>
</html>
