<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PALMTOP.lk</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet" />
    <link href="Style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="container-fluid">
      <?php include './component/navbar.php';?>
      <div class="container">
        <h2 class="text-center text-capitalize">
          <strong
            >Come &amp; see the difference!&nbsp; &nbsp; &nbsp;&nbsp;</strong
          >
        </h2>
      </div>
      <br />

      <center>
        <h1><strong>Location Map</strong></h1>
      </center>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11800.54981683203!2d80.03464591379417!3d6.819347635726086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2523b05555555%3A0x546c34cd99f6f488!2sNSBM%20Green%20University!5e0!3m2!1sen!2slk!4v1699419041635!5m2!1sen!2slk"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
      <br />
      <br />
      <hr />

      <center>
        <div class="col-lg-6">
          <div class="card col-md-16">
            <br /><b
              ><h3><u>Branch Hours</u></h3></b
            >
            <hr />
            Sunday :- Closed <br />
            Monday :- 9:00AM-10:00PM <br />
            Tuesday :- 9:00AM-10:00PM <br />
            Wednesday :- 9:00AM-10:00PM <br />
            Thursday :- 9:00AM-10:00PM <br />
            Friday :- 9:00AM-10:00PM <br />
            Saturday :- 9:00AM-6:00PM <br />
          </div>
        </div>
      </center>
      <br />

      <div class="card">
        <footer>
          <center>
            <b
              >We are Here! 24/7 Customer Support. <br />
              <a href="hr.com">+947312345678</a> /
              <a href="hr.com">+947912345678</a> <br />
              <a href="laptopsforsale123@gmail.com">PALMTOPlk@gmail.com</a>
              <br />
              <a href="Youtube.html"
                ><img src="images/whtsap.png" width="45" height="43" alt=""
              /></a>
              <a href="Youtube.html"
                ><img src="images/insta.png" width="40" height="40" alt=""
              /></a>
              <a href="Youtube.html"
                ><img src="images/Fb1.png" width="38" height="35" alt="" /></a
            ></b>
          </center>
        </footer>
        <br />
        <p>
          <center>
            <b
              ><a href="index.php">Home</a> | <a href="about.php">About</a> |
              <a href="promo.php">Promo</a> |
              <a href="contact.php">Contact</a> |
              <a href="location.php">Location</a> |
              <a href="brandsAndCateg.php">Brands & Categories</a></b
            >
          </center>
        </p>
        <div class="row">
          <div class="col-lg-5">
            <b
              >&nbsp;<img
                src="images/newlogo.jpg"
                alt=""
                width="3365"
                height="1450"
                class="img-fluid"
            /></b>
          </div>
          <div class="col-lg-6">
            &nbsp;<b
              >&nbsp;<br />
              &nbsp; Laptops for sale.<br /><br />
              &nbsp; #21/A, Weliwatta road, Colombo 09.<br /><br />
              &nbsp; Copyright © 2023 PALMTOP.lk | All rights reserved.</b
            >
          </div>

          <div class="col-log-7">
            <b
              ><center>
                <br />
                <p><u>Top Brands</u></p>
                <a href="brandsAndCateg.php">Apple</a><br />
                <a href="brandsAndCateg.php">Asus</a><br />
                <a href="brandsAndCateg.php">Dell</a><br />
                <a href="brandsAndCateg.php">HP</a><br />
                <a href="brandsAndCateg.php">MSI</a><br />
                <a href="brandsAndCateg.php">Lenovo</a>
              </center></b
            >
          </div>
        </div>
        <a href="orderplace.php"></a
        ><!-- body code goes here -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.4.1.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap-4.4.1.js"></script>
        <script>
          function checker() {
            var result = confirm("Are You Sure?");
            if (result == false) {
              event.preventDefault();
            }
          }
        </script>
      </div>
    </div>
  </body>
</html>
