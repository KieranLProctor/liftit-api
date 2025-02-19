<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\WorkoutResource;
use App\Models\Workout;
use Essa\APIToolKit\Api\ApiResponse;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class WorkoutController extends Controller
{
    use ApiResponse;

    /**
     * Display a listing of the resource.
     * @throws AuthorizationException
     */
    public function index(Request $request): AnonymousResourceCollection
    {
//        if($request->user()->cannot('viewAny', Workout::class)) {
//          throw new AuthorizationException('You cannot perform this action!');
//        }

        $workouts = Workout::useFilters()->dynamicPaginate();

        return WorkoutResource::collection($workouts);
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
    public function show(Request $request, Workout $workout): WorkoutResource
    {
//        if ($request->user()->cannot('view', Workout::class)) {
//          throw new AuthorizationException('You cannot perform this action!');
//        }

        return new WorkoutResource($workout);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workout $workout)
    {
//        if ($request->user()->cannot('update', Workout::class)) {
//            throw new AuthorizationException('You cannot perform this action!');
//        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
//        if($request->user()->cannot('destroy', Workout::class)) {
//          throw new AuthorizationException('You cannot perform this action!');
//        }
    }
}
