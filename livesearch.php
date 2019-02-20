<html>
<head>
	<style type="text/css">
		.tittle{
			height: 100%;
			text-decoration: none;
			width: 300px;
			background-color: gray;
			color:white;
			padding: 5px;
			font-size: 20px;
			margin-bottom: 50px;
			line-height: 50px;
		}
		.tittle a{
			height: 50px;
			text-decoration: none;
			width: 300px;
			background-color: gray;
			color:white;
			padding: 5px;
			font-size: 20px;
			margin-bottom: 50px;
			line-height: 50px;
		}
		
	</style>
<!-- <script>
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
document.getElementById("livesearch").style.border="1px solid #A5ACB2";
}
}
xmlhttp.open("GET", "livesearch.php?q="+str,true);
xmlhttp.send();
}
</script> -->
</head>
<body>
</body>
</html>
<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//Get the q parameter from URL

$q=$_GET["q"];

//Lookup all links from the xml file if length of q>0

if(strlen($q)>0){
 $hint="";
 for($i=0; $i<($x->length); $i++){
 $y=$x->item($i)->getElementsByTagName('title');
 $z=$x->item($i)->getElementsByTagName('url');
 if($y->item(0)->nodeType==1){
 
 //find a link matching the search text
 if(stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)){
 
 if($hint==""){
 
 $hint="<a href='" .
 
 $z->item(0)->childNodes->item(0)->nodeValue.
 "' target='_blank'>" .
 
 $y->item(0)->childNodes->item(0)->nodeValue."</a>";
 }
 else
 {
 $hint=$hint . "<br/><a class='tittle' href='" .
 
 $z->item(0)->childNodes->item(0)->nodeValue .
 "' target='_blank'>".
 
 $y->item(0)->childNodes->item(0)->nodeValue."</a>";
 }
 }
 }
 }
}

// Set Output to "No results found" if no hint was found or to the correct values

if($hint==""){
 $response = "No results found";
}
else
{
 $response=$hint;
}

//output the response
echo "<div class='tittle'>";
echo $response;
echo "</div>";
?>