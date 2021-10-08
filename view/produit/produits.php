<?php session_start();  ?>
<!DOCTYPE html>
<html lang=en>
<head>
    <!-- Theme Made By www.w3schools.com -->
    <title>ENIS SHOPPING</title>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css>
    <link href=https://fonts.googleapis.com/css?family=Montserrat rel=stylesheet type=text/css>
    <link href=https://fonts.googleapis.com/css?family=Lato rel=stylesheet type=text/css>
    <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js></script>
    <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js></script>
    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }
        .jumbotron {
            background-color: #f4511e;
            color: #fff;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }
        .container-fluid {
            padding: 60px 50px;
        }
        .bg-grey {
            background-color: #f6f6f6;
        }
        .logo-small {
            color: #f4511e;
            font-size: 50px;
        }
        .logo {
            color: #f4511e;
            font-size: 200px;
        }
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }
        .carousel-control.right, .carousel-control.left {
            background-image: none;
            color: #f4511e;
        }
        .carousel-indicators li {
            border-color: #f4511e;
        }
        .carousel-indicators li.active {
            background-color: #f4511e;
        }
        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }
        .item span {
            font-style: normal;
        }
        .panel {
            border: 1px solid #f4511e;
            border-radius:0 !important;
            transition: box-shadow 0.5s;
        }
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0,0,0, .2);
        }
        .panel-footer .btn:hover {
            border: 1px solid #f4511e;
            background-color: #fff !important;
            color: #f4511e;
        }
        .panel-heading {
            color: #fff !important;
            background-color: #f4511e !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        .panel-footer {
            background-color: white !important;
        }
        .panel-footer h3 {
            font-size: 32px;
        }
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
        .panel-footer .btn {
            margin: 15px 0;
            background-color: #f4511e;
            color: #fff;
        }
        .navbar {
            margin-bottom: 0;
            background-color: #f4511e;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #fff !important;
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #f4511e !important;
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f4511e;
        }
        .slideanim {visibility:hidden;}
        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }
        .full { transition: all .2s ease-in-out; }
        .full:hover { transform: scale(1.1); }
        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }
		
		
		
		
		.content-main {
  height: 200vh;
}

.fh5co-bg {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
}

.fh5co-bg {
  background-size: cover;
  background-position: center center;
  position: relative;
  width: 100%;
  float: left;
}
.fh5co-bg .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}

.fh5co-bg-section {
  background: rgba(0, 0, 0, 0.05);
}

#fh5co-footer {
  padding: 7em 0;
  clear: both;
}
@media screen and (max-width: 768px) {
  #fh5co-footer {
    padding: 3em 0;
  }
}

#fh5co-footer {
  position: relative;
}
#fh5co-footer .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.9);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-footer h3 {
  margin-bottom: 15px;
  font-weight: bold;
  font-size: 15px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.8);
}
#fh5co-footer .fh5co-footer-links {
  padding: 0;
  margin: 0;
}
#fh5co-footer .fh5co-footer-links li {
  padding: 0;
  margin: 0;
  list-style: none;
}
#fh5co-footer .fh5co-footer-links li a {
  color: rgba(255, 255, 255, 0.5);
  text-decoration: none;
}
#fh5co-footer .fh5co-footer-links li a:hover {
  text-decoration: underline;
}
#fh5co-footer .fh5co-widget {
  margin-bottom: 30px;
}
@media screen and (max-width: 768px) {
  #fh5co-footer .fh5co-widget {
    text-align: left;
  }
}
#fh5co-footer .fh5co-widget h3 {
  margin-bottom: 15px;
  font-weight: bold;
  font-size: 15px;
  letter-spacing: 2px;
  text-transform: uppercase;
}
#fh5co-footer .copyright .block {
  display: block;
}


.btn-primary {
  background: #F85A16;
  color: #fff;
  border: 2px solid #F85A16;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
  background: #f96c2f !important;
  border-color: #f96c2f !important;
}
.btn-primary.btn-outline {
  background: transparent;
  color: #F85A16;
  border: 1px solid #F85A16;
}
.btn-primary.btn-outline:hover, .btn-primary.btn-outline:focus, .btn-primary.btn-outline:active {
  background: #F85A16;
  color: #fff;
}

    </style>
