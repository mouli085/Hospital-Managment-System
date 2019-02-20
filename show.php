<html>
<head>
<script>
function showResult(str){
if(str.length==0){
document.getElementById("livesearch").innerHTML="";
document.getElementById("livesearch").style.border="0px";
return;
}
if(window.XMLHttpRequest){
// Code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{//Code for IE6, IE5
xmlhttp=new ActiveXobject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("livesearch").innerHTML=xmlhttp.responseText;

}
}
xmlhttp.open("GET", "livesearch.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>
</body>
</html>