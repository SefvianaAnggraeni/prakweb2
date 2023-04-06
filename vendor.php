<?php
$models = new Vendor();
$data_vendor = $models->tampilVendor();

?>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive" style="text-align: center;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nomer</th>
                            <th>Nama</th>
                            <th>Kota</th>
                            <th>Kontak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_vendor as $row) {
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row ['nomor'] ?></td>
                            <td><?= $row ['nama'] ?></td>
                            <td><?= $row ['kota'] ?></td>
                            <td><?= $row ['kontak'] ?></td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>