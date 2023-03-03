<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>

    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

</head>
<body>

    <div id="cp_code_hek">

	    <?php if (isset($_GET['error'])): ?>
	    	<p><?php echo $_GET['error']; ?></p>
	    <?php endif ?>

         <form action="upload.php"
               method="post"
               enctype="multipart/form-data">
               <input type="file" 
                      name="my_image">
               <input type="submit" 
                      name="submit"
                      value="Upload">
         </form>

     </div>


     <a href="view.php">&rarr;</a>

     <a href="kurpes.php">Kurpes</a>

     <a href="somas.php">Somas</a>
	
     <!-- Trigger/Open The Modal -->
     <button id="myBtn">Open Modal</button>

     <!-- The Modal -->
     <div id="myModal" class="modal">

     <!-- Modal content -->
         <div class="modal-content">
             <span class="close">&times;</span>
             <p>Some text in the Modal..</p>
         </div>

     </div>



</body>
</html>
