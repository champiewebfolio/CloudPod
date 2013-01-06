<?php

namespace CloudPod\ClassroomBundle\Forms\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LessonUploadFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
			$builder->add('name')
				->add('file', 'file', array('label' => 'Upload Material :   '));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => 'CloudPod\ClassroomBundle\Entity\LessonFileUpload',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'LessonUploadForm',
        ));
    }

    public function getName()
	{
		return 'LessonFileUploadForm';
	}

}