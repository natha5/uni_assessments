<link rel="stylesheet" href="articlePanel.css">
<?php

    include 'connection.php';
    
    $sql = "SELECT * FROM articleLinks";
    $result = $conn->query($sql);
    
    $num_rows = $result->num_rows;    
    
    function makeArticleDiv($row, $divClasses){
        echo "<div class=\"$divClasses\">
                <a class=\"article-link\" target=\"_blank\" alt=\"Opens new window\" href=\"".$row["articleURL"]."\">".$row["articleTitle"]."</a>
              </div>";
    }
    
    echo "<nav class=\"articles-container\">"; 
    
    if($num_rows > 0){
        for ($i = 0; $i < $num_rows; $i++){
            $row=$result->fetch_assoc();
            
            if($i == 0){
                makeArticleDiv($row, "article-div top-article-div");
            }
            else if($i == $num_rows - 1){
                makeArticleDiv($row, "article-div bottom-article-div");
            }
            else{
                makeArticleDiv($row, "article-div");
            }
            
        }
    }
    
    echo "</nav>";
?>