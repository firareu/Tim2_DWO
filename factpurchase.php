<!DOCTYPE html>
<html>
<head>
    <title>Data Sales</title>
    <meta name="viewport" content="width=device=width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>
<body>

    <table id="libTables" class="display">
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
            </tbody>
    </table>
    <script>
        $(document).ready(function () {
            $('#libTables').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "datapurchase.php", // Ganti dengan URL ke file server-side Anda
                    "type": "POST"
                },
                "deferRender": true,
                "columns": [
                    { "data": "productID" },
                    { "data": "timeID" },
                    { "data": "VendorID" },
                    { "data": "orderQty" },
                    { "data": "unitPrice" },
                    { "data": "lineTotal" }
                ]
            });
        });
    </script>
</body>
</html>
