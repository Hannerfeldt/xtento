<?php

/**
 * Product:       Xtento_OrderExport
 * ID:            gwW9u/r0VejpQKC2Ov2BKKnR6pOaUvxDy3w40saMYLo=
 * Last Modified: 2015-08-09T13:15:14+00:00
 * File:          app/code/Xtento/OrderExport/Controller/Adminhtml/Profile/Index.php
 * Copyright:     Copyright (c) XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

namespace Xtento\OrderExport\Controller\Adminhtml\Profile;

class Index extends \Xtento\OrderExport\Controller\Adminhtml\Profile
{
    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $healthCheck = $this->healthCheck();
        if ($healthCheck !== true) {
            $resultRedirect = $this->resultFactory->create(
                \Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT
            );
            return $resultRedirect->setPath($healthCheck);
        }

        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
        parent::updateMenu($resultPage);
        return $resultPage;
    }
}
