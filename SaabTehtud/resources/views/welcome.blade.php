<!-- filepath: resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaleht - Saabtehtud OÜ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
    <!-- Header -->
    <header class="bg-black py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" alt="SAABTEHTUD OÜ" class="h-10 w-10">
                <span class="text-xl font-bold">SaabTehtud OÜ</span>
            </div>
            <nav class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="/" class="hover:text-yellow-400 transition duration-300">Avaleht</a>
                <a href="{{ route('services') }}" class="hover:text-yellow-400 transition duration-300">Teenused</a>
                <a href="{{ route('contact') }}" class="hover:text-yellow-400 transition duration-300">Kontakt</a>
            </nav>
            <a href="{{ route('contact') }}" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-full transition duration-300">
                Võta ühendust
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-black py-40">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-4xl font-bold text-yellow-400 mb-4">Saabtehtud OÜ – Katustööd, mis saavad tehtud!</h1>
            <p class="text-gray-400 mb-8">
                Usaldusväärne Eesti ettevõte, mis pakub kvaliteetseid katuse- ja plekitöid üle kogu Eesti. Meie töö on professionaalne, aus ja alati kokkulepitud ajal.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('contact') }}" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-3 px-6 rounded-full transition duration-300">
                    Võta ühendust
                </a>
                <a href="{{ route('services') }}" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-full transition duration-300">
                    Vaata teenuseid
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <!-- About Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Text Content -->
        <div>
            <h2 class="text-3xl font-bold text-yellow-400 mb-6">Meist</h2>
            <p class="text-black mb-4">
                Saabtehtud OÜ on usaldusväärne Eesti ettevõte, mis pakub kvaliteetseid katuse- ja plekitöid üle kogu Eesti. Meie eesmärk on teha asju hästi – nii, et töö oleks mitte ainult tehtud, vaid saab tehtud õigesti, professionaalselt ja õigel ajal.
            </p>
            <p class="text-black">
                Pakume laia valikut teenuseid: ehitame ja renoveerime katuseid (plekk, eterniit, kärg, kivi, SBS rullmaterjal), paigaldame vihmaveesüsteeme, valmistame ja paigaldame lisaplekke (aknaplekid, sokliplekid, korstnamütsid jpm), uuendame tuulekaste, teostame katusepesu, värvimist ning lumekoristust.
            </p>
        </div>

        <!-- Image Content -->
        <div>
            <img src="{{ asset('images/pkatus2.jpg') }}" alt="Meist" class="rounded-lg shadow-lg">
        </div>
    </div>
</section>

    <!-- Gallery Section -->
    <!-- Gallery Section -->
<section class="bg-black py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-yellow-400 mb-6 text-center">Galerii / Tehtud tööd</h2>
        <p class="text-gray-400 text-center mb-8">Fotod tehtud objektidest (enne-pärast pildid, detailid, tööprotsessid).</p>

        <!-- Filter Buttons -->
        <div class="flex justify-center space-x-4 mb-8">
            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-full transition duration-300">
                Kõik
            </button>
            <button class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full transition duration-300">
                Katuseehitus
            </button>
            <button class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full transition duration-300">
                Plekitööd
            </button>
            <button class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full transition duration-300">
                Vihmaveesüsteemid
            </button>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="bg-gray-700 h-64 rounded-lg shadow-lg">
                <img src="{{ asset('images/pkatus3.jpg') }}" alt="Gallery Image 1" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="bg-gray-700 h-64 rounded-lg shadow-lg">
                <img src="{{ asset('images/pkatus4.jpg') }}" alt="Gallery Image 2" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="bg-gray-700 h-64 rounded-lg shadow-lg">
                <img src="{{ asset('images/pkatus5.jpg') }}" alt="Gallery Image 3" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="bg-gray-700 h-64 rounded-lg shadow-lg">
                <img src="{{ asset('images/pkatus6.jpg') }}" alt="Gallery Image 4" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="bg-gray-700 h-64 rounded-lg shadow-lg">
                <img src="{{ asset('images/pkatus7.jpg') }}" alt="Gallery Image 5" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="bg-gray-700 h-64 rounded-lg shadow-lg">
                <img src="{{ asset('images/pkatus8.jpg') }}" alt="Gallery Image 6" class="w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </div>
</section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-yellow-400 mb-6 text-center">Tagasiside / Arvustused</h2>
            <div class="space-y-8">
                <div class="bg-gray-800 p-6 rounded-lg">
                    <p class="text-gray-400">“Töö kiire ja korralik! Soovitan kindlasti.”</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <p class="text-gray-400">“Katus sai nii hea, et naabridki küsivad ehitaja kontakte.”</p>
                </div>
            </div>
        </div>
    </section>

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
                        <li><a href="{{ route('contact') }}" class="text-sm text-gray-400 hover:text-yellow-400 transition duration-300">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>