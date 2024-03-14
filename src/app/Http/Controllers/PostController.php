<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lib\UsePost;

class PostController extends Controller
{
    public function index(): string
    {
        return "index";
    }

    public function create(): string
    {
        //
        return "create";
    }

    public function store(Request $request): string
    {
        //
        return "store" . $request;
    }

    public function show(int $id): string
    {
        //
        return "show" . $id;
    }

    public function edit(int $id): string
    {
        //
        return "edit" . $id;
    }

    public function update(Request $request, int $id): string
    {
        //
        return "update" . $id . $request;
    }

    public function destroy(int $id): string
    {
        //
        return "destroy" . $id;
    }

    public function count(): UsePost
    {
        $usePost = new UsePost();
        // $count = $usePost;

        return $usePost;
    }
}
