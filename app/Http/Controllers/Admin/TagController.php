<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.tags.index')->only('index');
        $this->middleware('can:admin.tags.create')->only('create', 'store');
        $this->middleware('can:admin.tags.edit')->only('edit', 'update');
        $this->middleware('can:admin.tags.destroy')->only('destroy');
    }

    public $colors = [
        'red' => 'Rojo',
        'yellow' => 'Amarillo',
        'green' => 'Verde',
        'blue' => 'Azul',
        'indigo' => 'Indigo',
        'purple' => 'Morado',
        'pink' => 'Rosa'
    ];

    public function index()
    {
        $tags = Tag::paginate();
        return view('admin.tags.index', compact('tags'));
    }


    public function create()
    {
        $colors = $this->colors;
        return view('admin.tags.create', compact('colors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:tags',
            'color' => 'required'
        ]);

        $tag = Tag::create($request->all());

        return redirect()->route('admin.tags.edit', compact('tag'))->with('info', 'La etiqueta fue creada con éxito');
    }

    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        $colors = $this->colors;
        return view('admin.tags.edit', compact('tag', 'colors'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tags,slug,$tag->id",
            'color' => 'required'
        ]);

        $tag->update($request->all());

        return redirect()->route('admin.tags.edit', compact('tag'))->with('info', 'La etiqueta fue actualizada con éxito');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index')->with('info', 'La etiqueta fue borrada con éxito');
    }
}
