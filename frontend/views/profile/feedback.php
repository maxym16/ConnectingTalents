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
      <p class="feedback__title">Feedback page UTC</p>
      <div class="feedback__nav">
        <span class="feedback__nav-item t-eui-tab-nav-item t-eui-tab-nav-item--active" data-eui-tab="1">Rate our Talent Coding</span>
      </div>
      <div class="feedback__content">
        <div class="feedback__tab t-eui-tab-item t-eui-tab-item--active" data-eui-tab="1">
          <div class="feedback__form">
            <?php $form = ActiveForm::begin(['enableClientScript' => false]); ?>
              <fieldset class="form">
                <?= Html::activeHiddenInput($model, 'date', ['id'=>'feedback-idea-title', 'class'=>'input', 'value'=>$date]); ?>
                <div class="form-group">
                  <label class="form-group__title" for="feedback-idea-title">How much do you agree with the outcome of the Basic UTC?</label>
                  <div class="rating">
                      
                    <input 
                    type="radio" class="rating-input"
                    id="rating-input-1-5" name="rating-input-1-5">
                    <label for="rating-input-1-5" class="rating-star"></label>
                    <input 
                    type="radio" class="rating-input"
                    id="rating-input-1-4" name="rating-input-1-4">
                    <label for="rating-input-1-4" class="rating-star"></label>
                    <input 
                    type="radio" class="rating-input"
                    id="rating-input-1-3" name="rating-input-1-3">
                    <label for="rating-input-1-3" class="rating-star"></label>
                    <input 
                    type="radio" class="rating-input"
                    id="rating-input-1-2" name="rating-input-1-2">
                    <label for="rating-input-1-2" class="rating-star"></label>
                    <input 
                    type="radio" class="rating-input"
                    id="rating-input-1-1" name="rating-input-1-1">
                    <label for="rating-input-1-1" class="rating-star"></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-group__title" for="feedback-idea-title">How much did the outcome of the Basic UTC surprise you?</label>
                  <div class="rating">
                    <input type="radio" class="rating-input"
                    id="rating-input-2-5" name="rating-input-2-5">
                    <label for="rating-input-2-5" class="rating-star"></label>
                    <input type="radio" class="rating-input"
                    id="rating-input-2-4" name="rating-input-2-4">
                    <label for="rating-input-2-4" class="rating-star"></label>
                    <input type="radio" class="rating-input"
                    id="rating-input-2-3" name="rating-input-2-3">
                    <label for="rating-input-2-3" class="rating-star"></label>
                    <input type="radio" class="rating-input"
                    id="rating-input-2-2" name="rating-input-2-2">
                    <label for="rating-input-2-2" class="rating-star"></label>
                    <input type="radio" class="rating-input"
                    id="rating-input-2-1" name="rating-input-2-1">
                    <label for="rating-input-2-1" class="rating-star"></label>
                  </div>
                </div>                      
                <div class="form-group">
                <label class="form-group__title" for="feedback-idea-title">How much would vou recommend our Basic UTC to your friends?</label>
                <div class="rating">
                  <input type="radio" class="rating-input"
                  id="rating-input-3-5" name="rating-input-3-5">
                  <label for="rating-input-3-5" class="rating-star"></label>
                  <input type="radio" class="rating-input"
                  id="rating-input-3-4" name="rating-input-3-4">
                  <label for="rating-input-3-4" class="rating-star"></label>
                  <input type="radio" class="rating-input"
                  id="rating-input-3-3" name="rating-input-3-3">
                  <label for="rating-input-3-3" class="rating-star"></label>
                  <input type="radio" class="rating-input"
                  id="rating-input-3-2" name="rating-input-3-2">
                  <label for="rating-input-3-2" class="rating-star"></label>
                  <input type="radio" class="rating-input"
                  id="rating-input-3-1" name="rating-input-3-1">
                  <label for="rating-input-3-1" class="rating-star"></label>
                </div>
              </div>

              <div class="form-group form-group--last">
                <div class="feedback__cell feedback__cell--type_field">
                  <label class="form-group__title" for="feedback-idea-email">Please help us improve by explaining your rating</label>
                  <?= Html::activeTextarea($model, 'text', ['id'=>'register-about', 'class'=>'input input--area','maxlength'=>350, 'placeholder' => 'Write a small bio about you... (MAX 350 char.)']); ?>
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
          <!--                   <p class="feedback__notice-title">Add a new idea</p> -->
          <center>
            <br><br><br>
            <p class="feedback__notice-sentence">
              Please send us more detailed feedback, or write down your questions. What would you like to further understand?
            </p>
            <p class="feedback__notice-sentence">
              Our staff will be glad to reply to your message
            </p>
          </center>
        </div>
      </div>
      <div class="feedback__tab t-eui-tab-item" data-eui-tab="2">
        <div class="feedback__form">
          <form>
            <fieldset class="form">
              <div class="form-group">
                <label class="form-group__title" for="feedback-problem-title">Title</label>
                <input id="feedback-problem-title" class="input" type="text" name="" value="" placeholder="Click to insert text" />
              </div>
              <div class="form-group">
                <label class="form-group__title" for="feedback-problem">Description</label>
                <textarea id="feedback-problem" class="input input--area" name="" placeholder="Click to insert text"></textarea>
              </div>
              <div class="form-group form-group--last">
                <div class="feedback__cell feedback__cell--type_field">
                  <label class="form-group__title" for="feedback-problem-email">Your email</label>
                  <input id="feedback-problem-email" class="input" type="email" name="" value="" placeholder="Click to insert text" />
                </div>
                <div class="feedback__cell feedback__cell--type_button">
                  <button class="button button--small button--yellow feedback__button" type="submit">
                    <span class="button__text button__text--small">Submit</span>
                  </button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="feedback__notice">
          <p class="feedback__notice-title">What is the problem?</p>
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
