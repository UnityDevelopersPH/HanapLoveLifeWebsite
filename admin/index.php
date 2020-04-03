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

      <div class="d-flex change-mode">

        <div class="ml-auto mb-0 mr-3 change-mode-wrapper">
          <button class="btn btn-outline-black btn-sm" id="dark-mode">Change Mode</button>
        </div>

        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span
                class="clearfix d-none d-sm-inline-block">Contact</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span
                class="clearfix d-none d-sm-inline-block">Support</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">Log Out</a>
              <a class="dropdown-item" href="#">My account</a>
            </div>
          </li>

        </ul>
        <!-- Navbar links -->

      </div>

    </nav>
    <!-- Navbar -->

  </header>
  <!-- Main Navigation -->

  <!-- Main layout -->
  <main>

    <div class="container-fluid">

      <!-- Section: Analytical panel -->
      <section class="mt-md-4 pt-md-2 mb-5">

        <!-- First row -->
        <div class="row">

          <!-- First column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">

              <!-- Card Data -->
              <div class="admin-up">
                <i class="far fa-money-bill-alt primary-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Sales</p>
                  <h4 class="font-weight-bold ">4 571 $</h4>
                </div>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Better than last week (25%)</p>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- First column -->

          <!-- Second column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">

              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-chart-line warning-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Subscriptions</p>
                  <h4 class="font-weight-bold ">375</h4>
                </div>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar red accent-2" role="progressbar" style="width: 25%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Worse than last week (25%)</p>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Second column -->

          <!-- Third column -->
          <div class="col-xl-3 col-md-6 mb-md-0 mb-4">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">

              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-chart-pie light-blue lighten-1 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Traffic</p>
                  <h4 class="font-weight-bold ">21 479</h4>
                </div>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar red accent-2" role="progressbar" style="width: 75%" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Worse than last week (75%)</p>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Third column -->

          <!-- Fourth column -->
          <div class="col-xl-3 col-md-6 mb-0">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">

              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-chart-bar red accent-2 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Organic traffic</p>
                  <h4 class="font-weight-bold ">4 567</h4>
                </div>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Better than last week (25%)</p>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Fourth column -->

        </div>
        <!-- First row -->

      </section>
      <!-- Section: Analytical panel -->

      <!-- Section: data tables -->
      <section class="pb-3">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-6 col-md-12">

            <!-- Panel -->
            <div class="card mb-4">

              <div class="card-header white-text primary-color">
                <h5 class="font-weight-500 my-1">Recent comments and replies</h5>
              </div>

              <div class="card-body">

                <table class="table">
                  <tbody>
                    <tr>
                      <td class="border-top-0">John Doe</td>
                      <td class="border-top-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                      <td class="border-top-0 hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>Merry Joe</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                      <td class="hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>Jessie Doe</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                      <td class="hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <button
                  class="btn btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold  float-right btn-dash">View
                  full report</button>

              </div>

            </div>
            <!-- Panel -->

            <!-- Panel -->
            <div class="card mb-lg-0 mb-4">

              <div class="card-header white-text primary-color">
                <h5 class="font-weight-500 my-1">Issues</h5>
              </div>

              <div class="card-body">

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="font-weight-bold ">Status</th>
                        <th class="font-weight-bold ">Title</th>
                        <th class="font-weight-bold ">User</th>
                        <th class="font-weight-bold ">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span class="badge green">Open</span></td>
                        <td>Lorem ipsum dolor</td>
                        <td>John Doe</td>
                        <td class="hour">
                          <span class="grey-text">
                            <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><span class="badge green">Open</span></td>
                        <td>Lorem ipsum dolor</td>
                        <td>John Doe</td>
                        <td class="hour">
                          <span class="grey-text">
                            <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><span class="badge warning-color">In progress</span></td>
                        <td>Lorem ipsum dolor</td>
                        <td>John Doe</td>
                        <td class="hour">
                          <span class="grey-text">
                            <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><span class="badge red">Closed</span></td>
                        <td>Lorem ipsum dolor</td>
                        <td>John Doe</td>
                        <td class="hour">
                          <span class="grey-text">
                            <i class="far fa-clock-o" aria-hidden="true"></i> 12 min
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>

            </div>
            <!-- Panel -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-6 col-md-12">

            <!-- Panel -->
            <div class="card mb-4">

              <div class="card-header white-text primary-color">
                <h5 class="font-weight-500 my-1">Users activity</h5>
              </div>

              <div class="card-body">

                <div class="row my-2 pt-1">
                  <div class="col-4">
                    <small class="grey-text">Pages/Visits</small>
                    <h4>139 419</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">New visitors</small>
                    <h4>51.94%</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">Last week</small>
                    <h4>51 932</h4>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-4">
                    <small class="grey-text">Pages/Visits</small>
                    <h4>139 419</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">New visitors</small>
                    <h4>51.94%</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">Last week</small>
                    <h4>51 932</h4>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-4">
                    <small class="grey-text">Pages/Visits</small>
                    <h4>139 419</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">New visitors</small>
                    <h4>51.94%</h4>
                  </div>
                  <div class="col-4">
                    <small class="grey-text">Last week</small>
                    <h4>51 932</h4>
                  </div>
                </div>

                <button
                  class="btn btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold  float-right btn-dash">View
                  full report</button>

              </div>

            </div>
            <!-- Panel -->

            <!-- Panel -->
            <div class="card text-center mb-4 pt-4 pb-3 red accent-2 white-text">
              <i class="fas fa-bell fa-3x mb-3"></i>
              <h4 class="h4-responsive">28 important messages</h4>
            </div>
            <!-- Panel -->

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-6 mb-md-0 mb-4">

                <!-- Panel -->
                <div class="card">

                  <div class="card-header white-text grey darken-1">
                    <h5 class="font-weight-500 my-1">Orders</h5>
                  </div>

                  <h6 class="ml-4 mb-0 pt-4  font-weight-bold"><i class="fas fa-arrow-up blue-text mr-3"
                      aria-hidden="true"></i> 2000 </h6>

                  <div class="card-body">
                    <div class="progress">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-small grey-text mt-3 mb-0">Better than last week (25%)</p>
                  </div>

                </div>
                <!-- Panel -->

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6 mb-0">

                <!-- Panel -->
                <div class="card">
                  <div class="card-header white-text warning-color">
                    <h5 class="font-weight-500 my-1">Monthly sales</h5>
                  </div>

                  <h6 class="ml-4 mb-0 pt-4  font-weight-bold"><i class="fas fa-arrow-up blue-text mr-3"
                      aria-hidden="true"></i> $ 2000</h6>

                  <div class="card-body">
                    <div class="progress">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-small grey-text mt-3 mb-0">Better than last week (25%)</p>
                  </div>

                </div>
                <!-- Panel -->

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: data tables -->

    </div>

  </main>
  <!-- Main layout -->

  <!-- Footer -->
  <footer class="page-footer pt-0 mt-5 rgba-stylish-light">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2020 Copyright: <a href="https://hanaplovelife.iampseudox.uk/" target="_blank"> Hanap LoveLife </a>
      </div>
    </div>

  </footer>
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
