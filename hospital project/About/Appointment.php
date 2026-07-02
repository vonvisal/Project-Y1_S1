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
            <h2>Appointment</h2>
          </div>
          <div class="col text-end">
            <a href="Addappointment.php">
              <button type="button" class="btn btn-primary fw-bold" style="width: 200px; height: 40px;">+Add
                Appointment</button>
            </a>
          </div>
        </div>

        <div class="text-center mt-4 mb-4">
          <label for="Doctor Name" class="fw-bold fs-5">Doctor Name</label>
          <select name="" id="" style="width: 120px; height: 30px;" class="rounded-2">
            <option value="All">All</option>
            <option value="Dr.Aizen">Dr.Aizen</option>
            <option value="Dr.Jacob">Dr.Jacob</option>
            <option value="Dr.John">Dr.John</option>
          </select>
          <input type="text" placeholder="Search" id="searchInput" class="text-center rounded-2" style="background-color: rgb(229, 230, 231);">
          <button style="width: 30px;" id="searchBtn" class="rounded-2 text-end bg-primary"><i class="bi bi-zoom-in"></i></button>
        </div>
        <table class="table border-black border-3 mt-2">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Patient Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Doctor Name</th>
              <th scope="col">Time</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">001</th>
              <td>sal</td>
              <td>M</td>
              <td>Dr.Aizen</td>
              <td>2:00pm</td>
              <td>
                <button class="btn btn-sm btn-primary">View</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <th scope="row">002</th>
              <td>hour</td>
              <td>M</td>
              <td>Dr.John</td>
              <td>7:00am</td>
              <td>
                <button class="btn btn-sm btn-primary">View</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <th scope="row">003</th>
              <td>sombath</td>
              <td>M</td>
              <td>Dr.Jacob</td>
              <td>12:00am</td>
              <td>
                <button class="btn btn-sm btn-primary">View</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>

  <script src="script.js"></script>
</body>

</html>