<!DOCTYPE html>
<html>
    <head>
        <title>Group 6</title>
    </head>
    <body>
    <h1>Welcome <?php echo $_POST["name"]; ?></h1>
    <p>Your email is: <?php echo "<a href='mailto:" . $_POST["email"] . "'>" . $_POST["email"] . "</a>"; ?></p>
    <p>Your Major is: <?php echo $_POST["major"]; ?></p>

    <p>Your Comments: <?php echo $_POST["comment"]; ?> </p>
    
    <ul>
        <?php

            $continents = $_POST["continent"];
            $continentMap = array('NA' => 'North America', 'SA' => 'South America',
            'AU' => 'Australia', 'EU' => 'Europe', 'AF' => 'Africa', 'AN' => 'Antarctica', 'AS' => 'Asia');
            foreach ($continents as $continent) {
                $newcontinent = htmlspecialchars($continent);
                echo "<li> $continentMap[$newcontinent] </li>";

            }
            
        ?>
    </ul>

    </body>

</html>