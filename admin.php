
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// Creating the XMLHttpRequest object
    var request = new XMLHttpRequest();

    // Instantiating the request object
    request.open("POST","http://127.1.1.0/phpmyadmin/sql.php?db=ahmed&table=mo&pos=0?Name&Date&Email");

    // Defining event listener for readystatechange event
    request.onreadystatechange = function() {
        // Check if the request is compete and was successful
        if(this.readyState === 4 && this.status === 200) {
            // Inserting the response from server into an HTML element
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    // Sending the request to the server
    request.send();
</script>



<?php
include 'headar.php';
?>
<table>
<th>الرقم</th>
<th>اسم المريض</th>
<th>البريد الالكتروني </th>
<th> موعد الزياره </th>


<?php
include ('conncte.php');


$query = "SELECT * FROM mo";
    $result = mysqli_query($conn,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['date'] . "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "يوجد خطا ماء";
    }










?>

