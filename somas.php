<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kurpes</title>

    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
	
</head>
<body>
     <a href="index.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM images WHERE tag_it = 'kurpes' ";
          $res = mysqli_query($conn,  $sql);

          //var_dump($conn);
          //echo "|||";
          //var_dump($res);
          //echo "|||";
          //var_dump($images);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
                <!--<?php var_dump($images); ?>-->
             </div>
          		
    <?php } }?>

</body>
</html>