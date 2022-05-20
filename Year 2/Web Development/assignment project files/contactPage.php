<!doctype html>
<html lang="en">
    <head>
        <script src="https://kit.fontawesome.com/eceb5bfc89.js" crossorigin="anonymous"></script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="contactForm.css">
        <link rel="stylesheet" href="contacts.css">
        <!-- Bootstrap CSS
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <title>Contact Page</title>
    </head>
    <body class="h-100" style="background-color:#f8f9fa">
      
        <?php
            include 'topBar.html';
        ?>
        
        <div class="main-body">
        <!-- <main role="main" name="id" class="bg-warning h-100"> -->

            <div class="main-content">
                <div class="text-block">
                    <h1 class="text-center">The Verena Holmes Contacts</h1>
                    <div class="contact-div">
                        <div class="contact-fields-div">
                            <?php
                            include 'connection.php';
                        
                            $sql = "SELECT * FROM contacts";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0){
                                while ($row = $result->fetch_assoc()){
                                    echo "<div class=\"contact-field\">".
                                         "<h3>".$row["contactDescription"]."</h3>".
                                         "<p>".$row["contactName"]."<br>".
                                         "E-mail: ".$row["email"]."<br>".
                                         "Phone Number: ".$row["phoneNumber"];
                                    if ($row["altPhoneNumber"] != null){
                                        echo "; ".$row["altPhoneNumber"];
                                    }
                                    echo "</p></div><br>";
                                }
                            }
                            
                            mysqli_close($conn);
                        ?>
                        </div>
                        <div class="map-div">
                            <iframe title="map" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1483.9611414181638!2d1.0884541092607682!3d51.279561151121825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47deca49ccc11cc1%3A0xec9052260f879547!2sCanterbury%20Christ%20Church%20University!5e0!3m2!1ssk!2ssk!4v1619092891010!5m2!1ssk!2ssk" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="email-form">
                    <div class="form-heading">
                        <h2>Ask Us Anything</h2>
                    </div>
                    <form method="post">
                        <label for="email-input" class="form-label">Your Email:</label>
                        <br>
                        <input type="text" name="email-input" id="email-input" class="form-input" required pattern="[A-Za-z0-9._]*@[A-Za-z0-9._]*">
                        <br><br>
                        <label for="subject-input" class="form-label">Subject:</label>
                        <br>
                        <input type="text" name="subject-input" id="subject-input" class="form-input" required>
                        <br><br>
                        <label for="query-input" class="form-label">Your Query:</label>
                        <br>
                        <textarea name="query-input" class="form-input query-input" id="query-input" required></textarea>
                        <br><br>
                        <div class="form-submit">
                            <input type="submit" name="submit" value="Submit" class="submit-button">
                        </div>
                    </form>
                    <?php
                        if(isset($_POST["submit"])){
                            include 'connection.php';
                                                    
                            $email=$_POST["email-input"];
                            $subject=$_POST["subject-input"];
                            $query=$_POST["query-input"];
                        
                            $sql="INSERT INTO questions(senderEmail, senderSubject, senderQuery) VALUES ('$email', '$subject', '$query')";
                            if(mysqli_query($conn, $sql)){
                                echo "<script>alert(\"Query submitted successfully.\");</script>";
                            }
                            else{
                                echo "<script>alert(\"Something went wrong. Query has not been submitted.\");</script>";
                            }
                        
                            mysqli_close($conn);
                        }
                    ?>
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
