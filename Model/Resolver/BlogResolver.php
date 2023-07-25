<?php
declare(strict_types=1);

namespace Macademy\GraphQl\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class BlogResolver implements ResolverInterface
{
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ): array
    {
        return [
            'title' => 'My Awesome Blog',
            'store' => $context->getExtensionAttributes()->getStore()->getName(),
            'current_customer_id' => $context->getUserId(),
            'user_type' => $context->getUserType(),
        ];
    }
}
