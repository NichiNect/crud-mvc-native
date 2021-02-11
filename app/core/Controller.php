<?php 

/**
 * Core Controller to make any method, so we can build and call a our Library
 */
class Controller {
	public function view($view, $data = [])
	{
		require_once '../app/views/' . $view . '.php';
	}

	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		return new $model;
	}
}