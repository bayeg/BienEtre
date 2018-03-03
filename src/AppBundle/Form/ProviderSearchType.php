<?php
namespace AppBundle\Form;

use AppBundle\Entity\Image;
use AppBundle\Repository\PostCodeRepository;
use AppBundle\Repository\ServiceCategoryRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class ProviderSearchType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', SearchType::class,[
                'required' => false
            ])
            ->add('postCode', EntityType::class,[
                'class' => 'AppBundle\Entity\PostCode',
                'choice_label' => 'postCode',
                'placeholder' => 'Search by Post Code',
                'required' => false,
                'query_builder' => function(PostCodeRepository $repo) {
                    return $repo->createNumericOrderQueryBuilder();
                }
            ])
            ->add('serviceCategories', EntityType::class, [
                'class' => 'AppBundle\Entity\ServiceCategory',
                'choice_label' => 'name',
                'placeholder' => 'Search by Category',
                'required' => false,
                'query_builder' => function(ServiceCategoryRepository $repo) {
                    return $repo->createAlphabeticalOrderQueryBuilder();
                }
            ])
            ->add('search',SubmitType::class)

            ->setMethod('GET')
            ->setAction('providers-result');
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
        return '';
    }
}