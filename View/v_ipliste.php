<!DOCTYPE html>
<html lang="fr">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ToeiAzarothis">
    <link rel="author" href="humans.txt"/>

    <title>Base de données de la F.H.C</title>

    <!-- Bootstrap Core CSS -->
    <link href="../View/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../View/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
                <a href="#top" onclick=$("#menu-close").click();>Accueil</a>
            </li>
            <li>
                <a href="#Discord" onclick=$("#menu-close").click();>Discord</a>
            </li>
            <li>
                <a href="#Histoire" onclick=$("#menu-close").click();>Notre Histoire</a>
            </li>
            <li>
                <a href="#Alliances" onclick=$("#menu-close").click();>Nos alliances</a>
            </li>
            <li>
                <a href="tutoriel.php" onclick=$("#menu-close").click();>Tutoriels</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>French Hook Corp</h1>
            <h3>Hacking Cracking &amp; Decrypted</h3>
            <br>
            <a href="#listedesip" class="btn btn-dark btn-lg">En savoir plus</a>
        </div>
    </header>

    <!--  -->
    <section id="listedesip">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>Liste des IP</h2>
          </div>
          <table class="table table-hover text-center">
            <thead>
              <tr>
                <th class="text-center">Pseudo</th>
                <th class="text-center">IP</th>
                <th class="text-center">Réputation</th>
                <th class="text-center">Rang particulier</th>
                <th class="text-center">Information(s) bonus</th>
                <th class="text-center">Nom de Guilde</th>
                <th class="text-center">Blason Guilde</th>
              </tr>
            </thead>
            <?php echo listeJoueurs()?>
          </table>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <?php include('footer.php') ?>

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
