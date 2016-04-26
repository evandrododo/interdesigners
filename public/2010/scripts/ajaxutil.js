//Tenta criar o objeto xmlHTTP
try{
    xmlhttp = new XMLHttpRequest();
}catch(ee){
    try{
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }catch(e){
        try{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch(E){
            xmlhttp = false;
        }
    }
}

//Fila de conex�es
fila=[]
ifila=0

//Carrega via XMLHTTP a url recebida e coloca seu valor
//no objeto com o id recebido
function ajaxHTML(id,url){
    //Carregando...
    document.getElementById(id).innerHTML="Carregando..."
    //Adiciona � fila
    fila[fila.length]=[id,url]
    //Se n�o h� conex�es pendentes, executa
    if((ifila+1)==fila.length)ajaxRun()
}

//Executa a pr�xima conex�o da fila
function ajaxRun(){
    //Abre a conex�o
    xmlhttp.open("GET",fila[ifila][1],true);
    //Fun��o para tratamento do retorno
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4){
            //Mostra o HTML recebido
            retorno=unescape(xmlhttp.responseText.replace(/\+/g," "))
            document.getElementById(fila[ifila][0]).innerHTML=retorno
            //Roda o pr�ximo
            ifila++
            if(ifila<fila.length)setTimeout("ajaxRun()",20)
        }
    }
    //Executa
    xmlhttp.send(null)
}