if(window.XMLHttpRequest){
    xmlhttp = new XMLHttpRequest();
}else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.open("GET","ex.xml",false);
xmlhttp.send();
xmlDoc = xmlhttp.responseXML;
document.write("<table border='1'>");
let x = xmlDoc.getElementsByTagName("CD");
for(let i =0; i <x.length;i ++ ){
    document.write("<tr><td>");
    document.write("Artista" + x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue);
    document.write("</br>");
    document.write("Disco" + x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue );
    document.write("</td></tr>");

}
document.write("</table>");