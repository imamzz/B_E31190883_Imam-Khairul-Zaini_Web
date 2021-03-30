<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkatan</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table,
        th,
        td {
            border: 1px solid black;
        }
        th,
        td {
            padding: 5px;
        }
    </style>
    <?php $x = 1; ?>
</head>

<body>
    <table>
        <tr>
            <td>No</td>
            <td>Tahun</td>
        </tr>
        <?php foreach ($Angkatan as $row) : ?>
            <tr>
                <td><?= $x++; ?></td>
                <td><?= $row['tahun']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>