<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Fact Purchase Table</h1>
    <p class="mb-4">gtw njelasin apa <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
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
                            <th>Date</th>
                            <th>Vendor</th>
                            <th>Quantity</th>
                            <th>UnitPrice</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Produk </th>
                            <th>Date</th>
                            <th>Vendor</th>
                            <th>Quantity</th>
                            <th>UnitPrice</th>
                            <th>Total Harga</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        include "koneksi.php";

                        $query = mysqli_query($conn, 'SELECT dp.name_produk Produk, dt.fulldate Tanggal, dv.name Vendor, fp.orderQty Quantity, fp.unitPrice Unit_Price, fp.LineTotal Total_Harga FROM `factpurchase` fp JOIN dimproduct dp ON fp.productID = dp.productID JOIN dimtime dt ON fp.timeID = dt.timeID JOIN dimvendor dv on fp.VendorID = dv.VendorID;');
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $data['Produk'] ?></td>
                                <td><?php echo $data['Tanggal'] ?></td>
                                <td><?php echo $data['Vendor'] ?></td>
                                <td><?php echo $data['Quantity'] ?></td>
                                <td><?php echo $data['Unit_Price'] ?></td>
                                <td><?php echo $data['Total_Harga'] ?></td>
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