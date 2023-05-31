<?php

/**
 * Product:       Xtento_OrderExport
 * ID:            gwW9u/r0VejpQKC2Ov2BKKnR6pOaUvxDy3w40saMYLo=
 * Last Modified: 2015-09-01T18:15:56+00:00
 * File:          app/code/Xtento/OrderExport/Model/Export/Data/DataInterface.php
 * Copyright:     Copyright (c) XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

namespace Xtento\OrderExport\Model\Export\Data;

interface DataInterface {
    public function getExportData($entityType, $collectionItem);
    public function getConfiguration();
}