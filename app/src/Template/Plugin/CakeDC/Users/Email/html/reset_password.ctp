<?php
/**
 * Copyright 2010 - 2015, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2015, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$activationUrl = [
    '_full' => true,
    'plugin' => 'CakeDC/Users',
    'controller' => 'Users',
    'action' => 'resetPassword',
    isset($token) ? $token : ''
];
?>
<p>
<?= __d('CakeDC/Users', "こんにちわ {0} さん", isset($first_name)? $first_name : '') ?>,
</p>
<p>
    <strong><?= $this->Html->link(__d('CakeDC/Users', 'ここを開いてパスワードのリセットを行ってください'), $activationUrl) ?></strong>
</p>
<p>
    <?= __d('CakeDC/Users', "リンクが正しく表示されない場合は次のアドレスをブラウザに貼り付けてください。 {0}", $this->Url->build($activationUrl)) ?>
</p>
<p>
    <?= __d('CakeDC/Users', 'いつもご利用ありがとうございます。') ?>,
</p>
