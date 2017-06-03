<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Justin Warger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="icon" href="/images/profile.ico">
  </head>
  <body>
    <div class='container-fluid'>
      <!-- header -->
      <div class='jumbotron text-right text-info ' id="nameHead">
        <h1 class="display-4 pt-5">Justin Warger</h1>
        <p>Professional Developer</p>
      </div>
    </div>
    <!-- /header -->
    <!-- navbar -->
    <div class="container-fluid mb-5">
      <nav class="navbar navbar-toggleable-md navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
        <nav class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <a class="nav-link bg-info text-white rounded-left" href="#nameHead">Justin Warger</a>
          <a class="nav-link bg-info text-white" href="#gettoKnow">Get to Know</a>
          <a class="nav-link bg-info text-white" href="#services">What I Offer</a>
          <a class="nav-link bg-info text-white" href="#languages">Languages</a>
          <a class="nav-link bg-info text-white" href="#treehouse">Treehouse</a>
          <a class="nav-link bg-info text-white rounded-right" href="#contact">Contact</a>
        </nav>
    </div>
    <!-- navbar -->
    <!-- gettoknow -->
    <div class="container" id="gettoKnow">
      <div class="row">
        <div class="col-xl-4 col-lg-12 text-center mb-3 py-5">
          <img src="/images/profile.jpg" class="rounded-circle img-fluid" alt="Picture of me!">
        </div>
        <div class="text-center col-xl-8 col-lg-12 p-5">
          <h3 class="display-4 text-info" id="gettoknow">Get to know me</h3>
          <p>I love programming! I have spent a large chunk of my life building things with my hands. I was a plumber, even went to school for it! I have been a certified crane operator working in the oilfield. And spent some time in mechanics through high school. What I learned from all this is, it does not matter what you are using. Building things is a skill that is highly challenging and equally rewarding. When I was very young I used to see people "hacking" in the movies. I was so curious and excited by watching people break into "mainframes". I didn't realize what they were doing was in fact real. I grew up believing that it was impossible to explore and build things using a computer. I spent many childhood years opening up PC's and learning about what was inside them for hardware. I was fortunate to have people in my life who knew computers and were willing to show me what they knew. As I got older I started to realize what was actually inside the computer in terms of software and how it worked. That is when I discovered coding. That was the day my passion for computers truly developed. I have spent every day since then learning about everything code. It has been a childhood dream come true. </p>
        </div>
      </div>
    </div>
    <!-- /gettoknow -->
    <!-- services -->
    <div class="container-fluid" id="services">
      <div class="jumbotron mt-5">
        <h1 class="text-center mb-5">What I offer</h1>
        <div class="row text-center">
          <div class="col-lg-4">
            <h3 class="mb-3 text-info">Communication</h3>
            <p class="p-2">Communication is one of the biggest factors to operating at a high level. Being able to understand and relay messages in a clear and concise manner is a skill many lack. I take pride in my skill to communicate. It's constantly under development and love taking advatage of the many platforms out there used to communicate.</p>
          </div>
          <div class="col-lg-4">
            <h3 class="mb-3 text-info">Reliability</h3>
            <p class="p-2">Nothing is more comforting than a reliable person. Like a good car you know it's always going to be there for you. This is one quality I love shining a spotlight on. It really highlights the kind of personality I have. I believe being a reliable person is also being a respectful one. What comes around goes around. And respect goes a long way.</p>
          </div>
          <div class="col-lg-4">
            <h3 class="mb-3 text-info">Independence</h3>
            <p class="p-2">I am self motivated. I taught myself to code! I am constantly pushing myself to do better. There is no greater competition then the one between you and yourself. Independence is a great quality to have in a team setting. I am not afraid to voice my opinion and work as a group towards a common goal.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /services -->
    <!-- languages -->
    <div class="container text-center my-5" id="languages">
      <h1 class="m-5">Languages I know</h1>
      <div class="row mt-5">
        <div class="col-lg-3 mb-5">
          <img src="/images/html.png" class="img-fluid" id="html" alt="Language Logo">
        </div>
        <div class="col-lg-3 mb-5">
          <img src="/images/css.png" class="img-fluid" id="html" alt="Language Logo">
        </div>
        <div class="col-lg-3 mb-5">
          <img src="/images/javascript.png" class="img-fluid" id="html" alt="Language Logo">
        </div>
        <div class="col-lg-3 mb-5">
          <img src="/images/php.svg" class="img-fluid" id="html" alt="Language Logo">
        </div>
      </div>
    </div>
    <?php include "inc/python.php" ?>
    <!-- /languages -->
    <!-- treehouse -->
    <!-- link treehouse pic to site -->
    <div class="container-fluid mt-3" id="treehouse">
      <div class="jumbotron text-center">
        <a href="https://teamtreehouse.com/justinwarger" target="blank">
          <img src="/images/treehouse.png" class="img-fluid mt-5">
        </a>
        <h3 class="my-5">Check out my profile to get a feel for the courses I have taken and skills I have.</h3>
      </div>
    </div>
    <!-- /treehouse -->
    <!-- contact -->
    <?php include "inc/contact.php"; ?>
    <!-- /contact -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>