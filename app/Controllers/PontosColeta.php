<?php
namespace App\Controllers;
use App\Models\PontoAprovadoModel;

class PontosColeta extends BaseController
{
    public function index()
    {
        $model  = new PontoAprovadoModel();
        $builder = $model->builder();

        // Filtro por busca textual
        $busca = $this->request->getGet('busca');
        if (!empty($busca)) {
            $builder->groupStart()
                ->like('nome_ponto', $busca)
                ->orLike('bairro', $busca)
                ->orLike('cidade', $busca)
            ->groupEnd();
        }

        // Filtro por cidade
        $cidade = $this->request->getGet('cidade');
        if (!empty($cidade)) {
            $builder->where('cidade', $cidade);
        }

        // Filtro por bairro
        $bairro = $this->request->getGet('bairro');
        if (!empty($bairro)) {
            $builder->where('bairro', $bairro);
        }

        // Filtro por tipo de doação
        $tipo = $this->request->getGet('tipo');
        if (!empty($tipo)) {
            $builder->where($tipo, 1);
        }

        $pontos = $builder->get()->getResultArray();

        // Para popular os selects de filtro
        $todasCidades = $model->select('cidade')->distinct()->findAll();
        $todosBairros = $model->select('bairro')->distinct()->findAll();

        return view('pontos/index', [
            'pontos'       => $pontos,
            'todasCidades' => $todasCidades,
            'todosBairros' => $todosBairros,
            'filtros'      => [
                'busca'  => $busca,
                'cidade' => $cidade,
                'bairro' => $bairro,
                'tipo'   => $tipo,
            ]
        ]);
    }
}