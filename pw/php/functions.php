<?php
// koneksi ke database
function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'prakweb_a_203040041_pw');
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{

    $conn = koneksi();

    $id_buku = htmlspecialchars($data['id_buku']);
    $nama_buku = htmlspecialchars($data['nama_buku']);
    $gambar = htmlspecialchars($data['gambar']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $genre_buku = htmlspecialchars($data['genre_buku']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $thn_terbit = htmlspecialchars($data['thn_terbit']);

    $query = "INSERT INTO
                buku
            VALUES
            (null, '$id_buku', '$nama_buku', '$gambar', '$pengarang', '$genre_buku', '$penerbit', '$thn_terbit');
            ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}