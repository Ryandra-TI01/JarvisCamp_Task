<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") : ?>
    <table border='1'>
        <tr>
            <td>Nama:</td>
        </tr>
        <tr>
            <td>tempat lahir: <?= $_POST['tmp_lahir']; ?></td>
        </tr>
        <tr>
            <td>tanggal lahir: <?= $_POST['tgl_lahir']; ?></td>
        </tr>
    </table>
<?php else :
    header('Location: form.php');
endif;

?>
