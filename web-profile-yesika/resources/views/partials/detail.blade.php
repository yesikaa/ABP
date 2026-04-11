<div class='ajax-response' style='padding: 30px; border: 2px solid var(--secondary); background: var(--white); border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 31, 63, 0.05); text-align: left;'>
    
    @if($slug == 'hima')
        <h2 style='color: var(--primary); font-weight: 900;'>Sekretaris Umum</h2>
        <h4 style='color: #666; margin-top: -10px;'>HMIF Telkom University Purwokerto | 2024 - 2025</h4>
        <hr style='border: 0; border-top: 1px solid var(--border); margin: 20px 0;'>
        <p style='font-size: 1.1rem; color: #444; line-height: 1.8;'>
            Bertanggung jawab penuh atas manajemen administrasi dan pusat informasi organisasi bagi seluruh anggota Himpunan Mahasiswa Informatika.
            <br><br>
            <b>Tanggung Jawab Utama:</b>
            <ul style='color: #555; line-height: 1.8; margin-left: 20px;'>
                <li><b>Manajemen Administrasi:</b> Mengelola standarisasi dokumen legal, surat masuk/keluar, dan arsip digital himpunan secara terstruktur.</li>
                <li><b>Notulensi & Dokumentasi:</b> Bertanggung jawab atas pencatatan hasil rapat (notulensi) dan memastikan distribusi informasi hasil rapat ke divisi terkait tepat waktu.</li>
                <li><b>Koordinasi Internal:</b> Menghubungkan komunikasi administrasi antar divisi dan pihak fakultas/universitas untuk kelancaran program kerja.</li>
                <li><b>Penyusunan LPJ:</b> Mengoordinasi penyusunan Laporan Pertanggungjawaban (LPJ) rutin dan akhir periode bagi seluruh divisi di HMIF.</li>
            </ul>
        </p>

    @elseif($slug == 'solu_tw')
        <h2 style='color: var(--primary); font-weight: 900;'>Technical Writer</h2>
        <h4 style='color: #666; margin-top: -10px;'>PT Solu Filantropi | 2022 - 2023</h4>
        <hr style='border: 0; border-top: 1px solid var(--border); margin: 20px 0;'>
        <p style='font-size: 1.1rem; color: #444; line-height: 1.8;'>
            Membuat dokumen teknis yang detail namun mudah dipahami, seperti Product Requirement Document (PRD), User Manual, dan laporan proyek bulanan.
        </p>

    @elseif($slug == 'solu_hd')
        <h2 style='color: var(--primary); font-weight: 900;'>Helpdesk Support</h2>
        <h4 style='color: #666; margin-top: -10px;'>PT Solu Filantropi | 2022 - 2023</h4>
        <hr style='border: 0; border-top: 1px solid var(--border); margin: 20px 0;'>
        <p style='font-size: 1.1rem; color: #444; line-height: 1.8;'>
            Membantu user dalam menangani kendala aplikasi dan berkoordinasi dengan tim developer untuk penyelesaian bug secara efisien.
        </p>

    @elseif($slug == 'astra')
        <h2 style='color: var(--primary); font-weight: 900;'>Quality Assurance</h2>
        <h4 style='color: #666; margin-top: -10px;'>PT Astra Jingga | 2023</h4>
        <hr style='border: 0; border-top: 1px solid var(--border); margin: 20px 0;'>
        <p style='font-size: 1.1rem; color: #444; line-height: 1.8;'>
            Melakukan manual testing untuk proyek BRISmart BRI Corporate University, memastikan fitur berjalan sesuai spesifikasi dan bebas dari kendala teknis.
        </p>

    @elseif($slug == 'nusantara')
        <h2 style='color: var(--primary); font-weight: 900;'>Sekretaris Event</h2>
        <h4 style='color: #666; margin-top: -10px;'>Nusantara Group | 2025</h4>
        <hr style='border: 0; border-top: 1px solid var(--border); margin: 20px 0;'>
        <p style='font-size: 1.1rem; color: #444; line-height: 1.8;'>
            Bertanggung jawab penuh dalam mengelola administrasi dan dokumentasi acara berskala besar.
            <ul style='color: #555; margin-left: 20px;'>
                <li>Menyusun administrasi persuratan dan proposal kegiatan.</li>
                <li>Melakukan koordinasi jadwal antar divisi untuk kelancaran acara.</li>
                <li>Mendokumentasikan notulensi rapat dan laporan pertanggungjawaban (LPJ).</li>
            </ul>
        </p>

    @elseif($slug == 'cazh_qa')
        <h2 style='color: var(--primary); font-weight: 900;'>Quality Assurance Intern</h2>
        <h4 style='color: #666; margin-top: -10px;'>PT CAZH | Jan - Feb 2026</h4>
        <hr style='border: 0; border-top: 1px solid var(--border); margin: 20px 0;'>
        <p style='font-size: 1.1rem; color: #444; line-height: 1.8;'>
            Terlibat dalam siklus pengembangan perangkat lunak (SDLC) khususnya pada tahap pengujian.
            <br><br>
            <b>Tanggung Jawab Utama:</b>
            <ul style='color: #555; line-height: 1.8; margin-left: 20px;'>
                <li><b>Manual Testing:</b> Pengujian fungsional pada platform mobile dan web.</li>
                <li><b>Bug Reporting:</b> Menyusun laporan temuan bug detail dengan steps to reproduce.</li>
                <li><b>Test Case Development:</b> Menyusun dokumen skenario pengujian berdasarkan kebutuhan sistem.</li>
            </ul>
        </p>

    @else
        <div style="text-align: center;">
            <h3 style="color: var(--primary);">Info</h3>
            <p>Data slug "<b>{{ $slug }}</b>" tidak ditemukan dalam sistem.</p>
        </div>
    @endif

</div>