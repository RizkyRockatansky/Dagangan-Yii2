<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan</title>
    <style>
        .page
        {           
            padding:2cm;
        }
        table
        {
            border-spacing:0;
            border-collapse: collapse; 
            width:100%;
        }

        table td, table th
        {
            border: 1px solid #ccc;
        }
		
		table th
        {
            background-color:white;
        }
    </style>
</head>
<body>	
    <div class="page">	
        <h1>Data Penjualan Toko Rizky</h1>
        <table border="0">
        <tr>
                    <th>no</th>
                <th>Dibuat Pada</th>
                <th>Jam</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Bayar</th>
                <th>Kembalian</th>
                <th>Metode Pembayaran</th>
        </tr>
        <?php
        $no = 1;
        foreach($dataProvider->getModels() as $penj){ 
        ?>
        <tr>
                <td><?= $no++ ?></td>
                <td><?= $penj->created_at?></td>
                <td><?= $penj->time_at?></td>
                <td><?= $penj->nama_produk?></td>
                <td><?= $penj->harga?></td>
                <td><?= $penj->bayar?></td>
                <td><?= $penj->kembalian?></td>
                <td><?= $penj->metode?></td>
        </tr>
        <?php
        }
        ?>
        </table>
    </div>   
</body>
</html>