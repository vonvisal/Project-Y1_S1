<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Appointment Management</title>
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
						<h2>Add Appointment</h2>
					</div>
				</div>
				<div class="mt-3 text-center">
					<h3><i class="bi bi-calendar-check"></i>Follow Up</h3>
				</div>
				<div class="card mt-5 mx-auto shadow" style="max-width: 600px;">
					<div class="card-body">

						<h4 class="text-center mb-4 fw-bold">Add Appointment</h4>

						<!-- Doctor Name -->
						<div class="mb-3 row justify-content-center align-items-center">
							<label for="name" class="col-sm-4 col-form-label text-end">Doctor Name</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="name" placeholder="Enter doctor name">
							</div>
						</div>

						<!-- Date -->
						<div class="mb-3 row justify-content-center align-items-center">
							<label for="date" class="col-sm-4 col-form-label text-end">Date</label>
							<div class="col-sm-6">
								<input type="date" class="form-control" id="date">
							</div>
						</div>

						<!-- Note -->
						<div class="mb-3 row justify-content-center align-items-center">
							<label for="note" class="col-sm-4 col-form-label text-end">Note</label>
							<div class="col-sm-6">
								<textarea class="form-control" id="note" rows="3" placeholder="Enter note"></textarea>
							</div>
						</div>

						<!-- Buttons -->
						<div class="text-center mt-4">
							<button type="button" class="btn btn-secondary me-2" onclick="window.history.back();">Cancel</button>
							<a href="Appointment.php"><button type="button" class="btn btn-primary">Save</button></a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
		crossorigin="anonymous"></script>
</body>

</html>