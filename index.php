<!Doctype HTML>
<html>
<head>
    <title>hackaton BazaIT</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="Assets/Chart.css" />
    <link rel="stylesheet" type="text/css" href="Assets/Chart.min.css" />
</head>
<body>
<div class="center">
<h3>Подходящие вакансии</h3>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
    <label>Выберите навык: 
        <select name="skill">
        <option value="wait">...</option>
        <option value="web">web</option>
        <option value="copywriter">copywriter</option>
        </select>
    </label><br /><br />
    <input type="submit" value="Подходящие вакансии" />
</form>


<?php
if(isset($_GET['skill'])){
    $skill=$_GET['skill'];
    if($skill=='web'){
        echo '<h3>web</h3>';
     }
    else if($skill=='copywriter'){
        echo '<h3>copywriter</h3>';
    }
} else {
    echo "Select an optional";
}
?>
<section>
        <div class="container">
            <div class="line">
                <canvas id="votesChart" width="600" height="400"></canvas>
            </div>
            <div class="line">
                <canvas id="popChart" width="600" height="400"></canvas>
            </div>
        </div>
    </section>
    <script src="Assets/Chart.js"></script>
    <script src="JS/index.js"></script>
    <script type = "text/javascript">
        var quantityCity = 6, quantityDonRegion = 22, quantityCountry = 45;

        var popCanvas=document.getElementById("popChart").getContext("2d");
        var barChart = new Chart(popCanvas, {
            type: "bar",
            data: {
                labels: ["", "В вашем городе", "В вашей области", "В стране"],
                datasets: [{
                    label: "Подходящие вакансии",
                    data: [0, quantityCity, quantityDonRegion, quantityCountry],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.6)",
                        "rgba(54, 162, 235, 0.6)",
                        "rgba(255, 206, 86, 0.6)",
                        "rgba(25, 206, 86, 0.6)",
                    ]
                }]
            }
        });
    var fulltime = 15, parttime = 3, remote = 7, moving = 5;
    var votesCanvas=document.getElementById("votesChart").getContext("2d");
        var pieChart = new Chart (votesCanvas, {
            type: "pie",
            // data: votesData,
            // options: chartOptions,
            data: {
                labels: [
                    "Полная занятость",
                    "Частичная занятость",
                    "Удаленная работа",
                    "Требующая переезда"
                ],
                datasets: [
                    {
                        data: [fulltime, parttime, remote, moving],
                        backgroundColor: [
                            "#FF6384",
                            "#63FF84",
                            "#84FF63",
                            "#6384FF"
                        ]
                    }]
                 }
        });
    </script>

</div>
</body>
</html>