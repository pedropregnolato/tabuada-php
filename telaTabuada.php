<?php

$j = 1;
$n = 1;
while ($n <= 10) {
    $i = 1;
?>
    <h3> Tabuada do <?php echo $n; ?> </h3>
    <?php
    while ($i <= 10) {
        $n2 = $n * $i;
    ?>
        <table>
            <td>
                <tr>
                    <?php echo $n . " x " . $i . " = " . $n2; ?>
                </tr>
            </td>
        <?php
        $i++;
    }
        ?>
        </table><br><br>
    <?php
    $n++;
}
    ?>