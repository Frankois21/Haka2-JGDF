<?php

namespace quizzBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestrepType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('intitule', TextareaType::class, array('attr'=> array('cols'=> '50', 'rows'=>'5')))
            ->add('reponse1')
            ->add('reponse2')
            ->add('reponse3')
            ->add('reponse4')
            ->add('solution',IntegerType::class, array('attr'=> array('min'=>'1', 'max'=>'4')) )
            ->add('category', EntityType::class,[
                'class'=>'quizzBundle:Category',
                'choice_label'=>'category',
                'expanded'=>true,
                'multiple'=>false

            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'quizzBundle\Entity\Questrep'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'quizzbundle_questrep';
    }


}
