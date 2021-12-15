            <?php
              if (isset($_GET["page"]))
              {
                   $nummer=$_GET["page"];
              }
              else
              {
                  $nummer=1;
              }
              
              echo "<div";
              if ($nummer==1) {
                echo " class='current'";            
              } else {
                echo " class='noncurrent'";
              }       
              echo " ><a class='menu'  href='index.php?page=1'>Home</a></div></li> ";        
                  
              echo "<div";
              if ($nummer==2) {
                echo " class='current'";
              } else {
                echo " class='noncurrent'";
              }
              echo "><a class='menu' href='index.php?page=2'>Over Mij</a></div></li>";
              
              echo "<div";
              if ($nummer==3) {
                echo " class='current'";
              } else {
                echo " class='noncurrent'";
              }
              echo "><a class='menu' href='index.php?page=3'>Opdrachten</a></div></li>";
              
              echo "<div";
              if ($nummer==4) {
                  echo " class='current'";
              } else { 
                  echo " class='noncurrent'";
              }
              echo "><a class='menu' href='index.php?page=4'>Dagboek</a></div></li>";
              echo "<div";
              if ($nummer==5) {
                echo " class='current'";
              } else {
                  echo " class='noncurrent'";
              }
              echo "><a class='menu' href='index.php?page=5'>Ontwerp</a></div></li>";
              echo "<div";
              if ($nummer==6) {
                  echo " class='current'";
              } else {
                  echo " class='noncurrent'";
              }
              echo "><a class='menu' href='index.php?page=6'>Bronnen</a></div></li>";
              echo "<div";
              if ($nummer==7) {
                  echo " class='current'";
              } else { 
                  echo " class='noncurrent'";
              }
              echo "><a class='menu' href='index.php?page=7'>Rekenmachine</a></div></li>";
            ?>
