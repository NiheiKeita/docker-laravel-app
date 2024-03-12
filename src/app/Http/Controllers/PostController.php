<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lib;

class PostController extends Controller
{
    public function index():string
    {
        return "index";
    }

    public function create():string
    {
        //
        return "create";
    }

    public function store(Request $request):string
    {
        //
        return "store";
    }

    public function show(int $id):string
    {
        //
        return "show";
    }

    public function edit(int $id):string
    {
        //
        return "edit";
    }

    public function update(Request $request, int $id):string
    {
        //
        return "update";
    }

    public function destroy(int $id):string
    {
        //
        return "destroy";
    }

    public function count()
    {
        $usePost = new Lib\UsePost;
        // $count = $usePost;

        return 1;
    }
}
