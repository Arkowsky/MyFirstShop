<?php
declare(strict_types=1);


namespace App\Form\Extension;


use Doctrine\DBAL\Types\TextType;
use Sylius\Bundle\AdminApiBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('color', TextType::class, [
                'required' => false,
                'label' => 'app.form.product.color'
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
