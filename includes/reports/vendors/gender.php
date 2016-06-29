<!--Java Scripts for Charts-->
<script src="js/Chart.js" charset="utf-8"></script>
<script src="js/chart.js" charset="utf-8"></script>
<script src="js/Chart.min.js" charset="utf-8"></script>
<script src="js/legend.js" charset="utf-8"></script>
<script src="js/legend.legacy.js" charset="utf-8"></script>




<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();   

$query_male = mysql_query("SELECT gender FROM entrepreneurs where gender='male'");
$query_female = mysql_query("SELECT gender FROM entrepreneurs where gender='female'");

if ( !$query_male || !$query_female ) {
        echo mysql_error();
        die;
    }
    
$count_male = mysql_num_rows($query_male);
$count_female = mysql_num_rows($query_female);

?>



<script type="text/javascript">
    
    if(!!(window.addEventListener)) window.addEventListener('DOMContentLoaded', main);
else window.attachEvent('onload', main);

function main() {
//    lineChart();
//    pieChart();
//    doughnutChart();
    doughnutChartWithCustomLegend();
}

    function doughnutChartWithCustomLegend() {
    var data = [
        {
            value: <?php echo $count_male; ?>,
            color:"#F38630",
            label: 'Male'
        },
        {
            value : <?php echo $count_female; ?>,
            color : "#E0E4CC",
            label: 'Female'
        }
    ];

    var ctx = document.getElementById("doughnutChartWithCustomLegend").getContext("2d");
    var doughnutChartWithCustomLegend = new Chart(ctx).Doughnut(data,{tooltipTemplate:"<%=label%>: <%=value%> Vendors"});

    legend(document.getElementById("doughnutChartCustomLegend"), data, doughnutChartWithCustomLegend, "<%=label%>: <%=value%> Vendors");
}
    
</script>



<div>
    <canvas id="doughnutChartWithCustomLegend" width="800" height="252"></canvas>
    <div id="doughnutChartCustomLegend"></div>
</div>



