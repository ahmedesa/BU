<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bu;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BuRequest;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Support\Facades\DB;
class BuController extends Controller
{
	public function index(Bu $bu)
	{
		$bu = $bu->all();
		return view('admin.bu.index', compact('bu'));
	}

	public function create()
	{
		return view('admin.bu.add');	
	}

	public function store(BuRequest $request , Bu $bu )
	{
		if ($request->file('img')) {
			$fileName = $request->file('img')->getClientOriginalName();
			$request->file('img')->move( base_path().'/public/images' , $fileName );
			$img =$fileName;
		}
		else{
			$img = '';

		}
		$user = Auth::user() ;
		$data = [
			'bu_name'      =>$request->bu_name ,
			'bu_price'     =>$request->bu_price, 
			'bu_rent'      =>$request->bu_rent, 
			'bu_square'    =>$request->bu_square, 
			'bu_type'      =>$request->bu_type,
			'bu_small_dis' =>$request->bu_small_dis,
			'bu_meta'      =>$request->bu_meta, 
			'bu_langtuide' =>$request->bu_langtuide, 
			'bu_latitude'  =>$request->bu_latitude,
			'bu_large_dis' =>$request->bu_large_dis,
			'bu_status'    =>$request->bu_status, 
			'bu_rooms'     =>$request->bu_rooms,
			'user_id'      =>$user->id ,
			'bu_place'     =>$request->bu_place ,
			'img'          =>$img ,
			'month'        =>date('m') ,
			'year'         =>date('Y') ,
			'phone'        =>$request->phone 

		];
		$bu->create($data);

		return redirect('adminpanel/bu')->withFlashMessage('تم اضافة العقار بنجاح');

	}

	public function edit($id)
	{
		$bu = Bu::find($id);
		return view('admin.bu.edit',compact('bu'));
	}
	public function update(BuRequest $request ,$id)
	{ 
		$buUpdated = Bu::find($id);
		$buUpdated->fill(array_except($request->toArray() , ['img']));
		$buUpdated->save();
		if ($request->file('img')) {
			$fileName = $request->file('img')->getClientOriginalName();
			$request->file('img')->move( base_path().'/public/images' , $fileName );
			$buUpdated->fill(['img'=> $fileName])->save();
		}

		return back()->withFlashMessage('تم االتعديل بنجاح');	
	}
	public function destroy($id)
	{
		$bu = Bu::find($id)->delete();
		return redirect()->back()->withFlashMessage('تم مسح العقار بنجاح');

	}
	public function showallenable(Bu $bu)
	{
		$buall =$bu->where('bu_status' , 0)->orderBy('id' ,'desc')->paginate(9);
		return view('website.bu.all' , compact('buall'));
	}

