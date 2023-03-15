<?php

namespace App\Http\Controllers;

use App\Models\Saif\Tag;
use Illuminate\Http\Request;
use App\Http\Resources\TagResource;

class TagController extends Controller
{
    public function __invoke()
    {
        return TagResource::collection(
            Tag::all()
        );
    }
}
