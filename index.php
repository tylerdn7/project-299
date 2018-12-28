<!DOCTYPE html>
<html>
<head>
    <title>Image Super Resolution</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .text-center{
            margin-top: 80px;
            margin-bottom: 20px;
        }
        .boss{
            text-align: center;
            margin-top: 600px;
        }
        .navbar{
            background: #ad5389;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #3c1053, #ad5389);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #3c1053, #ad5389); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        .navbar:hover{
            background: #8E0E00;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #1F1C18, #8E0E00);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #1F1C18, #8E0E00); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
    </style>
    </head>

<body>
    <?php
    
    if (isset($_POST['submission'])) {

    
$path0 = "";
  if(!empty($_FILES['uploaded_file0']))
  {
    $file_type0 = $_FILES['uploaded_file0']['type'];
    $path = "C:/xampp/htdocs/isr/i1/source/";
    $file0 = $_FILES['uploaded_file0']['name'];
    $path0 = $path . "sourceimage.jpg";

        if(move_uploaded_file($_FILES['uploaded_file0']['tmp_name'], $path0)) {           
        $path0 = $file0;        
            
        echo "<br /><h4 class='upscs'>Upload Succesful</h4>";
    
    } 
  }
  }
    

?>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Image Super Resolution</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="imageContainer" class="text-center" style="overflow:hidden;">
  <img class='zoom rounded' src='<?php echo $file0;?>' alt='Image Super Resolution'/>
	<script src="wheelzoom.js"></script>
	<script>
		wheelzoom(document.querySelector('img.zoom'));
	</script>
</div>
    <div class="d-flex justify-content-center">

            <div class="formsub">
          <form enctype="multipart/form-data" action="index.php" method="POST">
            <h5>Upload your file</h5> <br />
            <input type="file" name="uploaded_file0" required placeholder="Fill out image area"><br /><br />
            <p>Please Check Again Before Submission</p>
            <input type="submit" value="Upload" name="submission">
          </form>
            </div>
            </div>
       <?php
        if ( isset( $_POST["submission"] ) ) { 
      // (deal with the submitted fields here) 
      header( "Location: call.html" ); 
      exit; 
    } 
    ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <h3 class="boss">&copy Ahasanul Hamza Production</h3>
</body>
</html>