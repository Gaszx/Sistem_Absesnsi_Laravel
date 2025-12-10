<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Absensi | Bagassjw</title>
    
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>

    <div id="loader-wrapper">
        <div class="scanner"></div>
        <div class="loader-text">INITIALIZING SYSTEM...</div>
    </div>

    <div class="container" id="main-content">
        <h1 class="system-title">SISTEM ABSENSI</h1>

        <div class="id-card">
            <div class="profile-info">
                <h2>Bagassjw</h2>
                <span class="nim-badge">NIM: 2306018</span>
                
                <div class="divider"></div>
                
                <p>Praktikum Pemprograman Web</p>
                <p style="font-size: 0.9rem; opacity: 0.7;">Institut Teknologi Garut</p>
            </div>
        </div>

        <div class="footer-note">
            &copy; 2025 Secure Attendance System v1.0
        </div>
    </div>

    <script>
        // Script ini murni JavaScript, tanpa library tambahan agar ringan
        window.addEventListener('load', function() {
            const loader = document.getElementById('loader-wrapper');
            const content = document.getElementById('main-content');

            // Tahan loading selama 2 detik biar terlihat keren efeknya
            setTimeout(function() {
                // Hilangkan loader
                loader.style.opacity = '0';
                
                // Setelah transisi selesai, buang elemen loader dari layar
                setTimeout(function() {
                    loader.style.display = 'none';
                    
                    // Munculkan konten utama dengan efek naik
                    content.style.opacity = '1';
                    content.style.transform = 'translateY(0)';
                }, 800);

            }, 2000); // Durasi loading 2 detik
        });
    </script>
</body>
</html>