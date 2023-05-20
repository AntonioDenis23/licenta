<?php 
$electionsUrl = 'http://localhost:5050/elections';
$elections = json_decode(file_get_contents($electionsUrl, true));
?>

<?php include_once('../header.php');?>
<script src="./scripts.js"></script>

<div class="container mt-5">
    <a href="./view.php"><button type="button" class="btn btn-success btn-block">Inapoi</button></a>
    
</div>
<div class="container mt-5">
    <form method="post" id="add_create" name="add_create" onsubmit="submitFormAddCandidates(event)">
    <div class="form-group">
    <select id="electionId" class="form-select" aria-label="Default select example">
        <?php foreach($elections as $key=>$candidate): ?>
        <option value="<?= $candidate->id?>"><?= $candidate->name?></option>
        <?php endforeach; ?>
    </select>
    </div>
      <div class="form-group">
        <label>Nume</label>
        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Bravo">
      </div>
      <div class="form-group">
        <label>Prenume</label>
        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Mircea">
      </div>
      <div class="form-group">
        <label>Ocupatie</label>
        <input type="text" id="job" name="job" class="form-control" placeholder="Zugrav">
      </div>
      <div class="form-group">
        <label>Despre</label>
        <input type="text" name="about" id="about" class="form-control" placeholder="Este un om smecher">
      </div>
      <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary btn-block">Creaza Candidat</button>
      </div>
    </form>
  </div>
<?php include_once('../footer.php');?>
