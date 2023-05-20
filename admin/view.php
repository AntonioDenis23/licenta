<?php
$urlTopics = 'http://localhost:5050/topics';
$urlAlegeri = 'http://localhost:5050/elections';
$candidates = json_decode(file_get_contents($urlTopics, true));
$alegeri = json_decode(file_get_contents($urlAlegeri, true));
// var_dump($alegeri);
// var_dump($candidates);
// die;
?>
<?php include_once('../header.php');?>
<div class= "container mb-5">
   <?php include_once('./candidati.php');?>
</div>
<hr class="hr" />
<div class= "container">
   <?php include_once('./alegeri.php');?>
</div>

 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#candidati-list').DataTable();
  } );
  $(document).ready( function () {
      $('#alegeri-list').DataTable();
  } );
</script>
<?php include_once('../footer.php');?>
