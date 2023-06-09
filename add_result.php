<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD']==="POST" ) {
    $polling_unit=$_POST['polling_unit'];
    $score=$_POST['score'];
    $party=$_POST['party'];

    if(empty($polling_unit)){
        echo '
        <div role="alert">
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <p>Please select polling unit</p>
            </div>
        </div>
        ';
    }elseif(empty($party)){
        echo '
        <div role="alert">
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <p>Please select party</p>
            </div>
        </div>
        ';
    }elseif(empty($score)){
        echo '
        <div role="alert">
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <p>Please add party score</p>
            </div>
        </div>
        ';
    }else{
        $insert = mysqli_query($conn, "INSERT INTO announced_pu_results (polling_unit_uniqueid,party_abbreviation,party_score,entered_by_user,date_entered,user_ip_address)
        VALUES('$polling_unit','$party','$score','','','')");
        if($insert == true){
            echo 'yes';
        }else{
            echo '
                <div role="alert">
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>Please add party score</p>
                    </div>
                </div>
                ';
        }
        }

}