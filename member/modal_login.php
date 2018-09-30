<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top:100px;">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header bg-navy">
				<h4 class="modal-title" id="myModalLabel">เข้าสู่ระบบ</h4>
			</div>
			<div class="modal-body text-center">
				<form class="form" action="chkmember.php" method="post">
					<div class="text-center">
						<img class="img" style="width:60%;" src="images/login_key.png" alt="ไม่เจอรูปภาพ">
					</div>
					<p>
					</p>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span>
							<input type="text" class="form-control" size="30" placeholder="Username" name="user_login">
						</div>
						<p>
						</p>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-lock"></i> </span>
							<input type="password" class="form-control" size="30" placeholder="Password" name="pass_login">
						</div>
					</div>
					<p>
					</p>
					<button type="submit" class="btn btn-success btn-block font-rsu">
						<i class="fa fa-spinner fa-spin fa-lg"></i>
						<span style="font-size:18px; font-weight:bold;">เข้าสู่ระบบ</span>
					</button>
					<button type="reset" class="btn btn-danger btn-block font-rsu"> <i class="fa fa-refresh fa-spin fa-lg"></i>
						<span style="font-size:18px; font-weight:bold;">กรอกข้อมูลใหม่</span> </button>
				</form>
			</div>
			<div class="modal-footer"> </div>
		</div>
	</div>
</div>	