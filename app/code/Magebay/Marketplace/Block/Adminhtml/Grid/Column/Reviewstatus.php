<?php
namespace Magebay\Marketplace\Block\Adminhtml\Grid\Column;

class Reviewstatus extends \Magento\Backend\Block\Widget\Grid\Column
{
    /**
     * Add to column decorated status
     *
     * @return array
     */
    public function getFrameCallback()
    {
        return [$this, 'decorateReviewstatus'];
    }

    public function decorateReviewstatus($value, $row, $column, $isExport)
    {
        if ($row->getIsActive() || $row->getStatus()) {
            $cell = '<span class="grid-severity-notice"><span>Approved</span></span>';
        } else {
            $cell = '<span class="grid-severity-critical"><span>Disapproved</span></span>';
        }
        return $cell;
    }
}