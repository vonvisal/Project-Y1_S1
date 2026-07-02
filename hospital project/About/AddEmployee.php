<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Employee Management</title>
	<link rel="stylesheet" href="/home.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
</head>

<body>
	<div class="container-fluid" style="flex-wrap: wrap;">
		<div class="row">
			<div class="col-2 bg-primary text-white fw-bold fs-5" style="height: 100vh; padding: 20px;">
				<p class="text-center display-2"><i class="bi bi-hospital"></i></p>
				<div>
					<a href="Dashboard.php" style="text-decoration: none;">
						<p class="text-white"><i class="bi bi-house"></i> dashboard</p>
					</a>
				</div>
				<div>
					<a href="Employee.php" style="text-decoration: none;">
						<p class="text-white"><i class="bi bi-person-check"></i> Employee</p>
					</a>
				</div>
				<div>
					<a href="Patient.php" style="text-decoration: none;">
						<p class="text-white"><i class="bi bi-person-wheelchair"></i> Patient</p>
					</a>
				</div>
				<div>
					<a href="Appointment.php" style="text-decoration: none;">
						<p class="text-white"><i class="bi bi-alarm"></i> Appointment</p>
					</a>
				</div>
				<div>
					<a href="#" style="text-decoration: none;">
						<p class="text-white"><i class="bi bi-gear"></i> Setting</p>
					</a>
				</div>
				<div class="col text-center position-relative" style="top: 40vh;">
					<a href="home.php">
						<button type="button" class="btn btn-danger fw-bold" style="width: 150px; height: 40px;">Log Out</button>
					</a>
				</div>
			</div>
			<div class="col text-start mt-3">
				<div class="row border border-0 border-bottom border-3 border-dark d-flex">
					<div class="col">
						<h2>Add Employee</h2>
					</div>
				</div>
				<div class="card mt-5 mx-auto shadow" style="max-width: 700px;">

					<!-- Hidden File Input -->
					<input type="file" id="imageUpload" accept="image/*" hidden>

					<!-- Image Circle -->
					<div class="d-flex justify-content-center mt-4">
						<div id="imagePreview" class="rounded-circle bg-light d-flex justify-content-center align-items-center"
							style="width:120px; height:120px; cursor:pointer; overflow:hidden;">
							<span id="uploadText">+ Add Image</span>
						</div>
					</div>

					<div class="card-body px-4">

						<!-- Name -->
						<div class="row mb-3 align-items-center">
							<label for="name" class="col-sm-3 col-form-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" placeholder="Enter name">
							</div>
						</div>

						<!-- Age + Position -->
						<div class="row mb-3">
							<label for="age" class="col-sm-3 col-form-label">Age</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="age" placeholder="Age">
							</div>

							<label for="position" class="col-sm-3 col-form-label">Position</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="position" placeholder="Position">
							</div>
						</div>

						<!-- Phone -->
						<div class="row mb-3">
							<label for="phoneNumber" class="col-sm-3 col-form-label">Phone</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number">
							</div>
						</div>

						<!-- Email -->
						<div class="row mb-3">
							<label for="email" class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="email" placeholder="Enter email">
							</div>
						</div>

						<!-- Address -->
						<div class="row mb-3">
							<label for="address" class="col-sm-3 col-form-label">Address</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="address" placeholder="Enter address">
							</div>
						</div>

						<!-- Button -->
						<div class="text-center mt-4">
							<a href="Employee.php"><button class="btn btn-danger px-4">Cancel</button></a>
							<a href="Employee.php"><button class="btn btn-primary px-4">Save</button></a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
		crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>

</html>