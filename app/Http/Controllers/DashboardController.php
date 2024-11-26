<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        /** @var User $user */
        $user = auth()->user();

        return view('dashboard', [
            'links' => $user->links()
                ->orderBy('sort')
                ->get(),
        ]);
    }
}
