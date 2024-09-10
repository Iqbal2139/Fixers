<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function showCoaches()
    {
        $coaches = [
            [
                'name' => 'Dede Abdih',
                'role' => 'Head Coach',
                'photo' => 'dede_abdih.jpeg',
                'bio' => 'Dede Abdih has over 10 years of experience coaching basketball at various levels. He is known for his strategic thinking and ability to develop young talents.'
            ],
            [
                'name' => 'Teguh Rahardjo',
                'role' => 'Assistant Coach',
                'photo' => 'teguh_rahardjo.jpeg',
                'bio' => 'Teguh specializes in developing young talents with a focus on technical skills and discipline. He has been a key part of the coaching team for 5 years.'
            ],
            [
                'name' => 'Andi Nugraha',
                'role' => 'Fitness Coach',
                'photo' => 'andi_nugraha.jpeg',
                'bio' => 'Andi Nugraha is our fitness coach with expertise in sports science. He ensures our players are in peak physical condition.'
            ],
            // Add more coaches as needed
        ];

        return view('coaches', ['coaches' => $coaches]);
    }
}
