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
$message=$_POST['message'];



if($name!="" && $email!="" && $message!="")
{
$sql1="insert into book values('$name','$email','message')";
if($con->query($sql1)==TRUE)
{
echo "<script>alert('record insert successfully'); window.location.href='newpro.html';</script>";
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