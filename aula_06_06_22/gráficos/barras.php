<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Barras</title>
</head>
<body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
    <?php
        $dados = [15,30,25,56,45,];
        $vendas = [45,67,24,38,12,];
        $mes = ['jan','fev','mar','abr','mai'];
        $tam= count($dados);
        //echo $tam;
    ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Year', 'Sales', 'Expenses'],
            <?php
                for($i=0;$i<$tam;$i++){
                    ?>
                        ['<?= $mes[$i]; ?>',  <?= $dados[$i]; ?>, <?= $vendas[$i]; ?>],
                    <?php
                }
            ?>
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script> 
</body>
</html>