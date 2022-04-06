<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>Administrator</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<style>
			.img {
				height: 100px;
				width: 100px;
			}
		</style>
	</head>

	<body>
		<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
			<?php if ($_SESSION['role'] == 'admin') { ?>
				<!-- For Admin -->

				<div class="p-3">
					<div class="card">
						<div class="card-body text-center">
							<div class="img">
								<img src="img/iict.png" class="card-img-top" alt="admin image" height="100px" width="100px">
							</div>
							<h1 class="card-title">
								<?= $_SESSION['name'] ?>
							</h1>
							<a href="logout.php" class="btn btn-outline-danger">Logout</a>
						</div>
					</div>
					<?php include 'php/members.php';
					if (mysqli_num_rows($res) > 0) { ?>

						<h3 class="display-4 fs-1">BSIT - 1A</h3>
						<table class="table" style="width: 85%" align="center">
							<!-- Table Head here -->
							<thead class="thead-dark">

								<tr>
									<th scope="col">Course No.</th>
									<th scope="col">Course Description</th>
									<th scope="col">Monday</th>
									<th scope="col">Tuesday</th>
									<th scope="col">Wednesday</th>
									<th scope="col">Thursday</th>
									<th scope="col">Friday</th>
									<th scope="col">Faculty</th>
									<th scope="col">Action</th>
								</tr>
							</thead>

							<!-- Table body here -->
							<tbody>

								<!-- Row 1 -->
								<tr>
									<th scope="row">GEC 1</th>
									<td>Understanding the Self</td>
									<td>---</td>
									<td>7:30 - 9:00</td>
									<td>---</td>
									<td>7:30 - 9:00</td>
									<td>---</td>
									<td>TX PSYCH</td>
									<td>
										<button type="button" class="btn btn-info">Edit</button>
									</td>
								</tr>

								<!-- Row 2 -->
								<tr>
									<th scope="row">GEC 2</th>
									<td>Reading in Philippine History</td>
									<td>---</td>
									<td>9:00 - 10:30</td>
									<td>---</td>
									<td>9:00 - 10:30</td>
									<td>---</td>
									<td>BANDONIL, C.</td>
									<td>
										<button type="button" class="btn btn-info">Edit</button>
									</td>
								</tr>
								<!-- Row 3 -->
								<tr>
									<th scope="row">GEC 3</th>
									<td>Mathematics in the Modern World</td>
									<td>10:30 - 12:00</td>
									<td>---</td>
									<td>10:30 - 12:00</td>
									<td>---</td>
									<td>---</td>
									<td>CALIMAG, N.</td>
									<td>
										<button type="button" class="btn btn-info">Edit</button>
									</td>
								</tr>
								<!-- Row 4 -->
								<tr>
									<th scope="row">GEC 7</th>
									<td>Ethics</td>
									<td>3:00 - 4:30</td>
									<td>---</td>
									<td>3:00 - 4:30</td>
									<td>---</td>
									<td>---</td>
									<td>PARALLAG, Q.</td>
									<td>
										<button type="button" class="btn btn-info">Edit</button>
									</td>
								</tr>
								<!-- Row 5 -->
								<tr>
									<th scope="row">IT 121</th>
									<td>Computer Programming 2</td>
									<td>1:00 - 3:00</td>
									<td>---</td>
									<td>7:30 - 10:30</td>
									<td>---</td>
									<td>--</td>
									<td>BALTAZAR, C.</td>
									<td>
										<button type="button" class="btn btn-info">Edit</button>
									</td>
								</tr>
								<!-- Row 6 -->
								<tr>
									<th scope="row">IT 122</th>
									<td>Human Computer Interaction 1</td>
									<td>---</td>
									<td>1:00 - 3:00</td>
									<td>---</td>
									<td>1:00 - 4:00</td>
									<td>---</td>
									<td>CULLANAN, C.</td>
									<td>
										<button type="button" class="btn btn-info">Edit</button>
									</td>
								</tr>
								<!-- Row 7 -->
								<tr>
									<th scope="row">IT 123</th>
									<td>Discrete Mathematics</td>
									<td>---</td>
									<td>10:30 - 12:00</td>
									<td>---</td>
									<td>10:30 - 12:00</td>
									<td>---</td>
									<td>BANIQUED, M.</td>
									<td>
										<button type="button" class="btn btn-info">Edit</button>
									</td>
								</tr>
								<!-- Row 8 -->
								<tr>
									<th scope="row">PE 2</th>
									<td>Physical Activity Towards Health Fitness II (Exercise Program)</td>
									<td>---</td>
									<td>---</td>
									<td>1:00 - 3:00</td>
									<td>---</td>
									<td>---</td>
									<td>CENDAÑA</td>
									<td>
										<button type="button" class="btn btn-info">Edit</button>
									</td>
								</tr>
								<!-- Row 9 -->
								<tr>
									<th scope="row">NSTP</th>
									<td>CWTS/MS/LTS</td>
									<td>---</td>
									<td>---</td>
									<td>---</td>
									<td>---</td>
									<td>---</td>
									<td>---</td>
									<td>
										<button type="button" class="btn btn-info">Edit</button>
									</td>
								</tr>

							</tbody>
							<tfoot>
								<tr>
									<td>
										<form method="POST" action="send_email.php">

											<div class="form-group">
												<!-- <label>Email:</label> -->
												<!-- <input type="email" class="form-control" name="email" required="required" /> -->
												<!-- <input type="email" class="form-control" name="email" required="required" /> -->
												<!-- </div> -->
												<!-- <div class="form-group"> -->
												<!-- <label>Subject</label>
												<input type="text" class="form-control" name="subject" required="required" />
											</div>
											<div class="form-group">
												<label>Message</label>
												<input type="text" class="form-control" name="message" required="required" />
											</div> -->
												<center>
													<button name="send" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Send</button>
												</center>

										</form>
										<?php
										if (isset($_SESSION['status'])) {
											if ($_SESSION['status'] == "ok") {
										?>
												<div class="alert alert-info""><?php echo $_SESSION['result'] ?></div>
												<?php
											} else {
												?>
													<div class=" alert alert-danger"><?php echo $_SESSION['result'] ?></div>
										<?php
											}

											unset($_SESSION['result']);
											unset($_SESSION['status']);
										}
										?><br><br><br>
									</td>
								</tr>
							</tfoot>

						</table><br>
					<?php } ?>
				</div><br>


				<br />

			<?php } else { ?>

				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->
				<!-- FORE USERS -->


				<div class="p-3">
					<div class="card">
						<div class="card-body text-center">
							<div class="img">
								<img src="img/iict.png" class="card-img-top" alt="admin image" height="100px" width="100px">
							</div>
							<h1 class="card-title">
								<?= $_SESSION['name'] ?>
							</h1>
							<a href="logout.php" class="btn btn-outline-danger">Logout</a>
						</div>
					</div>
					<?php include 'php/members.php';
					if (mysqli_num_rows($res) > 0) { ?>

						<h3 class="display-4 fs-1">BSIT - 1A</h3>
						<table class="table" style="width: 85%" align="center">
							<!-- Table Head here -->
							<thead class="thead-dark">

								<tr>
									<th scope="col">Course No.</th>
									<th scope="col">Course Description</th>
									<th scope="col">Monday</th>
									<th scope="col">Tuesday</th>
									<th scope="col">Wednesday</th>
									<th scope="col">Thursday</th>
									<th scope="col">Friday</th>
									<th scope="col">Faculty</th>
								</tr>
							</thead>

							<!-- Table body here -->
							<tbody>

								<!-- Row 1 -->
								<tr>
									<th scope="row">GEC 1</th>
									<td>Understanding the Self</td>
									<td>---</td>
									<td>7:30 - 9:00</td>
									<td>---</td>
									<td>7:30 - 9:00</td>
									<td>---</td>
									<td>TX PSYCH</td>
								</tr>

								<!-- Row 2 -->
								<tr>
									<th scope="row">GEC 2</th>
									<td>Reading in Philippine History</td>
									<td>---</td>
									<td>9:00 - 10:30</td>
									<td>---</td>
									<td>9:00 - 10:30</td>
									<td>---</td>
									<td>BANDONIL, C.</td>
								</tr>
								<!-- Row 3 -->
								<tr>
									<th scope="row">GEC 3</th>
									<td>Mathematics in the Modern World</td>
									<td>10:30 - 12:00</td>
									<td>---</td>
									<td>10:30 - 12:00</td>
									<td>---</td>
									<td>---</td>
									<td>CALIMAG, N.</td>
								</tr>
								<!-- Row 4 -->
								<tr>
									<th scope="row">GEC 7</th>
									<td>Ethics</td>
									<td>3:00 - 4:30</td>
									<td>---</td>
									<td>3:00 - 4:30</td>
									<td>---</td>
									<td>---</td>
									<td>PARALLAG, Q.</td>
								</tr>
								<!-- Row 5 -->
								<tr>
									<th scope="row">IT 121</th>
									<td>Computer Programming 2</td>
									<td>1:00 - 3:00</td>
									<td>---</td>
									<td>7:30 - 10:30</td>
									<td>---</td>
									<td>--</td>
									<td>BALTAZAR, C.</td>
								</tr>
								<!-- Row 6 -->
								<tr>
									<th scope="row">IT 122</th>
									<td>Human Computer Interaction 1</td>
									<td>---</td>
									<td>1:00 - 3:00</td>
									<td>---</td>
									<td>1:00 - 4:00</td>
									<td>---</td>
									<td>CULLANAN, C.</td>
								</tr>
								<!-- Row 7 -->
								<tr>
									<th scope="row">IT 123</th>
									<td>Discrete Mathematics</td>
									<td>---</td>
									<td>10:30 - 12:00</td>
									<td>---</td>
									<td>10:30 - 12:00</td>
									<td>---</td>
									<td>BANIQUED, M.</td>
								</tr>
								<!-- Row 8 -->
								<tr>
									<th scope="row">PE 2</th>
									<td>Physical Activity Towards Health Fitness II (Exercise Program)</td>
									<td>---</td>
									<td>---</td>
									<td>1:00 - 3:00</td>
									<td>---</td>
									<td>---</td>
									<td>CENDAÑA</td>
								</tr>
								<!-- Row 9 -->
								<tr>
									<th scope="row">NSTP</th>
									<td>CWTS/MS/LTS</td>
									<td>---</td>
									<td>---</td>
									<td>---</td>
									<td>---</td>
									<td>---</td>
									<td>---</td>
								</tr>

							</tbody>

						</table><br>
					<?php } ?>
				</div><br>


				<br />
			<?php } ?>
		</div>
	</body>

	</html>
<?php } else {
	header("Location: index.php");
} ?>