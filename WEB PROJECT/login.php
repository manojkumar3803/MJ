<html>
<body>
<?php 
$host="localhost";
$user="root";
$password="";
$con=new mysqli($host,$user,$password,"nomad");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_POST['username'];
$password=$_POST['password'];



if($username!="" && $password!="")
{
$sql1="insert into login values('$username','$password')";
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