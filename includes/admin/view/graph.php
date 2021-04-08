<!-- SCRIPT FOR TOTAL REQUEST GRAPH -->
<script>
    let ctx = document.getElementById('myChart1').getContext('2d');
    let labels = <?php echo json_encode($total_request_key) ?>;
    let data4 = <?php echo json_encode($total_request_value) ?>;
    let colorHex = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF', '#eb4034', '#34eb56'];

    let myChart1 = new Chart(ctx, {
        type: 'pie',
        data: {
            datasets: [{
                data: data4,
                backgroundColor: colorHex
            }],
            labels: labels
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom'
            },
            plugins: {
                datalabels: {
                    color: '#fff',
                    anchor: 'end',
                    align: 'start',
                    borderWidth: 2,
                    /*         borderColor: '#fff', */
                    borderRadius: 25,
                    backgroundColor: (context) => {
                        return context.dataset.backgroundColor;
                    },
                    font: {
                        weight: 'bold',
                        size: '16'
                    },
                    formatter: (value) => {
                        return value + ' %';
                    }
                }
            },
            title: {
                text: "Total Request <?php echo array_sum($total_request); ?>",
                display: true,
                fontSize: 30,
                position: 'bottom'
            },

            legend: {
                display: true,
                position: 'top',
                labels: {
                    fontSize: 15

                }
            }
        }
    })
</script>

<!-- SCRIPT FOR MONTHLY REQUEST GRAPH -->
<script>
    let ctx1 = document.getElementById('myChart2').getContext('2d');
    let labels1 = <?php echo json_encode($monthly_request_key) ?>;
    let data5 = <?php echo json_encode($monthly_request_value) ?>;
    let colorHex1 = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF', '#eb4034', '#34eb56'];

    let myChart2 = new Chart(ctx1, {
        type: 'pie',
        data: {
            datasets: [{
                data: data5,
                backgroundColor: colorHex1
            }],
            labels: labels1
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom'
            },
            plugins: {
                datalabels: {
                    color: '#fff',
                    anchor: 'end',
                    align: 'start',
                    borderWidth: 2,
                    /*         borderColor: '#fff', */
                    borderRadius: 25,
                    backgroundColor: (context) => {
                        return context.dataset.backgroundColor;
                    },
                    font: {
                        weight: 'bold',
                        size: '16'
                    },
                    formatter: (value) => {
                        return value + ' %';
                    }
                }
            },
            title: {
                text: "Monthly Request <?php echo array_sum($monthly_request); ?>",
                display: true,
                fontSize: 30,
                position: 'bottom'
            },

            legend: {
                display: true,
                position: 'top',
                labels: {
                    fontSize: 15

                }
            }
        }
    })
</script>

<!-- SCRIPT FOR WEEKLY REQUEST GRAPH -->
<script>
    let ctx_weekly = document.getElementById('myChart4').getContext('2d');
    let labels_weekly = <?php echo json_encode($weekly_request_key) ?>;
    let data_weekly = <?php echo json_encode($weekly_request_value) ?>;
    let colorHex_weekly = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF', '#eb4034', '#34eb56'];

    let myChart4 = new Chart(ctx_weekly, {
        type: 'pie',
        data: {
            datasets: [{
                data: data_weekly,
                backgroundColor: colorHex_weekly
            }],
            labels: labels_weekly
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom'
            },
            plugins: {
                datalabels: {
                    color: '#fff',
                    anchor: 'end',
                    align: 'start',
                    borderWidth: 2,
                    /*         borderColor: '#fff', */
                    borderRadius: 25,
                    backgroundColor: (context) => {
                        return context.dataset.backgroundColor;
                    },
                    font: {
                        weight: 'bold',
                        size: '16'
                    },
                    formatter: (value) => {
                        return value + ' %';
                    }
                }
            },
            title: {
                text: "Weekly Request <?php echo array_sum($weekly_request); ?>",
                display: true,
                fontSize: 30,
                position: 'bottom'
            },

            legend: {
                display: true,
                position: 'top',
                labels: {
                    fontSize: 15

                }
            }
        }
    })
</script>

