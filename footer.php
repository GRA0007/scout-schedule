
			<!-- Content End -->

		<footer>
			Made with &#10084; by Ben
		</footer>
	</main>
	<nav class="draw">
		<a href="<?php echo TOROOT ?>"          class="<?php echo ($currentPage == 'dashboard') ? 'active' : '' ;?>">Dashboard</a>
		<a href="<?php echo TOROOT ?>schedule/" class="<?php echo ($currentPage == 'schedule' ) ? 'active' : '' ;?>">Full Schedule</a>
		<a href="<?php echo TOROOT ?>gullible/" class="<?php echo ($currentPage == 'roster'   ) ? 'active' : '' ;?>">Gullible Roster</a>
		<div class="drawSpacer"></div>
		<a href="https://www.facebook.com/Gullible-The-Dragon-560228167514170/">Gullible Page</a>
		<a href="https://www.facebook.com/groups/174698566054845/535109400013758/">Monash Group</a>
	</nav>
	<div id="filter"></div>
	<script src="<?php echo TOROOT ?>assets/js/script.js"></script>
</body>
</html>