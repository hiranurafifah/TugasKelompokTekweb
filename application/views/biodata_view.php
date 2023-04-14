<html>
<head>
    <title>Biodata</title>
</head>
<body>
<h1 align="center">Biodata Diri</h1>
    <hr width="600px">
    <table align="center" cellpadding="10px" width="600px">
        <tr>
            <td>Nama:</td>
            <td><?php echo $biodata['nama']; ?></td>
        </tr>
        <tr>
            <td>Nim:</td>
            <td><?php echo $biodata['nim']; ?></td>
        </tr>
        <tr>
            <td>Umur:</td>
            <td><?php echo $biodata['umur']; ?></td>
        </tr>
        <tr>
            <td>Agama:</td>
            <td><?php echo $biodata['agama']; ?></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><?php echo $biodata['alamat']; ?></td>
        </tr>
    </table>