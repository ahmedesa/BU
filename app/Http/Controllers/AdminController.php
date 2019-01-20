<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bu;
use App\User;
use DB;
use App\ContactUs;

class AdminController extends Controller
{
	public function index(User $user ,Bu $bu , ContactUs $contactus  )
	{
		$userscount     = $user->count();
		$enablebucount  =$bu->where('bu_status' , 0)->count();
		$waitingbucount =$bu->where('bu_status' , 1)->count();
		$contactuscount =$contactus->count();
		$map = $bu->select( 'bu_langtuide', 'bu_latitude')->get();
		$lastestusers =$user->take(8)->orderBy('id' , 'dasc')->get() ;
		$lastestbu =$bu->take(4)->orderBy('id' , 'dasc')->get() ;
		$lastestusersCount = $lastestusers->count();
		$lastestcontact =$contactus->take(5)->orderBy('id' , 'asc')->get() ;

		/*=============================
		=            chart            =
		=============================*/
		
		$chart = $bu->select(DB::raw('COUNT(*) as counting , month'))->where('year' , date('Y'))->groupBy('month')->orderBy('month' , 'asc')->get()->toArray();
		$array = [];
		for ($i=1; $i < $chart[0]['month']  ; $i++) { 
			$array[] = 0;
		}
		$new = array_merge($array, $chart);
		/*=====  End of chart  ======*/
		
		return view('admin.home.index'
			, compact(
				'userscount' , 
				'enablebucount' , 
				'waitingbucount' , 
				'contactuscount' ,
				'map' ,
				'new',
				'lastestusers' ,
				'lastestusersCount' ,
				'lastestbu' , 
				'lastestcontact'
			));

	}



}
