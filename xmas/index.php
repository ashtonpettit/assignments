<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <?php         
            include 'includes.php';
        ?>
        <div id="container">
            <div class="header">
                <h2>Add a Page</h2>
                <h2>Homepage</h2>
            </div>

                <div class="main">
                    <h1>Merry Christmas Quotes</h1> 
                
                        <?php
                        $count = 1;
                        while($row=$query->fetch_assoc()) {
                        ?> 
                        <img id="pic<?php $count ?>" src="images/<?php echo $row['icon'] ?>.png">
                        <div class="quote"><h2 id="person<?php $count ?>"><?php echo $row['personname'];?></h2> 
                        <h2 id="quote<?php $count?>"><?php echo $row['quote'];?></h2> 
                        <?php } ?>



            <div class="footer">
                <div class="buttonDiv"><h2>Previous Person</h2></div>
                <button id="next" class="buttonDiv"><h2>Next Person</h2></button>
            </div>

        </div>
            <script src="functions.js"></script>
    </body>

</html>

