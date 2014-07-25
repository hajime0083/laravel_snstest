<?php

class AdminShopController extends AdminBaseController {

	function getIndex()
	{
		return View::make('hello');
	}

}
