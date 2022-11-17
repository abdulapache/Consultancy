<?php
$con = mysqli_connect('localhost','root','','consultancy');
$id=$_GET['r'];
 $query="DELETE FROM user WHERE a_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>;window.location.href='tables-datatable.php'</script>";
}else{
	echo "<script type='text/javascript'>;window.location.href='tables-datatable.php'</script>";
}
?>