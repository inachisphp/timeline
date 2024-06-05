<?php

namespace Inachis\Component\Timeline\Form;

use Inachis\Component\Timeline\Entity\Timeline;
use Inachis\Component\Timeline\Entity\TimelineDetail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TimelineDetailType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('What is the date/time for this entry?', DateTimeType::class, [
                'attr' => [
                    'aria-labelledby' => 'timeline_details__timestamp__label',
                    'class' => 'text full-width',
                ],
                'label' => 'Title',
                'label_attr' => [
                    'id' => 'timeline_details__timestamp__label'
                ],

            ])
            ->add('Detail', TextareaType::class, [
                'attr' => [
                    'aria-labelledby' => 'timeline_details__detail__label',
                    'class' => 'text full-width',
                ],
                'label' => 'Summary',
                'label_attr' => [
                    'id' => 'image-timeline_details__detail__label'
                ],
            ])
            ->add('link', TextType::class, [
                'attr' => [
                    'aria-labelledby' => 'timeline_details__link__label',
                    'class' => 'text',
                ],
                'label' => 'Url',
                'label_attr' => [
                    'id' => 'image-timeline_details__link__label'
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
                'class' => 'form form__timeline_details',
            ],
            'data_class' => TimelineDetail::class,
       ]);
    }
}
