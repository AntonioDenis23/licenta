<?php 
$alegeriUrl = 'http://localhost:5050/elections';

$alegeri = json_decode(file_get_contents($alegeriUrl, true));
foreach($alegeri as $alegere){
  if($alegere->id == $_GET['id']){
    $alegereaVruta = $alegere;
  }
}
var_dump($alegereaVruta);
?>


<?php include_once('../header.php');?>

<script src="./scripts.js"></script>

<div class="container mt-5">
    <a href="./view.php"><button type="button" class="btn btn-success btn-block">Inapoi</button></a>
    
</div>
<div class="container mt-5">
    <form method="post" id="add_create" name="add_create" onsubmit="submitFormAddAlegere(event,<?= $_GET['id']?>)">
    <div class="form-group">
    </div>
      <div class="form-group  mt-3">
        <label>Nume Alegere</label>
        <input type="text" id="name-alegere" value="<?= $alegereaVruta->name?>" name="firstName" class="form-control" placeholder="Bravo">
      </div>
      <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary btn-block">Creaza Alegere</button>
      </div>
    </form>
  </div>
  <script>
    async function submitFormAddAlegere(event,id) {
        event.preventDefault();
        let name = document.getElementById("name-alegere").value;
        try {
            let resonse = await fetch(`http://localhost:5050/addElection`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                name: name,
                id: id,
            }),
            });
            window.location.replace(`view.php`);
        } catch (error) {
            alert(error);
            return;
        }
    }
  </script>
<?php include_once('../footer.php');?>
