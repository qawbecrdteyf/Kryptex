<?php
$name="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = test_input($_POST["val"]);}
?>
<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
$s=$_COOKIE['Username'];
//echo $s; echo "<br>";echo $name;
$k="ockhi";
if($name==$k)
{
        $servername = "localhost";  
       $username = "root";  
       $password="";   
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('alma18int',$conn) or die("unable to connect to database"); 
	   $sql3 = ("SELECT Level FROM kryptexleaderboard WHERE Username='$s'" );
		$result=mysql_query($sql3);
		$row = mysql_fetch_array($result);
		$level=$row[0];
		$x=basename(__FILE__, '.php');
		$int = filter_var($x, FILTER_SANITIZE_NUMBER_INT);
		if($level==$int)
		{$level=$int+1;
		//echo $level;
		//echo "<br>";
	   $sql3 = ("UPDATE kryptexleaderboard SET Level='$level' WHERE Username='$s' ");
	   $result=mysql_query($sql3);
	   //echo $result;
		echo '<script type="text/javascript">window.location = "KryptexPage23.php"</script>';}
		else
		echo '<script type="text/javascript">
           window.location="KryptexPage22.php";
      </script>';  
}
	  else
		echo '<script type="text/javascript">
           window.location="KryptexPage22.php";
      </script>';  
?>
