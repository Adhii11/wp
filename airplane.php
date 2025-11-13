<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
        enter from <input type="text" name="fromm"><br><br>
        enter airline<input type="text" name="airline"><br><br>
         enter departure date <input type="date" name="departure"><br><br>
        enter arrival date<input type="date" name="arrival"><br><br>
         enter too <input type="text" name="tooo"><br><br>
          enter flight number<input type="text" name="flightno"><br><br>
        enter terminal<input type="text" name="terminal"><br><br>
        <input type="submit" name="submit">
</form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="adhidb";
$tbname="airtb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
else
{
    echo"<br><h2align=center>FLIGHT DETAILS</h2><br/>";
}
$fromm=$_POST['fromm'];
$airline=$_POST['airline'];
$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$tooo=$_POST['tooo'];
$flightno=$_POST['flightno'];
$terminal=$_POST['terminal'];

$query="INSERT INTO airtb(fromm,airline,departure,arrival,tooo,flightno,terminal)VALUES('".$fromm."','".$airline."','".$departure."','".$arrival."','".$tooo."','".$flightno."','".$terminal."')";

$res=mysqli_query($conn,$query);
if($res)
{
    echo"SUBMITTED SUCCESSFULLY!!";
}
else
{
    echo"ERROR";
}
$sql="SELECT*FROM airtb";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    echo"<table border=2 align=center>";
    echo"<tr><th>fromm</th>";
    echo"<th>Airline</th>";
    echo"<th>departure</th>";
    echo"<th>arrival</th>";
    echo"<th>tooo</th>";
    echo"<th>Flightno</th>";
    echo"<th>terminal</th></tr>";
    while($row=mysqli_fetch_assoc($res))
{
    echo"<tr><td>$row[fromm]</td>";
    echo"<td>$row[airline]</td>";
    echo"<td>$row[departure]</td>";
    echo"<td>$row[arrival]</td>";
    echo"<td>$row[tooo]</td>";
    echo"<td>$row[flightno]</td>";
    echo"<td>$row[terminal]</td></tr>";
}
echo"</table>";
}
else
    {
    echo"0 results";
}
mysqli_close($conn);
?>