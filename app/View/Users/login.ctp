<script type="text/javascript">

</script>
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
<?php echo $this->Html->link("Forget Password ?",array("controller"=>"users","action"=>"forgetpwd")); ?><br /><br />
<?php echo $this->Html->image("/img/joyify.png", array("alt" => "Log in with Joyify", "url" => "http://www.joyify.nu/oauth/authorize?redirect_uri=".urlencode("http://local.artistconnector.tv/admin/index.php/joyify")."&client_id=NTE4NjVmYmNiNjRiOGJi&client_secret=a3b11ce6f12a3be5d44e28de6df9cbbc5a990c96&response_type=code"));?>
</div>
