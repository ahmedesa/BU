<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SiteSetting;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;



class SiteSettingController extends Controller
{
	public function index(SiteSetting $sitesetting)

	{
		$sitesetting = $sitesetting->all();
		return view('admin.sitesetting.index' , compact('sitesetting'));
	}

	public function store(Request $request , SiteSetting $sitesetting)
	{
		
		foreach (array_except($request->toArray() ,['_token' , 'submit'] )  as $key =>$req) {
			$sitesettingUpdate = $sitesetting->where('namesetting',$key)->get()[0]; 
			if ($request->type != 3) {

				$sitesettingUpdate->fill([
					'value' => $req
				])->save();
			}	
			else{
				$fileName = uplodeImage($req , 'public/images/' , '1600' , '500');
				if ($fileName) {
					$sitesettingUpdate->fill(['value'=> $fileName ])->save();
				}
			}	

		}
		return back()->withFlashMessage('تم حفظ الاعدادات بنجاح');	

	}


}
