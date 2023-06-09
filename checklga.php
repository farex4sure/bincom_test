<?php
session_start();
include 'config.php';

$result="";
$result2="";
$sum = 0;
if ($_SERVER['REQUEST_METHOD']==="POST" ) {
$lga=$_POST['lga'];


$check_pol_unit = mysqli_query($conn, "SELECT * FROM polling_unit WHERE lga_id='$lga'");
$count = mysqli_num_rows($check_pol_unit);
if ($count > 0) {
    while ($ch=mysqli_fetch_assoc($check_pol_unit)) {
        $u_id=$ch['uniqueid'];
        $u_name=$ch['polling_unit_name'];


        
        $pu_result = "SELECT SUM(party_score) AS total_score FROM announced_pu_results WHERE polling_unit_uniqueid = '$u_id'";
        $results = $conn->query($pu_result);
        if ($results->num_rows > 0) {
            while($me = $results->fetch_assoc()) {
                
                $party_score = $me['total_score'];
                // $amounts[] = $datas['amounts'];


            }
        if(empty($party_score)){
            // $result2 .= "not available";
        }else{
            
        $result .= $party_score.",";

        $string = $result;
        $numbers = explode(',', $string);
        $sum = array_sum($numbers);

        $result = $sum.","; // Output: 24692

        

        // echo $sum;

        }

        }else{
            $result2 .= "not available";
        }




}

}else{
    // $result2 .= "<option value='' selected='selected'>No Polling unit found</option>";
}


echo $result2;
// echo $result;

$number = str_replace(',', '', $result);


$my_lga = mysqli_query($conn, "SELECT * FROM lga WHERE lga_id='$lga'");
$countss = mysqli_num_rows($my_lga);
if ($countss > 0) {
    while ($che=mysqli_fetch_assoc($my_lga)) {
        $the_name=$che['lga_name'];
    }

echo "Total Votes for ".$the_name." is ".$number; // Output: 4780
}


}
?>