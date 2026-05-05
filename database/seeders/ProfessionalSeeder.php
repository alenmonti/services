<?php

namespace Database\Seeders;

use App\Models\Professional;
use App\Models\User;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $magali = Professional::updateOrCreate([
            'slug' => 'magali-monti',
        ], [
            'name' => 'Magali Monti',
            'bio' => 'Psicoterapeuta. Atención individual y grupal. Especial interés en terapia cognitivo-conductual y enfoques integrativos.',
            'contact' => 'contacto@magali.example',
        ]);

        User::updateOrCreate([
            'email' => 'magali@example.test',
        ], [
            'name' => 'Magali Monti',
            'password' => Hash::make('password'),
            'professional_id' => $magali->id,
        ]);

        if ($magali->services()->doesntExist()) {
            Service::factory()->count(3)->for($magali)->create();
        }

        $mailin = Professional::updateOrCreate([
            'slug' => 'mailin-monti',
        ], [
            'name' => 'Mailin Monti',
            'bio' => 'Dermatóloga. Atención integral de la piel, diagnóstico y tratamiento de patologías dermatológicas.',
            'contact' => 'contacto@mailin.example',
        ]);

        User::updateOrCreate([
            'email' => 'mailin@example.test',
        ], [
            'name' => 'Mailin Monti',
            'password' => Hash::make('password'),
            'professional_id' => $mailin->id,
        ]);
    }
}
