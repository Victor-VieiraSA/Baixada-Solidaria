<?php

namespace App\Controllers;

use App\Models\PontoModel;

class Ponto extends BaseController
{
    public function index()
    {
        return view('ponto/formulario');
    }

    public function salvar()
    {
        $model = new PontoModel();

        // Monta o array com os dados do formulário
        $dados = [
            'nome_ponto'        => $this->request->getPost('nome_ponto'),
            'nome_instituicao'  => $this->request->getPost('nome_instituicao'),
            'responsavel'       => $this->request->getPost('responsavel'),
            'email'             => $this->request->getPost('email'),
            'whatsapp'          => $this->request->getPost('whatsapp'),

            'endereco_completo' => $this->request->getPost('endereco_completo'),
            'bairro'            => $this->request->getPost('bairro'),
            'cidade'            => $this->request->getPost('cidade'),
            'cep'               => $this->request->getPost('cep'),

            // Checkboxes: retorna 1 se marcado, 0 se não
            'aceita_alimentos'        => $this->request->getPost('aceita_alimentos')        ? 1 : 0,
            'aceita_roupas'           => $this->request->getPost('aceita_roupas')           ? 1 : 0,
            'aceita_brinquedos'       => $this->request->getPost('aceita_brinquedos')       ? 1 : 0,
            'aceita_higiene'          => $this->request->getPost('aceita_higiene')          ? 1 : 0,
            'aceita_material_escolar' => $this->request->getPost('aceita_material_escolar') ? 1 : 0,
            'aceita_moveis'           => $this->request->getPost('aceita_moveis')           ? 1 : 0,
            'aceita_outros'           => $this->request->getPost('aceita_outros')           ? 1 : 0,

            'necessidades_urgentes' => $this->request->getPost('necessidades_urgentes'),
            'horario_funcionamento' => $this->request->getPost('horario_funcionamento'),
            'redes_sociais'         => $this->request->getPost('redes_sociais'),
            'observacoes'           => $this->request->getPost('observacoes'),
        ];

        if (!$model->save($dados)) {
            // Retorna erros de validação para a view
            return redirect()->back()
                             ->withInput()
                             ->with('errors', $model->errors());
        }

        return redirect()->to('indicar-ponto')->with('sucesso', 'Solicitação enviada com sucesso!');
    }
}