<?php
$urlTopics = 'http://localhost:5050/topics';
$urlAlegeri = 'http://localhost:5050/elections';
$candidates = json_decode(file_get_contents($urlTopics, true));
$alegeri = json_decode(file_get_contents($urlAlegeri, true));
// var_dump($alegeri);
// var_dump($candidates);
// die;
?>
<?php include_once('../header.php'); ?>
<section class="vh-90" style="background-color: #d2e8f1;">
	<div class="container ">
		<div class="m-3 row d-flex justify-content-center align-items-center h-100">
			<div class="col-lg-12 col-xl-11">
				<div class="card text-black" style="border-radius: 25px;">
					<div class="container mb-5">
						<?php include_once('./candidati.php'); ?>
					</div>
					<div class="container mb-5">
						<?php include_once('./alegeri.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		$('#candidati-list').DataTable();
	});
	$(document).ready(function() {
		$('#alegeri-list').DataTable();
	});
</script>

<style>
	.buton-absolut {
		position: absolute;
	}
</style>
<?php include_once('../footer.php'); ?>