<?php 
/**
 * Copyright (c) 2024 DBETA LIMITED
 * 
 * This file is part of Framework 7.0.
 * All rights reserved.
 * 
 * Framework 7.0 is proprietary software: users may not redistribute, sell,
 * or make copies of it, in whole or in part, without prior written permission
 * from DBETA LIMITED.
 * 
 * Framework 7.0 is provided "as is," without any warranty of any kind, either
 * express or implied, including but not limited to the warranties of 
 * merchantability, fitness for a particular purpose, or non-infringement.
 * 
 * For any enquiries, contact DBETA LIMITED or visit https://www.dbeta.co.uk
 */

    require_once ("config.php");
   
    $pageId = $pageName["prices"]["page_id"];

    $id = array(
        "company" => $page_id["company"]
    );

    include ("".$rootPath."theme/core/head.php");
?>




<?php 
include ("".$rootPath."theme/site-footer.php");
include ("".$rootPath."theme/core/footer.php"); ?>