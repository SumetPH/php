<?php 
	include('check_session.php'); 
	$id = $_GET[id];
	$word = $_GET[word];
	$type = $_GET[type];
	$trans = $_GET[trans];
	$image = $_GET[image];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit Word</title>
	<link rel="stylesheet" href="css/superhero.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<?php include('navbar.php'); ?>
	<div class="container pt-3">
		<div class="text-center p-4">
			<h3>แก้ไขคำศัพท์</h3>
			<?php echo $type; ?>
		</div>
		<div class="col-md-6 offset-md-3 jumbotron">
			<form action="word_edit.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label for="word">คำศัพท์</label>
							<input type="hidden" name="id" value="<?= $id ?>">
							<input name="word" class="form-control" type="text" value="<?= $word ?>">
						</div>
					</div>
					<div class="col-md-3">
						<label for="type">ประเภท</label>
						<select name="type" class="custom-select" name="type">
							<option <? if($type == 'noun') echo "selected"; ?> value="noun">noun</option>
							<option <? if($type == 'verb') echo "selected"; ?> value="verb"  >verb</option>
							<option <? if($type == 'adjective') echo "selected"; ?> value="adjective">adjective</option>
							<option <? if($type == 'adverb') echo "selected"; ?> value="adverb">adverb</option>
							<option <? if($type == 'preposition') echo "selected"; ?> value="preposition">preposition</option>
							<option <? if($type == 'conjunction') echo "selected"; ?> value="conjunction">conjunction</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="trans">คำแปล</label>
					<input name="trans" class="form-control" type="text" value="<?= $trans ?>">
				</div>
				<div id="example_img">
					<label>ตัวอย่างรูปภาพ</label>
					<img class="img-fluid" src="<?= $image ?>" alt="">
				</div>
				<div class="form-group">
					เปลื่ยนรูปภาพ :
					<input type="checkbox" name="chk_img" id="chk_img" value="1">
				</div>
				<div id="file_img" class="form-group" style="display:none">
					<label for="image">รูปภาพ</label>
					<br>
					<input name="file" type="file">
				</div>
				<input type="hidden" value="<?= $image ?>" name="image">
				<button type="submit" class="btn btn-info btn-block">บันทืก</button>
				<button type="reset" class="btn btn-primary btn-block">รีเซ็ต</button>
			</form>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$("#chk_img").change(function () {
				if ($(this).is(":checked")) {
					$("#file_img").css("display", "block")
					$("#example_img").css("display", "none")
				} else {
					$("#file_img").css("display", "none")
					$("#example_img").css("display", "block")
				}
			})
		})
	</script>
</body>

</html>