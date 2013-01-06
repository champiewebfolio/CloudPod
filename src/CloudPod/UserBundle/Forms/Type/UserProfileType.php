<?php

namespace CloudPod\UserBundle\Forms\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserProfileType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('firstName', null, array('label' => 'First Name :'))
				->add('lastName', null, array('label' => 'Last Name :'))
				->add('age','integer', array('label' => 'Age :'))
				->add('school', null, array('label' => 'School :'))
				->add('country', 'country', array('label' => 'Country :'))
				;
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => 'CloudPod\UserBundle\Entity\UserProfile',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'UserProfile',
        ));
    }

    public function getName()
	{
		return 'UserProfileForm';
	}
}