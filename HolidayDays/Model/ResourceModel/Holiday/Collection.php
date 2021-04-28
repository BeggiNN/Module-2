<?php

namespace Perspective\HolidayDays\Model\ResourceModel\Holiday;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'perspective_holidaydays_holiday_collection';
    protected $_eventObject = 'holiday_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Perspective\HolidayDays\Model\Holiday', 'Perspective\HolidayDays\Model\ResourceModel\Holiday');
    }
}