</head>
<body id=myPage data-spy=scroll data-target=.navbar data-offset=60>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class=container>
        <div class=navbar-header>
            <button type=button class=navbar-toggle data-toggle=collapse data-target=#myNavbar>
                <span class=icon-bar></span>
                <span class=icon-bar></span>
                <span class=icon-bar></span>
            </button>
            <a class=navbar-brand href=https://translate.googleusercontent.com/translate_c?depth=4&hl=fr&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/bootstrap/tryit.asp%3Ffilename%3Dtrybs_theme_company_complete_animation&usg=ALkJrhgiGWNqJ2EiOjzSOc3KFspEaRaC6w#myPage>Bonjour <?php echo $_SESSION['pseudo'];?></a>
        </div>
        <div class="collapse navbar-collapse" id=myNavbar>
            <ul class="nav navbar-nav navbar-right">
                <li><a href=https://translate.googleusercontent.com/translate_c?depth=4&hl=fr&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/bootstrap/tryit.asp%3Ffilename%3Dtrybs_theme_company_complete_animation&usg=ALkJrhgiGWNqJ2EiOjzSOc3KFspEaRaC6w#services>SERVICES</a></li>
                <li><a href=https://translate.googleusercontent.com/translate_c?depth=4&hl=fr&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/bootstrap/tryit.asp%3Ffilename%3Dtrybs_theme_company_complete_animation&usg=ALkJrhgiGWNqJ2EiOjzSOc3KFspEaRaC6w#portfolio>PROMOTION</a></li>
                <li><a href=https://translate.googleusercontent.com/translate_c?depth=4&hl=fr&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/bootstrap/tryit.asp%3Ffilename%3Dtrybs_theme_company_complete_animation&usg=ALkJrhgiGWNqJ2EiOjzSOc3KFspEaRaC6w#pricing>TEAM</a></li>
                <li><a href=https://translate.googleusercontent.com/translate_c?depth=4&hl=fr&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/bootstrap/tryit.asp%3Ffilename%3Dtrybs_theme_company_complete_animation&usg=ALkJrhgiGWNqJ2EiOjzSOc3KFspEaRaC6w#contact>CONTACT</a></li>
                <li><a href="../../LogOut.php">SIGN UP</a></li>

            </ul>
        </div>
    </div>
</nav>

<div id=myCarousel class="carousel slide" data-ride=carousel>
    <!-- Indicators -->
    <ol class=carousel-indicators>
        <li data-target=#myCarousel data-slide-to=0 class=active></li>
        <li data-target=#myCarousel data-slide-to=1></li>
        <li data-target=#myCarousel data-slide-to=2></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=carousel-inner role=listbox>
        <div class="item active">
            <img src=../../img/img1.jpg alt="NEW" width=1400 height=400>
            <div class=carousel-caption>
                <h3>ENIS-ONLINE POUR VOS BESOINS</h3>
                <p></p>
            </div>
        </div>

        <div class=item>
            <img src=../../img/2.jpg alt="NEW" width=1400 height=400>
            <div class=carousel-caption>
                <h3>ENIS-ONLINE POUR VOS BESOINS</h3>
                <p></p>
            </div>
        </div>

        <div class=item>
            <img src=../../img/3.jpg alt="NEW" width=1400 height=400>
            <div class=carousel-caption>
                <h3>ENIS-ONLINE POUR VOS BESOINS</h3>
                <p></p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href=https://translate.googleusercontent.com/translate_c?depth=4&hl=fr&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/bootstrap/tryit.asp%3Ffilename%3Dtrybs_theme_band_complete%26stacked%3Dh&usg=ALkJrhj_QUz8viz51YkuF-nS6MGaD0KnSw#myCarousel role=button data-slide=prev>
        <span class="glyphicon glyphicon-chevron-left" aria-hidden=true></span>
        <span class=sr-only>Previous</span>
    </a>
    <a class="right carousel-control" href=https://translate.googleusercontent.com/translate_c?depth=4&hl=fr&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/bootstrap/tryit.asp%3Ffilename%3Dtrybs_theme_band_complete%26stacked%3Dh&usg=ALkJrhj_QUz8viz51YkuF-nS6MGaD0KnSw#myCarousel role=button data-slide=next>
        <span class="glyphicon glyphicon-chevron-right" aria-hidden=true></span>
        <span class=sr-only>Next</span>
    </a>
</div>


<div class="container-fluid bg-grey">
    <div class=row>
        <div class=col-sm-4>
            <span class="glyphicon glyphicon-globe logo slideanim"></span>
        </div>
        <div class=col-sm-8>
            <h2>Our Values</h2><br>
            <h4><strong>MISSION:</strong> We harness the power of technology to provide consumers with innovative, convenient and affordable online products and services</h4>
        </div>
    </div>
</div>

