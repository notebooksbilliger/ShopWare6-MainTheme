<?php

declare(strict_types=1);

namespace MainTheme\Validator;

use Shopware\Core\Checkout\Customer\Validation\CustomerValidationFactory;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\Validation\DataValidationDefinition;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\Validator\Constraints\Length;

class ExtendedCustomerValidationFactory extends CustomerValidationFactory
{
    private const FIRST_NAME_MAX_LENGTH = 30;
    private const LAST_NAME_MAX_LENGTH = 30;
    private const EMAIL_MAX_LENGTH = 80;

    public function create(SalesChannelContext $context): DataValidationDefinition
    {
        $definition = parent::create($context);

        return $this->addConstraints($definition, $context);
    }

    public function update(SalesChannelContext $context): DataValidationDefinition
    {
        $definition = parent::update($context);

        return $this->addConstraints($definition, $context);
    }

    /**
     * @param SalesChannelContext|Context $context
     */
    protected function addConstraints(DataValidationDefinition $definition, $context): DataValidationDefinition
    {
        return $definition
            ->add('firstName', new Length(['max' => self::FIRST_NAME_MAX_LENGTH]))
            ->add('lastName', new Length(['max' => self::LAST_NAME_MAX_LENGTH]))
            ->add('email', new Length(['max' => self::EMAIL_MAX_LENGTH]));
    }
}
