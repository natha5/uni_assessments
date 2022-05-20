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
    </head>
    <body class="h-100" style="background-color:#f8f9fa">
      
        <?php
            include 'topBar.html';
        ?>
        
        <div class="main-body">
        <!-- <main role="main" name="id" class="bg-warning h-100"> -->

            <div class="main-content">
                <div class="text-block">
                    <h1 class="text-center">The Verena Holmes Building</h1>
                </div>
                
                <div id="imageGallery">
                    <?php
                        include 'connection.php';
                        
                        $sql = "SELECT * FROM galleryImages";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                            echo "<img class=\"galleryImage\" src=\"galleryImages/".$row["imagePath"]."\" alt=\"".$row["imageName"]."\">";
                          }
                        }
                        
                        $conn->close();
                    ?>
        
                    <div class="prev" onclick="changeImages(-1)">
                        <div class="arrow-text">&#10094;</div>
                    </div>
                    <div class="next" onclick="changeImages(1)">
                        <div class="arrow-text">&#10095;</div>
                    </div>
                </div>
                <div class="main-info">
                    <div class="text-block">
                        <?php
                            include 'connection.php';
                        
                            $sql = "SELECT * FROM mainPageContent";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0){
                                while ($row = $result->fetch_assoc()){
                                    echo "<".$row["htmlTag"].">".$row["content"]."</".$row["htmlTag"].">";
                                }
                            }
                        ?>
                    </div>
                </div>
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
