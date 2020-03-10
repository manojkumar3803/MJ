<html>
<body>
<?php 
$host="localhost";
$user="root";
$password="";
$con=new mysqli($host,$user,$password,"nomad");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST['name'];
$email=$_POST['email'];
$country=$_POST['country'];
$age=$_POST['age'];
$password=$_POST['password'];



if($name!="" && $email!="" && $country!="" && $age!="" && $password!="")
{
$sql1="insert into signin values('$name','$email','$country','$age','$password')";
if($con->query($sql1)==TRUE)
{
echo "<script>alert('record insert successfully'); window.location.href='login.html';</script>";
}
else
{
echo 'error'.$sql.'<br>'.$con->error;
}

}
$con->close();
}
?>


</body>
</html>