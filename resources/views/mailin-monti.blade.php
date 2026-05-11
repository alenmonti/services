<!doctype html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dra. Mailín Monti - Dermatología Clínica y Estética</title>
    <meta name="description" content="Especialista en Dermatología Clínica y Estética. Tratamientos personalizados de vanguardia en un ambiente de serenidad y profesionalismo.">
    <link rel="icon" href="{{ web_image('welcome.logo-ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[#f8f9fa] text-gray-900 font-sans antialiased overflow-x-hidden">
    
    <!-- Navbar -->
    <header class="py-6 px-4 md:px-8 max-w-7xl mx-auto flex justify-between items-center relative z-50" x-data="{ mobileMenuOpen: false }">
        <a href="#" class="block w-40 md:w-56 shrink-0">
            <!-- Logo -->
            <img src="{{ web_image('mailin.logo') }}" alt="Dra. Mailín Monti" class="w-full h-auto object-contain">
        </a>
        
        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-10 text-sm font-medium text-gray-600">
            <a href="#" class="hover:text-[#405b6a] transition-colors border-b-2 border-transparent hover:border-[#405b6a] pb-1">Inicio</a>
            <a href="#clinica" class="hover:text-[#405b6a] transition-colors border-b-2 border-transparent hover:border-[#405b6a] pb-1">Clínica</a>
            <a href="#estetica" class="hover:text-[#405b6a] transition-colors border-b-2 border-transparent hover:border-[#405b6a] pb-1">Estética</a>
            <a href="#equipo" class="hover:text-[#405b6a] transition-colors border-b-2 border-transparent hover:border-[#405b6a] pb-1">Equipo</a>
            <a href="#contacto" class="hover:text-[#405b6a] transition-colors border-b-2 border-transparent hover:border-[#405b6a] pb-1">Contacto</a>
            <a href="#contacto" class="bg-[#405b6a] hover:bg-[#314652] text-white px-8 py-2.5 transition-all text-xs tracking-widest font-semibold uppercase rounded-full shadow-lg shadow-[#405b6a]/10 hover:shadow-xl">Agendar Turno</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2.5 text-[#405b6a] hover:bg-gray-100 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-cloak class="absolute top-20 left-0 w-full bg-white shadow-lg py-4 px-4 flex flex-col gap-4 md:hidden">
            <a href="#" @click="mobileMenuOpen = false" class="text-gray-800 font-medium border-b border-gray-100 pb-2">Inicio</a>
            <a href="#clinica" @click="mobileMenuOpen = false" class="text-gray-800 font-medium border-b border-gray-100 pb-2">Clínica</a>
            <a href="#estetica" @click="mobileMenuOpen = false" class="text-gray-800 font-medium border-b border-gray-100 pb-2">Estética</a>
            <a href="#equipo" @click="mobileMenuOpen = false" class="text-gray-800 font-medium border-b border-gray-100 pb-2">Equipo</a>
            <a href="#contacto" @click="mobileMenuOpen = false" class="text-gray-800 font-medium">Contacto</a>
            <a href="#contacto" @click="mobileMenuOpen = false" class="bg-[#405b6a] text-white text-center py-4 mt-2 font-bold uppercase text-xs tracking-widest rounded-xl shadow-lg shadow-[#405b6a]/10">Agendar Turno</a>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <div class="bg-[#f0f2f4]">
            <section class="max-w-7xl mx-auto px-4 md:px-8 pt-12 md:pt-20 pb-16 md:pb-28 grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 flex flex-col items-center text-center md:items-start md:text-left">
                    <span class="text-xs font-bold tracking-widest text-[#405b6a]/60 uppercase mb-4 block">Especialistas en la salud de tu piel</span>
                    <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-medium leading-[1.1] text-gray-900 mb-6">
                        Cuidamos tu piel para resaltar tu belleza natural
                    </h1>
                    <p class="text-gray-600 text-lg mb-8 max-w-lg leading-relaxed">
                        Dermatología integral con enfoque clínico y estético. Proporcionamos tratamientos personalizados de vanguardia en un ambiente de serenidad y profesionalismo.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6 w-full sm:w-auto">
                        <a href="#contacto" class="bg-[#405b6a] hover:bg-[#314652] text-white text-center px-10 py-4.5 text-xs font-bold uppercase tracking-[0.2em] transition-all w-full sm:w-auto rounded-full shadow-xl shadow-[#405b6a]/20 hover:scale-105 active:scale-95">
                            Agendar Turno
                        </a>
                        <a href="#estetica" class="bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 text-center px-10 py-4.5 text-xs font-bold uppercase tracking-[0.2em] transition-all w-full sm:w-auto rounded-full shadow-sm hover:shadow-md">
                            Conocer más
                        </a>
                    </div>
                </div>
                <div class="order-1 md:order-2 relative flex justify-center md:justify-end">
                    <!-- Imagen Hero, usando aspect ratio para que quede cuadrada/alta -->
                    <div class="relative w-full max-w-lg aspect-square bg-gray-200 rounded-3xl shadow-2xl overflow-hidden group">
                        <img src="{{ web_image('mailin.hero') }}" alt="Dra. Mailín Monti" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#405b6a]/20 to-transparent opacity-60"></div>
                    </div>

                    <!-- Floating Badge (Cartelito) -->
                    <div class="absolute -bottom-6 md:-bottom-10 left-4 md:-left-10 bg-white/95 backdrop-blur-md p-5 rounded-2xl shadow-xl max-w-[260px] transform hover:-translate-y-1 transition-transform duration-300">
                        <div class="flex items-start gap-4">
                            <div class="p-3 bg-[#405b6a]/10 text-[#405b6a] rounded-xl shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-900 tracking-tight">Ciencia & Estética</p>
                                <p class="text-xs text-gray-500 mt-1 leading-relaxed">Resultados naturales con tecnología de vanguardia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @forelse($groups as $index => $group)
        @php
            $bgClass = $index % 2 === 0 ? 'bg-white' : 'bg-[#f0f2f4]';
        @endphp
        <section class="py-20 md:py-28 {{ $bgClass }} relative overflow-hidden" id="group-{{ $group->id }}">
            <div class="max-w-7xl mx-auto px-4 md:px-8 relative z-10">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
                    <div class="max-w-xl">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="h-[1px] w-8 bg-[#405b6a]"></span>
                            <span class="text-xs font-bold tracking-[0.2em] text-[#405b6a] uppercase">Especialidades</span>
                        </div>
                        <h2 class="font-serif text-4xl md:text-5xl text-gray-900 font-medium leading-tight">{{ $group->title }}</h2>
                    </div>
                    @if($group->description)
                    <div class="max-w-md relative">
                        <x-heroicon-o-sparkles class="absolute -top-6 -left-6 w-12 h-12 text-[#405b6a]/5" />
                        <p class="text-gray-600 text-base leading-relaxed border-l-2 border-[#8a9ca8] pl-6 italic">
                            {{ $group->description }}
                        </p>
                    </div>
                    @endif
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    @forelse($group->services as $service)
                    <div class="group bg-white rounded-3xl overflow-hidden flex flex-col h-full shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_40px_rgba(64,91,106,0.08)] transition-all duration-500 hover:-translate-y-2 ">
                        @if($service->image)
                        <div class="w-full h-64 relative overflow-hidden">
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        @else
                        <div class="w-full h-64 relative overflow-hidden bg-gray-50 flex items-center justify-center">
                            <div class="relative">
                                <div class="absolute inset-0 scale-150 blur-2xl bg-[#405b6a]/10 rounded-full"></div>
                                <x-heroicon-o-heart class="w-16 h-16 text-[#405b6a]/20 relative z-10" />
                            </div>
                        </div>
                        @endif
                        <div class="p-8 flex flex-col flex-1 relative">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-[#405b6a] transition-colors leading-tight">{{ $service->title }}</h3>
                                <div class="bg-[#f8f9fa] p-2 rounded-lg group-hover:bg-[#405b6a]/5 transition-colors">
                                    <x-heroicon-o-chevron-right class="w-4 h-4 text-[#405b6a]" />
                                </div>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed mb-8 flex-1 line-clamp-3">{{ $service->description }}</p>
                            
                            <div class="flex items-center justify-between pt-4">
                                @if($service->price)
                                <div class="flex flex-col">
                                    <span class="text-[10px] uppercase tracking-widest text-gray-400 font-bold mb-1">Valor</span>
                                    <p class="text-lg font-bold text-[#405b6a]">${{ number_format($service->price, 0, ',', '.') }}</p>
                                </div>
                                @endif
                                <a href="#contacto" class="inline-flex items-center gap-2 text-xs font-bold tracking-widest text-[#405b6a] uppercase group/link">
                                    <span>Consultar</span>
                                    <span class="w-8 h-[1px] bg-[#405b6a] group-hover/link:w-12 transition-all"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full text-center py-20 bg-white/50 rounded-3xl border-2 border-dashed border-gray-100">
                        <x-heroicon-o-face-frown class="w-12 h-12 text-gray-300 mx-auto mb-4" />
                        <p class="text-gray-400 font-medium">No hay servicios disponibles en esta categoría.</p>
                    </div>
                    @endforelse
                </div>
            </div>
            
            <!-- Elementos Decorativos -->
            <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-[#405b6a]/5 rounded-full blur-3xl pointer-events-none"></div>
        </section>
        @empty
        <section class="py-24 bg-white text-center">
            <x-heroicon-o-rectangle-stack class="w-16 h-16 text-gray-200 mx-auto mb-6" />
            <h3 class="text-xl font-serif text-gray-400">Próximamente más servicios</h3>
            <p class="text-gray-400 mt-2">Estamos actualizando nuestro catálogo para brindarte lo mejor.</p>
        </section>
        @endforelse

        <!-- Perfil Dra . Mailín Monti Section -->
        <section id="equipo" class="py-16 md:py-32 bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-8 grid md:grid-cols-2 gap-12 lg:gap-24 items-center">
                <div class="relative w-full aspect-[4/5] overflow-hidden bg-gray-200">
                    <img src="{{ web_image('mailin.profile') }}" alt="Dra. Mailín Monti" class="w-full h-full object-cover">
                </div>
                
                <div class="flex flex-col justify-center">
                    <h2 class="font-serif text-3xl md:text-5xl text-gray-900 font-medium mb-6">
                        Dra. Mailín Monti
                    </h2>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Como especialista en Dermatología Clínica y Estética, mi misión es integrar la ciencia médica con el arte de la estética para ofrecer resultados que no solo mejoren la apariencia, sino que también promuevan una salud integral de la piel.
                    </p>

                    <p class="text-gray-600 mb-10 leading-relaxed">
                        Cada paciente es único. En mi consultorio, priorizamos la escucha activa y el diagnóstico preciso para diseñar planes de tratamiento que respeten la fisionomía natural y las necesidades individuales.
                    </p>

                    <div class="grid grid-cols-2 gap-8 mb-10 border-t border-gray-200 pt-8">
                        <div>
                            <span class="block text-3xl font-serif text-gray-900 mb-1">+10</span>
                            <span class="text-xs font-bold tracking-widest text-gray-500 uppercase">Años de experiencia</span>
                        </div>
                        <div>
                            <span class="block text-3xl font-serif text-gray-900 mb-1">5k</span>
                            <span class="text-xs font-bold tracking-widest text-gray-500 uppercase">Pacientes atendidos</span>
                        </div>
                    </div>

                    <div>
                        <a href="#contacto" class="inline-flex items-center gap-3 bg-[#2c2c2c] hover:bg-black text-white text-xs font-bold uppercase tracking-[0.2em] px-10 py-5 transition-all rounded-full shadow-xl shadow-black/10 hover:gap-5">
                            <span>Más sobre mí</span>
                            <x-heroicon-o-arrow-long-right class="w-5 h-5" />
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Encuéntranos Section -->
        <section id="contacto" class="py-20 md:py-32 bg-[#e8ebe6] relative">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="grid md:grid-cols-2 gap-0 rounded-[3rem] overflow-hidden shadow-2xl shadow-[#405b6a]/10">
                    <!-- Info Contacto -->
                    <div class="bg-white p-12 md:p-20 flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-[1px] w-8 bg-[#405b6a]"></span>
                            <span class="text-xs font-bold tracking-[0.2em] text-[#405b6a] uppercase">Ubicación</span>
                        </div>
                        <h2 class="font-serif text-4xl text-gray-900 font-medium mb-12 leading-tight">Encuéntranos en <br>el corazón de San Miguel</h2>
                        
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
                                    <a href="mailto:consultoriodramonti@gmail.com" class="text-gray-500 text-base hover:text-[#405b6a] transition-colors leading-relaxed">dramailinmonti@gmail.com</a>
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
    
                        <div class="mt-16">
                            <a href="https://wa.me/541130968455" target="_blank" class="inline-flex items-center gap-4 bg-[#405b6a] hover:bg-[#314652] text-white text-xs font-bold uppercase tracking-[0.2em] px-10 py-5 transition-all hover:gap-6 shadow-lg shadow-[#405b6a]/20">
                                Agendar Turno
                                <x-heroicon-o-arrow-right class="w-4 h-4" />
                            </a>
                        </div>
                    </div>
    
                    <!-- Mapa Placeholder -->
                    <div class="bg-[#dcdbd7] min-h-[500px] flex items-center justify-center relative group">
                        <div class="w-full h-full">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26288.963762153122!2d-58.69404160759703!3d-34.55050504753984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcbddd3ef9c665%3A0x5f82c414c0cba5f7!2sConsultorio%20M%C3%A9dico%20y%20Terap%C3%A9utico%20Monti!5e0!3m2!1ses!2sar!4v1778541915531!5m2!1ses!2sar" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-[#405b6a] text-white py-24">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid md:grid-cols-4 gap-16 mb-20">
                <div class="md:col-span-2">
                    <a href="/" class="inline-block w-48 h-auto object-contain mb-8 hover:opacity-80 transition-opacity">
                        <img src="{{ web_image('welcome.logo-transparent') }}" alt="Consultorio Monti" class="w-full h-auto object-contain invert">
                    </a>
                    <p class="text-white/60 text-base max-w-sm leading-relaxed mb-8">
                        Excelencia médica y calidez humana al servicio de tu piel. Llevamos la dermatología a un nuevo estándar de cuidado personalizado.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-[#405b6a] transition-all">
                            <x-heroicon-o-share class="w-4 h-4" />
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-[#405b6a] transition-all">
                            <x-heroicon-o-camera class="w-4 h-4" />
                        </a>
                    </div>
                </div>
    
                <div>
                    <h4 class="text-xs font-bold tracking-[0.2em] text-white/40 uppercase mb-8">Navegación</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-sm hover:text-white/60 transition-colors">Inicio</a></li>
                        <li><a href="#clinica" class="text-sm hover:text-white/60 transition-colors">Tratamientos</a></li>
                        <li><a href="#equipo" class="text-sm hover:text-white/60 transition-colors">La Dra. Mailín</a></li>
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
                <p>&copy; 2024 Dra. Mailín Monti. Todos los derechos reservados.</p>
                <div class="flex items-center gap-2">
                    <span>Diseño de Vanguardia</span>
                    <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                    <span>Salud Consciente</span>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
