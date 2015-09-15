<?php
  session_start();

  $user = "root";
  $pass = "l;ylfu=k;F]d";
  $host = "127.0.0.1";
  $db = "cdb_113808cafa";

  if(!$connect = mysql_connect($host,$user,$pass))
  {
    echo "no connect server";
    exit;
  }
  mysql_query("SET character_set_results='utf8'");
  mysql_query("SET character_set_client='utf8'");
  mysql_query("SET character_set_connection='utf8'");
  mysql_query("SET collation_connection=utf8_general_ci");
  mysql_query("collation_connection = utf8_general_ci");
  mysql_query("collation_database = utf8_general_ci");
  mysql_query("collation_server = utf8_general_ci");
  mysql_query("SET NAMES 'utf8'");

  var_dump( $_COOKIE );
  var_dump( $_SESSION );

  if ( $_SESSION["phone"] && $_COOKIE["referral_code"] )
  {
    $sql = "insert into referral_code set r_code='".$_COOKIE["referral_code"]."', r_tel='".$_SESSION["phone"]."', r_date=now()";
    $resultDB = mysql_db_query($db, $sql);
    if ( $resultDB )
    {
      setcookie("referral_code", "", time()-3600);
      $_SESSION["phone"] = 0;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/la_global.css">
  <link rel="stylesheet" href="css/la_input.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/la_payment_success.css">

</head>
<body>
  <!-- <div class="container-fluid global-header-wrap">
    <div class="row global-header">
      <a href="index.html">
        <img class="la_global-header-logo" src="img/la_logo_script_salmon-on-transparent.png" alt="local alike logo" />
      </a>
    </div>
  </div> -->

  <?php include("module/module_nav.php"); ?>

  <div class="container">
    <div class="row padding-top-30 padding-bottom-20">
      <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
        <div class="payment-success-info" style="background-image:url('img/graphic_carrot.png');">
          <img src="img/graphic_hawaii_shirt.png" class="hawaii-shirt" width="190" />
          <img src="img/graphic_luggage.png" class="luggage" width="210" />
          <div class="content">
            <h2>
                Booking Confirmed
            </h2>
            <p>Your payment card will be charged when the booking request is confirmed by your local guide within 24 hours.</p>
            <p>3D2N Immersive Hill Tribe Experience</p>
            <a class="btn btn-ghost-lg">Resend to <span>noon@localalike.com</span></a>
            <p class="text-center"><small></small></p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
        <div class="payment-success-share">
          <img src="img/graphic_hearts.png" width="200" />
          <div class="col-lg-10 col-lg-offset-1 content">
            <h3>Invite friends, earn travel credits!</h3>
            <p>You can earn discounts or store credits by inviting your friends and family to join Local Alike.</p>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 padding-top-20 form-group required">
              <label>Share this personalized link to your friends</label>
              <input id="referral-link" class="center-block form-control" size="" type="text" value="http://lo.cl/lamlalam" data-toggle="tooltip" data-placement="bottom" data-original-title="Select, copy, and paste to share!">
              </input>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-sm-offset-2 text-center">
        <a href="dashboard/index.html">
          <div class="payment-success-forwarder" id="dashboard">
            <img src="img/graphic_sign_left.png" id="left" width="200" />
            <div class="content">
              <h3>Go to your dashboard</h3>
              <p>Edit names, manage trips, and more</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4">
        <a href="index.html">
          <div class="payment-success-forwarder" id="impact">
            <img src="img/graphic_sign_right.png" id="right" width="200" />
            <div class="content">
              <h3>Read about our social impact</h3>
              <p>Every traveler is a change maker</p>
            </div>
          </div>
        </a>
      </div>
    </div>

  </div>
  <!-- footer -->
  <div class="container-fluid global-footer-wrap">
    <div class="row global-footer center-block text-left">
      <div class="col-xs-12 no-side-padding">
        <ul class="list-inline text-left">
          <li><img class="la-footer-logo" src="img/la_logo_script_salmon-on-transparent.png" alt="local alike logo" /></li>
          <li>About</li>
          <li>How this works</li>
          <li>Privacy Policy</li>
        </ul>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script>
    window.onload = function(){
      var text_input = document.getElementById ('referral-link');
      // text_input.focus ();
      text_input.select ();
    }
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
  </script>
  

</body>
</html>
