function random_imglink(){
var myimages=new Array()
//specify random images below. You can have as many as you wish
myimages[1]="http://playstop.net/interdesigners/img/logos/1cor_logo01.png"
myimages[2]="http://playstop.net/interdesigners/img/logos/1cor_logo02_blog.png"
myimages[3]="http://playstop.net/interdesigners/img/logos/1cor_logo03_blog.png"
myimages[4]="http://playstop.net/interdesigners/img/logos/1cor_logo04_blog.png"
myimages[5]="http://playstop.net/interdesigners/img/logos/1cor_logo05_blog.png"
myimages[6]="http://playstop.net/interdesigners/img/logos/1cor_logo06_blog.png"
myimages[7]="http://playstop.net/interdesigners/img/logos/1cor_logo07_blog.png"
myimages[8]="http://playstop.net/interdesigners/img/logos/1cor_logo08_blog.png"
myimages[9]="http://playstop.net/interdesigners/img/logos/1cor_logo09_blog.png"
myimages[10]="http://playstop.net/interdesigners/img/logos/1cor_logo10_blog.png"
myimages[11]="http://playstop.net/interdesigners/img/logos/1cor_logo11_blog.png"
myimages[12]="http://playstop.net/interdesigners/img/logos/1cor_logo12_blog.png"
myimages[13]="http://playstop.net/interdesigners/img/logos/1cor_logo13_blog.png"
myimages[14]="http://playstop.net/interdesigners/img/logos/1cor_logo14_blog.png"


var ry=Math.floor(Math.random()*myimages.length)
if (ry==0)
ry=1
document.getElementById('logo').innerHTML='<img src="'+myimages[ry]+'" border=0>';
}
random_imglink();
document.getElementById('logo').onclick = function(){
random_imglink();
}