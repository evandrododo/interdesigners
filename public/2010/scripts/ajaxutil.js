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

//Fila de conexões
fila=[]
ifila=0

//Carrega via XMLHTTP a url recebida e coloca seu valor
//no objeto com o id recebido
function ajaxHTML(id,url){
    //Carregando...
    document.getElementById(id).innerHTML="Carregando..."
    //Adiciona à fila
    fila[fila.length]=[id,url]
    //Se não há conexões pendentes, executa
    if((ifila+1)==fila.length)ajaxRun()
}

//Executa a próxima conexão da fila
function ajaxRun(){
    //Abre a conexão
    xmlhttp.open("GET",fila[ifila][1],true);
    //Função para tratamento do retorno
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4){
            //Mostra o HTML recebido
            retorno=unescape(xmlhttp.responseText.replace(/\+/g," "))
            document.getElementById(fila[ifila][0]).innerHTML=retorno
            //Roda o próximo
            ifila++
            if(ifila<fila.length)setTimeout("ajaxRun()",20)
        }
    }
    //Executa
    xmlhttp.send(null)
}