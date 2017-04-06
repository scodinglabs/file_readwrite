<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<div>
<form method="post">
<input type="text" name="todo">
<button type="submit">Submit</button>



</form>
</div>
</body>
</html>


<?php
//superglobal variable.
if(isset($_POST['todo'])){
file_put_contents('data.txt',$_POST['todo']."\n",FILE_APPEND);
}
if(file_exists('data.txt')){

$reads = file('data.txt');
foreach($reads as $read){
$filecontent = $read;
echo "<ul><li>".$filecontent."</li></ul>";
}
//print_r($read);
}


?>