<?php

namespace App\Http\Controllers;


use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return Inertia::render('Projects/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Projects/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       //dd( $request->file('projectImg'));

      $imgPath = Storage::disk('public')->put(Str::random(50).'.jpg', $request->file('projectImg'), 'public');

       //  $imgPath = $request->projectImg->store('public/projectImgs');

        Projects::create([
            'title' => $request->projectTitle,
            'description' => $request->projectDescription,
            'img' =>  $imgPath,
            'github_link' => $request->projectGithub,
            'link' => $request->projectLink,
            'laravel_skill' => $request->laravelSkill,
            'vue_skill' => $request->vueSkill,
            'tailwind_skill' => $request->tailwindSkill,
            'flutter_skill' => $request->flutterSkill,
        ]);

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Inertia::render('Projects/Show',[
            'project' => projects::all()->where('id' , $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        return Inertia::render('Projects/Edit' ,[
            'project'=> Projects::all()->where('id', $id)->first(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $project = Projects::find($id);

        $project->update([
            'title' => $request->projectTitle,
            'description' => $request->projectDescription,
            'github_link' => $request->projectGithub,
            'link' => $request->projectLink,
            'laravel_skill' => $request->laravelSkill,
            'vue_skill' => $request->vueSkill,
            'tailwind_skill' => $request->tailwindSkill,
            'flutter_skill' => $request->flutterSkill,
        ]);

        return redirect('projects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $projectImg = Projects::find($id)->img;
        Storage::delete($projectImg);


        Projects::destroy($id);

        return redirect('projects');
    }
}
