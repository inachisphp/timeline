<?php

namespace Inachis\Component\Timeline\Form;

use Inachis\Component\Timeline\Entity\Timeline;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TimelineType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'aria-labelledby' => 'timeline__title__label',
                    'class' => 'text full-width',
                ],
                'label' => 'Title',
                'label_attr' => [
                    'id' => 'timeline__title__label'
                ],

            ])
            ->add('summary', TextareaType::class, [
                'attr' => [
                    'aria-labelledby' => 'timeline__summary__label',
                    'class' => 'text full-width',
                ],
                'label' => 'Summary',
                'label_attr' => [
                    'id' => 'timeline__summary__label'
                ],
            ])
            ->add('footnotes', TextareaType::class, [
                'attr' => [
                    'aria-labelledby' => 'timeline__footnotes__label',
                    'class' => 'text full-width',
                ],
                'label' => 'Footnotes',
                'label_attr' => [
                    'id' => 'timeline__footnotes__label'
                ],
            ])
            //->add('showDates')
            //->add('showTimes')
            ->add('url', TextType::class, [
                'attr' => [
                    'aria-labelledby' => 'timeline__url__label',
                    'class' => 'text',
                ],
                'label' => 'Url',
                'label_attr' => [
                    'id' => 'timeline__url__label'
                ],

            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'button button--positive',
                ],
                'label' => 'Save',
            ]);

        if (!empty($options['data']->getId())) {
            $builder
                ->add('delete', SubmitType::class, [
                    'attr' => [
                        'class' => 'button button--negative',
                    ],
                    'label' => 'Delete',
                ])
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver) : void
    {
        $resolver->setDefaults([
            'attr' => [
                'class' => 'form form__timeline',
            ],
            'data_class' => Timeline::class,
       ]);
    }
}
