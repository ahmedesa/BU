<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Bu;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequestAdmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Auth;

class UserController extends Controller
{
	public function index(User $user)
	{
		$user =$user->all();
		return view('admin.users.index',compact('user'));	
	}

	public function create()
	{
		return view('admin.users.add');	
	}

	public function store(AddUserRequestAdmin $request , User $user )
	{
		$user->create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
		]);

		return redirect('adminpanel/users')->withFlashMessage('تم اضافة عضو بنجاح');
	}

	public function edit($id , Bu $bu)
	{
		$user = User::find($id);
		$buenable = $bu->where('bu_status', 0)->where('user_id',$id)->paginate(10);
		$buwating = $bu->where('bu_status', 1)->where('user_id',$id)->paginate(10);
		return view('admin.users.edit',compact('user' ,'buenable' , 'buwating'));
	}
	public function update($id ,Request $request )
	{ 
		$userUpdated = User::find($id);
		$userUpdated->fill([
			'name' => $request->name,
			'email' => $request->email,
			'admin' => $request->admin ,
			'password' => Hash::make($request->password),
		])->save();
		return back()->withFlashMessage('تم التعديل بنجاح');	
	}
	public function destroy($id)
	{
		if ($id=!1) {
			Bu::where($id)->delete();
			$user =User::find($id)->delete();
			return redirect()->back()->withFlashMessage('تم حذف العضو بنجاح');
		}
	}
	public function EditSetting()
	{
		$user=Auth::user();
		return view('website.userprofile.edit',compact('user'));
	}
	public function UpdateEditSetting(AddUserRequestAdmin $request)
	{
		/*erorr and not finished*/
		$userUpdated = Auth::user();
		$userUpdated->fill([
			'name' => $request->name,
			'email' => $request->email,
		])->save();

		return back()->withFlashMessage('تم التعديل بنجاح');	


	}
}