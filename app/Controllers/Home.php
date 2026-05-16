<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

  public function pontos()
{
    $model   = new \App\Models\PontoAprovadoModel();
    $builder = $model->builder();

    $busca  = $this->request->getGet('busca');
    $cidade = $this->request->getGet('cidade');
    $bairro = $this->request->getGet('bairro');
    $tipo   = $this->request->getGet('tipo');

    if (!empty($busca)) {
        $builder->groupStart()
            ->like('nome_ponto', $busca)
            ->orLike('bairro', $busca)
            ->orLike('cidade', $busca)
        ->groupEnd();
    }

    if (!empty($cidade)) $builder->where('cidade', $cidade);
    if (!empty($bairro)) $builder->where('bairro', $bairro);
    if (!empty($tipo))   $builder->where($tipo, 1);

    return view('pontos', [
        'pontos'       => $builder->get()->getResultArray(),
        'todasCidades' => $model->select('cidade')->distinct()->findAll(),
        'todosBairros' => $model->select('bairro')->distinct()->findAll(),
        'filtros'      => compact('busca', 'cidade', 'bairro', 'tipo'),
    ]);
}

    public function indicar()
    {
    return view('indicar');
    }

}
