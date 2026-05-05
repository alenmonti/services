@php
use App\Models\Service;
use App\Models\Professional;
@endphp

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Magali Monti - Psicoterapeuta</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">
    <main class="max-w-4xl mx-auto p-4">
        <header class="mt-8 text-center">
            <h1 class="text-3xl font-bold">Magali Monti</h1>
            <p class="mt-2 text-gray-700">Psicoterapeuta. Atención individual y grupal.</p>
        </header>

        <section class="mt-8">
            <h2 class="text-2xl font-semibold">Servicios</h2>

            <div class="mt-4 grid gap-4 grid-cols-1 sm:grid-cols-2">
                @foreach($services as $service)
                    <article class="bg-white rounded-lg shadow p-4">
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-40 object-cover rounded">
                        @endif
                        <h3 class="mt-3 font-semibold">{{ $service->title }}</h3>
                        <p class="mt-2 text-gray-600">{{ $service->description }}</p>
                        <p class="mt-3 font-medium">Precio: {{ $service->price ? number_format($service->price, 2) . ' ARS' : 'Consultar' }}</p>
                    </article>
                @endforeach
            </div>
        </section>
    </main>
</body>
</html>
