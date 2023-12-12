<?php

require './server/config.php';

if(!empty($_SESSION["id"]))
{
  $id=$_SESSION["id"];
  $result=mysqli_query($conn,"select * from users where userId='$id'");
  $row=mysqli_fetch_assoc($result);
}
else
{
 //header("Location:loging.html");
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light"><a class="navbar-brand" href="index.php">&nbsp;</a><a
        href="index.php"><img src="images/logonew.jpg" alt="" width="202" height="91" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span
          class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> <a class="nav-link" href="index.php"><b>Home</b> <span
                class="sr-only">(current)</span></a> </li>
          <li class="nav-item"> <a class="nav-link" href="about.php"><b>About</b>&nbsp;</a> </li>
          <li class="nav-item"> <a class="nav-link" href="promo.php"><b>Promo</b>&nbsp;</a></li>
          <li class="nav-item"> <a class="nav-link" href="location.php"><b>Location</b>&nbsp;</a></li>

          <li class="nav-item"> <a onclick="checker()" class="nav-link" href="contact.php"><b>Contact</b>&nbsp;</a>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <b>Brands</b>&nbsp; </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#"></a> <a
                class="dropdown-item" href="brandsAndCateg.php">Dell</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="brandsAndCateg.php">HP</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="brandsAndCateg.php">MSI</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="brandsAndCateg.php">Asus</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="brandsAndCateg.php">Macbooks</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="brandsAndCateg.php">Lenovo</a>
            </div>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Categories</b> <b></b>&nbsp; </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown2"> <a class="dropdown-item" href="#"></a> <a
                class="dropdown-item" href="brandsAndCateg.php"> Speakers </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="brandsAndCateg.php"> Projectors</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="brandsAndCateg.php">UBS HUB</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="brandsAndCateg.php">Printers and Scanners</a>
            </div>
          </li>
        </ul>
        <form>
          <?php
                  if(!empty($row["uname"]))
                  {
                    echo $row["uname"];
                   echo "<a href='logout.php'><strong> Sign out&nbsp;</strong> </a>";
                    
                  }
                  else
                  {
                    echo"<a href='signup.html'><strong>Sign Up&nbsp;</strong> </a>"; 
					          echo"<a href='login.html'> <strong> &nbsp;Login</strong></a>";
                  }
                  ?>

        </form>
      </div>
    </nav>