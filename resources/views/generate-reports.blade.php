<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPS</title>
	<link href="{{ asset("/assets/css/bootstrap.min.css") }}" rel="stylesheet">
	<link href="{{ asset("/assets/css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/css/datatable.css") }}" rel="stylesheet">
	<link href="{{ asset("/assets/css/datepicker3.css") }}" rel="stylesheet">
	<link href="{{ asset("/css/styles.css") }}" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
    @include('navigation')
    @include('sidebar')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">View Reports</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header">Vehicle Management</h1> -->
			</div>
		</div><!--/.row-->

		<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Generate Reports</div>
						<div class="panel-body">
                        <table id="example" class="table table-striped table-hover table-bordered" style="width:100%">


                        <div class="alert bg-info" role="alert"> <em class="fa fa-lg fa-file">&nbsp;</em>
                            {{-- This is hardcoded --}}
                            Displaying reports from <b> 2023-05-06 to 2023-05-06 </b>
                        </div>


                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Vehicle Reg. No.</th>
                            <th>Company</th>
                            <th>Category</th>
                            <th>Parking Number</th>
                            <th>Vehicle's Owner</th>

                        </tr>
                    </thead>
                    <tbody>



                        <?php
                                for ($cnt=1; $cnt < 3; $cnt++) { ?>
                                    {{-- this is hardcoded --}}
                                    <tr>
                                        <td><?php echo $cnt ?></td>
                                        <td>LLL-8987</td>
                                        <td>Kawasaki</td>
                                        <td>Two Wheeler</td>
                                        <td>CA-59268</td>
                                        <td>James</td>

                                    </tr>

                                <?php } ?>




                    </tbody>

                    </table>
						</div>
					</div>
				</div>



</div><!--/.row-->




        @include('footer')
	</div>	<!--/.main-->

	<script src="{{ asset("/assets/js/jquery-1.11.1.min.js") }}"></script>
	<script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("/assets/js/chart.min.js") }}"></script>
	<script src="{{ asset("/assets/js/chart-data.js") }}"></script>
	<script src="{{ asset("/assets/js/easypiechart.js") }}"></script>
	<script src="{{ asset("/assets/js/easypiechart-data.js") }}"></script>
	<script src="{{ asset("/assets/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("/assets/js/dataTables.bootstrap4.min.js") }}"></script>
	<script src="{{ asset("/assets/js/bootstrap-datepicker.js") }}"></script>
	<script src="{{ asset("/assets/js/custom.js") }}"></script>
	<script>
		window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
};
	</script>

    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

</body>
</html>

