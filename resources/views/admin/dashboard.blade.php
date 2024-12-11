<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <script>
        function showTable(type) {
            document.getElementById('portfolioTable').style.display = type === 'portfolio' ? 'block' : 'none';
            document.getElementById('contactTable').style.display = type === 'contact' ? 'block' : 'none';
        }
    </script>
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-2">Admin Dashboard</h1>
        
        <!-- Buttons to toggle between tables -->
        <div class="mb-3">
            <button class="btn btn-primary" onclick="showTable('portfolio')">Lihat Portofolio</button>
            <button class="btn btn-secondary" onclick="showTable('contact')">Lihat Contact</button>
        </div>

        <!-- Portfolio Table -->
        <div id="portfolioTable" style="display: block;">
            <h2 class="mb-5">Daftar Pengunduhan Portofolio</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Keperluan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolios as $service)
                        <tr>
                            <td>{{ $service->created_at }}</td>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->email }}</td>
                            <td>{{ $service->userType }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $portfolios->links("pagination::bootstrap-5") }}
            </div>
        </div>

        <!-- Contact Table -->
        <div id="contactTable" style="display: none;">
            <h2 class="mb-5">Daftar Kontak Masuk</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->created_at }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $contacts->links("pagination::bootstrap-5") }}
            </div>
        </div>
    </div>
</body>
</html>