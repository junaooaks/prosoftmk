<?php

namespace Cliente\Form;

use Zend\InputFilter\InputFilter;
use Cliente\Validator\CpfCnpj;

class FormularioFilter extends InputFilter {

    public function __construct() {
        $this->add(array(
            'name' => 'nome',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
                array('name' => 'StringToUpper'),
            ),
            'validators' => array(
                array(
                    'name' => 'NotEmpty',
                    'options' => array(
                        'messages' => array('isEmpty' => 'Nome nao pode estar em branco'),
                    )
                )
            )
        ));


        $this->add(array(
            'name' => 'cpfCnpj',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
                array('name' => 'StringToUpper'),
            ),
            'validators' => array(
                array(
                    'name' => 'CpfCnpj',
                    'options' => array(
                        'messages' => array('isEmpty' => 'Cpf ou Cnpj inválido'),
                    )
                    )
                
            )
            
        ));
    }

}
