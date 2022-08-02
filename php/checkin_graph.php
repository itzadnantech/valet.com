
<?php
// Create connection
include 'datac.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select hour(in_time)as hours,Count(in_time) as check_ins from parking where date(in_time)=CURDATE() group by hours order by hours asc";

            if (($result = $conn->query($sql)) !== FALSE)
            {
              
 
?>  
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
            

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Count', 'Checkin Count'],
            <?php  
                if ($result->num_rows > 0) {
                    $i = 1;
                // output data of each row
                    while($res = $result->fetch_assoc()) {
                        while($i <= 24) {
                            if($res["hours"]==$i){
                                echo "['".$i."',".$res["check_ins"]."],";
                                $i++;//do not make this one statement outside the if as it won't work.
                                break;
                            }
                            else{
                                echo "['".$i."',0],";
                                $i++;
                            }
                        } 
                    }
                    while($i <= 24) {
                            echo "['".$i."',0],";
                            $i++;
                        } 
                }
            ?>
        ]);
        var options = {
            colors: ['green'],
               'height': 500,
               'legend': {'position': 'bottom'},
            vAxis: {
                minValue: 0,
                maxValue: 0
            } 
    };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
        
        chart.draw(data, options);
    }
</script>
<?php
            }
            else{
                echo "query failure";
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
$conn->close(); 
?>