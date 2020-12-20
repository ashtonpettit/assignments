<DOCTYPE html>
<html>
<head>
    <style>table , th, td {border: solid 1px black}</style>
</head>

<body>

    <table>
    <tr>
        <th>Name</th>
        <th>Age</th>
    <tr>
<?php 
    $characters = ["Jon Snow" => "33", "Theon Greyjoy" => "30", "Arya Stark" => "27"];
    foreach($characters as $key => $value) {
        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
    }
?>

    </table>
</body>
</html>
