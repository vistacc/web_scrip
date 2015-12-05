<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $months = array(1=> 'January','February','March','April','May','june','july',
                'August','September','October','November','December');
            
            $days = range(1, 31);
            $years = range(2011, 2021);
            
            echo '<select name= "month">';
            foreach ($months as $key => $value) {
                echo "<option value=\"$key\"> $value </option>\n";
            }
            echo '</select>';
            
            echo '<select name="day">';
            foreach ($days as $key => $value) {
                echo "<option value=\"$value\"> $value </option>\n";
            }
            echo '</select>';
            
            echo '<select name="years">';
            foreach ($years as $value) {
                echo "<option value=\"$value\"> $value </option>\n";
            }
            echo '</select>';
        ?>
    </body>
</html>
