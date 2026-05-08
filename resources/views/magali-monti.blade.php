@php
use App\Models\Service;
use App\Models\Professional;

$serviceColors = [
    'bg-[#fdebea]', // Orientación a padres / salmón
    'bg-[#cffafe]', // Psicopedagogía / celeste
    'bg-[#e5e7eb]', // Talleres / gris
    'bg-white',
];
@endphp

<!doctype html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Lic. Magali Monti - Psicoterapeuta</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[#faf9f7] text-gray-900 font-sans antialiased overflow-x-hidden">
    
    <!-- Navbar -->
    <header class="py-6 px-4 md:px-8 max-w-7xl mx-auto flex justify-between items-center relative z-50" x-data="{ mobileMenuOpen: false }">
        <a href="#" class="block w-40 md:w-56 shrink-0">
            <!-- Logo -->
            <img src="{{ asset('storage/images/logo.avif') }}" alt="Magalí Monti - Lic. Psicopedagogía" class="w-full h-auto object-contain">
        </a>
        
        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
            <a href="#" class="hover:text-primary transition-colors">Inicio</a>
            <a href="#servicios" class="hover:text-primary transition-colors">Servicios</a>
            <a href="#sobre-mi" class="hover:text-primary transition-colors">Sobre Mí</a>
            <a href="#contacto" class="hover:text-primary transition-colors">Contacto</a>
            <a href="#contacto" class="bg-primary hover:bg-primary-hover text-white px-6 py-2.5 rounded-full transition-colors">Agendar Turno</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2.5 bg-primary/5 rounded-xl text-primary hover:bg-primary/10 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-cloak class="absolute top-20 left-0 w-full bg-white shadow-lg py-4 px-4 flex flex-col gap-4 md:hidden">
            <a href="#" @click="mobileMenuOpen = false" class="text-gray-800 font-medium">Inicio</a>
            <a href="#servicios" @click="mobileMenuOpen = false" class="text-gray-800 font-medium">Servicios</a>
            <a href="#sobre-mi" @click="mobileMenuOpen = false" class="text-gray-800 font-medium">Sobre Mí</a>
            <a href="#contacto" @click="mobileMenuOpen = false" class="text-gray-800 font-medium">Contacto</a>
            <a href="#contacto" @click="mobileMenuOpen = false" class="bg-primary text-white text-center py-3 rounded-md mt-2 font-medium">Agendar Turno</a>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="max-w-7xl mx-auto px-4 md:px-8 pt-8 md:pt-16 pb-16 md:pb-24 grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 flex flex-col items-center text-center md:items-start md:text-left">
                <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-medium leading-tight text-gray-900 mb-6">
                    Encontrá un espacio de escucha y bienestar.
                </h1>
                <p class="text-gray-600 text-lg md:text-xl mb-8 max-w-lg leading-relaxed">
                    Psicoterapia orientada a fortalecer recursos personales y emocionales en un ambiente de calidez, respeto y profesionalismo.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                    <a href="#contacto" class="bg-primary hover:bg-primary-hover text-white text-center px-8 py-3.5 rounded-full font-medium transition-colors w-full sm:w-auto">
                        Agendar Turno
                    </a>
                    <a href="#servicios" class="border border-gray-300 text-gray-700 hover:bg-gray-50 text-center px-8 py-3.5 rounded-full font-medium transition-colors w-full sm:w-auto">
                        Conocer más
                    </a>
                </div>
            </div>
            <div class="order-1 md:order-2 relative flex justify-center md:justify-end">
                <div class="relative w-full max-w-md rounded-2xl overflow-hidden shadow-xl aspect-[4/5] object-cover bg-gray-200">
                    <img src="{{ asset('storage/images/magali-conferencia.avif') }}" alt="Magali Monti" class="w-full h-full object-cover object-top">
                </div>
                <!-- Floating Badge -->
                <div class="absolute -bottom-6 md:-bottom-8 left-4 md:-left-8 bg-white/90 backdrop-blur-sm p-4 rounded-xl shadow-sm max-w-[240px]">
                    <div class="flex items-start gap-3">
                        <div class="p-2 bg-primary/10 text-primary rounded-lg shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-800">Presencial & Online</p>
                            <p class="text-xs text-gray-500 mt-0.5">Flexibilidad para tu bienestar diario</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mi Enfoque Section -->
        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-primary uppercase mb-3 block">Mi Enfoque</span>
                    <h2 class="font-serif text-3xl md:text-4xl text-gray-900 font-medium">Hacia una vida con mayor sentido y equilibrio.</h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-bg-light rounded-2xl p-8 hover:shadow-md transition-shadow text-center">
                        <div class="w-12 h-12 mx-auto flex items-center justify-center rounded-xl bg-primary/10 text-primary mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Empatía Cognitiva</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">Entender tus procesos de pensamiento para transformar hábitos emocionales desde la raíz.</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-bg-light rounded-2xl p-8 hover:shadow-md transition-shadow text-center">
                        <div class="w-12 h-12 mx-auto flex items-center justify-center rounded-xl bg-primary/10 text-primary mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Contención Segura</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">Un espacio libre de juicio donde cada emoción tiene su lugar y tiempo de procesamiento.</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-bg-light rounded-2xl p-8 hover:shadow-md transition-shadow text-center">
                        <div class="w-12 h-12 mx-auto flex items-center justify-center rounded-xl bg-primary/10 text-primary mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Herramientas Prácticas</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">Ejercicios y estrategias concretas para aplicar en tu realidad cotidiana.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Servicios Profesionales Section -->
        <section id="servicios" class="py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                    <div class="max-w-xl">
                        <h2 class="font-serif text-3xl md:text-4xl text-gray-900 font-medium mb-4">Servicios Profesionales</h2>
                        <p class="text-gray-600">Brindo atención integral adaptada a las necesidades específicas de cada etapa de la vida.</p>
                    </div>
                    <a href="#contacto" class="text-primary font-medium hover:underline inline-flex items-center gap-1">
                        Consultar disponibilidad
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>

                <!-- Bento Grid for Services -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                    @foreach($services as $index => $service)
                        @php
                            // Lógica para asignar tamaño y color
                            // Primer servicio más grande, ocupa 2 columnas en desktop
                            $isFirst = $index === 0;
                            $colorClass = $serviceColors[($index > 0 ? $index - 1 : 0) % count($serviceColors)];
                            if($isFirst) {
                                $colorClass = 'bg-white shadow-sm';
                            }
                        @endphp

                        <div class="{{ $isFirst ? 'md:col-span-2' : 'col-span-1' }} {{ $colorClass }} rounded-3xl p-8 md:p-10 flex flex-col {{ $isFirst ? 'md:flex-row md:items-center' : '' }} gap-8 overflow-hidden relative">
                            
                            <div class="flex-1 z-10 flex flex-col h-full justify-between">
                                <div>
                                    <h3 class="font-serif text-2xl font-medium text-gray-900 mb-3">{{ $service->title }}</h3>
                                    <p class="text-gray-700 leading-relaxed mb-4">{{ $service->description }}</p>
                                    @if($service->price)
                                        <p class="text-sm font-semibold text-primary mb-6">Valor de sesión: ${{ number_format($service->price, 0, ',', '.') }}</p>
                                    @endif
                                </div>
                                
                                @if($isFirst)
                                    <div class="space-y-3">
                                        <div class="flex items-center gap-3 text-sm text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>60 minutos por sesión</span>
                                        </div>
                                        <div class="flex items-center gap-3 text-sm text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                            </svg>
                                            <span>Modalidad Online o Presencial</span>
                                        </div>
                                    </div>
                                @elseif($index === 3)
                                    <div class="mt-4">
                                        <a href="#contacto" class="inline-block bg-white text-gray-800 px-6 py-2 rounded-full text-sm font-medium shadow-sm hover:shadow transition-shadow">Ver Agenda</a>
                                    </div>
                                @endif
                                
                                <!-- Icon for non-first cards based on index -->
                                @if(!$isFirst && $index === 1)
                                    <div class="mt-auto pt-6 text-[#d97771]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                        </svg>
                                    </div>
                                @elseif(!$isFirst && $index === 2)
                                    <div class="mt-auto pt-6 text-[#4a9fcc]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                        </svg>
                                    </div>
                                @endif
                            </div>

                            @if($service->image)
                                <!-- Service Image from DB -->
                                <div class="{{ $isFirst ? 'w-full md:w-5/12 h-64 md:h-full' : 'w-full h-40 mt-6' }} rounded-2xl overflow-hidden shrink-0 {{ !$isFirst ? 'order-first mb-4' : 'mt-6 md:mt-0' }}">
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-full object-cover">
                                </div>
                            @elseif($isFirst)
                                <!-- Fallback Real Space Image if no image in DB -->
                                <div class="w-full md:w-5/12 h-64 md:h-full rounded-2xl overflow-hidden shrink-0 mt-6 md:mt-0">
                                    <img src="https://images.unsplash.com/photo-1550136513-548af4445338?auto=format&fit=crop&q=80&w=800" alt="Espacio Real" class="w-full h-full object-cover">
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Sobre Mí Section -->
        <section id="sobre-mi" class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-8 grid md:grid-cols-2 gap-12 items-center">
                <div class="relative w-full aspect-square md:aspect-[4/5] rounded-3xl overflow-hidden shadow-lg">
                    <img src="{{ asset('storage/images/magali-conferencia-2.avif') }}" alt="Conoceme - Magali Monti" class="w-full h-full object-cover object-left">
                    <!-- Decoración Rompecabezas -->
                    <div class="absolute -bottom-8 -right-8 w-40 h-40 opacity-90 hidden md:block">
                        <img src="{{ asset('storage/images/piezas-rompecabezas.avif') }}" alt="Rompecabezas" class="w-full h-full object-contain">
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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Licenciatura en Psicología (UBA)</h4>
                                <p class="text-sm text-gray-600 mt-1">Especialización en Clínica Psicoanalítica y Cognitivo Conductual.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="p-3 bg-[#fdebea] text-[#d97771] rounded-xl shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                </svg>
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
        <section class="py-20 md:py-32 bg-bg-light relative overflow-hidden">
            <div class="max-w-4xl mx-auto px-4 md:px-8 text-center relative z-10">
                <div class="text-[#e2dac3] mb-6 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-12 h-12 md:w-16 md:h-16 mx-auto">
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

        <!-- Contact Section -->
        <section id="contacto" class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="bg-[#faf9f7] rounded-3xl p-8 md:p-12 lg:p-16 grid md:grid-cols-2 gap-12 lg:gap-24 shadow-sm">
                    
                    <div class="flex flex-col justify-center">
                        <h2 class="font-serif text-3xl md:text-4xl text-gray-900 font-medium mb-6">Iniciemos una conversación.</h2>
                        <p class="text-gray-600 mb-10 text-lg leading-relaxed">
                            Podés escribirme para consultar horarios, aranceles o coordinar una primera entrevista informativa sin compromiso.
                        </p>

                        <div class="space-y-8">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center bg-white rounded-full shadow-sm text-gray-500 shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Email</p>
                                    <a href="mailto:magalimonti.psi@gmail.com" class="text-gray-900 font-medium hover:text-primary">magalimonti.psi@gmail.com</a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center bg-white rounded-full shadow-sm text-gray-500 shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">WhatsApp</p>
                                    <a href="https://wa.me/5491100000000" target="_blank" class="text-gray-900 font-medium hover:text-primary">+54 9 11 0000-0000</a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center bg-white rounded-full shadow-sm text-gray-500 shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Consultorio</p>
                                    <p class="text-gray-900 font-medium">Rosario / Belgrano, CABA</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-sm">
                        <form action="#" method="POST" class="flex flex-col gap-5">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre Completo</label>
                                    <input type="text" id="name" name="name" placeholder="Ej. Juan García" class="w-full bg-gray-50 border-none rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 transition-colors text-sm">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input type="email" id="email" name="email" placeholder="email@ejemplo.com" class="w-full bg-gray-50 border-none rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 transition-colors text-sm">
                                </div>
                            </div>
                            
                            <div>
                                <label for="reason" class="block text-sm font-medium text-gray-700 mb-1">Motivo de consulta</label>
                                <select id="reason" name="reason" class="w-full bg-gray-50 border-none rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 transition-colors text-sm appearance-none">
                                    <option value="" disabled selected>Seleccioná una opción</option>
                                    <option value="Terapia Individual">Terapia Individual</option>
                                    <option value="Orientacion a Padres">Orientación a Padres</option>
                                    <option value="Psicopedagogia">Psicopedagogía</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
                                <textarea id="message" name="message" rows="4" placeholder="¿En qué puedo ayudarte?" class="w-full bg-gray-50 border-none rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 transition-colors text-sm resize-none"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-primary hover:bg-primary-hover text-white font-medium py-3.5 rounded-lg transition-colors mt-2">
                                Enviar mensaje
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-bg-light border-t border-gray-200 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="md:col-span-2">
                    <img src="{{ asset('storage/images/logo.avif') }}" alt="Magalí Monti - Lic. Psicopedagogía" class="w-48 mb-6">
                    <p class="text-gray-500 text-sm max-w-sm leading-relaxed mb-8">
                        Psicología con un enfoque humano y profesional. Un espacio para encontrarte con uno mismo.
                    </p>
                    
                    <!-- Redes Sociales Destacadas -->
                    <div class="flex items-center gap-4">
                        <a href="https://instagram.com" target="_blank" class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-gray-500 hover:text-primary hover:shadow-md transition-all" title="Instagram">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://tiktok.com" target="_blank" class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-gray-500 hover:text-primary hover:shadow-md transition-all" title="TikTok">
                            <span class="sr-only">TikTok</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.53 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/5491100000000" target="_blank" class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-gray-500 hover:text-primary hover:shadow-md transition-all" title="WhatsApp">
                            <span class="sr-only">WhatsApp</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M2.004 22l1.352-4.938A10.74 10.74 0 011.642 12C1.642 6.115 6.427 1.33 12.311 1.33c2.848 0 5.526 1.11 7.54 3.125a10.63 10.63 0 013.12 7.542c0 5.885-4.786 10.67-10.67 10.67a10.74 10.74 0 01-5.18-1.328L2.004 22zm5.328-3.053l.36.213a8.956 8.956 0 004.62 1.28h.005c4.957 0 8.988-4.032 8.988-8.99A8.94 8.94 0 0018.77 5.064a8.941 8.941 0 00-6.455-2.628C7.355 2.436 3.324 6.468 3.324 11.425c0 1.65.438 3.259 1.266 4.67l.235.398-.797 2.91 2.99-1.222.314.166zM17.15 14.81c-.276-.14-1.632-.806-1.884-.898-.252-.093-.437-.14-.621.14-.184.278-.711.898-.872 1.084-.16.185-.322.21-.598.07-.276-.14-1.164-.429-2.217-1.371-.818-.733-1.371-1.639-1.533-1.918-.16-.279-.017-.43.121-.568.125-.125.276-.322.414-.484.14-.162.185-.278.277-.464.093-.186.046-.35-.023-.488-.07-.14-.621-1.498-.85-2.053-.223-.538-.45-.465-.621-.474-.16-.008-.345-.008-.528-.008-.184 0-.484.07-.737.35-.253.279-.967.945-.967 2.304 0 1.359.99 2.673 1.127 2.859.14.186 1.948 2.973 4.717 4.169.658.286 1.17.457 1.57.585.66.21 1.262.18 1.737.109.528-.078 1.632-.667 1.862-1.312.23-.645.23-1.198.162-1.312-.07-.114-.253-.184-.529-.322z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="mailto:magalimonti.psi@gmail.com" class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-gray-500 hover:text-primary hover:shadow-md transition-all" title="Email">
                            <span class="sr-only">Email</span>
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-4">Servicios</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-sm text-gray-600 hover:text-primary transition-colors">Psicoterapia Individual</a></li>
                        <li><a href="#" class="text-sm text-gray-600 hover:text-primary transition-colors">Orientación a Padres</a></li>
                        <li><a href="#" class="text-sm text-gray-600 hover:text-primary transition-colors">Evaluación Psicopedagógica</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-4">Legal</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-sm text-gray-600 hover:text-primary transition-colors">Aviso Legal</a></li>
                        <li><a href="#" class="text-sm text-gray-600 hover:text-primary transition-colors">Privacidad</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center md:text-left border-t border-gray-200 pt-8 mt-8">
                <p class="text-xs text-gray-400">
                    &copy; 2024 Lic. Magali Monti - Psicoterapeuta. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>
