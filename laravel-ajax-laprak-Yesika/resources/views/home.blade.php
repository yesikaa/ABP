<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Laravel AJAX</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #f4f6f8;
            color: #222;
        }

        .container {
            width: 90%;
            max-width: 950px;
            margin: 40px auto;
            background: #ffffff;
            padding: 28px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 24px;
        }

        h1 {
            margin: 0 0 8px 0;
            font-size: 28px;
        }

        p {
            margin: 0;
            color: #555;
            line-height: 1.6;
        }

        button {
            border: none;
            background: #2563eb;
            color: #ffffff;
            padding: 12px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            white-space: nowrap;
        }

        button:hover {
            background: #1d4ed8;
        }

        .info {
            background: #eff6ff;
            border-left: 4px solid #2563eb;
            padding: 12px 16px;
            margin-bottom: 20px;
            border-radius: 8px;
            color: #1e3a8a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
            overflow: hidden;
            border-radius: 10px;
        }

        th, td {
            border: 1px solid #e5e7eb;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #1f2937;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background: #f9fafb;
        }

        .loading {
            margin-top: 16px;
            color: #2563eb;
        }

        .error {
            margin-top: 16px;
            color: #b91c1c;
            background: #fee2e2;
            padding: 12px;
            border-radius: 8px;
        }

        .success {
            margin-top: 16px;
        }

        @media (max-width: 700px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            button {
                width: 100%;
            }

            .table-wrapper {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <main class="container">
        <section class="header">
            <div>
                <h1>Data Mahasiswa</h1>
                <p>Aplikasi sederhana berbasis Laravel yang menampilkan data mahasiswa dari file JSON menggunakan AJAX.</p>
            </div>
            <button type="button" onclick="loadData()">Tampilkan Data</button>
        </section>

        <section class="info">
            Klik tombol <strong>Tampilkan Data</strong> untuk mengambil data dari route <code>/data-mahasiswa</code> tanpa me-refresh halaman.
        </section>

        <section id="hasil"></section>
    </main>

    <script>
        function loadData() {
            const hasil = document.getElementById('hasil');
            hasil.innerHTML = '<p class="loading">Sedang mengambil data mahasiswa...</p>';

            fetch('/data-mahasiswa')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Gagal mengambil data dari server.');
                    }
                    return response.json();
                })
                .then(result => {
                    if (!result.status) {
                        throw new Error(result.message || 'Data tidak berhasil dimuat.');
                    }

                    let html = `
                        <div class="success">
                            <p>${result.message}</p>
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Kelas</th>
                                            <th>Program Studi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    `;

                    result.data.forEach((mahasiswa, index) => {
                        html += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${mahasiswa.nama}</td>
                                <td>${mahasiswa.nim}</td>
                                <td>${mahasiswa.kelas}</td>
                                <td>${mahasiswa.prodi}</td>
                            </tr>
                        `;
                    });

                    html += `
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    `;

                    hasil.innerHTML = html;
                })
                .catch(error => {
                    hasil.innerHTML = `<div class="error">${error.message}</div>`;
                });
        }
    </script>
</body>
</html>
