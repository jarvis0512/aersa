<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class IvaForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('iva_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idtasaiva',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'tasaiva_valor',
            'type' => 'Text',
            'options' => array(
                'label' => 'Iva *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
    }
}
