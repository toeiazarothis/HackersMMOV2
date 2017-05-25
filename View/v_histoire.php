<!DOCTYPE html>
<html lang="fr">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ToeiAzarothis">
    <link rel="author" href="humans.txt"/>

    <title>Histoire de la F.H.C</title>

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
                <a href="c_index.php" onclick=$("#menu-close").click();>Accueil</a>
            </li>
            <li>
                <a href="#timeline" onclick=$("#menu-close").click();>Notre Histoire</a>
            </li>
            <li>
                <a href="c_alliance.php" onclick=$("#menu-close").click();>Nos alliances</a>
            </li>
            <li>
                <a href="c_tutoriel.php" onclick=$("#menu-close").click();>Les tutoriels</a>
            </li>
            <hr class="small">
            <li>
                <a href="c_tatsumaki.php" onclick=$("#menu-close").click();>Commandes du Bot</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>French Hook Corp</h1>
            <h3>Hacking Cracking &amp; Decrypted</h3>
            <br>
            <a href="#timeline" class="btn btn-dark btn-lg">En savoir plus</a>
        </div>
    </header>

    <!-- Timeline Section -->
     <section id="timeline">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center">
                     <h2 class="section-heading">Histoire</h2>
                     <h3 class="section-subheading text-muted">Timeline.</h3>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-12">
                     <ul class="timeline">
                         <li>
                             <div class="timeline-image">
                                 <img class="img-circle img-responsive img-centered" src="../View/img/timeline/hackerz_logo.png" alt="">
                             </div>
                             <div class="timeline-panel">
                                 <div class="timeline-heading">
                                     <h4>2 Janvier 2017</h4>
                                     <h4 class="subheading">Lancement du jeu</h4>
                                 </div>
                                 <div class="timeline-body">
                                     <p class="text-muted">
                                       Le jeu est lancer debut janvier en phase alpha sur le playstore de google.
                                       Crée et regulierement mis a jour par un seul developpeur.
                                       !
                                     </p>
                                 </div>
                             </div>
                         </li>
                         <li class="timeline-inverted">
                             <div class="timeline-image">
                                 <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                             </div>
                             <div class="timeline-panel">
                                 <div class="timeline-heading">
                                     <h4>31 Mars 2017</h4>
                                     <h4 class="subheading">Lancement du site en Alpha</h4>
                                 </div>
                                 <div class="timeline-body">
                                     <p class="text-muted">
                                       Apres plusieur heures, jours, semaines. <br>
                                       Le site est enfin dispo en phase Alpha. La plupart des fonctionalité vont continuer à etre ameliorer certaine vont disparaitre et d'autres vont naitre afin d'aidez au maximum la communauté des joueur Franconphone !
                                     </p>
                                 </div>
                             </div>
                         </li>
                       <li class="timeline-inverted">
                           <div class="timeline-image">
                               <h4>Faites<br>partie de<br>l'histoire!</h4>
                           </div>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
    </section>


    <!-- Footer -->
    <?php include('../View/footer.php') ?>

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
