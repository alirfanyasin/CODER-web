<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.app.news', [
            'data' => News::all()
        ]);
    }

    public function create()
    {
        return view('pages.app.news_create');
    }

    public function show(string $id)
    {
        return view('pages.app.news_show', [
            'data' => News::find($id)
        ]);
    }

    public function edit(string $id)
    {
        $data = News::find($id);

        return view('pages.app.news_edit', compact('data'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'string',
            'category' => 'string',
            'content' => 'string',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $randomString = Str::random(5);
            $name_file = $randomString . "_" . $file->getClientOriginalName();
            $file->storeAs('public/image/', $name_file);
            $validatedData['thumbnail'] = $name_file;
        };

        if (strpos($validatedData['content'], '<img') !== false) {
            $contenWithImages = $this->processImagesInConten($validatedData['content']);
            $validatedData['content'] = $contenWithImages;
        }

        News::create($validatedData);

        session()->flash('success', 'News created successfully');
        return redirect('/admin/news');
    }

    public function destroy(string $id)
    {
        News::destroy($id);

        return redirect('/admin/news')->with('delete', 'News deleted successfully');
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'string',
            'category' => 'string',
            'content' => 'string',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $randomString = Str::random(5);
            $name_file = $randomString . "_" . $file->getClientOriginalName();
            $file->storeAs('public/image/', $name_file);
            $validatedData['thumbnail'] = $name_file;
        };

        if (strpos($validatedData['content'], '<img') !== false) {
            $contenWithImages = $this->processImagesInConten($validatedData['content']);
            $validatedData['content'] = $contenWithImages;
        }

        $data = News::find($id);
        $data->title = $request->titleUpdate;
        $data->category = $request->categoryUpdate;
        $data->content = $request->contentUpdate;
        $data->thumbnail = $request->thumbnailUpdate;
        // $data->save();
        $data->update($validatedData);
        // return dd($data);
        return redirect('/admin/news')->with('update', 'News updated successfully');
        // return view('pages.app.news_show');
    }

    public function processImagesInConten($content)
    {
        $dom = new \DOMDocument();
        $dom->loadHTML($content);

        // Cari gambar
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $image) {
            $imageSrc = $image->getAttribute('src');

            if (strpos($imageSrc, 'data:image') !== false) {
                // Decode gambar
                list($type, $data) = explode(';', $imageSrc);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);

                $randomString = Str::random(5);
                $imageName = $randomString . '_' . time() . '.png';
                $imagePath = storage_path('app/public/image/content/' . $imageName);
                file_put_contents($imagePath, $data);

                // Ganti "src" dengan URL gambar yang disimpan
                $image->setAttribute('src', asset('storage/image/content/' . $imageName));
            }
        }

        // Uncode gambar ke HTML string
        $contenWithImages = $dom->saveHTML();

        return $contenWithImages;
    }
}
