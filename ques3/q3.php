<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
</head>
<body>
    
</body>
</html>


<?php
    $conn = new mysqli("127.0.0.1", "root", "", "bd_cricket", 3306);

    if($conn -> connect_error) die("Connection failed: ". $conn->connnect_error);
    else echo "<h2>Database Connected</h2>";


    echo "<h3>Query 1</h3>";
    $query = "SELECT Venue, COUNT(Id) AS Num_of_perfo, AVG(Runs) AS Avg_runs 
        FROM match_performance 
        GROUP BY Venue 
        HAVING Avg_runs > 50";

    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["Venue"]. " ----- ". $show["Num_of_perfo"]. " ----- ". $show["Avg_runs"]. "<br>";
    }


    echo "<h3>Query 2</h3>";
    $query = "UPDATE match_performance
        SET Runs = Runs * 1.05
        WHERE Venue = 'Mirpur'";

    $store = $conn->query($query);
    $query = "SELECT * FROM match_performance";
    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["Venue"]. " ----- ". $show["Runs"]. "<br>";
    }


    echo "<h3>Query 3</h3>";
    $query = "SELECT PlayerName, Venue, SUM(Runs / Balls * 100) AS Strike_rate
        FROM match_performance
        GROUP BY PlayerName
        ORDER BY Strike_rate DESC";

    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["PlayerName"]. " ----- ". $show["Strike_rate"]. "<br>";
    }


    echo "<h3>Query 4</h3>";
    $query = "SELECT PlayerName, Team, Runs, AVG(Runs) AS avg_run, 'Above Par' as Label
        FROM match_performance
        GROUP BY Team
        HAVING Runs > AVG(Runs)";

    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["PlayerName"]. " ----- ". $show["Team"]. " ----- ". $show["Label"]. "<br>";
    }
    
    $query = "SELECT PlayerName, Team, Runs, AVG(Runs) AS avg_run, 'Below Par' as Label
        FROM match_performance
        GROUP BY Team
        HAVING Runs < AVG(Runs)";

    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["PlayerName"]. " ----- ". $show["Team"]. " ----- ". $show["Label"]. "<br>";
    }

?>