<div class="card">
    <div class="card-body">
        <h5 class="card-title">Data Jurusan</h5>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>kapasitas</th>
                    <th>Terisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "setting.php";
                $sql = "SELECT_query($koneksi, $sql)";
                if($r=mysqli_num_rows($result)) {
                        $no=1;
                        while ($r=mysqli_fetch_assoc($result)) {
                            echo '<tr>
                            <td>'.$no. '</td>
                            <td>'.$r['jurusan']'</td>
                            <td>'.$r['kapasitas'].'</td>
                            <td>'.$r['terisi'].'</td>
                            <td>
                                Edit
                                Hapus
                            </td>
                            </tr>';
                            $no++;
                               
                        }
                } else {
                    echo '<tr>
                        <td colspan="5" align="center">Data Kosong</td>
                        </tr>';
                    '
                }
                ?>

            

    </div>

</div>
