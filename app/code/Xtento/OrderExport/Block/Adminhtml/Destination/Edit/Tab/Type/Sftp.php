<?php

/**
 * Product:       Xtento_OrderExport
 * ID:            gwW9u/r0VejpQKC2Ov2BKKnR6pOaUvxDy3w40saMYLo=
 * Last Modified: 2016-03-02T15:34:05+00:00
 * File:          app/code/Xtento/OrderExport/Block/Adminhtml/Destination/Edit/Tab/Type/Sftp.php
 * Copyright:     Copyright (c) XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

namespace Xtento\OrderExport\Block\Adminhtml\Destination\Edit\Tab\Type;

class Sftp extends Ftp
{
    // SFTP Configuration
    public function getFields(\Magento\Framework\Data\Form $form, $type = 'SFTP')
    {
        parent::getFields($form, $type);
    }
}