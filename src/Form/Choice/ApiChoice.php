<?php

namespace App\Form\Choice;

use App\Util\SomeApi;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApiChoice extends AbstractType
{
    public function __construct(private readonly SomeApi $someApi)
    {
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'choices' => $this->someApi->getFoo(),
        ]);
    }

    public function getParent(): ?string
    {
        return ChoiceType::class;
    }
}
