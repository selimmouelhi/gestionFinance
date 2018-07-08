<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 06/07/2018
 * Time: 03:03
 */

namespace FGS\GestionComptesBundle\Form\Type;




use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class VirementType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('libelle', TextType::class, array())
            ->add('montant', MoneyType::class)
            ->add('date', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd/mm/yyyy',
                'attr' => array(
                    'autocomplete' => 'off',
                ),
            ))
            ->add('compteS'
            )
        ->add('compteR'
    )->add('Ajouter', SubmitType::class);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
    }
    public function getBlockPrefix()
    {
        return 'prouit_bundle_ajouter_virement_type';
    }


}

