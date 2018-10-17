<?php

namespace GGGGino\SkuskuCartBundle\Form\CartFlowType;

use Payum\Core\Bridge\Symfony\Form\Type\GatewayFactoriesChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CartStep2FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('paymentMethod', GatewayFactoriesChoiceType::class, array(
            'mapped' => false,
            'data' => array()
        ));
    }

    public function getBlockPrefix()
    {
        return 'choosePayment';
    }
}