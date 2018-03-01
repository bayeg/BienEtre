<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProviderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('logos', FileType::class)

            ->add('name', TextType::class)
            ->add('vat', TextType::class)
            ->add('phone', TextType::class,[
                'required' => false
            ])
            ->add('contactEmail', EmailType::class,[
                'required' => false
            ])
            ->add('website', UrlType::class,[
                'required' => false
            ])

            ->add('addressStreet', TextType::class)
            ->add('addressNumber', TextType::class)
            ->add('postCode', EntityType::class,[
                'class' => 'AppBundle:PostCode'
            ])
            ->add('locality', EntityType::class,[
                'class' => 'AppBundle:Locality'
            ])
            ->add('commune', EntityType::class,[
                'class' => 'AppBundle:Commune'
            ])

//            ->add('photos')
//            ->add('serviceCategories')
//            ->add('courses', EntityType::class, [
//                'class' => 'AppBundle:Course'
//            ])
//            ->add('promotions')
//            ->add('comments')
//            ->add('internauts')

            ->add('submit', SubmitType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Provider'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_provider';
    }


}
