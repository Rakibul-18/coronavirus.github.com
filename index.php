<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coronavirus</title>
    <?php include 'link/links.php';?>
    <?php include 'css/style.php';?>
   <!--- <?php include 'corona.php';?>---->
</head>
<body onload="fatch()">

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!--------------corona navigation---------------->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#covidupdateid">covid-19</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomsid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventionid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="img/home0.png" width="300" height="300">
            </div>
        </div>
        <div class="col-lg-7 col-md-7 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
             <h1>Let's stay & Fight Together Against Cor<span class="corona_rot"><img src="img/rotete.png" width="100" height="100"></span>na Virus</h1>
            </div>
        </div>
    </div>
</div>

<!-----------corona home----------->

<section class="corona_update container-fluid"  id="covidupdateid">
    <div class="md-3">
        <h3 class="text-uppercase text-center">covid-19 updates</h3>
    </div>

    <div class="d-flex justify-content-around align-items-center">
        <div>
            <h1 class="count">1,524,797</h1>
            <p>Passenders screened at airport</p>
        </div>
        <div>
            <h1 class="count">1,724</h1>
            <p>Active COVID-19 cases*</p>
        </div>
        <div>
            <h1 class="count">824</h1>
            <p>Cured/discharged cases</p>
        </div>
        <div>
            <h1 class="count">18</h1>
            <p>Death cases</p>
        </div>
    </div>
  
</section>

<!--------about section--------->

<div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
    <div class="section-header text-center md-5 mt-4">
        <h1>About COVID-19</h1>
    </div>
    
    <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
            <img src="img/about.jpg" class="img-fluidimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2>What is COVID-19 (corona-virus)</h2>
            <p>COVID-19 is the infectious disease caused by the most resently discovered coronavirus. This new virus and diseose were unknown before the outbreak begon in Wuhan,China in December 2019.</p>
            <p>Coronaviruses are a large family of viruses which may cause illness in animals or humans. In humans, several coronaviruses are known to cases respiretory infections ranging from the common cold to more severe diseases such as Middle East Respiratory syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19. </p>
        </div>
    </div>
</div>

<!-----------coronavirus symptoms---------->

<div class="container-fluid pt-5 pb-5" id="symptomsid">
    <div class="section-header text-center md-5 mt-4">
        <h1>CoronaVirus Symptoms</h1>
    </div>
    <div class="container">
      <div class="row w-100 h-100">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="img/PNG1.png" class="img-fluid" width="120" height="120">
          <figcaption>CoronaVirus Count</figcaption>
       </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="img/sy2.png" class="img-fluid" width="120" height="120">
          <figcaption>Hand Wash</figcaption>
       </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="img/sy1.png" class="img-fluid" width="120" height="120">
          <figcaption>Stay Safe</figcaption>
       </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="img/sy8.jpeg" class="img-fluid" width="120" height="120">
          <figcaption>Stay Home</figcaption>
       </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="img/sy7.png" class="img-fluid" width="120" height="120">
          <figcaption>Hand Wash</figcaption>
       </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="img/sy5.webp" class="img-fluid" width="120" height="120">
          <figcaption>Stay Safe</figcaption>
       </figure>
        </div>
      </div>
    </div>
</div>

<!-----------prevention against coronavirus---------->

<div class="container-fluid sub-section pt-5 pb-5" id="preventionid">
    <div class="section-header text-center md-5 mt-4">
        <h1>6 Steps Prevention Against Coronavirus</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="img/sy2.png" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12-12">
            <p>Wash your hands regularly for 20 seconds, with soap and or alcohol-based hand rub</p>
          </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="img/sy1.png" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12-12">
            <p>Cover your nose and mouth with a disposable tissue or fiexed elbow when you cough or sneeze.</p>
          </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="img/1meter.png" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12-12">
            <p>Avoid close contact (1 meter or feet) with pepole who ore unwell.</p>
          </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="img/shome.png" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12-12">
            <p>Stay home and self-isolate from others in the houshold if you feel unwell.</p>
          </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="img/tv.png" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12-12">
            <p>Stay informed by watching news & follow the recommended practices.</p>
          </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="img/doctor.jpeg" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12-12">
            <p>If you have fever, cough and difficulty brecthing, seek medical care early.</p>
          </div>
        </div>
        </div>
      </div>
    </div>
</div>


<!-----------contact forms---------->

<div class="container-fluid pt-5 pb-5" id="contactid">
    <div class="section-header text-center md-5 mt-4">
        <h1>Contact US</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
        <form action="" method="POST">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required autocomplete="off">
          </div>
          <div class="form-group">
            <label>Mobile</label>
            <input type="number" class="form-control" name="mobile" placeholder="Enter Your Number" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Select Symptoms</label><br>
            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
            <input type="checkbox" class="custom-control-input" id="customchecbox1" name="coronasym" value="cold">
            <label class="custom-control-label" for="customchecbox1">Cold</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
            <input type="checkbox" class="custom-control-input" id="customchecbox2" name="coronasym" value="fever">
            <label class="custom-control-label" for="customchecbox2">Fever</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
            <input type="checkbox" class="custom-control-input" id="customchecbox3" name="coronasym" value="breath">
            <label class="custom-control-label" for="customchecbox3">difficulty in breath</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
            <input type="checkbox" class="custom-control-input" id="customchecbox4" name="coronasym" value="feeling">
            <label class="custom-control-label" for="customchecbox4">Feeling Weak</label>
          </div>
          </div>

          <div class="form-group">
            <label>Comment</label>
            <textarea class="form-control" name="messages" id="exampleFormControlTextarea1" rows="3" placeholder="Messages"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </div>
      </div>
    </div>
</div>
<!--------------top cursor arrow------------>

<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<!--------------footer------------->
<footer class="">
  <div class="footer_style text-white text-center container-fluid">
  <p class="copyright">Cerate with <i class="fa fa-heart rad-text"></i> by <a href="#"><i> Md.Rakibul Islam</i></a></p>
  </div>
</footer>



<!-----------top arrow script------------>
<script type="text/javascript">


mybutton = document.getElementById("myBtn"); //when the user scrolls down 100px from the of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction(){
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
    mybutton.style.display = "block";
  }
  else {
    mybutton.style.display = "none";
  }
}
// when the user clicks on the button, scroll to the top of the document
function topFunction(){
  document.body.scrollTop = 0; //For Safari
  document.documentElement.scrollTop = 0; //For Chrome, Firefox, IE and Opera 
}



function fatch(){
  $.get()
}


</script>





</body>
</html>


<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $coronasym = $_POST['coronasym'];
  $messages = $_POST['messages'];


  $chk = "";

  foreach($coronasym as $chk1){
    $chk .= $chk1."," ;
  }
  $insertquery = " insert into coronavirus(username, email, mobile, coronasym, messages) values('$username', '$email', '$mobile', '$coronasym', '$messages') ";
  $query = mysqli_query($con, $insertquery);

  if($query){
    ?>
    <script>
        alert("inserted successful");
        </script>
        <?php
}
else{
    ?>
    <script>
        alert("No inserted");
        </script>
        <?php
}
}

?>