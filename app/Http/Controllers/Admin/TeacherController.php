<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('administrator.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('administrator.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $this->validateRequest();

        Teacher::create([
           'last_name' => $request->input('last_name'),
           'first_name' => $request->input('first_name')
        ]);

        return redirect(route('teachers.index'))->with('success', 'L\'enseignant a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param Teacher $teacher
     * @return Factory|View
     */
    public function show(Teacher $teacher)
    {
        return view('administrator.teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Teacher $teacher
     * @return Factory|View
     */
    public function edit(Teacher $teacher)
    {
        return view('administrator.teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Teacher $teacher
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, Teacher $teacher)
    {
        $this->validateRequest();

        $teacher->update([
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name')
        ]);

        return redirect(route('teachers.index'))->with('success', 'La modification a été effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Teacher $teacher
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return back()->with('success', 'L\'enseignant a été supprimé de la base');
    }

    private function validateRequest() {
         return request()->validate([
             'last_name' => 'required',
             'first_name' => 'required'
         ],
             [
                 'last_name.required' => 'Veuillez saisir le nom de l\'enseignant',
                 'first_name.required' => 'Veuillez saisir le prénom de l\'enseignant'
             ]);
    }
}
