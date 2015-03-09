<?php

namespace Cliente\Form;

use Zend\Form\Form;
use Zend\Form\Element;

class Formulario extends Form {

    public function __construct($name = null, $options = array()) {
        parent::__construct('formulario', $options);
        
        $this->setAttribute('class', 'form-horizontal', 'method', 'post', 'id','formulario');
        
        //inserir a class de filtrar formulario
        $this->setInputFilter(new FormularioFilter());

        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden'
            )
        ));


        $nome = new Element\Text('nome');
        $nome->setLabel('Nome: ')
                ->setAttributes(array(
                    'class' => 'campos00',
                    
        ));

        $email = new Element\Text('email');
        $email->setLabel('Email: ')
                ->setAttributes(array(
                    'class' => 'campos01',
                    'size' => '60',
        ));

        $cpfCnpj = new Element\Text('cpfCnpj');
        $cpfCnpj->setLabel('Cpf/Cnpj: ')
                ->setAttributes(array(
                    'required' => 'true',
                    'class' => 'campos02',
                    'size' => '20',
        ));
        $rg = new Element\Text('rg');
        $rg->setLabel('Identidade: ')
                ->setAttributes(array(
                    'class' => 'campos02',
                    'size' => '20',
        ));
        $ie = new Element\Text('ie');
        $ie->setLabel('Insc Estadual: ')
                ->setAttributes(array(
                    'class' => 'campos02',
                    'size' => '20',
        ));

        $telefoneR = new Element\Text('telefoneR');
        $telefoneR->setLabel('Tel. Residencial: ')
                ->setAttributes(array(
                    'class' => 'campos02',
                    'size' => '20',
        ));
        $telefoneC = new Element\Text('telefoneC');
        $telefoneC->setLabel('Tel. Comercial: ')
                ->setAttributes(array(
                    'class' => 'campos02',
                    'size' => '20',
        ));

        $celular1 = new Element\Text('celular1');
        $celular1->setLabel('Celular: ')
                ->setAttributes(array(
                    'class' => 'campos02',
                    'size' => '20',
        ));
        $celular2 = new Element\Text('celular2');
        $celular2->setLabel('Celular: ')
                ->setAttributes(array(
                    'class' => 'campos02',
                    'size' => '20',
        ));

        $dataNascimento = new Element\Date('datanascimento');
        $dataNascimento->setLabel('Data Nascimento: ')
                ->setAttributes(array(
                    'required' => 'true',
                    'class' => 'campos02',
                ))
                ->setOptions(array(
                    'format' => 'Y-m-d'
        ));

        $estadoCivil = new Element\Select('estadoCivil');
        $estadoCivil->setLabel('Estado Civil: ');
        $estadoCivil->setValueOptions(array(
            'SOLTEIRO' => 'SOLTEIRO',
            'CASADO' => 'CASADO',
            'VIUVO' => 'VIUVO',
        ))->setAttributes(array(
                    'class' => 'campos02',
                ));

        $observacao = new Element\Textarea('observacao');
        $observacao->setLabel('Obs: ')
                ->setAttributes(array(
                    'class' => 'campos03',
                    'size' => '20',
        ));


        $this->add($nome)
                ->add($email)
                ->add($cpfCnpj)
                ->add($rg)
                ->add($ie)
                ->add($telefoneR)
                ->add($telefoneC)
                ->add($celular1)
                ->add($celular2)
                ->add($dataNascimento)
                ->add($estadoCivil)
                ->add($observacao);

        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Salvar',
                'class' => 'btn btn-success ',
                'id'=>'enviar'
            )
        ));
    }

}
