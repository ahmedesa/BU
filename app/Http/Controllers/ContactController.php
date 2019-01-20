<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactUs;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

	function index(ContactUs $contact)
	{
		$contact = $contact->all();
		return view('admin.contact.index' , compact('contact'));
	}
	public function store(ContactRequest $request , ContactUs $contact )
	{

		$contact->create($request->all());
		return back()->withFlashMessage('تم الارسال بنجاح ');    	
	}
	
		public function view($id)
	{
		$contact = ContactUs::find($id);
		$contact->fill(['view' => 1 ])->save();
		return view('admin.contact.view',compact('contact'));
	}

	public function destroy($id)
	{
		$contact = ContactUs::find($id)->delete();
		return redirect()->back()->withFlashMessage('تم مسح الرساله بنجاح');
		
	}


}
