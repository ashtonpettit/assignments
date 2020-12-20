<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>

    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>

        <?php
        $conn = mysqli_connect('ID328468_150551.db.webhosting.be', 'ID328468_phpeditor', 'WebIsMyLife2020', 'ID328468_150551');
        $sql = "SELECT * FROM characters";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td></tr>";

            }
        }
        else {
            echo "No Results";
        }
        ?>
    </table>
    </body>
</html>