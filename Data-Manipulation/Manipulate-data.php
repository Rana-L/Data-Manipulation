<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Student's Name and Age, Data Manipulation</title>
        
    </head>

    <body>
        <!-- This section is for the comenting on the code, to help give user some context information
        on what the page is about -->
        <h1> Data Manipulation Demo</h1>
        <p>In this page I have included numerious demo of manipulating data from an array by using PHP.
            I have used methods such as puting the list in order by age, name and finding out whether the DPDD students are older or younger than me 
            and are above the age of 18 or are they below the age of 18.
        </p>

        <!--This is the Start section of PHP code
        All PHP scripts need to go inside these tags-->
        <?php
            // Constants for naming the college I go to and the course I am doing in the introduction
            define('College_Name', 'The Manchester College');
            define('Course_Name', 'T-Level Digital Production Design and Development');

            // Explaining data is being used from the constants defined
            echo "<p>The data for DPDD is collected ".College_Name." ".Course_Name." DPDD students</p>";
            //Here we create the variable of Names and Ages and the two 1-D arrays, ready for inclusion into
            //the 2-D array
            $name = array('Mitchell', 'Derron',  'Omarion',  'Ela',  'Jake',  'Alex',  'Rana',  'Rehman',  'Nour',   'Temi',  'Noman',  'Taylor',   'Elizabete',  'Roddick');
            $age = array('17', '17', '19',  '17', '18', '17',  '19',   '19',   '19',  '18', '18', '18', '17', '17');
            
            //Now we include these arrays as elements of our 2-D array
            //We are also adding key values
            $list = array('Name' => $name, 'Age' => $age);

            //Here we are including a statement to display a single value
            echo "<p>Starting Value: {$list['Name'] [0]}</p>";


           
           

    
            
           
            
            //Here we sort the array by value
            asort($name);
            echo '<dt>Value Order:<dd>';
            foreach($name as $key => $value) {
                echo $key.' '.$value;
            }
            echo '<br>';
            
            //Here we sort the array by key
            ksort($age);
            echo '<dt>Key Order:<dd>';
            foreach($age as $key => $value) {
                 echo  $key.' '.$value;
            }
            echo '<br>';
            




            //Now we are going to use nested Foreach loops to display the key and
            //value for all the elements, as two unordered lists

            foreach ($list as $array => $list) {

                echo '<ul>';

                foreach($list as $key => $value) {

                    echo "<li>$array [$key] = $value";

                }

                echo '</ul>';

            }
            echo '<br>';

           
        // Average age from the DPPD class
         $average_age = array_sum($age);
         echo "<dt>The average age of the DPDD Group is: ";
         echo round($average_age/14);
         echo '<br> <br>';

         // Age Comparison for Student's Age
         echo "<dt>Comparing my age to other DPDD students age: <dd><br>";

         foreach($list as $key => $value) {
            if ($value > 19) {
                echo "$key is older than Rana: TRUE<br>";
                else{
                    echo "$key is not older than Rana: FALSE<br>";
                }
            }
            if ($value == 19) {
                echo "$key is the same age as Rana: TRUE<br>";
                else{
                    echo "$key is not the same age as Rana: FALSE<br>";
                }
            }
         }
         echo '<br>';

         // Showing students over 18, less than 18 or are the age of 18

         echo "<dt>Students over 18:<dd><br>";
         foreach($list as $key => $value) {
            if ($value > 18) {
                echo '&bull;', $key.': '.$value;
                echo '<br>';
            }
         }
         echo '<br>';

         echo "<dt>Students less than 18:<dd><br>";
         foreach($list as $key => $value) {
            if ($value < 18) {
                echo '&bull;', $key. ': '. $value;
                echo'<br>';
            }
         }
         echo '<br>'

         echo "<dt>Students who are 18:<dd><br>";
         foreach($list as $key => $value) {
            if ($value == 18){
                echo '&bull;', $key.': '.$value;
                echo'<br>';
            }
         }
        ?>

    </body>

</html>




