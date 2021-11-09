<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIDTERM EXAM</title>
    <style type="text/css">
    
    .ed{
    border-style:solid;
    border-width:thin;
    border-color:#00CCFF;
    padding:5px;
    margin-bottom: 4px;
    }
    #button1{
    text-align:center;
    font-family:Arial, Helvetica, sans-serif;
    border-style:solid;
    border-width:thin;
    border-color:#00CCFF;
    padding:5px;
    background-color:#00CCFF;
    height: 34px;
    }
    #imagelist{
    border: thin solid silver;
    float:left;
    padding:5px;
    width:auto;
    margin: 0 5px 0 0;
    }
    p{
    margin:0;
    padding:0;
    text-align: center;
    font-style: italic;
    font-size: smaller;
    text-indent: 0;
    }
    #caption{
     margin-top: 5px;
    }
    img{
     height: 225px;
    }
    
    </style>
</head>

<body>
    LYCEUM OF THE PHILIPPINES-LAGUNA
    Makiling, Calamba City
    <form action="addphoto.php" method="post" enctype="multipart/form-data" name="addphoto">
    Select Image: <br />
    <div>First Name<input type="text" name="first_name" class="ed"><br /></div>
    <div>Last Name<input type="text" name="last_name" class="ed"><br /></div>
    <input type="file" name="image" class="ed"><br />
    Caption<br />
    <input name="caption" type="text" class="ed" id="brnu" /><br />
    <input type="submit" name="Submit" value="Upload" id="button1" />
    </form> <br />
     Photo Archieve
    <br /> <br />
    <?php
    include('config.php');
    $query = ("SELECT * FROM photos");
    $result = mysqli_query($dbc,$query);
    while($row = mysqli_fetch_array($result)){
    echo '<div id="imagelist">';
    echo '<p><img src="'.$row['image'].'"></p>';
    echo '<p id="first_name">'.$row['first_name'].' '.$row['last_name'].'</p>';
    echo '<p id="caption">'.$row['caption'].' </p>';
    echo '<p>' .$row['date'].'</p>';
    echo '</div>';
    }
    ?>

</body>
</html>

   

    