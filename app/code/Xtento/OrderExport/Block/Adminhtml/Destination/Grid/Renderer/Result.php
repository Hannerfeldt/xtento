<?php

/**
 * Product:       Xtento_OrderExport
 * ID:            gwW9u/r0VejpQKC2Ov2BKKnR6pOaUvxDy3w40saMYLo=
 * Last Modified: 2015-09-06T12:23:38+00:00
 * File:          app/code/Xtento/OrderExport/Block/Adminhtml/Destination/Grid/Renderer/Result.php
 * Copyright:     Copyright (c) XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

namespace Xtento\OrderExport\Block\Adminhtml\Destination\Grid\Renderer;

class Result extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
{
    /**
     * Render destination status
     *
     * @param \Magento\Framework\DataObject $row
     * @return string
     */
    public function render(\Magento\Framework\DataObject $row)
    {
        $class = 'grid-severity-major';
        $text = __('No Result');
        switch ($this->_getValue($row)) {
            case 0:
                $class = 'grid-severity-critical';
                $text = __('Failed');
                break;
            case 1:
                $class = 'grid-severity-notice';
                $text = __('Success');
                break;
        }
        return '<span class="' . $class . '"><span>' . $text . '</span></span>';
    }
}
