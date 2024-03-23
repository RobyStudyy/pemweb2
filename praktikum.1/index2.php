<?php 

    $title = 'Data Mahasiswa';

    $nama = 'Roby';
    $jurusan = 'Teknik Infortika';
    $rombel = 'TI01';




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;"> <?php echo $title ?> </h1>

    <table style="width: 50%;" border="1";>
    
        <tbody>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>Jurusan</td>
                <td>Rombel</td>
            </tr>

            <tr>
                <td> <?=  $nama ?> </td>
                <td> <?=  $jurusan ?> </td>
                <td> <?=  $rombel ?></td>
            </tr>
        </tbody>
    
    </table>
</body>
</html>