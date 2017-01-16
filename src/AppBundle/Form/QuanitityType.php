<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class QuanitityType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder->add('quantity', 'number', array(
            'label' => 'quantity'
        ))        ;
    }

}