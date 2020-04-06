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
        <div class="card-body card-body-cascade text-center pb-0">
          <form class="text-center" style="color: #757575;" action="#!">
            <div class="md-form">
              <input type="text" id="materialLoginFormEmail" class="form-control">
              <label for="materialLoginFormEmail">Enter Amount</label>
            </div></form>
            <!--Blue select-->
            <select class="mdb-select md-form dropdown-white-text dropdown-danger">
              <option value="" disabled selected>Choose your Plan</option>
              <option value="" class="white-text">
                Normal
              </option>
              <option value="">
                Premium
              </option>
              <option value="Season">
                Season
              </option>
            </select>
            <!-- Default inline 1-->
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
              <label class="custom-control-label" for="defaultInline1">1 Month</label>
            </div>
            <!-- Default inline 2-->
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
              <label class="custom-control-label" for="defaultInline2">3 Months</label>
            </div>
            <!-- Default inline 3-->
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadiosExample">
              <label class="custom-control-label" for="defaultInline3">6 Months</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="defaultInline4" name="inlineDefaultRadiosExample">
              <label class="custom-control-label" for="defaultInline4">12 Months</label>
            </div>
            <hr>
            <button class="btn btn-danger col-md-12 btn-rounded mb-3"> Submit </button>
          </div>

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
                <h5 class="font-weight-bold mt-3">Normal</h5>
                <!-- Price -->
               <div class="pt-0">
                    <h2 class="h2-responsive display-2 mb-0">20</h2>
                  </div>
                <!-- Price -->
                <ul class="list-unstyled striped title darker-striped">
                  <li>
                    <p>
                      <strong>1</strong> project</p>
                  </li>
                  <li>
                    <p>
                      <strong>100</strong> components</p>
                  </li>
                  <li>
                    <p>
                      <strong>150</strong> features</p>
                  </li>
                  <li>
                    <p>
                      <strong>200</strong> members</p>
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
                  <h5 class="font-weight-bold mt-2">Premium </h5>
                  <!-- Price -->
                  <div class="pt-0">
                    <h2 class="h2-responsive display-2 mb-0">20</h2>
                  </div>
                  <!-- Price -->
                  <ul class="list-unstyled striped">
                    <li>
                      <p>
                        <strong>3</strong> projects</p>
                    </li>
                    <li>
                      <p>
                        <strong>200</strong> components</p>
                    </li>
                    <li>
                      <p>
                        <strong>250</strong> features</p>
                    </li>
                    <li>
                      <p>
                        <strong>300</strong> members</p>
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
                <h5 class="font-weight-bold mt-3">Season</h5>
                <!-- Price -->
                <div class="pt-0">
                    <h2 class="h2-responsive display-2 mb-0">20</h2>
                  </div>
                <!-- Price -->
                <ul class="list-unstyled striped title darker-striped">
                  <li>
                    <p>
                      <strong>5</strong> projects</p>
                  </li>
                  <li>
                    <p>
                      <strong>300</strong> components</p>
                  </li>
                  <li>
                    <p>
                      <strong>350</strong> features</p>
                  </li>
                  <li>
                    <p>
                      <strong>400</strong> members</p>
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
