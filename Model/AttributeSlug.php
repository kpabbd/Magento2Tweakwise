<?php
/**
 * Tweakwise (https://www.tweakwise.com/) - All Rights Reserved
 *
 * @copyright Copyright (c) 2017-2022 Tweakwise.com B.V. (https://www.tweakwise.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Tweakwise\Magento2Tweakwise\Model;

use Tweakwise\Magento2Tweakwise\Model\ResourceModel\AttributeSlug as ResourceModel;
use Tweakwise\Magento2Tweakwise\Api\Data\AttributeSlugInterface;
use Magento\Framework\Model\AbstractModel;

class AttributeSlug extends AbstractModel implements AttributeSlugInterface
{

    protected $_eventPrefix = 'tweakwise_attributeslug';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->getData(self::ATTRIBUTE);
    }

    /**
     * @param string|null $attribute
     */
    public function setAttribute(?string $attribute)
    {
        $this->setData(self::ATTRIBUTE, $attribute);
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->getData(self::SLUG);
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug)
    {
        $this->setData(self::SLUG, $slug);
    }
}
