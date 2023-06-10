<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header-->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Jumlah Produk Pada Setiap Lokasi</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body py-4">
            <div class="chart-pie pt-4 pb-2">
                <canvas id="myPieChart"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <?php
                $lokasi = mysqli_query($conn, "SELECT locationid, SUM(Quantity) FROM factinventory GROUP BY locationid;");
                while ($data = mysqli_fetch_array($lokasi)) {
                    $sql = mysqli_query($conn, "SELECT DISTINCT l.locationid, l.Name location FROM factinventory f JOIN dimlocation l ON f.locationid = l.locationid ORDER BY l.locationid ASC");
                    $data = $sql->fetch_array();
                    $idlokasi[] = $data['locationid'];
                }
                ?>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #d94f00;"></i> <?php echo $idlokasi[0]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #d9c300;"></i> <?php echo $idlokasi[1]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #94d900;"></i> <?php echo $idlokasi[2]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #00d953;"></i> <?php echo $idlokasi[3]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #00d9c7;"></i> <?php echo $idlokasi[4]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #0028d9;"></i> <?php echo $idlokasi[5]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #8900d9;"></i> <?php echo $idlokasi[6]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #d90033;"></i> <?php echo $idlokasi[7]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #969696;"></i> <?php echo $idlokasi[8]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #ff26ac;"></i> <?php echo $idlokasi[9]; ?>
                </span>
            </div>
        </div>
    </div>
</div>
<?php
include 'koneksi.php';
// Pemanggilan Data untuk Donut Chart
$lokasi = mysqli_query($conn, "SELECT locationid, SUM(Quantity) FROM factinventory GROUP BY locationid;");
while ($data = mysqli_fetch_array($lokasi)) {
    $sql = mysqli_query($conn, "SELECT DISTINCT l.locationid, l.Name location FROM factinventory f JOIN dimlocation l ON f.locationid = l.locationid ORDER BY l.locationid ASC");
    $data = $sql->fetch_array();
    $idlokasi[] = $data['locationid'];
    $location[] = $data['location'];
}

?>