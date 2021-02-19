<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theloai; 
use App\Models\Users; 
use App\Models\Author; 
class adminColtroller extends Controller
{
    public function getAdmin(){
    	return view('admin.admin');
    }
    public function login(){
    	return view('admin.login');
    }
    
    // 
    public function getCateAdd(){
    	return view('admin/category/cate_add');
    }
    public function postCateAdd(Request $request){
        // dd($request->all());
        $theloai = new Theloai;
        $theloai->name = $request->nameTheloai;
        $theloai->tenkhongdau = $request->nameTheloai;
        $theloai->save();
        // dd($theloai);
        return redirect()->route('category-list')->with('thongbao','Thêm thể loại thành công !');
    } 
    public function getCateList(){
        $theloai = TheLoai::all(); // hàm lấy tất cả danh sách thể loại: all()

        return view('admin.category.cate_list',compact('theloai'));
    }
    public function getCateEdit($id){
        $theloai = Theloai::find($id);
    	return view('admin.category.cate_edit',compact('theloai'));
    }
    public function postCateEdit(Request $request, $id){
        $theloai = Theloai::find($id);
        $this->validate($request, 
        [
            'name' => 'required|unique:Theloai,name|min:3|max:100'
        ], 
        [
            'name.required' =>'Bạn chưa nhập tên',
            'name.unique' => 'Tên thể loại đã tồn tại',
            'name.min' =>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự'
        ]);
        $theloai->name = $request->name;
        $theloai->tenkhongdau = $request->name;
        $theloai->save();
        return redirect()->route('category-list')->with('thongbao','Sửa tên thể loại thành công!');
    }
    public function getPostAdd(){
    	return view('admin/post/post_add');
    }
    public function getPostList(){
    	return view('admin/post/post_list');
    }
    public function getPostEdit(){
    	return view('admin/post/post_edit');
    }
    public function getProductAdd(){
    	return view('admin/product/product_add');
    }
    public function getProductList(){
    	return view('admin/product/product_list');
    }
    public function getProductEdit(){
    	return view('admin/product/product_edit');
    }
    public function getUserAdd(){
    	return view('admin/user/user_add');
    }
    public function postUserAdd(Request $request){
        $user = new Users;
        $user->name = $request ->name;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->email = $request->email;
        if (isset($_POST['level'])) {
            // foreach($_POST['level'] as $value) {
             //Xử lý các phần tử được chọn
            // echo $value."<br/>";
            // dd($_POST['level']);
            // }
            $user->level = $request->level;
        }
        $user->save();
        return redirect()->route('user-list')->with('Thêm người dùng thành công!');
    }
    public function getUserList(){
        $user = Users::all();
    	return view('admin/user/user_list', compact('user'));
    }
    public function getUserEdit(){
    	return view('admin/user/user_edit');
    }
    public function getAuthorAdd(){
        return view('admin/author/author_add');
    }
    public function postAuthorAdd(Request $request){
        $author = new Author;
        $author->name = $request->name;
        $author->tenkhongdau = $request->name;
        $author->email = $request->email;
        $author->phone = $request->phone;
        $author->info_more = $request->info_more;
        $author->avatar = $request->avatar;
        $author->save();
        return redirect()->route('author-list')->with('Thêm tác giả thành công!');
    }
    public function getAuthorEdit(){
        return view('admin/author/author_edit');
    }
    public function getAuthorList(){
        $author = Author::all();
        return view('admin/author/author_list', compact('author'));
    }
    
}
