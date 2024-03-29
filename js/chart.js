$(document).ready(function() {

    var i = 0;
    $('.circle-chart').each(function() {
      var id = 'chart' + i;
      $(this).attr('id', id);
      drawCircleChart('#' + id);
      i++;
    })
  
    $('.circle-chart').click(function() {
      var thisId = $(this).attr('id');
      drawCircleChart('#' + thisId);
    })
  
    function drawCircleChart(id) {
      $(id).empty().append("<p>" + $(id).data('kilowatt') + "kWh</p>");
      addOneBar(id);
    }
  
    function addOneBar(id) {
      var kilowatt = $(id).data('kilowatt');
      var noOfBars = .36 * kilowatt;
      if ($(id).children().length - 1 < noOfBars) {
        $(id).append('<div class="bar"></div>');
        setTimeout(function() {
          addOneBar(id);
        }, 30);
      }
    }
  
  })