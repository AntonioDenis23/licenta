<?php
$electionsUrl = 'http://localhost:5050/elections';
if ($_GET["id"]) {
  $candidateUrl = 'http://localhost:5050/candidate?id=' . $_GET["id"];
} else {
  header('Location: ' . '../index.php');
}
$elections = json_decode(file_get_contents($electionsUrl, true));
$candidate = json_decode(file_get_contents($candidateUrl, true));
?>

<?php include_once('../header.php'); ?>
<section class="vh-90" style="background-color: #d2e8f1;">
  <div class="container mt-5">
    <div class="m-3 row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="container mt-5">
            <a href="./view.php"><button type="button" class="btn btn-primary btn-block">Inapoi</button></a>

          </div>
          <div class="container mt-3 mb-5">
            <form method="post" id="add_create" name="add_create" onsubmit="submitFormEditCandidates(event, <?= $_GET['id'] ?>)" action="http://localhost:5050/addCandidate">
              <div class="form-group">
                <label>Alegeri:</label>
                <select class="form-select" id="electionSelect" aria-label="Default select example">
                  <?php foreach ($elections as $key => $election) : ?>
                    <option value="<?= $election->id ?>" <?php
                                                          if (isset($candidate->electionDto[0])) {
                                                            if ($candidate->electionDto[0]->id == $election->id) {
                                                              echo "selected";
                                                            }
                                                          }
                                                          ?>><?= $election->name ?></option>
                  <?php endforeach; ?>

                </select>
              </div>
              <div class="form-group">
                <label>Nume:</label>
                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Bravo" value="<?= $candidate->firstName; ?>">
              </div>
              <div class="form-group">
                <label>Prenume:</label>
                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Mircea" value="<?= $candidate->lastName; ?>">
              </div>
              <div class="form-group">
                <label>Ocupatie:</label>
                <input type="text" id="job" name="job" class="form-control" placeholder="Zugrav" value="<?= $candidate->job; ?>">
              </div>
              <div class="form-group">
                <label>Despre:</label>
                <input type="text" id="about" name="about" class="form-control" placeholder="Este un om smecher" value="<?= $candidate->about; ?>">
              </div>
              <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary btn-block">Editeaza Candidat</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  async function submitFormEditCandidates(event, id) {
    event.preventDefault();
    let firstName = document.getElementById("firstName").value;
    let lastName = document.getElementById("lastName").value;
    let job = document.getElementById("job").value;
    let about = document.getElementById("about").value;
    let electionId = document.getElementById("electionSelect").value;
    let candidateId = id;
    try {
      let resonse = await fetch(`http://localhost:5050/addCandidate`, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          firstName: firstName,
          lastName: lastName,
          job: job,
          about: about,
          electionId: electionId,
          id: candidateId,
        })
      });
      window.location.replace(`view.php`);
    } catch (error) {
      alert(error);
      return;
    }
  }
</script>
<?php include_once('../footer.php'); ?>