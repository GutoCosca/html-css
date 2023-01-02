<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $voto = ['Era' => 10, 'Betwen' => 20, 'Marvel' => 9.8, 'Cartografo' => 9.3, 'Tsuro' => 9.1, 'Teraforming Mars' => 9, 'Batman' => 9, 'Kanagawa' => 9, 'Arcadia Quest' => 9, 'Istanbul' => 9]
    ?>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script>
        google.charts.load('current', {packages: ['corechart'], language: 'ja'});
         google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
        // Define the chart to be drawn.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Jogo');
        data.addColumn('number', 'Média');
        data.addRows([
            <?php
                foreach ($voto as $jogo => $media) { 
                echo ("['$jogo', $media],");
                }
            ?>
        ]);

        // Instantiate and draw the chart.
        var chart = new google.visualization.BarChart(document.getElementById('chat_div'));
        var options = {'title': 'Grafico do Rankin', 'width': 600, 'height': 450};
        chart.draw(data, options);
        }
  </script>
</head>
<body>
  <!-- Identify where the chart should be drawn. -->
  <div id="chat_div"></div>
</body>
</html>