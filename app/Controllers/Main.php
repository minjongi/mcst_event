<?php namespace App\Controllers;

use App\Models;

class Main extends BaseController
{
    private $applicationModel;

    public function __construct()
    {
        $this->applicationModel = new Models\ApplicationModel();
    }

	public function index()
	{
        $data['cacheVersion'] = '2021051501';

        $view = ($this->request->getUserAgent()->isMobile()) ? 'main/mobile' : 'main/desktop';
        return view($view, $data);
	}

    public function reg()
    {
        $data = $this->request->getGetPost();
        $params = [
            'name' => $data['user_name'],
            'phone_number' => $data['phone_number'],
            'url' => $data['url'],
            'agree_privacy' => 1,
            'agree_copyright' => 1,
        ];
        $this->applicationModel->insert($params);
        echo json_encode(['resultCode' => 'SUCCESS', 'resultMessage' => '']);
    }
}
