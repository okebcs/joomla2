<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1417:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Orders', 'Total Items sold', 'Revenue net'], ['2017-02-20', 0,0,0], ['2017-02-21', 0,0,0], ['2017-02-22', 0,0,0], ['2017-02-23', 0,0,0], ['2017-02-24', 0,0,0], ['2017-02-25', 0,0,0], ['2017-02-26', 0,0,0], ['2017-02-27', 0,0,0], ['2017-02-28', 0,0,0], ['2017-03-01', 0,0,0], ['2017-03-02', 0,0,0], ['2017-03-03', 0,0,0], ['2017-03-04', 0,0,0], ['2017-03-05', 0,0,0], ['2017-03-06', 0,0,0], ['2017-03-07', 0,0,0], ['2017-03-08', 0,0,0], ['2017-03-09', 0,0,0], ['2017-03-10', 0,0,0], ['2017-03-11', 0,0,0], ['2017-03-12', 0,0,0], ['2017-03-13', 0,0,0], ['2017-03-14', 0,0,0], ['2017-03-15', 0,0,0], ['2017-03-16', 0,0,0], ['2017-03-17', 0,0,0], ['2017-03-18', 0,0,0], ['2017-03-19', 0,0,0], ['2017-03-20', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Monday, 20 February 2017 to Tuesday, 21 March 2017',
            series: {0: {targetAxisIndex:0},
                   1:{targetAxisIndex:0},
                   2:{targetAxisIndex:1},
                  },
                  colors: ["#00A1DF", "#A4CA37","#E66A0A"],
        };

        var chart = new google.visualization.LineChart(document.getElementById('vm_stats_chart'));

        chart.draw(data, options);
      }
";}}