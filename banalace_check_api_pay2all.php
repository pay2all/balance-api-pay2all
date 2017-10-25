<?php




        $parameters = array(
            
        );

        $url = "https://www.pay2all.in/api/dmr/v1/balance";

        $key = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI0NTAxOWU2YTg0ZmU4OTUxOTMxMmQwY2ZmNDIzZGFmNTc0MWYwYTFhYjQxZTFhOTFjZThjZjljNmIxNDQxMzY3ZGNmZWFjNzhkNmE3ODY3In0.eyJhdWQiOiI1IiwianRpIjoiMjQ1MDE5ZTZhODRmZTg5NTE5MzEyZDBjZmY0MjNkYWY1NzQxZjBhMWFiNDFlMWE5MWNlOGNmOWM2YjE0NDEzNjdkY2ZlYWM3OGQ2YTc4NjciLCJpYXQiOjE0OTI5ODExNTgsIm5iZiI6MTQ5Mjk4MTE1OCwiZXhwIjoxNTI0NTE3MTU4LCJzdWIiOiI5NDkiLCJzY29wZXMiOltdfQ.jbz46sl1xkP_0w7ww43x5EmPmZBbU6Gs0fjA4SU42YtvLCJd0k-IMJuP-UuEF88CJfu1ZvYEBI3uypPifIQ2Jm0Ht3ZQdQkO2xdf9ayKiRRqGxYwSINHuiGVRuFxtmcr6L7a6AmwR-s1-7MLRiF_uJet10PQXP2MLT3zOoTJpcDj1eSg-ktPtGpSzU4qPzkmgf5SXxoZDq2o7_C-A9kAaMWsnKZ6MwBpeOkROgx591gKO4bR2OyiE3vye9DGItL6EkgPuuw_3_B4qeoAI6sQkEsJWEoeU6L3RuaIiLL3JlpveACIUlnn8HGbGt6dqhe-IK52vY485HTaPa5OJMrMZ1ImNuLW0uja78rKROB2y7I-TgtUfT5QeE7K6xffeP36xSusC_2r1d9uborKYlrC_GBXI82aXLzkk1j6SIfTHPI4wuCIaOwqtR_WAo6j8gpZKOf02qeVqw239KXbTDq53NDJXjffXRwn6xqUjG6XJ_FFYhQt6VXSEoR8uRG_PiHr4-YdFTlgtBIVg6GzjwEjbvpj41NuI0XN2qMlH6jGi2DMm3HOR3AvPtsI5iQgvPARYamOqSjaLMjuZ1TgcKB941Bi9BMkTRDx0qYhYuRL90oxpK3YJPdj587cobye79wcSm31ihPfRzeC4xwQkCofZHk2Xtu1GkYpX5-hHCcFUWg"; //you have to add personal access token 

        $header = ["Accept:application/json", "Authorization:Bearer ".$key];

        $method = 'POST';


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $response = curl_exec($ch);
        echo $response;  //[JSON RESPONSE]


$maindata = json_decode($response);

$transactionid = $maindata['operator_ref'];
$status = $maindata['status']; 
$payid = $maindata['payid']; //pay2all order id

//display the result to customer
echo"Transaction ID: $transactionid (This is Operator reference ID)";
echo"<br/>";
echo"Recharge Status: $status";
echo"<br/>";


?>