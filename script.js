document.getElementById('recommend').addEventListener('click', function() {
    const undertone = document.getElementById('undertone').value;
    const size = document.getElementById('size').value;
    const resultText = document.getElementById('recommendation-text');
    const resultImage = document.getElementById('recommendation-image');

    let recommendations = '';
    let imageUrl = '';

    // Rekomendasi berdasarkan undertone dan ukuran
    if (undertone === 'cool') {
        if (size === 'S') {
            recommendations = 'Rekomendasi: Blus biru muda dan celana hitam.';
            imageUrl = 'path/to/cool_s.jpg'; // Ganti dengan URL gambar yang sesuai
        } else if (size === 'M') {
            recommendations = 'Rekomendasi: Gaun ungu dan sepatu putih.';
            imageUrl = 'path/to/cool_m.jpg'; // Ganti dengan URL gambar yang sesuai
        } else if (size === 'L') {
            recommendations = 'Rekomendasi: Kemeja hijau mint dan jeans biru.';
            imageUrl = 'path/to/cool_l.jpg'; // Ganti dengan URL gambar yang sesuai
        } else if (size === 'XL') {
            recommendations = 'Rekomendasi: Jaket denim dan kaos putih.';
            imageUrl = 'path/to/cool_xl.jpg'; // Ganti dengan URL gambar yang sesuai
        }
    } else if (undertone === 'warm') {
        if (size === 'S') {
            recommendations = 'Rekomendasi: Blus peach dan rok putih.';
            imageUrl = 'path/to/warm_s.jpg'; // Ganti dengan URL gambar yang sesuai
        } else if (size === 'M') {
            recommendations = 'Rekomendasi: Gaun kuning dan sandal coklat.';
            imageUrl = 'path/to/warm_m.jpg'; // Ganti dengan URL gambar yang sesuai
        } else if (size === 'L') {
            recommendations = 'Rekomendasi: Kemeja merah dan celana khaki.';
            imageUrl = 'path/to/warm_l.jpg'; // Ganti dengan URL gambar yang sesuai
        } else if (size === 'XL') {
            recommendations = 'Rekomendasi: Jaket kulit dan kaos hitam.';
            imageUrl = 'path/to/warm_xl.jpg'; // Ganti dengan URL gambar yang sesuai
        }
    } else if (undertone === 'neutral') {
        if (size === 'S') {
            recommendations = 'Rekomendasi: Blus abu-abu dan celana jeans.';
            imageUrl = 'path/to/neutral_s.jpg'; // Ganti dengan URL gambar yang sesuai
        } else if (size === 'M') {
            recommendations = 'Rekomendasi: Gaun navy dan sepatu nude.';
            imageUrl = 'path/to/neutral_m.jpg'; // Ganti dengan URL gambar yang sesuai
        } else if (size === 'L') {
            recommendations = 'Rekomendasi: Kemeja putih dan celana biru navy.';
            imageUrl = 'path/to/neutral_l.jpg'; // Ganti dengan URL gambar yang sesuai
        } else if (size === 'XL') {
            recommendations = 'Rekomendasi: Sweater krem dan celana hitam.';
            imageUrl = 'path/to/neutral_xl.jpg'; // Ganti dengan URL gambar yang sesuai
        }
    }

    // Menampilkan rekomendasi di kotak hasil
    resultText.innerHTML = recommendations;

    if (imageUrl) {
        resultImage.src = imageUrl;
        resultImage.style.display = "block"; // Menampilkan gambar jika ada
    } else {
        resultImage.style.display = "none"; // Menyembunyikan gambar jika tidak ada
    }
});