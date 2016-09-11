[	document.querySelector('body > header > div'),
	document.querySelector('body > div#filter'),
].forEach(function (x) {console.log(x);
	if(!x)return;
	x.addEventListener('click',function (e) {
		document.querySelector('nav.draw').classList.toggle('open');
	});
});