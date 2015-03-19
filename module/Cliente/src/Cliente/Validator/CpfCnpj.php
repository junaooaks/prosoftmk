<?php

namespace Cliente\Validator;

use Zend\Validator\AbstractValidator;
use Cliente\Validator\Cnpj,
    Cliente\Validator\Cpf;

class CpfCnpj extends AbstractValidator {

    /**
     * Tamanho Inválido
     * @var string
     */
    const SIZE = 'size';

    /**
     * Números Expandidos
     * @var string
     */
    const EXPANDED = 'expanded';

    /**
     * Dígito Verificador
     * @var string
     */
    const DIGIT = 'digit';

    /**
     * Tamanho do Campo
     * @var int
     */
    protected $size = 0;

    /**
     * Modelos de Mensagens
     * @var string
     */
    protected $messageTemplates = [
        self::SIZE => "'%value%' não possui tamanho esperado.",
        self::EXPANDED => "'%value%' não possui um formato aceitável.",
        self::DIGIT => "'%value%' não é um documento válido."
    ];

    public function isValid($value) {

        //limpar caracteres
        $value = str_replace('.', '', $value);
        $value = str_replace('/', '', $value);
        $value = str_replace('-', '', $value);

        if (strlen($value) == 14) {
            //validar cnpj
            $validator = new Cnpj(array('valid_if_empty' => false));
            $isValid = $validator->isValid($value);
        } else {
            //validar cpf
            $validator = new Cpf(array('valid_if_empty' => false));
            $isValid = $validator->isValid($value);
        }

        if (!$isValid) {
            foreach ($validator->getMessages() as $key => $value) {
                $this->error($key, $value);
            }
        }

        return $isValid;
    }

}
