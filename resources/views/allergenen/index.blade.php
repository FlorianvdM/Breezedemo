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