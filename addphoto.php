<?php
include('config.php');
if (!isset($_FILES['image']['tmp_name'])) {
echo "Select";
}else{
$file=$_FILES['image']['tmp_name'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name= addslashes($_FILES['image']['name']);
move_uploaded_file($_FILES["image"]["tmp_name"],"photos/".$_FILES["image"]["name"]);
$location="photos/" . $_FILES["image"]["name"];
$caption=$_POST['caption'];
$first_name =$_POST['first_name'];
$last_name = $_POST['last_name'];
$php = ("INSERT INTO photos (first_name, last_name, image, caption, date) VALUES ('$first_name','$last_name','$location','$caption', Now())");
$save=mysqli_query($dbc,$php);
header("location: midterm.php");
exit();
}
?>