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
    </nav>
    <!-- Navbar -->
  </header>
  <!-- Main layout -->
   <main>
    <div class="container-fluid">
      <!-- Section: Basic examples -->
      <section>
        <!-- Top Table UI -->
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-12 col-md-12 right">
              <form class="form-inline md-form mt-2 ml-2">
                <input class="form-control mt-2" type="text" placeholder="Search" style="max-width: 150px;">
                <button class="btn btn-sm btn-primary ml-2 px-1"><i class="fas fa-search"></i> </button>
              </form>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->
        <!-- Top Table UI -->

        <div class="card card-cascade narrower z-depth-1">
          <!-- Card image -->
          <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
            <a href="" class="white-text mx-3">Hanap LoveLife User's</a>
          </div>
          <!-- /Card image -->
          <div class="px-4">
            <div class="table-responsive">
              <!-- Table -->
              <table class="table table-hover mb-0 align-middle">
                <!-- Table head -->
                <thead>
                  <tr>
                    <th class="th-lg"><a> Username </a></th>
                    <th class="th-lg"><a href="">Email</a></th>
                    <th class="th-lg"><a href="">Age</a></th>
                    <th class="th-lg"><a href="">Gender</a></th>
                    <th class="th-lg"><a href="">Phone Number</a></th>
                    <th class="th-lg"><a href="">Status</a></th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                  <tr>
                    <td>hackdog</td>
                    <td>hackdog@gmail.com</td>
                    <td>21</td>
                    <td>Male</td>
                    <td>0912345678</td>
                    <td><span class="badge badge-danger badge-lg"> Offline </span></td>
                  </tr>
                </tbody>
                <!-- Table body -->
              </table>
              <!-- Table -->
            </div>

            <hr class="my-0">

            <!-- Bottom Table UI -->
            <div class="d-flex justify-content-between">

              <!-- Name -->
              <select class="mdb-select colorful-select dropdown-primary mt-2">
                <option value="" disabled>Rows number</option>
                <option value="1" selected>5 rows</option>
                <option value="2">25 rows</option>
                <option value="3">50 rows</option>
                <option value="4">100 rows</option>
              </select>

              <!-- Pagination -->
              <nav class="my-4">
                <ul class="pagination pagination-circle pg-blue mb-0">

                  <!-- First -->
                  <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a></li>

                  <!-- Arrow left -->
                  <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>

                  <!-- Numbers -->
                  <li class="page-item active"><a class="page-link">1</a></li>
                  <li class="page-item"><a class="page-link">2</a></li>
                  <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">3</a></li>
                  <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">4</a></li>
                  <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">5</a></li>

                  <!-- Arrow right -->
                  <li class="page-item">
                    <a class="page-link" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>

                  <!-- First -->
                  <li class="page-item clearfix d-none d-md-block"><a class="page-link">Last</a></li>

                </ul>
              </nav>
              <!-- /Pagination -->

            </div>
            <!-- Bottom Table UI -->

          </div>
        </div>

      </section>
      <!-- Section: Basic examples -->

    </div>

    <hr class="my-5">
  </main>

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
