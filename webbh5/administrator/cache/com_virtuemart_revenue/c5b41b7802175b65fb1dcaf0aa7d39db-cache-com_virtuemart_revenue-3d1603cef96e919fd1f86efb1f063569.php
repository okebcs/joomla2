<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1420:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Orders', 'Total Items sold', 'Revenue net'], ['2016-11-21', 0,0,0], ['2016-11-22', 0,0,0], ['2016-11-23', 0,0,0], ['2016-11-24', 0,0,0], ['2016-11-25', 0,0,0], ['2016-11-26', 0,0,0], ['2016-11-27', 0,0,0], ['2016-11-28', 0,0,0], ['2016-11-29', 0,0,0], ['2016-11-30', 0,0,0], ['2016-12-01', 0,0,0], ['2016-12-02', 0,0,0], ['2016-12-03', 0,0,0], ['2016-12-04', 0,0,0], ['2016-12-05', 0,0,0], ['2016-12-06', 0,0,0], ['2016-12-07', 0,0,0], ['2016-12-08', 0,0,0], ['2016-12-09', 0,0,0], ['2016-12-10', 0,0,0], ['2016-12-11', 0,0,0], ['2016-12-12', 0,0,0], ['2016-12-13', 0,0,0], ['2016-12-14', 0,0,0], ['2016-12-15', 0,0,0], ['2016-12-16', 0,0,0], ['2016-12-17', 0,0,0], ['2016-12-18', 0,0,0], ['2016-12-19', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Monday, 21 November 2016 to Tuesday, 20 December 2016',
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