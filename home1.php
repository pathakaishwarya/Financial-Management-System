<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=devise-width, initial-scale=1">
<title>Financial Stat</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<link href="style.css" rel="stylesheet">
</head>
<body>

    <!--Navigation-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/6.jpg" width="30%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
            <a class="nav-link"target="_blank">Home</a>
        </li>

        <li class="nav-item">
             <a class="nav-link" href="market.php" target="_blank">Doctor</a>
         </li>

        <li class="nav-item">
             <a class="nav-link" href="MutualFunds.php" target="_blank">Mutual Funds</a>
         </li>

        <li class="nav-item">
            <a class="nav-link" href="about.php" target="_blank">About Us</a>
         </li>

        <li class="nav-item">
            <a class="nav-link" href="services.php" target="_blank">Services</a>
         </li>

    </ul>        
    </div>
</div>
</nav>

<!--image slider-->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
<li data-target="#slides" data-slide-to="0" class="active"></li>
<li data-target="#slides" data-slide-to="1"></li>
<li data-target="#slides" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="img/9.jpg">
<div class="carousel-caption">
<h1 class="display-2">Investopedia</h1>
<h3>complete Knowledege Of Finance.</h3>
<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
<button type="button" class="btn btn-primary btn-lg">GET STARTED</button>
</div>
</div>
<div class="carousel-item">
<img src="img/7.jpg">
</div>
<div class="carousel-item">
<img src="img/10.jpg">
</div>
</div>
</div>

<!--jumbotrun
<div class="container-fluid">
<div class="row jumbotron">
<div class="col-xs-12 co-sm-12 col-md-9 col-lg-9 col-xl-10">
<p class="lead">A web hosting service allows individuals and organizations to make their website accessible via the world wide web.</p>
</div>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">web hosting</button></a>
</div>
</div>
</div>
<div>-->

<!--welcome section-->
<div class="container-fluid padding">
<div class="row welcome text-center">
<div class="col-12">
<h1 class="display-4">Built with ease.</h1>
</div>
<hr>
<div class="col-12">
<p class="lead">Welcome</p>
</div>
</div>
</div>

<!--three column section

<div class="container-fluid padding">
<div class="row text-center padding">
<div class="col-xs-12 col-sm-6 col-md-4">
<img src="img/EC.png">

<br>
<br>
<br>
<br>
<br>

    <h3>equity capital.</h3>
    <p>Equity capital is funds paid into a business by investors in exchange for common or preferred stock. </p>
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<img src="img/DC.jpg">
<br>
<br>
    <h3> debt capital.</h3>
    <p>Debt capital is the capital that a business raises by taking out a loan.</p>
</div>

<div class="col-sm-12 col-md-4">
<img src="img/SC.png">
<br>
<br>
    <h3>specialty capital.</h3>
    <p>Specialty Capital is the nation's most trusted specialty financial services firm focused on complex bankruptcy transactions and restructurings in the world.</p>
</div>
</div>
<hr class="my-4">
</div>-->

<!--two column section-->
<div class="container-fluid padding">
<div class="row padding">
<div class="col-lg-6">
<h2>Abstract—</h2>
<p>With cloud storage services, users can remotely store
their data to the cloud and realize the data sharing with others.
Remote data integrity auditing is proposed to guarantee the
integrity of the data stored in the cloud. In some common cloud
storage systems such as the Electronic Health Records (EHRs)
system, the cloud file might contain some sensitive information.
The sensitive information should not be exposed to others when
the cloud file is shared. Encrypting the whole shared file can
realize the sensitive information hiding, but will make this shared
file unable to be used by others. How to realize data sharing with
sensitive information hiding in remote data integrity auditing
still has not been explored up to now. In order to address this
problem, we propose a remote data integrity auditing scheme
that realizes data sharing with sensitive information hiding in
this paper. In this scheme, a sanitizer is used to sanitize the
data blocks corresponding to the sensitive information of the
file and transforms these data blocks’ signatures into valid ones
for the sanitized file. These signatures are used to verify the
integrity of the sanitized file in the phase of integrity auditing.
As a result, our scheme makes the file stored in the cloud able to
be shared and used by others on the condition that the sensitive
information is hidden, while the remote data integrity auditing
is still able to be efficiently executed. Meanwhile, the proposed
scheme is based on identity-based cryptography, which simplifies
the complicated certificate management. The security analysis
and the performance evaluation show that the proposed scheme
is secure and efficient.</p>
<br>

