<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>

        <ul style="list-style: none;">
        <?php
                $string = $_GET['name'];
                $charArray = str_split($string);

                foreach($charArray as $char) {
                    echo "<li><h2>" . $char . "</h2></li>";
                }
            ?> 
        </ul>
    </body>
</html>