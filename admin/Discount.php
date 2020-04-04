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
    <div class="row">
      <!-- Card -->
      <div class="col-md-4">
<div class="card card-cascade narrower">
 <div class="view view-cascade overlay">
    <img class="card-img-top" src="img/img1.png"
      alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <!-- Card body -->
  <div class="card-body">

    <!-- Default form subscription -->
    <form>
      <p class="h4 text-center py-4">Normal</p>

      <!-- Default input name -->
      <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Enter Price</label>
      <input type="text" id="defaultFormCardNameEx" class="form-control">
      <div class="text-center py-5">
        <button class="btn btn-purple" type="submit">Submit</button>
      </div>
    </form>
    <!-- Default form subscription -->

  </div>
  <!-- Card body -->
</div>
</div>
<!-- Card -->

<!-- Card -->
<div class="col-md-4">
<div class="card card-cascade narrower">
 <div class="view view-cascade overlay">
    <img class="card-img-top" src="img/img2.png"
      alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card body -->
  <div class="card-body">

    <!-- Default form subscription -->
    <form>
      <p class="h4 text-center py-4">Premium</p>

      <!-- Default input name -->
      <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Enter Price</label>
      <input type="text" id="defaultFormCardNameEx" class="form-control">
      <div class="text-center py-5">
        <button class="btn btn-purple" type="submit">Submit</button>
      </div>
    </form>
    <!-- Default form subscription -->

  </div>
  <!-- Card body -->
</div>
</div>
<!-- Card -->

<!-- Card -->
<div class="col-md-4">
<div class="card card-cascade narrower">
 <div class="view view-cascade overlay">
    <img class="card-img-top" src="img/img3.png"
      alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <!-- Card body -->
  <div class="card-body">
    <!-- Default form subscription -->
    <form>
      <p class="h4 text-center py-4">Season</p>

      <!-- Default input name -->
      <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Enter Price</label>
      <input type="text" id="defaultFormCardNameEx" class="form-control">
      <div class="text-center py-5 mt-2">
        <button class="btn btn-purple" type="submit">Submit</button>
      </div>
    </form>
    <!-- Default form subscription -->

  </div>
  <!-- Card body -->
</div>
</div>
<!-- Card -->

      
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

  </script>

</body>

</html>
