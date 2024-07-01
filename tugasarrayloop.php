<?php

$gaji = ['Ahmad' => 1000, 'Budi' => 2000, 'Chici' => 1500, 'Doni' => 2500, 'Elmo' => 1700];

// foreach ($nilai as $id => $nl) {
//     echo " Nama $id, nilai $nl <br>";
// }



$ar_judul = ['No', 'Nik', 'Nama', 'Ket'];

// fungsi agregat di array
$total = array_sum($gaji); //total nilai
for ($x = 1; $x <= 10; $x++);

$keterangan = [
    'Total Gaji' => $total,

]
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
</head>

<body>
    <table align="center" border="1px" cellpadding="2" cellspacing="0">
        <thead>
            <tr>
                <?php
                foreach ($ar_judul as $judul) {
                    echo "<td> $judul</td>";
                }
                ?>
            </tr>
        </thead>



        <tbody>
            <?php
            error_reporting();
            $no = 1;
            foreach ($gaji as $nama => $gj) {
            ?>
                <tr>
                    <td width="25x"><?= $no ?></td>
                    <td width="50px"><?= $x ?></td>
                    <td width="50px"><?= $nama ?></td>
                    <td width="80px"><?= $gj ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>

        <!-- ini agregat -->

        <tfoot>
            <?php
            foreach ($keterangan as $ktr => $value) {
            ?>
                <tr>
                    <td colspan="3" width="25x"><?= $ktr ?></td>
                    <td align="center" width="50px"><?= $value ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>

        </tfoot>
    </table>
</body>

</html>