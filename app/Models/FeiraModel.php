<?php 

namespace App\Models;


use CodeIgniter\Model;


class FeiraModel extends Model {

    protected $table = 'Dados';
    protected $primarykey = 'Id';
    protected $allowedFields = ['NomePessoa','DataNascimento','CidadeOndeMora','ComoSoubeDaFeira','JaTeveContatoComAUni','ConheciaCursoseServicos','MotivoDeIrAFeira','ServicoUtilizadoPressao','ServicoUtilizadoGlicose','ServicoUtilizadoPsicologia','ServicoUtilizadoConhecerEngenharias','DoencaCronicaDiabetes','DoencaCronicaPressao','DoencaCronicaTDAH','DoencaCronicaTireoide','DoencaCronicaColesterol','DoencaCronicaOutros','JaVeioAFeiraAntes','TemAlgoQueNaoEncontrouNaFeira','OQueNaoEncontrou'];
    protected $returnType = 'object';

}

?>