<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateExerciseRequest;
use App\Http\Resources\v1\ExerciseResource;
use App\Models\Exercise;
use Essa\APIToolKit\Api\ApiResponse;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ExerciseController extends Controller
{
    use ApiResponse;

    /**
     * Display a listing of the resource.
     * @throws AuthorizationException
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        if ($request->user()->cannot('viewAny', Exercise::class)) {
            throw new AuthorizationException('You cannot perform this action!');
        }

        $exercises = Exercise::useFilters()->dynamicPaginate();

        return ExerciseResource::collection($exercises);
    }

    /**
     * Store a newly created resource in storage.
     * @throws AuthorizationException
     */
    public function store(Request $request): JsonResponse
    {
        if ($request->user()->cannot('create', Exercise::class)) {
            throw new AuthorizationException('You cannot perform this action!');
        }

        $exercise = Exercise::create($request->validated());

        return $this->responseSuccess('Success', new ExerciseResource($exercise));
    }

    /**
     * Display the specified resource.
     * @throws AuthorizationException
     */
    public function show(Request $request, Exercise $exercise): ExerciseResource
    {
        if ($request->user()->cannot('view', Exercise::class)) {
            throw new AuthorizationException('You cannot perform this action!');
        }

        return new ExerciseResource($exercise);
    }

    /**
     * Update the specified resource in storage.
     * @throws AuthorizationException
     */
    public function update(UpdateExerciseRequest $request, Exercise $exercise): JsonResponse
    {
        if ($request->user()->cannot('update', Exercise::class)) {
            throw new AuthorizationException('You cannot perform this action!');
        }

        $exercise->update($request->validated());

        return $this->responseSuccess('Success', new ExerciseResource($exercise->fresh()));
    }

    /**
     * Remove the specified resource from storage.
     * @throws AuthorizationException
     */
    public function destroy(Request $request, Exercise $exercise): JsonResponse
    {
        if ($request->user()->cannot('delete', Exercise::class)) {
            throw new AuthorizationException('You cannot perform this action!');
        }

        $exercise->delete();

        return $this->responseSuccess('Success');
    }
}
