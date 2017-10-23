<?php

/**
 * OPEN 2.0
 * @package    lispa\amos\basic\template
 */
//use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Connecting Talents | Talent';

//Url::to(['/showcaseopp'])
?>
<div class="talent">
    <div class="talent__inner">
        <div class="talent__wrap">
            <div class="talent__intro">
                <div class="talent__text">
                    <h1 class="talent__title">Discover your talents</h1>
                    <div class="talent__desc">
                        You are a Talent. You might have difficulty defining what that means. You probably  have heard people around you use the concept of talent.

                        We believe Talent is that mix of inner strenths that makes us unique. It is not just about your capabilities and degrees;  it is about what drives you and it clearly shows in your passions.

                    </div>
                    <div class="talent__register">
                        <?php if (Yii::$app->user->isGuest) { ?>
                            <a class="button button--default button--white" href="<?= Url::to(['/site/signup']) ?>">
                                <span class="button__text">register</span>
                            </a>
                        <?php }else{ ?>
                            <a class="button button--default button--white" href="<?= Url::to(['/profile']) ?>">
                                <span class="button__text">discover yourself</span>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="talent-icons">
                <p class="talent-icons__title">Your Talent is:</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="talent-icons__general-icon" width="37" height="56" viewBox="0 0 29 44" fill="currentColor">
                    <circle cx="15.3" cy="28.9" r="6.3"/>
                    <path d="M0.3,29.3c0,8.3,6.7,14.5,15.1,14.5c8.3,0,13.4-6.9,13.4-13.5c0-3.2-1-6.1-3.2-8.2c-2.5-2.3-5.3-3-9-3
          c4.8,0.9,7.8,5.6,7.8,10.2c0,4.9-4,9-9,9c-4.9,0-9-4-9-9c0-5,1.5-7.2,7.5-12.5c7.8-6.9,1.5-16.5,1.5-16.5s1.7,5.9-2.1,9.7
          c-1.5,1.5-4.2,3.4-7.8,7C2.5,19.9,0.3,24.8,0.3,29.3"/>
                </svg>
                <div class="talent-icons__variants">
                    <button class="talent-icon talent-icon--drivers" type="button">
                    <span class="talent-icon__inner">
                      <svg xmlns="http://www.w3.org/2000/svg" class="talent-icon__image talent-icon__image--drivers" width="48" height="48" viewBox="0 0 58 58" fill="currentColor">
                        <path d="M36.5,4.1c-3.1-1.8-6.4-2-9.9-1.8c-0.7,0-1.2-0.1-1.7-0.6c-1.3-1.2-2.8-1.9-4.6-1.7c-2.3,0.3-4.1,1.4-4.9,3.6
                          c-0.8,2.1-0.9,4.2,0.9,6c1.6,1.7,3.5,2.5,5.8,2c2.3-0.5,3.8-2,4.4-4.2c0.2-0.6,0.4-1.1,1.1-1.3C30.8,5.3,34,5,37.2,6.3
                          c2.7,1.1,4.8,3,6.8,5C42,8.4,39.5,5.9,36.5,4.1z M22.9,8c-1.2,1.2-3.2,1.2-4.4-0.1c-1.1-1.2-1.2-3.1,0-4.3c1.2-1.2,3.1-1.2,4.3,0
                          C24.1,4.9,24.1,6.8,22.9,8z"/>
                        <path d="M4.1,20.3c-1.8,3.1-2,6.4-1.8,9.9c0,0.7-0.1,1.2-0.6,1.7c-1.2,1.3-1.9,2.8-1.7,4.6c0.3,2.3,1.3,4.1,3.6,4.9
                          c2.1,0.8,4.2,0.9,6-0.9c1.7-1.6,2.5-3.5,2-5.8c-0.5-2.3-2-3.8-4.2-4.4c-0.6-0.2-1.1-0.4-1.3-1.1C5.3,26,5,22.7,6.3,19.5
                          c1.1-2.7,3-4.8,5-6.8C8.4,14.8,5.9,17.2,4.1,20.3z M8,33.9C9.2,35.1,9.2,37,8,38.2c-1.2,1.1-3.1,1.2-4.3,0c-1.2-1.2-1.2-3.1,0-4.3
                          C4.9,32.7,6.8,32.7,8,33.9z"/>
                        <path d="M21.5,53.9c3.1,1.8,6.5,2,9.9,1.8c0.7,0,1.2,0.1,1.7,0.6c1.3,1.2,2.8,1.9,4.6,1.7c2.3-0.3,4.1-1.3,4.9-3.6
                          c0.8-2.1,0.9-4.2-0.9-6c-1.6-1.7-3.5-2.5-5.8-2c-2.3,0.5-3.8,2-4.4,4.2c-0.2,0.6-0.4,1.1-1.1,1.3c-3.2,0.8-6.5,1.1-9.6-0.2
                          c-2.7-1.1-4.8-3-6.8-5C16,49.6,18.5,52.1,21.5,53.9z M35.1,50c1.2-1.2,3.2-1.2,4.4,0.1c1.2,1.2,1.2,3.1,0,4.3
                          c-1.2,1.2-3.1,1.2-4.3,0C33.9,53.1,33.9,51.2,35.1,50z"/>
                        <path d="M53.9,37.7c1.8-3.1,2-6.4,1.8-9.9c0-0.7,0.1-1.2,0.6-1.7c1.2-1.3,1.9-2.8,1.7-4.6c-0.3-2.3-1.4-4.1-3.6-4.9
                          c-2.1-0.8-4.2-0.9-6,0.9c-1.7,1.6-2.5,3.5-2,5.8c0.5,2.3,2,3.8,4.2,4.4c0.6,0.2,1.1,0.4,1.3,1.1c0.8,3.2,1.1,6.5-0.2,9.6
                          c-1.1,2.7-3,4.8-5,6.8C49.6,43.2,52.1,40.8,53.9,37.7z M50,24.1C48.8,23,48.8,21,50,19.8c1.2-1.1,3.1-1.2,4.3,0
                          c1.2,1.2,1.2,3.1,0,4.3C53.1,25.3,51.2,25.3,50,24.1z"/>
                      </svg>
                      <span class="talent-icon__name">drivers</span>
                    </span>
                  </button>
                  <button class="talent-icon talent-icon--passions" type="button">
                    <span class="talent-icon__inner">
                      <svg xmlns="http://www.w3.org/2000/svg" class="talent-icon__image  talent-icon__image--passions" width="35" height="33" viewBox="0 0 35 33" fill="currentColor">
                        <path  d="M31.6,6.5l-1.3-1.3l0.4-0.4c0.1-0.1,0.3-0.3,0.4-0.4c0.3-0.3,0.5-0.5,0.7-0.8c1.2-1.5,0.5-2.3,0.3-2.5
                          c-0.7-0.7-1.7-0.6-2.6,0.1c-0.2,0.1-0.3,0.3-0.5,0.4c-5,5-10,10-14.9,15c-0.2,0.2-0.8,0.8-0.9,1l-0.7,0.7l-0.3-1.1
                          c0-0.3-0.4-1.2-0.6-1.4c-1.1-1.1-2.2-1.8-3.6-2c-1.5-0.2-2.9,0.2-4.3,1.2c-1.7,1.3-2.8,3.1-3.3,5.5c-0.1,0.5-0.1,0.9-0.2,1.4
                          c0,0.2-0.1,0.5-0.1,0.7c0,0.1,0,0.2-0.1,0.3l0,0v2.4l0.1,0.5c0,0.4,0.1,0.9,0.2,1.3c0.2,1.6,0.6,3.2,1.1,4.7c0,0,0,0,0,0
                          c1.8,0.6,3.6,1,5.5,1.1c2.2,0.2,4.1,0.1,5.9-0.3c2.5-0.6,4.3-1.8,5.5-3.7c1.5-2.5,1.1-5.5-1-7.5l-0.1-0.1
                          c-0.3-0.3-0.6-0.5-1.3-0.8L15,20.3l0.6-0.6c1.3-1.3,2.7-2.6,4-3.9c1.3-1.3,2.7-2.6,4-3.9l0.4-0.4l0.4,0.4c0.1,0.1,0.5,0.5,0.6,0.6
                          l1.2,1.2c0.7,0.7,1.3,1.3,2,2c0.5,0.5,1,0.7,1.6,0.5c0.6-0.2,1-0.6,1.1-1.2c0.1-0.5,0-1-0.5-1.5L30,12.9c-0.8-0.8-1.6-1.6-2.5-2.5
                          c-0.2-0.2-0.7-0.6-0.9-0.8l-0.4-0.4l1.9-1.9l3.7,3.7c0.2,0.2,0.4,0.4,0.6,0.6c0.3,0.3,0.7,0.4,1.1,0.4c0.7,0,1.2-0.4,1.5-1.2
                          c0,0,0-0.1,0-0.1v-0.6c-0.2-0.5-0.5-0.9-1-1.3C33.3,8.2,32.4,7.3,31.6,6.5z M15.4,24c1,1.2,0.9,2.5-0.1,3.7c-0.9,1-2,1.6-3.6,1.9
                          c-0.8,0.2-1.6,0.2-2.6,0.2l0,0c-0.8,0-1.7-0.1-2.7-0.2c-0.4-0.1-0.9-0.1-1.3-0.2c-0.2,0-0.4-0.1-0.7-0.1C4,29.3,3.7,29,3.6,28.6
                          c-0.4-2-0.6-3.8-0.5-5.4c0.1-1.8,0.4-3.1,1.1-4.3c0.4-0.7,0.9-1.2,1.6-1.6c0.9-0.6,2-0.5,2.9,0.1c1.2,0.9,1.8,2.2,1.9,3.8
                          c0,0.3,0,0.7,0.1,1l0,0c0.1,0,0.2,0,0.2,0c0.5,0,1.1,0.1,1.6,0.1C13.7,22.6,14.7,23.1,15.4,24z"/>
                      </svg>
                      <span class="talent-icon__name">passions</span>
                    </span>
                  </button>
                  <button class="talent-icon talent-icon--skills" type="button">
            <span class="talent-icon__inner">
              <svg xmlns="http://www.w3.org/2000/svg" class="talent-icon__image  talent-icon__image--skills" width="36" height="36" viewBox="0 0 31 31" fill="currentColor">
                        <path d="M31,24.9c0,0.4,0,0.9,0,1.3c-0.1,0.3-0.1,0.6-0.2,1c-0.2,0.5-0.4,0.6-0.8,0.2c-0.9-0.8-1.7-1.7-2.5-2.5
                          c-0.4-0.4-0.7-0.4-1,0c-0.5,0.5-1,1-1.5,1.5c-0.4,0.4-0.4,0.6,0,1c0.8,0.9,1.7,1.7,2.5,2.5c0.4,0.4,0.3,0.7-0.2,0.8
                          c-0.9,0.3-1.7,0.3-2.6,0.2c-3.3-0.6-5.3-4.2-4-7.4c0.1-0.2,0.1-0.3-0.1-0.5c-1.5-1.5-3-3-4.5-4.4c-0.1-0.1-0.1-0.1-0.2-0.2
                          c-0.1,0.1-0.1,0.2-0.2,0.3c-3,3-6,6.1-9.1,9.1c-0.3,0.3-0.6,0.5-0.9,0.7c-1.7,0.8-3.4,1.7-5.2,2.5c-0.1,0.1-0.3,0-0.4,0
                          c0-0.1,0-0.2,0-0.3c0-0.1,0.1-0.1,0.1-0.2c0.8-1.6,1.5-3.2,2.3-4.8c0.2-0.5,0.5-0.9,0.9-1.2c3-3,6-6,9-9c0.1-0.1,0.2-0.1,0.4-0.2
                          c-1.7-1.7-3.3-3.2-4.9-4.8c-0.1-0.1-0.2-0.1-0.3,0c-0.7,0.3-1.3,0.4-2.1,0.4c-2.4,0.1-4.7-1.6-5.3-3.9C0.1,6.6,0.1,6.4,0,6.1
                          c0-0.4,0-0.9,0-1.3c0.1-0.3,0.1-0.6,0.2-0.9c0.2-0.6,0.4-0.7,0.9-0.2c0.8,0.8,1.7,1.7,2.5,2.5c0.4,0.4,0.7,0.4,1,0
                          c0.5-0.5,1-1,1.5-1.5c0.4-0.4,0.4-0.6,0-1C5.3,2.8,4.5,1.9,3.6,1.1C3.2,0.7,3.3,0.4,3.8,0.2c0.3-0.1,0.6-0.2,1-0.2
                          c0.4,0,0.8,0,1.3,0c0.1,0,0.1,0,0.2,0.1c3.4,0.5,5.5,4.2,4.2,7.4c-0.1,0.2-0.1,0.3,0.1,0.5c1.5,1.5,3,3,4.5,4.4
                          c0.1,0.1,0.1,0.1,0.2,0.2c3.1-3.1,6.2-6.2,9.3-9.3c1.1,1.1,2.2,2.2,3.3,3.3c-3.1,3.1-6.2,6.2-9.3,9.3c0,0,0,0.1,0,0.1
                          c1.5,1.5,3.1,3.1,4.6,4.6c0.1,0.1,0.2,0.1,0.4,0c3.1-1.3,6.6,0.5,7.4,3.9C30.9,24.6,31,24.7,31,24.9z"/>
                        <path d="M31,3.1c-0.2,0.3-0.4,0.6-0.6,0.8c-0.6,0.6-1.2,1.2-1.8,1.8c-1.1-1.1-2.2-2.2-3.3-3.3
                          c0.2-0.2,0.5-0.5,0.7-0.7c0.4-0.4,0.7-0.7,1.1-1.1c0.2-0.2,0.5-0.4,0.7-0.6c0.2,0,0.4,0,0.7,0c1,0.7,1.8,1.5,2.5,2.5
                          C31,2.7,31,2.9,31,3.1z"/>
                      </svg>
              <span class="talent-icon__name">skills</span>
            </span>
                    </button>
                </div>
            </div>
            <div class="talent__summery">
                <div class="talent__definition">
                    Our Unique Talent Coding system (UTC) allows you to discover what really shapes your decisions and points towards what engages you at work.
                </div>
<!--                <p class="talent__phrase">Play our free game to try it out!</p> -->
            </div>
        </div>
    </div>
    <div class="talent__cta">CTA to play the game</div>
<!--    <a class="talent__play" href="#">
        <span class="talent__play-text">Play</span>
    </a>
-->    <div class="talent__play-image bg-image"></div>
</div>
<div class="driver">
    <div class="driver__inner">
        <h2 class="driver__title">These are your Drivers</h2>
        <div class="driver__desc">
            Your driver relates to the innermost source of motivation.  It shows in those things you do most naturally, that give you a profound satisfaction.
        </div>
    </div>
</div>
<div class="elements">
    <div class="element element--align_right">
        <svg xmlns="http://www.w3.org/2000/svg" class="element__icon element__icon--water icon icon--middle" width="44" height="67" viewBox="0 0 37 56" fill="currentColor">
            <path d="M34.4,29.3c-1.4-2.5-3.1-4.8-4.8-7.1c-0.4-0.6-0.9-1.2-1.3-1.9l-0.3-0.4c-1.9-2.7-3.9-5.5-5.5-8.5
      c-0.8-1.5-1.8-3.6-2.2-5.9C20.1,4.3,20,3.2,19.9,2c0-0.4-0.1-0.9-0.1-1.3c0-0.1,0-0.2,0-0.2c-2.9,2.8-5.1,5.2-6.9,7.6
      c-2,2.7-3.8,5.5-5.4,8.2c-2.3,3.9-4,7.5-5.3,11.1c-0.9,2.4-1.5,4.5-1.9,6.7c-0.5,2.6-0.4,5.3,0.3,7.9c1,3.7,3,6.9,6,9.4
      c2.6,2.2,5.6,3.5,8.9,4c0.4,0.1,0.9,0.1,1.3,0.2l0.5,0.1h2c0.1,0,0.2-0.1,0.3-0.1c2.4-0.2,4.6-0.8,6.7-1.8c2.5-1.2,4.7-3,6.5-5.2
      c1.2-1.5,2.1-3.2,2.7-4.9c0.8-2.1,1.2-4.4,1.1-6.6C36.8,34.1,35.6,31.6,34.4,29.3z M33.5,40.2c-0.5,2.7-1.7,5.1-3.5,7.1
      c-2.7,3-5.9,4.7-9.8,5.1c-0.6,0.1-1.2,0.1-1.8,0.1l0,0c-3.4,0-6.5-1.1-9.2-3.2c-2.5-1.9-4.3-4.5-5.3-7.5c-0.8-2.5-0.9-5.3-0.4-8
      c1-4.5,2.8-8.5,4.2-11.5c1.9-3.8,4-7.4,6.4-10.9c0.4-0.6,0.9-1.2,1.3-1.8l0.4-0.5c0.1-0.1,0.2-0.2,0.3-0.4l1.2-1.4l0.8,2
      c0.1,0.3,0.2,0.6,0.3,0.8c1.1,2.7,2.6,5.3,4.7,8.4c1.1,1.6,2.2,3.1,3.3,4.7c1.1,1.5,2.2,3.1,3.3,4.6c1.5,2.2,2.6,4.2,3.4,6.2
      C33.9,35.8,34,37.8,33.5,40.2z"/>
            <path d="M11.5,39.8c-1.2-2.8-1.1-5.7-0.9-8.6c0.1-1.2,0.3-2.5,0.5-3.7c-2.2,2.3-3.4,5-3.6,8.2c-0.2,3.1,0.8,5.8,2.7,8.1
      c1.6,1.9,3.6,3.3,6.2,3.7c0.8,0.1,1.6,0.2,2.5,0c-0.5-0.3-0.9-0.5-1.2-0.7C14.8,45.2,12.8,42.8,11.5,39.8z"/>
        </svg>
        <p class="element__title element__title--align_right">Water</p>
        <div class="element__desc">
            Water is eager to work in a team with other persons and feels happy when helping others and creating a good atmosphere around. With good listening and communication Water is an appreciated team member for the support to others.
        </div>
    </div>
    <div class="element element--align_left">
        <p class="element__title element__title--align_left">Earth</p>
        <svg xmlns="http://www.w3.org/2000/svg" class="element__icon element__icon--earth icon icon--middle" width="68" height="68" viewBox="0 0 57 56" fill="currentColor">
            <path d="M56.5,25.3c-0.1-0.6-0.3-1.2-0.4-1.8c-0.3-1.3-0.5-2.7-1-4C51.3,8.5,43.5,2,32,0.2c-0.2,0-0.3-0.1-0.5-0.1
      c-0.1,0-0.2-0.1-0.3-0.1L26,0l-0.1,0c-0.4,0.1-0.9,0.2-1.4,0.3c-1,0.2-2,0.4-2.9,0.6C10.3,3.7,2,13.3,0.7,24.8
      C-0.9,40,9.5,53.5,24.5,55.7c0.3,0,0.7,0.1,1,0.2l0.5,0.1l5.1,0l0.1,0c0.4-0.1,0.8-0.2,1.2-0.2c0.9-0.2,1.8-0.3,2.7-0.6
      c11.5-2.9,19.6-12.1,21.1-23.9c0-0.1,0-0.1,0.1-0.2c0-0.1,0.1-0.1,0.1-0.2l0-0.1v-5.2L56.5,25.3z M23.7,47.6c-0.2-1.1-0.7-2-1.1-3
      c-0.2-0.4-0.4-0.7-0.5-1.1c-0.5-1-0.4-2.3,0.3-3.3c0.7-1.1,1.9-1.7,3.2-1.6c0.2,0,0.5,0.2,0.8,0.4c0.2,0.2,0.4,0.3,0.6,0.5
      c0.8,0.6,1.5,1.2,2.1,1.9c2.3,2.6,5.3,4.3,9.7,5.4c1.4,0.3,2.8,0.7,4.2,1l0.6,0.1c-3,2.8-9.9,5.1-15.7,5.1c-1.6,0-3-0.2-4.1-0.6
      c0-0.4,0-0.8,0-1.1C23.9,50.1,24,48.8,23.7,47.6z M32.5,40.4c-0.9-0.8-1.8-1.6-2.7-2.4c-0.5-0.4-0.9-0.8-1.4-1.3
      c-1.4-1.3-3.2-1.6-4.9-0.8c-1.5,0.7-2.7,1.5-3.6,2.4c-1.6,1.6-1.9,3.7-0.9,5.7c0.5,1,0.9,1.9,1.4,2.9c0.7,1.4,0.8,3,0.4,4.7
      c-4.6-0.6-12.8-7.6-14.6-12.3c0.1,0,0.3,0,0.4-0.1c0.9-0.1,1.8-0.3,2.7-0.5c1.6-0.4,2.9-0.9,4.1-1.4c1.6-0.7,1.8-1.8,1.6-3.2L15,34
      c-0.1-0.4-0.2-0.9-0.2-1.3c-0.1-1.4,0.4-1.9,1.8-2.1c0.4,0,0.7,0,1.1-0.1c0.7,0,1.4,0,2.2-0.2c1.1-0.3,2.1-1,2.8-1.7
      c1.3-1.5,2.5-3.1,3.6-4.7l0.3-0.4c1.1-1.6,1-3.6-0.2-4.8c-1.8-1.8-3.7-3.3-5.4-4.6c-0.2-0.2-0.5-0.3-0.9-0.3c-0.5,0-1,0.1-1.4,0.4
      c-0.8,0.5-1.4,1.1-2.1,1.8c-0.3,0.3-0.5,0.4-0.9,0.4l0,0c-0.1,0-0.2,0-0.4-0.1c-2.3-0.6-4.5-1.5-6.9-3.1c3.4-4.5,7.7-7.5,13-9.2
      c2.7-0.8,5.5-1.2,8.5-1C30.1,3,30.2,3,30.2,3c0,0,0,0.1,0,0.3c-0.1,2.5,0.7,4.8,2.4,6.8c0.9,1,1.8,2,2.6,2.9l0.3,0.4
      c1.1,1.1,2.5,1.6,4.1,1.5c0.3,0,0.6,0,1-0.1c0.4,0,0.7,0,1.1-0.1c0.1,0,0.3,0,0.3,0c0,0.1,0,0.2-0.1,0.3c-0.2,0.4-0.3,0.9-0.5,1.3
      c-0.4,1.3-0.9,2.4-1.5,3.4c-1.3,1.9-1.7,3.8-1.1,6c0.5,2.2,1.1,4.2,1.9,6.2c0.6,1.7,2,2.6,4,2.6l0.2,0c0.6,0,1.1,0,1.7-0.1
      c0.6,0,1.2-0.1,1.9-0.1c1.4,0,3,1.3,3.3,2.7c0,0.2,0,0.4-0.1,0.7c-1.1,2.7-2.7,5.1-4.7,7.2c-0.2,0.2-0.5,0.3-0.8,0.3
      c-4.2-0.5-7.8-1.5-11.2-3c-0.7-0.3-1.3-0.8-1.9-1.4C32.8,40.7,32.6,40.6,32.5,40.4z M13.9,19c2.2,0.7,3.9,0.2,5.1-1.3
      c0.2-0.2,0.5-0.5,0.8-0.7c0.1,0,0.1-0.1,0.2-0.1c0.3,0.3,0.6,0.5,0.9,0.8c1.1,0.9,2.2,1.9,3.2,2.9c0.4,0.4,0.3,0.9,0,1.3
      c-0.4,0.5-0.8,1.1-1.2,1.6c-0.8,1.1-1.6,2.2-2.5,3.2c-0.3,0.4-1,0.6-1.6,0.8l-0.3,0.1c-0.2,0.1-0.5,0-0.8,0c-0.2,0-0.3,0-0.5,0
      c-1.9,0-3.4,0.6-4.3,1.7c-0.9,1.1-1.2,2.6-0.9,4.5c0.1,0.5,0.2,1,0.1,1.1c-0.1,0.1-0.7,0.3-1,0.4c-1.4,0.4-2.9,0.7-4.3,1l-1.2,0.2
      c-0.1,0-0.2,0-0.2,0c-0.1,0-0.2,0-0.3-0.3c-2.3-7.1-1.7-13.9,1.8-20.4l1.2,0.6c1.4,0.7,2.8,1.4,4.2,2c0.5,0.2,0.9,0.3,1.4,0.5
      L13.9,19z M46.9,31.5c-0.8,0.1-1.4,0.2-1.9,0.2c-1.3,0-1.5-0.3-2.5-3.2c-0.4-1.3-0.7-2.7-0.8-4.2c0-0.7,0.2-1.5,0.6-2.2
      c1.2-2.2,2.4-4.5,2.8-7.1c0.1-1,0-1.7-0.4-2.2c-0.5-0.6-1.4-0.8-2-0.9c-0.5,0-1,0-1.5,0c-0.5,0-1,0.1-1.4,0
      c-0.9-0.1-1.5-0.3-1.8-0.6C36.5,10,35.3,8.5,34,6.9c-0.6-0.8-0.9-1.9-0.8-3.3c6.4,0.9,12.2,4.7,16.1,10.5c3.9,5.9,5.2,12.8,3.6,19.3
      c-1.3-1.3-2.9-2-4.9-2C47.7,31.4,47.3,31.4,46.9,31.5z"/>
            <path d="M30.5,28.8l-0.1,0c-1.9,0-3.3,1.4-3.4,3.3c0,1.8,1.4,3.4,3.1,3.5l0.1,0c1.7,0,3.4-1.7,3.4-3.5
      C33.6,30.2,32.3,28.9,30.5,28.8z M30.5,31.9c0,0,0.1,0.1,0.1,0.1c-0.1,0.1-0.3,0.2-0.4,0.3c0,0-0.1-0.1-0.1-0.1
      C30.3,32.1,30.4,32,30.5,31.9z M30.2,34.9C30.2,34.9,30.2,34.9,30.2,34.9L30.2,34.9L30.2,34.9z"/>
        </svg>
        <div class="element__desc">
            Earth likes practical action and working with your hands, getting things done, preferably in a structured way. In a team the EARTH driver often guarantees that agreed actions are executed.
        </div>
    </div>
    <div class="element element--align_right">
        <svg xmlns="http://www.w3.org/2000/svg" class="element__icon element__icon--fire icon icon--middle" width="62" height="81" viewBox="0 0 51 66" fill="currentColor">
            <path d="M50.3,33.5c-1-5.3-2.8-10.2-5.7-14.8c-1.3-2-3-3.6-4.7-5.5c0.2,1.6,0.4,3,0.5,4.4c0.2,2.1,0.2,4.3-0.6,6.3
      c-0.8,2-2.3,3-4,2.9c-1.4-0.1-2.6-0.9-3.4-2c-1.5-1.9-1.9-4.1-1.6-6.4c0.2-1.6,0.6-3.2,0.9-4.7c0.3-1.8,0.6-3.7,0.3-5.6
      c-0.7-3.5-4.3-7.1-8.1-7.9c0.3,1.1,0.5,2.2,0.7,3.3c0.6,2.9-0.1,5.2-2.7,6.8c-0.8,0.5-1.6,1.1-2.4,1.7c-4.1,3-6.3,7.1-6.1,12.2
      c0.1,1.6,0.4,3.1,0.6,4.7c0.3,2,0.1,3.9-1.5,5.3c-0.8,0.7-1.6,0.8-2.4,0.2c-0.4-0.3-0.7-0.6-1-0.9c-1.5-2-2-4.4-1.8-6.9
      c0.1-1.7,0.4-3.4,0.6-5.3c-0.4,0.5-0.7,0.9-1,1.3c-1.9,2.4-3.8,4.7-4.9,7.6c-2,5.2-2.1,10.4-0.8,15.7c1.5,6,4.5,11.2,9.4,15
      c5.4,4.2,11.6,5.6,18.3,4.8c7.1-0.8,12.7-4.1,16.8-9.9C50.3,49.1,51.9,41.6,50.3,33.5z M48.3,39.6c-0.3,8.6-3.7,15.6-11,20.4
      c-4.2,2.7-8.8,3.5-13.7,3.2c-5.8-0.4-10.7-2.8-14.6-7.1c-3.4-3.8-5.4-8.3-6.1-13.4c-0.6-4-0.3-7.8,1.2-11.6c0.1-0.3,0.3-0.7,0.4-1
      c0-0.1,0.1-0.1,0.2-0.2c0.2,0.7,0.3,1.3,0.6,1.9c0.6,1.7,1.5,3.3,2.9,4.4c1.8,1.4,4,1.3,5.8-0.2c2.2-1.9,2.8-4.3,2.4-7.1
      c-0.3-1.7-0.6-3.4-0.6-5.1c-0.1-4,1.6-7.2,4.8-9.6c1.1-0.9,2.3-1.6,3.5-2.4c2.1-1.5,3.3-3.5,3.2-6.1c0-0.1,0-0.2,0-0.4
      c1.2,1.2,1.8,2.5,2,4.1c0.2,2.2-0.3,4.3-0.8,6.5c-0.6,3-0.7,6,0.7,8.8c1.3,2.6,3.2,4.4,6.3,4.8c2.2,0.3,4-0.6,5.4-2.3
      c1.3-1.5,1.8-3.4,2.1-5.3c0-0.2,0-0.3,0.1-0.5c0.1,0,0.2-0.1,0.3-0.1c0.8,1.7,1.6,3.4,2.3,5.1C47.2,30.5,48.5,35,48.3,39.6z"/>
            <path d="M37.3,39.5c-1.9-2.3-4-4.4-5.9-6.7c-1.3-1.5-2.6-3.1-3.7-4.8c-1.5-2.4-2.2-5.1-2.2-7.9c0-0.9,0-1.7,0-2.8
      c-1.1,1-2.1,1.9-3,2.8c-3.1,3.1-4.2,6.9-2.9,11.1c0.7,2.5,1.9,4.9,2.8,7.4c0.6,1.5,1.2,3,1.6,4.6c0.6,2.7-1.4,4.8-4,4.4
      c-1.1-0.2-2.1-0.6-3-1.1c-1.7-1-2.7-2.7-3.4-4.5c-0.4-1-0.7-2.1-1.1-3.2c-0.5,1.1-1.1,2.2-1.5,3.2c-2.7,6.2-0.9,12.7,4.7,16.5
      c4.3,2.9,9.1,3.6,14.1,2.5c4.5-1,8-3.5,10.1-7.7c1.3-2.6,1.5-5.2,0.5-8C39.6,43.1,38.7,41.2,37.3,39.5z M37.5,52.1
      c-1.8,3.5-4.7,5.5-8.5,6.3c-4.5,0.9-8.7,0.3-12.4-2.5c-3.4-2.6-4.8-6-4.2-10.5c0.3,0.4,0.5,0.6,0.7,0.9c2,2.5,4.5,3.9,7.8,3.7
      c3.6-0.2,6.2-3.5,5.6-7.1c-0.4-2.5-1.5-4.7-2.5-6.9c-1-2.3-2-4.5-2.3-7c-0.2-2.1,0.1-4,1.3-5.8c0.3,1.1,0.6,2.2,1,3.3
      c1.1,3.1,3.2,5.6,5.3,7.9c2,2.2,4.1,4.3,5.9,6.7c1.1,1.4,1.8,3.1,2.5,4.7C38.8,48,38.5,50.1,37.5,52.1z"/>
        </svg>
        <p class="element__title element__title--align_right">Fire</p>
        <div class="element__desc">
            FIRE likes a fast paced environment, a competitive atmosphere, setting challenging goals gives and taking decisions. In a team setting, FIRE makes sure that the focus stays on the results to be reached.
        </div>
    </div>
    <div class="element element--align_left">
        <p class="element__title element__title--align_left">Air</p>
        <svg xmlns="http://www.w3.org/2000/svg" class="element__icon element__icon--air icon icon--middle" width="70" height="55" viewBox="0 0 60 47" fill="currentColor">
            <path d="M54.3,10.6c-2.6-0.6-5,0.1-6.8,2c-2.1,2.2-2.1,5.9-0.1,7.8c0.7,0.7,1.7,0.7,2.4,0.1c0.8-0.6,0.9-1.6,0.3-2.4
      c-0.5-0.7-0.7-1.6-0.4-2.3c0.2-0.7,0.8-1.3,1.7-1.6c1.4-0.5,2.7-0.2,3.8,0.7c1.1,1,1.5,2.4,1.1,3.9c-0.5,2.1-2.6,3.6-5,3.6h-4.5
      l-13.6,0c-6.1,0-12.3,0-18.4,0c-0.9,0-1.5,0.4-1.8,1.1c-0.2,0.6-0.2,1.1,0.2,1.6c0.4,0.5,1,0.8,1.7,0.8c2.9,0,5.8,0,8.8,0l9.6,0
      l8.8,0c3,0,6,0,9.1,0c0.9,0,1.7-0.1,2.5-0.3c2.3-0.5,4.3-2,5.4-3.9c1.1-1.9,1.4-4,0.8-6.1C58.9,13,57.1,11.2,54.3,10.6z"/>
            <path d="M39.2,31.7c-1.9,0-3.9-0.1-6.3-0.1c-1.6,0-3.2,0-4.8,0c-1.6,0-3.2,0-4.9,0h-0.5v0l-6.7,0c-2.8,0-5.6,0-8.4,0
      C7,31.6,6.4,31.8,6,32c-0.7,0.4-0.8,1.2-0.6,1.9c0.2,0.8,0.9,1.3,1.8,1.3c0.8,0,1.6,0,2.3,0l28.4,0c1.9,0,3.4,0.6,4.4,1.9
      c1,1.2,1.2,2.6,0.7,4c-0.5,1.3-1.5,2.1-2.9,2.3c-1.1,0.2-2.2-0.3-2.7-1c-0.4-0.5-0.5-1.2-0.4-1.8c0.1-0.5,0.1-1.1-0.2-1.6
      c-0.2-0.3-0.5-0.7-1.2-0.8c-0.1,0-0.3,0-0.4,0c-0.9,0-1.6,0.7-1.8,1.8c-0.4,2.5,0.4,4.4,2.5,5.9c2.2,1.5,4.6,1.6,7,0.4
      c2.5-1.3,3.8-3.3,4-6.2c0.1-2-0.7-4.1-2.1-5.7C43.3,32.7,41.2,31.7,39.2,31.7z"/>
            <path d="M21.6,16.8c1.9,0,3.9,0,5.8,0c1,0,2-0.2,2.9-0.4c4.3-1.3,6.8-5.2,6.2-9.6C36,3,32.4,0,28.5,0
      c-0.5,0-1.1,0.1-1.6,0.2c-3.2,0.7-5.1,2.6-5.8,5.6c-0.2,0.7-0.2,1.5-0.1,2.4C21.1,9,22,9.6,22.9,9.5c0.9-0.1,1.6-0.8,1.5-1.7
      c0-1.4,0.4-2.5,1.4-3.3c1.4-1,3.5-1.1,5-0.1c1.6,1,2.4,2.9,2,4.7c-0.5,2.5-2.7,4.2-5.3,4.2l-10.2,0c-5.1,0-10.2,0-15.3,0
      c-0.4,0-0.9,0.1-1.2,0.2c-0.7,0.3-1.1,1.1-0.9,2c0.2,0.8,0.9,1.4,1.9,1.4c2.1,0,4.1,0,6.2,0l6.9,0L21.6,16.8z"/>
        </svg>
        <div class="element__desc">
            Air likes the possibility to  solve complex problems, autonomy and organising your own work agenda as well as tasks that involve investigating. You have a strong potential for creativity so Air can contribute substantially to brainstorming sessions.
        </div>
    </div>
</div>
<div class="discover">
    <div class="discover__desc">
        By understanding your <span class="extrabold">unique talent</span> you can increase your opportunities and take ownership of your future.
    </div>
    <p class="discover__phrase extrabold">Discover now!</p>
    <div class="text-center">
            <?php if(Yii::$app->user->isGuest) { ?>
                <a class="button button--default button--default_bigger button--white" href="<?= Url::to(['/site/login']) ?>">
            <?php }
                  else { 
                    if(common\models\User::getRoleOfUser(Yii::$app->user->id)=='user_1'){ ?>
                <a class="button button--default button--default_bigger button--white" href="<?= Url::to(['/signup-extra/create']) ?>">
                    <?php } else { ?>
                <a class="button button--default button--default_bigger button--white" href="<?= Url::to(['/profile']) ?>">
            <?php } }?>
<!--        <a class="button button--default button--default_bigger button--white" href="#">-->
            <span class="button__text button__text--to-big">Discover</span>
        </a>
    </div>
</div>