<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header-->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Top 5 Total Purchase based on Category Product</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body py-4">
            <div class="chart-pie pt-4 pb-2">
                <canvas id="myPieChart2"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <?php
                $purchase = mysqli_query($conn, "SELECT DISTINCT(productID), ROUND(Sum(unitPrice)) AS price FROM factpurchase GROUP BY productID ORDER BY price DESC LIMIT 5");
                while ($data = mysqli_fetch_array($purchase)) {
                    $sql = mysqli_query($conn, "SELECT d.name_produk AS produk , ROUND(Sum(fp.unitPrice)) AS price FROM factpurchase fp JOIN dimproduct d ON fp.productID=d.productID WHERE fp.productID='" . $data['productID'] . "'");
                    $data = $sql->fetch_array();
                    $produk[] = $data['produk'];
                }
                ?>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #d94f00;"></i> <?php echo $produk[0]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #d9c300;"></i> <?php echo $produk[1]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #94d900;"></i> <?php echo $produk[2]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #00d953;"></i> <?php echo $produk[3]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #00d9c7;"></i> <?php echo $produk[4]; ?>
                </span>
            </div>
        </div>
    </div>
</div>
<?php
include 'koneksi.php';
// Pemanggilan Data untuk Donut Chart
$purchase = mysqli_query($conn, "SELECT DISTINCT(productID), ROUND(Sum(unitPrice)) AS price FROM factpurchase GROUP BY productID ORDER BY price DESC LIMIT 5");
while ($data = mysqli_fetch_array($purchase)) {
    $sql = mysqli_query($conn, "SELECT d.name_produk AS produk , ROUND(Sum(fp.unitPrice)) AS price FROM factpurchase fp JOIN dimproduct d ON fp.productID=d.productID WHERE fp.productID='" . $data['productID'] . "'");
    $data = $sql->fetch_array();
    $produk[] = $data['produk'];
    $price2[] = $data['price'];
}

?>