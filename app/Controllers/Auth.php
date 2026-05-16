<?php
namespace App\Controllers;
use App\Models\AdminModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('admin_logado')) {
            return redirect()->to('/admin');
        }
        return view('admin/login');
    }

    public function autenticar()
    {
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $model = new AdminModel();
        $admin = $model->where('email', $email)->first();

        if ($admin && password_verify($senha, $admin['senha'])) {
            session()->set([
                'admin_logado' => true,
                'admin_id'     => $admin['id'],
                'admin_nome'   => $admin['nome'],
            ]);
            return redirect()->to('/admin');
        }

        return redirect()->back()->with('erro', 'E-mail ou senha incorretos.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}