<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <style>
        body { margin: 0; font-family: system-ui, -apple-system, sans-serif; background: #f8fafc; color: #0f172a; }
        .container { max-width: 680px; margin: 48px auto; padding: 0 20px; }
        .card { background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; }
        h1 { margin-top: 0; }
        label { display: block; margin: 16px 0 8px; font-weight: 600; }
        input { width: 100%; padding: 11px 12px; border: 1px solid #cbd5e1; border-radius: 8px; font: inherit; }
        .error { margin: 12px 0; padding: 12px 16px; border-radius: 8px; background: #fee2e2; color: #991b1b; }
        .actions { display: flex; gap: 10px; margin-top: 24px; }
        .button { display: inline-block; padding: 10px 16px; border-radius: 8px; border: 0; text-decoration: none; cursor: pointer; font: inherit; background: #0f172a; color: white; }
        .secondary { background: #e2e8f0; color: #0f172a; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Tambah Mahasiswa</h1>

            @if ($errors->any())
                <div class="error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf

                <label for="nama">Nama</label>
                <input id="nama" name="nama" type="text" value="{{ old('nama') }}" required>

                <label for="nim">NIM</label>
                <input id="nim" name="nim" type="text" value="{{ old('nim') }}" required>

                <label for="prodi">Program Studi</label>
                <input id="prodi" name="prodi" type="text" value="{{ old('prodi') }}" required>

                <div class="actions">
                    <button class="button" type="submit">Simpan</button>
                    <a class="button secondary" href="{{ route('mahasiswa.index') }}">Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
