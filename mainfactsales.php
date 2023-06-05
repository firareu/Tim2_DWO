<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Fact Sales Table</h1>
    <p class="mb-4">Tabel dibawah ini merupakan tabel Sales yang berisikan nama produk, Id Pembeli, tanggal pembelian, jumlah produk, harga produk, total harga pembelian</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Data Sales
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Produk </th>
                            <th>CustomerID</th>
                            <th>Negara Customer</th>
                            <th>Tanggal</th>
                            <th>Quantity</th>
                            <th>Harga Satuan</th>
                            <th>Total HArga</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Produk </th>
                            <th>CustomerID</th>
                            <th>Negara Customer</th>
                            <th>Tanggal</th>
                            <th>Quantity</th>
                            <th>Harga Satuan</th>
                            <th>Total Harga</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        include "koneksi.php";

                        $query = mysqli_query($conn, 'SELECT dp.name_produk Produk, fs.CustomerID,da.country lokasi, dt.fullDate Tanggal, fs.OrderQty Quantity, fs.UnitPrice harga_satuan, fs.LineTotal totalharga FROM factsales fs JOIN dimproduct dp ON fs.ProductID = dp.productID JOIN dimtime dt ON fs.TimeID = dt.timeID JOIN dimaddress da ON da.TerritoryID = fs.TerritoryID Limit 5000;');
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $data['Produk'] ?></td>
                                <td><?php echo $data['CustomerID'] ?></td>
                                <td><?php echo $data['lokasi'] ?></td>
                                <td><?php echo $data['Tanggal'] ?></td>
                                <td><?php echo $data['Quantity'] ?></td>
                                <td><?php echo $data['harga_satuan'] ?></td>
                                <td><?php echo $data['totalharga'] ?></td>
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