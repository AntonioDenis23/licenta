<?php

if($_GET["name"]){
    $urlTopics = 'http://localhost:5050/election?electionName=' . $_GET["name"];
  }else{ 
    header('Location: '.'./index.php');
  }
// $data = json_decode(file_get_contents($urlTopics, true));
$people = array(
    array(
        "name" => "John Smith",
        "age" => 30,
        "city" => "New York"
    ),
    array(
        "name" => "Jane Doe",
        "age" => 25,
        "city" => "Los Angeles"
    ),
    array(
        "name" => "Bob Johnson",
        "age" => 45,
        "city" => "Chicago"
    )
);
?>
<?php include_once('header.php');?>
    
    <div class="container card-width">
        <div class="container mt-5 mb-5">
                <div class="row no-gutters">
                <?php foreach($people as $key=>$value): ?>
                    <div class="col-md-6 col-lg-6">
                        <div style="position: relative;" class="card-width bg-navy">
                            <div class="  text-white">
                                <p>Nume: <span> <?= $data->firstName?></span>  </p>
                            </div>
                            <div class=" text-white">
                                <p>Prenume: <span> <?= $data->lastName?></span> </p>
                            </div>
                            <div class=" text-white">
                                <p>Ocupatie: <span> Procuror</span></p>
                            </div>
                            <div class=" text-white">
                                <p>Despre: <span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span> </p>
                            </div>
                            <div><button class="d-block m-auto btn voteaza-clasa">Voteaza</button></div>
                            <div class="continer-img">
                                    <img src="./poze/poza-vot.jpg" alt="">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                    
                    </div>
                </div>
            </div>  
        </div>
    </div>
<?php include_once('footer.php');?>

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
.continer-img img{
     border-radius: 0 10% 0 0;
}
.col-md-6 .bg-navy{
    margin: 25px 85px
}
</style>
