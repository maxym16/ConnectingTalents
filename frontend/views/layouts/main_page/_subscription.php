<?php
use common\widgets\CTSubscription;
?>
<div class="subscription">
    <div class="subscription__inner">
        <div class="subscription__text">
            <p class="subscription__desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore commodi reiciendis non dicta omnis tempora.
            </p>
            <h2 class="subscription__title">Let's keep in touch!</h2>
        </div>
        <?= CTSubscription::widget([
            'list_id' => '9ae41cf341' // if not set raise Error
        ]) ?>
    </div>
</div>
