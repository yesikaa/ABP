<?php
// Ambil data 'period' dari AJAX
$type = $_GET['period'] ?? '';

echo "<div class='ajax-response' style='padding: 30px; border: 2px solid var(--secondary); background: var(--white); border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 31, 63, 0.05);'>";
    
if ($type == 'hima') {
    echo "<h2 style='color: var(--primary); font-weight: 900;'>Sekretaris Umum</h2>";
    echo "<h4 style='color: #666; margin-top: -10px;'>HMIF Telkom University Purwokerto | 2024 - 2025</h4>";
    echo "<hr style='border: 0; border-top: 1px solid var(--border); margin: 20px 0;'>";
    
    echo "<p style='font-size: 1.1rem; color: #444; line-height: 1.8;'>
            Bertanggung jawab penuh atas manajemen administrasi dan pusat informasi organisasi bagi seluruh anggota Himpunan Mahasiswa Informatika.
            <br><br>
            <b>Tanggung Jawab Utama:</b>
            <ul style='color: #555; line-height: 1.8;'>
                <li><b>Manajemen Administrasi:</b> Mengelola standarisasi dokumen legal, surat masuk/keluar, dan arsip digital himpunan secara terstruktur.</li>
                <li><b>Notulensi & Dokumentasi:</b> Bertanggung jawab atas pencatatan hasil rapat (notulensi) dan memastikan distribusi informasi hasil rapat ke divisi terkait tepat waktu.</li>
                <li><b>Koordinasi Internal:</b> Menghubungkan komunikasi administrasi antar divisi dan pihak fakultas/universitas untuk kelancaran program kerja.</li>
                <li><b>Penyusunan LPJ:</b> Mengoordinasi penyusunan Laporan Pertanggungjawaban (LPJ) rutin dan akhir periode bagi seluruh divisi di HMIF.</li>
            </ul>
          </p>";
} elseif ($type == 'solu_tw') {
    echo "<h3 style='color: var(--primary);'>Technical Writer - PT Solu Filantropi</h3>";
    echo "<p>Membuat dokumen teknis yang detail namun mudah dipahami, seperti PRD, User Manual, dan laporan proyek bulanan.</p>";
} elseif ($type == 'solu_hd') {
    echo "<h3 style='color: var(--primary);'>Helpdesk Support - PT Solu Filantropi</h3>";
    echo "<p>Membantu user dalam menangani kendala aplikasi dan berkoordinasi dengan tim developer untuk penyelesaian bug.</p>";
} elseif ($type == 'astra') {
    echo "<h3 style='color: var(--primary);'>Quality Assurance - PT Astra Jingga</h3>";
    echo "<p>Melakukan manual testing untuk proyek BRISmart BRI Corporate University, memastikan fitur berjalan sesuai spesifikasi.</p>";
} elseif ($type == 'nusantara') {
    echo "<h2 style='color: var(--primary); font-weight: 900;'>Sekretaris Event</h2>";
    echo "<h4 style='color: #666; margin-top: -10px;'>Nusantara Group | 2025</h4>";
    echo "<hr style='border: 0; border-top: 1px solid var(--border); margin: 20px 0;'>";
    echo "<p style='font-size: 1.1rem; color: #444; line-height: 1.8;'>
            Bertanggung jawab penuh dalam mengelola administrasi dan dokumentasi acara berskala besar di bawah naungan <b>Nusantara Group</b>. 
            <br><br>
            Tugas utama meliputi:
            <ul style='color: #555;'>
                <li>Menyusun administrasi persuratan dan proposal kegiatan.</li>
                <li>Melakukan koordinasi jadwal antar divisi untuk kelancaran acara.</li>
                <li>Mendokumentasikan notulensi rapat dan laporan pertanggungjawaban (LPJ) event.</li>
            </ul>
          </p>";

} elseif ($type == 'cazh_qa') {
    echo "<h2 style='color: var(--primary); font-weight: 900;'>Quality Assurance Intern</h2>";
    echo "<h4 style='color: #666; margin-top: -10px;'>PT CAZH | Jan - Feb 2026</h4>";
    echo "<hr style='border: 0; border-top: 1px solid var(--border); margin: 20px 0;'>";
    
    echo "<p style='font-size: 1.1rem; color: #444; line-height: 1.8;'>
            Terlibat dalam siklus pengembangan perangkat lunak (SDLC) khususnya pada tahap pengujian untuk memastikan aplikasi bebas dari <i>bug</i> dan memiliki <i>user experience</i> yang optimal.
            <br><br>
            <b>Tanggung Jawab Utama:</b>
            <ul style='color: #555; line-height: 1.8;'>
                <li><b>Manual Testing:</b> Melakukan pengujian fungsional secara manual pada platform mobile dan web untuk mengidentifikasi anomali sistem.</li>
                <li><b>Bug Reporting:</b> Menyusun laporan temuan <i>bug</i> secara detail, termasuk langkah-langkah reproduksi (steps to reproduce) dan tingkat keparahan (severity).</li>
                <li><b>Test Case Development:</b> Membantu menyusun dokumen skenario pengujian (Test Case) berdasarkan dokumen kebutuhan sistem.</li>
                <li><b>Regression Testing:</b> Memastikan fitur-fitur lama tetap berjalan normal setelah adanya pembaruan atau perbaikan kode pada aplikasi Cazh.</li>
            </ul>
          </p>";

    } else {
    echo "<h3>Info</h3>";
    echo "<p>Detail tidak ditemukan.</p>";
}

echo "</div>";
?>