<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Connexion - Cars Heaven</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black min-h-screen flex flex-col items-center justify-center p-6">

    <!-- Formulaire de connexion -->
    <div class="w-full max-w-sm bg-white p-8 rounded shadow-md">
        <!-- Titre cliquable -->
        <div class="w-full flex justify-center mb-8">
            <a href="{{ url('/') }}"
                class="flex items-center space-x-2 text-3xl font-bold text-black dark:text-gray-100">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-8">
                <span>Cars Heaven</span>
            </a>
        </div>

        <h2 class="text-2xl font-bold mb-6 text-center text-black-600">Connexion</h2>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Ici ton formulaire de connexion -->
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password" name="password" id="password"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-blue-400" required>
            </div>

            <button type="submit" class="w-full bg-black text-white py-2 rounded hover:bg-black transition">Se
                connecter</button>
        </form>
    </div>

</body>

</html>
