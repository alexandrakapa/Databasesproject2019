<?php
$Card_id=$_GET["Card_id"];
$dbconnect=mysqli_connect('localhost','root','fresdr7l389','database');
$sql = "delete from Customer where Card_id='$Card_id'";
$run =  mysqli_multi_query($dbconnect,$sql);

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}


if ($run==TRUE) {
Redirect('customerRemove.jsp',false);
}
else
{
echo"not ok";
}



?>

