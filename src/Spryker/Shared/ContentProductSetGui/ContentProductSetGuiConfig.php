<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\ContentProductSetGui;

use Spryker\Shared\Kernel\AbstractSharedConfig;

class ContentProductSetGuiConfig extends AbstractSharedConfig
{
    /**
     * @uses \Spryker\Shared\ContentProductSet\ContentProductSetConfig::CONTENT_TYPE_PRODUCT_SET
     *
     * Content item product set
     *
     * @var string
     */
    public const CONTENT_TYPE_PRODUCT_SET = 'Product Set';

    /**
     * @uses \Spryker\Shared\ContentProductSet\ContentProductSetConfig::CONTENT_TERM_PRODUCT_SET
     *
     * Content item product set
     *
     * @var string
     */
    public const CONTENT_TERM_PRODUCT_SET = 'Product Set';

    /**
     * @uses \Spryker\Shared\ContentProductSet\ContentProductSetConfig::TWIG_FUNCTION_NAME
     *
     * @var string
     */
    protected const TWIG_FUNCTION_NAME = 'content_product_set';

    /**
     * @uses \Spryker\Shared\ContentProductSet\ContentProductSetConfig::WIDGET_TEMPLATE_IDENTIFIER_CART_BUTTON_TOP
     *
     * @var string
     */
    protected const WIDGET_TEMPLATE_IDENTIFIER_CART_BUTTON_TOP = 'cart-button-top';

    /**
     * Content item product set cart-button-top template name
     *
     * @var string
     */
    protected const WIDGET_TEMPLATE_DISPLAY_NAME_CART_BUTTON_TOP = 'content_product_set_gui.template.cart-button-top';

    /**
     * @uses \Spryker\Shared\ContentProductSet\ContentProductSetConfig::WIDGET_TEMPLATE_IDENTIFIER_CART_BUTTON_BOTTOM
     *
     * @var string
     */
    protected const WIDGET_TEMPLATE_IDENTIFIER_CART_BUTTON_BOTTOM = 'cart-button-btm';

    /**
     * Content item product set cart-button-btm template name
     *
     * @var string
     */
    protected const WIDGET_TEMPLATE_DISPLAY_NAME_CART_BUTTON_BOTTOM = 'content_product_set_gui.template.cart-button-btm';

    /**
     * @api
     *
     * @return array<string, string>
     */
    public function getContentWidgetTemplates(): array
    {
        return [
            static::WIDGET_TEMPLATE_IDENTIFIER_CART_BUTTON_TOP => static::WIDGET_TEMPLATE_DISPLAY_NAME_CART_BUTTON_TOP,
            static::WIDGET_TEMPLATE_IDENTIFIER_CART_BUTTON_BOTTOM => static::WIDGET_TEMPLATE_DISPLAY_NAME_CART_BUTTON_BOTTOM,
        ];
    }

    /**
     * @api
     *
     * @return string
     */
    public function getTwigFunctionName(): string
    {
        return static::TWIG_FUNCTION_NAME;
    }
}
