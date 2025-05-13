<!-- filepath: resources/views/services.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
    
<!-- Hero Section -->
<section class="relative bg-cover bg-center" style="background-image: url('{{ asset('images/pkatus2.jpg') }}');">
    <!-- Black Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    
    <!-- Header -->
    <header class="relative z-10 container mx-auto flex justify-between items-center px-4 py-4">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo.png') }}" alt="SAABTEHTUD OÜ" class="h-10 w-10">
            <span class="text-xl font-bold text-white">SaabTehtud OÜ</span>
        </div>
        <nav class="hidden md:flex space-x-6 text-sm font-medium">
            <a href="/" class="hover:text-yellow-400 text-white transition duration-300">Avaleht</a>
            <a href="{{ route('services') }}" class="hover:text-yellow-400 text-white transition duration-300">Teenused</a>
            <a href="{{ route('contact') }}" class="hover:text-yellow-400 text-white transition duration-300">Kontakt</a>
        </nav>
        <a href="{{ route('contact') }}" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-full transition duration-300">
            Võta ühendust
        </a>
    </header>

    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto text-center px-4 py-40">
        <h1 class="text-4xl font-bold text-yellow-400 mb-4">Teenused</h1>
        <p class="text-white mb-8">
            Pakume laia valikut katuse- ja plekitöid, mis on professionaalsed, ausad ja alati kokkulepitud ajal tehtud.
        </p>
        <div class="flex justify-center space-x-4">
            <a href="{{ route('contact') }}" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-3 px-6 rounded-full transition duration-300">
                Võta ühendust
            </a>
        </div>
    </div>
</section>
    <!-- Main Section -->
    <main class="container mx-auto py-12 px-4">
        

        <!-- Service Section -->
        <div class="space-y-12">
            <!-- Katuseehitus ja -renoveerimine -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-2xl font-bold text-yellow-400">Katuseehitus ja -renoveerimine</h2>
                    <p class="text-gray-400 mt-4">
                        Uue katuse paigaldamine või vana katuse renoveerimine aitab vältida lekkeid ja struktuurilisi kahjustusi, mis võivad põhjustada suuri remondikulusid.
                        Teostame plekk-, eterniit-, kärg-, kivi- ja SBS rullmaterjalist katuste ehitust ja renoveerimist. Meie teenus hõlmab kõiki tööetappe alates vana katuse demonteerimisest kuni uue katuse paigaldamiseni.
                    </p>
                </div>
                <div>
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                </div>
            </div>

            <!-- Vihmaveesüsteemide paigaldus -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-yellow-400">Vihmaveesüsteemide paigaldus</h2>
                    <p class="text-gray-400 mt-4">
                        Vihmaveesüsteem on oluline investeering, kuna see suunab sademevee õigesse kohta, et kaitsta maja fassaadi ja soklit veekahjustuste eest.
                        Kvaliteetne vee äravoolu lahendus igale katusele.
                    </p>
                </div>
            </div>

            <!-- Repeat similar structure for other services -->
            <!-- Tuulekastide ehitus ja renoveerimine -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-2xl font-bold text-yellow-400">Tuulekastide ehitus ja renoveerimine</h2>
                    <p class="text-gray-400 mt-4">
                        Tuulekastid tagavad katuse ventilatsiooni, mis aitab vältida niiskuse ja hallitusseente kogunemist, ning annavad katusele viimistletud välimuse.
                        Mõnikord piisab olemasoleva tuulekasti puhul mõne laua vahetusest, kui puit on pehkinud, siis on vaja kogu tuulekast uuesti ehitada.
                        Ehitame või renoveerime olemasolevad tuulekastid.
                    </p>
                </div>
                <div>
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                </div>
            </div>

            <!-- Plekitööd -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-yellow-400">Katusepesu ja värvimine</h2>
                    <p class="text-gray-400 mt-4">
                        Vahepeal piisab katusele uue ilme loomisest ka ainult pesust, pleekinud katus vajaks aga uut värvikihti.
                        Peseme ja vajadusel ka värvime plekk-, eterniit- ja kivikatuseid.
                    </p>
                </div>
            </div>

            <!-- Katusepesu ja värvimine -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-2xl font-bold text-yellow-400">Lumekoristus</h2>
                    <p class="text-gray-400 mt-4">
                        Regulaarne lumekoristus hoiab katuse struktuuri tervena, kaitseb selle pikaealisust ja aitab vältida tõsiseid kahjustusi. Kui lumi koguneb katusele, suureneb koormus, mis võib põhjustada katuse väsimist, painutamist ja isegi katuse struktuuri kahjustusi. Kui lumi sulab ja külmub, tekib jää, mis võib tungida katuse materjalidesse ja põhjustada pragusid, mis omakorda viib veekahjustusteni.
                        Eemaldame turvaliselt raske lume katustelt.
                    </p>
                </div>
                <div>
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                </div>
            </div>

            <!-- Lumekoristus -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-yellow-400">Plekitööd</h2>
                    <p class="text-gray-400 mt-4">
                        Plekitööd on olulised igasuguste katuste ja fassaadide vastupidavuse tagamiseks. Lisaplekid annavad majale tervikliku ilme, aga kaitsevad ka maja ilmastiku mõju eest.
Valmistame ja paigaldame erinevaid lisaplekke: aknaplekid, sokliplekid, korstnamütsid, nurgaliistud jpm.

                    </p>
                </div>
            </div>

            <!-- Tööd teostame -->
            <div class="text-center mt-12">
                <p class="text-white">
                    Tööd teostame üle Eesti – kiirelt, korralikult ja vastutustundlikult.
                </p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Section -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Saabtehtud OÜ</h3>
                    <p class="text-sm text-gray-400">Registrikood: 16572649</p>
                    <p class="text-sm text-gray-400">© Saabtehtud OÜ {{ date('Y') }}</p>
                </div>

                <!-- Right Section -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Lingid</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-sm text-gray-400 hover:text-yellow-400 transition duration-300">Avaleht</a></li>
                        <li><a href="{{ route('services') }}" class="text-sm text-gray-400 hover:text-yellow-400 transition duration-300">Teenused</a></li>
                        <li><a href="/about" class="text-sm text-gray-400 hover:text-yellow-400 transition duration-300">Meist</a></li>
                        <li><a href="{{ route('contact') }}" class="text-sm text-gray-400 hover:text-yellow-400 transition duration-300">Kontakt</a></li>
                        <li><a href="/privacy-policy" class="text-sm text-gray-400 hover:text-yellow-400 transition duration-300">Privaatsuspoliitika</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>