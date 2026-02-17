<!DOCTYPE html>
<html>
<head>
    <title>Library Expansion Budget</title>
    <style>
        body{
            font-family: Verdana;
            background-color: #eef5ff;
        }
        .container{
            width: 70%;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        h2{
            text-align: center;
            color: #2c3e50;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }
        th{
            background-color: #2c3e50;
            color: white;
        }
        th, td{
            border: 1px solid #999;
            padding: 8px;
            text-align: center;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        .creator{
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
<h2>Public Library Expansion Project</h2>

<?php
    function computeIncrease($amount, $percent){
        return $amount + ($amount * $percent);
    }

    function computeTotal($values){
        return array_sum($values);
    }

    $lumber = 150000;
    $concrete = 78000;
    $drywall = 69000;
    $paint = 12000;
    $misc = 20000;

    $materials = [$lumber, $concrete, $drywall, $paint, $misc];

    $increase10 = array_map(function($value){
        return computeIncrease($value, 0.10);
    }, $materials);

    $increase15 = array_map(function($value){
        return computeIncrease($value, 0.15);
    }, $materials);

    $increase20 = array_map(function($value){
        return computeIncrease($value, 0.20);
    }, $materials);

    $totalEst = computeTotal($materials);
    $total10 = computeTotal($increase10);
    $total15 = computeTotal($increase15);
    $total20 = computeTotal($increase20);

    $names = ["Lumber", "Concrete", "Drywall", "Paint", "Miscellaneous"];
?>

<table>
    <tr>
        <th>Materials</th>
        <th>Estimated Cost</th>
        <th>10% Increase</th>
        <th>15% Increase</th>
        <th>20% Increase</th>
    </tr>

    <?php
        for($i = 0; $i < count($materials); $i++){
            echo "<tr>";
            echo "<td>{$names[$i]}</td>";
            echo "<td>" . number_format($materials[$i], 2) . "</td>";
            echo "<td>" . number_format($increase10[$i], 2) . "</td>";
            echo "<td>" . number_format($increase15[$i], 2) . "</td>";
            echo "<td>" . number_format($increase20[$i], 2) . "</td>";
            echo "</tr>";
        }
    ?>

    <tr>
        <th>Total</th>
        <th><?php echo number_format($totalEst, 2); ?></th>
        <th><?php echo number_format($total10, 2); ?></th>
        <th><?php echo number_format($total15, 2); ?></th>
        <th><?php echo number_format($total20, 2); ?></th>
    </tr>
</table>

<div class="creator">
    Created by: Brent Gabrielle T. Perez
</div>

</div>

</body>
</html>

