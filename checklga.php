<?php
session_start();
include 'config.php';

$result="";
$sum = 0;
if ($_SERVER['REQUEST_METHOD']==="POST" ) {
$lga=$_POST['lga'];





$check_pol_unit = mysqli_query($conn, "SELECT * FROM polling_unit WHERE lga_id='$lga'");
$count = mysqli_num_rows($check_pol_unit);
if ($count > 0) {
    while ($ch=mysqli_fetch_assoc($check_pol_unit)) {
        $u_id=$ch['uniqueid'];


        $pu_result = "SELECT party_abbreviation, SUM(party_score) AS total_score FROM announced_pu_results WHERE polling_unit_uniqueid = '$u_id'";
        $results = $conn->query($pu_result);
        if ($results->num_rows > 0) {
            while($me = $results->fetch_assoc()) {
                
                $party_score = $me['total_score'];
                $party = $me['party_abbreviation'];

            }
            
        $result .= "<p>Party : ".$party." and Party Score : ".$party_score."</p>";
        }else{
            $result = "not available";
        }




}

}else{
    $result .= "<option value='' selected='selected'>Choose LGA</option>";
}


echo $result;

}
?>