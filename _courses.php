<?php

include '_dbconnect.php';

if(!empty($_POST))
{
    try
    {
        $reg_username = $_POST['username'];
        $reg_cid = $_POST['cid'];
        $eligible = 1;

        $attempted_sql = "SELECT * FROM `oep_users_results` WHERE username = '$reg_username' AND cid = '$reg_cid';";
        $attempted = mysqli_query($conn, $attempted_sql);

        if (mysqli_num_rows($attempted) >= 2) {
            $eligible = 0;
        }

        $register_sql = "INSERT INTO `oep_test_status` (`username`, `cid`, `response_key`, `completed`, `eligible`, `timestamp`) VALUES ('$reg_username', '$reg_cid', NULL, '0', '$eligible', current_timestamp());";

        $registered = mysqli_query($conn, $register_sql);

    }
    catch(Exception $e)
    {
        echo "Something went wrong.";
        echo $e;
    }


}


?>

<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script>

    $('.actionbtn').hide();
    $('.actionbtn.registerbtn').show();

    <?php

    $myusername = $_SESSION['username'];

    $course_status = "SELECT cid, completed, eligible FROM oep_test_status WHERE username = '$myusername';";
    $result = mysqli_query($conn, $course_status);


    while($row = mysqli_fetch_assoc($result))
    {

        $completed = $row['completed'];
        $eligible = $row['eligible'];
        $cid = $row['cid'];

        if(!$completed)
        {
            $btn = "startTestbtn";
        }
        else
        {
            if(!$eligible)
            {
                $btn = "notEligiblebtn";
            }
            else
            {
                $btn = "registerbtn";
            }
        }

        // echo "console.log('hi this echo in courses php');";
        echo "$('#".$cid.">.actionbtn').hide();";
        echo "$('#".$cid.">.".$btn."').show();";
    }

    ?>

</script>
<script>

    $('.registerbtn').click(function(event){

        let id = this.id;

        let cid = id.split("_id")[0];

        username = "<?= $_SESSION['username'] ?>";

        let xhr = new XMLHttpRequest();

        xhr.open("POST", '_courses.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){

            if(this.status === 200)
            {
                $(`#${id}.actionbtn`).hide();
                $(`#${id}.startTestbtn`).show();
            }
        }

        params = `cid=${cid}&username=${username}`;
        xhr.send(params);

    })    

</script>