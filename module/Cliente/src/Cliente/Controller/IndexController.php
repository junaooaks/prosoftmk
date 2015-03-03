<?php
namespace Cliente\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel,
    Zend\Paginator\Paginator,
    Zend\Paginator\Adapter\ArrayAdapter;

class IndexController extends AbstractActionController
{
    public function indexAction() {

        /*         * ******inserir formulario de pesquisa* */

        //$form = new FrmPesquisa();

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
        $paginator->setDefaultItemCountPerPage(1);

        return new ViewModel(array('dados' => $paginator, 'page' => $page));
    }
}
