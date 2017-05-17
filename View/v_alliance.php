<!DOCTYPE html>
<html lang="fr">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ToeiAzarothis">
    <link rel="author" href="humans.txt"/>

    <title>Alliances de la F.H.C</title>

    <!-- Bootstrap Core CSS -->
    <link href="../View/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../View/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you View the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>FrenchHookCorp</a>
            </li>
            <li>
                <a href="c_index.php" onclick=$("#menu-close").click();>Accueil</a>
            </li>
            <li>
                <a href="c_histoire.php" onclick=$("#menu-close").click();>Notre Histoire</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Nos alliances</a>
            </li>
            <li>
                <a href="c_tutoriel.php" onclick=$("#menu-close").click();>Tutoriel</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>French Hook Corporation</h1>
            <h3>Hacking Cracking &amp; Decrypted</h3>
            <br>
            <a href="#listeAlliance" class="btn btn-dark btn-lg">Decouvrir nos alliances</a>
        </div>
    </header>

    <!-- Tableau qui recaputille la liste des guilde allié -->
    <section id="listeAlliance">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>Liste des alliance</h2>
            <table class="table table-responsive text-center">
              <thead>
                <tr>
                  <th class="text-center">Nom de Guilde</th>
                  <th class="text-center">Blason Guilde</th>
                  <th class="text-center">Reputation</th>
                  <th class="text-center">Nombre de joueurs</th>
                </tr>
              </thead>
              <?php echo listeAlliances()?>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Liste des guilde allié en detail. -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>Liste des Guilde de l'alliance</h2>
          </div>
          <?php echo listeAlliances2() ?>
        </div>
      </div>
    </section>

    <!--  -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>Alliance d'honneur</h2>
          </div>
          <div class="col-lg-4 col-lg-offset-4 text-center">
            <h3>VAN</h3><hr class="small">
            <p>Nom de la Guilde : Nirvana<br>
              Reputation Minimal : 5910<br>
              Nombre de joueurs dans la guilde : 10 / 10
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <?php include ('footer.php') ?>

    <!-- jQuery -->
    <script src="../View/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../View/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
