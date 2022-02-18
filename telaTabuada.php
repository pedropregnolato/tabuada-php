<?php

$j = 1;
$n = 1;
while ($n <= 10) {
    $i = 1;
    while ($i <= 10) {
        $n2 = $n * $i;
?>

        <table>
            <td>
                <tr>
                    <?php echo $n . " x " . $i . " = " . $n2; ?>
                </tr>

            <?php
            $i++;
        }
            ?>
                <h3> tabuada do <?php echo $n; ?> </h3><br>
            </td>
        </table>
    <?php
    $n++;
}
    ?>