	public function forrent(Bu $bu)
	{

		$buall =$bu->where('bu_rent' , 1)->where('bu_status' , 0)->orderBy('id' ,'desc')->paginate(9);
		return view('website.bu.all' , compact('buall'));

	}
	public function forbuy(Bu $bu)
	{

		$buall =$bu->where('bu_rent' , 0)->where('bu_status' , 0)->orderBy('id' ,'desc')->paginate(9);
		return view('website.bu.all' , compact('buall'));

	}
	public function ShowByType(Bu $bu , $type)
	{

		$buall =$bu->where('bu_type' , $type)
		->where('bu_status' , 0)
		->orderBy('id' ,'desc')->paginate(10);
		return view('website.bu.all' , compact('buall'));

	}
	public function search (Bu $bu , Request $request)
	{
		$requesall = array_except($request->toArray() , ['submit','_token' , 'page']);
		$query = $bu->select('*')->where('bu_status' , 0);
		foreach ($requesall as $key => $req) {
			if ($req !='') {
				if ($key == 'bu_price' ) {
					switch ($req) {
						case 0 :
						$query->whereBetween($key, array(0,50000));
						break;
						case 1 :
						$query->whereBetween($key, array(50000,100000));
						break;
						case 2 :
						$query->whereBetween($key, array(100000,500000));
						case 3 :
						$query->whereBetween($key, array(500000,1000000));
						break;
						case 4 :
						$query->whereBetween($key, array(1000000,5000000));
						break;
						case 5 :
						$query->where($key, '>=', 5000000);
						break;

					}
				}elseif ($key == 'bu_name') {
					$query->where($key, 'LIKE', '%' . $req . '%');
				}
				else{

					$query->where($key , $req);
				}}
			}
			$buall = $query->paginate(9);

			return view('website.bu.all' , compact('buall'));	


		}
		public function ShowBild($id )
		{

			$bu = Bu::findOrFail ($id);
			if ($bu->bu_status == 1) {
				return view('website.bu.noper');	


			}
			$relatedbu =$bu
			->where('bu_status', 0)
			->where('bu_place', '=', $bu->bu_place)
			->where('id' , '!=' , $bu->id)
			->inRandomOrder()->limit(5)->get();;
			return view('website.bu.singlebu' , compact('bu'  , 'relatedbu'));	

		}
		public function GetAjaxInto(Request $request , Bu $bu)
		{
			return $bu->find($request->id)->toJson();
		}
		public function UserAddView()
		{
			return view('website.userbu.useradd');	
		}
		public function UserStore(BuRequest $request , Bu $bu)
		{

			if ($request->file('img')) {
				$fileName = $request->file('img')->getClientOriginalName();
				$request->file('img')->move( base_path().'/public/images' , $fileName );
				$img =$fileName;
			}
			else{
				$img = '';

			}
			$user = Auth::user() ;
			$data = [
				'bu_name'      =>$request->bu_name ,
				'bu_price'     =>$request->bu_price, 
				'bu_rent'      =>$request->bu_rent, 
				'bu_square'    =>$request->bu_square, 
				'bu_type'      =>$request->bu_type,
				'bu_small_dis' =>$request->bu_small_dis,
				'bu_meta'      =>$request->bu_meta, 
				'bu_langtuide' =>$request->bu_langtuide, 
				'bu_latitude'  =>$request->bu_latitude,
				'bu_large_dis' =>$request->bu_large_dis,
				'bu_rooms'     =>$request->bu_rooms,
				'user_id'      =>$user->id ,
				'bu_place'     =>$request->bu_place ,
				'img'          =>$img ,
  				'month'        =>date('m') ,
				'year'         =>date('Y') ,
				'phone'        =>$request->phone 


			];
			$bu->create($data);

			return view('website.userbu.done');	
		}
		public function ShowUserBu(Bu $buall)
		{
			$user = Auth::user();
			$buall = $buall->where('user_id' , $user->id )
			->orderBy('id' ,'desc')
			->paginate(9);
			return view('website.userbu.show' , compact ('buall' ,'user'));
		}
		public function EditUserBu($id)
		{
			$user = Auth::user();
			$bu = Bu::find($id);
			if ($user->id != $bu->user_id || $bu->bu_status == 0  ) {
			return back();	
			}
			return view('website.userbu.edituserbu' , compact ('bu'));

		}
		public function UpdateUserBu(BuRequest $request , $id , Bu $bu)
		{
			$bu = $bu->find($id);
		$bu->fill(array_except($request->toArray() , ['img']));
		$bu->save();
		if ($request->file('img')) {
			$fileName = $request->file('img')->getClientOriginalName();
			$request->file('img')->move( base_path().'/public/images' , $fileName );
			$bu->fill(['img'=> $fileName])->save();
		}

		return back()->withFlashMessage('تم االتعديل بنجاح');	
		}
		public function enable($id , Bu $bu) {
		$buUpdated = $bu::find($id);
		$buUpdated->fill(['bu_status' => 0])->save();
		return back()->withFlashMessage('تم التفعيل بنجاح');	


		}
	}

