<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        @page {
            size: A5 landscape;
            margin: 0;
        }
        
        .container {
            padding: 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .logo {
            width: 100px;
            height: 100px;
        }
        
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .subtitle {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .address {
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .invoice-id {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .table {
            margin-bottom: 20px;
        }
        
        .table th,
        .table td {
            vertical-align: middle;
        }
        
        .checkbox-table th {
            width: 50%;
            vertical-align: middle;
        }
        
        .checkbox-table td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img class="logo" src="<?php echo base_url(); ?>path/to/logo.png" alt="Logo">
            <h2 class="title">Invoice</h2>
            <h4 class="subtitle">Asia Australasia Road Conference 2023</h4>
            <p class="address">Alamat: Jalan Conference, Kota Conference, Negara Conference</p>
            <p class="invoice-id">Nomor ID Invoice: 12345</p>
        </div>

        <table class="table">
            <tr>
                <th>Telah diterima dari:</th>
                <td>John Doe</td>
            </tr>
            <tr>
                <th>Terbilang:</th>
                <td>One Hundred Dollars</td>
            </tr>
            <tr>
                <th>Jumlah:</th>
                <td>$100</td>
            </tr>
        </table>

        <table class="table checkbox-table">
            <thead>
                <tr>
                    <th>Keterangan: beri tanda centang sesuai dengan pembayaran anda.</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No. 1</td>
                    <td><input type="checkbox" checked disabled> Pendaftaran Peserta konferensi</td>
                </tr>
                <tr>
                    <td>No. 2</td>
                    <td><input type="checkbox" checked disabled> Peserta pameran</td>
                </tr>
                <tr>
                    <td>No. 3</td>
                    <td><input type="checkbox" checked disabled> Sponsor</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>