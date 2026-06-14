<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>{{ $title }}</h1>

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

                    <a href="{{ route('praktijkmanagement.userroles') }}" class="btn btn-secondary">Terug</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
