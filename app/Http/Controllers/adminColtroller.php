<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\Models\Theloai; 
use App\Models\Users; 
use App\Models\Author; 
class adminColtroller extends Controller
{
    public function getAdmin(){
    	return view('admin.admin');
    }
    public function getLogin(){
        if(Auth::check()){
            return redirect()->route('admin');
        }
    	return view('admin.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required|min:6|max:16'
            ], [
                'email.required'=>'Bạn chưa nhập Email',
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'Mật khẩu không nhỏ quá 6 ký tự',
                'password.max'=>'Mật khẩu không lớn hơn 16 ký tự',
            ]);
        $arr = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if (Auth::attempt($arr)) {
            // đăng nhập đúng
            return redirect()->route('admin');
        }
        else {
            //đăng nhập sai
            return redirect()->route('login')->with('thongbao', 'Tài khoản hoặc mật khẩu không chính xác !');
        }

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
        return view('admin.author.author_add');
    }
    public function postAuthorAdd(Request $request){
        $this->validate($request,
        [
            'name' => 'required|unique:Users,name|min:2|max:100',
            'phone' => 'required|unique:Users,phone|min:10|max:15',
            'email' => 'required|unique:Users,email',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
        ],
        [
            'name.required' =>'Bạn chưa nhập tên thể loại',
            'name.unique' => 'Tên thể loại đã tồn tại',
            'name.min' =>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
            'phone.required' =>'Bạn chưa nhập số điện thoại',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'phone.min' =>'Tên thể loại phải có độ dài từ 10 đến 100 ký tự'
            
            // 'name.required' =>'Bạn chưa nhập tên thể loại',
            // 'name.unique' => 'Tên thể loại đã tồn tại',
            // 'name.min' =>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
            
        ]);
        $avatar_ = 'IMAGE-AUTHOR-'.time().$request->file('avatar')->getClientoriginalName();
        $author = new Author;
        $author->avatar = $avatar_;
        $author->name = $request->name;
        $author->email = $request->email;
        $author->phone = $request->phone;
        $author->level = $request->level;
        $author->info_more = $request->info_more;
        $request->file('avatar')->move('uploads/avatars/',$avatar_);
        $author->save();
        $author->update(['tenkhongdau'=>create_slug($author->name,$author->id)]);
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
