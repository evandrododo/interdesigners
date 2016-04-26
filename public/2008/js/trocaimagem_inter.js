function random_imglink(){
var myimages=new Array()
//specify random images below. You can have as many as you wish
myimages[1]="img/logos/1cor_logo01.png"
myimages[2]="img/logos/1cor_logo02_inter.png"
myimages[3]="img/logos/1cor_logo03_inter.png"
myimages[4]="img/logos/1cor_logo04_inter.png"
myimages[5]="img/logos/1cor_logo05_inter.png"
myimages[6]="img/logos/1cor_logo06_inter.png"
myimages[7]="img/logos/1cor_logo07_inter.png"
myimages[8]="img/logos/1cor_logo08_inter.png"
myimages[9]="img/logos/1cor_logo09_inter.png"
myimages[10]="img/logos/1cor_logo10_inter.png"
myimages[11]="img/logos/1cor_logo11_inter.png"
myimages[12]="img/logos/1cor_logo12_inter.png"
myimages[13]="img/logos/1cor_logo13_inter.png"
myimages[14]="img/logos/1cor_logo14_inter.png"


var ry=Math.floor(Math.random()*myimages.length)
if (ry==0)
ry=1
document.getElementById('logo').innerHTML='<img src="'+myimages[ry]+'" border=0>';
}
random_imglink();
document.getElementById('logo').onclick = function(){
random_imglink();
}