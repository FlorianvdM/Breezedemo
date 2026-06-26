@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergeen Pagina</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" aria-label="Sluiten" data-bs-dismiss="alert"></button>
    </div>
    <meta http-equiv="refresh" content="3;url={{ route('allergenen.index') }}">
    @endif
    <a href="{{ route('allergenen.create') }}" class="btn btn-primary mt-3">Nieuwe Allergeen</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Omschrijving</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($allergenen as $allergeen)
                <tr>
                    <td>{{ $allergeen->Id }}</td>
                    <td>{{ $allergeen->Naam }}</td>
                    <td>{{ $allergeen->Omschrijving }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Geen allergenen gevonden.</td>
                </tr>
            @endforelse
        </tbody>
    </table>


</body>
</html>