<html>
<body>
<?php 
$host="localhost";
$user="root";
$password="";
$con=new mysqli($host,$user,$password,"nomad");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$from=$_POST['from'];
$to=$_POST['to'];



if($from!="" && $to!="")
{
$sql1="insert into travel values('$from','$to')";
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