<?php

namespace Cliente\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel,
    Zend\Paginator\Paginator,
    Zend\Paginator\Adapter\ArrayAdapter;
use Cliente\Form\Formulario as FrmFormulario,
    Cliente\Form\Pesquisa as FrmPesquisa,
    Cliente\Validator\Cnpj,
    Cliente\Validator\Cpf;

class IndexController extends AbstractActionController {

    public function indexAction() {

        /*         * ******inserir formulario de pesquisa* */

        $form = new FrmPesquisa();

        /*         * ********************************************** */
        //pegar o request do post
        $request = $this->getRequest();

        //verificar se foi realizado o request
        if ($request->isPost()) {

            //preencher os dados do formulario
            $form->setData($request->getPost());

            //verificar se o formulario esta valido
            if ($form->isValid()) {

                $dados = $this->getEm()
                        ->getRepository('Cliente\Entity\Cliente')
                        ->pesquisa($form->getData()['nome']);
            }
        } else {

            $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

            //pegar o repositorio da entidade
            $repo = $em->getRepository('Cliente\Entity\Cliente');

            //buscar todos os dados da tabela cliente
            $dados = $repo->findAll();
        }
        //pegar o parametro da rota da pagina
        $page = $this->params()->fromRoute('page');

        //criar uma paginação
        $paginator = new Paginator(new ArrayAdapter($dados));
        $paginator->setCurrentPageNumber($page);
        $paginator->setDefaultItemCountPerPage(10);

        return new ViewModel(array('form' => $form, 'dados' => $paginator, 'page' => $page));
    }

    public function newAction() {

        $form = new FrmFormulario();

        //pegar o request do post
        $request = $this->getRequest();

        //verificar se foi realizado o request
        if ($request->isPost()) {

            //preencher os dados do formulario
            $form->setData($request->getPost());



            //verificar se o formulario esta valido
            if ($form->isValid()) {

                $cpfCnpj = ($form->getData()['cpfCnpj']);
                
                
                
                
                //limpar caracteres
//                $cpfCnpj = str_replace('.', '', $cpfCnpj);
//                $cpfCnpj = str_replace('/', '', $cpfCnpj);
//                $cpfCnpj = str_replace('-', '', $cpfCnpj);

                $j = 0;

                for ($i = 0; $i < (strlen($cpfCnpj)); $i++) {
                    if (is_numeric($cpfCnpj[$i])) {
                        $num[$j] = $cpfCnpj[$i];
                        $j++;
                    }
                }
                
                if (count($num) == 14) {
                    //validar cnpj
                    $validator = new Cnpj(array('valid_if_empty' => false));
                    $isValid = $validator->isValid($cpfCnpj);
                } 
                if (count($num) == 11) {
                    //validar cpf
                    $validator = new Cpf(array('valid_if_empty' => false));
                    $isValid = $validator->isValid($cpfCnpj);
                }
                
                
                //inserir o cpfCnpj no array
                $form->getData()['cpfCnpj']= $isValid;

                print_r($isValid);
                die();
                
                //executar a insert
                $service = $this->getServiceLocator()->get('Cliente\Service\ClienteService');
                $service->insert($form->getData());


                //retirecionar para a pagina de listar
                return $this->redirect()->toRoute('cliente', array('controller' => 'Cliente\Controller\Index'));
            }
        }

        //exibi o formulario na view
        return new ViewModel(array('form' => $form));
    }

}
