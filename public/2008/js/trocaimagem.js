function random_imglink(){
var myimages=new Array()
//specify random images below. You can have as many as you wish
myimages[1]="img/logos/logo01.png"
myimages[2]="img/logos/logo02.png"
myimages[3]="img/logos/logo03.png"
myimages[4]="img/logos/logo04.png"
myimages[5]="img/logos/logo05.png"
myimages[6]="img/logos/logo06.png"
myimages[7]="img/logos/logo07.png"
myimages[8]="img/logos/logo08.png"
myimages[9]="img/logos/logo09.png"
myimages[10]="img/logos/logo10.png"
myimages[11]="img/logos/logo11.png"
myimages[12]="img/logos/logo12.png"
myimages[13]="img/logos/logo13.png"
myimages[14]="img/logos/logo14.png"


var ry=Math.floor(Math.random()*myimages.length)
if (ry==0) ry=1
document.getElementById('logo').innerHTML='<img src="'+myimages[ry]+'" border=0>';
}
random_imglink()