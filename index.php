<?php include_once('header.php'); ?>
<div class="wrapper">
    <div class="card-width" style="background-color: white;">
        <h4 class="h4-login">Logare</h4>
        <form onsubmit="submitForm(event)">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1" value="">Nume utilizator</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2" value="">Parola</label>
            </div>

            <!-- Submit button -->
            <div class="m-auto w-100">
                <input type="submit" class="btn btn-primary btn-block m-auto d-block px-5" value="Logare">
                <a href="./register.php" class="m-auto d-block ">Nu am cont</a>
            </div>

    </div>
    </form>
</div>
</div>

<?php include_once('footer.php'); ?>
<style>
    .h4-login {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 3rem !important;
    }
</style>