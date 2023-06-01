<?php
require 'koneksi.php';

$query = "SELECT productID, timeID, VendorID, orderQty, unitPrice, lineTotal FROM factpurchase";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Purchase</title>
    <style>
        
        table {
            width: 100%;
            border-collapse: collapse;
            font-family : Poppins;
        }

        table th, table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table th {
            background-color: #2c53c6;
            color: white;
        }
    </style>
</head>
<body>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable">
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