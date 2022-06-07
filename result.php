<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SGPA Calculator</title>
    <link rel="icon" href="cal1.png">
    <script data-ad-client="ca-pub-1137844533742687" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Chela+One|Fira+Sans|Lato|Roboto|Ubuntu|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- JQuery script -->

    <!-- GreenSock JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <script src="main.js"></script>
</head>

<body>

    <div class="topnav" cellspacing="10">

        <a href="index.html">SGPA & CGPA calculator</a>

        <a href="index.html">Calculator</a>

        <a href="save.html">Save</a>

        <a class="active" href="#">Result</a>"

        <a href="about.html">About</a>

        <a href="how.html">How it works</a>

    </div>

    <div class="container-fluid main">
        <h1>Students Result</h1>
        <div class="col1">
            <form action="" method="post" class="form-horizontal">
                <label> Enter your USN </label><input class="box1" type="text" name="get_usn"><br>
                <input name="search_by_usn" class="btn btn-success sgpaCalculate" type="submit">
            </form>
        </div>
        <?php
        $connection = mysqli_connect("localhost", "root", "", "student");
        if (isset($_POST['search_by_usn'])) {
            $id = $_POST['get_usn'];
            $query = "SELECT * FROM student WHERE USN='$id' ";
            $query_run = mysqli_query($connection, $query);

        ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="head1">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">USN</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Subject 1</th>
                            <th scope="col">Subject 2</th>
                            <th scope="col">Subject 3</th>
                            <th scope="col">Subject 4</th>
                            <th scope="col">Subject 5</th>
                            <th scope="col">Subject 6</th>
                            <th scope="col">Subject 7</th>
                            <th scope="col">Subject 8</th>
                            <th scope="col">Subject 9</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_array($query_run)) {


                        ?>

                                <tr>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['USN']; ?></td>
                                    <td><?php echo $row['Semester']; ?></td>
                                    <td><?php echo $row['Subject1']; ?></td>
                                    <td><?php echo $row['Subject2']; ?></td>
                                    <td><?php echo $row['Subject3']; ?></td>
                                    <td><?php echo $row['Subject4']; ?></td>
                                    <td><?php echo $row['Subject5']; ?></td>
                                    <td><?php echo $row['Subject6']; ?></td>
                                    <td><?php echo $row['Subject7']; ?></td>
                                    <td><?php echo $row['Subject8']; ?></td>
                                    <td><?php echo $row['Subject9']; ?></td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "data not found";
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        <?php
        }
        ?>
    </div>
    <center>
        <footer class="footer3"> Copyright © 2021 TIE Project. All Rights Reserved</footer>
    </center>
</body>

</html>