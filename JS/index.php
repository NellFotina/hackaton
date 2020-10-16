<?php
echo 'var quantityCity = 6, quantityDonRegion = 22, quantityCountry = 45;

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
        });';
        ?>
        