<?php

/**
 * Product:       Xtento_OrderExport
 * ID:            gwW9u/r0VejpQKC2Ov2BKKnR6pOaUvxDy3w40saMYLo=
 * Last Modified: 2021-01-15T20:38:16+00:00
 * File:          app/code/Xtento/OrderExport/Block/Adminhtml/Log/Grid/Renderer/ResultMessage.php
 * Copyright:     Copyright (c) XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

namespace Xtento\OrderExport\Block\Adminhtml\Log\Grid\Renderer;

class ResultMessage extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
{
    public function render(\Magento\Framework\DataObject $row)
    {
        return nl2br(parent::_getValue($row));
    }
}
