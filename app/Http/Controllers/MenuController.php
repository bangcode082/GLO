<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menu = Menu::orderBy('id','desc')->paginate(10);
        return view('admin.menu.index',compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|unique:menus',
            'harga' => 'required|numeric|min:1000',
            'foto' => 'image|mimes:jpeg,png|max:10240',
            'jenis' => 'required|in:' . implode(',',Menu::allowedStatus()),
            'detil'=>'required'
            ]);
        $data = $request->only('nama', 'harga', 'jenis','detil');
        if ($request->hasFile('foto')) {
            $data['foto'] = $this->savePhoto($request->file('foto'));
        }
        $menu = Menu::create($data);

        // \Flash::success($product->name . ' saved.');
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::findOrfail($id);

        return view('admin.menu.show',compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        if ($menu->foto !== '') $this->deletePhoto($menu->foto);
        $menu->delete();
        // \Flash::success('Product deleted.');
        return redirect()->route('menu.index');
    }

    protected function savePhoto(UploadedFile $photo)
    {
        $fileName = str_random(40) . '.' . $photo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $photo->move($destinationPath, $fileName);
        return $fileName;
    }

    public function deletePhoto($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'img'
        . DIRECTORY_SEPARATOR . $filename;
        return File::delete($path);
    }


}
