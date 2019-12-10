
  //bar
  var ctxB = document.getElementById("barChart").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: ["Without Solar", "With Solar"],
      datasets: [{
        label: 'Savings in AUD',
        data: [320, 290],
        backgroundColor: [
  
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
         
        ],
        borderColor: [
       
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });


