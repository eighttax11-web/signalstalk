<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public $colors = [
        'red' => 'Red color',
        'yellow' => 'Yellow color',
        'green' => 'Green color',
        'blue' => 'Blue color',
        'indigo' => 'Indigo color',
        'purple' => 'Purple color',
        'pink' => 'Pink color'
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

        return redirect()->route('admin.tags.edit', compact('tag'))->with('info', 'Tag successfully created');
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

        return redirect()->route('admin.tags.edit', compact('tag'))->with('info', 'Tag successfully updated');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index')->with('info', 'Tag successfully deleted');
    }
}
