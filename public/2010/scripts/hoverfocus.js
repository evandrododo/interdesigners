// Funções de :hover e :focus para ie6

function suckerfish(type, tag, parentId) {
	if (window.attachEvent) {
		window.attachEvent("onload", function() {
			if(document.getElementById(parentId)){
				var sfEls = (parentId==null)?document.getElementsByTagName(tag):document.getElementById(parentId).getElementsByTagName(tag);
				type(sfEls);
			}
		});
	}
}

sfHover = function(sfEls) {
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" over";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" over\\b"), "");
		}
	}
}

sfFocus = function(sfEls) {
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onfocus=function() {
			this.className+=" focus";
		}
		sfEls[i].onblur=function() {
			this.className=this.className.replace(new RegExp(" focus\\b"), "");
		}
	}
}

suckerfish(sfHover, "LI", "sm", "ul");
suckerfish(sfFocus, "INPUT");
suckerfish(sfFocus, "TEXTAREA" );
suckerfish(sfFocus, "SELECT" );