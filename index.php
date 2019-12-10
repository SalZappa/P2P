
<?php
include 'header.php'; ?>
    <div class="container-fluid">
          <div class="row rSq">
            <div class="col-sm-4 col-md-3">
              <a href="appliances.php"><div class="square_blue spaceSq Dashboardicons"><img src="images/smarthome.png" class="myIcons" width="77" height="77" alt="House icon for selecting my appliances"><span class="squareTitle">My appliances</span></div></a>
              </div>
            <div class="col-sm-4 col-md-3">
              <a href="performance.php"><div class="square_orange spaceSq Dashboardicons" ><img src="images/chart.png" class="myIcons"  width="77" height="77" alt="graph icon cheking performance"><span class="squareTitleblack">My performance</span></div></a>
              </div>
            <div class="col-sm-4 col-md-3">
              <a href="scheduling.php"><div class="square_blue spaceSq Dashboardicons"><img src="images/calendar.png" class="myIcons" width="77" height="77" alt="calendar icon for setting up a schedule"><span class="squareTitle">Smart schedule</span></div></a>
              </div>
            <div class="col-sm-4 col-md-3">
              <a href="savings.php"><div class="square_orange spaceSq Dashboardicons"><img src="images/piggy-bank.png" class="myIcons" width="77" height="77" alt="pig and coins icon for my savings"><span class="squareTitleblack">My savings</span></div></a> 
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
    <?php
include 'footer.php'; ?>

  </div> <!--End main container-->
  
</body>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</html>