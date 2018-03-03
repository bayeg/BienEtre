<?php

namespace AppBundle\Form;

use AppBundle\Repository\CommuneRepository;
use AppBundle\Repository\CourseRepository;
use AppBundle\Repository\LocalityRepository;
use AppBundle\Repository\PostCodeRepository;
use AppBundle\Repository\ServiceCategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
                'class' => 'AppBundle:PostCode',
                'placeholder' => 'Select your Post Code',
                'query_builder' => function (PostCodeRepository $er) {
                    return $er->createQueryBuilder('pc')
                        ->orderBy('pc.postCode', 'ASC');
                },
            ])
            ->add('locality', EntityType::class,[
                'class' => 'AppBundle:Locality',
                'placeholder' => 'Select your Locality',
                'query_builder' => function (LocalityRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->orderBy('l.locality', 'ASC');
                },
            ])
            ->add('commune', EntityType::class,[
                'class' => 'AppBundle:Commune',
                'placeholder' => 'Select your Commune',
                'query_builder' => function (CommuneRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.commune', 'ASC');
                },
            ])
            ->add('serviceCategories', EntityType::class,[
                'class' => 'AppBundle:ServiceCategory',
                'multiple' => true,
                'query_builder' => function (ServiceCategoryRepository $er) {
                    return $er->createQueryBuilder('sc')
                        ->orderBy('sc.name', 'ASC');
                },

            ])
            ->add('submit', SubmitType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setDefaults([
            'data_class' => 'AppBundle\Entity\Provider'
        ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_provider';
    }


}
