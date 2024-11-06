<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/anti_injection.php';
    require '../fungsi/pesan_kilat.php';

    if (!empty($_GET['jabatan'])) {
        $jabatan = anti_injection($koneksi, $_POST['jabatan']);
        $keterangan = anti_injection($koneksi, $_POST['keterangan']);
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', 'Jabatan berhasil ditambahkan');
        } else {
            pesan('danger', 'Jabatan gagal ditambahkan karena:' . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    } else if (!empty($_GET['anggota'])) {
        $username = anti_injection($koneksi, $_POST['username']);
        $password = anti_injection($koneksi, $_POST['password']);
        $level = anti_injection($koneksi, $_POST['level']);
        $jabatan = anti_injection($koneksi, $_POST['jabatan']);
        $nama = anti_injection($koneksi, $_POST['nama']);
        $jenis_kelamin = anti_injection($koneksi, $_POST['jenis_kelamin']);
        $alamat = anti_injection($koneksi, $_POST['alamat']);
        $no_telp = anti_injection($koneksi, $_POST['no_telp']);

        $salt = bin2hex(random_bytes(16));
        $combined_password = $salt . $password;
        $hashed_password = password_hash($password . $salt, PASSWORD_BCRYPT);

        $query = "INSERT INTO user (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt', '$level')";
        if (mysqli_query($koneksi, $query)) {
            $last_id = mysqli_insert_id($koneksi);
            $query = "INSERT INTO anggota(nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$last_id', '$jabatan')";
            if (mysqli_query($koneksi, $query)) {
                pesan('success', 'Anggota berhasil ditambahkan');
            } else {
                pesan('danger', 'Anggota gagal ditambahkan karena:' . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', 'Anggota gagal ditambahkan karena:' . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=anggota");
    }
}
