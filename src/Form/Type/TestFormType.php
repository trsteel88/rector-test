<?php

namespace App\Form\Type;

use App\Form\Choice\ApiChoice;
use App\Util\SomeApi;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('choice', ApiChoice::class, [
                'mapped' => false,
            ])
        ;
    }
}
