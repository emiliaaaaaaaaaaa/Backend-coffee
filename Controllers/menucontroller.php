<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menumodel;
use Illuminate\Support\Facades\Validator;

class menucontroller extends Controller
{
    //Mendapatkan menu
    public function getMenu(){
        $datamenu=menumodel::get();
        return response()->json($datamenu);
    }
        //tambah menu
        public function addMenu(Request $req){
            $validator = Validator::make($req->all(),[
                'name'=>'required',
                'spicy_level'=>'required',
                'price'=>'required',
                'image'=>'required|image',
                'createdAt'=>'required',
                'updateAt'=>'required',
            ]);
            if($validator->fails()){
                return response()->json($validator->errors()->toJson());
            }
        //PROSES FOTO
            if ($req->hasFile('image')) {
                $file = $req->file('image');
                $filename = $file->getClientOriginalName();
                $file->move(public_path('uploads'), $filename);
        //MENYIMPAN BUKU
            $save = BukuModel::create([
                'name' => $req->get('name'),
                'spicy_level' => $req->get('spicy_level'),
                'price' => $req->get('price'),
                'image' => $filename,
                'createdAt' => $req->get('createdAt'),
                'updateAt' => $req->get('updateAt'),
            ]);
            return response()->json(['message' => 'Sukses mengunggah file foto']);
            } else {
            return response()->json(['message' => 'Gagal mengunggah file foto']);
            }
            if($save){
                return response()->json(['status'=>true, 'message'=>'Sukses menambahkan']);
            }else{
                return response()->json(['status'=>false, 'message'=>'Gagal menambahkan']);
            }
        }
}
