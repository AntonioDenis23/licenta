<?php

$urlTopics = 'http://localhost:5050/elections';
if($_GET["username"]){
  $urlUser = 'http://localhost:5050/user?userName='. $_GET["username"];
}else{ 
  header('Location: '.'./index.php');
}
$dataUser = json_decode(file_get_contents($urlUser, true));
$dataTopics = json_decode(file_get_contents($urlTopics, true));

?>
<?php include_once('header.php');?>
    
<div class="container card-width">
        <div class="container mt-5 mb-5">
                <div class="row no-gutters">
                    <div class="col-md-4 col-lg-4">
                      <div class="container-image">
                        <img src="https://i.imgur.com/aCwpF7V.jpg">
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="d-flex flex-column ">
                        <p class="text-center h3 fw-bold mb-3 mx-1 mx-md-3 mt-3 text-secondary">Utilizator</p>
                        <div class="card-width bg-black">
                          <div class="p-1  text-white">
                                  <h5>Username : <?= $dataUser->userName ?></h5>
                              </div>
                              <div class="p-1 bg-black text-white">
                                  <h5>First Name: <?= $dataUser->firstName ?></h5>
                              </div>
                              <div class="p-1 bg-black text-white">
                                  <h5>Last name: <?= $dataUser->firstName ?></h5>
                              </div>
                              <div class="p-1 bg-black text-white">
                                  <h5>Your Email: <?= $dataUser->mail ?></h5>
                              </div>
                              <div class="p-1 bg-black text-white">
                                  <h5>Phone Number: <?= $dataUser->tel ?></h5>
                              </div>
                              <div class="d-flex flex-row text-white ">
                              <?php foreach($dataTopics as $key=>$value): ?>
                                <div class="container-topics-main ">
                                      <div class="container-topic h-100" >
                                        <div style="height:75px"><span>Pozitie: <?= $value->name?></span></div>
                                        <div class="mt-1 "><span><a class='btn btn-success' href="./pagina-voturi.php?name=<?= $value->name?>" class="vote">Voteaza</a></span></div>
                                      </div>
                              </div>
                              <?php endforeach; ?>
                              
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container d-block text-center">
          <a href="./admin/view.php">
            <button type="button" class="btn btn-primary">Panou Admin</button>
          </a>
        </div>
    </div>
<?php include_once('footer.php');?>

<style>
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
.bg-black {
  background: #000;
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
.container-topics-main  .container-topic {
  border-radius: 10px;
  margin: 3px;
} 
.container-topics-main  .container-topic>div:first-child {
  border-bottom: 1px solid #ffffff73;
}
.container-topics-main  .container-topic:nth-child(even) {
  background-color: blue;
}
.container-topics-main  .container-topic:nth-child(odd) {
  background-color: purple;
}
.container-topic:hover {
 transform: translateY(-5px);
 transition: all 0.1s ease-out;
}
</style>
