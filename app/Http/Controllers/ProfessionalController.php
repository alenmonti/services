<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    public function showMagaliMonti()
    {
        $professional = Professional::where('slug', 'magali-monti')->first();

        if (! $professional) {
            $services = collect();
            return view('magali-monti', compact('professional', 'services'));
        }

        $services = $professional->services()->where('visible', true)->get();
        return view('magali-monti', compact('professional', 'services'));
    }

    public function showMailinMonti()
    {
        $professional = Professional::where('slug', 'mailin-monti')->first();

        if (! $professional) {
            $groups = collect();
            return view('mailin-monti', compact('professional', 'groups'));
        }

        $groups = $professional->serviceGroups()->with(['services' => function ($query) {
            $query->where('visible', true);
        }])->get();

        return view('mailin-monti', compact('professional', 'groups'));
    }
}