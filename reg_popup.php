<!-- <div id="myModal" class="modal fade" style="z-index: 999999;">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content" style="width: 100%;">
			<div class="modal-header">

				<h4 class="modal-title">Add User Member</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="add_user.php" method="post">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>ชื่อ</label>
							<input type="text" class="form-control" name="firstname" placeholder="Firstname" required="required">
						</div>
						<div class="form-group col-md-6">
							<label>นามสกุล</label>
							<input type="text" class="form-control" name="surname" placeholder="Lastname" required="required">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Email</label>
							<input type="text" class="form-control" name="email" placeholder="Email" required="required">
						</div>

						<div class="form-group col-md-6">
							<label> User Level</label>
							<div class="col-sm-12">
								<select class="form-control" name='proof'>
									<option value='user'>user</option>
									<option value='admin'>admin</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>วัน/เดือน/ปี เกิด</label>
							<input type="date" class="form-control" name="birthday" placeholder="18/01/1998" required="required">
						</div>
						<div class="form-group col-md-6">
							<label>โรงเรียน</label>
							<input type="text" class="form-control" name="school" placeholder="เช่น Homeschool" required="required">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>ชันเรียน</label>
							<input type="text" class="form-control" name="class" placeholder="เช่น มัทธยมศึกษาปีที่ 1" required="required">
						</div>
						<div class="form-group col-md-6">
							<label>ชื่อผู้ปกครอง</label>
							<input type="text" class="form-control" name="parent_name" placeholder="สมใจ(แม่สม)" required="required">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>เบอร์โทรผู้ปกครอง</label>
							<input type="text" class="form-control" name="parent_phone" placeholder="เช่น 08x-xxx-xxxx" required="required">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>รหัสผ่าน</label>
							<input type="password" class="form-control" name="password" placeholder="Password" required="required">
						</div>
						<div class="form-group col-md-6">
							<label>ยืนยัน รหัสผ่าน</label>
							<input type="password" class="form-control" name="psw-repeat" placeholder="Repeat Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">เพิ่มผู้ใช้</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add User Member
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add User Member</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="add_user.php" method="post">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>ชื่อ</label>
							<input type="text" class="form-control" name="firstname" placeholder="Firstname" required="required">
						</div>
						<div class="form-group col-md-6">
							<label>นามสกุล</label>
							<input type="text" class="form-control" name="surname" placeholder="Lastname" required="required">
						</div>
						<div class="form-group col-md-6">
							<label>ชื่อเล่น</label>
							<input type="text" class="form-control" name="nickname" placeholder="ชื่อเล่น" required="required">
						</div> 
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Email</label>
							<input type="text" class="form-control" name="email" placeholder="Email" required="required">
						</div>
					
					

						<div class="form-group col-md-6">
							<label> User Level</label>
							<div class="col-sm-12">
								<select class="form-control" name='proof'>
									<option value='1'>Student</option>
									<option value='0'>Admin</option>
								</select>
							</div>
						</div>

						<div class="form-group col-md-6">
							<label> Section</label>
							<div class="col-sm-12">
								<select class="form-control" name='section'>
									<option value='0'>Admin/Teacher</option>
									<option value='1'>Section 1</option>
									<option value='2'>Section 2</option>
									<option value='3'>Section 3</option>
									<option value='4'>Section 4</option>
								</select>
							</div>
						</div>

					</div>
					<!-- <div class="form-row">
						<div class="form-group col-md-6">
							<label>วัน/เดือน/ปี เกิด</label>
							<input type="date" class="form-control" name="birthday" placeholder="18/01/1998" required="required">
						</div>
						<div class="form-group col-md-6">
							<label>โรงเรียน</label>
							<input type="text" class="form-control" name="school" placeholder="เช่น Homeschool" required="required">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>ชันเรียน</label>
							<input type="text" class="form-control" name="class" placeholder="เช่น มัทธยมศึกษาปีที่ 1" required="required">
						</div>
						<div class="form-group col-md-6">
							<label>ชื่อผู้ปกครอง</label>
							<input type="text" class="form-control" name="parent_name" placeholder="สมใจ(แม่สม)" required="required">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>เบอร์โทรผู้ปกครอง</label>
							<input type="text" class="form-control" name="parent_phone" placeholder="เช่น 08x-xxx-xxxx" required="required">
						</div>
					</div> -->
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>รหัสผ่าน</label>
							<input type="password" class="form-control" name="password" placeholder="Password" required="required">
						</div>
						<div class="form-group col-md-6">
							<label>ยืนยัน รหัสผ่าน</label>
							<input type="password" class="form-control" name="psw-repeat" placeholder="Repeat Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">เพิ่มผู้ใช้</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>