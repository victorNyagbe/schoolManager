<?php

namespace App\Http\Controllers\Visitors;

use App\Group;
use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('visitors.home');
    }

    public function groups() {
        $groups = Group::all();
        return view('visitors.group', compact('groups'));
    }

    public function teachers() {
        $teachers = Teacher::all();
        return view('visitors.teacher', compact('teachers'));
    }
}
