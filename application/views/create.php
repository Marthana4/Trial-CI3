<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Item - CRUD CodeIgniter</title>
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
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 15px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

    </style>
</head>
<body>
    <header>
        <h1>CRUD CodeIgniter</h1>
    </header>

    <div class="container">
        <h2>Tambah Barang</h2>
        <form action="<?php echo base_url('Welcome/store'); ?>" method="post">
            <label for="kode_barang">Kode Barang:</label>
            <input type="number" name="kode_barang" required>

            <label for="nama_barang">Nama Barang:</label>
            <input type="text" name="nama_barang" required>

            <label for="harga">Harga:</label>
            <input type="number" name="harga" required>

            <label for="satuan">Satuan:</label>
            <select name="satuan" required>
                <?php foreach ($satuan_barang as $satuan): ?>
                    <option value="<?= $satuan; ?>"><?= $satuan; ?></option>
                <?php endforeach; ?>
            </select>


            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>