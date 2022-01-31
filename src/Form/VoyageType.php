<?php

namespace App\Form;

use App\Entity\Voyage;
use App\Entity\Category;
use App\Entity\Univers;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class VoyageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('reference')
            ->add('price')
            ->add('img', FileType::class, [
                'mapped' => false,
                'required' => false, 'label' => 'Image de l\'article',
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => ['image/jpg', 'image/png', 'image/jpeg', 'image/gif'],
                        'mimeTypesMessage' => 'Veuillez déposer un fichier au format jpg, jpeg, png ou gif'
                    ])
                ]
            ])
            ->add('univers', EntityType::class, ['class' => Univers::class, 'choice_label' => 'name'])
            ->add('categories', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voyage::class,
        ]);
    }
}
