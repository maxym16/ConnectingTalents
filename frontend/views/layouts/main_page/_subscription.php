<?php
use common\widgets\CTSubscription;
?>
<div class="subscription">
    <div class="subscription__inner">
        <div class="subscription__text">
            <p class="subscription__desc">
                We are currently testing. Our goal is to improve based on your feedback.  If you are curious about our progress, please leave your email below. Otherwise, give us your suggestions through the Feedback button in the menu.
            </p>
            <h2 class="subscription__title">Let's keep in touch!</h2>
        </div>
        <?= CTSubscription::widget([
            'list_id' => '9ae41cf341' // if not set raise Error
        ]) ?>
    </div>
</div>
