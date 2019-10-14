<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Entity\Room;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Resource\Room as Resource;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return Resource::collection(Room::query()->paginate(50));
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
        return new Resource(Room::query()->find($id));
    }
}
