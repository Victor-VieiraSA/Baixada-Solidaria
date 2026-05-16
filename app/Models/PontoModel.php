<?php

namespace App\Models;

use CodeIgniter\Model;

class PontoModel extends Model
{
    protected $table      = 'pontos_doacao';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nome_ponto', 'nome_instituicao', 'responsavel', 'email', 'whatsapp',
        'endereco_completo', 'bairro', 'cidade', 'cep',
        'aceita_alimentos', 'aceita_roupas', 'aceita_brinquedos', 'aceita_higiene',
        'aceita_material_escolar', 'aceita_moveis', 'aceita_outros',
        'necessidades_urgentes', 'horario_funcionamento', 'redes_sociais', 'observacoes', 'imagem', 'link_maps',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'atualizado_em';

    // Validação
    protected $validationRules = [
        'nome_ponto'       => 'required|max_length[150]',
        'endereco_completo'=> 'required|max_length[255]',
        'bairro'           => 'required|max_length[100]',
        'cidade'           => 'required|max_length[100]',
        'email'            => 'permit_empty|valid_email',
    ];

    protected $validationMessages = [
        'nome_ponto'        => ['required' => 'O nome do ponto é obrigatório.'],
        'endereco_completo' => ['required' => 'O endereço é obrigatório.'],
        'bairro'            => ['required' => 'O bairro é obrigatório.'],
        'cidade'            => ['required' => 'A cidade é obrigatória.'],
        'email'             => ['valid_email' => 'Informe um e-mail válido.'],
    ];
}