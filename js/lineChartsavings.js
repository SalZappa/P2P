 //line WEEKLY ENERGY PERFORMANCE
 var ctxL = document.getElementById("lineChartsavings").getContext('2d');
 var myLineChart = new Chart(ctxL, {
   type: 'line',
   data: {
     labels: ["January-March", "April-June", "July-September", "October-December"],
     datasets: [{
         label: "Savings",
         data: [50, 50, 80, 50, 50, 30, 40],
         backgroundColor: [
           'rgba(255, 177, 67, 0.48)',
         ],
         borderColor: [
           'rgba(200, 99, 132, .7)',
         ],
         borderWidth: 2
       },
       {
         label: "Paying form the grid",
         data: [100, 110, 200, 102, 110, 110, 220],
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


