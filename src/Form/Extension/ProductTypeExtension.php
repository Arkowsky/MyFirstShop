<?php
declare(strict_types=1);


namespace App\Form\Extension;


use App\Entity\Product\Product;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('color', ChoiceType::class, [
                'choices' => array_combine(
                    array_map(function($color) {
                        return "app.form.product.colors.$color";
                    }, Product::COLORS),
                    Product::COLORS
                ),
                'required' => false,
                'label' => 'app.form.product.color'
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
