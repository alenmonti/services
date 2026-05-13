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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Inter', sans-serif; }
        h1, h2, h3 { font-family: 'Playfair Display', serif; }
        p, a, button, li, span, small, label, input, textarea { font-family: 'Inter', sans-serif; }
        .text-brand { color: #085C68; }
        .bg-brand { background-color: #085C68; }
        .border-brand { border-color: #085C68; }
        .hover\:bg-brand-dark:hover { background-color: #05454e; }
        .hover\:text-brand-dark:hover { color: #05454e; }
    </style>
</head>
<body class="bg-[#F8F9F7] text-stone-800 antialiased font-sans flex flex-col min-h-screen" x-data="{ mobileMenuOpen: false }">

    <!-- Header -->
    <header class="w-full max-w-6xl mx-auto px-6 py-6 flex items-center justify-between relative z-50">
        <a href="#" class="block w-40 md:w-52 shrink-0">
            <!-- Logo -->
            <img src="{{ web_image('welcome.logo-ico') }}" alt="Consultorio Monti" class="w-28 h-auto object-contain">
        </a>
        <nav class="hidden md:flex gap-8 text-[11px] font-bold uppercase tracking-[0.1em] text-brand">
            <a href="#" class="border-b-2 border-transparent hover:border-brand-dark hover:text-brand-dark pb-1 transition-colors">Inicio</a>
            <a href="#especialistas" class="border-b-2 border-transparent hover:border-brand-dark hover:text-brand-dark pb-1 transition-colors">Profesionales</a>
            <a href="#espacio" class="border-b-2 border-transparent hover:border-brand-dark hover:text-brand-dark pb-1 transition-colors">Espacio</a>
            <a href="#contacto" class="border-b-2 border-transparent hover:border-brand-dark hover:text-brand-dark pb-1 transition-colors">Contacto</a>
        </nav>
        <a href="#contacto" class="hidden md:inline-flex bg-brand hover:bg-brand-dark text-white px-6 py-4 rounded-full text-xs font-bold uppercase tracking-[0.2em] transition-all shadow-lg shadow-brand/20">
            Agendar Turno
        </a>
        
        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2.5 text-brand hover:bg-brand/5 transition-colors rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </header>
    
    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-cloak @click.outside="mobileMenuOpen = false" class="fixed inset-0 bg-[#F8F9F7] z-[60] md:hidden flex flex-col">
        <!-- Close Button -->
                <div class="flex items-center justify-between p-6 border-b border-stone-200">
                    <img src="{{ web_image('welcome.logo-ico') }}" alt="Consultorio Monti" class="w-16 h-auto">
                    <button @click="mobileMenuOpen = false" class="p-2 text-brand hover:bg-brand/5 transition-colors rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                        </button>
                </div>
        
        <!-- Menu Items -->
        <nav class="flex flex-col gap-6 px-6 py-8">
            <a href="#" @click="mobileMenuOpen = false" class="text-brand font-semibold text-lg">Inicio</a>
            <a href="#especialistas" @click="mobileMenuOpen = false" class="text-brand font-medium text-lg hover:text-brand-dark transition-colors">Profesionales</a>
            <a href="#espacio" @click="mobileMenuOpen = false" class="text-brand font-medium text-lg hover:text-brand-dark transition-colors">Espacio</a>
            <a href="#contacto" @click="mobileMenuOpen = false" class="text-brand font-medium text-lg hover:text-brand-dark transition-colors">Contacto</a>
            <a href="#contacto" @click="mobileMenuOpen = false" class="bg-brand text-white px-10 py-5 rounded-full text-xs font-bold uppercase tracking-[0.2em] transition-all hover:bg-brand-dark text-center mt-4 shadow-lg shadow-brand/20">
                Agendar Turno
            </a>
        </nav>
    </div>

    <main class="flex-grow w-full max-w-6xl mx-auto px-6 py-12 md:py-20 flex flex-col gap-24 md:gap-32">

        <!-- Hero Section -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="flex flex-col items-start text-left">
                <div class="flex items-center gap-2 text-brand text-xs font-semibold tracking-widest uppercase mb-6">
                    <x-heroicon-o-check-badge class="w-4 h-4" />
                    <span>Profesionales de la salud</span>
                </div>
                <h1 class="font-serif text-4xl md:text-6xl text-stone-900 leading-[1.1] mb-6">
                    Consultorio Monti - Un espacio dedicado a tu bienestar integral.
                </h1>
                <p class="text-stone-500 font-light leading-relaxed mb-10 max-w-lg">
                    Ofrecemos atención profesional y personalizada en psicoterapia y dermatología, brindando un abordaje centrado en la salud física y emocional.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                    <a href="#especialistas" class="bg-brand hover:bg-brand-dark text-white px-10 py-5 rounded-full text-xs font-bold uppercase tracking-[0.2em] transition-all text-center shadow-lg shadow-brand/20">
                        Conocer Especialidades
                    </a>
                    <a href="#espacio" class="bg-transparent border border-stone-300 hover:border-stone-400 text-stone-700 px-10 py-5 rounded-full text-xs font-bold uppercase tracking-[0.2em] transition-all text-center shadow-lg shadow-stone-200/50">
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
                        <img src="{{ web_image('welcome.maga_profile') }}" alt="Magalí Monti" class="w-24 h-24 sm:w-36 sm:h-36 rounded-2xl object-cover shrink-0 shadow-sm border border-stone-100 mx-auto">
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
                        <img src="{{ web_image('welcome.mai_profile') }}" alt="Mailín Monti" class="w-24 h-24 sm:w-36 sm:h-36 rounded-2xl object-cover shrink-0 shadow-sm border border-stone-100 mx-auto">
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
                <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center mb-8 text-brand mx-auto">
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
            <div class="w-full md:w-1/2 grid grid-cols-2 gap-0 h-[500px] md:h-auto">
                <img src="{{ web_image('welcome.clinic_psicoterapia') }}" alt="Consultorio Psicoterapia" class="w-full h-full object-cover">
                <img src="{{ web_image('welcome.clinic_dermatologia') }}" alt="Consultorio Dermatología" class="w-full h-full object-cover">
                <img src="{{ web_image('welcome.clinic_psicoterapia2') }}" alt="Consultorio Psicoterapia" class="w-full h-full object-cover">
                <img src="{{ web_image('welcome.clinic_dermatologia2') }}" alt="Consultorio Dermatología" class="w-full h-full object-cover">
            </div>
        </section>

    </main>

    <!-- Encuéntranos Section (copied from Mailín) -->
    <section id="contacto" class="py-20 md:py-32 bg-[#e8ebe6] relative">
        <div class="max-w-6xl mx-auto px-6">
            <div class="mb-8 flex flex-wrap items-center justify-center gap-8 md:gap-12">
                <a href="https://wa.me/541130968455" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="WhatsApp">
                    <img src="{{ web_image('social.wsp') }}" alt="" aria-hidden="true" class="w-12 h-12 md:w-16 md:h-16 object-contain" />
                </a>
                <a href="mailto:consultoriomonti@gmail.com" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="Email">
                    <img src="{{ web_image('social.gmail') }}" alt="" aria-hidden="true" class="w-12 h-12 md:w-16 md:h-16 object-contain" />
                </a>
                <a href="https://consultoriomonti.bewit.com.ar/" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="Sitio Web">
                    <img src="{{ web_image('social.search') }}" alt="" aria-hidden="true" class="w-12 h-12 md:w-16 md:h-16 object-contain" />
                </a>
            </div>
            <div class="grid md:grid-cols-2 gap-0 rounded-[3rem] overflow-hidden shadow-2xl shadow-[#405b6a]/10">
                <!-- Info Contacto -->
                <div class="bg-white p-6 md:p-20 flex flex-col justify-center pt-8">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-[1px] w-8 bg-[#405b6a]"></span>
                        <span class="text-xs font-bold tracking-[0.2em] text-[#405b6a] uppercase">Ubicación</span>
                    </div>
                    <h2 class="font-serif text-4xl text-gray-900 font-medium mb-12 leading-tight">Encuéntranos en San Miguel</h2>

                    <div class="space-y-10">
                        <div class="flex items-start gap-6 group">
                            <div class="bg-[#f8f9fa] p-4 rounded-2xl group-hover:bg-[#405b6a] group-hover:text-white transition-all duration-300">
                                <x-heroicon-o-map-pin class="w-6 h-6" />
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-2 uppercase tracking-widest">Dirección</h4>
                                <p class="text-gray-500 text-base leading-relaxed">Conesa 849, 4f<br>Muñiz, Buenos Aires</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 group">
                            <div class="bg-[#f8f9fa] p-4 rounded-2xl group-hover:bg-[#405b6a] group-hover:text-white transition-all duration-300">
                                <x-heroicon-o-envelope class="w-6 h-6" />
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-2 uppercase tracking-widest">Email</h4>
                                <a href="mailto:consultoriomonti@gmail.com" class="text-gray-500 text-base hover:text-[#405b6a] transition-colors leading-relaxed">consultoriomonti@gmail.com</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 group">
                            <div class="bg-[#f8f9fa] p-4 rounded-2xl group-hover:bg-[#405b6a] group-hover:text-white transition-all duration-300">
                                <x-heroicon-o-phone class="w-6 h-6" />
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-2 uppercase tracking-widest">Teléfono</h4>
                                <a href="tel:+541130968455" class="text-gray-500 text-base hover:text-[#405b6a] transition-colors leading-relaxed">+54 11 5874 2412</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-16 mx-auto">
                        <a href="https://wa.me/541130968455" target="_blank" class="inline-flex items-center gap-4 bg-[#405b6a] hover:bg-[#314652] text-white text-xs font-bold uppercase tracking-[0.2em] px-10 py-5 transition-all hover:gap-6 shadow-lg shadow-[#405b6a]/20 rounded-full">
                            Agendar Turno
                            <x-heroicon-o-arrow-right class="w-4 h-4" />
                        </a>
                    </div>
                </div>

                <!-- Mapa -->
                <div class="bg-[#dcdbd7] min-h-[500px] flex items-center justify-center relative group">
                    <div class="w-full h-full">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26288.963762153122!2d-58.69404160759703!3d-34.55050504753984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcbddd3ef9c665%3A0x5f82c414c0cba5f7!2sConsultorio%20M%C3%A9dico%20y%20Terap%C3%A9utico%20Monti!5e0!3m2!1ses!2sar!4v1778541915531!5m2!1ses!2sar" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#405b6a] text-white py-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-16 mb-20">
                <div class="md:col-span-2 flex flex-col items-center md:items-start">
                    <a href="/" class="inline-block w-48 h-auto object-contain mb-8 hover:opacity-80 transition-opacity">
                        <img src="{{ web_image('welcome.logo-transparent') }}" alt="Consultorio Monti" class="w-full h-auto object-contain">
                    </a>
                    <p class="text-white/60 text-base max-w-sm leading-relaxed mb-8">
                        Cuidamos tu salud integral con profesionalismo y calidez humana. Psicología y Dermatología en un solo lugar.
                    </p>
                    <div class="flex items-center gap-4">
                        <a href="https://wa.me/541130968455" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="WhatsApp">
                            <img src="{{ web_image('social.wsp') }}" alt="" aria-hidden="true" class="w-7 h-7 object-contain" />
                        </a>
                        <a href="mailto:consultoriomonti@gmail.com" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="Email">
                            <img src="{{ web_image('social.gmail') }}" alt="" aria-hidden="true" class="w-7 h-7 object-contain" />
                        </a>
                        <a href="https://consultoriomonti.bewit.com.ar/" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="Sitio Web">
                            <img src="{{ web_image('social.search') }}" alt="" aria-hidden="true" class="w-7 h-7 object-contain" />
                        </a>
                    </div>
                </div>
    
                <div>
                    <h4 class="text-xs font-bold tracking-[0.2em] text-white/40 uppercase mb-8">Navegación</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-sm hover:text-white/60 transition-colors">Inicio</a></li>
                        <li><a href="#especialistas" class="text-sm hover:text-white/60 transition-colors">Profesionales</a></li>
                        <li><a href="#espacio" class="text-sm hover:text-white/60 transition-colors">Espacio</a></li>
                        <li><a href="#contacto" class="text-sm hover:text-white/60 transition-colors">Contacto</a></li>
                    </ul>
                </div>
    
                <div>
                    <h4 class="text-xs font-bold tracking-[0.2em] text-white/40 uppercase mb-8">Información</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-sm hover:text-white/60 transition-colors">Términos y condiciones</a></li>
                        <li><a href="#" class="text-sm hover:text-white/60 transition-colors">Política de privacidad</a></li>
                        <li><a href="#" class="text-sm hover:text-white/60 transition-colors">Preguntas frecuentes</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-10 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-6 text-white/40 text-[10px] font-bold tracking-[0.2em] uppercase">
                <p>&copy; 2026 Consultorio Monti. Todos los derechos reservados a bewit.com.ar</p>
                <div class="flex items-center gap-2"></div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/541130968455" target="_blank" rel="noopener" class="fixed bottom-6 right-6 z-50 inline-flex items-center justify-center w-14 h-14 rounded-full bg-[#25D366] text-white shadow-lg shadow-black/20 hover:shadow-xl hover:scale-110 transition-all duration-300" title="WhatsApp">
        <img src="{{ web_image('social.wsp') }}" alt="" aria-hidden="true" class="w-7 h-7 object-contain" />
    </a>

</body>
</html>
