<?php

namespace App\Controllers;

use Core\ControllerCore;
use App\Models\{WebModel};

class HomeController extends ControllerCore
{

	public function index()
	{
		$env = ENV_DEV;
		$appName = APP_NAME;
		$layout = 'Layouts/DefaultLayout';
		$view = 'home';
		$dataResponse = [
			"title" => ucfirst("NetworkingHome"),
			'message' => 'Lintas Portal Website !!',
			'env' => $env,
			'appName' => $appName,
			'carousels' => WebModel::carousels()['data'],
			'articles' => WebModel::articles()['data'],
			'jariyahs' => WebModel::jariyahs()['data'],
			'startup' => [],
			'partials' => [],
			'contents' => ['Home/SupportSystem']
		];

		// $this->jsonResponse($dataResponse);
		$this->render($view, $layout, $dataResponse);
	}

	public function all()
	{
	}

	public function create()
	{
	}

	public function update()
	{
	}

	public function delete()
	{
	}
}
