<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$date=date('Y-m-d H:i:s');
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
            <button class="feedback__nav-item t-eui-tab-nav-item t-eui-tab-nav-item--active" type="button" data-eui-tab="1">Share your questions and ideas</button>
            <button class="feedback__nav-item t-eui-tab-nav-item" type="button" data-eui-tab="2">Tell us what you (don’t) like</button>
        </div>
        <div class="feedback__content">
            <div class="feedback__tab t-eui-tab-item t-eui-tab-item--active" data-eui-tab="1">
                <div class="feedback__form">
                        <?php $form = ActiveForm::begin(['enableClientScript' => false]); ?>
                        <fieldset class="form">
                                <?= Html::activeHiddenInput($model, 'date', ['id'=>'feedback-idea-title', 'class'=>'input', 'value'=>$date]); ?>
                            <div class="form-group">
                                <label class="form-group__title" for="feedback-idea-title">Title</label>
                                <?= Html::activeTextInput($model, 'title', ['id'=>'feedback-idea-title', 'class'=>'input', 'placeholder' => 'Click to insert text']); ?>
                            </div>
                            <div class="form-group">
                                <label class="form-group__title" for="feedback-idea">Description</label>
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
                        Did you visit our website and still have questions? Thank you for telling us where we can improve our clarity. This can also trigger new ideas.
                        Feel free to share! We may get in touch with questions.
                    </p>
                    <p class="feedback__notice-sentence">
                        Help us improve your experience with Connecting Talents.
                    </p>
                </div>
            </div>
            <div class="feedback__tab t-eui-tab-item" data-eui-tab="2">
                <div class="feedback__form">
                    <?php $form = ActiveForm::begin(['enableClientScript' => false]); ?>
                        <fieldset class="form">
                                <?= Html::activeHiddenInput($model, 'date', ['id'=>'feedback-idea-title', 'class'=>'input', 'value'=>$date]); ?>
                            <div class="form-group">
                                <label class="form-group__title" for="feedback-problem-title">Title</label>
                                <?= Html::activeTextInput($model, 'title', ['id'=>'feedback-problem-title', 'class'=>'input', 'placeholder' => 'Click to insert text']); ?>
                            </div>
                            <div class="form-group">
                                <label class="form-group__title" for="feedback-problem">Description</label>
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
                        Tell us what you like and/or what you would like to have differently. We love critical thinkers and all contributions are welcome. We may get in touh with you in case we need clarifications.
                    </p>
                    <p class="feedback__notice-sentence">
                        Help us improve your experience with Connecting Talents.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
