<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 07/07/2018
 * Time: 01:07
 */

namespace FGS\GestionComptesBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AjouterBanqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('urlImage', FileType::class,array('label'=>'Insert Image','data_class' => null))->add('Send', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'fgs_gestioncomptesbundle_Banque_type';
    }
}