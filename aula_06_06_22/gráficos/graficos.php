<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficos</title>
</head>
<body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>

    <?php
        $dados = [15,30,25,56,45,80];
        $mes = ['jan','fev','mar','abr','mai', 'jun'];
        $tam= count($dados);
        //echo $tam;


    ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
            <?php
                for($i=0;$i<$tam;$i++){
                    ?>
                        ['<?= $mes[$i]; ?>',  <?= $dados[$i]; ?>],
                    <?php
                }
            ?>
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</body>
</html>