<?php
$con = mysqli_connect('localhost','root','','consultancy');
$reference=$_POST['reference'];
$passport=$_POST['passport'];
$file=$_FILES['file']['name'];
$uploaddir='upload/';
$uploadfile=$uploaddir . basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
	 "success";
}
else{
	 "not success";
}
echo $query="INSERT INTO user (a_reference_number, a_passport_number, a_file) VALUES ('$reference','$passport','$file')";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>;window.location.href='tables-datatable.php'</script>";
}else
{
	echo "<script type='text/javascript'>;window.location.href='addstudent.php'</script>";
}
?>