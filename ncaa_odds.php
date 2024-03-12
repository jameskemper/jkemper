<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NCAA Game Predictions</title>
<style>
    body { font-family: Arial, sans-serif; }
    .predictions-table { width: 100%; border-collapse: collapse; }
    .predictions-table th, .predictions-table td { text-align: left; padding: 8px; border: 1px solid #ddd; }
    .predictions-table th { background-color: #f2f2f2; }
    .winner { font-weight: bold; }
    .probability { color: green; }
</style>
</head>
<body>
<h2>NCAA Game Predictions</h2>
<table class="predictions-table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Team</th>
            <th>Team Conference</th>
            <th>Opponent</th>
            <th>Opponent Conference</th>
            <th>Predicted Winner</th>
            <th>Win Probability</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Path to the NCAA predictions CSV file
        $csvFile = "\\myweb.ttu.edu\users\jkemper\NCAA_predictions.csv";

        // Read and display the CSV file data
        if (($handle = fopen($csvFile, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($data[0]) . "</td>"; // Date
                echo "<td>" . htmlspecialchars($data[1]) . "</td>"; // Team
                echo "<td>" . htmlspecialchars($data[3]) . "</td>"; // Team Conference
                echo "<td>" . htmlspecialchars($data[5]) . "</td>"; // Opponent
                echo "<td>" . htmlspecialchars($data[7]) . "</td>"; // Opponent Conference
                echo "<td class='winner'>" . htmlspecialchars($data[9]) . "</td>"; // Predicted Winner
                echo "<td class='probability'>" . htmlspecialchars($data[10]) . "</td>"; // Win Probability
                echo "</tr>";
            }
            fclose($handle);
        }
        ?>
    </tbody>
</table>
</body>
</html>
