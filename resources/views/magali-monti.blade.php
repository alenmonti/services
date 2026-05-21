@php
use App\Models\Service;
use App\Models\Professional;
@endphp

<!doctype html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Lic. Magali Monti - Psicopedagoga</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{ web_image('welcome.logo-ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Inter', sans-serif; }
        h1, h2, h3 { font-family: 'Playfair Display', serif; }
        p, a, button, li, span, small, label, input, textarea { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#f8f9fa] text-gray-900 font-sans antialiased overflow-x-hidden" x-data="{ mobileMenuOpen: false }">
    
    <!-- Navbar -->
    <header class="py-6 px-4 md:px-8 max-w-7xl mx-auto flex justify-between items-center relative z-50">
        <a href="https://consultoriomonti.bewit.com.ar/" class="block w-26 md:w-56 shrink-0">
            <!-- Logo -->
            <img src="{{ web_image('magali.logo') }}" alt="Magalí Monti - Lic. Psicopedagogía" class="w-full h-auto object-contain">
        </a>
        
        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-8 text-[11px] font-bold uppercase tracking-[0.1em] text-primary">
            <a href="/" class="border-b-2 border-transparent hover:border-primary-hover hover:text-primary-hover pb-1 transition-colors">Consultorio</a>
            <a href="#" class="border-b-2 border-transparent hover:border-primary-hover hover:text-primary-hover pb-1 transition-colors">Inicio</a>
            <a href="#servicios" class="border-b-2 border-transparent hover:border-primary-hover hover:text-primary-hover pb-1 transition-colors">Servicios</a>
            <a href="#sobre-mi" class="border-b-2 border-transparent hover:border-primary-hover hover:text-primary-hover pb-1 transition-colors">Sobre Mí</a>
            <a href="#contacto" class="border-b-2 border-transparent hover:border-primary-hover hover:text-primary-hover pb-1 transition-colors">Contacto</a>
        </nav>
        <a href="#contacto" class="hidden md:flex items-center bg-[#405b6a] hover:bg-[#314652] text-white px-6 py-4 transition-all text-xs tracking-[0.2em] font-bold uppercase rounded-full shadow-lg shadow-[#405b6a]/20">
            <x-heroicon-o-calendar-days class="w-5 h-5 mr-2" />
            Agendar Turno
        </a>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2.5 text-gray-700 hover:bg-gray-100 transition-colors rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </header>
    
    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-cloak @click.outside="mobileMenuOpen = false" class="fixed inset-0 bg-white z-[60] md:hidden flex flex-col">
        <!-- Close Button -->
        <div class="flex justify-between items-center px-4 md:px-8 py-6 border-b border-gray-200">
            <img src="{{ web_image('magali.logo') }}" alt="Magalí Monti - Lic. Psicopedagogía" class="w-32 h-auto object-contain">
            <button @click="mobileMenuOpen = false" class="p-2 text-gray-700 hover:bg-gray-100 transition-colors rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <!-- Menu Items -->
        <nav class="flex flex-col gap-6 px-6 py-8">
            <a href="/" @click="mobileMenuOpen = false" class="text-primary font-medium text-lg hover:text-primary-hover transition-colors">Consultorio</a>
            <a href="#" @click="mobileMenuOpen = false" class="text-primary font-medium text-lg hover:text-primary-hover transition-colors">Inicio</a>
            <a href="#servicios" @click="mobileMenuOpen = false" class="text-primary font-medium text-lg hover:text-primary-hover transition-colors">Servicios</a>
            <a href="#sobre-mi" @click="mobileMenuOpen = false" class="text-primary font-medium text-lg hover:text-primary-hover transition-colors">Sobre Mí</a>
            <a href="#contacto" @click="mobileMenuOpen = false" class="text-primary font-medium text-lg hover:text-primary-hover transition-colors">Contacto</a>
            <a href="#contacto" @click="mobileMenuOpen = false" class="bg-primary text-white px-10 py-5 rounded-full font-bold uppercase text-xs tracking-[0.2em] transition-all hover:bg-primary-hover text-center mt-4 shadow-lg shadow-primary/20">Agendar Turno</a>
        </nav>
    </div>

    <main>
        <!-- Hero Section -->
        <div class="bg-[#f0f2f4]">
            <section class="max-w-7xl mx-auto px-4 md:px-8 pt-12 md:pt-20 pb-16 md:pb-28 grid md:grid-cols-2 gap-22 md:gap-12 items-center">
                <div class="order-2 md:order-1 flex flex-col items-center text-center md:items-start md:text-left">
                    <span class="text-xs font-bold tracking-widest text-primary/60 uppercase mb-4 block">Psicoterapia para tu bienestar emocional</span>
                    <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-medium leading-[1.1] text-gray-900 mb-6">
                        Encontrá un espacio de escucha, calma y crecimiento personal
                    </h1>
                    <p class="text-gray-600 text-lg mb-8 max-w-lg leading-relaxed">
                        Acompañamiento terapéutico con mirada humana y profesional para fortalecer tus recursos emocionales y construir una vida con más equilibrio.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6 w-full sm:w-auto">
                        <a href="#contacto" class="bg-primary hover:bg-primary-hover text-white text-center px-10 py-5 text-xs font-bold uppercase tracking-[0.2em] transition-all w-full sm:w-auto rounded-full shadow-lg shadow-primary/20">
                            Agendar Turno
                        </a>
                        <a href="#servicios" class="bg-transparent border border-stone-400 hover:border-stone-500 text-stone-700 px-10 py-5 rounded-full text-xs font-bold uppercase tracking-[0.2em] transition-all text-center shadow-lg shadow-stone-200/50">
                            Conocer más
                        </a>
                    </div>
                </div>
                <div class="order-1 md:order-2 relative flex justify-center md:justify-end">
                    <div class="relative w-full max-w-lg aspect-square bg-gray-200 rounded-3xl shadow-2xl overflow-hidden group">
                        <img src="{{ web_image('magali.hero') }}" alt="Magali Monti" class="w-full h-full object-cover object-top transition-transform duration-1000 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent opacity-60"></div>
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute left-4 md:-left-10 md:top-auto -bottom-12 bg-white/50 backdrop-blur-md text-xs p-3 md:p-5 rounded-2xl shadow-xl max-w-[260px] transform hover:-translate-y-1 transition-transform duration-300">
                        <div class="flex items-start gap-4">
                            <div class="p-3 bg-primary/10 text-primary rounded-xl shrink-0">
                                <x-heroicon-o-heart class="w-6 h-6" />
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-900 tracking-tight">Presencial & Online</p>
                                <p class="text-xs text-gray-500 mt-1 leading-relaxed">Un espacio terapéutico flexible para acompañarte en cada etapa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Mi Enfoque Section -->
        <section class="py-16 md:py-24 bg-[#f0f2f4]">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-primary uppercase mb-3 block">Mi Enfoque</span>
                    <h2 class="font-serif text-3xl md:text-4xl text-gray-900 font-medium">Hacia una vida con mayor sentido y equilibrio.</h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-bg-light rounded-2xl p-8 hover:shadow-md transition-shadow text-center">
                        <div class="w-12 h-12 mx-auto flex items-center justify-center rounded-xl bg-primary/10 text-primary mb-6">
                            <x-heroicon-o-globe-alt class="w-6 h-6" />
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Empatía Cognitiva</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">Entender tus procesos de pensamiento para transformar hábitos emocionales desde la raíz.</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-bg-light rounded-2xl p-8 hover:shadow-md transition-shadow text-center">
                        <div class="w-12 h-12 mx-auto flex items-center justify-center rounded-xl bg-primary/10 text-primary mb-6">
                            <x-heroicon-o-heart class="w-6 h-6" />
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Contención Segura</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">Un espacio libre de juicio donde cada emoción tiene su lugar y tiempo de procesamiento.</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-bg-light rounded-2xl p-8 hover:shadow-md transition-shadow text-center">
                        <div class="w-12 h-12 mx-auto flex items-center justify-center rounded-xl bg-primary/10 text-primary mb-6">
                            <x-heroicon-o-wrench-screwdriver class="w-6 h-6" />
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Herramientas Prácticas</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">Ejercicios y estrategias concretas para aplicar en tu realidad cotidiana.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Servicios Profesionales Section -->
        <section id="servicios" class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                    <div class="max-w-xl">
                        <h2 class="font-serif text-3xl md:text-4xl text-gray-900 font-semibold mb-4">Servicios Profesionales</h2>
                        <p class="text-gray-600">Brindo atención integral adaptada a las necesidades específicas de cada etapa de la vida.</p>
                    </div>
                    <a href="#contacto" class="text-primary font-medium hover:underline inline-flex items-center gap-1">
                        Consultar disponibilidad
                        <x-heroicon-o-arrow-right class="w-4 h-4" />
                    </a>
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @forelse($services as $service)
                        <div class="group bg-white rounded-2xl overflow-hidden flex flex-col h-full shadow-[0_10px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_20px_40px_rgba(64,91,106,0.12)] transition-all duration-500 hover:-translate-y-2">
                            @if($service->image)
                                <div class="w-full h-56 relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                </div>
                            @else
                                <div class="w-full h-56 bg-gradient-to-br from-primary/10 to-primary/5 flex items-center justify-center">
                                    <x-heroicon-o-heart class="w-12 h-12 text-primary/30" />
                                </div>
                            @endif
                            
                            <div class="p-8 flex flex-col flex-1" x-data="{ expanded: false, hasMore: false }" x-init="$nextTick(() => { hasMore = $refs.desc.scrollHeight > $refs.desc.clientHeight })">
                                <h3 class="text-xl font-serif font-semibold text-gray-900 group-hover:text-primary transition-colors mb-3 leading-tight">{{ $service->title }}</h3>
                                <p x-ref="desc" class="text-gray-600 text-xs leading-relaxed flex-1 transition-all duration-300" :class="expanded ? '' : 'line-clamp-3'">{{ $service->description }}</p>
                                
                                <button x-show="hasMore" @click="expanded = !expanded" class="text-[10px] font-bold text-primary uppercase tracking-[0.1em] mt-2 mb-6 inline-flex items-center gap-1 hover:text-primary-hover transition-colors" x-cloak>
                                    <span x-text="expanded ? 'Ver menos' : 'Leer más'"></span>
                                    <x-heroicon-o-chevron-down class="w-3 h-3 transition-transform duration-300" x-bind:class="expanded ? 'rotate-180' : ''" />
                                </button>
                                
                                <div class="flex items-center justify-between pt-2">
                                    @if($service->price)
                                        <div class="flex flex-col">
                                            <span class="text-[10px] uppercase tracking-widest text-gray-400 font-bold mb-1">Sesión</span>
                                            <p class="text-lg font-bold text-primary">${{ number_format($service->price, 0, ',', '.') }}</p>
                                        </div>
                                    @endif
                                    <a href="#contacto" class="inline-flex items-center gap-2 text-xs font-bold tracking-widest text-primary uppercase group/link">
                                        <span>Consultar</span>
                                        <x-heroicon-o-arrow-right class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-20 bg-white/50 rounded-2xl border-2 border-dashed border-gray-100">
                            <x-heroicon-o-face-frown class="w-12 h-12 text-gray-300 mx-auto mb-4" />
                            <p class="text-gray-400 font-medium">No hay servicios disponibles.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Sobre Mí Section -->
        <section id="sobre-mi" class="py-16 md:py-24 bg-[#f0f2f4]">
            <div class="max-w-7xl mx-auto px-4 md:px-8 grid md:grid-cols-2 gap-12 items-center">
                <div class="relative w-full aspect-square md:aspect-[4/5] rounded-3xl overflow-hidden shadow-lg">
                    <img src="{{ web_image('magali.profile') }}" alt="Conoceme - Magali Monti" class="w-full h-full object-cover object-left">
                    <!-- Decoración Rompecabezas -->
                    <div class="absolute -bottom-8 -right-8 w-40 h-40 opacity-90 hidden md:block">
                        <img src="{{ web_image('magali.puzzle') }}" alt="Rompecabezas" class="w-full h-full object-contain">
                    </div>
                </div>
                
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-bold tracking-widest text-primary uppercase mb-4 block">Conoceme</span>
                    <h2 class="font-serif text-3xl md:text-4xl text-gray-900 font-medium mb-8 leading-tight">
                        "Creo en la psicoterapia como un puente hacia la libertad emocional."
                    </h2>
                    
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Soy la Lic. Magalí Monti, egresada de la Universidad de Buenos Aires con formación especializada en Clínica de Adultos y Psicopedagogía. Mi trayectoria se ha centrado en acompañar a personas en sus procesos de autoconocimiento, brindando un espacio donde la palabra es el motor de cambio.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="p-3 bg-[#fdebea] text-[#d97771] rounded-xl shrink-0">
                                <x-heroicon-o-book-open class="w-5 h-5" />
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Licenciatura en Psicología (UBA)</h4>
                                <p class="text-sm text-gray-600 mt-1">Especialización en Clínica Psicoanalítica y Cognitivo Conductual.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="p-3 bg-[#fdebea] text-[#d97771] rounded-xl shrink-0">
                                <x-heroicon-o-building-office class="w-5 h-5" />
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Postgrado en Psicopedagogía Institucional</h4>
                                <p class="text-sm text-gray-600 mt-1">Atención especializada en procesos de aprendizaje y neurodiversidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="py-20 md:py-32 bg-white relative overflow-hidden">
            <div class="max-w-4xl mx-auto px-4 md:px-8 text-center relative z-10">
                <div class="text-[#e2dac3] mb-6 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-12 h-12 md:w-16 md:h-16 mx-auto" aria-hidden="true">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>
                <p class="font-serif text-xl md:text-3xl text-gray-800 leading-relaxed italic font-medium mb-8">
                    "Las sesiones de Magali hicieron que pudiera hablar de cosas que guardé por años. Sentí que finalmente tenía un lugar seguro donde ser yo mismo."
                </p>
                <div class="flex items-center justify-center gap-4">
                    <div class="w-8 h-[1px] bg-gray-400"></div>
                    <span class="text-xs font-bold tracking-widest text-gray-500 uppercase">Paciente Anónimo</span>
                    <div class="w-8 h-[1px] bg-gray-400"></div>
                </div>
            </div>
        </section>

        <!-- Encuéntranos Section -->
        <section id="contacto" class="py-20 md:py-32 bg-[#e8ebe6] relative">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="flex flex-col items-center mb-12">
                    <h2 class="font-serif text-3xl md:text-4xl text-stone-900 mb-4">Contáctanos</h2>
                    <div class="h-[2px] w-16 bg-[#E8A598]"></div>
                </div>
                <div class="mb-8 flex flex-wrap items-center justify-center md:justify-center gap-8 md:gap-12">
                    <a href="https://wa.me/5492974014639" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="WhatsApp">
                        <img src="{{ web_image('social.wsp') }}" alt="" aria-hidden="true" class="w-12 h-12 md:w-16 md:h-16 object-contain" />
                    </a>
                    <a href="mailto:magalimonti91@gmail.com" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="Email">
                        <img src="{{ web_image('social.gmail') }}" alt="" aria-hidden="true" class="w-12 h-12 md:w-16 md:h-16 object-contain" />
                    </a>
                    <a href="https://www.instagram.com/lic.magalimonti" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="Instagram">
                        <img src="{{ web_image('social.instagram') }}" alt="" aria-hidden="true" class="w-12 h-12 md:w-16 md:h-16 object-contain" />
                    </a>
                    <a href="https://www.tiktok.com/@lic.magalimonti" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="TikTok">
                        <img src="{{ web_image('social.tik-tok') }}" alt="" aria-hidden="true" class="w-12 h-12 md:w-16 md:h-16 object-contain" />
                    </a>
                    <a href="https://consultoriomonti.bewit.com.ar/" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="Sitio Web">
                        <img src="{{ web_image('social.search') }}" alt="" aria-hidden="true" class="w-12 h-12 md:w-16 md:h-16 object-contain" />
                    </a>
                </div>
                <div class="grid md:grid-cols-2 gap-0 rounded-[3rem] overflow-hidden shadow-2xl shadow-[#405b6a]/10">
                    <!-- Info Contacto -->
                    <div class="bg-white p-6 md:p-20 flex flex-col justify-center">
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
                                    <p class="text-gray-500 text-base leading-relaxed">Conesa 849, Depto. "4F"<br>Muñiz, Buenos Aires</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-6 group">
                                <div class="bg-[#f8f9fa] p-4 rounded-2xl group-hover:bg-[#405b6a] group-hover:text-white transition-all duration-300">
                                        <x-heroicon-o-envelope class="w-6 h-6" />
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-gray-900 mb-2 uppercase tracking-widest">Email</h4>
                                        <span class="text-gray-500 text-base hover:text-[#405b6a] transition-colors leading-relaxed">magalimonti91@gmail.com</span>
                                    </div>
                            </div>

                            <div class="flex items-start gap-6 group">
                                <div class="bg-[#f8f9fa] p-4 rounded-2xl group-hover:bg-[#405b6a] group-hover:text-white transition-all duration-300">
                                        <x-heroicon-o-phone class="w-6 h-6" />
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-gray-900 mb-2 uppercase tracking-widest">Teléfono</h4>
                                        <span class="text-gray-500 text-base hover:text-[#405b6a] transition-colors leading-relaxed">+54 9 2974 01-4639</span>
                                    </div>
                            </div>
                        </div>

                        <div class="mt-16 mx-auto">
                            <a href="https://wa.me/5492974014639" target="_blank" class="inline-flex items-center gap-4 bg-[#405b6a] hover:bg-[#314652] text-white text-xs font-bold uppercase tracking-[0.2em] px-10 py-5 transition-all hover:gap-6 shadow-lg shadow-[#405b6a]/20 rounded-full">
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
    </main>

    <!-- Footer -->
    <footer class="bg-[#405b6a] text-white py-24">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid md:grid-cols-4 gap-16 mb-20">
                <div class="md:col-span-2 flex flex-col items-center md:items-start">
                    <a href="https://consultoriomonti.bewit.com.ar/" class="inline-block w-48 h-auto object-contain mb-8 hover:opacity-80 transition-opacity">
                        <img src="{{ web_image('welcome.logo-transparent') }}" alt="Consultorio Monti" class="w-full h-auto object-contain">
                    </a>
                    <p class="text-white/60 text-base max-w-sm leading-relaxed mb-8">
                        Psicología con un enfoque humano y profesional. Un espacio para encontrarte con uno mismo.
                    </p>
                    <div class="flex items-center gap-4">
                        <a href="https://wa.me/5492974014639" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="WhatsApp">
                            <img src="{{ web_image('social.wsp') }}" alt="" aria-hidden="true" class="w-7 h-7 object-contain" />
                        </a>
                        <a href="mailto:magalimonti91@gmail.com" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="Email">
                            <img src="{{ web_image('social.gmail') }}" alt="" aria-hidden="true" class="w-7 h-7 object-contain" />
                        </a>
                        <a href="https://www.instagram.com/lic.magalimonti" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="Instagram">
                            <img src="{{ web_image('social.instagram') }}" alt="" aria-hidden="true" class="w-7 h-7 object-contain" />
                        </a>
                        <a href="https://www.tiktok.com/@lic.magalimonti" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="TikTok">
                            <img src="{{ web_image('social.tik-tok') }}" alt="" aria-hidden="true" class="w-7 h-7 object-contain" />
                        </a>
                        <a href="https://consultoriomonti.bewit.com.ar/" target="_blank" rel="noopener" class="inline-flex items-center justify-center transition-transform duration-300 hover:-translate-y-1 hover:scale-110" title="Sitio">
                            <img src="{{ web_image('social.search') }}" alt="" aria-hidden="true" class="w-7 h-7 object-contain" />
                        </a>
                    </div>
                </div>
    
                <div>
                    <h4 class="text-xs font-bold tracking-[0.2em] text-white/40 uppercase mb-8">Navegación</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-sm hover:text-white/60 transition-colors">Inicio</a></li>
                        <li><a href="#servicios" class="text-sm hover:text-white/60 transition-colors">Servicios</a></li>
                        <li><a href="#sobre-mi" class="text-sm hover:text-white/60 transition-colors">Sobre Mí</a></li>
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
                <p>&copy; 2026 Lic. Magali Monti. Todos los derechos reservados a bewit.com.ar</p>
                <div class="flex items-center gap-2"></div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/5492974014639" target="_blank" rel="noopener" class="fixed bottom-6 right-6 z-50 inline-flex items-center justify-center w-14 h-14 rounded-full bg-[#25D366] text-white shadow-lg shadow-black/20 hover:shadow-xl hover:scale-110 transition-all duration-300" title="WhatsApp">
        <img src="{{ web_image('social.wsp') }}" alt="" aria-hidden="true" class="w-7 h-7 object-contain" />
    </a>

</body>
</html>
