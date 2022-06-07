<html>
    <body>

<?php

$conn = mysqli_connect("localhost", "root", "", "student");

if($conn==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

    $Name = $_GET["name"];
    $USN = $_GET["USN"];
    echo "Hai";
    $Semester = $_GET["semester"];
    $Subject1 = $_GET["Subject1"];
    $Subject2 = $_GET["Subject2"];
    $Subject3 = $_GET["Subject3"];
    $Subject4 = $_GET["Subject4"];
    $Subject5 = $_GET["Subject5"];
    $Subject6 = $_GET["Subject6"];
    $Subject7 = $_GET["Subject7"];
    $Subject8 = $_GET["Subject8"];
    $Subject9 = $_GET["Subject9"];



$sql = $conn->prepare("INSERT INTO student (`Name`,USN,Semester,Subject1,Subject2,Subject3,Subject4,Subject5,Subject6,Subject7,Subject8,Subject9) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
$sql->bind_param("ssssssssssss",$Name,$USN,$Semester,$Subject1,$Subject2,$Subject3,$Subject4,$Subject5,$Subject6,$Subject7,$Subject8,$Subject9);
$sql->execute();
mysqli_close($conn);
header("Location: http://localhost:3000/result.php");
exit();
    ?>
    </body>
</html>