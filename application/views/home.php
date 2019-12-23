<style type='text/css'>
#container {
    height: 400px; 
}

.highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
</style>
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
                    <h2>Status</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4>HEIGHT</h4>
                            <span class="border border-warning" style='font-size:50px;'>167</span>
                        </div>
                        <div class="col">
                            <h4>WEIGHT</h4>
                            <span class="border border-warning" style='font-size:50px;'>66</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CHART -->
            <div id='content'style="background:#f8f9fa !important;padding: 20px;border-radius: 20px;width:100%;margin-top:20px;">
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
</div>

<script type='text/javascript'>
$(document).ready(function(){   
    console.log("Gorylla veveve");
    $(".highcharts-credits").hide();
});

Highcharts.chart('container', {
    chart: {
        type: 'cylinder',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
    title: {
        text: 'Body Development Chart'
    },
    plotOptions: {
        series: {
            depth: 25,
            colorByPoint: true
        }
    },
    series: [{
        data: [10.0, 20.0, 30.0, 40.0, 50.0, 60.0, 70.0, 80.0, 90.0, 100.0, 110.0, 120.0],
        name: 'Cylinders',
        showInLegend: false
    }]
});
</script>