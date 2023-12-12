<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
    <?php include './components/sidebar.php';?>


      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <?php include './components/navbar.php';?>

          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Edit Device</h1>
            <?php
              $deviceId = $_GET['did'];

              include './server/config.php';

              $stmt = $conn->prepare("SELECT * FROM devices WHERE DID = ?");
              $stmt->bind_param("i", $deviceId);
              $stmt->execute();
              $result = $stmt->get_result();

              if ($result->num_rows == 1) {
                $device = $result->fetch_assoc();               
            ?>

            <form
              class="w-50"
              action="./server/edit_device.php"
              method="POST"
              enctype="multipart/form-data"
            >
            <input type="hidden"  class="form-control" name="did" value="<?php echo $device['DID']; ?>">
              <div class="form-row">
                <div class="form-group col">
                  <label for="inputModel">Title</label>
                  <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="inputTitle"
                    value="<?php echo $device['Title']; ?>"
                    placeholder="Title"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputState">Manufacturer</label>
                  <select
                    id="inputState"
                    name="manufacturer"
                    class="form-control"
                    value="6"
                  >
                    <option value="Acer">Acer</option>
                    <option value="Apple">Apple</option>
                    <option value="Asus">Asus</option>
                    <option value="Dell">Dell</option>
                    <option value="HP">HP</option>
                    <option value="Lenovo">Lenovo</option>
                    <option value="MSI">MSI</option>
                    <option value="One Notebook">One Notebook</option>
                    <option value="Vivo">Vivo</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputModel">Model</label>
                  <input
                    type="text"
                    class="form-control"
                    name="model"
                    value="<?php echo $device['Model']; ?>"
                    id="inputModel"
                    placeholder="Model"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputProcessor">Processor</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputProcessor"
                    value="<?php echo $device['Processor']; ?>"
                    name="processor"
                    placeholder="Processor"
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputprice">Price (USD)</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputprice"
                    value="<?php echo $device['Price']; ?>"
                    name="price"
                    placeholder="Price"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputGeneration">Generation</label>
                  <input
                    type="text"
                    class="form-control"
                    name="generation"
                    value="<?php echo $device['Generation']; ?>"
                    id="inputGeneration"
                    placeholder="Generation"
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputRAM">RAM (GB)</label>
                  <input
                    type="text"
                    name="ram"
                    class="form-control"
                    value="<?php echo $device['Ram']; ?>"
                    id="inputRAM"
                    placeholder="RAM"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <label for="inputDescription">Description</label>
                  <textarea
                    type="text"
                    class="form-control"
                    name="description"
                    id="inputDescription"
                    placeholder="Description"
                    cols="30"
                    rows="10"
                  ><?php echo $device['Description']; ?></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="deviceimage">Image</label>
                <input
                  type="file"
                  name="imageurl"
                  accept="image/*"
                  class="form-control-file"
                  id="deviceimage"
                />
              </div>

              <button type="submit" class="btn btn-primary">EDit Device</button>
            </form>

            <?php
              } else {
                  echo "not found.";
              }
              $stmt->close();
              $conn->close();
            ?>

          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
