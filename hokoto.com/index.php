<?php
define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);
define('__CHECK_AUTH__', false);
define('__SITE_LANG__', 'kk');

require_once(__ROOT__ . '/res/translates/Translate.php');

require_once(__ROOT__ . '/res/templates/HeaderTemplates.php');
require_once(__ROOT__ . '/res/templates/Header.php');
?>
<? echo Header::get(); ?>
    
    
    <content class="content">
        <div class="container">
            
        </div>
    </content>



</body>
</html>