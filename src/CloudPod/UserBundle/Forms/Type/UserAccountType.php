<?php

namespace CloudPod\UserBundle\Forms\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserAccountType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('userName', null, array('label' => 'Username :'))
				->add('plainPassword', 'repeated', array(
					'type' => 'password',
					'first_options' => array('label' => 'Password :'),
					'second_options' => array('label' => 'Confirm Password :')))
				->add('email', 'email', array('label' => 'Email :'))
				->add('chooseRole', 'choice', array('choices' => array('ROLE_ADMIN' => 'Lecturer', 'ROLE_USER' => 'Student'),'label' => 'Role :'))
	;
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => 'CloudPod\UserBundle\Entity\User',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'UserAccount',
        ));
    }

    public function getName()
	{
		return 'UserAccountForm';
	}

}