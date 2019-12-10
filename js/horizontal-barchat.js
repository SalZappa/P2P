
  new Chart(document.getElementById("horizontalBar"), {
    "type": "horizontalBar",
    "data": {
      "labels": ["Bills with solar", "Bills with grid"],
      "datasets": [{
        "label": "My bills with solar",
        "data": [100, 200, 300, 400, 500, 600, 700],
        "fill": false,
        "backgroundColor": ["rgba(255, 159, 64, 0.2)", "rgba(54, 162, 235, 0.2)"
        ],
        "borderColor": ["rgb(255, 159, 64)", "rgb(54, 162, 235)"
        ],
        "borderWidth": 1
      }]
    },
    "options": {
      "scales": {
        "xAxes": [{
          "ticks": {
            "beginAtZero": true
          }
        }]
      }
    }
  });

