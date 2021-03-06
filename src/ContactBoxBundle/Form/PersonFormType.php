<?php

namespace ContactBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
            $builder->add('first_name')
                ->add('last_name')
                ->add('description')
                ->add('groups');
    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'ContactBoxBundle\Entity\Person'
        ));
    }


}