<?php 
    require '../function/functions.php';

    $month = date('m');
    $day = date('d');
    $year = date('Y');
    
    $today = $year . '-' . $month . '-' . $day;
    $username = $_GET['username'];

    $pemasukkan = query("SELECT * FROM pemasukkan WHERE tanggal = '$today' AND username = '$username'");

?>

<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-sm table-hover table-striped table-bordered">
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Nama Pelanggan</th>
                <th>Nomor Hp</th>
                <th>Keterangan Hutang</th>
                <th>Sumber Hutang</th>
                <th>Nominal Hutang</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($pemasukkan as $row) : ?>
            <tr class="show" id="<?= $row["id"]; ?>">
                <td><?= $i; ?> </td>
                <td data-target="tanggal"><?= $row["tanggal"]; ?></td>
                <td data-target="pelanggan"><?= $row['pelanggan'] ?></td>
                <td data-target="hp"><?= $row['hp'] ?></td>
                <td data-target="keterangan"><?= htmlspecialchars($row["keterangan"]); ?></td>
                <td data-target="sumber"><?= $row["sumber"]; ?></td>
                <td data-target="jumlahMasuk"><?= $row['jumlah'] ?></td>
                <td>    
                    <a href="#" id="<?= $row["id"] ;?>" class="btn btn-info delete"><i class="fas fa-trash-alt"></i></a>
                    <a href="#" data-role="update" data-id="<?= $row["id"] ;?>" class="btn btn-outline-secondary" id="openBtn"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            <?php
                $jumlah2[] = $row["jumlah"];
                $jumlahConvert = str_replace('.', '', $jumlah2);
                $totali = array_sum($jumlahConvert);
                $hasilcon = number_format($totali, 0, ',', '.');
            ?>
            <?php $i++ ?>
            <?php endforeach; ?>
            
            <?php if ( isset($row) != "" ) : ?> 
            <tr>
                <td colspan="4">Total Hutang</td>
                <td><?= $hasilcon ?></td>
            </tr>
            <?php elseif ( isset($row) == "" ) : ?> 
            <tr>
            </tr>
            <?php endif; ?>

        </table>
    </div>
</div>

<script src="ajax/js/deletePemasukkan.js"></script>