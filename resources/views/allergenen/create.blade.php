@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jamin</title>
</head>
<body>
    <div class="container">

        <h2>{{ $title }}</h2>

        <form method="POST" action="{{ route('allergenen.store') }}">
            @csrf

            <div class="mb-3">
                <label for="naam" class="form-label">Naam</label>
                <input type="text" class="form-control" id="naam" name="naam"
                       placeholder="Noteer hier de naam van het allergeen">
            </div>

            <div class="mb-3">
                <label for="omschrijving" class="form-label">Omschrijving</label>
                <input type="text" class="form-control" id="omschrijving" name="description"
                       placeholder="Noteer hier de omschrijving van het allergeen.">
            </div>

            <button type="submit" class="btn btn-primary">Verzend</button>

        </form>

    </div>
</body>
</html>