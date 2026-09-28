<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #f8fafc;
            color: #0f172a;
        }
        .container { max-width: 1000px; margin: 48px auto; padding: 0 20px; }
        .header { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 24px; }
        h1 { margin: 0 0 6px; }
        p { margin: 0; color: #64748b; }
        .button {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            border: 0;
            cursor: pointer;
            font: inherit;
            background: #0f172a;
            color: white;
        }
        .button-secondary { background: #e2e8f0; color: #0f172a; }
        .button-danger { background: #dc2626; }
        .alert {
            background: #dcfce7;
            color: #166534;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .table-wrapper {
            overflow-x: auto;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
        }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 14px 16px; text-align: left; border-bottom: 1px solid #e2e8f0; }
        th { background: #f1f5f9; }
        tr:last-child td { border-bottom: 0; }
        .actions { display: flex; gap: 8px; align-items: center; }
        .actions form { margin: 0; }
        .empty { text-align: center; padding: 32px; color: #64748b; }
        @media (max-width: 640px) {
            .header { align-items: flex-start; flex-direction: column; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                <h1>Data Mahasiswa</h1>
                <p>CRUD sederhana untuk tugas Konstruksi & Evolusi Perangkat Lunak.</p>
            </div>
            <a class="button" href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a>
        </div>

        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <div class="table-wrapper">
            @if ($mahasiswas->isEmpty())
                <div class="empty">Belum ada data mahasiswa.</div>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Program Studi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswas as $mahasiswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->prodi }}</td>
                                <td>
                                    <div class="actions">
                                        <a class="button button-secondary" href="{{ route('mahasiswa.edit', $mahasiswa) }}">Edit</a>
                                        <form action="{{ route('mahasiswa.destroy', $mahasiswa) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="button button-danger" type="submit">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</body>
</html>
