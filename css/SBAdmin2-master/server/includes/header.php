<!-- Third party -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" type="text/css" crossorigin="anonymous">

<!-- CSS -->
<link href="/includes/dist.php?css=sb-admin-bootstrap.css" rel="stylesheet">
<link href="/includes/dist.php?css=sb-admin-main.css" rel="stylesheet">

<?php
// DataTables
$lib_dataTables_css = PHP_EOL . '<link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" crossorigin="anonymous">' . PHP_EOL;
$lib_dataTables_js =  PHP_EOL .
'<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.js" crossorigin="anonymous"></script>' . PHP_EOL;

// Chart js
$lib_chartjs_css = PHP_EOL . '<link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" rel="stylesheet" type="text/css" crossorigin="anonymous">' . PHP_EOL;
$lib_chartjs_js = PHP_EOL . '<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>' . PHP_EOL;

function echo_footer() {
?>
	<!-- Third party -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

	<!-- JS -->
	<script src="/includes/dist.php?js=sb-admin-2.js" crossorigin="anonymous"></script>
<?php
}