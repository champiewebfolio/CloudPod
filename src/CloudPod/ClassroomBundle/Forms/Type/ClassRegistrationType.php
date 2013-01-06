<?php

namespace CloudPod\ClassroomBundle\Forms\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClassRegistrationType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('className', 'text', array('label' => 'Classroom Name :'))
				->add('classDesc', 'textarea', array('label' => 'Classroom Description :'))
                ->add('classKey', 'password', array('label' => 'Enrollment Key :'));

	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => 'CloudPod\ClassroomBundle\Entity\Classroom',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'classRegistration',
        ));
    }

    public function getName()
	{
		return 'ClassRegistrationForm';
	}


}