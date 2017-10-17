<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Feedback | ';

$this->registerJsFile(
    '@web/assets/js/feedback-page.js',
    [
        'depends' => [\frontend\assets\CTAsset::className()],
        'position' => \yii\web\View::POS_END
    ]
);
?>
<div class="feedback">
    <div id="feedback-tabs" class="feedback__inner" data-eui-tabs>
        <p class="feedback__title">Got a feedback?</p>
        <div class="feedback__nav">
            <button class="feedback__nav-item t-eui-tab-nav-item t-eui-tab-nav-item--active" type="button" data-eui-tab="1">Add a new idea</button>
            <button class="feedback__nav-item t-eui-tab-nav-item" type="button" data-eui-tab="2">Report a bug</button>
        </div>
        <div class="feedback__content">
            <div class="feedback__tab t-eui-tab-item t-eui-tab-item--active" data-eui-tab="1">
                <div class="feedback__form">
                        <?php $form = ActiveForm::begin(['enableClientScript' => false]); ?>
                        <fieldset class="form">
                            <div class="form-group">
                                <label class="form-group__title" for="feedback-idea-title">Title</label>
                                <?= Html::activeTextInput($model, 'title', ['id'=>'feedback-idea-title', 'class'=>'input', 'placeholder' => 'Click to insert text']); ?>
                            </div>
                            <div class="form-group">
                                <label class="form-group__title" for="feedback-idea">Description of the idea</label>
                                <?= Html::activeTextarea($model, 'description', ['id'=>'feedback-idea', 'class'=>'input input--area', 'placeholder' => 'Click to insert text']); ?>
                            </div>
                            <div class="form-group form-group--last">
                                <div class="feedback__cell feedback__cell--type_field">
                                    <label class="form-group__title" for="feedback-idea-email">Your email</label>
                                    <?= Html::activeInput('email', $model, 'email', ['id'=>'feedback-idea-email', 'class'=>'input', 'placeholder' => 'Click to insert email']); ?>
                                </div>
                                <div class="feedback__cell feedback__cell--type_button">
                                    <button class="button button--small button--yellow feedback__button" type="submit">
                                        <span class="button__text button__text--small">Submit</span>
                                    </button>
                                </div>
                                <?= Html::activeInput('feedback', $model, 'type', ['value'=>'feedback']); ?>
                            </div>
                        </fieldset>
                        <?php ActiveForm::end(); ?>
                </div>
                <div class="feedback__notice">
                    <p class="feedback__notice-title">Add a new idea</p>
                    <p class="feedback__notice-sentence">
                        We would like to get your ideas on how our website should be improved. Tell us about new features we should consider or how we can improve existing features.
                    </p>
                    <p class="feedback__notice-sentence">
                        Best regards: ConnectingTalents.com
                    </p>
                </div>
            </div>
            <div class="feedback__tab t-eui-tab-item" data-eui-tab="2">
                <div class="feedback__form">
                    <?php $form = ActiveForm::begin(['enableClientScript' => false]); ?>
                        <fieldset class="form">
                            <div class="form-group">
                                <label class="form-group__title" for="feedback-problem-title">Title</label>
                                <?= Html::activeTextInput($model, 'title', ['id'=>'feedback-problem-title', 'class'=>'input', 'placeholder' => 'Click to insert text']); ?>
                            </div>
                            <div class="form-group">
                                <label class="form-group__title" for="feedback-problem">Description of the problem</label>
                                <?= Html::activeTextarea($model, 'description', ['id'=>'feedback-problem', 'class'=>'input input--area', 'placeholder' => 'Click to insert text']); ?>
                            </div>
                            <div class="form-group form-group--last">
                                <div class="feedback__cell feedback__cell--type_field">
                                    <label class="form-group__title" for="feedback-problem-email">Your email</label>
                                    <?= Html::activeInput('email', $model, 'email', ['id'=>'feedback-problem-email', 'class'=>'input', 'placeholder' => 'Click to insert email']); ?>
                                </div>
                                <?= Html::activeInput('hidden', $model, 'type', ['value'=>'bug']); ?>
                                <div class="feedback__cell feedback__cell--type_button">
                                    <button class="button button--small button--yellow feedback__button" type="submit">
                                        <span class="button__text button__text--small">Submit</span>
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="feedback__notice">
                    <p class="feedback__notice-title">Waht is the problem?</p>
                    <p class="feedback__notice-sentence">
                        Describe what happen to you, what you didn’t understand.
                    </p>
                    <p class="feedback__notice-sentence">
                        Help us to improve your experience with Connecting Talents!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
