<?php
// Menghubungkan ke koneksi.php
include 'koneksi.php';

// Ambil data peraturan yang akan diedit berdasarkan ID (misalnya ID = 1)
$id_peraturan = 1; // Misalnya ID peraturan yang ingin diedit
$query = "SELECT * FROM peraturan WHERE id = $id_peraturan";
$result = mysqli_query($koneksi, $query);
$peraturan = mysqli_fetch_assoc($result);

// Proses saat form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    
    // Update peraturan di database
    $update_query = "UPDATE peraturan SET judul = '$judul', isi = '$isi' WHERE id = $id_peraturan";
    if (mysqli_query($koneksi, $update_query)) {
        echo "Peraturan berhasil diperbarui!";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peraturan Pondok Pesantren Al-Miftah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .toolbar {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1>Edit Peraturan Pondok Pesantren Al-Miftah</h1>
    <form action="editperaturan.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $peraturan['id']; ?>">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Peraturan:</label>
            <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $peraturan['judul']; ?>" required>
        </div>
        
        <div class="toolbar">
            <button type="button" class="btn btn-outline-secondary" onclick="document.execCommand('bold')"><b>Bold</b></button>
            <button type="button" class="btn btn-outline-secondary" onclick="document.execCommand('italic')"><i>Italic</i></button>
            <button type="button" class="btn btn-outline-secondary" onclick="document.execCommand('underline')"><u>Underline</u></button>
            <button type="button" class="btn btn-outline-secondary" onclick="document.execCommand('justifyLeft')">Left</button>
            <button type="button" class="btn btn-outline-secondary" onclick="document.execCommand('justifyCenter')">Center</button>
            <button type="button" class="btn btn-outline-secondary" onclick="document.execCommand('justifyRight')">Right</button>
            <button type="button" class="btn btn-outline-secondary" onclick="document.execCommand('formatBlock', false, 'h1')">H1</button>
            <button type="button" class="btn btn-outline-secondary" onclick="document.execCommand('formatBlock', false, 'h2')">H2</button>
            <button type="button" class="btn btn-outline-secondary" onclick="document.execCommand('formatBlock', false, 'h3')">H3</button>
            <select onchange="document.execCommand('fontSize', false, this.value)">
                <option value="3">Normal</option>
                <option value="5">Large</option>
                <option value="7">Very Large</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="isi" class="form-label">Isi Peraturan:</label><br>
            <!-- Contenteditable untuk area edit -->
            <div contenteditable="true" name="isi" id="isi" class="form-control" rows="10" style="min-height: 300px;"><?php echo $peraturan['isi']; ?></div>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
