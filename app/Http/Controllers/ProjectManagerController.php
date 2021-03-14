<?php

namespace App\Http\Controllers;

use App\Models\ProjectManager;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ProjectManagerController extends BaseController
{
    public function index()
    {
        return ProjectManager::all();
    }

    public function read(int $id)
    {
        if (!$id) {

            return response()->json(['Error' => ['Message' => 'Bad Request']], 400);

        }

        try {

            return ProjectManager::findOrFail($id);

        } catch (ModelNotFoundException $error) {

            return response()->json(['Error' => ['message' => 'Project Not Found']], 404);

        }

    }

    public function create(Request $request)
    {
        $projectManager = ProjectManager::create($request->all());
        return response()->json($projectManager);
    }

    public function update(Request $request, int $id)
    {
        $projectManger = ProjectManager::findOrFail($id);
        $projectManger->fill($request->all());
        $projectManger->save();
        return response()->json($projectManger);
    }

    public function patch(Request $request, int $id)
    {
        $projectManger = ProjectManager::findOrFail($id);
        $projectManger->fill($request->all());
        $projectManger->save();
        return response()->json($projectManger);
    }

    public function delete(int $id)
    {
        $projectManger = ProjectManager::findOrFail($id);

        if (!$projectManger) {
            return response()->json(['Error' => ['message' => 'Project Not Found']], 404);
        }

        $projectManger->delete();
        return response()->json('', 204);

    }

}
