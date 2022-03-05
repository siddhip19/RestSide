<?php

  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'cards');
  
  // if($con){
  //  echo "connection succussful";
  // }else{
  //  echo "no connection";
  // }

  if (isset($_POST['upload'])) {

   // $image_text=$_POST['image_text'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $description=$_POST['description'];
    $file= $_FILES['image'];
    $link=$_POST['link'];
    $information=$_POST['information'];

    // print_r($file);
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if ($fileerror == 0) {
      $destfile = 'upload/'.$filename;
      // echo "$destfile";
      move_uploaded_file($filepath, $destfile);

      $insertuery = "INSERT INTO cards (name, image, type, description, link, information) VALUES ('$name', '$destfile','$type','$description','$link','$information')";

     $query=mysqli_query($con, $insertuery);

      if($query){
        echo '<script type="text/javascript">

          window.onload = function () { alert("card uploaded successfully !!"); }

            </script>';
      }
      else{
       echo '<script type="text/javascript">

          window.onload = function () { alert("card upload unsuccessful !!"); }

            </script>';
      }

    }

 }

 else{

    echo "No btn has been clicked";

 }

?>

