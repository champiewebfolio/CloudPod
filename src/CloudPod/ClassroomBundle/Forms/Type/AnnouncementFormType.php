<?php
namespace CloudPod\ClassroomBundle\Forms\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class AnnouncementFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('announcementTitle', 'text', array('label' => 'Title :'))
				->add('announcementContent', 'textarea', array(
			'label' => 'Announcemenent :',
        	'attr' => array(
            'class' => 'tinymce',
            'data-theme' => 'medium' // simple, advanced, bbcode
        )));

	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => 'CloudPod\ClassroomBundle\Entity\Announcements',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'AnnouncementForm',
        ));
    }

    public function getName()
	{
		return 'ClassAnnouncementForm';
	}


}