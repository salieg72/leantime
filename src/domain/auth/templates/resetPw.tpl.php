<div class="pageheader">
    <div class="pagetitle">
        <h1><?php echo $this->language->__("headlines.reset_password"); ?></h1>
    </div>
</div>
<div class="regcontent">

    <form id="resetPassword" action="" method="post">

        <?php echo $this->displayInlineNotification(); ?>

            <p><?php echo $this->language->__("text.enter_new_password"); ?><br /><br /></p>
            <div class="">
                <input type="password" name="password" id="password" placeholder="<?php echo $this->language->__("input.placeholders.enter_new_password"); ?>" />
            </div>
            <div class=" ">
                <input type="password" name="password2" id="password2" placeholder="<?php echo $this->language->__("input.placeholders.confirm_password"); ?>" />
            </div>
            <div class="">
                <div class="forgotPwContainer">
                    <a href="<?=BASE_URL ?>/" class="forgotPw"><?php echo $this->language->__("links.back_to_login"); ?></a>
                </div>
                <input type="submit" name="resetPassword" value="<?php echo $this->language->__("buttons.reset_password"); ?>" />
            </div>

    </form>
</div>