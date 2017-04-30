<!DOCTYPE html>
<html lang="fr">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ToeiAzarothis">
    <link rel="author" href="humans.txt"/>

    <title>Tutoriel de la F.H.C</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

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
                <a href="index.php" onclick=$("#menu-close").click();>Accueil</a>
            </li>
            <li>
                <a href="#TutorielAnnonce" onclick=$("#menu-close").click();>Les tutoriel</a>
            </li>
            <li>
                <a href="#Histoire" onclick=$("#menu-close").click();>Notre Histoire</a>
            </li>
            <li>
                <a href="#Alliances" onclick=$("#menu-close").click();>Nos alliances</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>French Hook Corporation</h1>
            <h3>Tutoriel Texte &amp; Video</h3>
            <br>
            <a href="#TutorielAnnonce" class="btn btn-dark btn-lg">Lire les tutoriel</a>
        </div>
    </header>

    <!-- Callout -->
    <section id="TutorielAnnonce">
      <aside class="callout">
          <div class="text-vertical-center">
              <h1 class="section-heading">Les differents tutoriels</h1>
              <h2 class="section-subheading">Pour des joueurs casu ou pour des joueurs plus experimente ,<br>des tutoriels seront disponible regulierement ici sous différents contenues.</h2>
              <a href="#Tutoriel" class="btn btn-dark btn-lg"> ... </a>
          </div>
      </aside>
    </section>

    <!-- Portfolio -->
    <section id="Tutoriel" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 text-center">
              <h2>Les Tutoriels Ecrit</h2>
              <hr class="small">
              <div class="row">
                <div class="col-md-6">
                    <div class="portfolio-item">
                        <a href="#Modal1" data-toggle="modal">
                            <img class="img-portfolio img-responsive" src="img/tutoriel/Virus_Delete_Ip_History.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-item">
                        <a href="#Modal2" data-toggle="modal">
                            <img class="img-portfolio img-responsive" src="img/tutoriel/Technique_Bounce.jpg">
                        </a>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="portfolio-item">
                        <a href="#Modal3" data-toggle="modal">
                            <img class="img-portfolio img-responsive" src="img/tutoriel/Hack_Guilde.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-item">
                        <a href="#Modal4" data-toggle="modal">
                        </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#Modal1">
                                    <img class="img-portfolio img-responsive" src="img/tutoriel/Virus_Delete_Ip_History.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <!-- <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside> -->
    <hr class="meduim">
    <!-- Fenetre Modal -->
    <?php include('modal.php') ?>
    <!-- Footer -->
    <?php include('footer.php') ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

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
