<?php
$con = mysqli_connect('localhost','root','','consultancy');
$username=$_POST['email'];
$password=$_POST['password'];
echo $query="SELECT * FROM admin WHERE a_email='".$username."' AND a_password='".$password."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);
$id=$row['a_id'];
if($row){
echo "<script type='text/javascript'>;
	window.location.href='dashboard'</script>";
	session_start();
	 $_SESSION['id']=$id;
}else{

echo "<script type='text/javascript'>;
	window.location.href='index.php'</script>";
}


?>