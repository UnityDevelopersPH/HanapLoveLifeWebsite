  <?php
   include('function/connection.php');
   $result = $connect->query("SELECT * FROM `announce`");
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


    </nav>
    <!-- Navbar -->

  </header>
  <!-- Main Navigation -->

  <!-- Main layout -->

	<main>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
             <h3 class=""> Announcment </h3>
              <hr>
            <div class="md-form">
            <form action="function/function.php" method="post">
              <textarea name="inputAnnounce" type="text" id="form7" class="md-textarea md-textarea-auto form-control" mdbInput style="resize: none;"></textarea>
              <label for="form7">Type your Announcment!</label>
              <Button type="submit" class="btn btn-danger col-md-12" name="announcement" value="submit">Insert Announcement</Button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<br/>
  <h3 class="display-5"> Latest Announcements </h3>
  <br/>
    <div class="row">
        <div class="col-md-12" style="margin-top:10;">

            <?php
              while($row = $result->fetch_assoc())
              {
                echo "<div class='card' style='margin-top:10px;'>
                <div class='card-body'>
              <p class='card-text'>".$row['announcement']."</p>
              <p class='card-text' style='color:green;'>".$row['date']."</p>
              </div>
            </div>";
              }

            ?>
    </div>

      </div>
	</main>

  <!-- Main layout -->

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
