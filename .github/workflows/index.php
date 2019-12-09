<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P2PP Energy Managment</title>
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="js/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

  <div class="container">

    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
         
          <a class="navbar-brand mr-0 mr-md-2" href="#">
             <img src="images/logo.png" alt="P2PP Solar Power managment">
          </a>
          
          <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
             <li class="nav-item"> 10th May 2019</li>
             <li class="nav-item"> Welcome Margaret</li>
             <li class="nav-item"><i class="fas fa-user-circle profile"title="Log in"></i></i></li>
          </ul>
    </header>
<!--END header-->

    <div class="container-fluid">
          <div class="row rSq">
            <div class="col-sm-4 col-md-3">
              <a href="appliances.html"><div class="square_blue spaceSq Dashboardicons"><img src="images/smarthome.png" class="myIcons" width="77" height="77" alt="House icon for selecting my appliances"><span class="squareTitle">My appliances</span></div></a>
              </div>
            <div class="col-sm-4 col-md-3">
              <a href="performance.html"><div class="square_orange spaceSq Dashboardicons" ><img src="images/chart.png" class="myIcons"  width="77" height="77" alt="graph icon cheking performance"><span class="squareTitleblack">My performance</span></div></a>
              </div>
            <div class="col-sm-4 col-md-3">
              <a href="scheduling.html"><div class="square_blue spaceSq Dashboardicons"><img src="images/calendar.png" class="myIcons" width="77" height="77" alt="calendar icon for setting up a schedule"><span class="squareTitle">Smart schedule</span></div></a>
              </div>
            <div class="col-sm-4 col-md-3">
              <a href="savings.html"><div class="square_orange spaceSq Dashboardicons"><img src="images/piggy-bank.png" class="myIcons" width="77" height="77" alt="pig and coins icon for my savings"><span class="squareTitleblack">My savings</span></div></a> 
              </div>
              <!--Tooltips not hover-->
            <div class="col-sm-4 col-md-3">
    
               <div class="square_border spaceSq DashboardiconsLight" title="Real time consumption"><span class="kwhSpeed">1kWh</span><img src="images/speedometer.png" class="speedometerIcon" width="60" height="60" alt="icon smartmeter energy"><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                </div><span class="rsquareTitle">Current consumption</span>
              </div>

              </div>
            <div class="col-sm-4 col-md-3">
         
               <div class="square_border spaceSq DashboardiconsLight" title="So far generated energy"><span class="kwh">2kWh</span><img src="images/sun.png" class="kwhIcon"  width="77" height="77" alt="adding appliances icon">
                <span class="gsquareTitle">Generated energy</span>
               </div>
            
            </div>

             <div class="col-sm-4 col-md-3">
               <div class="square_border spaceSq DashboardiconsLight"  title="Current battery level"><span class="battery">100%</span><img src="images/battery.png" class="batteryIcon" width="77" height="77" alt="battery progress icon "><span class="batsquareTitle">Battery</span> </div>
               </div>
              <div class="col-sm-4 col-md-3">
                <div class="square_border spaceSq DashboardiconsLight" title="Grid consumption from today"><span class="gridText">1%</span><img src="images/electric-tower.png" class="batteryIcon" width="77" height="77" alt="icon grid"><span class="wsquareTitle">Grid consumed</span></div>
                </div>               
            </div>

            <hr>
            
            <!--Gamified block-->
            <div class="row rSqsecond">
              <div class="col-sm-6 col-md-6">
                  <div class="cProgress">
                    
                       <img src="images/smile.png" width="75" height="75" alt="smile face icon">
                       <p class="gameText"> <span class="doingWell">You are doing well!</span> <br> 
                            Your daily goal is less than 17kWh each day</p>
                            <a href="#">  <p>Change my goal</p> </a>
                            <hr>
                            <p class="gameText">I'm reducing my carbon emissions by</p>
                            <img src="images/pollution.png"> 
                            <span class="co2">0.02 t CO2</span>

                            


                            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                            <div id="fb-root"></div>
                           <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3&appId=117424345030235&autoLogAppEvents=1"></script>                            
                       
                   </div>
               </div>
             <div class="col-sm-6 col-md-6">
                <div class="sellalert">
                    <img src="images/happy.png" width="10%" alt="happy face icon">
                    <p class="sell_face">Hey mate! your battery is full and tomorrow is a sunny day. You have energy excess.</p>   
                    <a href="#" class="goSell"><span>Great go and sell it!!</span> </a>         
                </div> 
                
                <div class="weatherhome">
                <div class="selectTitle"><span>Today's weather</span></div> 

                <a class="weatherwidget-io" href="https://forecast7.com/en/n27d47153d03/brisbane/" data-label_1="BRISBANE" data-label_2="WEATHER" data-font="Roboto" data-theme="pure" >BRISBANE WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
                
              </div>


                </div>
          </div>
    </div> <!--end container fluid-->


  </div> <!--End main container-->
  <footer>
    <p>© P2PP Energy Management | Contact Us | Terms and Conditions</p>  
      

    </footer>
  
</body>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/chart.js"></script>-->


</html>
