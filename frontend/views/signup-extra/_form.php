<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SignupExtraForm */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
    $form = ActiveForm::begin(['id' => 'signup-extra-form', 'options' => ['enctype' => 'multipart/form-data'], 'enableClientScript' => false]);
?>
<fieldset class="form">
<div class="register__col">
    <div class="form-group">
        <?= Html::activeLabel($model, 'nome',['class'=>'form-group__label', 'value' => 'Name*']); ?>
        <?php $username = $model->nome?:$user->username; ?>
        <?= Html::activeTextInput($model, 'nome', ['class'=>'input', 'value'=>$username, 'placeholder' => 'Click to insert text']); ?>
        <?= Html::error($model, 'nome'); ?>
    </div>
    <div class="form-group">
        <?= Html::activeLabel($model, 'cognome',['class'=>'form-group__label', 'value' => 'Last name']); ?>
        <?php $surname = $model->cognome?:$user->surname; ?>
        <?= Html::activeTextInput($model, 'cognome', ['class'=>'input', 'value'=> $surname, 'placeholder' => 'Click to insert text']); ?>
        <?= Html::error($model, 'cognome'); ?>
    </div>
    <div class="form-group">
        <div class="register__subgroup">
            <label class="form-group__label">Gender</label>
            <div>
                <input <?= $model->sesso === 'Male'?'checked':'' ?> id="male" class="none" type="radio" name="SignupExtraForm[sesso]" value="Male" />
                <label class="register__radio radio" for="male">Male</label>
                <input <?= $model->sesso === 'Female'?'checked':'' ?> id="female" class="none" type="radio" name="SignupExtraForm[sesso]" value="Female" />
                <label class="register__radio radio" for="female">Female</label>
            </div>
            <?= Html::error($model, 'sesso'); ?>
        </div>
        <div class="register__subgroup">
            <label class="form-group__label">Age</label>
            <div id="age" class="select js-select" data-eui-dropdown>
                <div class="select__inner dd-eui-dropdown" data-eui-dropdown-depth="1">
                    <?php
                    $age_list = $model->ageGroup();
                    ?>
                    <div class="select__value js-select-value"><?= $age_list[$model->user_profile_age_group_id] ?></div>
                    <div class="select__items dd-eui-drop">
                        <?php foreach($age_list as $key => $item) { ?>
                            <input <?= $model->user_profile_age_group_id === $key?'checked':'' ?> id="age-<?= $key ?>" class="none js-select-option" type="radio" name="SignupExtraForm[user_profile_age_group_id]" data-text="<?= $item ?>" value="<?= $key ?>" />
                            <label class="select__option" for="age-<?= $key ?>"><?= $item ?></label>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?= Html::error($model, 'user_profile_age_group_id'); ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::activeLabel($model, 'email_pec',['class'=>'form-group__label', 'value' => 'E-mail']); ?>
        <?= Html::activeInput('email', $model, 'email_pec', ['class'=>'input', 'value'=> $user->email, 'placeholder' => 'Click to insert text']); ?>
        <?= Html::error($model, 'email_pec'); ?>
    </div>
    <div class="form-group">
        <label class="form-group__label" for="register-email">Phone <span class="form-group__addition">(optional)</span></label>
        <?= Html::activeInput('tel', $model, 'telefono', ['class'=>'input', 'placeholder' => 'Click to insert text']); ?>
        <?= Html::error($model, 'telefono'); ?>
    </div>
    <div class="form-group form-group--last register-socials">
        <label class="form-group__label">Social network <span class="form-group__addition">(optional)</span></label>
        <div class="register-socials__row">
            <?= Html::activeTextInput($model, 'linkedin', ['class'=>'register-socials__input input input--with-icon',  'placeholder' => 'Insert URL']); ?>
            <div class="register-socials__cell register-socials__cell--in">
                <svg xmlns="http://www.w3.org/2000/svg" class="register-socials__icon register-socials__icon--in" width="16" height="16" viewBox="0 0 14 14" fill="currentColor">
                    <path d="M3,14H0V4h3V14z M14,14h-3V8.7c0-1.4-0.5-2.1-1.5-2.1C8.7,6.6,8.2,7,8,7.7C8,9,8,14,8,14H5c0,0,0-9,0-10h2.4l0.2,2h0.1
    c0.6-1,1.6-1.7,2.9-1.7c1,0,1.9,0.3,2.5,1c0.6,0.7,1,1.7,1,3V14z"/>
                    <ellipse cx="1.5" cy="1.5" rx="1.6" ry="1.5"/>
                </svg>
            </div>
            <div class="register-socials__cell">
                <button class="register-socials__button" type="button">Connect</button>
            </div>
        </div>
<!--        --><?//= Html::error($model, 'linkedin'); ?>
        <div class="register-socials__row">
            <?= Html::activeTextInput($model, 'facebook', ['class'=>'register-socials__input input input--with-icon', 'placeholder' => 'Insert URL']); ?>
            <div class="register-socials__cell register-socials__cell--fb">
                <svg xmlns="http://www.w3.org/2000/svg" class="register-socials__icon register-socials__icon--fb" width="13" height="20" viewBox="0 0 41 71" fill="currentColor">
                    <path d="M40.9,0v14.8H28.2c-1.5,0-2.8,1.3-2.8,3v8.9h14.1v14.8H25.4V71H11.4V41.4H0.1V26.6h11.2v-8.9
      c0-9.3,6.7-17,15.5-17.8L40.9,0z"/>
                </svg>
            </div>
            <div class="register-socials__cell">
                <button class="register-socials__button" type="button">Connect</button>
            </div>
        </div>
<!--        --><?//= Html::error($model, 'facebook'); ?>
        <div class="register-socials__row">
            <?= Html::activeTextInput($model, 'googleplus', ['class'=>'register-socials__input input input--with-icon',  'placeholder' => 'Insert URL']); ?>
            <div class="register-socials__cell register-socials__cell--gp">
                <svg xmlns="http://www.w3.org/2000/svg" class="register-socials__icon register-socials__icon--gp" width="22" height="15" viewBox="0 0 78 48" fill="currentColor">
                    <path d="M27.4,29h12.2c-2.1,5.8-7.9,10-14.7,10c-8.2-0.1-15-6.4-15.3-14.4C9.2,16.1,16.2,9,25,9
    c4,0,7.6,1.5,10.4,3.9c0.6,0.6,1.6,0.6,2.3,0l4.5-4.1c0.7-0.6,0.7-1.7,0-2.3c-4.4-4-10.2-6.5-16.6-6.6C11.7-0.4,0.1,10.5,0,23.8
    C-0.1,37.2,11.1,48.1,25,48.1c13.3,0,24.2-10.1,24.9-22.7c0-0.2,0-5.5,0-5.5H27.4c-0.9,0-1.7,0.7-1.7,1.6v5.9
    C25.7,28.2,26.5,29,27.4,29z"/>
                    <path d="M70.5,20.4v-5.8c0-0.8-0.7-1.4-1.5-1.4h-5c-0.8,0-1.5,0.6-1.5,1.4v5.8h-6c-0.8,0-1.5,0.6-1.5,1.4v4.9
    c0,0.8,0.7,1.4,1.5,1.4h6v5.8c0,0.8,0.7,1.4,1.5,1.4h5c0.8,0,1.5-0.6,1.5-1.4v-5.8h6c0.8,0,1.5-0.6,1.5-1.4v-4.9
    c0-0.8-0.7-1.4-1.5-1.4H70.5z"/>
                </svg>
            </div>
            <div class="register-socials__cell">
                <button class="register-socials__button" type="button">Connect</button>
            </div>
        </div>
<!--        --><?//= Html::error($model, 'googleplus'); ?>
    </div>
</div>
<div class="register__col">
    <div class="form-group">
        <label class="form-group__label" for="register-avatar">Your profile picture</label>
        <div class="upload-avatar">
            <div class="upload-avatar__container js-file-container">
                <?php
                $img_style = '';
                if(isset($model->image) && file_exists(Yii::getAlias('@webroot', $model->image)))
                {
                    $img_style = 'background-image:url('.$model->image.')';
                }
                ?>
                <button id="upload-avatar" class="upload-avatar__button js-upload-avatar-button" type="button" style="background-size: contain;<?=  $img_style ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="100" height="100" viewBox="0 0 100 100" fill="currentColor">
                        <line fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" x1="50.002" y1="35.455" x2="50.002" y2="64.545"/>
                        <line fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" x1="64.545" y1="50.003" x2="35.455" y2="50.003"/>
                    </svg>
                </button>
                <input id="imgInp" class="upload-avatar__trigger js-file" type="file" name="SignupExtraForm[file]" value="" accept="image/jpeg,image/png" data-max-size="5000000" data-min-res="300:300" />
                <p class="upload-avatar__name js-upload-avatar-name"></p>
            </div>
            <p class="upload-avatar__title">Picture requirements:</p>
            <p class="upload-avatar__desc">Dimension max: 5Mb, Res. min: 300x300 px</p>
        </div>

        <?= Html::error($model, 'file'); ?>
    </div>
    <div class="form-group">
        <?= Html::activeLabel($model, 'presentazione_personale',['class'=>'form-group__label', 'value' => 'About me:']); ?>
        <?= Html::activeTextarea($model, 'presentazione_personale', ['class'=>'input input--area', 'placeholder' => 'Write a small bio about you... (MAX 140 char.)', 'maxlength'=>'140']); ?>
        <?= Html::error($model, 'presentazione_personale'); ?>

    </div>
    <div class="form-group form-group--last">
        <div class="register__subgroup">
            <label class="form-group__label">Remote work</label>
            <div id="remote-work" class="select js-select" data-eui-dropdown>
                <div class="select__inner dd-eui-dropdown" data-eui-dropdown-depth="1">
                    <div class="select__value js-select-value"><?= $model->remote_work ?></div>
                    <div class="select__items dd-eui-drop">
                        <?php
                        $work_list = ['Yes'=>'Yes','No'=>'No','Maybe'=>'Maybe'];
                        ?>
                        <?php foreach($work_list as $key => $item) { ?>
                            <input <?= $model->remote_work === $key?'checked':'' ?> id="effort-<?= $key ?>" class="none js-select-option" type="radio" name="SignupExtraForm[remote_work]" value="<?= $key ?>" data-text="<?= $item ?>" />
                            <label class="select__option" for="effort-<?= $key ?>"><?= $item ?></label>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?= Html::error($model, 'presentazione_breve'); ?>
        </div>
        <div class="register__subgroup">
            <label class="form-group__label">Effort</label>
            <div id="effort" class="select js-select" data-eui-dropdown>
                <div class="select__inner dd-eui-dropdown" data-eui-dropdown-depth="1">
                    <div class="select__value js-select-value"><?= $model->effort ?></div>
                    <div class="select__items dd-eui-drop">
                        <?php
                        $work_list = ['full-time'=>'full-time','part time'=>'part time','occasional'=>'occasional'];
                        ?>
                        <?php foreach($work_list as $key => $item) { ?>
                            <input <?= $model->effort === $key?'checked':'' ?>  id="effort-<?= $key ?>" class="none js-select-option" type="radio" name="SignupExtraForm[effort]" value="<?= $key ?>" data-text="<?= $item ?>" />
                            <label class="select__option" for="effort-<?= $key ?>"><?= $item ?></label>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <?= Html::error($model, 'presentazione_personale'); ?>
        </div>
    </div>
</div>
<div class="register__col register__col--last">
    <div class="sharing-platform">
        <p class="sharing-platform__title">Sharing platform</p>
        <?php if(!$model->sharing): ?>
        <button class="sharing-platform__open" type="button" data-eui-bundle-id="sharing-platform" data-eui-bundle-action="toggle" data-eui-bundle data-eui-bundle-outside></button>
        <?php endif; ?>
        <input type="hidden" id="sharing-value" name="SignupExtraForm[sharing]" value="<?= $model->sharing?:0 ?>">
        <div class="sharing-platform__inner <?= $model->sharing == 1?'bundle-eui-container--active':'' ?>" data-eui-bundle-outside>
            <div class="form-group">
                <label class="form-group__label">Purpose</label>
                <div id="purpose" class="select js-select" data-eui-dropdown>
                    <div class="select__inner dd-eui-dropdown" data-eui-dropdown-depth="1">
                        <div class="select__value js-select-value"><?= $model->sharing_purpose ?></div>
                        <div class="select__items dd-eui-drop">
                            <?php
                            $purpose_list = [
                                'Business',
                                'Non-profit',
                                'Idea/Passion',
                            ];
                            ?>
                            <?php foreach($purpose_list as $key => $item) { ?>
                                <input <?= $model->sharing_purpose === $item?'checked':'' ?>  id="purpose-<?= $key ?>" class="none js-select-option" type="radio" name="SignupExtraForm[sharing_purpose]" value="<?= $item ?>" data-text="<?= $item ?>" />
                                <label class="select__option" for="purpose-<?= $key ?>"><?= $item ?></label>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-group__label">
                      <span class="relative">
                        Your role
                        <button class="form-group__info" type="button">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--top" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"/>
                          </svg>
                        </button>
                        <span class="tip">
                          <span class="tip__item">
                            <span class="bold">Partner: </span>short definition
                          </span>
                          <span class="tip__item">
                            <span class="bold">Contributor: </span>short definition
                          </span>
                          <span class="tip__item">
                            <span class="bold">Fan: </span>short definition
                          </span>
                          <span class="tip__item">
                            <span class="bold">Sponsor: </span>short definition
                          </span>
                        </span>
                      </span>
                </label>
                <div id="role" class="select js-select" data-eui-dropdown>
                    <div class="select__inner dd-eui-dropdown" data-eui-dropdown-depth="1">
                        <div class="select__value js-select-value"><?= $model->sharing_role ?></div>
                        <div class="select__items dd-eui-drop">
                            <?php
                            $role_list = [
                                'Partner',
                                'Contributor',
                                'Fan',
                                'Sponsor',
                            ];
                            ?>
                            <?php foreach($role_list as $key => $item) { ?>
                                <input <?= $model->sharing_role === $item?'checked':'' ?>  id="role-<?= $key ?>" class="none js-select-option" type="radio" name="SignupExtraForm[sharing_role]" value="<?= $item ?>" data-text="<?= $item ?>" />
                                <label class="select__option" for="role-<?= $key ?>"><?= $item ?></label>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-group__label" for="register-explanation">Explanation</label>
                <textarea id="register-explanation" class="input input--area input--area_high" placeholder="Tell us something more..." name="SignupExtraForm[sharing_expl]"><?= $model->sharing_expl ?></textarea>
            </div>
        </div>
    </div>
    <div class="register__continue">
        <button class="button button--default button--default_bigger button--yellow" type="submit">
            <span class="button__text">Continue</span>
        </button>
    </div>
</div>
</fieldset>

<?php ActiveForm::end(); ?>
<?php
$script = <<< JS
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            // $('#blah').attr('src', e.target.result);
            document.getElementById('upload-avatar').style.backgroundImage = "url('"+e.target.result+"')";
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
$('.sharing-platform__open').click(function() {
  $('#sharing-value').val(1);
});

JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>
