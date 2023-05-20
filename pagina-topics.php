<?php include_once('header.php');?>
<div style="height:200px"></div>
<div class="container">
	<div class="row">

		<?php
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

        foreach ($people as $key => $person) {
			echo '<div class="col-lg-4 col-md-6 col-sm-12 mb-3">
				<div class="card">
					<div class="card-body">
                    <div class="d-flex">
                    <h5 style="margin-right:10px" class="card-title ">' . $person['name'] . '</h5>
                    <input class="form-check-input" type="radio" name="person" id="person-' . $key . '" value="' . $person['name'] . '">
                    </div>
						
						<p class="card-text">Age: ' . $person['age'] . '</p>
						<p class="card-text">City: ' . $person['city'] . '</p>
					
					</div>
				</div>
			</div>';
		}
		?>
        <div>
            <button type="button" class="btn btn-primary m-auto d-block">Voteaza</button>
        </div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<?php include_once('footer.php');?>
