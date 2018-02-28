<?php

namespace AppBundle\Form;

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
            ->add('image', FileType::class)

            ->add('firstName',TextType::class)
            ->add('lastName', TextType::class)
            ->add('addressStreet', TextType::class,[
                'required' => false
            ])
            ->add('addressNumber', TextType::class,[
                'required' => false
            ])
            ->add('postCode', EntityType::class,[
                'class' => 'AppBundle:PostCode',
            ])
            ->add('locality', EntityType::class,[
                'class' => 'AppBundle:Locality'
            ])
            ->add('commune', EntityType::class,[
                'class' => 'AppBundle:Commune'
            ])

            ->add('newsletter',ChoiceType::class,[
                'choices' => [
                    'Yes' => true,
                    'No' => false
                ]
            ])


//            ->add('providers')
//            ->add('abuses')
//            ->add('comments')
//            ->add('positions')

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
