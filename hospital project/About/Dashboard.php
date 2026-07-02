<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Dashboard</title>
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
					<a href="/home.php">
						<button type="button" class="btn btn-danger fw-bold" style="width: 150px; height: 40px;">Log Out</button>
					</a>
				</div>
			</div>
			<div class="col text-start mt-3">
				<h2 class="border border-0 border-bottom border-3 border-dark">Dashboard</h2>
				<div class="row">
					<div class="col">
						<a href="Patient.php" style="text-decoration: none;">
							<div class="card p-2 bg-danger">
								<div class="card-body">
									<div class="row">
										<div class="col text-center">
											<h3>180</h3>
											<h4>Patient</h4>
										</div>
										<div class="col-4">
											<i class="bi bi-person-wheelchair" style="font-size: 60px;"></i>
										</div>
									</div>
								</div>
							</div>
						</a>

					</div>
					<div class="col">
						<a href="Employee.php" style="text-decoration: none;">
							<div class="card p-2 bg-primary">
								<div class="card-body">
									<div class="row">
										<div class="col text-center">
											<h3>8</h3>
											<h4>Employee</h4>
										</div>
										<div class="col-4">
											<i class="bi bi-person-check" style="font-size: 60px;"></i>
										</div>
									</div>
								</div>
							</div>
						</a>

					</div>
				</div>


				<div class="row mt-4">
					<div class="col">
						<a href="Appointment.php" style="text-decoration: none;">
							<div class="card p-2 bg-success">
								<div class="card-body">
									<div class="row">
										<div class="col text-center">
											<h3>20</h3>
											<h4>Appointment</h4>
										</div>
										<div class="col-4">
											<i class="bi bi-alarm" style="font-size: 60px;"></i>
										</div>
									</div>
								</div>
							</div>
						</a>

					</div>
					<div class="col">
						<a href="pluspatient.php" style="text-decoration: none;">
							<div class="card p-2 bg-warning">
								<div class="card-body">
									<div class="row">
										<div class="col text-center mt-4">

											<h4>+Add Patient</h4>
										</div>
										<div class="col-4">
											<i class="bi bi-person-wheelchair" style="font-size: 60px;"></i>
										</div>
									</div>
								</div>
							</div>
						</a>

					</div>
				</div>
				<div class="row mt-4">
					<div class="col">
						<a href="addappointment.php" style="text-decoration: none;">
							<div class="card p-2 bg-info">
								<div class="card-body">
									<div class="row">
										<div class="col text-center mt-3">
											<h4>+Add Appointment</h4>
										</div>
										<div class="col-4">
											<i class="bi bi-bookmark-plus-fill" style="font-size: 60px;"></i>
										</div>
									</div>
								</div>
							</div>
						</a>

					</div>
					<div class="col">

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