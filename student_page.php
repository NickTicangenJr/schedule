<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>

<body>



    <div class="table_container"><br><br><br>
        <center>
            <h1>BSIT - 1A</h1><br>
</center>
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

        </table><br>

    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <div class="col-md-6">
            <form method="POST" action="send_email.php">

                <center><button name="send" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Send</button></center>
            </form>
            <br />
            <?php
            if (isset($_SESSION['status'])) {
                if ($_SESSION['status'] == "ok") {
            ?>
                    <div class="alert alert-info"><?php echo $_SESSION['result'] ?></div>
                <?php
                } else {
                ?>
                    <div class="alert alert-danger"><?php echo $_SESSION['result'] ?></div>
            <?php
                }

                unset($_SESSION['result']);
                unset($_SESSION['status']);
            }
            ?>
        </div>
    </div><br><br>

</body>

</html>