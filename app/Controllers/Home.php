<?php namespace App\Controllers;

use App\Models\FeiraModel;
use CodeIgniter\Controller;


class Home extends BaseController
{
    public function index(): string
    {
        //return view('welcome_message');
        return view('inicio');
    }

    public function formulario(): string
    {
        $data['msg'] = '';
        if($this->request->getMethod() === 'post'){

            $feiraModel = new FeiraModel();

            $feiraModel->set('NomePessoa', $this->request->getPost('NomePessoa'));
            $feiraModel->set('DataNascimento', $this->request->getPost('DataNascimento'));
            $feiraModel->set('CidadeOndeMora', $this->request->getPost('CidadeOndeMora'));
            $feiraModel->set('ComoSoubeDaFeira', $this->request->getPost('ComoSoubeDaFeira'));
            $feiraModel->set('JaTeveContatoComAUni', $this->request->getPost('JaTeveContatoComAUni'));
            $feiraModel->set('ConheciaCursoseServicos', $this->request->getPost('ConheciaCursoseServicos'));
            $feiraModel->set('MotivoDeIrAFeira', $this->request->getPost('MotivoDeIrAFeira'));
            $feiraModel->set('ServicoUtilizadoPressao', $this->request->getPost('ServicoUtilizadoPressao'));
            $feiraModel->set('ServicoUtilizadoGlicose', $this->request->getPost('ServicoUtilizadoGlicose'));
            $feiraModel->set('ServicoUtilizadoPsicologia', $this->request->getPost('ServicoUtilizadoPsicologia'));
            $feiraModel->set('ServicoUtilizadoConhecerEngenharias', $this->request->getPost('ServicoUtilizadoConhecerEngenharias'));
            $feiraModel->set('DoencaCronicaDiabetes', $this->request->getPost('DoencaCronicaDiabetes'));
            $feiraModel->set('DoencaCronicaPressao', $this->request->getPost('DoencaCronicaPressao'));
            $feiraModel->set('DoencaCronicaTDAH', $this->request->getPost('DoencaCronicaTDAH'));
            $feiraModel->set('DoencaCronicaTireoide', $this->request->getPost('DoencaCronicaTireoide'));
            $feiraModel->set('DoencaCronicaColesterol', $this->request->getPost('DoencaCronicaColesterol'));
            $feiraModel->set('DoencaCronicaOutros', $this->request->getPost('DoencaCronicaOutros'));
            $feiraModel->set('JaVeioAFeiraAntes', $this->request->getPost('JaVeioAFeiraAntes'));
            $feiraModel->set('TemAlgoQueNaoEncontrouNaFeira', $this->request->getPost('TemAlgoQueNaoEncontrouNaFeira'));
            $feiraModel->set('OQueNaoEncontrou', $this->request->getPost('OQueNaoEncontrou'));

            if ($feiraModel->insert()) {

                $data['msg'] = 'Nome inserido';
            }
                else {
                    $data['msg'] = 'Ocorreu um erro';
                }

        }
        return view('formulario',$data);
    }
}
