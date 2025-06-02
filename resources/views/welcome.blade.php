<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil - Auto Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans min-h-screen flex flex-col">

    <header class="bg-black shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo / Marque -->
            <a href="{{ url('/') }}"
                class="flex items-center space-x-2 text-xl font-bold text-white dark:text-gray-100">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-8">
                <span>Cars Heaven</span>
            </a>

            <!-- Navigation -->
            <nav class="flex items-center gap-4 text-sm">
                <a href="{{ url('/about') }}" class="font-bold text-white dark:text-gray-100">À propos de
                    nous</a>
                <a href="{{ url('/contact') }}" class="font-bold text-white dark:text-gray-100">Contactez-nous</a>

                @guest
                    <a href="{{ route('login') }}" class="font-bold text-white dark:text-gray-100">Se connecter</a>
                    <a href="{{ route('register') }}" class="font-bold text-white dark:text-gray-100">Inscrivez-vous</a>
                @else
                    <span class="text-gray-700 dark:text-gray-200">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-600 dark:text-red-400 font-semibold hover:underline">
                            Logout
                        </button>
                    </form>
                @endguest
            </nav>
        </div>
    </header>
    <main
        class="flex-1 min-h-screen bg-[url('{{ asset('images/Voiture.png') }}')] bg-cover bg-center bg-no-repeat flex items-start justify-start">

        <div class="text-white p-8 rounded-md ml-16 mt-60 max-w-lg space-y-4">
            <h2 class="text-5xl font-bold">Offres sur roues</h2>
            <p>
                Découvrez plus de 200 modèles de concessionnaires automobiles sur Dribbble…. Interface utilisateur / UX
                du site Web du concessionnaire automobile audi auto concessionnaire automobile marque voiture
                concessionnaire automobile crédit location.
            </p>
            <a href="{{ url('/bienvenue') }}" class="inline-block bg-white text-black px-4 py-2 rounded transition">
                Voir tous les modèles
            </a>
        </div>

    </main>
    <footer class="text-center py-4 text-sm bg-black text-white">
        &copy; {{ date('Y') }} Auto Service. Tous droits réservés.
    </footer>


</body>

</html>
