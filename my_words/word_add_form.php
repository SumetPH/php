<?php include('check_session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add Word</title>
	<link rel="stylesheet" href="css/superhero.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php include('navbar.php'); ?>
	<div class="container pt-3">
		<div class="text-center p-4">
			<h3>เพิ่มคำศัพท์</h3>
		</div>
		<div class="col-md-6 offset-md-3 jumbotron">
			<form action="word_add.php" method="post">
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label for="word">คำศัพท์</label>
							<input name="word" class="form-control" type="text">
						</div>
					</div>
					<div class="col-md-3">
						<label for="type">ประเภท</label>
						<select name="type" class="custom-select" name="type">
							<option value="noun">noun</option>
							<option value="verb">verb</option>
							<option value="adjective">adjective</option>
							<option value="adverb">adverb</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="trans">คำแปล</label>
					<input name="trans" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="image">รูปภาพ (url)</label>
					<input name="image" class="form-control" type="text">
				</div>
				<button type="submit" class="btn btn-info btn-block">บันทืก</button>
				<button type="reset" class="btn btn-primary btn-block">รีเซ็ต</button>
			</form>
		</div>
	</div>
</body>
</html>