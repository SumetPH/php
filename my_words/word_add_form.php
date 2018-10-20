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
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="trans">คำแปล</label>
					<input name="trans" class="form-control" type="text">
				</div>
				<div class="form-group">
					<span>รูปภาพ (File) : </span>
					<input type="radio" name="img_select" value="file" checked>
					<span style="padding-left: 1rem;">รูปภาพ (Url) : </span>
					<input type="radio" name="img_select" value="url">
				</div>
				<div id="f_file" class="form-group">
					<input type="file" name="file">
				</div>
				<div id="f_url" class="form-group" style="display: none">
					<input name="url" class="form-control" type="text">
				</div>
				<button type="submit" class="btn btn-info btn-block">บันทืก</button>
				<button type="reset" class="btn btn-primary btn-block">รีเซ็ต</button>
			</form>
		</div>
	</div>

	<script>
		$(document).ready(function () {
			$("#form input").on("change", function () {
				$r_value = $("#form input[name=img_select]:checked").val();
				if ($r_value == "file") {
					$("#f_url").css("display", "none");
					$("#f_file").css("display", "block");
				}
				if ($r_value == "url") {
					$("#f_url").css("display", "block");
					$("#f_file").css("display", "none");
				}
			})
		})
	</script>
</body>

</html>