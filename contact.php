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
          <strong>Get In Touch !&nbsp; &nbsp; &nbsp;</strong>
        </h2>
      </div>
      <hr />

      <center>
        <div class="row">
          <div class="col-lg-7">
            <div class="card col-md-4 col-lg-10">
              <div class="card-body">
                <h3 class="card-title"><u>Talk to Sales.</u></h3>
                <h5 class="card-text">
                  Interested with PALMTOP.lk, <br />Just pick up the phone to
                  chat with one of our sales team.
                </h5>
                <a href="#"> +94731235678 </a> / <a href="#">+94791235978</a>
              </div>
            </div>
            <br />
            <div class="card col-md-4 col-lg-10">
              <div class="card-body">
                <h5 class="card-text">
                  "Connect with us! Our Contact Us page is your direct line to
                  personalized assistance. Whether you have questions, feedback,
                  or inquiries, we're here to help. Reach out through our
                  user-friendly form or find our contact details below. We look
                  forward to hearing from you!".
                </h5>
              </div>
            </div>
            <br />

            <div class="col-lg-11">
              <div class="card col-md-16">
                <div id="reviews-container">
                  <h2>Customer Reviews</h2>

                  <div class="review">
                    <p>
                      <strong>Dinoth Mihisara:</strong> This product is amazing!
                      I highly recommend it.
                    </p>
                  </div>

                  <!-- More reviews can be added here -->

                  <div id="review-form">
                    <h3>Add Your Review</h3>
                    <form id="add-review-form">
                      <label for="reviewer-name">Your Name:</label>
                      <input type="text" id="reviewer-name" required /> <br />

                      <label for="review-content">Your Review:</label>
                      <textarea
                        id="review-content"
                        rows="4"
                        required
                      ></textarea>
                      <br />

                      <button type="button" onclick="addReview()">
                        Submit Review
                      </button>
                    </form>
                  </div>
                </div>

                <script>
                  function addReview() {
                    var reviewerName =
                      document.getElementById("reviewer-name").value;
                    var reviewContent =
                      document.getElementById("review-content").value;

                    if (reviewerName && reviewContent) {
                      var reviewContainer =
                        document.getElementById("reviews-container");
                      var reviewElement = document.createElement("div");
                      reviewElement.className = "review";
                      reviewElement.innerHTML =
                        "<p><strong>" +
                        reviewerName +
                        ":</strong> " +
                        reviewContent +
                        "</p>";
                      reviewContainer.insertBefore(
                        reviewElement,
                        reviewContainer.firstChild
                      );

                      // Clear the form fields
                      document.getElementById("reviewer-name").value = "";
                      document.getElementById("review-content").value = "";
                    }
                  }
                </script>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <img
              src="images/black-nails-blonde-business-business-woman.jpg"
              alt=""
              width="837"
              height="1250"
              class="img-fluid img-thumbnail"
            />
          </div>
        </div>
      </center>
      <hr />

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
    </div>
  </body>
</html>
