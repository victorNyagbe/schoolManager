<?php

namespace App\Http\Controllers\Admin;

use App\Group;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $groups = Group::all();
        return view('administrator.groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('administrator.groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $group = Group::create($this->validateRequest());

        return redirect(route('groups.index'))->with('success', 'Le groupe a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Group $group)
    {
        return view('administrator.groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response|\Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Group $group)
    {
        return view('administrator.groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Group $group)
    {
        $group->update($this->validateRequest());
        return redirect(route('groups.index'))->with('success', 'Le groupe a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect(route('groups.index'))->with('success', 'Le groupe '.$group->code.' a bien été supprimé');
    }

    /**
     * @return array
     */

    private function validateRequest() {
        return request()->validate([
            'code' => 'required|string|unique:groups',
            'description' => 'required|string|'
        ],
            [
                'code.required' => 'Entrer le code du groupe',
                'code.string' => 'Le code doit être une chaîne de caractères',
                'code.unique' => 'Le code que vous voulez enregistrer existe déjà',
                'description.required' => 'Saisir la description du groupe',
                'description.string' => 'La description doit être une chaîne de caractères',
            ]);
    }
}
