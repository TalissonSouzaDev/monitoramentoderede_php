<?php
$iplist = array(
    array("ip","pc"),
    array("ip","cel"),
    array("ip","pc2")
);

$results = [];
for($j=0; $j<count($iplist); $j++)
{
    $ip = $iplist[$j][0];
    $ping = exec("ping -n 1 $ip",$output,$status);
    $results[] = $status;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>#</th>
            <th>ip</th>
            <th>status</th>
            <th>desc</th>

        </tr>

        <tbody>
            <?php foreach($results as $item =>$k):?>
            <tr>
                <td><?=$item?></td>
                <td><?=$iplist[$item][0]?></td>
                <?php if($k == 0): ?>
                    <td style="color:green">on</td>

                <?php else: ?>
                    <td style="color:red">off</td>
                <?php endif; ?>

                <td><?= $iplist[$item][1]?></td>
            </tr>
        </tbody>
        <?php endforeach;?>
    </table>
    
</body>
</html>

<?php 
header("refresh: 10");
?>
