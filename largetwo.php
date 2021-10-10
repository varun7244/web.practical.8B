
	
<body>
<form method="post">
Enter first number <input type="text" name="fnum"/>
Enter second number <input type="text" name="snum"/></br>	   		   
<input type="submit"  name="find" value="Find"/></br>
</form>
</body>
<?php		
if(isset($_POST['find']))
{
$x=$_POST['fnum'];		
$y=$_POST['snum'];				
if( $x > $y) 
	echo "$x is grater";
else
	echo "$y is greater"; 
}
?>