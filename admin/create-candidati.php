<?php
$electionsUrl = 'http://localhost:5050/elections';
$elections = json_decode(file_get_contents($electionsUrl, true));
?>

<?php include_once('../header.php'); ?>
<script src="./scripts.js"></script>
<section class="vh-90" style="background-color: #d2e8f1;">
  <div class="container mt-5">
    <div class="m-3 row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="container mt-5">
            <a href="./view.php"><button type="button" class="btn btn-primary btn-block">Înapoi</button></a>

          </div>
          <div class="container mt-3 mb-5">
            <form method="post" id="add_create" name="add_create" onsubmit="submitFormAddCandidates(event)">
              <div class="form-group">
                <label style="font-weight:700;">Alegeri:</label>
                <select id="electionId" class="form-select" aria-label="Default select example">
                  <?php foreach ($elections as $key => $candidate) : ?>
                    <option value="<?= $candidate->id ?>"><?= $candidate->name ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label style="font-weight:700;">Nume:</label>
                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Bravo">
              </div>
              <div class="form-group">
                <label style="font-weight:700;">Prenume:</label>
                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Mircea">
              </div>
              <div class="form-group">
                <label style="font-weight:700;">Ocupație:</label>
                <input type="text" id="job" name="job" class="form-control" placeholder="Zugrav">
              </div>
              <div class="form-group">
                <label style="font-weight:700;">Despre:</label>
                <input type="text" name="about" id="about" class="form-control" placeholder="Este un om smecher">
              </div>
              <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary btn-block">Creaza Candidat</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<?php include_once('../footer.php'); ?>