<!-- SCRIPT FOR YEARLY REQUEST GRAPH -->
<script>
    let ctx2 = document.getElementById('myChart3').getContext('2d');
    let labels2 = <?php echo json_encode($yearly_request_key) ?>;
    let data6 = <?php echo json_encode($yearly_request_value) ?>;
    let colorHex2 = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF', '#eb4034', '#34eb56'];

    let myChart3 = new Chart(ctx2, {
        type: 'pie',
        data: {
            datasets: [{
                data: data6,
                backgroundColor: colorHex2
            }],
            labels: labels2
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom'
            },
            plugins: {
                datalabels: {
                    color: '#fff',
                    anchor: 'end',
                    align: 'start',
                    borderWidth: 2,
                    /*         borderColor: '#fff', */
                    borderRadius: 25,
                    backgroundColor: (context) => {
                        return context.dataset.backgroundColor;
                    },
                    font: {
                        weight: 'bold',
                        size: '16'
                    },
                    formatter: (value) => {
                        return value + ' %';
                    }
                }
            },
            title: {
                text: "Yearly Request <?php echo array_sum($yearly_request); ?>",
                display: true,
                fontSize: 30,
                position: 'bottom'
            },

            legend: {
                display: true,
                position: 'top',
                labels: {
                    fontSize: 15

                }
            }
        }
    })
</script>

<!-- SCRIPT FOR MOST REQUESTED GRAPH -->
<script>
    let labels3 = <?php echo json_encode($most_requested_key) ?>;
    let data3 = <?php echo json_encode($most_requested_value) ?>;
    let colors3 = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF', '#eb4034', '#34eb56'];

    let myChart = document.getElementById("myChart").getContext('2d');

    let chart2 = new Chart(myChart, {
        type: 'bar',
        data: {
            labels: labels3,
            datasets: [{
                data: data3,
                backgroundColor: colors3
            }]
        },
        options: {
            plugins: {
                datalabels: {
                    display: false
                }
            },
            title: {
                text: "Most Requested",
                display: true,
                fontSize: 30
            },
            legend: {
                display: false
            }
        }
    });
</script>

<!-- SCRIPT FOR WEEKLY MOST REQUESTED GRAPH -->
<script>
    let te = <?php echo json_encode($weekly_most_requested_key) ?>;
    let val = <?php echo json_encode($weekly_most_requested_value) ?>;
    let hu = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF', '#eb4034', '#34eb56'];

    let bar4 = document.getElementById("bar4").getContext('2d');

    let chart5 = new Chart(bar4, {
        type: 'bar',
        data: {
            labels: te,
            datasets: [{
                data: val,
                backgroundColor: hu
            }]
        },
        options: {
            plugins: {
                datalabels: {
                    display: false
                }
            },
            title: {
                text: "Most Requested Weekly",
                display: true,
                fontSize: 30
            },
            legend: {
                display: false
            }
        }
    });
</script>

<!-- SCRIPT FOR MONTHLY MOST REQUESTED GRAPH -->
<script>
    let text = <?php echo json_encode($monthly_most_requested_key) ?>;
    let value = <?php echo json_encode($monthly_most_requested_value) ?>;
    let hue = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF', '#eb4034', '#34eb56'];

    let bar2 = document.getElementById("bar2").getContext('2d');

    let chart3 = new Chart(bar2, {
        type: 'bar',
        data: {
            labels: text,
            datasets: [{
                data: value,
                backgroundColor: hue
            }]
        },
        options: {
            plugins: {
                datalabels: {
                    display: false
                }
            },
            title: {
                text: "Most Requested Monthly",
                display: true,
                fontSize: 30
            },
            legend: {
                display: false
            }
        }
    });
</script>

<!-- SCRIPT FOR YEARLY MOST REQUESTED GRAPH -->
<script>
    let text1 = <?php echo json_encode($yearly_most_requested_key) ?>;
    let value1 = <?php echo json_encode($yearly_most_requested_value) ?>;
    let hue1 = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF', '#eb4034', '#34eb56'];

    let bar3 = document.getElementById("bar3").getContext('2d');

    let chart4 = new Chart(bar3, {
        type: 'bar',
        data: {
            labels: text1,
            datasets: [{
                data: value1,
                backgroundColor: hue1
            }]
        },
        options: {
            plugins: {
                datalabels: {
                    display: false
                }
            },
            title: {
                text: "Most Requested YEARLY",
                display: true,
                fontSize: 30
            },
            legend: {
                display: false
            }
        }
    });
</script>

<!-- SCRIPT FOR Purok Ranking GRAPH -->
<script>
    let puroktext = <?php echo json_encode($purok_ranking_key) ?>;
    let purokvalue = <?php echo json_encode($purok_ranking_value) ?>;
    let purokcolor = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF', '#eb4034', '#34eb56'];

    let purokchart = document.getElementById("purokchart").getContext('2d');

    let purokchart1 = new Chart(purokchart, {
        type: 'bar',
        data: {
            labels: puroktext,
            datasets: [{
                data: purokvalue,
                backgroundColor: purokcolor
            }]
        },
        options: {
            plugins: {
                datalabels: {
                    display: false
                }
            },
            title: {
                text: "Total Population",
                display: true,
                fontSize: 30
            },
            legend: {
                display: false
            }
        }
    });
</script>