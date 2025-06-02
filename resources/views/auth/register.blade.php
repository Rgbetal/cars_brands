<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Créer un compte</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md">
        <div class="bg-white p-5 rounded shadow-md w-full max-w-md text-center">
            <a href="{{ url('/') }}"
                class="flex items-center justify-center space-x-2 mb-4 text-3xl font-bold text-black">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-8">
                <span>Cars Heaven</span>
            </a>
        </div>

        <div class="bg-white p-8 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-4 text-center text-black">Créer un compte</h2>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
                    <input type="text" name="name" id="name"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                    <input type="email" name="email" id="email"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                    <input type="password" name="password" id="password"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    <div>
                        <label for="password_confirmation"
                            class="block text-sm font-medium text-gray-700 py-2">Confirmez le
                            mot
                            de passe</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="w-full border border-gray-300 rounded py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            required>
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                            class="w-full bg-black hover:bg-black text-white py-2 rounded transition duration-200">
                            S'inscrire
                        </button>
            </form>
        </div>
</body>

</html>