<!-- Container (Services Section) -->
<div id=services class="container">
    <h2 class="text-center">SERVICES</h2>
    <h4 class="text-center">What we offer</h4>
    <br>
    <div class="row slideanim">
        <div class=col-md-3>
            <!--<span class="glyphicon glyphicon-off logo-small"></span>-->
			<a href="pcpo.php"><img src=../../img/Ordi_portable.jpg alt="NEW" class="full" width=200 height=200></a>
            <h4>Ordinateurs portables</h4>
            <p>Discover our Products..</p>
        </div>
        <div class=col-md-3>
            <!--   <span class="glyphicon glyphicon-heart logo-small"></span>-->
            <a href="bureautique.php"><img src=../../img/Ordi_bureau.jpg alt="NEW" class="full" width=200 height=200></a>
            <h4>Ordinateurs de bureau</h4>
            <p>Discover our Products..</p>
        </div>
        <div class=col-md-3>
            <!--  <span class="glyphicon glyphicon-lock logo-small"></span> -->
            <a href="tablette.php"><img src=../../img/tablette.jpeg alt="NEW" class="full" width=200 height=200></a>
            <h4>Tablettes tactiles</h4>
            <p>Discover our Products..</p>
        </div>
        <div class=col-md-3>
            <!--<span class="glyphicon glyphicon-off logo-small"></span>-->
            <a href="peripherique.php"><img src=../../img/casque.jpg alt="NEW" class="full" width=200 height=200></a>
            <h4>Periphériques et Accessoires</h4>
            <p>Discover our Products..</p>
        </div>
    </div>
    <br><br>
    <div class="row slideanim">
        <div class=col-sm-3>
            <!--  <span class="glyphicon glyphicon-leaf logo-small"></span> -->
            <a href="smartphone.php"><img src=../../img/nova3i.jpg alt="NEW" class="full" width=200 height=200></a>
            <h4>Smartephones</h4>
            <p>Discover our Products..</p>
        </div>
        <div class=col-sm-3>
            <!--  <span class="glyphicon glyphicon-certificate logo-small"></span> -->
            <a href="accessoire.php"><img src=../../img/kit.jpg alt="NEW" width=200 class="full" height=200></a>
            <h4>Accessoires Téléphoniques</h4>
            <p>Discover our Products..</p>
        </div>
        <div class=col-sm-3>
            <!--  <span class="glyphicon glyphicon-certificate logo-small"></span> -->
            <a href="imprimantes.php"><img src=../../img/imprimante.jpg alt="NEW" width=200 class="full" height=200></a>
            <h4>Imprimantes</h4>
            <p>Discover our Products..</p>
        </div>
        <div class=col-sm-3>
            <!--  <span class="glyphicon glyphicon-wrench logo-small"></span> -->
            <a href="scanner.php"><img src=../../img/scanner.jpg alt="NEW" width=200 class="full" height=200></a>
            <h4 style=color:#303030;>Scanner</h4>
            <p>Discover our Products..</p>
        </div>
    </div>
</div>

<!-- Container (produit en promotion Section) -->
<div id=portfolio class="container-fluid text-center bg-grey">
    <h2>discount</h2><br>
    <h4>Products with promotion</h4>
    <div class="row text-center slideanim">
        <div class=col-sm-4>
            <div class=thumbnail>
                <img src=../../img/port3.jpg alt=Paris width=400 height=300>
                <p><strong>Sfax</strong></p>
                <p>Promotion, Refroidisseur pour PC</p>
            </div>
        </div>
        <div class=col-sm-4>
            <div class=thumbnail>
                <img src=../../img/port2.jpg alt="New York" width=400 height=200>
                <p><strong>Sfax</strong></p>
                <p>Offre Exceptionnelle , Asus PC</p>
            </div>
        </div>
        <div class=col-sm-4>
            <div class=thumbnail>
                <img src=../../img/port1.jpg alt="San Francisco" width=400 height=300>
                <p><strong>Sfax</strong></p>
                <p>Harry UP, Pack Promotion</p>
            </div>
        </div>
    </div><br>

    <h2>What Our Clients Said</h2>
    <div id=myCarousel class="carousel slide text-center" data-ride=carousel>
        <!-- Indicators -->
        <ol class=carousel-indicators>
            <li data-target=#myCarousel data-slide-to=0 class=active></li>
            <li data-target=#myCarousel data-slide-to=1></li>
            <li data-target=#myCarousel data-slide-to=2></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=carousel-inner role=listbox>
            <div class="item active">
                <h4>"Cette entreprise est la meilleure. Je suis tellement content du résultat!"<br><span>Mohamed, Monastir</span></h4>
            </div>
            <div class=item>
                <h4>"Un mot ... WOW !! "<br><span>Ahmed, Sfax</span></h4>
            </div>
            <div class=item>
                <h4>"Pourrais-je ... ÊTRE plus content de cette entreprise?"<br><span>Ines, Tunis</span></h4>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href=https://translate.googleusercontent.com/translate_c?depth=4&hl=fr&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/bootstrap/tryit.asp%3Ffilename%3Dtrybs_theme_company_complete_animation&usg=ALkJrhgiGWNqJ2EiOjzSOc3KFspEaRaC6w#myCarousel role=button data-slide=prev>
            <span class="glyphicon glyphicon-chevron-left" aria-hidden=true></span>
            <span class=sr-only>Previous</span>
        </a>
        <a class="right carousel-control" href=https://translate.googleusercontent.com/translate_c?depth=4&hl=fr&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/bootstrap/tryit.asp%3Ffilename%3Dtrybs_theme_company_complete_animation&usg=ALkJrhgiGWNqJ2EiOjzSOc3KFspEaRaC6w#myCarousel role=button data-slide=next>
            <span class="glyphicon glyphicon-chevron-right" aria-hidden=true></span>
            <span class=sr-only>Next</span>
        </a>
    </div>
