<!doctype html>
<html lang="en">
    <head>
        <script src="https://kit.fontawesome.com/eceb5bfc89.js" crossorigin="anonymous"></script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="imageGallery.css">
        <!-- Bootstrap CSS
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <script src="imageGallery.js"></script>
        <title>Home Page</title>
		<style>
			body {
				background-image: url('web background image png.png');
			}
		</style>
    </head>
    <body class="h-100" style="background-color:#f8f9fa" onload="createImageGallery()">
      
        <?php
            include 'topBar.html';
        ?>
        
		
		
        <div class="main-body">
        <!-- <main role="main" name="id" class="bg-warning h-100"> -->

            <div class="main-content">
               <h1>Virtual Walkthrough of the new building</h1>
			   <br>
			   <br>
                <iframe src="vrwalkthrough.html" title="Virtual walkthrough" height= 500 width= 800></iframe>    
					
				<br>
				<br>
					
				<button type="button" onclick= "window.open('http://www.df239.webhosting.canterbury.ac.uk/assignment/vrwalkthrough.html','_blank')"> Click here to view walkthrough in full screen</button>
				
				<br>
				<br>
				
				<h4> Location-based Augmented Reality</h4>
				
				<br>
				<br>
				
				<button type="button" onclick= "window.open('webAR.html')"> Click here for location based AR</button>
				
				
            </div>
            <div class="right-bar">
                
               <?php
                    include 'articlePanel.php';
               ?>
            </div>
        <!-- </main> -->
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>