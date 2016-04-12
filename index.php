<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bandstart</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Bandstart</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#bands">Bands</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Kopje</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">                   
                        <h1 class="player-title"><span class="light">Alex Goot</span> - Pretty Eyes</h1>
                        <iframe id="ytplayer" frameborder="0" allowfullscreen="1" title="YouTube video player"  src="https://www.youtube.com/embed/bxpiK1RqRHY?autoplay=1"></iframe>
                    <p class=bio>Goot began recording music in 2004 at the age of 16 and since then has gained popularity from his profiles on various social network sites, as well as his own website, from which he distributes some of his music and provides news and regular updates.[1] His time is almost all spent in his home studio self-producing all audio and video for his releases, or touring the world.[1]</p>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="bands" class="container content-section text-center">
        <div class="row">
                <h2>Bands</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 band-thumb" style="background-image: url(img/bands/alexgoot1.jpg);" data-url="https://www.youtube.com/embed/bxpiK1RqRHY" data-bio="Goot began recording music in 2004 at the age of 16 and since then has gained popularity from his profiles on various social network sites, as well as his own website, from which he distributes some of his music and provides news and regular updates.[1] His time is almost all spent in his home studio self-producing all audio and video for his releases, or touring the world.[1]">
                            <h2 class="band-title">Alex Goot</h2>
                            <span class="glyphicon glyphicon-play-circle play-button" aria-hidden="true"></span>
                            <h4 class="song-title">PRETTY EYES</h4>
                        </div>
                        <div class="col-md-3 band-thumb" style="background-image: url(img/bands/megannicole.jpg);" data-url="https://www.youtube.com/embed/NXkOTMRztRw" data-bio="In 2009, Nicole uploaded her first video to YouTube, her cover of 'Use Somebody' by Kings of Leon. She followed with more covers on her YouTube channel, which includes songs by Bruno Mars, Katy Perry, Justin Bieber, Miley Cyrus, Taylor Swift, Selena Gomez, Lorde and other artists. She has several collaborations from fellow YouTube artists such as Tiffany Alvord, Alyssa Bernal, Madilyn Bailey, Tyler Ward, Dave Days, Conor Maynard and Lindsey Stirling.">
                            <h2 class="band-title">Megan Nicole</h2>
                            <span class="glyphicon glyphicon-play-circle play-button" aria-hidden="true"></span>
                            <h4 class="song-title">B-e-a-utiful</h4>
                            <a class="url" href="https://www.youtube.com/watch?v=NXkOTMRztRw"></a>
                        </div>
                        <div class="col-md-3 band-thumb" style="background-image: url(img/bands/samtsui.png);"  data-url="https://www.youtube.com/embed/zAC_teyfrHU" data-bio="Samuel 'Sam' Tsui (born May 2, 1989) is an American singer/songwriter & video producer. He rose to fame as an internet celebrity and is known for covering songs by popular artists like Adele, Britney Spears, Taylor Swift, Justin Timberlake and Bruno Mars, as well as some original songs, medleys, and mashups, along with his frequent collaborations with Kurt Hugo Schneider. As of August 31, 2015, Tsui had reached 2.1 million subscribers.">
                            <h2 class="band-title">Sam Tsui</h2>
                            <span class="glyphicon glyphicon-play-circle play-button" aria-hidden="true"></span>
                            <h4 class="song-title">Make It Up</h4>
                            <a class="url" href="https://www.youtube.com/watch?v=zAC_teyfrHU"></a>
                        </div>
                        <div class="col-md-3 band-thumb" style="background-image: url(img/bands/alexgoot.jpg);">HOI</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 band-thumb" style="background-image: url(img/bands/alexgoot.jpg);">HOI</div>
                        <div class="col-md-3 band-thumb" style="background-image: url(img/bands/alexgoot.jpg);">HOI</div>
                        <div class="col-md-3 band-thumb" style="background-image: url(img/bands/alexgoot.jpg);">HOI</div>
                        <div class="col-md-3 band-thumb" style="background-image: url(img/bands/alexgoot.jpg);">HOI</div>
                    </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Nog een kopje</h2>
                    <p><br /><br /><br /></p>
                    <a href="" class="btn btn-default btn-lg">Knopje</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact</h2>
                <p></p>
                <p><a href="">email@email.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Bandstart 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    
    

</body>

</html>
