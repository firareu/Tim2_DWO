<?php
require 'koneksi.php';

$query = "SELECT productID, timeID, VendorID, orderQty, unitPrice, lineTotal FROM factpurchase";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Purchase</title>
</head>
<body>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Time ID</th>
                    <th>Vendor ID</th>
                    <th>Order Quantity</th>
                    <th>Unit Price</th>
                    <th>Line Total</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Product ID</th>
                    <th>Time ID</th>
                    <th>Vendor ID</th>
                    <th>Order Quantity</th>
                    <th>Unit Price</th>
                    <th>Line Total</th>
                </tr>
            </tfoot>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['productID']; ?></td>
                        <td><?php echo $row['timeID']; ?></td>
                        <td><?php echo $row['VendorID']; ?></td>
                        <td><?php echo $row['orderQty']; ?></td>
                        <td><?php echo $row['unitPrice']; ?></td>
                        <td><?php echo $row['lineTotal']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>