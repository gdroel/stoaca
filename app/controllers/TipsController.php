<?php

class TipsController extends BaseController{

	public function tipsIndex(){

		$tips = Tip::orderBy('id','desc')->paginate(10);

		$sidebartips = Tip::all();

		return View::make('tips.tipsIndex',compact('tips','sidebartips'));
	}

	public function showTipsCreate(){

		return View::make('tips.tipsCreate');
	}

	public function doTipsCreate(){

		$rules = array(
			'title'=>'required|min:5|max:30',
			'description'=>'required|min:10|max:1000',
			);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->passes()){

			$tip = new Tip();

			$tip->title = ucwords(Input::get('title'));
			$tip->description = Input::get('description');
			$tip->user_id = Input::get('user_id');

			$tip->save();

			return Redirect::to('tips');
		}	

		else{

			return Redirect::to('tips/new')->withInput()->withErrors($validator);
		}
		


	}

	public function showTip($id){

		$tip = Tip::where('id',$id)->first();
		$tips = Tip::where('id','!=',$id)->get();
		return View::make('tips.tipShow',compact('tip','tips'));
	}
}