</div>

<!-- Container (Pricing Section) -->
<div id=pricing class=container-fluid>
    <div class=text-center>
        <h2>Our Team</h2>
        <h4>We will be available 24/24 to make your job easier.</h4>
    </div>
    <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class=panel-heading>
                    <h3>Souhir Naassaoui</h3>
                </div>
                <div class=panel-body>
                    <img src="../client/images/me.jpg" width="200px">
                </div>
                <div class=panel-footer>
                    <p style="color:blue;">souhir.naassaoui@enis.tn</p><br>
                    <button class="btn btn-lg"><a href="mailto:souhir.naassaoui@enis.tn">Contacter</a></button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class=panel-heading>
                    <h3>Najwa Chehaibi</h3>
                </div>
                <div class=panel-body>
                    <img src="../client/images/najwa.jpg" width="200px" height="230px">
                </div>
                <div class=panel-footer>
                   <p style="color:blue;">najwa.chhaybi@enis.tn</p><br>
                    <button class="btn btn-lg"><a href="mailto:souhir.naassaoui@enis.tn">Contacter</a></button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class=panel-heading>
                    <h3>Imen Chaoua</h3>
                </div>
                <div class=panel-body>
                    <img src="../client/images/imen.jpg" width="200px" height="230">
                </div>
                <div class=panel-footer>
                    <p style="color:blue;">imen.chaoua@enis.tn</p><br>
                    <button class="btn btn-lg"><a href="mailto:souhir.naassaoui@enis.tn">Contacter</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container (Contact Section) -->
<div id=contact class="container-fluid bg-grey">
    <h2 class=text-center>CONTACT US</h2>
    <div class=row>
        <div class=col-sm-5>
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Tunisia,Sfax</p>
            <p><span class="glyphicon glyphicon-phone"></span> +21655889966</p>
            <p><span class="glyphicon glyphicon-envelope"></span> enis@enis.com</p>
        </div>
        <h4 class="sent-notification"></h4>

		<form id="myForm">
			
        <div class="col-sm-7 slideanim">
            <div class=row>
                <div class="col-sm-6 form-group">
                    <input class=form-control id=name name=name placeholder=Name type=text required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class=form-control id=email name=email placeholder=Email type=email required>
                </div>
            </div>
           
			<input id="subject" type="text" placeholder=" Enter Subject"> 
			<br><br>

			<p>Message</p>
			<textarea class="form-control" id="body" rows="5" placeholder="Type Message"></textarea>
			<br><br>
           
            <div class=row>
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" onclick="sendEmail()" value="Send An Email">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
<!-- Image of location/map -->
<div>

</div>
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Dy7e6MNHCI0Ekxajz7Nsg6nN_K5_Otvo" width="100%" height="480"></iframe>


<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>



<footer id="fh5co-footer" class="fh5co-bg" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>A Little About ENIS Shopping.</h3>
					<p> We harness the power of technology to provide consumers with innovative, convenient and affordable online products and services.</p>
					<p><a class="btn" style="background-color:#f4511e;color:white" href="../client/SaisieClient.php">Become A Member</a></p>
				</div>
				<div class="col-md-8">
					<h3>Categories</h3>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							
							<li><a href="pcpo.php">Ordinateurs portables</a></li>
							<li><a href="bureautique.php">Ordinateurs de bureau</a></li>
							<li><a href="tablette.php">Tablettes tactiles</a></li>
							<li><a href="peripherique.php">Periphériques et Accessoires</a></li>
		
						</ul>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a href="smartphone.php">Smartphones</a></li>
							<li><a href="accessoire.php">Accessoires Téléphoniques</a></li>
							<li><a href="imprimantes.php">Imprimantes</a></li>
							<li><a href="scanner.php">Scanner</a></li>
						
						</ul>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6">
					<h3>Contact</h3>
						<ul class="fh5co-footer-links">
						<li><span class="glyphicon glyphicon-map-marker"></span> Tunisia,Sfax</li>
							<li><span class="glyphicon glyphicon-phone"></span> +21655889966</li>
							<li><span class="glyphicon glyphicon-envelope"></span> enis@enis.com</li>
							
						</ul>
					</div>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2021 | All Rights Reserved.</small> 
						<small class="block">ENIS-Shopping</small>
					</p>
				</div>
			</div>

		</div>
	</footer>

</body>

</html>