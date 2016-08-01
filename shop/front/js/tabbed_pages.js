/* ================================================================ 
6.7  一个图文混排的网页选项卡
=================================================================== */
onload = function() {
	var e, i = 0;
	while (e = document.getElementById('gallery').getElementsByTagName ('div') [i++]) {
		if (e.className == 'on' || e.className == 'off') {
		e.onclick = function () {
			var getEls = document.getElementsByTagName('div');
				for (var z=8; z<12; z++) {

				getEls[z].className=getEls[z].className.replace('show', 'hide');
				getEls[z].className=getEls[z].className.replace('on', 'off');
				}
			this.className = 'on';
			var target = this.getAttribute('title');
			document.getElementById(target).className = "show";
			}
		}
	}
}