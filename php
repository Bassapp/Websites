<!DOCTYPE HTML>
<html>
    <head>
        <title>Bas' website | Home</title>
        <link rel="Stylesheet" href="styles.css"></link>
        <link rel="icon" type="image/png" href="..//Images/logo.png"></link>
        <?php
        if(isset($_GET["page"])) {
          $nummer = $_GET["page"];
        } else {
          $nummer = 1;
        }
        
        if ($nummer == 7) {
          echo "<link rel='Stylesheet' href='rekenmachine.css'></link>"
        ?>
    </head>
 
  <body>
    <div id="container">
      <section>
 
        <header>
          <div class="header1">
            <p>Bas' website | Home</p>
          </div>
          <div class="navbar">
          <nav id="navbar-left">
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
            </nav>
            <nav id="navbar-right">
              <img src="../Images/logo.png" width="50" height="50">
            </nav>
          </div>
        </header>
     
        <article>
 
            <?php
                if (isset($_GET["page"]))
                {
                    $nummer = $_GET["page"];
                }
                else
                {
                    $nummer=1;
                }
                switch ($nummer)
                {
                case 1:
                readfile("home.inc");
                break;
 
                case 2:
                readfile("overmij.inc");
                break;
 
                case 3:
                readfile("opdrachten.inc");
                break;
 
                case 4:
                readfile("dagboek.inc");
                break;
 
                case 5:
                readfile("ontwerp.inc");
                break;
 
                case 6:
                readfile("bronnen.inc");
                break;
 
                case 7:
                readfile("rekenmachine.inc");
                break;
                };
                ?>
        </article>
 
      </section>
 
      <footer>
        <div id="footer-links">
          (c) 2021 Bassap
        </div>
        <div id="footer-rechts">
          <a href="mailto:bdbeere@ogvo.nl">Contact</a>
        </div>
      </footer>
 
    </div>
 
  </body>
 
</html>