</div>
<div class="col-lg-6">
<img src="img/8.jpg" class="img-fluid">
</div>
</div>
</div>
<hr class="my-4">

<!--Fixed background
<figure> 
<div class="fixed-wrap">
<div id="fixed">
</div>
</div>
</figure>-->


<!--Meet  the team
<div class="container-fluid padding">
<div class="row welcome text-center">
<div class="col-12">
<h1 class="display-4">Meet The Team</h1>
</div>
<hr>
</div>
</div>

<!--Cards
<div class="container padding">
<div class="row padding">

<div class="col-sm-3">
<div class="card">
<img class="card-img-top" src="img/p.jpg">
<div class="card-body">
<h4 class="card-title">Aishwarya</h4>
<p class="card-text">Aishwarya is a student Jump to the linkedin profile below:</p>
</a href="#"><button type="button" class="btn btn-outline-secondary">See Profile</button></a>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="card">
<img class="card-img-top" src="#">
<div class="card-body">
<h4 class="card-title">Shweta</h4>
<p class="card-text">Shweta is a student Jump to the linkedin profile below:</p>
</a href="#"><button type="button" class="btn btn-outline-secondary">See Profile</button></a>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="card">
<img class="card-img-top" src="#">
<div class="card-body">
<h4 class="card-title">Nutan</h4>
<p class="card-text">Nutan is a student Jump to the linkedin profile below:</p>
</a href="#"><button type="button" class="btn btn-outline-secondary">See Profile</button></a>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="card">
<img class="card-img-top" src="#">
<div class="card-body">
<h4 class="card-title">Pallavi</h4>
<p class="card-text">Pallavi is a student.Jump to the linkedin profile below:</p>
</a href="#"><button type="button" class="btn btn-outline-secondary">See Profile</button></a>
</div>
</div>
</div>
</div>
</div>
</div>-->

<!--Tow column section
<div class="container-fluid padding">
<div class="row padding">

<div class="col-lg-6">
<h2>Our Philosophy</h2>
<p>the columns will automatically stack on top of each other when the screen is less than 576px wide.</p>
<br>
</div>
<div class="col-lg-6">
<img src="img/3.jpg" class="img-fluid">
</div>
</div>
<hr class="my-4">
</div>-->

<!--connect-->
<div class="container-fluid padding">
<div class="row text-center padding">
<div class="col-12">
<h2>Connect with Us</h2>
</div>
<div class="col-12 social padding">
<a href="https://www.facebook.com/aishwarya.pathak.980"><img src="img/fb.png" width="2%"></a>
<a href="https://www.instagram.com/p_ai5h/"><img src="img/insta.png" width="2%"></a>
<a href="https://twitter.com/aishpk02"><img src="img/twitter.png" width="2%"></a>
<a href="https://www.youtube.com/channel/UCqLEOJWsBwN_pK2pnXkvgpA?view_as=subscriber"><img src="img/yotube_logo.png" width="2%"></a>
</div>
</div>
</div>

<!--Footer-->
<footer>
<div class="container-fluid padding">
<div class="row text-center">
<div class="col-md-4">
<img src="img/6.jpg" width="10%">
<hr class="light">
<p>Email</p>
<p>Address</p>
<p>City</p>
</div>

<div class="col-md-4">
<hr class="light">
<h5>Our Hours</h5>
<hr class="light">
<p>Monday: 9am-5pm</p>
<p>Sturday: 9am-5pm</p>
<p>Sunday: 9am-5pm</p>
</div>

<div class="col-md-4">
<hr class="light">
<h5>Service Area</h5>
<hr class="light">
<p>City, State, 00000</p>
<p>City, State, 00000</p>
<p>City, State, 00000</p>
<p>City, State, 00000</p>
</div>

<div class="col-12">
<hr class="light">
<h5>&copy; Investopedia.com All rights reserved. Reproduction of news articles, photos, videos or any other content in whole or in part in any form or medium without express writtern permission of Investopedia.com is prohibited.<h5>
</div>
</div>
</div>
</footer>

</body>
</html>