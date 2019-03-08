<?php
$config = array(
    'register' => array(
//        array(
//            'field' => 'emailaddress',
//            'label' => 'EmailAddress',
//            'rules' => 'required|valid_email'
//         ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        )
    ),
    'resetpassword' => array(
        array(
            'field' => 'password1',
            'label' => 'Password',
            'rules' => 'required'
        ),
        array(
            'field' => 'password2',
            'label' => 'Password',
            'rules' => 'required'
        )
    ),
    'addmatriks' => array(
        array(
            'field' => 'group_desc',
            'label' => 'Pengeluaran',
            'rules' => 'required'
        ),
        array(
            'field' => 'limit_bawah',
            'label' => 'Limit Bawah',
            'rules' => 'required'
        ),
        array(
            'field' => 'limit_atas',
            'label' => 'Limit Atas',
            'rules' => 'required'
        )
    ),
    'addsupplier' => array(
        array(
            'field' => 'company',
            'label' => 'Nama Perusahaan',
            'rules' => 'required'
        ),
        array(
            'field' => 'name',
            'label' => 'Nama Lengkap',
            'rules' => 'required'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        )
    ),
    'addbank' => array(
        array(
            'field' => 'bank_nama',
            'label' => 'Nama Bank',
            'rules' => 'required'
        ),
        array(
            'field' => 'bank_norek',
            'label' => 'No Rekening',
            'rules' => 'required'
        ),
        array(
            'field' => 'item_kode',
            'label' => 'Kode Transaksi',
            'rules' => 'required'
        )
    ),
    'addlevel' => array(
        array(
            'field' => 'desc',
            'label' => 'Deskripsi',
            'rules' => 'required'
        ),
        array(
            'field' => 'level',
            'label' => 'Leveling',
            'rules' => 'required|integer'
        )
    ),
    'addcabang' => array(
        array(
            'field' => 'cabang',
            'label' => 'Nama Cabang',
            'rules' => 'required'
        ),
    ),
    'adduser' => array(
        array(
            'field' => 'nama',
            'label' => 'Nama Lengkap',
            'rules' => 'required'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|matches[password1]'
        ),
        array(
            'field' => 'password1',
            'label' => 'Ulangi Password',
            'rules' => 'required'
        )
    ),
    'addbudget' => array(
        array(
            'field' => 'period',
            'label' => 'Periode Budget',
            'rules' => 'required'
        ),
        array(
            'field' => 'jumlah',
            'label' => 'Jumlah',
            'rules' => 'required'
        )
    ),
    'addrequest' => array(
        array(
            'field' => 'jumlah',
            'label' => 'Jumlah Permintaan',
            'rules' => 'required'
        ),
        array(
            'field' => 'terbilang',
            'label' => 'Terbilang',
            'rules' => 'required'
        ),
        array(
            'field' => 'uraian',
            'label' => 'Uraian',
            'rules' => 'required'
        )
    ),
    'changepassword' => array(
        array(
            'field' => 'old_password',
            'label' => 'Password Lama',
            'rules' => 'required'
        ),
        array(
            'field' => 'new_password',
            'label' => 'Password Baru',
            'rules' => 'required'
        ),
        array(
            'field' => 'retype_password',
            'label' => 'Ulangi Password Baru',
            'rules' => 'required'
        )
    ),
    'approvepd' => array(
        array(
            'field' => 'tgl_awal',
            'label' => 'Tanggal Awal',
            'rules' => 'required'
        ),
        array(
            'field' => 'tgl_akhir',
            'label' => 'Tanggal Akhir',
            'rules' => 'required'
        ),
    ),
    'addlibur' => array(
        array(
            'field' => 'tgl_awal',
            'label' => 'Tanggal Awal',
            'rules' => 'required'
        ),
        array(
            'field' => 'tgl_akhir',
            'label' => 'Tanggal Akhir',
            'rules' => 'required'
        ),
        array(
            'field' => 'uraian',
            'label' => 'Keterangan libur / cuti',
            'rules' => 'required'
        ),
    ),
    'additem' => array(
        array(
            'field' => 'desc',
            'label' => 'Jenis Transaksi',
            'rules' => 'required'
        ),
        array(
            'field' => 'kode',
            'label' => 'Kode Transaksi',
            'rules' => 'required'
        ),
    ),
    'addspekdesc' => array(
        array(
            'field' => 'desc',
            'label' => 'Nama Spesifikasi',
            'rules' => 'required'
        )
    ),
    'addscan' => array(
        array(
            'field' => 'nama',
            'label' => 'Nama Dokumen',
            'rules' => 'required'
        ),
    ),
    'kontak' => array(
        array(
            'field' => 'judul',
            'label' => 'Judul Pesan',
            'rules' => 'required'
        ),
        array(
            'field' => 'isi',
            'label' => 'Isi Pesan',
            'rules' => 'required'
        ),
    ),
);
?>