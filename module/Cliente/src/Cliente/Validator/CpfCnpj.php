<?php

namespace Cliente\Validator;

use Zend\Validator\AbstractValidator;

use Cliente\Validator\Cnpj,
    Cliente\Validator\Cpf;

class CpfCnpj extends AbstractValidator {

    public function isValid($value) {
        
       
                $j = 0;

                for ($i = 0; $i < (strlen($value)); $i++) {
                    if (is_numeric($value[$i])) {
                        $num[$j] = $value[$i];
                        $j++;
                    }
                }
                
                if (count($num) == 14) {
                    //validar cnpj
                    $validator = new Cnpj(array('valid_if_empty' => false));
                    $isValid = $validator->isValid($value);
                } 
                if (count($num) == 11) {
                    //validar cpf
                    $validator = new Cpf(array('valid_if_empty' => false));
                    $isValid = $validator->isValid($value);
                }
                
                
                //inserir o cpfCnpj no array
                //$form->getData()['cpfCnpj']= $isValid;
                if($isValid==true){
                print_r($value);
                }die();
        
    }

}
