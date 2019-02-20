<?php include 'show.php'; ?>
<style style="text/css">
.scroll-left {
	width: 1050px;
 height: 50px;	
 overflow: hidden;
 position: relative;
 background-color: #2D5788;
 margin-left: 300px;
}
.scroll-left div {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: left;
 font-size: 20px;
 margin-left:20px;
color: white;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: scroll-left 30s linear infinite;
 -webkit-animation: scroll-left 30s linear infinite;
 animation: scroll-left 30s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes scroll-left {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes scroll-left {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes scroll-left {
 0%   { 
 -moz-transform: translateX(100%); /* Browser bug fix */
 -webkit-transform: translateX(100%); /* Browser bug fix */
 transform: translateX(100%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Browser bug fix */
 -webkit-transform: translateX(-100%); /* Browser bug fix */
 transform: translateX(-100%); 
 }
}
.searchbox{
	margin-right: 10px;
	width: 290px;
	height: 40px;
	margin-top: 5px; 
	border-radius: 4px; 
	position: absolute;
	padding-left: 5px;
}
.searchbox_out{
	background:  linear-gradient(to left,#2D5788 ,white);
	width: 300px;
	height: 50px;
	position: absolute;
}
</style>
 	<div class="searchbox_out">
	<input type="text" placeholder="search.." id="searchbox" class="searchbox" name="searchbox" onKeyUp="showResult(this.value)"></div>
<?php     
	$con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
 
mysql_select_db("my_db", $con);
$res= mysql_query("SELECT * from notice");
echo "<a href='noticepage.php'><div class='scroll-left'>";
$headline="";
while ($row= mysql_fetch_assoc($res)){
$headline.="  ::  ";
$headline.=$row['headline'];
$headline.="  ::  ";
echo "<div>  $headline  </div>" ;
}echo "</div></a>";
?>
<div id="livesearch" style="float: right;margin-right: 1050px; width: 250px; margin-top: 0px; height: auto; opacity: 1; position: absolute;"></div>
<style type="text/css"></style>