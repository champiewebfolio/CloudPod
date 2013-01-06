<?php
 
namespace CloudPod\UserBundle\Forms\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserEnrollmentType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('className', 'text', array('label' => 'Class Name :'))
                ->add('classKey', 'password', array('label' => 'Enrollment Key :'));			
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => 'CloudPod\UserBundle\Model\RegistrationModel',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'classkey',
        ));
    }

    public function getName()
	{
		return 'EnrollmentForm';
	}
}