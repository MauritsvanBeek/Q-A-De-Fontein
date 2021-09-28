<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Maurits van Beek">
    <meta name="viewport" content="width=width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Mensen vragen dit</title>
    <script type="text/javascript"
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=">

        setInterval("Auto_Refresh();", 5000);
        function Auto_Refresh(){
            $('#tablehead').load(location.href + '#')
        }
    </script>
</head>
<body id="body">
    <h2 class="title">Vragen</h2>
    <div id="tablehead">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "q&a");
        if ($conn-> connect_error){
            die("Connection failed:". $conn-> connect_error);
        }

        $sql = "SELECT question from questions";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()){
                echo "<tr  class=\"data\"><td class=\"row\"> <div id='question'>" . $row["question"] . "</div></td></tr>";
            }
            echo "</table></div>";
        }
        else{
            echo "0 results";
        }

        $conn-> close();
        ?>
    </table>
    </div>
</body>
</html>
