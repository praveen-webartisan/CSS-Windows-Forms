<!DOCTYPE html>
<html>
<head>
	<title>Windows Application Like Design For Web Application | Test Programs</title>
	<link rel="stylesheet" type="text/css" href="assets/css/windows-application-style.css">
</head>
<body>
	<div id="main-container">
		<div id="main-menu">
			<ul>
				<li class="has-submenu">
					<a href="javascript:void(0);">File</a>
					<ul>
						<li><a href="javascript:void(0);">New</a></li>
						<li><a href="javascript:void(0);">Open</a></li>
						<li><a href="javascript:void(0);">Save</a></li>
						<hr>
						<li><a href="javascript:void(0);" id="menuItemQuit">Quit</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);">Edit</a></li>
			</ul>
		</div>
		<div id="main-content">
			<h3>Example Form</h3>
			<div class="col-6">
				<div class="row">
					<div class="field-group col-6">
						<label class="form-label col-3">Name</label>
						<input type="text" class="form-field col-9" name="">
					</div>
					<div class="field-group col-6">
						<label class="form-label col-3">Email</label>
						<input type="text" class="form-field col-9" name="">
					</div>
				</div>
				<div class="row">
					<div class="field-group col-6">
						<label class="form-label col-3">Phone</label>
						<input type="text" class="form-field col-9" name="">
					</div>
					<div class="field-group col-6">
						<label class="form-label col-3">DOB</label>
						<input type="text" class="form-field col-9" name="">
					</div>
				</div>
				<div class="row">
					<fieldset class="w-49p">
						<legend>Gender</legend>
						<div>
							<div class="field-group">
								<input type="radio" class="form-field" name="gender">
								<label class="form-label">Male</label>
							</div>
							<div class="field-group">
								<input type="radio" class="form-field" name="gender">
								<label class="form-label">Female</label>
							</div>
						</div>
					</fieldset>
					<fieldset class="w-49p">
						<legend>Qualifications</legend>
						<div>
							<div class="field-group">
								<input type="checkbox" class="form-field" name="qualifications">
								<label class="form-label">SSLC</label>
							</div>
							<div class="field-group">
								<input type="checkbox" class="form-field" name="qualifications">
								<label class="form-label">HSLC</label>
							</div>
							<div class="field-group">
								<input type="checkbox" class="form-field" name="qualifications">
								<label class="form-label">Diploma</label>
							</div>
							<div class="field-group">
								<input type="checkbox" class="form-field" name="qualifications">
								<label class="form-label">UG</label>
							</div>
							<div class="field-group">
								<input type="checkbox" class="form-field" name="qualifications">
								<label class="form-label">PG</label>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="row">
					<div class="field-group col-6">
						<label class="form-label col-3">Address</label>
						<textarea class="form-field col-9 resize-none" rows="4"></textarea>
					</div>
					<div class="field-group col-6">
						<div class="row">
							<label class="form-label col-3">City</label>
							<input type="text" class="form-field col-9" name="">
						</div>
						<div class="row">
							<label class="form-label col-3">State</label>
							<input type="text" class="form-field col-9" name="">
						</div>
						<div class="row">
							<label class="form-label col-3">Country</label>
							<select class="form-field col-9">
								<option></option>
								<option value="ind">India</option>
								<option value="sl">Sri Lanka</option>
								<option value="ban">Bangladesh</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal tiny-modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-header">
				<div class="modal-title">WALD</div>
				<div class="modal-header-action">
					<a class="modal-button modal-close">
						&#x274c;
					</a>
				</div>
			</div>
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-body-content">
						Are you sure you want to exit?
					</div>
				</div>
				<div class="modal-footer">
					<a class="modal-button modal-close" href="javascript:void(0);">Yes</a>
					<a class="modal-button modal-close" href="javascript:void(0);">No</a>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/windows-application-style.js"></script>
</body>
</html>