<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Entity\CurrentStatus;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Resource\CurrentStatus as Resource;

class CurrentStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return Resource::collection(CurrentStatus::query()->paginate(50));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return resource
     */
    public function show(int $id)
    {
        return new Resource(CurrentStatus::query()->find($id));
    }
}
