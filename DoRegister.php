<!DOCTYPE html>
<html lang="en">
<head>
<title>Thank you</title>
  </head>
<body>
    <h1>Thank you for registering the course</h1>
    <?php
    include "CreateConnection.php";
        $name = $_POST["txtName"];
        $course = $_POST["Course"];
        $gender = $_POST["gender"];
        $fav_book = $_POST["book"];
        $fav_car = $_POST["car"];
        $fav = $fav_book . "," . $fav_car;
        $dob = $_POST["dob"];

        $stsm = $conn->prepare("INSERT INTO RegisterCourse(studentname, 
        course, dob, gender, fav) VALUES (?,?,?,?,?)");
        $stsm->bind_param("sssss", $name, $course, $dob, $gender, $fav);
        $stsm->execute();
        $stsm->close();

    ?>
    <h3>Here is your informaiton</h3>
    <ul>
        <li><?php echo $name ?></li>
        <li><?php echo $course ?></li>
        <li><?php echo $gender ?></li>
        <li><?php echo $fav ?></li>
        <li><?php echo $dob ?></li>

    </ul>



</body>
</html>