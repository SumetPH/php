<?php include('check_session.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('head.php'); ?>
</head>

<body>
	<?php include('navbar.php'); ?>
	<div class="container pt-3">
		<div class="text-center p-4">
			<h3>เพิ่มคำศัพท์</h3>
		</div>
		<div class="col-md-6 offset-md-3 jumbotron">
			<form id="form" action="word_add.php" method="post" enctype="multipart/form-data">
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
							<option value="preposition">preposition</option>
							<option value="conjunction">conjunction</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="trans">คำแปล</label>
					<input name="trans" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="file">รูปภาพ</label>
					<br>
					<input name="file" type="file">
				</div>
				<button type="submit" class="btn btn-info btn-block">บันทืก</button>
				<button type="reset" class="btn btn-primary btn-block">รีเซ็ต</button>
			</form>
		</div>
	</div>
</body>

</html>