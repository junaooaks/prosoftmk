<?php

namespace Cliente\Form;

use Zend\InputFilter\InputFilter;

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
            'name' => 'cpfcnpj',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
                array('name' => 'StringToUpper'),
            ),
            'validators' => array(
                array(
                    'name' => 'NotEmpty',
                    'break_chain_on_failure' => true,
                    'options' => array(
                        'messages' => array('isEmpty' => 'Campo não pode estar vazio.'),
                    )
                ),
                array(
                    'name' => 'Cliente\Validator\CpfCnpj'
                )
            )
        ));
    }

}
