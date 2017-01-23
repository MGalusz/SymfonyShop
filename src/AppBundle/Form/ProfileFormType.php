<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 17.01.17
 * Time: 18:16
 */

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('address');
    }
    public function getParent()
    {
        return 'fos_user_profile';
    }
    public function getName()
    {
        return 'app_user_profile';
    }
}