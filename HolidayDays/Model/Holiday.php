<?php

namespace Perspective\HolidayDays\Model;

class Holiday extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'perspective_holidaydays_holiday';

    protected $_cacheTag = 'perspective_holidaydays_holiday';

    protected $_eventPrefix = 'perspective_holidaydays_holiday';

    protected function _construct()
    {
        $this->_init('Perspective\HolidayDays\Model\ResourceModel\Holiday');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
