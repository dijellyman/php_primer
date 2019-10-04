
   <?php 
        $title = "Index";
        include 'includes/header.php' 
    ?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php  
        
        //Printing to HTML using echo
        echo 'Hello PHP!';
        // YOu can echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    
        // Variables need a '$'. They are not strongly typed
        $name = 'Robert Stephenson';
        $age = 39;
        $address = 'No weh road, kingston something';
        // echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';
        echo '<h1>My Address Is: '.$address.' </h1>';
        
        // Echo using double quotes and interpolation
        echo "<h1>My Name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark"in*>CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    
    <?php
        require 'includes/footer.php' 
    ?>