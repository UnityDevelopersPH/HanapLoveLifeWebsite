
  <?php
  include('function/connection.php');
  include('function/class.php');


  $resulta = $connect->query("SELECT * FROM discount");
              while($row = $resulta->fetch_assoc())
              {
               $Sixmonths = $row['6months'];
               $twelvemonths = $row['12months'];
              }
              $loadClasses = new loadClass();
              $number = 1234.56;
  ?>

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Hanap LoveLife | Admin Panel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

  <!-- Main Navigation -->
  <header>

  <?php include 'include/sidenav.php'; ?>

    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>

      <!-- Breadcrumb -->
      <div class="breadcrumb-dn mr-auto">
        <p>Hanap LoveLife</p>
      </div>


        <!-- Navbar links -->


    </nav>
    <!-- Navbar -->

  </header>
  <!-- Main Navigation -->
  <main>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header ripe-malinka-gradient white-text text-center py-4">
        <strong>Enter Plan for Users</strong>
        </h5>
        <form method="post" action="function/function.php">
        <div class="card-body card-body-cascade text-center pb-0">
          <form class="text-center" style="color: #757575;" action="#!">
            <div class="md-form">
              <input type="text" id="materialLoginFormEmail" name="percentage" class="form-control">
              <label for="materialLoginFormEmail">Enter Percentage less %</label>
            </div></form>

            <!-- Default inline 3-->
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="defaultInline3" value="6months" name="radio_months">
              <label class="custom-control-label" for="defaultInline3">6 Months</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="defaultInline4" value="12months" name="radio_months">
              <label class="custom-control-label" for="defaultInline4">12 Months</label>
            </div>
            <hr>
            <button type="submit" name="advantage" class="btn btn-danger col-md-12 btn-rounded mb-3"> Discount </button>
          </div>
          </form>

        </div>
      </div>
    </div>
    <hr/>
   <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">
            <!-- Card -->
            <div class="pricing-card card">

              <!-- Content -->
              <div class="card-body">
                <h5 class="font-weight-bold mt-3">1month</h5>
                <!-- Price -->
               <div class="pt-0">

                    <h2 class="h2-responsive display-2 mb-0">$3
                    </h2>
                  </div>
                <!-- Price -->
                <ul class="list-unstyled striped title darker-striped">
                  <li>
                    <p>
                      <strong>Unlimited Matches</strong></p>
                  </li>
                  <li>
                    <p>
                      <strong>1</strong> Month</p>
                  </li>
                </ul>

              </div>
            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">

            <!-- Card -->
            <div class="card card-image"
              style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(8).jpg');">

              <!-- Content -->
              <div
                class="text-white text-center pricing-card d-flex align-items-center rgba-indigo-strong py-3 px-3 rounded">

                <!-- Content -->
                <div class="card-body">
                  <h5 class="font-weight-bold mt-2">4months </h5>
                  <!-- Price -->
                  <div class="pt-0">
                    <h2 class="h2-responsive display-2 mb-0">
                    <?php
                    $loadClasses->percentage($Sixmonths,150);
                    ?>
                    <label style="font-size:15px;">/Month</label></h2>
                    <label style="font-size:15px; color:red;">Discount : <?php echo $Sixmonths."%" ?></label>
                  </div>
                  <!-- Price -->
                  <ul class="list-unstyled striped">
                    <li>
                      <p>
                        <strong>Unlimited Matches</strong></p>
                    </li>
                    <li>
                      <p>
                        <strong>3</strong> months</p>
                    </li>
                  </ul>

                </div>

              </div>
            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">
            <!-- Card -->
            <div class="pricing-card card">

              <!-- Content -->
              <div class="card-body">
                <h5 class="font-weight-bold mt-3">12months</h5>
                <!-- Price -->
                <div class="pt-0">
                    <h2 class="h2-responsive display-2 mb-0">
                    <?php
                    $loadClasses->percentage($twelvemonths,200);
                    ?>
                    <label style="font-size:15px;">/Month</label></h2>
                    <label style="font-size:15px; color:red;">Discount : <?php echo $twelvemonths."%" ?></label></h2>

                  </div>
                <!-- Price -->
                <ul class="list-unstyled striped title darker-striped">
                  <li>
                    <p>
                      <strong>Unlimited Matches</strong></p>
                  </li>
                  <li>
                    <p>
                      <strong>12</strong> months</p>
                  </li>
                </ul>

              </div>

            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->
  </main>

  <!-- Main layout -->

  <!-- Main layout -->

  <!-- Footer -->

  <!-- Footer -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <!-- Initializations -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    $(function () {
      $('#dark-mode').on('click', function (e) {

        e.preventDefault();

        $('footer, .card').toggleClass('dark-card-admin');
        $('body, .navbar').toggleClass('white-skin navy-blue-skin');
        $(this).toggleClass('white text-dark btn-outline-black');
        $('body').toggleClass('dark-bg-admin');
        $('h6, .card, p, td, th, i, li a, h4, input, label').not(
          '#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
        $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
        $('.gradient-card-header').toggleClass('white black lighten-4');
        $('.list-panel a').toggleClass('navy-blue-bg-a text-white').toggleClass('list-group-border');

      });
    });

    // Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});

  </script>

</body>

</html>
