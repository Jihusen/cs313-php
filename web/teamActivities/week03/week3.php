<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Group 6 Week 3 Team Assignment</title>
    </head>
    <body>

            <?php
                echo "<form id='form' method='post' action='submitPhp.php'>";
                    echo "<p>Please enter your name: </p>";
                    echo "<input type='text' name='name'><br>";
                    echo "<p>Please enter your email: </p>";
                    echo "<input type='email' name='email'><br>";
                    echo "<p>Please select your major: </p><br>";
                    echo "<input type='radio' name='major' value='CS' checked> Copmuter Science<br>";
                    echo "<input type='radio' name='major' value='WDD'> Web Design and Development<br>";
                    echo "<input type='radio' name='major' value='CIT'> Computer Information Technology<br>";
                    echo "<input type='radio' name='major' value='CE'> Computer Engineering<br>";
                    echo "<textarea rows='4' cols='50' name='comment' form='form'>";
                    echo "Enter comment here...</textarea>";
                    echo "<br>";
                    echo "<input type='checkbox' name='continent[]' value='NA'> North America<br>";
                    echo "<input type='checkbox' name='continent[]' value='SA'> South America <br>";
                    echo "<input type='checkbox' name='continent[]' value='EU'> Europe <br>";
                    echo "<input type='checkbox' name='continent[]' value='AS'> Asia <br>";
                    echo "<input type='checkbox' name='continent[]' value='AU'> Australia <br>";
                    echo "<input type='checkbox' name='continent[]' value='AF'> Africa <br>";
                    echo "<input type='checkbox' name='continent[]' value='AN'> Antarctica <br>";

                    echo "<input type='submit' name='test' value='test'";
                echo "</form>";



            ?>
    </body>
</html>
