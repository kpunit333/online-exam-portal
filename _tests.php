<?php

// session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

include '_dbconnect.php';

$myusername = $_SESSION['username'];

$test_sql = "SELECT cname, oep_test_status.cid
    FROM oep_courses
    INNER JOIN oep_test_status
    ON oep_courses.cid = oep_test_status.cid 
    WHERE oep_test_status.username = '$myusername' AND oep_test_status.completed = '0';";

$test_list = mysqli_query($conn, $test_sql);

if (mysqli_num_rows($test_list) == 0) 
{
    echo '<div class="inst-head">You have not registered in any course yet.</div>';

} 
else 
{
    $thead = "<thead>
    <tr>
        <td>Sl.no.</td>
        <td>Course name</td>
        <td>No. of attempts left</td>
        <td>Start your test</td>
    </tr>
</thead>";

    echo $thead;    
    echo "<tbody>";
    $i = 1;


    while ($row = mysqli_fetch_assoc($test_list)) 
    {
        $start_test_cid = $row['cid'];

        $num_attempted_left_sql = "SELECT * FROM `oep_test_status` WHERE username = '$myusername' AND cid = '$start_test_cid' AND completed = '1';";
        $num_attempted_left_result = mysqli_query($conn, $num_attempted_left_sql);

        $cname = $row['cname'];
        $num_attempted_left = 3 - mysqli_num_rows($num_attempted_left_result);

        $tr = '<tr>
        <td>' . $i . '</td>
        <td>' . $cname . '</td>
        <td>'.$num_attempted_left.'</td>
        <td><a href="#">Start test<i
            class="bi bi-arrow-right"></i></a></td>
    </tr>';

        echo $tr;

        $i = $i + 1;
    }
    echo "</tbody>";
}

?>
