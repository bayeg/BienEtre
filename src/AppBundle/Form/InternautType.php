<?php

namespace AppBundle\Form;

use AppBundle\Repository\CommuneRepository;
use AppBundle\Repository\LocalityRepository;
use AppBundle\Repository\PostCodeRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InternautType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('firstName',TextType::class)
            ->add('lastName', TextType::class)
            ->add('addressStreet', TextType::class,[
            ])
            ->add('addressNumber', TextType::class,[
            ])
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
            ->add('newsletter',ChoiceType::class,[
                'choices' => [
                    'Yes' => true,
                    'No' => false
                ]
            ])
            ->add('submit', SubmitType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Internaut'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_internaut';
    }


}
