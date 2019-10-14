<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Entity\EstateStatus;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Resource\EstateStatus as Resource;

class EstateStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return Resource::collection(EstateStatus::query()->paginate(50));
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
        return new Resource(EstateStatus::query()->find($id));
    }
}
