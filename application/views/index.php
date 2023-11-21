<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD CodeIgniter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
        }

        th, td {
            padding: 15px;
        }

        th {
            background-color: #333;
            color: white;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        .btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn-danger {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <header>
        <h1>CRUD CodeIgniter</h1>
    </header>

    <div class="container">
        <h2>Data Barang</h2>
        <a href="<?php echo base_url('/Welcome/create'); ?>" class="btn">Tambah Barang</a>
        <table>
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_barang as $db): ?>
                    <tr>
                        <td><?php echo $db->kode_barang; ?></td>
                        <td><?php echo $db->nama_barang; ?></td>
                        <td><?php echo $db->harga; ?></td>
                        <td><?php echo $db->satuan; ?></td>
                        <td>
                            <a href="<?php echo base_url('/Welcome/edit/'). $db->kode_barang ?>" class="btn">Edit</a>
                            <a href="<?php echo base_url('/Welcome/delete/'). $db->kode_barang ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
