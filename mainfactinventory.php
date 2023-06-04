<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Fact Inventory Table</h1>
    <p class="mb-4">Tabel dibawah ini merupakan tabel Inventory barang yang berisikan nama produk, lokasi penyimpanan, dan jumlah produk</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Data Customer
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Produk </th>
                            <th>Lokasi</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Produk </th>
                            <th>Lokasi</th>
                            <th>Quantity</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        include "koneksi.php";

                        $query = mysqli_query($conn, 'SELECT dp.name_produk Produk, dl.Name Lokasi, fi.Quantity Quantity FROM `factinventory` fi JOIN dimproduct dp ON fi.ProductID = dp.productID JOIN dimlocation dl ON fi.LocationID = dl.LocationID where fi.quantity > 0;');
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $data['Produk'] ?></td>
                                <td><?php echo $data['Lokasi'] ?></td>
                                <td><?php echo $data['Quantity'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>