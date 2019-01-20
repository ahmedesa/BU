<?php 
use App\SiteSetting;
function getSetting($setting ='sitename')
{
	return SiteSetting::where("namesetting" , $setting)->get()[0]->value;

}

function CheckImgExist($imgname){
	if ($imgname != '') {	
		$path = base_path().'/public/images/'.$imgname ;
		if(file_exists($path)){
			return Request::root().'/images/'.$imgname;
		}
	}
	else{
		return getSetting("noimg");
	}
}

function CountUserBU(){
	$user_id = Auth::id();
	return \App\Bu::where('user_id' , $user_id)->count();
}
function unreadMessage(){
	return \App\ContactUs::where('view' , 0)->get();
}
function countunreadMessage(){
	return \App\ContactUs::where('view' , 0)->count();
}
function WattingMessages(){
	return \App\Bu::where('bu_status' ,1)->get();
}
function countWattingMessages(){
	return \App\Bu::where('bu_status' ,1)->count();
}

function bu_type(){
	$array =[
		'شقة' ,
		'فيلا',
		'شالية',
	];

	return$array;
}
function privlage(){
	$array = [
		'عضو',
		'مدير' ,
	];
	return $array;
}
function contact(){
	$array =[
		'problem' =>	    'مشكلة' ,
		'suggestions' =>	'اقتراح',
		'question' =>	'استفسار',
	];

	return$array;
}


function bu_rent(){
	$array =[
		'تمليك' ,
		'ايجار',
	];

	return$array;
}
function bu_status(){
	$array =[
		'مفعل' ,
		'غير مفعل',
	];

	return$array;
}
function bu_price(){
	$array =[
		'اقل من 50,000' ,
		'من50,000 الي ,100,000',
		'من100,000 الي ,500,000',
		'من500,000 الي ,1000,000',
		'من1000,000 الي ,5000,000',
		'اكثر من 5000,0000' ,

	];

	return$array;
}

function bu_place(){
	$array =[

		'القاهرة' ,
		'الاقصر',
		'الاسكندرية', 
		'الجيزة',
		'بورسعيد', 
		'دمياط ', 
		'اسوان',
		'القليوبية ',
		'بني سويف ',
		'الاسماعليلة',
		'سوهاج ',
		'السويس ',
		'اسيوط',
		'البحر الأحمر ',
		'البحيرة ',
		'الدقهلية ',
		'الغربية ' ,
		'الفيوم ',
		'قنا ',
		'كفر الشيخ ',
		'مطروح ',
		'المنيا ',
		'المنوفية', 
		'الوادي الجديد',
		'السادس من أكتوبر',
		'شمال سيناء' ,
		'جنوب سيناء' ,
		'حلوان',
		'الشارقية',

	];

	return$array;
}
