<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

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
                <a href="#apropos" class="font-bold text-white dark:text-gray-100">À propos de nous</a>
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

        <div class="text-white p-8 rounded-md ml-16 mt-[120px] max-w-lg space-y-4">
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

    <section id="apropos">

        <div class="bg-black text-white min-h-screen flex items-center justify-center px-4 py-12">
            <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Image -->
                <div class="relative">
                    <div class="absolute top-5 left-5 w-full h-full border-4 border-red-600 z-0"></div>
                    <img src="{{ asset('images/porsche.jpg') }}" alt="Porsche" class="relative z-10 shadow-lg" />
                </div>

                <!-- Text -->
                <div>
                    <h2 class="text-4xl font-bold mb-4">A PROPOS DE NOUS</h2>
                    <div class="text-red-600 text-2xl mb-2">“</div>
                    <p class="mb-4">
                        Chez <strong>Cars Heaven</strong>, nous croyons que l’achat d’une voiture doit être une
                        expérience agréable et sans stress.
                    </p>
                    <p class="mb-4">
                        Avec plus de 10 ans d’expertise, nous offrons une sélection rigoureuse de véhicules de qualité,
                        un service client personnalisé,
                        et des solutions de financement adaptées à tous.
                    </p>
                    <p>
                        Rejoignez la famille Cars Heaven et trouvez le véhicule qui vous correspond vraiment.
                    </p>
                    <div class="text-red-600 text-2xl">”</div>

                    <!-- Social Icons -->
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="text-white hover:text-red-600 text-xl"><i
                                class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white hover:text-red-600 text-xl"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white hover:text-red-600 text-xl"><i
                                class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="text-center py-4 text-sm bg-black text-white">
        &copy; {{ date('Y') }} Auto Service. Tous droits réservés.
    </footer>

</body>

</html>
