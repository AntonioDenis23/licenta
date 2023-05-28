<?php
$alegeriUrl = 'http://localhost:5050/elections';
if ($_GET["id"]) {
  $urlTopics = 'http://localhost:5050/election?electionId=' . $_GET["id"];
} else {
  header('Location: ' . './index.php');
}
$alegeri = json_decode(file_get_contents($urlTopics, true));
// var_dump($alegeri);
// die;
?>
<?php include_once('header.php'); ?>

<div style="background-color: #eeeeee;" class="container card-width">
  <div class="container mt-5 mb-5">
    <div class="row no-gutters">
      <div>
        <h1 style="font-size: 52px;" class="text-center font-weight-bold">Votanți</h1>
      </div>
      <?php if (!empty($alegeri->candidates)) : ?>
        <?php foreach ($alegeri->candidates as $key => $value) : ?>
          <div class="col-md-6 col-lg-6">
            <form method="post" onsubmit="submitFormVote(event, <?= $value->id ?>, <?= $_GET['id'] ?>)">

              <div style="position: relative;" class="card-width bg-navy">
                <div class="  text-white">
                  <p>Nume: <span> <?= $value->firstName ?></span> </p>
                </div>
                <div class=" text-white">
                  <p>Prenume: <span> <?= $value->lastName ?></span> </p>
                </div>
                <div class=" text-white">
                  <p>Ocupație: <span> <?= $value->job ?></span></p>
                </div>
                <div class=" text-white">
                  <p>Despre: <span> <?= $value->about ?></span> </p>
                </div>
                <div><button class="d-block m-auto btn voteaza-clasa">Votează</button></div>

              </div>
            </form>

          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <div class="col-md-6 col-lg-6">
          <p>Ai 0 candidați</p>
        </div>
      <?php endif ?>
    </div>
  </div>
</div>
</div>
</div>
<script>
  async function submitFormVote(event, candidateId, electionId) {
    event.preventDefault();
    let userName = getCookie("username");
    try {
      let response = await fetch(`http://localhost:5050/vote?userName=${userName}`, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          candidateId: candidateId,
          electionId: electionId,
        }),
      });
      const responseData = await response;
      if (responseData.status == 200) {
        alert('Votul tau a fost inregistrat')
        window.location.replace(`pagina-cont-utilizator.php?username=${userName}`);
      }
      if (responseData.status == 406) {
        alert('Deja ai votat, alege alta poziție pentru a vota')
        window.location.replace(`pagina-cont-utilizator.php?username=${userName}`);
      }
    } catch (error) {
      alert(error);
      return;
    }
  }

  function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
</script>
<?php include_once('footer.php'); ?>

<style>
  .card-width span {
    font-size: 14px;
  }

  .card-width {
    max-width: 75rem
  }

  .voteaza-clasa {
    background-color: #00A37A;
  }

  .bg-navy {
    background-color: #012030;
  }

  img {
    width: 100%;
    margin: auto;
    display: block;
    border-radius: 20px;
  }

  .container-image {
    display: flex;
    justify-content: center;
    height: 400px;
  }

  .vote {
    margin: 0;
    padding: 7px 15px;
    background-color: black;
    color: white;
    cursor: pointer;
    border-radius: 10px;
  }

  .vote:hover {
    background-color: #2e2e2e;
    color: #eeeeee;
  }

  .skill-block {
    width: 30%;
  }

  @media (min-width: 991px) and (max-width:1200px) {
    .skill-block {
      padding: 32px !important;
    }
  }

  @media (min-width: 1200px) {
    .skill-block {
      padding: 56px !important;
    }
  }

  body {
    background-color: #eeeeee;
  }

  .container {
    margin-top: 100px;
  }

  .container-topics-main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    text-align: center;
    row-gap: 10px;
    background: #000;
  }

  .container-topics-main span {
    padding: 10px;
    display: block;
    font-size: 16px;
    font-weight: 500
  }

  .container-topics-main .container-topic {
    border-radius: 10px;
    margin: 3px;
  }

  .container-topics-main .container-topic>div:first-child {
    border-bottom: 1px solid #ffffff73;
  }

  .container-topics-main .container-topic:nth-child(even) {
    background-color: blue;
  }

  .container-topics-main .container-topic:nth-child(odd) {
    background-color: purple;
  }

  .container-topic:hover {
    transform: translateY(-5px);
    transition: all 0.1s ease-out;
  }

  .poza-vot {
    width: 130px;
    margin: 15px;
  }

  .continer-img {
    position: absolute;
    width: 150px;
    right: 0;
    top: 0;
  }

  .continer-img img {
    border-radius: 0 10% 0 0;
  }

  .col-md-6 .bg-navy {
    margin: 25px 85px
  }
</style>