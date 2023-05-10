<html>

<head>
    <title>Form Input Matakuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url('siswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" style="width: 200px; height: 25px" value="<?php echo set_value('nama'); ?>">
                    </td>
                </tr>
                <td colspan="4" style="color:red; font-size:15px; text-align:center;" <?= form_error('kode'); ?></td>
                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nis" id="nis" style="width: 200px; height: 25px" value="<?php echo set_value('nis'); ?>">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kelas" id="kelas" style="width: 200px; height: 25px" value="<?php echo set_value('kelas'); ?>">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" style="width: 200px; height: 25px" value="<?php echo set_value('tgl_lahir'); ?>">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" style="width: 200px; height: 25px" value="<?php echo set_value('tempat_lahir'); ?>">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="alamat" id="alamat" style="width: 200px; height: 25px" value="<?php echo set_value('alamat'); ?>">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>
                        <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required>Laki-laki</label>
		                <label><input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan</label>
                    </td>
                </tr>
                <td colspan="4" style="color:red; font-size:15px; text-align:center;" <?= form_error('jenis_kelamin'); ?></td>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <td colspan="4" style="color:red; font-size:15px; text-align:center;" <?= form_error('agama'); ?></td>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>