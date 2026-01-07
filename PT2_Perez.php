<html>
<head>
    <title>Expansion Project</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(#f7e9ff, #d7ecff);
        }
        table {
            border-collapse: collapse;
            width: 60%;
            background: white;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Public Library Expansion Project</h2>
<h3>Cost Estimates</h3>

<?php
    $lumber = 150000;
    $concrete = 78000;
    $drywall = 69000;
    $paint   = 12000;
    $misc    = 20000;

    $l10 = $lumber + ($lumber * 0.10);
    $c10 = $concrete + ($concrete * 0.10);
    $d10 = $drywall + ($drywall * 0.10);
    $p10 = $paint + ($paint * 0.10);
    $m10 = $misc + ($misc * 0.10);

    $l15 = $lumber + ($lumber * 0.15);
    $c15 = $concrete + ($concrete * 0.15);
    $d15 = $drywall + ($drywall * 0.15);
    $p15 = $paint + ($paint * 0.15);
    $m15 = $misc + ($misc * 0.15);

    $l20 = $lumber + ($lumber * 0.20);
    $c20 = $concrete + ($concrete * 0.20);
    $d20 = $drywall + ($drywall * 0.20);
    $p20 = $paint + ($paint * 0.20);
    $m20 = $misc + ($misc * 0.20);

    $totalEst = $lumber + $concrete + $drywall + $paint + $misc;
    $total10  = $l10 + $c10 + $d10 + $p10 + $m10;
    $total15  = $l15 + $c15 + $d15 + $p15 + $m15;
    $total20  = $l20 + $c20 + $d20 + $p20 + $m20;
?>

<table>
    <tr>
        <th>Expenditures</th>
        <th>Estimated Cost</th>
        <th>10% Increase</th>
        <th>15% Increase</th>
        <th>20% Increase</th>
    </tr>

    <tr>
        <td>Lumber</td>
        <td><?php echo number_format($lumber, 2); ?></td>
        <td><?php echo number_format($l10, 2); ?></td>
        <td><?php echo number_format($l15, 2); ?></td>
        <td><?php echo number_format($l20, 2); ?></td>
    </tr>

    <tr>
        <td>Concrete</td>
        <td><?php echo number_format($concrete, 2); ?></td>
        <td><?php echo number_format($c10, 2); ?></td>
        <td><?php echo number_format($c15, 2); ?></td>
        <td><?php echo number_format($c20, 2); ?></td>
    </tr>

    <tr>
        <td>Drywall</td>
        <td><?php echo number_format($drywall, 2); ?></td>
        <td><?php echo number_format($d10, 2); ?></td>
        <td><?php echo number_format($d15, 2); ?></td>
        <td><?php echo number_format($d20, 2); ?></td>
    </tr>

    <tr>
        <td>Paint</td>
        <td><?php echo number_format($paint, 2); ?></td>
        <td><?php echo number_format($p10, 2); ?></td>
        <td><?php echo number_format($p15, 2); ?></td>
        <td><?php echo number_format($p20, 2); ?></td>
    </tr>

    <tr>
        <td>Miscellaneous</td>
        <td><?php echo number_format($misc, 2); ?></td>
        <td><?php echo number_format($m10, 2); ?></td>
        <td><?php echo number_format($m15, 2); ?></td>
        <td><?php echo number_format($m20, 2); ?></td>
    </tr>

    <tr>
        <th>Total Expenditures:</th>
        <th><?php echo number_format($totalEst, 2); ?></th>
        <th><?php echo number_format($total10, 2); ?></th>
        <th><?php echo number_format($total15, 2); ?></th>
        <th><?php echo number_format($total20, 2); ?></th>
    </tr>
</table>

<br><br>
Created by: <b>Brent Gabrielle T. Perez</b>

</body>
</html>