<?php

namespace PressWind\Inc\Core;


require_once dirname(__FILE__) . '/disable/index.php';
require_once dirname(__FILE__) . '/assets.php';
require_once dirname(__FILE__) . '/admin-assets.php';
require_once dirname(__FILE__) . '/login-assets.php';


/**
 * init assets for options page
 */
initAdminAssets('gm-admin', dirname(__FILE__) . '/../../admin');
