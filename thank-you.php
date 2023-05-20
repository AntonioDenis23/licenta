<script>
var seconds = 5; // seconds for HTML
var foo; // variable for clearInterval() function

function redirect() {
    document.location.href = './index.php';
}

function updateSecs() {
    document.getElementById("seconds").innerHTML = seconds;
    seconds--;
    if (seconds == -1) {
        clearInterval(foo);
        redirect();
    }
}

function countdownTimer() {
    foo = setInterval(function () {
        updateSecs()
    }, 1000);
}

countdownTimer();
</script>
<?php include_once('header.php');?>
    <div class="wrapper">
        <div class="card-width">
            <h4 class="h4-login">Thank you for voting</h4>
            <h5 class="h5-login w-100 text-center" >You will be redirected in <span id="seconds">5</span></h5>
            
        </div>
        </div>

<?php include_once('footer.php');?>
<style>
    .h4-login {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 3rem!important;
    }
    .h5-login {
        text-align: center;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 3rem!important;
    }
    #seconds {
        text-align: center;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 3rem!important;
    }
    .wrapper-header {
        display: none;
    }
</style>