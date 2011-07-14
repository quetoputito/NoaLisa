<?php

namespace NoaLisa\Bundle\EntitiesSetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilder;

class EntitiesSetType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name');
        $builder->add('address');
     
    }

    public function getDefaultOptions(array $options)
    {
        return array('data_class' => 'NoaLisa\Bundle\EntitiesSetBundle\Document\EntitiesSet');
    }
}
