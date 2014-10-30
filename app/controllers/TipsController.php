<?php

class TipsController extends BaseController{

	public function tipsIndex(){

		$tips = Tip::all();

		return View::make('tips.tipsIndex',compact('tips'));
	}

	public function showTipsCreate(){

		return View::make('tips.tipsCreate');
	}

	public function doTipsCreate(){

		$tip = new Tip();

		$tip->title = Input::get('title');
		$tip->description = Input::get('description');
		$tip->user_id = Auth::user()->id;

		$tip->save();

		return Redirect::to('tips');
	}

	public function showTip($id){

		$tip = Tip::where('id',$id)->first();

		return View::make('tips.tipShow',compact('tip'));
	}
}