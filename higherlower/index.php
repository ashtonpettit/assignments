<!DOCTYPE html>
<html>
    <?php 
        
        
    ?>
    <head>

    </head>

    <body>

        <form>
            <input type="text" name="num" Method="GET" action="#">
            <?php 
                
            ?>
            <input type="submit" name="submit">

        </form>

        <?php 
        
        $num = $_GET['num'];
        $numbers = array_fill(0, 1, $num);
        if(isset($_GET['submit'])) 
        {        
            echo $numbers[0] . " " . $numbers[1] . " " . sizeof($numbers);
        }   
        
        
    
        ?>
    </body>
</html>