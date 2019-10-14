<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Entity\AddressObject;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Resource\AddressObject as Resource;

class AddressObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return Resource::collection(AddressObject::query()->paginate(50));
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
        return new Resource(AddressObject::query()->find($id));
    }
}
