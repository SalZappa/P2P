<?php
include 'header.php';
?>

<div class="container-fluid">
        <div class="row rSq"><h1 class="theTitles">Smart Scheduling</h1>
        </div>

        <div class="row rApp">
            <!-- Input time-->
            <div class="col-sm-6 col-md-6">
             <div class="selectAppLight">   
               <div class="selectTitleAppLight"><span>Select appliance or light</span></div> 
                 <label for="select" class="selAppliances">Choose one or multiple:</label> 
                 <select id="selectAppliances" name="devices" id="selectApp" name="selectApp" multiple>
                  <option value="dishwasher">dishwasher</option>  
                  <option value="Kitchen Light">Kitchen light</option>
                  <option value="dryer">Dryer</option>
                  <option value="water heater">water heater</option>  
                 </select>
            </div>         
            </div>

            <div class="col-sm-6 col-md-6">
              <div class="selectAppliance">
                <div class="selectTitleTime"><span>Select Time</span></div>  
        
                    <label for="select">Choose a time for switch on:</label>
                    <select id="scheduleTimes" type="time" id="switchOn" name="switchOn" required>
                    <option value="0">Switch On</option>    
                    <option class="OffPeakTime" value="5:00 am">5:00 am</option>
                    <option class="OffPeakTime" value="6:00 am">6:00 am</option>
                    <option class="Shoulder" value="7:00 am">7:00 am</option>
                    <option class="Shoulder" value="8:00 am">8:00 am</option>
                    <option class="Shoulder" value="9:00 am">9:00 am</option>
                    <option class="Shoulder" value="10:00 am">10:00 am</option>
                    <option class="Shoulder" value="11:00 am">11:00 am</option>
                    <option class="Shoulder" value="12:00 pm">12:00 pm</option>
                    <option class="Shoulder" value="01:00 pm">01:00 pm</option>
                    <option class="Shoulder" value="02:00 pm">02:00 pm</option>
                    <option class="Shoulder" value="03:00 pm">03:00 pm</option>
                    <option class="PeakTime" value="04:00 pm">04:00 pm</option>
                    <option class="PeakTime" value="05:00 pm">05:00 pm</option>
                    <option class="PeakTime" value="06:00 pm">06:00 pm</option>
                    <option class="PeakTime" value="07:00 pm">07:00 pm</option>
                    <option class="PeakTime" value="08:00 pm">08:00 pm</option>
                    <option class="PeakTime" value="09:00 pm">09:00 pm</option>
                    <option class="OffPeakTime" value="10:00 pm">10:00 pm</option>
                    <option class="OffPeakTime" value="11:00 pm">11:00 pm</option>
                    <option class="OffPeakTime" value="12:00 pm">12:00 pm</option>
                    </select>

                    <!-- Block peak Time-->
                <div>
                    Block Peak period: <input type="checkbox" id="myCheck" onclick="myFunction()">

                    <p id="text" style="display:none">Peak period blocked!</p>
                </div>    
                    
            </div>
              </div>
                
        </div><!-- devices row end-->


             <hr>

            <!--Lights Row-->
             <div class="row rApp">
                <div class="col-sm-6 col-md-6">
                  <div class="selectDays">
                    <div class="selectTitle"><span>Select Days</span></div>  
                    <div class="weekDays-selector">
                        <input type="checkbox" id="weekday-mon" class="weekday" />
                        <label for="weekday-mon">Monday</label>
                        <input type="checkbox" id="weekday-tue" class="weekday" />
                        <label for="weekday-tue">Tuesday</label>
                        <input type="checkbox" id="weekday-wed" class="weekday" />
                        <label for="weekday-wed">Wednesday</label>
                        <input type="checkbox" id="weekday-thu" class="weekday" />
                        <label for="weekday-thu">Thursday</label>
                        <input type="checkbox" id="weekday-fri" class="weekday" />
                        <label for="weekday-fri">Friday</label>
                        <input type="checkbox" id="weekday-sat" class="weekday" />
                        <label for="weekday-sat">Saturday</label>
                        <input type="checkbox" id="weekday-sun" class="weekday" />
                        <label for="weekday-sun">Sunday</label>    
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">

                        <div class="selectDays">

                        <a class="weatherwidget-io" href="https://forecast7.com/en/n27d47153d03/brisbane/" data-label_1="BRISBANE" data-label_2="WEATHER" data-font="Roboto" data-theme="pure" >BRISBANE WEATHER</a>
                        <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                        </script>      
                              </div>
                        
                </div>

             </div><!-- lights row end-->
             

            <!--Gamified block-->
            <div class="row rfooter">
              
                    <div class="col-sm-12 col-md-12 text-center">
                      
                       
                   </div>
                   <div class="col-sm-12 col-md-12">
                                   
                       <div class="col goback">
               
                           <a href="javascript:history.go(-1)"><i class="fas fa-long-arrow-alt-left backarrow"></i><span class="backBTN">Back</span></a>
                        </div> 
                     
                    </div>
                 </div>
    </div> <!--end container fluid-->


  </div> <!--End main container-->
  <?php
  include 'footer.php';
  ?>
  
</body>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animations.js"></script>
<!--<script src="js/chart.js"></script>-->


</html>