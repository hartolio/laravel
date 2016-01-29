<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TambahArtikelRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\MessageBag;
//use Request;

class ArtikelController extends Controller
{
	public function index()
	{
    	$artikel = Article::latest('id')->get();
    	return view('artikel.index')->with('artikel', $artikel);
    }
    /*public function testRead($id)
    {
    	return $id;
    }*/
    public function show($id)
    {
    	$artikel = Article::findOrFail($id);
    	return view('artikel.testreaddetail')->with('artikel', $artikel);
    }
    public function create()
    {
        return view('artikel.testtambah');
    }
    public function store(Request $request)
    {
        //validation

        $this->validate($request, [
        'name_textbox_judul' => 'required',
        'name_textbox_isi' => 'required',
        //'image' => 'required|mimes:png'
        ]);
        /*if ($validator->fails()) {
            return redirect('artikel.create')
                        ->withErrors($validator)
                        ->withInput();
        }*/
        //end of validation
        //variable kan data post
        $variable_judul = $request->input('name_textbox_judul');
        $variabel_isi = $request->input('name_textbox_isi');
        //end of varibale kan data post
        //input data ke database
        $artikel = new Article();
        $artikel->judul = $variable_judul;
        $artikel->isi = $variabel_isi;
        
        $imageName = $artikel->judul . '.' . 
        $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(
            base_path() . '/public/images/artikel/', $imageName,
            $file_path = 'images/artikel/'.$imageName
        );
        $artikel->file_path = $file_path;
        $artikel->save();
        //end of input data ke database
        return redirect('artikel');
    }
    public function edit($id)
    {
        $artikel = Article::find($id);
        return view('artikel.testedit',compact('artikel'));
        //return view('artikel.testedit')->with('artikel', $artikel);
    }
    public function update($id, Request $request)
    {
        $this->validate($request, [
        'name_textbox_judul' => 'required',
        'name_textbox_isi' => 'required',
        ]);
        $variable_judul = $request->input('name_textbox_judul');
        $variabel_isi = $request->input('name_textbox_isi');
        $artikel = Article::findOrFail($id);
        $artikel->judul = $variable_judul;
        $artikel->isi = $variabel_isi;
        $artikel->update($request->all());
        return redirect('artikel');
    }
    public function destroy($id)
    {
       Article::find($id)->delete();
       return redirect('artikel');
    }
}
