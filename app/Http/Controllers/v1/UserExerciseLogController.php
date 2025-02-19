<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\ExerciseLogResource;
use App\Models\ExerciseLog;
use Essa\APIToolKit\Api\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserExerciseLogController extends Controller
{
    use ApiResponse;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        return $this->responseSuccess('Success!', ExerciseLogResource::collection($request->user()->exerciseLogs));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, ExerciseLog $exerciseLog)
    {
        if($request->user()->cannot('view', ExerciseLog::class)) {
            return $this->responseUnAuthorized();
        }

        return $this->responseSuccess('Success!', ExerciseLogResource::make($exerciseLog));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExerciseLog $exerciseLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExerciseLog $exerciseLog)
    {
        //
    }
}
