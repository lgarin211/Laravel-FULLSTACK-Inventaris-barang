@extends('template.head')
@section('conten')
<div class="container">
    <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
            </div>
            <div class="card-body">

                <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

            </div>
        </div>

    
    </div>
</div>
<div class="col-md-12 ">
    <div class="container col-md-5">
        <div id="piechart" class="card"></div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            // Load google charts
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', 'barang'],
                    ['Work', 1],
                    ['Friends', 1],
                    ['Eat', 1],
                    ['TV', 1],
                    ['Gym', 1],
                    ['Sleep', 1]
                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {
                    'title': 'My Average Day',
                    'width': 550,
                    'height': 400
                };

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>
    </div>
</div>
@endsection
