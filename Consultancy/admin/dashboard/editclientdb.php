<?php
$con = mysqli_connect('localhost','root','','consultancy');
$id=$_GET['r'];
$reference=$_POST['reference'];
$passport=$_POST['passport'];
echo $query="UPDATE user SET a_reference_number='$reference', a_passport_number='$passport' WHERE a_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>;window.location.href='tables-datatable.php'</script>";
}else
{
	echo "<script type='text/javascript'>;window.location.href='editclient.php'</script>";
}
?>