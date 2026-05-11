<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultorio Monti</title>
    <link rel="icon" href="{{ web_image('welcome.logo-ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Inter', sans-serif; }
        .text-brand { color: #085C68; }
        .bg-brand { background-color: #085C68; }
        .border-brand { border-color: #085C68; }
        .hover\:bg-brand-dark:hover { background-color: #05454e; }
        .hover\:text-brand-dark:hover { color: #05454e; }
    </style>
</head>
<body class="bg-[#F8F9F7] text-stone-800 antialiased font-sans flex flex-col min-h-screen">

    <!-- Header -->
    <header class="w-full max-w-6xl mx-auto px-6 py-6 flex items-center justify-between">
        <a href="#" class="block w-40 md:w-52 shrink-0">
            <!-- Logo -->
            <img src="{{ web_image('welcome.logo-transparent') }}" alt="Consultorio Monti" class="w-36 h-auto object-contain invert">
        </a>
        <nav class="hidden md:flex gap-8 text-sm font-medium text-stone-500">
            <a href="#" class="text-brand border-b-2 border-brand pb-1">Inicio</a>
            <a href="#especialistas" class="hover:text-brand transition-colors pb-1 border-b-2 border-transparent">Profesionales</a>
            <a href="#espacio" class="hover:text-brand transition-colors pb-1 border-b-2 border-transparent">Espacio</a>
            <a href="#contacto" class="hover:text-brand transition-colors pb-1 border-b-2 border-transparent">Contacto</a>
        </nav>
        <a href="#contacto" class="hidden md:inline-flex bg-brand hover:bg-brand-dark text-white px-6 py-2.5 rounded-full text-sm font-medium transition-colors">
            Agendar Turno
        </a>
    </header>

    <main class="flex-grow w-full max-w-6xl mx-auto px-6 py-12 md:py-20 flex flex-col gap-24 md:gap-32">

        <!-- Hero Section -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="flex flex-col items-start text-left">
                <div class="flex items-center gap-2 text-brand text-xs font-semibold tracking-widest uppercase mb-6">
                    <x-heroicon-o-check-badge class="w-4 h-4" />
                    <span>Bienestar Integral</span>
                </div>
                <h1 class="font-serif text-5xl md:text-6xl text-stone-900 leading-[1.1] mb-6">
                    Consultorio Monti - Un espacio dedicado a tu bienestar integral.
                </h1>
                <p class="text-stone-500 font-light leading-relaxed mb-10 max-w-lg">
                    Ofrecemos atención profesional y personalizada en psicoterapia y dermatología, brindando un abordaje centrado en la salud física y emocional.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                    <a href="#especialistas" class="bg-brand hover:bg-brand-dark text-white px-8 py-3.5 rounded-full text-sm font-medium transition-colors text-center">
                        Conocer Especialidades
                    </a>
                    <a href="#espacio" class="bg-transparent border border-stone-300 hover:border-stone-400 text-stone-700 px-8 py-3.5 rounded-full text-sm font-medium transition-colors text-center">
                        Ver Instalaciones
                    </a>
                </div>
            </div>
            <div class="relative w-full h-[400px] md:h-[500px] rounded-[2rem] overflow-hidden shadow-2xl">
                <img src="{{ web_image('welcome.hero') }}" alt="Recepción Consultorio" class="absolute inset-0 w-full h-full object-cover">
            </div>
        </section>

        <!-- Especialistas Section -->
        <section id="especialistas" class="flex flex-col items-center">
            <h2 class="font-serif text-3xl md:text-4xl text-stone-900 mb-4">Nuestras Especialistas</h2>
            <div class="h-[2px] w-16 bg-[#E8A598] mb-16"></div> <!-- Accent line -->

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
                <!-- Maga Card -->
                <a href="/magali-monti" class="group bg-white rounded-3xl p-8 flex flex-col sm:flex-row gap-8 shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] border border-stone-100 items-start hover:shadow-[0_12px_32px_-10px_rgba(0,0,0,0.15)] transition-all duration-300">
                    <img src="{{ web_image('welcome.maga_profile') }}" alt="Magalí Monti" class="w-24 h-24 sm:w-36 sm:h-36 rounded-2xl object-cover shrink-0 shadow-sm border border-stone-100">
                    <div class="flex flex-col h-full">
                        <h3 class="font-serif text-2xl text-brand mb-1 group-hover:text-brand-dark transition-colors">Magalí Monti</h3>
                        <p class="text-[10px] tracking-widest uppercase text-[#A55F51] font-semibold mb-3">Psicoterapeuta</p>
                        <p class="text-xs sm:text-sm text-stone-500 font-light leading-relaxed mb-6 flex-grow">
                            Especializada en acompañar procesos terapéuticos desde la empatía y la escucha activa. Un espacio seguro para trabajar en tu salud mental y desarrollo personal.
                        </p>
                        <div class="text-xs font-semibold text-brand group-hover:text-brand-dark inline-flex items-center gap-1 transition-colors uppercase tracking-wider mt-auto">
                            Ver perfil y servicios <x-heroicon-o-arrow-right class="w-4 h-4 group-hover:translate-x-1 transition-transform" />
                        </div>
                    </div>
                </a>
                
                <!-- Mai Card -->
                <a href="/mailin-monti" class="group bg-white rounded-3xl p-8 flex flex-col sm:flex-row gap-8 shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] border border-stone-100 items-start hover:shadow-[0_12px_32px_-10px_rgba(0,0,0,0.15)] transition-all duration-300">
                    <img src="{{ web_image('welcome.mai_profile') }}" alt="Mailín Monti" class="w-24 h-24 sm:w-36 sm:h-36 rounded-2xl object-cover shrink-0 shadow-sm border border-stone-100">
                    <div class="flex flex-col h-full">
                        <h3 class="font-serif text-2xl text-brand mb-1 group-hover:text-brand-dark transition-colors">Mailín Monti</h3>
                        <p class="text-[10px] tracking-widest uppercase text-[#A55F51] font-semibold mb-3">Dermatóloga</p>
                        <p class="text-xs sm:text-sm text-stone-500 font-light leading-relaxed mb-6 flex-grow">
                            Cuidado integral de tu piel, cabello y uñas. Diagnóstico preciso y tratamientos de vanguardia enfocados en resaltar tu belleza natural y cuidar tu salud dermatológica.
                        </p>
                        <div class="text-xs font-semibold text-brand group-hover:text-brand-dark inline-flex items-center gap-1 transition-colors uppercase tracking-wider mt-auto">
                            Ver perfil y servicios <x-heroicon-o-arrow-right class="w-4 h-4 group-hover:translate-x-1 transition-transform" />
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Nuestro Espacio Section -->
        <section id="espacio" class="bg-[#F0F1ED] rounded-[3rem] flex flex-col md:flex-row overflow-hidden border border-stone-100 shadow-sm">
            <div class="p-10 md:p-16 lg:p-20 flex flex-col justify-center w-full md:w-1/2">
                <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center mb-8 text-brand">
                    <x-heroicon-o-home class="w-6 h-6" />
                </div>
                <h2 class="font-serif text-3xl md:text-4xl text-stone-900 mb-6">Nuestro Espacio</h2>
                <p class="font-serif italic text-stone-600 text-lg leading-relaxed mb-10">
                    "Diseñamos cada rincón de Consultorio Monti pensando en tu comodidad y tranquilidad. Un ambiente moderno, luminoso y cálido, equipado con la mejor tecnología para brindarte la atención que mereces."
                </p>
                <div class="flex gap-12">
                    <div>
                        <p class="text-brand font-medium text-sm mb-1">Atención</p>
                        <p class="text-stone-500 text-sm font-light">Personalizada</p>
                    </div>
                    <div>
                        <p class="text-brand font-medium text-sm mb-1">Ambiente</p>
                        <p class="text-stone-500 text-sm font-light">Calmado</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex flex-col sm:flex-row h-[500px] md:h-auto">
                <img src="{{ web_image('welcome.clinic_psicoterapia') }}" alt="Consultorio Psicoterapia" class="w-full sm:w-1/2 h-1/2 sm:h-full object-cover">
                <img src="{{ web_image('welcome.clinic_dermatologia') }}" alt="Consultorio Dermatología" class="w-full sm:w-1/2 h-1/2 sm:h-full object-cover">
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer id="contacto" class="w-full bg-[#EEEEEC] pt-16 pb-8 border-t border-stone-200 mt-12">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            
            <!-- Brand & Bio -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-2 mb-6">
                    <img src="{{ web_image('welcome.logo-transparent') }}" alt="Consultorio Monti" class="w-40 h-auto object-contain invert">
                </div>
                <p class="text-sm text-stone-500 font-light leading-relaxed mb-6 max-w-sm">
                    Cuidamos tu salud integral con profesionalismo y calidez humana. Psicología y Dermatología en un solo lugar.
                </p>
                <div class="flex gap-5 text-stone-400">
                    <a href="#" class="hover:text-[#A55F51] transition-colors">
                        <x-heroicon-o-globe-alt class="w-5 h-5" />
                    </a>
                    <a href="#" class="hover:text-[#A55F51] transition-colors">
                        <x-heroicon-o-phone class="w-5 h-5" />
                    </a>
                    <a href="#" class="hover:text-[#A55F51] transition-colors">
                        <x-heroicon-o-map-pin class="w-5 h-5" />
                    </a>
                </div>
            </div>

            <!-- Servicios -->
            <div class="col-span-1">
                <h4 class="font-sans font-semibold text-[11px] tracking-[0.15em] text-brand uppercase mb-6">Servicios</h4>
                <ul class="flex flex-col gap-4 text-sm text-stone-500 font-light">
                    <li><a href="#" class="hover:text-stone-900 transition-colors">Psicoterapia Individual</a></li>
                    <li><a href="#" class="hover:text-stone-900 transition-colors">Orientación a Padres</a></li>
                    <li><a href="#" class="hover:text-stone-900 transition-colors">Evaluación Psicopedagógica</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div class="col-span-1">
                <h4 class="font-sans font-semibold text-[11px] tracking-[0.15em] text-brand uppercase mb-6">Legal</h4>
                <ul class="flex flex-col gap-4 text-sm text-stone-500 font-light">
                    <li><a href="#" class="hover:text-stone-900 transition-colors">Aviso Legal</a></li>
                    <li><a href="#" class="hover:text-stone-900 transition-colors">Privacidad</a></li>
                </ul>
            </div>
        </div>
        
        <div class="max-w-6xl mx-auto px-6 text-center text-stone-400 text-xs font-light">
            &copy; {{ date('Y') }} Consultorio Monti. Todos los derechos reservados.
        </div>
    </footer>

</body>
</html>
