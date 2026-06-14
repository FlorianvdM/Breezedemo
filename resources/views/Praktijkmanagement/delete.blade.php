<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Weet je zeker dat je deze gebruiker wilt verwijderen?</h1>

                    <table class="table table-bordered mt-3">
                        <tr>
                            <th>Naam</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Gebruikersrol</th>
                            <td>{{ $user->rolename }}</td>
                        </tr>
                    </table>

                    <form action="{{ route('praktijkmanagement.destroy', $user->Id ?? $user->id) }}" method="POST" class="mt-4">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ja, Verwijderen</button>
                        <a href="{{ route('praktijkmanagement.userroles') }}" class="btn btn-secondary">Annuleren</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
