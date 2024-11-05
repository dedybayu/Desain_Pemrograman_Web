<table id="example" class="table table-striped table-bordered" style="width: 100%">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $sql = $db1->prepare($query);
        $sql->execute();
        $resl = $sql->get_result();

        if ($resl->num_rows > 0) {
            while ($row = $resl->fetch_assoc()) {
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $nama ?></td>
                    <td><?php echo $jenis_kelamin ?></td>
                    <td><?php echo $alamat ?></td>
                    <td><?php echo $no_telp ?></td>
                    <td>
                        <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data"><i class="fa fa-edit"></i> Edit</button>
                        <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data"><i class="fa fa-trash"></i> Hapus</button>
                    </td>
                </tr>
                <?php
            }
        }
        else {
            ?>
            <tr colspan="7">Tidak Ada Data Ditemukan</tr>
            <?php
        }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable();
    });

    function reset() {  
        document.getElementById("err_nama").innerHTML = "";
        document.getElementById("err_jenis_kelamin").innerHTML = "";
        document.getElementById("err_alamat").innerHTML = "";
        document.getElementById("err_no_telp").innerHTML = "";
    }

    $(document).on('click', '.edit_data', function(){
        $('html, body').animate({scrollTop: 0}, 'slow');
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "get_data.php",
            data:{id:id},
            dataType: 'json',
            success:function(response){
                reset();
                $('html, body').animate({scrollTop:30}, 'slow');
                document.getElementById('id').value = response.id;
                document.getElementById('nama').value = response.nama;
                document.getElementById('alamat').value = response.alamat;
                document.getElementById('no_telp').value = response.no_telp;
                if (response.jenis_kelamin == 'L') {
                    document.getElementById("jenkel1").checked = true;
                } else {
                    document.getElementById("jenkel2").checked = true;
                }
            },error:function(response){
                console.log(response.responseText)
            }
        });
    });

    $(document).on('click', '.hapus_data', function(){
    var id = $(this).attr('id');
    if (!id) {
        console.log('ID tidak ditemukan');
        return;
    }
    $.ajax({
        type: 'POST',
        url: "hapus_data.php",
        data: {id: id},
        success: function(response) {
            try {
                const res = JSON.parse(response);
                if (res.success) {
                    alert('Data berhasil dihapus');
                    $('.data').load("data.php");  // Memuat ulang data
                } else {
                    console.log('Penghapusan gagal:', res.error || 'Error tidak diketahui');
                }
            } catch (e) {
                console.log('Kesalahan parsing JSON:', e);
                console.log(response);
            }
        },
        error: function(response){
            console.log('Kesalahan AJAX:', response.responseText);
        }
    });
});


</script>