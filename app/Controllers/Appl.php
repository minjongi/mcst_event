<?php namespace App\Controllers;

use App\Models;

class Appl extends BaseController
{
    private $applicationModel;

    public function __construct()
    {
        $this->applicationModel = new Models\ApplicationModel();
    }

	public function index()
	{
        return view('appl/login');
	}

    public function login()
    {
        $data = $this->request->getPost();

        if (
            !empty($data['id']) &&
            !empty($data['pw']) &&
            $data['id'] === 'admin' &&
            $data['pw'] === 'inuspw'
        ) {
            session()->set(['userid' => $data['id']]);
            return redirect()->to('/appl/appl_list');
        } else {
            return redirect()->to('/appl');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/appl');
    }

    public function appl_list()
    {
        $id = session()->get('userid');
        if ($id !== 'admin') {
            return redirect()->to('/appl');
        }

        $data = [];
        $data['list'] = $this->applicationModel->findAll();
        return view('appl/list', $data);
    }

    public function excel()
    {
        $id = session()->get('userid');
        if ($id !== 'admin') {
            return redirect()->to('/appl');
        }

        header( "Content-type: application/vnd.ms-excel; charset=utf-8");
        header( "Content-Disposition: attachment; filename = " . date('Ymd') . ".xls" );
        header( "Content-Description: PHP4 Generated Data" );

        $data = [];
        $data['list'] = $this->applicationModel->findAll();
        return view('appl/list', $data);
    }
}
