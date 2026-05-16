<?php
namespace App\Controllers;
use App\Models\PontoModel;
use App\Models\PontoAprovadoModel;

class Admin extends BaseController
{
    // Verifica se está logado
    private function verificarLogin()
    {
        if (!session()->get('admin_logado')) {
            return redirect()->to('/admin/login');
        }
        return null;
    }

    // Lista todas as indicações pendentes
    public function index()
    {
        if ($redir = $this->verificarLogin()) return $redir;

        $model = new PontoModel();
        return view('admin/painel', [
            'pontos' => $model->findAll()
        ]);
    }

    // Tela de edição de um ponto
    public function editar($id)
    {
        if ($redir = $this->verificarLogin()) return $redir;

        $model = new PontoModel();
        $ponto = $model->find($id);

        if (!$ponto) return redirect()->to('/admin')->with('erro', 'Ponto não encontrado.');

        return view('admin/editar', ['ponto' => $ponto]);
    }

    // Salva edição (imagem e link maps)
    public function atualizar($id)
    {
        if ($redir = $this->verificarLogin()) return $redir;

        $model = new PontoModel();
        $dados = [
            'link_maps' => $this->request->getPost('link_maps'),
        ];

        // Upload de imagem
        $imagem = $this->request->getFile('imagem');
        if ($imagem && $imagem->isValid() && !$imagem->hasMoved()) {
            $novoNome = $imagem->getRandomName();
            $imagem->move(ROOTPATH . 'public/uploads/pontos', $novoNome);
            $dados['imagem'] = $novoNome;
        }

        // Adiciona campos extras na tabela pontos_doacao se não existirem ainda
        //
        $model->update($id, $dados);

        return redirect()->to('/admin')->with('sucesso', 'Ponto atualizado!');
    }

    // copia para pontos_aprovados
    public function aprovar($id)
    {
        if ($redir = $this->verificarLogin()) return $redir;

        $modelOrigem  = new PontoModel();
        $modelAprovado = new PontoAprovadoModel();

        $ponto = $modelOrigem->find($id);
        if (!$ponto) return redirect()->to('/admin')->with('erro', 'Ponto não encontrado.');

       
        $jaAprovado = $modelAprovado->where('ponto_id', $id)->first();
        if ($jaAprovado) {
            return redirect()->to('/admin')->with('erro', 'Este ponto já foi aprovado.');
        }

        unset($ponto['id'], $ponto['criado_em'], $ponto['atualizado_em']);
        $ponto['ponto_id'] = $id;

        $modelAprovado->insert($ponto);

        return redirect()->to('/admin')->with('sucesso', 'Ponto aprovado e publicado!');
    }
}