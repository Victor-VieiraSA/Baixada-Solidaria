<?php
namespace App\Models;
use CodeIgniter\Model;

class PontoAprovadoModel extends Model
{
    protected $table      = 'pontos_aprovados';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'ponto_id', 'nome_ponto', 'nome_instituicao', 'responsavel',
        'email', 'whatsapp', 'endereco_completo', 'bairro', 'cidade', 'cep',
        'aceita_alimentos', 'aceita_roupas', 'aceita_brinquedos', 'aceita_higiene',
        'aceita_material_escolar', 'aceita_moveis', 'aceita_outros',
        'necessidades_urgentes', 'horario_funcionamento', 'redes_sociais',
        'observacoes', 'imagem', 'link_maps',
    ];
}