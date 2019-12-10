<?php
include 'header.php'; ?>

<div class="container-fluid">
        <div class="row rSq"><h1 class="theTitles">My devices energy usage</h1>
        </div>

        <div class="row rApp">
            <!-- Input time-->
          <div class="col-sm col-md">
           <div class="card"> <div class="card-header">Check their real time energy usage.</div>

           <canvas id="barChart"></canvas>
                     
          </div>

               
        
                     
          </div>
            
              
                
        </div><!-- devices row end-->


             <hr>

            <!--Lights Row-->
             <div class="row rApp">
                 <div class="col-sm-6 col-md-6">
                    
                 </div>
                 <div class="col-sm-6 col-md-6">
                        
                              
                        
                     </div>

             </div><!-- lights row end-->
             

            <!--Gamified block-->
            <div class="row rSq">
              
             <div class="col-sm-12 col-md-12 text-center">
                    <button onclick="window.location.href='#'" type="button" class="btn btn-info">Download Report</button>    
               
                
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
include 'footer.php'; ?>
  
</body>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/bar_chart.js"></script>

</html>