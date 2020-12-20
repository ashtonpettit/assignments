<?php 

$conn = mysqli_connect('ID291816_bets.db.webhosting.be','ID291816_bets','WeLoveWeb2020','ID291816_bets');

if($conn == false) {
    die ('Connection Failed');
}

                    $sql = "SELECT * FROM quotes_50";
                    $query = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($query);
                    
                    



