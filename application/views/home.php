<div class="container" style="margin-top: 100px">
    <div class="row ">
        <div class="col col-md-4 " style="text-align: center">
            <div class="card">
                <div class="card-header">
                    <h2>Profile</h2>
                </div>
                <div class="card-body">
                    <div class="rounded-circle" style="margin: 10px auto ;background: url(<?= base_url('img/profile_pic/cat.jpg') ?>) 50% 50% no-repeat;width: 200px;height: 200px; background-size: cover; "></div>
                    <!-- <img src="<?= base_url('img/profile_pic/cat.jpg') ?>" alt="" width="300px" class="rounded-circle "> -->
                    <div class="float-left" style="text-align: left">
                        <i class="fas fa-user ml-4"></i><span>&nbsp;&nbsp;Ahmad</span> <br>
                        <i class="fas fa-magento ml-4"></i><span>&nbsp;&nbsp;19</span> <br>
                        <i class="fas fa-venus-mars ml-4"></i><span> Male</span> <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg" style="text-align: center">
            <div class="card">
                <div class="card-header">
                    <h2>Content</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4>Height</h4>
                        </div>
                        <div class="col">
                            <h4>Weight</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CHART -->
            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                    Basic line chart showing trends in a dataset. This chart includes the
                    <code>series-label</code> module, which adds a label to each line for
                    enhanced readability.
                </p>
            </figure>

        </div>
    </div>
</div>

<script>
    Highcharts.chart('container', {

        title: {
            text: 'Solar Employment Growth by Sector, 2010-2016'
        },

        subtitle: {
            text: 'Source: thesolarfoundation.com'
        },

        yAxis: {
            title: {
                text: 'Number of Employees'
            }
        },

        xAxis: {
            accessibility: {
                rangeDescription: 'Range: 2010 to 2017'
            }
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 2010
            }
        },

        series: [{
            name: 'Installation',
            data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
        }, {
            name: 'Manufacturing',
            data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
        }, {
            name: 'Sales & Distribution',
            data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
        }, {
            name: 'Project Development',
            data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
        }, {
            name: 'Other',
            data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });
</script>