<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class HomeController extends Controller
{
    private Profile $profileModel;

    public function __construct(Profile $profileModel)
    {
        $this->profileModel = $profileModel;
    }

    public function index()
    {
        $studentInfo = $this->profileModel->getStudentInfo();
        $data = [
            'title' => 'Beranda',
            'nama'  => $studentInfo['nama'],
            'nim'   => $studentInfo['nim']
        ];
        
        return view('beranda', $data);
    }

    public function profile()
    {
        $data = [
            'title'       => 'Profil',
            'student'     => $this->profileModel->getStudentInfo(),
            'experiences' => $this->profileModel->getExperiences()
        ];
        
        return view('profile', $data);
    }

    public function experience($id)
    {
        $exp = $this->profileModel->getExperienceById($id);
        
        if ($exp === null) {
            abort(404, "Pengalaman tidak ditemukan.");
        }

        $data = [
            'title'      => 'Detail Pengalaman',
            'experience' => $exp
        ];

        return view('experience_detail', $data);
    }
}
