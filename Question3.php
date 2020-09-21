//Question 3 a
<?php


function get_destination($phone_number)
{

    $data = check_destination($phone_number);

    foreach ($data as $results){
        $output = $results;
    }

     return $output;
    }

function check_destination($phone_number)
{

    //read from the database using the string phone_number and the sql statement

    $mysql = new mysqli('localhost', 'root', '','prefixmap');

    $SQL = "select destination from prefixMap where prefix =  " . $phone_number;

    $results = $mysql->query($SQL);

    if($results->num_rows == 0){
        $output = "Invalid Phone Number";
    }
    else{
        $output = $results->fetch_row();

    }

    return $output;
}

?>

//Question 3b




function change_destination($phone_number)
{

   
$Number = check_destination($phone_number);

    foreach ($Number as $prefixNumber){
       
        if ($Number -> == 0)
        {
            $output = $results->fetch_row();

        }
        else if ($Number == 00)
        {
            $output = $results->fetch_row();

        }
        else 
        {
            print " Invalid destination";
        }

    }
}
return $output;
?>
