<?php

namespace App\Http\Controllers;
use App\gallerylaravel;
use Illuminate\Http\Request;

class login extends Controller
{


    public function postthem_du_lieu(Request $req){
        $this->validate($req,
            [
                'name'=>'required',
                'price'=>'required',
                'imgfullname'=>'required',
            ],
            [
                'name.required'=>'Vui lòng nhập tên',
                'price.required'=>'Vui lòng nhập giá',
                'imgfullname'=>'Vui lòng thêm ảnh',
            ]);
        $user = new gallerylaravel();
        $user->name = $req->name;
        $user->price = $req->price;
        $user->imgfullname = $req->imgfullname;
        $user->ordergallery = $req->ordergallery;
        $user->save();
        return redirect()->back()->with('thanhcong','Đã thêm thành công');
    }

    public function delete_du_lieu_img($id){
        gallerylaravel::findOrFail($id)->delete();
        return redirect('product');
    }

    public function update_edit($id)
    {
        $gallerylaravel = gallerylaravel::findOrFail($id);
        return view('signup', compact('gallerylaravel'));
    }

    public function sua_du_lieu(Request $request, $id)
    {
        $news = gallerylaravel::find($id);
        $news->name = $request->name;
        $news->price = $request->price;
        $news->imgfullname = $request->imgfullname;
        $news->save();
        return redirect('product');
    }


}
