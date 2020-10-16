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
<div>
<h3>Подходящие вакансии</h3>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
    <label>Выберите навык: 
        <select name="skill">
        <option value="wait">...</option>
        <option value="web">web</option>
        <option value="copywriter">copywriter</option>
        </select>
    </label><br />
    <input type="submit" value="Подходящие вакансии" />
</form>


<?php
if(isset($_GET['skill'])){
    $skill=$_GET['skill'];
    if($skill=='web'){
        echo '<h3>web</h3>';
        echo file_get_contents("http://localhost/hackaton/JS/index.php?skill=web");
    }
    else if($skill=='copywriter'){
        echo '<h3>copywriter</h3>';
        echo file_get_contents("http://localhost/hackaton/JS/index.php?skill=copywriter");
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
    <!-- <script src="Assets/Chart.js"></script>
    <script src="JS/index.js"></script> -->

</div>
</body>
</html>