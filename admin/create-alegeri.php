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
            <form method="post" id="add_create" name="add_create" onsubmit="submitFormAddAlegere(event)">
              <div class="form-group">
              </div>
              <div class="form-group  mt-3">
                <label style="font-weight:700;">Nume Alegere:</label>
                <input type="text" id="name-alegere" name="firstName" class="form-control" placeholder="Sef de scara">
              </div>
              <div class="form-group my-3">
                <button type="submit" class="btn btn-primary btn-block">Creaza Alegere</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  async function submitFormAddAlegere(event) {
    event.preventDefault();
    let name = document.getElementById("name-alegere").value;
    try {
      let resonse = await fetch("http://localhost:5050/addElection", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          name: name,
        }),
      });
      window.location.replace(`view.php`);
    } catch (error) {
      alert(error);
      return;
    }
  }
</script>
<?php include_once('../footer.php'); ?>