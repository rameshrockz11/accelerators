<!--
/* * *******************************************************************************************
 *  This file is part of the Oracle Service Cloud Accelerator Reference Integration set published
 *  by Oracle Service Cloud under the Universal Permissive License (UPL), Version 1.0
 *  included in the original distribution.
 *  Copyright (c) 2014, 2015, 2016, Oracle and/or its affiliates. All rights reserved.
 ***********************************************************************************************
 *  Accelerator Package: OSVC + EBS Enhancement
 *  link: http://www.oracle.com/technetwork/indexes/samplecode/accelerator-osvc-2525361.html
 *  OSvC release: 15.8 (August 2015)
 *  EBS release: 12.1.3
 *  reference: 150505-000099, 150420-000127
 *  date: Thu Nov 12 00:52:38 PST 2015

 *  revision: rnw-15-11-fixes-release-1
 *  SHA1: $Id: c2a6f34399dc6fe194b26d1a912002ac33cf7bc9 $
 * *********************************************************************************************
 *  File: view.php
 * ****************************************************************************************** */
-->
<div id="rn_<?= $this->instanceID; ?>" class="<?= $this->classList ?>">
    <rn:block id="top"/>
    <div id="rn_<?= $this->instanceID; ?>_Alert" role="alert" class="rn_ScreenReaderOnly"></div>
    <rn:block id="preLoadingIndicator"/>
    <div id="rn_<?= $this->instanceID; ?>_Loading"></div>
        
    <div id="rn_<?= $this->instanceID; ?>_Content" class="yui3-skin-sam"></div>

    <rn:block id="bottom"/>
</div>
