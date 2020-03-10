<html>
<body>
<?php 
$host="localhost";
$user="root";
$password="";
$con=new mysqli($host,$user,$password,"nomad");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$date=$_POST['date'];
$gonedate=$_POST['gonedate'];
$adult=$_POST['adult'];
$kid=$_POST['kid'];



if($date!="" && $gonedate!="" && $adult!="" && $kid!="")
{
$sql1="insert into room values('$date','$gonedate','$adult','$kid')";
if($con->query($sql1)==TRUE)
{
echo "<script>alert('HOLA!!! SEARCH SUCCESSFUL'); window.location.href='newpro.html';</script>";
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