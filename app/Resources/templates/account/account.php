<?php
/**
 * This file is part of the OpenPasswd package.
 *
 * (c) Simon Leblanc <contact@leblanc-simon.eu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
?>
            <div id="manage-accounts" class="page hide" data-object="account">
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                var url_account_list        = '<?php echo $this->url('account') ?>';
                var url_account_get         = '<?php echo $this->url('account_get', array('slug' => '--slug--')) ?>';
                var url_account_add         = '<?php echo $this->url('account_add') ?>';
                var url_account_update      = '<?php echo $this->url('account_update', array('slug' => '--slug--')) ?>';
                var url_account_show        = '<?php echo $this->url('account_show', array('slug' => '--slug--')) ?>';
                var form_types              = {};
                form_types.templates        = <?php echo json_encode($this->getFormTypes()->getTemplateIds()) ?>;
                form_types.available_values = <?php echo json_encode($this->getFormTypes()->getAvailableValues()) ?>;
                form_types.names            = <?php echo json_encode($this->getFormTypes()->getAllNames()) ?>;
            </script>
            <script type="text/html" id="tpl-manage-accounts-edit"><?php include __DIR__.'/form.php' ?></script>
            <script type="text/html" id="tpl-manage-accounts-list"><?php include __DIR__.'/select.php' ?></script>
            <script type="text/html" id="tpl-manage-accounts-line"><?php include __DIR__.'/option.php' ?></script>
            <script type="text/html" id="tpl-manage-accounts-show"><?php include __DIR__.'/show.php' ?></script>
            <script type="text/html" id="tpl-manage-accounts-show-line"><?php include __DIR__.'/show_line.php' ?></script>
            <?php echo $this->getFormTypes()->render() ?>
