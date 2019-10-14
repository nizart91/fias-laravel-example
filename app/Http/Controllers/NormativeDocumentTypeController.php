<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Entity\NormativeDocumentType;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Resource\NormativeDocumentType as Resource;

class NormativeDocumentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return Resource::collection(NormativeDocumentType::query()->paginate(50));
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
        return new Resource(NormativeDocumentType::query()->find($id));
    }
}
