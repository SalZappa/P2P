 //line WEEKLY ENERGY PERFORMANCE
 var ctxL = document.getElementById("lineChart").getContext('2d');
 var myLineChart = new Chart(ctxL, {
   type: 'line',
   data: {
     labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
     datasets: [{
         label: "Solar Generation",
         data: [11, 17, 20, 27, 30, 31, 45],
         backgroundColor: [
           'rgba(255, 177, 67, 0.48)',
         ],
         borderColor: [
           'rgba(200, 99, 132, .7)',
         ],
         borderWidth: 2
       },
       {
         label: "Home electricity consumption",
         data: [10, 15, 20, 25, 30, 35, 30],
         backgroundColor: [
           'rgba(86, 130, 150, 0.4392156862745098)',
         ],
         borderColor: [
           'rgba(0, 10, 130, .7)',
         ],
         borderWidth: 2
       }
     ]
   },
   options: {
     responsive: true
   }
 });


