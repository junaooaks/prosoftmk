<?php

namespace Cliente\Form;

use Zend\Form\Form;

class Pesquisa extends Form {
    
    public function __construct($name = null) {
        parent::__construct('Pesquisa');
        
        $this->setAttribute('class','form-horizontal','method', 'post' );
        
        $this->add(array(
            'name'=>'nome',
            'options'=>array(
                'type'=>'text',
                'label'=>'Pesquisar:'
            ),
            'attributes'=>array(
                'id'=>'nome',
                'placeholder'=>'Pesquisa Nome Cliente',
                'class' => 'campos01',
            )
        ));
        
        $this->add(array(
           'name'=>'submit',
            'type'=>'Zend\Form\Element\Submit',
            'attributes'=>array(
                'id'=>'pesquisar',
                'value'=>'Busca',
                'class'=>'btn-success'
            )
        ));
    }
}
