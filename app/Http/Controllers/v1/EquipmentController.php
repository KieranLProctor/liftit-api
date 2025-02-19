<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEquipmentRequest;
use App\Http\Requests\UpdateEquipmentRequest;
use App\Http\Resources\v1\EquipmentResource;
use App\Models\Equipment;
use Essa\APIToolKit\Api\ApiResponse;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EquipmentController extends Controller
{
    use ApiResponse;

    /**
     * Display a listing of the resource.
     * @throws AuthorizationException
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        if ($request->user()->cannot('viewAny', Equipment::class)) {
            throw new AuthorizationException('You cannot perform this action!');
        }

        $equipments = Equipment::useFilters()->dynamicPaginate();

        return EquipmentResource::collection($equipments);
    }

    /**
     * Store a newly created resource in storage.
     * @throws AuthorizationException
     */
    public function store(StoreEquipmentRequest $request): JsonResponse
    {
        if ($request->user()->cannot('create', Equipment::class)) {
            throw new AuthorizationException('You cannot perform this action!');
        }

        $equipment = Equipment::create($request->validated());

        return $this->responseSuccess('Success', new EquipmentResource($equipment));
    }

    /**
     * Display the specified resource.
     * @throws AuthorizationException
     */
    public function show(Request $request, Equipment $equipment): EquipmentResource
    {
        if ($request->user()->cannot('view', Equipment::class)) {
            throw new AuthorizationException('You cannot perform this action!');
        }

        return new EquipmentResource($equipment);
    }

    /**
     * Update the specified resource in storage.
     * @throws AuthorizationException
     */
    public function update(UpdateEquipmentRequest $request, Equipment $equipment): JsonResponse
    {
        if ($request->user()->cannot('update', Equipment::class)) {
            throw new AuthorizationException('You cannot perform this action!');
        }

        $equipment->update($request->validated());

        return $this->responseSuccess('Success', new EquipmentResource($equipment->fresh()));
    }

    /**
     * Remove the specified resource from storage.
     * @throws AuthorizationException
     */
    public function destroy(Request $request, Equipment $equipment)
    {
        if ($request->user()->cannot('delete', Equipment::class)) {
            throw new AuthorizationException('You cannot perform this action!');
        }

        $equipment->delete();

        return $this->responseSuccess('Success');
    }
}
