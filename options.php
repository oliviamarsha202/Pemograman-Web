<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opsi Fashion</title>
    <link rel="stylesheet" href="styles1.css">
    <style>
        .options-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .option-item, .selected-item {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 300px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .option-item img, .selected-item img {
            border-radius: 10px;
            max-width: 100%;
            height: auto;
        }
        .option-item select, .option-item button {
            margin-top: 10px;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .choose-option {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .choose-option:hover {
            background-color: #0056b3;
        }
        #selected-card {
        display: none; /* Awalnya disembunyikan */
        margin: 20px auto;
        text-align: center;
        max-width: 300px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        }

    </style>
</head>
<body>

    <nav>
        <div class="container">
            <h2>Gaya Kita</h2>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="importance.php">Importance</a></li>
                <li><a href="undertones.php">Undertones</a></li>
                <li><a href="body-types.php">Body Types</a></li>
                <li><a href="options.php">Options</a></li>
            </ul>
        </div>
    </nav>

    <section id="options">
        <div class="container">
            <p>Berikut adalah beberapa opsi fashion yang bisa kamu pilih sesuai dengan gaya dan preferensimu:</p>
            <div class="options-grid">
                <?php
                include 'db_connection.php';

                $sqlKategori = "SELECT * FROM KategoriBaju";
                $resultKategori = $conn->query($sqlKategori);

                if ($resultKategori->num_rows > 0) {
                    while ($rowKategori = $resultKategori->fetch_assoc()) {
                        $kategoriId = $rowKategori['id_kategori'];
                        $kategoriNama = $rowKategori['nama_kategori'];
                        $kategoriGambar = $rowKategori['gambar'];

                        $sqlJenis = "SELECT * FROM JenisBaju WHERE id_kategori = $kategoriId";
                        $resultJenis = $conn->query($sqlJenis);

                        echo "<div class='option-item' id='kategori-$kategoriId'>";
                        echo "<h3>Gaya $kategoriNama</h3>";
                        echo "<p>Pilih gaya $kategoriNama sesuai keinginanmu.</p>";
                        echo "<img src='$kategoriGambar' alt='Gaya $kategoriNama'>";
                        echo "<select id='options-$kategoriId'>";
                        echo "<option value='' data-name='' data-img=''>Pilih Opsi $kategoriNama</option>";

                        if ($resultJenis->num_rows > 0) {
                            while ($rowJenis = $resultJenis->fetch_assoc()) {
                                $idJenis = $rowJenis['id_jenis'];
                                $namaJenis = $rowJenis['nama_jenis'];
                                $gambarJenis = $rowJenis['gambar'];
                                echo "<option value='$idJenis' data-name='$namaJenis' data-img='$gambarJenis'>$namaJenis</option>";
                            }
                        } else {
                            echo "<option value=''>Tidak ada opsi tersedia</option>";
                        }

                        echo "</select>";
                        echo "<button class='choose-option' data-id='$kategoriId'>Pilih Gaya $kategoriNama</button>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Tidak ada kategori tersedia.</p>";
                }

                $conn->close();
                ?>
            </div>
            <div id="selected-card" class="selected-item">
                <h3>Gaya yang Kamu Pilih:</h3>
                <img id="selected-image" src="" alt="">
                <p id="selected-name"></p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 GAYA KITA All rights reserved.</p>
    </footer>

    <script>
        document.querySelectorAll('.choose-option').forEach(button => {
            button.addEventListener('click', function() {
                const categoryId = this.dataset.id;
                const selectElement = document.getElementById(`options-${categoryId}`);
                const selectedOption = selectElement.options[selectElement.selectedIndex];
                const selectedName = selectedOption.dataset.name;
                const selectedImage = selectedOption.dataset.img;

                if (selectedOption.value) {
                    document.getElementById('selected-card').style.display = 'block';
                    document.getElementById('selected-name').innerText = `Anda memilih: ${selectedName}`;
                    document.getElementById('selected-image').src = selectedImage;
                    document.getElementById('selected-image').alt = selectedName;
                } else {
                    alert('Silakan pilih gaya terlebih dahulu.');
                }
            });
        });
    </script>
</body>
</html>
