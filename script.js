var menuOpen = false;
function openCloseMenu() {
	if (menuOpen) {
		document.getElementById('menu').className = '';
		menuOpen = false;
	} else {
		document.getElementById('menu').className = 'open';
		menuOpen = true;
	}
}