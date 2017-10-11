<?php

/**
 * OPEN 2.0
 * @package    lispa\amos\basic\template
 */
//use yii\helpers\Html;
use yii\helpers\Url;
use common\models\UserProfileRole;
use common\models\UserProfileAgeGroup;

/* @var $this yii\web\View */
$upr1 = UserProfileRole::find()->where(['id' =>$profile->user_profile_role_id])->one();
$upag1 = UserProfileAgeGroup::find()->where(['id' =>$profile->user_profile_age_group_id])->one();

$this->title = 'Connecting Talents | '.$username;

$this->registerJsFile(
    '@web/assets/js/profile-page.js',
    [
        'depends' => [\frontend\assets\CTAsset::className()],
        'position' => \yii\web\View::POS_END
    ]
);

?>
<div class="profile">
    <div class="profile__inner">
        <div class="profile__row">
            <div class="profile__section profile__section--user profile__section--left">
                <div class="user">
                    <div class="user__section user__section--left">
                        <div class="user__text-info">
                            <p class="user__name"><?= $user->username ?> <?= $user->surname ?></p>
                            <p><?= $token ?></p>
                            <a class="edit-link edit-link--white" href="<?= Url::to(['/signup-extra/update?id='.$profile->id]) ?>">
                                <span class="edit-link__text">edit</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="edit-link__icon icon icon--middle" width="16" height="16" viewBox="0 0 84 84" fill="currentColor">
                                    <path fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M42,2c1.1,0,2.3,0.2,3.6,0.2c1.3,0.1,2.8,2.2,3.5,3.7c0.7,1.8,0.6,3.9,0.9,5.9c0.6,4.6,3.9,6.1,7.6,3.5
                            c1.9-1.3,3.8-2.7,5.7-4.1c1.7-1.2,3.3-1.1,4.8,0.4c6.6,6.6,7.4,6,1.7,13.5c-0.7,0.9-1.3,1.8-1.9,2.7c-1.2,1.9,0.2,5.3,2.4,5.8
                            c1.1,0.3,2.2,0.4,3.3,0.5c9.9,0.6,8.4,3,8.4,10.9c0,2.4-1.4,3.9-3.8,4.3c-2.4,0.4-4.9,0.6-7.3,1c-3.2,0.5-4.2,2.7-2.5,5.4
                            c0.5,0.8,1.1,1.7,1.7,2.5c4.5,6.7,3.8,10-3.2,14.1c-1.2,0.7-3.4,0.3-4.9-0.2c-1.2-0.4-2-1.7-3-2.6c-1.3-1.2-2.2-3-4.7-2
                            c-2.5,1-4.4,2.1-4.1,5.1c0,0.3-0.1,0.7-0.1,1C48.9,81.8,48,82,42,82c-6,0-6.9-0.2-7.8-8.3c0-0.3-0.2-0.7-0.1-1
                            c0.3-3-1.6-4.1-4.1-5.1c-2.6-1.1-3.4,0.8-4.7,2c-1,0.9-1.9,2.2-3,2.6c-1.5,0.5-3.7,0.9-4.9,0.2c-7.1-4.1-7.7-7.4-3.2-14.1
                            c0.6-0.8,1.1-1.7,1.7-2.5c1.7-2.7,0.6-4.9-2.5-5.4c-2.4-0.4-4.9-0.6-7.3-1C3.5,49,2.1,47.5,2.1,45c0-7.9-1.5-10.4,8.4-10.9
                            c1.1-0.1,2.2-0.2,3.3-0.5c2.1-0.5,3.5-4,2.4-5.8c-0.6-0.9-1.3-1.8-1.9-2.7c-5.6-7.4-4.9-6.9,1.7-13.5c1.5-1.5,3.1-1.6,4.8-0.4
                            c1.9,1.4,3.8,2.7,5.7,4.1c3.7,2.6,7,1.1,7.6-3.5c0.3-2,0.1-4.1,0.9-5.9c0.6-1.5,2.2-3.6,3.5-3.7C39.7,2.2,40.9,2,42,2z"/>
                                    <path fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M41.9,30.8c-6.4,0-11.5,5.1-11.5,11.4c0.1,6.2,5.2,11.2,11.5,11.1c6.3,0,11.5-4.9,11.5-11.1
                            c0.1-6.3-5-11.4-11.5-11.4H41.9z"/>
                                </svg>
                            </a>
                            <a class="user__email" href="mailto:<?= $user->email ?>"><?= $user->email ?></a>
                            <p class="user__level">Talent coding level 3</p>
                            <div class="user__info">
                                <p class="user__feature">more info TBD</p>
                                <p class="user__feature">more info TBD</p>
                                <p class="user__feature">more info TBD</p>
                            </div>
                        </div>
                    </div>
                    <div class="user__section user__section--right">
                        <p class="user__title">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="26" height="26" viewBox="0 0 58 58" fill="currentColor">
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
                            <span class="user__title-text uppercase">Drivers</span>
                        </p>
                        <div class="avatar">
                            <div class="avatar__inner">
                                <div class="avatar__image bg-image" style="background-image: url('<?= Url::to($profile->image) ?>');"></div>
                                <span class="avatar__circles avatar__circles--1"></span>
                                <span class="avatar__circles avatar__circles--2"></span>
                        <span class="avatar__element avatar__element--position_top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 99 99">
                            <circle fill-rule="evenodd" clip-rule="evenodd" fill="#F9C778" cx="49.5" cy="49.5" r="49.5"/>
                            <path fill="#FFFFFF" d="M77.5,46.8c-0.1-0.6-0.3-1.2-0.4-1.8c-0.3-1.3-0.5-2.7-1-4c-3.9-11-11.7-17.5-23.2-19.3
                              c-0.2,0-0.3-0.1-0.5-0.1c-0.1,0-0.2-0.1-0.3-0.1l-5.3,0l-0.1,0c-0.5,0.1-0.9,0.2-1.4,0.3c-1,0.2-2,0.4-2.9,0.6
                              c-11.2,2.8-19.6,12.4-20.9,24c-1.6,15.2,8.8,28.8,23.8,31c0.3,0.1,0.7,0.1,1,0.2l0.5,0.1l5.1,0l0.1,0c0.4-0.1,0.8-0.2,1.2-0.2
                              c0.9-0.2,1.8-0.3,2.7-0.6c11.6-2.9,19.7-12.1,21.2-24c0-0.1,0-0.2,0.1-0.2c0-0.1,0.1-0.1,0.1-0.2l0-0.1v-5.3L77.5,46.8z
                               M44.7,69.1c-0.2-1.1-0.7-2-1.1-3c-0.2-0.4-0.4-0.7-0.5-1.1c-0.5-1-0.4-2.3,0.3-3.3c0.7-1.1,1.9-1.7,3.3-1.6
                              c0.2,0,0.5,0.2,0.8,0.4c0.2,0.2,0.4,0.3,0.6,0.5c0.8,0.6,1.5,1.2,2.1,1.9c2.3,2.6,5.4,4.3,9.7,5.4c1.4,0.3,2.8,0.7,4.2,1l0.6,0.1
                              c-3,2.8-9.9,5.1-15.7,5.1c-1.6,0-3-0.2-4.1-0.6c0-0.4,0-0.8,0-1.1C44.8,71.7,44.9,70.4,44.7,69.1z M53.4,62
                              c-0.9-0.8-1.8-1.6-2.7-2.4c-0.5-0.4-0.9-0.8-1.4-1.3c-1.4-1.3-3.2-1.6-4.9-0.8c-1.5,0.7-2.7,1.5-3.6,2.4c-1.6,1.7-1.9,3.7-0.9,5.8
                              c0.5,1,0.9,1.9,1.4,2.9c0.7,1.4,0.8,3,0.4,4.7c-4.6-0.6-12.8-7.6-14.6-12.4c0.1,0,0.3,0,0.4-0.1c0.9-0.1,1.8-0.3,2.7-0.5
                              c1.6-0.4,2.9-0.9,4.1-1.4c1.6-0.7,1.8-1.8,1.6-3.2l-0.1-0.3c-0.1-0.4-0.2-0.9-0.2-1.3c-0.1-1.4,0.4-1.9,1.8-2.1
                              c0.4,0,0.7,0,1.1-0.1c0.7,0,1.4,0,2.2-0.2c1.1-0.3,2.1-1,2.8-1.7c1.3-1.5,2.5-3.2,3.6-4.8l0.3-0.4c1.1-1.6,1-3.6-0.2-4.9
                              c-1.8-1.8-3.7-3.3-5.4-4.6c-0.2-0.2-0.5-0.3-0.9-0.3c-0.5,0-1,0.1-1.4,0.4c-0.8,0.5-1.4,1.1-2.1,1.8c-0.3,0.3-0.5,0.4-0.9,0.4h0
                              c-0.1,0-0.2,0-0.4-0.1c-2.3-0.6-4.5-1.5-6.9-3.1c3.4-4.5,7.7-7.6,13-9.2c2.7-0.8,5.5-1.2,8.5-1c0.3,0,0.4,0.1,0.4,0.1
                              c0,0,0,0.1,0,0.3c-0.1,2.5,0.7,4.8,2.4,6.8c0.9,1,1.8,2,2.6,2.9l0.3,0.4c1.1,1.1,2.5,1.6,4.1,1.5c0.3,0,0.6,0,1-0.1
                              c0.4,0,0.7,0,1.1-0.1c0.2,0,0.3,0,0.3,0c0,0.1,0,0.2-0.1,0.3c-0.2,0.4-0.3,0.9-0.5,1.3c-0.4,1.3-0.9,2.4-1.5,3.4
                              c-1.3,1.9-1.7,3.9-1.1,6c0.5,2.2,1.1,4.2,1.9,6.2c0.6,1.7,2,2.6,4,2.6l0.2,0c0.6,0,1.1,0,1.7-0.1c0.6,0,1.2-0.1,1.9-0.1
                              c1.5,0,3,1.3,3.3,2.7c0,0.2,0,0.4-0.1,0.7c-1.1,2.7-2.7,5.1-4.7,7.2c-0.2,0.2-0.5,0.3-0.8,0.3c-4.2-0.5-7.8-1.5-11.2-3
                              c-0.7-0.3-1.3-0.8-1.9-1.4C53.8,62.3,53.6,62.1,53.4,62z M34.8,40.5c2.2,0.7,3.9,0.2,5.1-1.3c0.2-0.2,0.5-0.5,0.8-0.7
                              c0.1,0,0.1-0.1,0.2-0.1c0.3,0.3,0.6,0.5,0.9,0.8C42.9,40,44,41,45,42c0.4,0.4,0.3,0.9,0,1.4c-0.4,0.5-0.8,1.1-1.2,1.6
                              c-0.8,1.1-1.6,2.2-2.5,3.2c-0.3,0.4-1,0.6-1.6,0.8l-0.3,0.1c-0.2,0.1-0.5,0-0.8,0c-0.2,0-0.3,0-0.5,0c-1.9,0-3.4,0.6-4.3,1.7
                              c-0.9,1.1-1.2,2.7-0.9,4.5c0.1,0.5,0.2,1,0.1,1.1c-0.1,0.1-0.7,0.3-1,0.4c-1.4,0.4-2.9,0.7-4.4,1L26.3,58c-0.1,0-0.2,0-0.2,0
                              c-0.1,0-0.2,0-0.3-0.3c-2.3-7.1-1.7-13.9,1.8-20.5l1.2,0.6c1.4,0.7,2.8,1.4,4.2,2c0.5,0.2,0.9,0.3,1.4,0.5L34.8,40.5z M67.8,53
                              c-0.8,0.1-1.4,0.2-1.9,0.2c-1.3,0-1.5-0.3-2.5-3.2c-0.4-1.3-0.7-2.7-0.8-4.2c0-0.7,0.2-1.5,0.6-2.2c1.2-2.2,2.4-4.5,2.8-7.2
                              c0.1-1,0-1.7-0.4-2.2c-0.5-0.6-1.4-0.8-2-0.9c-0.5,0-1,0-1.5,0c-0.5,0-1,0.1-1.4,0c-0.9-0.1-1.5-0.3-1.8-0.6
                              c-1.3-1.3-2.5-2.7-3.8-4.4c-0.6-0.8-0.9-1.9-0.8-3.3c6.4,0.9,12.3,4.7,16.1,10.6c3.9,5.9,5.2,12.9,3.6,19.3c-1.3-1.3-2.9-2-4.9-2
                              C68.6,52.9,68.2,52.9,67.8,53z"/>
                            <path fill="#FFFFFF" d="M51.5,50.3l-0.1,0c-1.9,0-3.3,1.4-3.4,3.3c0,1.8,1.4,3.4,3.1,3.5l0.1,0c1.7,0,3.4-1.7,3.4-3.5
                              C54.6,51.7,53.3,50.4,51.5,50.3z M51.5,53.5c0,0,0.1,0.1,0.1,0.1c-0.1,0.1-0.3,0.2-0.4,0.3c0,0-0.1-0.1-0.1-0.1
                                C51.2,53.6,51.3,53.5,51.5,53.5z M51.2,56.5C51.2,56.5,51.2,56.5,51.2,56.5L51.2,56.5L51.2,56.5z"/>
                          </svg>
                          <span class="avatar__tip avatar__tip--earth">
                            <span class="bold">Earth: </span><span class="italic">a definition of driver features and related behaviours</span>
                          </span>
                        </span>
                        <span class="avatar__element avatar__element--active avatar__element--position_right">
                          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 99 99">
                            <circle fill-rule="evenodd" clip-rule="evenodd" fill="#F9C778" cx="49.5" cy="49.5" r="49.5"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M74.3,50c-1-5.2-2.8-10.2-5.7-14.8c-1.3-2-3-3.6-4.7-5.5c0.2,1.6,0.4,3,0.5,4.4c0.2,2.1,0.2,4.3-0.6,6.3
                              c-0.8,2-2.3,3-4,2.9c-1.4-0.1-2.6-0.9-3.4-2c-1.5-1.9-1.9-4.1-1.6-6.4c0.2-1.6,0.6-3.1,0.9-4.7c0.3-1.8,0.6-3.7,0.3-5.6
                              c-0.7-3.5-4.3-7.1-8.1-7.9c0.2,1.1,0.5,2.2,0.7,3.3c0.6,2.8-0.1,5.1-2.7,6.8c-0.8,0.5-1.6,1.1-2.4,1.7c-4.1,3-6.3,7.1-6.1,12.2
                              c0.1,1.6,0.4,3.1,0.6,4.7c0.3,2,0.1,3.9-1.5,5.3c-0.8,0.7-1.6,0.8-2.4,0.2c-0.4-0.3-0.7-0.6-1-0.9c-1.5-2-2-4.4-1.8-6.8
                              c0.1-1.7,0.4-3.4,0.6-5.3c-0.4,0.5-0.7,0.9-1,1.3c-1.8,2.4-3.7,4.7-4.9,7.6c-2,5.1-2.1,10.4-0.8,15.7c1.5,6,4.5,11.2,9.4,15
                              c5.4,4.2,11.6,5.6,18.3,4.8c7-0.8,12.7-4.1,16.8-9.8C74.2,65.6,75.9,58.1,74.3,50z M72.3,56.1c-0.3,8.5-3.7,15.6-11,20.4
                              c-4.1,2.7-8.8,3.5-13.7,3.2c-5.8-0.4-10.7-2.8-14.5-7.1c-3.4-3.8-5.4-8.3-6.1-13.4c-0.6-3.9-0.3-7.8,1.2-11.6
                              c0.1-0.3,0.3-0.7,0.4-1c0-0.1,0.1-0.1,0.2-0.2c0.2,0.7,0.3,1.3,0.6,1.9c0.6,1.7,1.5,3.3,2.9,4.4c1.8,1.4,4,1.3,5.8-0.2
                              c2.2-1.9,2.8-4.3,2.4-7.1c-0.3-1.7-0.6-3.4-0.6-5.1c-0.1-4,1.6-7.2,4.8-9.6c1.1-0.9,2.3-1.6,3.5-2.4c2.1-1.5,3.3-3.5,3.2-6.1
                              c0-0.1,0-0.2,0-0.4c1.2,1.2,1.8,2.5,2,4.1c0.2,2.2-0.3,4.3-0.8,6.4c-0.6,3-0.7,5.9,0.7,8.8c1.3,2.6,3.2,4.4,6.3,4.8
                              c2.2,0.3,4-0.6,5.4-2.3c1.3-1.5,1.8-3.4,2.1-5.3c0-0.2,0-0.3,0.1-0.5c0.1,0,0.2-0.1,0.3-0.1c0.8,1.7,1.6,3.4,2.3,5.1
                              C71.2,47,72.5,51.5,72.3,56.1z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M61.2,56c-1.9-2.3-4-4.4-5.9-6.7c-1.3-1.5-2.6-3.1-3.7-4.8c-1.5-2.4-2.2-5.1-2.1-7.9c0-0.9,0-1.7,0-2.8
                              c-1.1,1-2.1,1.9-3,2.8c-3.1,3.1-4.1,6.9-2.9,11.1c0.7,2.5,1.9,4.9,2.8,7.4c0.6,1.5,1.2,3,1.6,4.6c0.6,2.7-1.4,4.8-4,4.4
                              c-1.1-0.2-2.1-0.6-3-1.1c-1.7-1-2.7-2.7-3.4-4.5c-0.4-1-0.7-2.1-1.1-3.2c-0.5,1.1-1.1,2.2-1.5,3.2c-2.7,6.2-0.9,12.7,4.7,16.5
                              c4.3,2.9,9.1,3.6,14.1,2.5c4.5-1,8-3.5,10.1-7.7c1.3-2.6,1.5-5.2,0.5-8C63.6,59.6,62.6,57.7,61.2,56z M61.5,68.6
                              c-1.8,3.5-4.7,5.5-8.5,6.3c-4.5,0.9-8.7,0.3-12.4-2.5c-3.4-2.6-4.8-6-4.2-10.5c0.3,0.4,0.5,0.6,0.7,0.9c2,2.5,4.5,3.9,7.8,3.7
                                c3.6-0.2,6.2-3.5,5.6-7.1c-0.4-2.5-1.5-4.7-2.5-6.9c-1-2.3-2-4.5-2.3-7c-0.2-2.1,0.1-4,1.3-5.8c0.3,1.1,0.6,2.2,1,3.3
                                c1.1,3.1,3.2,5.5,5.3,7.9c2,2.2,4.1,4.3,5.9,6.7c1.1,1.4,1.8,3.1,2.5,4.7C62.8,64.5,62.5,66.6,61.5,68.6z"/>
                          </svg>
                          <span class="avatar__tip avatar__tip--fire">
                            <span class="bold">Fire: </span><span class="italic">a definition of driver features and related behaviours</span>
                          </span>
                        </span>
                        <span class="avatar__element avatar__element--position_bottom">
                          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 99 99">
                            <circle fill-rule="evenodd" clip-rule="evenodd" fill="#F9C778" cx="49.5" cy="49.5" r="49.5"/>
                            <path fill="#FFFFFF" d="M73.9,36.5c-2.7-0.6-5,0.1-6.8,2c-2.1,2.2-2.1,5.9-0.1,7.9c0.7,0.7,1.7,0.7,2.4,0.1c0.8-0.6,0.9-1.6,0.3-2.5
                              c-0.5-0.8-0.7-1.6-0.4-2.3c0.2-0.7,0.8-1.3,1.7-1.6c1.4-0.5,2.7-0.2,3.8,0.7c1.1,1,1.5,2.4,1.2,3.9c-0.5,2.1-2.6,3.6-5,3.6l-4.6,0
                              l-13.7,0c-6.2,0-12.3,0-18.5,0c-0.9,0-1.5,0.4-1.8,1.1c-0.2,0.6-0.2,1.2,0.2,1.6c0.4,0.5,1,0.8,1.8,0.8c2.9,0,5.9,0,8.8,0l9.6,0
                              l8.8,0c3,0,6.1,0,9.1,0c0.9,0,1.7-0.1,2.5-0.3c2.3-0.5,4.3-2,5.5-3.9c1.1-1.9,1.4-4.1,0.8-6.1C78.6,38.9,76.7,37.2,73.9,36.5z"/>
                            <path fill="#FFFFFF" d="M58.7,57.7c-1.9,0-3.9-0.1-6.3-0.1c-1.6,0-3.2,0-4.9,0c-1.6,0-3.3,0-4.9,0h-0.5v0l-6.7,0c-2.8,0-5.6,0-8.5,0
                              c-0.6,0-1.1,0.1-1.5,0.4c-0.7,0.4-0.8,1.2-0.6,1.9c0.2,0.8,0.9,1.3,1.8,1.3c0.8,0,1.6,0,2.3,0l28.6,0c1.9,0,3.4,0.6,4.4,1.9
                              c1,1.2,1.2,2.6,0.7,4c-0.5,1.3-1.5,2.1-2.9,2.3c-1.1,0.2-2.2-0.3-2.8-1.1c-0.4-0.5-0.5-1.2-0.4-1.8c0.1-0.5,0.1-1.1-0.2-1.6
                              c-0.2-0.3-0.5-0.7-1.2-0.8c-0.1,0-0.3,0-0.4,0c-0.9,0-1.6,0.7-1.8,1.8c-0.4,2.5,0.4,4.5,2.5,5.9c2.2,1.5,4.6,1.6,7.1,0.4
                              c2.5-1.3,3.8-3.4,4-6.2c0.1-2-0.7-4.1-2.2-5.7C62.9,58.7,60.8,57.8,58.7,57.7z"/>
                            <path fill="#FFFFFF" d="M41.1,42.8c1.9,0,3.9,0,5.8,0c1,0,2-0.2,2.9-0.4c4.3-1.3,6.9-5.3,6.2-9.6c-0.6-3.8-4.1-6.8-8-6.8
                              c-0.5,0-1.1,0.1-1.6,0.2c-3.2,0.7-5.2,2.6-5.9,5.6c-0.2,0.7-0.2,1.5-0.1,2.4c0.1,0.9,0.9,1.5,1.9,1.3c0.9-0.1,1.6-0.8,1.5-1.8
                              c0-1.4,0.4-2.5,1.4-3.3c1.4-1,3.5-1.1,5-0.1c1.6,1,2.4,2.9,2,4.7c-0.6,2.5-2.8,4.2-5.4,4.2l-10.2,0c-5.1,0-10.2,0-15.4,0
                              c-0.4,0-0.9,0.1-1.2,0.2c-0.7,0.3-1.1,1.1-0.9,2c0.2,0.8,0.9,1.4,1.9,1.4c2.1,0,4.1,0,6.2,0l6.9,0L41.1,42.8z"/>
                          </svg>
                          <span class="avatar__tip avatar__tip--air">
                            <span class="bold">Air: </span><span class="italic">a definition of driver features and related behaviours</span>
                          </span>
                        </span>
                        <span class="avatar__element avatar__element--position_left">
                          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 99 99">
                            <circle fill-rule="evenodd" clip-rule="evenodd" fill="#F9C778" cx="49.5" cy="49.5" r="49.5"/>
                            <path fill="#FFFFFF" d="M65.4,50.9c-1.4-2.5-3.1-4.8-4.8-7.1c-0.4-0.6-0.9-1.2-1.3-1.9l-0.3-0.4C57,38.8,55,36,53.4,32.9
                              c-0.8-1.5-1.8-3.6-2.2-5.9c-0.2-1.2-0.3-2.3-0.4-3.5c0-0.4-0.1-0.9-0.1-1.3c0-0.1,0-0.2,0-0.2c-2.9,2.8-5.1,5.2-6.9,7.5
                              c-2,2.7-3.8,5.5-5.3,8.2c-2.2,3.9-4,7.5-5.3,11.1c-0.9,2.4-1.5,4.5-1.9,6.7c-0.5,2.6-0.4,5.2,0.3,7.8c1,3.7,3,6.9,6,9.4
                              c2.6,2.2,5.6,3.5,8.8,4c0.4,0.1,0.9,0.1,1.3,0.2l0.5,0.1h2c0.1,0,0.2-0.1,0.3-0.1c2.4-0.2,4.6-0.8,6.7-1.8c2.5-1.2,4.7-3,6.5-5.2
                              c1.2-1.5,2.1-3.1,2.7-4.9c0.8-2.1,1.2-4.4,1.1-6.6C67.8,55.6,66.6,53.1,65.4,50.9z M64.5,61.7c-0.5,2.7-1.7,5-3.5,7.1
                              c-2.7,3-5.9,4.7-9.8,5.1c-0.6,0.1-1.2,0.1-1.8,0.1l0,0c-3.4,0-6.5-1.1-9.2-3.1c-2.5-1.9-4.3-4.4-5.3-7.5c-0.8-2.5-0.9-5.2-0.4-8
                              c1-4.5,2.8-8.5,4.2-11.5c1.9-3.8,4-7.4,6.4-10.9c0.4-0.6,0.9-1.2,1.3-1.8l0.4-0.5c0.1-0.1,0.2-0.2,0.3-0.3l1.2-1.4l0.8,2
                              c0.1,0.3,0.2,0.6,0.3,0.8c1.1,2.7,2.6,5.3,4.7,8.4c1.1,1.6,2.2,3.1,3.3,4.7c1.1,1.5,2.2,3.1,3.3,4.6c1.5,2.2,2.6,4.2,3.4,6.2
                              C64.9,57.3,65,59.3,64.5,61.7z"/>
                            <path fill="#FFFFFF" d="M42.5,61.3c-1.2-2.8-1.1-5.7-0.9-8.6c0.1-1.2,0.3-2.4,0.4-3.7c-2.2,2.3-3.4,5-3.6,8.2
                              c-0.2,3.1,0.8,5.8,2.7,8.1c1.6,1.9,3.6,3.3,6.2,3.7c0.8,0.1,1.6,0.2,2.5,0c-0.5-0.3-0.9-0.5-1.2-0.7
                              C45.8,66.7,43.8,64.3,42.5,61.3z"/>
                          </svg>
                          <span class="avatar__tip avatar__tip--water">
                            <span class="bold">Water: </span><span class="italic">a definition of driver features and related behaviours</span>
                          </span>
                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="user__section user__section--left">
                        <p class="user__title">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="22" height="20" viewBox="0 0 35 33" fill="currentColor">
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
                            <span class="user__title-text uppercase">Passions</span>
                        </p>
                        <div class="passions">
                            <div class="passions__inner">
                                <a class="passions__item passions__item--position_top-left" href="#">unlock</a>
                                <a class="passions__item passions__item--position_top-right" href="#">unlock</a>
                                <a class="passions__item passions__item--position_bottom-right" href="#">unlock</a>
                                <a class="passions__item passions__item--position_bottom-left" href="#">unlock</a>
                                <button class="passions__icon" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="16" height="19" viewBox="0 0 74 92" fill="currentColor">
                                        <path class="st0" d="M46.4,38.3c-0.3-0.2-0.5-0.3-0.8-0.4c-5.7-2.5-12.5-1.3-17.1,3c-1,0.9-2,1.9-2.9,2.9c-7,7-14,14-21,21
                              c-4,4.1-5.5,9-4.2,14.6c1.3,6,5.1,10,10.9,11.7c5.9,1.7,11.3,0.4,15.7-4c7.8-7.7,15.5-15.5,23.3-23.2c3.5-3.5,5.2-7.7,4.8-12.7
                              c-0.1-2-0.7-3.9-1.6-5.8c-1.7,1.7-3.3,3.3-4.9,4.9c-0.2,0.2-0.2,0.5-0.2,0.8c0.4,3-0.5,5.7-2.6,7.9C38,66.8,30,74.7,22.1,82.6
                              c-2.3,2.3-5.2,3.1-8.4,2.5c-3.5-0.7-5.8-2.9-6.8-6.3c-1-3.5-0.2-6.6,2.3-9.2c7.8-7.9,15.7-15.8,23.6-23.6c2.2-2.2,4.9-3,7.9-2.7
                              c0.2,0,0.6,0,0.7-0.1C43.1,41.6,44.7,39.9,46.4,38.3z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M60.2,0.2c0.6,0.2,1.3,0.3,1.9,0.5c11.7,3.1,15.9,17.5,7.5,26.2C61.6,35,53.6,43,45.5,50.9
                              c-4.8,4.7-10.6,5.5-16.8,3.2c-0.3-0.1-0.6-0.3-1.1-0.5c1.6-1.6,3.2-3.2,4.7-4.7c0.2-0.2,0.6-0.2,0.8-0.1c3.2,0.4,5.8-0.7,8.1-3
                              c7.7-7.8,15.5-15.5,23.2-23.3c3.8-3.8,3.8-9.7,0-13.3c-3.5-3.3-9-3.4-12.6,0c-1.2,1.1-2.2,2.2-3.4,3.3
                              C41.7,19.5,34.9,26.2,28.1,33c-2.3,2.3-3.2,5-2.8,8.1c0,0.2,0,0.6-0.2,0.7c-1.5,1.6-3.1,3.1-4.7,4.7c-1-2-1.6-4.1-1.7-6.2
                              c-0.2-4.7,1.4-8.7,4.7-12.1c7.8-7.9,15.7-15.7,23.6-23.6c2.4-2.3,5.2-3.8,8.5-4.3c0.2,0,0.3-0.1,0.5-0.2
                              C57.4,0.2,58.8,0.2,60.2,0.2z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M46.4,38.3c-1.7,1.7-3.3,3.3-4.9,4.9c-0.1,0.1-0.5,0.1-0.7,0.1c-3.1-0.3-5.7,0.5-7.9,2.7
                              c-7.9,7.9-15.8,15.7-23.6,23.6c-2.5,2.6-3.3,5.7-2.3,9.2c1,3.4,3.3,5.5,6.8,6.3c3.2,0.7,6.1-0.2,8.4-2.5
                              c8-7.9,15.9-15.8,23.8-23.7c2.2-2.2,3-4.8,2.6-7.9c0-0.3,0-0.6,0.2-0.8c1.6-1.6,3.2-3.2,4.9-4.9c1,1.9,1.5,3.8,1.6,5.8
                              c0.3,5-1.3,9.2-4.8,12.7C42.5,71.5,34.8,79.3,27,87c-4.4,4.4-9.8,5.7-15.7,4c-5.8-1.7-9.6-5.7-10.9-11.7
                              c-1.2-5.6,0.2-10.5,4.2-14.6c7-7,14-14,21-21c1-1,1.9-2,2.9-2.9c4.5-4.3,11.3-5.5,17.1-3C45.9,38,46.1,38.1,46.4,38.3z"/>
                                    </svg>
                                </button>
                                <span class="passions__diagonals"></span>
                            </div>
                        </div>
                    </div>
                    <div class="user__section user__section--right">
                        <p class="user__title">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="18" height="18" viewBox="0 0 31 31" fill="currentColor">
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
                            <span class="user__title-text uppercase">Skills</span>
                        </p>
                        <table class="skills">
                            <tbody class="skills__body">
                            <tr class="skills__row">
                                <td class="skills__cell skills__cell--name">enabling competences</td>
                                <td class="skills__cell skills__cell--value">
                                    <a href="#">unlock</a>
                                </td>
                                <td class="skills__cell skills__cell--value">
                                    <a href="#">unlock</a>
                                </td>
                            </tr>
                            <tr class="skills__row">
                                <td class="skills__cell skills__cell--name">professional competences</td>
                                <td class="skills__cell skills__cell--value">
                                    <a href="#">unlock</a>
                                </td>
                                <td class="skills__cell skills__cell--value">
                                    <a href="#">unlock</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="levels" class="levels clearfix" data-eui-tabs>
                        <p class="user__title">
                            <span class="user__title-text">UTC Levels</span>
                        </p>
                        <div class="levels__nav">
                            <button class="levels__link levels__link--active levels__link--outer t-eui-tab-nav-item t-eui-tab-nav-item--desktop t-eui-tab-nav-item--active t-eui-tab-nav-item--active_desktop" data-eui-tab="1">Basic</button>
                            <button class="levels__link levels__link--outer t-eui-tab-nav-item t-eui-tab-nav-item--desktop" data-eui-tab="2">Extended</button>
                            <button class="levels__link levels__link--outer t-eui-tab-nav-item t-eui-tab-nav-item--desktop" data-eui-tab="3">Advanced</button>
                            <button class="levels__link levels__link--outer t-eui-tab-nav-item t-eui-tab-nav-item--desktop" data-eui-tab="4">Human</button>
                        </div>
                        <div class="levels__content">
                            <button class="levels__link levels__link--active levels__link--inner t-eui-tab-nav-item t-eui-tab-nav-item--mobile t-eui-tab-nav-item--active t-eui-tab-nav-item--active_mobile" type="button" data-eui-tab="1">Basic</button>
                            <div class="levels__item t-eui-tab-item t-eui-tab-item--active" data-eui-tab="1">
                                <div class="levels__inner">
                                    <div class="level">
                                        <p class="level__title">Basic UTC</p>
                                        <div class="level__desc">
                                            Description of the current level Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem ipsum
                                        </div>
                                        <div class="level__buttons">
                                            <a class="button button--ultrasmall button--yellow"
                                               href="http://services.connectingtalents.org/utc_survey?token=<?= $token ?>"
                                            >
                                                <span class="button__text button__text--ultrasmall">improve</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="levels__link levels__link--inner t-eui-tab-nav-item t-eui-tab-nav-item--mobile" type="button" data-eui-tab="2">Extended</button>
                            <div class="levels__item t-eui-tab-item" data-eui-tab="2">
                                <div class="levels__inner">
                                    <div class="level">
                                        <p class="level__title">Extended UTC</p>
                                        <div class="level__desc">
                                            Description of the current level Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem ipsum
                                        </div>
                                        <div class="level__buttons">
                                            <div class="table">
                                                <div class="level__button cell cell--middle">
                                                    <a class="button button--ultrasmall button--light" href="#">
                                                        <span class="button__text button__text--ultrasmall">improve</span>
                                                    </a>
                                                </div>
                                                <div class="level__button cell cell--middle">
                                                    <a class="level__read" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="18" height="23" viewBox="0 0 24 30.5" fill="currentColor">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.8,0c2.5,0,5,0,7.5,0c2.4,0,4.7,0,7.1,0c2.4,2.4,4.9,4.9,7.3,7.3C23.9,7.5,24,7.7,24,8c0,6.8,0,13.6,0,20.4
                                        c0,1.1-0.6,1.9-1.8,2.1c-0.4,0-0.9,0-1.3,0c-6.1,0-12.2,0-18.4,0c-0.2,0-0.5,0-0.7,0c-1.2-0.3-1.8-1-1.8-2.2c0-8.7,0-17.4,0-26.1
                                        C0,1,0.6,0.3,1.8,0z M2.2,15.2c0,3.6,0,7.2,0,10.8c0,1.4,0.9,2.3,2.2,2.3c5.1,0,10.1,0,15.2,0c1.3,0,2.2-0.9,2.2-2.2
                                        c0-5.3,0-10.5,0-15.8c0-0.4-0.1-0.5-0.5-0.5c-1.6,0-3.2,0-4.8,0c-1.5,0-2.4-0.9-2.4-2.4c0-1.6,0-3.1,0-4.7c0-0.4-0.1-0.6-0.6-0.6
                                        c-3,0-6,0-9,0C3,2.2,2.2,3,2.2,4.6C2.2,8.2,2.2,11.7,2.2,15.2z"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12,21.8c-2.1,0-4.1,0-6.2,0c-0.3,0-0.6,0-0.8-0.1c-0.4-0.2-0.7-0.5-0.6-1c0-0.5,0.2-0.8,0.7-1
                                        c0.2-0.1,0.5-0.1,0.7-0.1c4.2,0,8.3,0,12.5,0c0.1,0,0.2,0,0.4,0c0.6,0.1,1,0.6,1,1.1c0,0.5-0.4,1-1,1.1c-0.2,0-0.4,0-0.5,0
                                        C16.1,21.8,14,21.8,12,21.8z"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12,17.4c-2.1,0-4.2,0-6.3,0c-0.8,0-1.3-0.4-1.3-1.1c0-0.7,0.5-1.1,1.3-1.1c4.3,0,8.5,0,12.8,0
                                        c0.8,0,1.3,0.5,1.3,1.1c0,0.6-0.5,1.1-1.3,1.1C16.3,17.4,14.1,17.4,12,17.4z"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12,26.1c-2.2,0-4.3,0-6.5,0c-0.6,0-1-0.3-1.1-0.9c-0.1-0.5,0.1-0.9,0.6-1.2C5.2,24,5.4,24,5.6,24
                                        c4.3,0,8.5,0,12.8,0c0.8,0,1.2,0.4,1.3,1.1c0,0.7-0.5,1.1-1.3,1.1C16.2,26.1,14.1,26.1,12,26.1z"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.1,13.1c-0.8,0-1.7,0-2.5,0c-0.8,0-1.3-0.5-1.3-1.1c0-0.6,0.5-1.1,1.3-1.1c1.7,0,3.5,0,5.2,0
                                        c0.8,0,1.2,0.5,1.2,1.1c0,0.7-0.5,1.1-1.2,1.1C9.9,13.1,9,13.1,8.1,13.1z"/>
                                                        </svg>
                                                        <span class="level__read-text">Read your Report</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="levels__link levels__link--inner t-eui-tab-nav-item t-eui-tab-nav-item--mobile" type="button" data-eui-tab="3">Advanced</button>
                            <div class="levels__item t-eui-tab-item" data-eui-tab="3">
                                <div class="levels__inner">
                                    <div class="level">
                                        <p class="level__title">Advanced UTC</p>
                                        <div class="level__desc">
                                            Description of the current level Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem ipsum
                                        </div>
                                        <div class="level__buttons">
                                            <a class="button button--ultrasmall button--yellow" href="#">
                                                <span class="button__text button__text--ultrasmall">improve</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="levels__link levels__link--inner t-eui-tab-nav-item t-eui-tab-nav-item--mobile" type="button" data-eui-tab="4">Human</button>
                            <div class="levels__item t-eui-tab-item" data-eui-tab="4">
                                <div class="levels__inner">
                                    <div class="level">
                                        <p class="level__title">Human UTC</p>
                                        <div class="level__desc">
                                            Description of the current level Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem ipsum
                                        </div>
                                        <div class="level__buttons">
                                            <div class="table">
                                                <div class="level__button cell cell--middle">
                                                    <a class="button button--ultrasmall button--yellow" href="#">
                                                        <span class="button__text button__text--ultrasmall">assessment</span>
                                                    </a>
                                                </div>
                                                <div class="level__button cell cell--middle">
                                                    <a class="button button--ultrasmall button--yellow" href="#">
                                                        <span class="button__text button__text--ultrasmall">consultancy</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile__section profile__section--showcase">
                <div class="showcase">
                    <h1 class="showcase__title">Opportunities</h1>
                    <div class="showcase__variants">
                        <button class="showcase__variant showcase__variant--talent" type="button">Talents</button>
                        <button class="showcase__variant showcase__variant--opportunity" type="button">Opportunities</button>
                    </div>
                    <!-- Ширина состоит из суммы диаметров кругов -->
                    <div class="showcase__controls" style="width: 232px;">
                        <button class="showcase__control showcase__control--talent js-showcase-control" type="button" data-total="58" data-phrase="talents" data-count="Talents: 58" data-block=".js-circles-talents" style="width: 157px; height: 157px;">58</button>
                        <button class="showcase__control showcase__control--opportunity js-showcase-control" type="button" data-total="7" data-phrase="opportunities" data-count="Opportunities: 7" data-block=".js-circles-opportunities" style="width: 75px; height: 75px;">7</button>
                    </div>
                    <div class="showcase__count js-showcase-count">Talents: 58</div>
                    <div class="showcase__desc js-showcase-desc">total number of <span class="js-showcase-phrase">talents</span> in the platform</div>
                    <div class="showcase__informer js-showcase-informer">Go ovet the bubbles to discover more</div>
                    <div class="circles js-circles js-circles-talents none">
                        <p class="circles__title circles__title--talent">Age segments</p>
                        <table class="circles__table">
                            <tbody class="circles__body">
                            <tr class="circles__row">
                                <td class="circles__cell">
                                    <div class="circles__container" style="height: 61px;line-height: 61px;">
                                        <div class="circles__item circles__item--cherry" style="width: 46px;height: 46px; opacity: 0.75;"></div>
                                    </div>
                                    <p class="circles__age">15-25</p>
                                    <p class="circles__count">(19)</p>
                                </td>
                                <td class="circles__cell">
                                    <div class="circles__container" style="height: 61px;line-height: 61px;">
                                        <div class="circles__item circles__item--cherry" style="width: 61px;height: 61px;"></div>
                                    </div>
                                    <p class="circles__age">26-55</p>
                                    <p class="circles__count">(30)</p>
                                </td>
                                <td class="circles__cell">
                                    <div class="circles__container" style="height: 61px;line-height: 61px;">
                                        <div class="circles__item circles__item--cherry" style="width: 35px;height: 35px; opacity: 0.5;"></div>
                                    </div>
                                    <p class="circles__age">55+</p>
                                    <p class="circles__count">(9)</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="circles js-circles js-circles-opportunities none">
                        <div class="circles__segment circles__segment--small">
                            <p class="circles__title circles__title--opportunity">Purpose</p>
                            <table class="circles__table">
                                <tbody class="circles__body">
                                <tr class="circles__row">
                                    <td class="circles__cell">
                                        <div class="circles__container" style="height: 61px;line-height: 61px;">
                                            <div class="circles__item circles__item--gold" style="width: 35px;height: 35px; opacity: 0.5;"></div>
                                        </div>
                                        <p class="circles__name">business</p>
                                        <p class="circles__count">(2)</p>
                                    </td>
                                    <td class="circles__cell">
                                        <div class="circles__container" style="height: 61px;line-height: 61px;">
                                            <div class="circles__item circles__item--gold" style="width: 61px;height: 61px;"></div>
                                        </div>
                                        <p class="circles__name">non profit</p>
                                        <p class="circles__count">(4)</p>
                                    </td>
                                    <td class="circles__cell">
                                        <div class="circles__container" style="height: 61px;line-height: 61px;">
                                            <div class="circles__item circles__item--gold" style="width: 17px;height: 17px; opacity: 0.2;"></div>
                                        </div>
                                        <p class="circles__name">passion</p>
                                        <p class="circles__count">(1)</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="circles__segment circles__segment--long">
                            <p class="circles__title circles__title--opportunity">Lifecycle stage</p>
                            <table class="circles__table">
                                <tbody class="circles__body">
                                <tr class="circles__row">
                                    <td class="circles__cell circles__cell--4">
                                        <div class="circles__container" style="height: 61px;line-height: 61px;">
                                            <div class="circles__item circles__item--yellow" style="width: 35px;height: 35px; opacity: 0.5;"></div>
                                        </div>
                                        <p class="circles__name">idea generation</p>
                                        <p class="circles__count">(1)</p>
                                    </td>
                                    <td class="circles__cell circles__cell--4">
                                        <div class="circles__container" style="height: 61px;line-height: 61px;">
                                            <div class="circles__item circles__item--yellow" style="width: 61px;height: 61px;"></div>
                                        </div>
                                        <p class="circles__name">prototype</p>
                                        <p class="circles__count">(3)</p>
                                    </td>
                                    <td class="circles__cell circles__cell--4">
                                        <div class="circles__container" style="height: 61px;line-height: 61px;">
                                            <div class="circles__item circles__item--yellow" style="width: 46px;height: 46px; opacity: 0.75;"></div>
                                        </div>
                                        <p class="circles__name">early adopters</p>
                                        <p class="circles__count">(2)</p>
                                    </td>
                                    <td class="circles__cell circles__cell--4">
                                        <div class="circles__container" style="height: 61px;line-height: 61px;">
                                            <div class="circles__item circles__item--yellow" style="width: 35px;height: 35px; opacity: 0.5;"></div>
                                        </div>
                                        <p class="circles__name">paying users</p>
                                        <p class="circles__count">(2)</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="showcase__text">small description of the sharing platform of connecting talents lorem ipsum dolor sit amet</div>
                    <div class="showcase__join">
                        <a class="button button--medium button--yellow" href="#">
                            <span class="button__text button__text--ultrasmall">join</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile__row">
            <div class="profile__section profile__section--opportunities">
                <h2 class="profile__title">My Opportunities</h2>
                <div class="opps">
                    <a class="edit-link edit-link--cherry" href="#">
                        <span class="edit-link__text">edit</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="edit-link__icon icon icon--middle" width="16" height="16" viewBox="0 0 84 84" fill="currentColor">
                            <path fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M42,2c1.1,0,2.3,0.2,3.6,0.2c1.3,0.1,2.8,2.2,3.5,3.7c0.7,1.8,0.6,3.9,0.9,5.9c0.6,4.6,3.9,6.1,7.6,3.5
                        c1.9-1.3,3.8-2.7,5.7-4.1c1.7-1.2,3.3-1.1,4.8,0.4c6.6,6.6,7.4,6,1.7,13.5c-0.7,0.9-1.3,1.8-1.9,2.7c-1.2,1.9,0.2,5.3,2.4,5.8
                        c1.1,0.3,2.2,0.4,3.3,0.5c9.9,0.6,8.4,3,8.4,10.9c0,2.4-1.4,3.9-3.8,4.3c-2.4,0.4-4.9,0.6-7.3,1c-3.2,0.5-4.2,2.7-2.5,5.4
                        c0.5,0.8,1.1,1.7,1.7,2.5c4.5,6.7,3.8,10-3.2,14.1c-1.2,0.7-3.4,0.3-4.9-0.2c-1.2-0.4-2-1.7-3-2.6c-1.3-1.2-2.2-3-4.7-2
                        c-2.5,1-4.4,2.1-4.1,5.1c0,0.3-0.1,0.7-0.1,1C48.9,81.8,48,82,42,82c-6,0-6.9-0.2-7.8-8.3c0-0.3-0.2-0.7-0.1-1
                        c0.3-3-1.6-4.1-4.1-5.1c-2.6-1.1-3.4,0.8-4.7,2c-1,0.9-1.9,2.2-3,2.6c-1.5,0.5-3.7,0.9-4.9,0.2c-7.1-4.1-7.7-7.4-3.2-14.1
                        c0.6-0.8,1.1-1.7,1.7-2.5c1.7-2.7,0.6-4.9-2.5-5.4c-2.4-0.4-4.9-0.6-7.3-1C3.5,49,2.1,47.5,2.1,45c0-7.9-1.5-10.4,8.4-10.9
                        c1.1-0.1,2.2-0.2,3.3-0.5c2.1-0.5,3.5-4,2.4-5.8c-0.6-0.9-1.3-1.8-1.9-2.7c-5.6-7.4-4.9-6.9,1.7-13.5c1.5-1.5,3.1-1.6,4.8-0.4
                        c1.9,1.4,3.8,2.7,5.7,4.1c3.7,2.6,7,1.1,7.6-3.5c0.3-2,0.1-4.1,0.9-5.9c0.6-1.5,2.2-3.6,3.5-3.7C39.7,2.2,40.9,2,42,2z"/>
                            <path fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M41.9,30.8c-6.4,0-11.5,5.1-11.5,11.4c0.1,6.2,5.2,11.2,11.5,11.1c6.3,0,11.5-4.9,11.5-11.1
                        c0.1-6.3-5-11.4-11.5-11.4H41.9z"/>
                        </svg>
                    </a>
                    <div class="opps__desc">
                        <div class="opps__desc-col">
                            <div class="opps__desc-item">
                        <span class="opps__desc-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle text-yellow" width="18" height="16" viewBox="0 0 40 35.1" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3,0c0.1,0,0.2,0.1,0.3,0.1C21.5,0.4,22.1,1,22.3,2c0.2,0.9-0.3,1.9-1.1,2.3c-0.3,0.2-0.3,0.3-0.3,0.7
                              c0.6,2.6,1.2,5.3,1.8,7.9c0.2,1,0.8,1.7,1.9,1.9c1,0.2,1.8-0.2,2.4-1c0.5-0.7,1-1.3,1.5-2c-0.5-0.4-0.8-0.9-0.9-1.6
                              c-0.2-1.3,0.8-2.5,2-2.6C30.8,7.5,32,8.4,32,9.8c0.1,1.3-1,2.4-2.3,2.4c-0.3,0-0.4,0.1-0.5,0.4c-0.1,1.1-0.4,2.1-0.5,3.1
                              c-0.1,1,0.2,1.8,1,2.3c0.8,0.6,1.7,0.6,2.5,0.1c0.1-0.1,0.3-0.2,0.4-0.3c1.1-0.8,2.1-1.6,3.2-2.4c-0.4-0.7-0.6-1.4-0.3-2.1
                              c0.1-0.5,0.4-0.9,0.9-1.2c0.8-0.6,2-0.6,2.7,0.1c0.8,0.7,1.1,1.8,0.7,2.8c-0.5,1.1-1.4,1.5-2.9,1.3c-0.1,0.1-0.1,0.3-0.2,0.4
                              c-1.2,3.4-2.4,6.8-3.5,10.2c-0.1,0.3-0.2,0.5-0.6,0.5c-8.4,0-16.9,0-25.3,0c-0.3,0-0.4-0.1-0.5-0.4c-1.2-3.4-2.4-6.8-3.6-10.2
                              c-0.1-0.1-0.1-0.3-0.2-0.4c-1.6,0.1-2.5-0.3-2.9-1.4c-0.4-1,0-2.1,0.8-2.7c0.8-0.6,2-0.5,2.7,0.1C4.6,13,4.8,14,4.2,15.5
                              c0.2,0.2,0.5,0.4,0.7,0.5c0.9,0.6,1.7,1.3,2.6,1.9c0.8,0.6,1.8,0.7,2.7,0.2c0.8-0.5,1.3-1.4,1.1-2.5c-0.2-1.2-0.4-2.3-0.6-3.5
                              c-0.8,0.1-1.5-0.1-2.1-0.7C8.2,11.1,8,10.6,8,10.1C7.9,9,8.5,8,9.5,7.7c1-0.3,2,0,2.6,0.9c0.7,1,0.5,2.1-0.5,3.3
                              c0.6,0.8,1.1,1.7,1.8,2.4c1.2,1.3,3.4,0.7,3.8-1c0.5-2,0.9-4,1.3-6c0.2-0.8,0.3-1.6,0.5-2.3c0-0.2,0-0.3-0.2-0.5
                              C18,3.9,17.6,3,17.7,2c0.2-1,0.8-1.7,1.8-1.9c0,0,0.1,0,0.1-0.1C19.9,0,20.1,0,20.3,0z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.9,35.1c0-1.5,0-3.1,0-4.6c8.7,0,17.4,0,26.2,0c0,1.5,0,3.1,0,4.6C24.4,35.1,15.6,35.1,6.9,35.1z"/>
                          </svg>
                        </span>
                                <span class="opps__desc-text">Owner</span>
                            </div>
                            <div class="opps__desc-item">
                        <span class="opps__desc-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle text-yellow" width="13" height="17" viewBox="0 0 40 53.5" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5,48.9c0-1.8-0.1-3.5,0-5.1c0.3-5.8,3-10.2,8.2-13c1.7-0.9,2.8-2.1,2.8-4c0-2.1-1.1-3.2-2.8-4.2
                              c-5.2-2.8-7.9-7.3-8.2-13.2c-0.1-1.5,0-3.1,0-4.8c-0.8,0-1.4-0.1-2-0.1C1,4.4,0,3.8,0,2.1C0.1,0.6,1.1,0,2.5,0c3.6,0,7.2,0,10.9,0
                              c7.7,0,15.5,0,23.2,0c2.3,0,3.2,0.7,3.2,2.2c0,1.5-0.9,2.2-3.2,2.3c-0.2,0-0.5,0-0.7,0.1c-0.1,0-0.2,0.1-0.5,0.3
                              c0,1.4,0.1,3,0,4.5c-0.2,6-3,10.5-8.3,13.3c-1.7,0.9-2.7,2.1-2.7,4.1c0,1.9,0.9,3.1,2.6,4c5.4,2.9,8.2,7.5,8.4,13.6
                              c0,1.4,0,2.9,0,4.4c0.5,0.1,1,0.2,1.4,0.2c2.2,0.1,3.3,0.9,3.2,2.5c-0.1,1.5-1.1,2.1-3.4,2.1c-5.4,0-10.9,0-16.3,0
                              c-5.6,0-11.1,0-16.7,0c-0.6,0-1.1,0-1.7-0.1c-1.3-0.2-2-1-2-2.3c0.1-1.2,0.8-1.9,2-2.1C2.7,49,3.5,49,4.5,48.9z M8.8,4.4
                              c0,1.3,0,2.5,0,3.6c0,5,2.1,8.7,6.7,11c2,1,3.1,2.7,3.9,4.6c0.2,0.4,0.3,0.9,0.6,1.5c1.1-3.3,2.2-5,4.1-5.9
                              c5.8-2.6,7.9-7.9,6.8-14.8C23.7,4.4,16.4,4.4,8.8,4.4z M31.2,48.8c0-1.7,0.1-3.3,0-4.8c-0.2-3.8-1.8-7-5.2-8.8
                              c-2.9-1.6-5.1-3.6-6-7.4c-0.9,3-1.9,5.2-4.4,6.4c-5.6,2.6-7.7,7.7-6.6,14.6C16.4,48.8,23.7,48.8,31.2,48.8z"/>
                          </svg>
                        </span>
                                <span class="opps__desc-text">Waiting for acceptance</span>
                            </div>
                            <div class="opps__desc-item">
                        <span class="opps__desc-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle text-yellow" width="17" height="22" viewBox="0 0 74 92" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M46.4,38.3c-0.3-0.2-0.5-0.3-0.8-0.4c-5.7-2.5-12.5-1.3-17.1,3c-1,0.9-2,1.9-2.9,2.9c-7,7-14,14-21,21
                              c-4,4.1-5.5,9-4.2,14.6c1.3,6,5.1,10,10.9,11.7c5.9,1.7,11.3,0.4,15.7-4c7.8-7.7,15.5-15.5,23.3-23.2c3.5-3.5,5.2-7.7,4.8-12.7
                              c-0.1-2-0.7-3.9-1.6-5.8c-1.7,1.7-3.3,3.3-4.9,4.9c-0.2,0.2-0.2,0.5-0.2,0.8c0.4,3-0.5,5.7-2.6,7.9C38,66.8,30,74.7,22.1,82.6
                              c-2.3,2.3-5.2,3.1-8.4,2.5c-3.5-0.7-5.8-2.9-6.8-6.3c-1-3.5-0.2-6.6,2.3-9.2c7.8-7.9,15.7-15.8,23.6-23.6c2.2-2.2,4.9-3,7.9-2.7
                              c0.2,0,0.6,0,0.7-0.1C43.1,41.6,44.7,39.9,46.4,38.3z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M60.2,0.2c0.6,0.2,1.3,0.3,1.9,0.5c11.7,3.1,15.9,17.5,7.5,26.2C61.6,35,53.6,43,45.5,50.9
                              c-4.8,4.7-10.6,5.5-16.8,3.2c-0.3-0.1-0.6-0.3-1.1-0.5c1.6-1.6,3.2-3.2,4.7-4.7c0.2-0.2,0.6-0.2,0.8-0.1c3.2,0.4,5.8-0.7,8.1-3
                              c7.7-7.8,15.5-15.5,23.2-23.3c3.8-3.8,3.8-9.7,0-13.3c-3.5-3.3-9-3.4-12.6,0c-1.2,1.1-2.2,2.2-3.4,3.3
                              C41.7,19.5,34.9,26.2,28.1,33c-2.3,2.3-3.2,5-2.8,8.1c0,0.2,0,0.6-0.2,0.7c-1.5,1.6-3.1,3.1-4.7,4.7c-1-2-1.6-4.1-1.7-6.2
                              c-0.2-4.7,1.4-8.7,4.7-12.1c7.8-7.9,15.7-15.7,23.6-23.6c2.4-2.3,5.2-3.8,8.5-4.3c0.2,0,0.3-0.1,0.5-0.2
                              C57.4,0.2,58.8,0.2,60.2,0.2z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M46.4,38.3c-1.7,1.7-3.3,3.3-4.9,4.9c-0.1,0.1-0.5,0.1-0.7,0.1c-3.1-0.3-5.7,0.5-7.9,2.7
                              c-7.9,7.9-15.8,15.7-23.6,23.6c-2.5,2.6-3.3,5.7-2.3,9.2c1,3.4,3.3,5.5,6.8,6.3c3.2,0.7,6.1-0.2,8.4-2.5
                              c8-7.9,15.9-15.8,23.8-23.7c2.2-2.2,3-4.8,2.6-7.9c0-0.3,0-0.6,0.2-0.8c1.6-1.6,3.2-3.2,4.9-4.9c1,1.9,1.5,3.8,1.6,5.8
                              c0.3,5-1.3,9.2-4.8,12.7C42.5,71.5,34.8,79.3,27,87c-4.4,4.4-9.8,5.7-15.7,4c-5.8-1.7-9.6-5.7-10.9-11.7
                              c-1.2-5.6,0.2-10.5,4.2-14.6c7-7,14-14,21-21c1-1,1.9-2,2.9-2.9c4.5-4.3,11.3-5.5,17.1-3C45.9,38,46.1,38.1,46.4,38.3z"/>
                          </svg>
                        </span>
                                <span class="opps__desc-text">Joined in</span>
                            </div>
                        </div>
                        <div class="opps__desc-col">
                            <div class="opps__desc-item">
                        <span class="opps__desc-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle text-yellow" width="20" height="17" viewBox="0 0 40 33.8" fill="currentColor">
                            <path d="M24.6,33.8c-0.3,0-0.6,0-0.8,0c-1.3,0-2.5,0-3.7-0.1c-0.4,0-0.9,0-1.3-0.1c-0.5,0-0.9-0.2-1.2-0.5
                              c-0.3-0.3-0.3-0.8-0.2-1.3c0.5-2.3,0.3-4.6-0.8-6.8c-0.6-1.1-1.3-2.1-2.2-2.9c-0.4-0.4-0.6-0.8-0.5-1.2c0.1-0.4,0.4-0.8,0.9-1
                              c1.3-0.5,2.6-1.1,3.9-1.8c-0.4-0.6-0.7-1.3-0.9-2.1c0-0.1,0-0.1-0.1-0.1c-1.4-1.6-2-3.3-1.9-5.2c0-0.4,0.1-1.1,0.6-1.6
                              c0-0.3,0-0.6,0-0.9c0-0.6,0-1.2,0.1-1.9c0.3-3.2,2.2-5.4,5.1-6.1C22.4,0.1,23.2,0,24,0c1.4,0,2.8,0.3,4,1c1.9,1,3,2.8,3.3,5.1
                              c0.1,0.8,0.1,1.6,0.1,2.3c0,0.2,0,0.4,0,0.6c0.6,0.5,0.6,1.2,0.6,1.5l0,0.1c0.1,1.8-0.4,3.5-1.8,5.1C30.1,15.8,30,15.9,30,16
                              c-0.2,0.8-0.5,1.4-0.9,2c1.2,0.6,2.4,1.2,3.5,1.7c0.8,0.4,1.6,0.7,2.4,1.1c1.2,0.6,2.2,1.4,2.9,2.5c1.1,1.8,1.8,3.9,2,6.2
                              c0.1,0.6-0.1,1.8-1.5,2.5c-0.9,0.4-1.8,0.5-2.6,0.7c-2.2,0.4-4,0.6-5.6,0.8c-0.7,0.1-1.6,0.1-2.5,0.2c-0.3,0-0.6,0-0.9,0
                              C26.1,33.8,25.3,33.8,24.6,33.8z M23.8,31.7L23.8,31.7c0.9,0,1.9,0,2.8,0c0.3,0,0.6,0,1,0c0.9,0,1.7-0.1,2.4-0.2
                              c1.6-0.2,3.4-0.4,5.5-0.8c0.8-0.1,1.5-0.3,2.2-0.6c0.2-0.1,0.2-0.1,0.2-0.1c0,0,0-0.1,0-0.1c-0.2-2-0.8-3.7-1.7-5.3
                              c-0.5-0.8-1.1-1.3-2-1.7c-0.8-0.4-1.6-0.7-2.4-1.1c-1.4-0.6-2.9-1.3-4.3-2.1c-0.3-0.2-0.8-0.4-0.9-1c-0.1-0.6,0.2-1,0.4-1.2
                              c0.4-0.5,0.7-1.2,1-1.9c0.1-0.4,0.3-0.8,0.6-1.1c1-1.2,1.4-2.3,1.3-3.6l0-0.1c0,0,0-0.1,0-0.1c-0.6-0.5-0.6-1.1-0.6-1.3
                              c0-0.3,0-0.5,0-0.8c0-0.7,0-1.4-0.1-2.1c-0.2-1.7-0.9-2.8-2.2-3.5c-1.4-0.8-3-0.9-5-0.5c-2,0.4-3.3,1.9-3.5,4.2
                              c-0.1,0.5-0.1,1.1-0.1,1.7c0,0.4,0,0.8,0,1.1c0,0.7-0.3,1.1-0.6,1.2c0,0.1,0,0.1,0,0.2c-0.1,1.3,0.3,2.4,1.3,3.6
                              c0.2,0.3,0.4,0.6,0.5,1c0.2,0.8,0.5,1.4,1,2c0.2,0.3,0.5,0.7,0.4,1.3c-0.1,0.6-0.5,0.8-0.9,1c-1.2,0.7-2.4,1.3-3.6,1.8
                              c0.7,0.8,1.4,1.7,1.9,2.7c1.2,2.4,1.6,4.9,1.1,7.4c0.2,0,0.4,0,0.6,0C21.4,31.6,22.6,31.7,23.8,31.7L23.8,31.7z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5,26.3c0,0.3,0,0.6,0,0.9c0,0.2,0,0.4-0.2,0.5c-0.2,0.1-0.4,0-0.5-0.1c-1.3-0.9-2.6-1.8-3.9-2.7
                              c-0.8-0.5-1.6-1.1-2.4-1.7c-0.5-0.3-0.5-0.6,0-0.9c2.1-1.4,4.2-2.7,6.3-4.1c0.2-0.1,0.3-0.2,0.5-0.1c0.2,0.1,0.2,0.3,0.2,0.5
                              c0,0.5,0,1.1,0,1.6c0,0.3,0.1,0.4,0.4,0.4c2.1,0.1,3.9,1,5.4,2.4c1.4,1.4,2.2,3,2.4,5c0.2,1.6-0.1,3.1-0.7,4.6
                              c-0.1,0.1-0.1,0.3-0.2,0.4c-0.1,0.1-0.2,0.2-0.4,0.2c-0.2-0.1-0.3-0.2-0.3-0.4c0-0.3,0-0.6,0-0.9c-0.1-2.6-1.3-4.6-3.4-6.1
                              c-0.8-0.6-1.7-0.9-2.7-1.1c-0.3-0.1-0.4,0-0.4,0.3C7.5,25.7,7.5,26,7.5,26.3z"/>
                          </svg>
                        </span>
                                <span class="opps__desc-text">Request to join</span>
                            </div>
                            <div class="opps__desc-item">
                        <span class="opps__desc-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle text-yellow" width="19" height="17" viewBox="0 0 40 34.8" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M40,13c-0.6,1.9-1.1,3.9-2,5.6c-1.7,3.3-4.4,5.9-7.2,8.2c-3.2,2.6-6.6,5-9.9,7.5c-0.6,0.4-1.1,0.5-1.7,0.1
                              C13.9,31,8.7,27.1,4.5,22.2c-2.3-2.6-3.9-5.5-4.4-9c0,0-0.1-0.1-0.1-0.1c0-0.8,0-1.7,0-2.5c0-0.1,0.1-0.2,0.1-0.3
                              c1.3-8.6,10.6-13,18-8.4c0.7,0.4,1.3,0.9,1.9,1.4c0.2-0.1,0.3-0.2,0.4-0.3c6.3-5.4,15.8-3,18.7,4.7c0.4,1,0.5,2,0.8,3.1
                              C40,11.5,40,12.3,40,13z M2.3,11.7c0,2.7,1,5.3,3.2,8.1c3.9,4.9,9,8.7,14.1,12.2c0.2,0.1,0.6,0,0.8-0.1c4-2.7,7.8-5.5,11.2-8.9
                              c2.5-2.5,4.9-5.2,5.7-8.9c1-4.2-0.8-8.6-4.6-10.6c-3.9-2.1-8.6-1.4-11.5,1.8c-1,1.1-1.5,1.1-2.5,0C16.1,2.5,12,1.6,8.4,2.9
                              C4.7,4.4,2.3,7.9,2.3,11.7z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.2,16.2c1.5,0,2.9,0,4.3,0c1,0,1.5,0.4,1.5,1.1c0,0.7-0.5,1.2-1.4,1.2c-1.4,0-2.7,0-4.1,0c0,0-0.1,0-0.2,0
                              c0,1.3,0,2.5,0,3.8c0,1.3-0.4,1.9-1.2,1.9c-0.8,0-1.1-0.6-1.1-1.9c0-1.2,0-2.5,0-3.9c-1.5,0-2.9,0-4.4,0c-0.4,0-0.9-0.2-1.2-0.5
                              c-0.2-0.2-0.3-0.9-0.2-1.1c0.2-0.3,0.7-0.7,1.1-0.7c1.5-0.1,3,0,4.6,0c0-1.5-0.1-3,0-4.4c0-0.4,0.4-1,0.7-1.2
                              c0.8-0.4,1.5,0.2,1.5,1.2C21.2,13.2,21.2,14.7,21.2,16.2z"/>
                          </svg>
                        </span>
                                <span class="opps__desc-text">Wishlist</span>
                            </div>
                        </div>
                    </div>
                    <div class="opps__inner">
                        <!-- Если нет opportunities -->
                        <!-- <div class="opp opp--empty">
                          <div class="opp__inner">
                            <div class="opp__message">
                              Upload your idea and find the best fitting Talents to realize it!
                            </div>
                          </div>
                          <div class="opp__button">
                            <a class="button button--small button--yellow" href="#">
                              <span class="button__text button__text--ultrasmall">upload</span>
                            </a>
                          </div>
                        </div> -->
                        <div class="opp opp--active">
                            <a class="opp__inner" href="#">
                                <p class="opp__title">Title 1</p>
                                <div class="opp__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 40 35.1" fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3,0c0.1,0,0.2,0.1,0.3,0.1C21.5,0.4,22.1,1,22.3,2c0.2,0.9-0.3,1.9-1.1,2.3c-0.3,0.2-0.3,0.3-0.3,0.7
                              c0.6,2.6,1.2,5.3,1.8,7.9c0.2,1,0.8,1.7,1.9,1.9c1,0.2,1.8-0.2,2.4-1c0.5-0.7,1-1.3,1.5-2c-0.5-0.4-0.8-0.9-0.9-1.6
                              c-0.2-1.3,0.8-2.5,2-2.6C30.8,7.5,32,8.4,32,9.8c0.1,1.3-1,2.4-2.3,2.4c-0.3,0-0.4,0.1-0.5,0.4c-0.1,1.1-0.4,2.1-0.5,3.1
                              c-0.1,1,0.2,1.8,1,2.3c0.8,0.6,1.7,0.6,2.5,0.1c0.1-0.1,0.3-0.2,0.4-0.3c1.1-0.8,2.1-1.6,3.2-2.4c-0.4-0.7-0.6-1.4-0.3-2.1
                              c0.1-0.5,0.4-0.9,0.9-1.2c0.8-0.6,2-0.6,2.7,0.1c0.8,0.7,1.1,1.8,0.7,2.8c-0.5,1.1-1.4,1.5-2.9,1.3c-0.1,0.1-0.1,0.3-0.2,0.4
                              c-1.2,3.4-2.4,6.8-3.5,10.2c-0.1,0.3-0.2,0.5-0.6,0.5c-8.4,0-16.9,0-25.3,0c-0.3,0-0.4-0.1-0.5-0.4c-1.2-3.4-2.4-6.8-3.6-10.2
                              c-0.1-0.1-0.1-0.3-0.2-0.4c-1.6,0.1-2.5-0.3-2.9-1.4c-0.4-1,0-2.1,0.8-2.7c0.8-0.6,2-0.5,2.7,0.1C4.6,13,4.8,14,4.2,15.5
                              c0.2,0.2,0.5,0.4,0.7,0.5c0.9,0.6,1.7,1.3,2.6,1.9c0.8,0.6,1.8,0.7,2.7,0.2c0.8-0.5,1.3-1.4,1.1-2.5c-0.2-1.2-0.4-2.3-0.6-3.5
                              c-0.8,0.1-1.5-0.1-2.1-0.7C8.2,11.1,8,10.6,8,10.1C7.9,9,8.5,8,9.5,7.7c1-0.3,2,0,2.6,0.9c0.7,1,0.5,2.1-0.5,3.3
                              c0.6,0.8,1.1,1.7,1.8,2.4c1.2,1.3,3.4,0.7,3.8-1c0.5-2,0.9-4,1.3-6c0.2-0.8,0.3-1.6,0.5-2.3c0-0.2,0-0.3-0.2-0.5
                              C18,3.9,17.6,3,17.7,2c0.2-1,0.8-1.7,1.8-1.9c0,0,0.1,0,0.1-0.1C19.9,0,20.1,0,20.3,0z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.9,35.1c0-1.5,0-3.1,0-4.6c8.7,0,17.4,0,26.2,0c0,1.5,0,3.1,0,4.6C24.4,35.1,15.6,35.1,6.9,35.1z"/>
                                    </svg>
                                </div>
                                <div class="opp__desc">
                                    lorem ipsum dolor sit amet onsectetur adipiscing elit quia adsupe cum volit
                                </div>
                            </a>
                        </div>
                        <div class="opp">
                            <a class="opp__inner" href="#">
                                <p class="opp__title">Title 2</p>
                                <div class="opp__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 40 53.5" fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5,48.9c0-1.8-0.1-3.5,0-5.1c0.3-5.8,3-10.2,8.2-13c1.7-0.9,2.8-2.1,2.8-4c0-2.1-1.1-3.2-2.8-4.2
                              c-5.2-2.8-7.9-7.3-8.2-13.2c-0.1-1.5,0-3.1,0-4.8c-0.8,0-1.4-0.1-2-0.1C1,4.4,0,3.8,0,2.1C0.1,0.6,1.1,0,2.5,0c3.6,0,7.2,0,10.9,0
                              c7.7,0,15.5,0,23.2,0c2.3,0,3.2,0.7,3.2,2.2c0,1.5-0.9,2.2-3.2,2.3c-0.2,0-0.5,0-0.7,0.1c-0.1,0-0.2,0.1-0.5,0.3
                              c0,1.4,0.1,3,0,4.5c-0.2,6-3,10.5-8.3,13.3c-1.7,0.9-2.7,2.1-2.7,4.1c0,1.9,0.9,3.1,2.6,4c5.4,2.9,8.2,7.5,8.4,13.6
                              c0,1.4,0,2.9,0,4.4c0.5,0.1,1,0.2,1.4,0.2c2.2,0.1,3.3,0.9,3.2,2.5c-0.1,1.5-1.1,2.1-3.4,2.1c-5.4,0-10.9,0-16.3,0
                              c-5.6,0-11.1,0-16.7,0c-0.6,0-1.1,0-1.7-0.1c-1.3-0.2-2-1-2-2.3c0.1-1.2,0.8-1.9,2-2.1C2.7,49,3.5,49,4.5,48.9z M8.8,4.4
                              c0,1.3,0,2.5,0,3.6c0,5,2.1,8.7,6.7,11c2,1,3.1,2.7,3.9,4.6c0.2,0.4,0.3,0.9,0.6,1.5c1.1-3.3,2.2-5,4.1-5.9
                              c5.8-2.6,7.9-7.9,6.8-14.8C23.7,4.4,16.4,4.4,8.8,4.4z M31.2,48.8c0-1.7,0.1-3.3,0-4.8c-0.2-3.8-1.8-7-5.2-8.8
                              c-2.9-1.6-5.1-3.6-6-7.4c-0.9,3-1.9,5.2-4.4,6.4c-5.6,2.6-7.7,7.7-6.6,14.6C16.4,48.8,23.7,48.8,31.2,48.8z"/>
                                    </svg>
                                </div>
                                <div class="opp__desc">
                                    lorem ipsum dolor sit amet onsectetur adipiscing elit quia adsupe cum volit
                                </div>
                            </a>
                        </div>
                        <div class="opp">
                            <a class="opp__inner" href="#">
                                <p class="opp__title">Title 3</p>
                                <div class="opp__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" viewBox="0 0 74 92" fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M46.4,38.3c-0.3-0.2-0.5-0.3-0.8-0.4c-5.7-2.5-12.5-1.3-17.1,3c-1,0.9-2,1.9-2.9,2.9c-7,7-14,14-21,21
                              c-4,4.1-5.5,9-4.2,14.6c1.3,6,5.1,10,10.9,11.7c5.9,1.7,11.3,0.4,15.7-4c7.8-7.7,15.5-15.5,23.3-23.2c3.5-3.5,5.2-7.7,4.8-12.7
                              c-0.1-2-0.7-3.9-1.6-5.8c-1.7,1.7-3.3,3.3-4.9,4.9c-0.2,0.2-0.2,0.5-0.2,0.8c0.4,3-0.5,5.7-2.6,7.9C38,66.8,30,74.7,22.1,82.6
                              c-2.3,2.3-5.2,3.1-8.4,2.5c-3.5-0.7-5.8-2.9-6.8-6.3c-1-3.5-0.2-6.6,2.3-9.2c7.8-7.9,15.7-15.8,23.6-23.6c2.2-2.2,4.9-3,7.9-2.7
                              c0.2,0,0.6,0,0.7-0.1C43.1,41.6,44.7,39.9,46.4,38.3z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M60.2,0.2c0.6,0.2,1.3,0.3,1.9,0.5c11.7,3.1,15.9,17.5,7.5,26.2C61.6,35,53.6,43,45.5,50.9
                              c-4.8,4.7-10.6,5.5-16.8,3.2c-0.3-0.1-0.6-0.3-1.1-0.5c1.6-1.6,3.2-3.2,4.7-4.7c0.2-0.2,0.6-0.2,0.8-0.1c3.2,0.4,5.8-0.7,8.1-3
                              c7.7-7.8,15.5-15.5,23.2-23.3c3.8-3.8,3.8-9.7,0-13.3c-3.5-3.3-9-3.4-12.6,0c-1.2,1.1-2.2,2.2-3.4,3.3
                              C41.7,19.5,34.9,26.2,28.1,33c-2.3,2.3-3.2,5-2.8,8.1c0,0.2,0,0.6-0.2,0.7c-1.5,1.6-3.1,3.1-4.7,4.7c-1-2-1.6-4.1-1.7-6.2
                              c-0.2-4.7,1.4-8.7,4.7-12.1c7.8-7.9,15.7-15.7,23.6-23.6c2.4-2.3,5.2-3.8,8.5-4.3c0.2,0,0.3-0.1,0.5-0.2
                              C57.4,0.2,58.8,0.2,60.2,0.2z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M46.4,38.3c-1.7,1.7-3.3,3.3-4.9,4.9c-0.1,0.1-0.5,0.1-0.7,0.1c-3.1-0.3-5.7,0.5-7.9,2.7
                              c-7.9,7.9-15.8,15.7-23.6,23.6c-2.5,2.6-3.3,5.7-2.3,9.2c1,3.4,3.3,5.5,6.8,6.3c3.2,0.7,6.1-0.2,8.4-2.5
                              c8-7.9,15.9-15.8,23.8-23.7c2.2-2.2,3-4.8,2.6-7.9c0-0.3,0-0.6,0.2-0.8c1.6-1.6,3.2-3.2,4.9-4.9c1,1.9,1.5,3.8,1.6,5.8
                              c0.3,5-1.3,9.2-4.8,12.7C42.5,71.5,34.8,79.3,27,87c-4.4,4.4-9.8,5.7-15.7,4c-5.8-1.7-9.6-5.7-10.9-11.7
                              c-1.2-5.6,0.2-10.5,4.2-14.6c7-7,14-14,21-21c1-1,1.9-2,2.9-2.9c4.5-4.3,11.3-5.5,17.1-3C45.9,38,46.1,38.1,46.4,38.3z"/>
                                    </svg>
                                </div>
                                <div class="opp__desc">
                                    lorem ipsum dolor sit amet onsectetur adipiscing elit quia adsupe cum volit
                                </div>
                            </a>
                        </div>
                        <div class="opp">
                            <a class="opp__inner" href="#">
                                <p class="opp__title">Title 4</p>
                                <div class="opp__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 40 33.8" fill="currentColor">
                                        <path d="M24.6,33.8c-0.3,0-0.6,0-0.8,0c-1.3,0-2.5,0-3.7-0.1c-0.4,0-0.9,0-1.3-0.1c-0.5,0-0.9-0.2-1.2-0.5
                              c-0.3-0.3-0.3-0.8-0.2-1.3c0.5-2.3,0.3-4.6-0.8-6.8c-0.6-1.1-1.3-2.1-2.2-2.9c-0.4-0.4-0.6-0.8-0.5-1.2c0.1-0.4,0.4-0.8,0.9-1
                              c1.3-0.5,2.6-1.1,3.9-1.8c-0.4-0.6-0.7-1.3-0.9-2.1c0-0.1,0-0.1-0.1-0.1c-1.4-1.6-2-3.3-1.9-5.2c0-0.4,0.1-1.1,0.6-1.6
                              c0-0.3,0-0.6,0-0.9c0-0.6,0-1.2,0.1-1.9c0.3-3.2,2.2-5.4,5.1-6.1C22.4,0.1,23.2,0,24,0c1.4,0,2.8,0.3,4,1c1.9,1,3,2.8,3.3,5.1
                              c0.1,0.8,0.1,1.6,0.1,2.3c0,0.2,0,0.4,0,0.6c0.6,0.5,0.6,1.2,0.6,1.5l0,0.1c0.1,1.8-0.4,3.5-1.8,5.1C30.1,15.8,30,15.9,30,16
                              c-0.2,0.8-0.5,1.4-0.9,2c1.2,0.6,2.4,1.2,3.5,1.7c0.8,0.4,1.6,0.7,2.4,1.1c1.2,0.6,2.2,1.4,2.9,2.5c1.1,1.8,1.8,3.9,2,6.2
                              c0.1,0.6-0.1,1.8-1.5,2.5c-0.9,0.4-1.8,0.5-2.6,0.7c-2.2,0.4-4,0.6-5.6,0.8c-0.7,0.1-1.6,0.1-2.5,0.2c-0.3,0-0.6,0-0.9,0
                              C26.1,33.8,25.3,33.8,24.6,33.8z M23.8,31.7L23.8,31.7c0.9,0,1.9,0,2.8,0c0.3,0,0.6,0,1,0c0.9,0,1.7-0.1,2.4-0.2
                              c1.6-0.2,3.4-0.4,5.5-0.8c0.8-0.1,1.5-0.3,2.2-0.6c0.2-0.1,0.2-0.1,0.2-0.1c0,0,0-0.1,0-0.1c-0.2-2-0.8-3.7-1.7-5.3
                              c-0.5-0.8-1.1-1.3-2-1.7c-0.8-0.4-1.6-0.7-2.4-1.1c-1.4-0.6-2.9-1.3-4.3-2.1c-0.3-0.2-0.8-0.4-0.9-1c-0.1-0.6,0.2-1,0.4-1.2
                              c0.4-0.5,0.7-1.2,1-1.9c0.1-0.4,0.3-0.8,0.6-1.1c1-1.2,1.4-2.3,1.3-3.6l0-0.1c0,0,0-0.1,0-0.1c-0.6-0.5-0.6-1.1-0.6-1.3
                              c0-0.3,0-0.5,0-0.8c0-0.7,0-1.4-0.1-2.1c-0.2-1.7-0.9-2.8-2.2-3.5c-1.4-0.8-3-0.9-5-0.5c-2,0.4-3.3,1.9-3.5,4.2
                              c-0.1,0.5-0.1,1.1-0.1,1.7c0,0.4,0,0.8,0,1.1c0,0.7-0.3,1.1-0.6,1.2c0,0.1,0,0.1,0,0.2c-0.1,1.3,0.3,2.4,1.3,3.6
                              c0.2,0.3,0.4,0.6,0.5,1c0.2,0.8,0.5,1.4,1,2c0.2,0.3,0.5,0.7,0.4,1.3c-0.1,0.6-0.5,0.8-0.9,1c-1.2,0.7-2.4,1.3-3.6,1.8
                              c0.7,0.8,1.4,1.7,1.9,2.7c1.2,2.4,1.6,4.9,1.1,7.4c0.2,0,0.4,0,0.6,0C21.4,31.6,22.6,31.7,23.8,31.7L23.8,31.7z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5,26.3c0,0.3,0,0.6,0,0.9c0,0.2,0,0.4-0.2,0.5c-0.2,0.1-0.4,0-0.5-0.1c-1.3-0.9-2.6-1.8-3.9-2.7
                              c-0.8-0.5-1.6-1.1-2.4-1.7c-0.5-0.3-0.5-0.6,0-0.9c2.1-1.4,4.2-2.7,6.3-4.1c0.2-0.1,0.3-0.2,0.5-0.1c0.2,0.1,0.2,0.3,0.2,0.5
                              c0,0.5,0,1.1,0,1.6c0,0.3,0.1,0.4,0.4,0.4c2.1,0.1,3.9,1,5.4,2.4c1.4,1.4,2.2,3,2.4,5c0.2,1.6-0.1,3.1-0.7,4.6
                              c-0.1,0.1-0.1,0.3-0.2,0.4c-0.1,0.1-0.2,0.2-0.4,0.2c-0.2-0.1-0.3-0.2-0.3-0.4c0-0.3,0-0.6,0-0.9c-0.1-2.6-1.3-4.6-3.4-6.1
                              c-0.8-0.6-1.7-0.9-2.7-1.1c-0.3-0.1-0.4,0-0.4,0.3C7.5,25.7,7.5,26,7.5,26.3z"/>
                                    </svg>
                                </div>
                                <div class="opp__desc">
                                    lorem ipsum dolor sit amet onsectetur adipiscing elit quia adsupe cum volit
                                </div>
                            </a>
                        </div>
                        <div class="opp opp--wished">
                            <a class="opp__inner" href="#">
                                <p class="opp__title">Title 5</p>
                                <div class="opp__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="25" viewBox="0 0 40 34.8" fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M40,13c-0.6,1.9-1.1,3.9-2,5.6c-1.7,3.3-4.4,5.9-7.2,8.2c-3.2,2.6-6.6,5-9.9,7.5c-0.6,0.4-1.1,0.5-1.7,0.1
                              C13.9,31,8.7,27.1,4.5,22.2c-2.3-2.6-3.9-5.5-4.4-9c0,0-0.1-0.1-0.1-0.1c0-0.8,0-1.7,0-2.5c0-0.1,0.1-0.2,0.1-0.3
                              c1.3-8.6,10.6-13,18-8.4c0.7,0.4,1.3,0.9,1.9,1.4c0.2-0.1,0.3-0.2,0.4-0.3c6.3-5.4,15.8-3,18.7,4.7c0.4,1,0.5,2,0.8,3.1
                              C40,11.5,40,12.3,40,13z M2.3,11.7c0,2.7,1,5.3,3.2,8.1c3.9,4.9,9,8.7,14.1,12.2c0.2,0.1,0.6,0,0.8-0.1c4-2.7,7.8-5.5,11.2-8.9
                              c2.5-2.5,4.9-5.2,5.7-8.9c1-4.2-0.8-8.6-4.6-10.6c-3.9-2.1-8.6-1.4-11.5,1.8c-1,1.1-1.5,1.1-2.5,0C16.1,2.5,12,1.6,8.4,2.9
                              C4.7,4.4,2.3,7.9,2.3,11.7z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.2,16.2c1.5,0,2.9,0,4.3,0c1,0,1.5,0.4,1.5,1.1c0,0.7-0.5,1.2-1.4,1.2c-1.4,0-2.7,0-4.1,0c0,0-0.1,0-0.2,0
                              c0,1.3,0,2.5,0,3.8c0,1.3-0.4,1.9-1.2,1.9c-0.8,0-1.1-0.6-1.1-1.9c0-1.2,0-2.5,0-3.9c-1.5,0-2.9,0-4.4,0c-0.4,0-0.9-0.2-1.2-0.5
                              c-0.2-0.2-0.3-0.9-0.2-1.1c0.2-0.3,0.7-0.7,1.1-0.7c1.5-0.1,3,0,4.6,0c0-1.5-0.1-3,0-4.4c0-0.4,0.4-1,0.7-1.2
                              c0.8-0.4,1.5,0.2,1.5,1.2C21.2,13.2,21.2,14.7,21.2,16.2z"/>
                                    </svg>
                                </div>
                                <div class="opp__desc">
                                    lorem ipsum dolor sit amet onsectetur adipiscing elit quia adsupe cum volit
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile__section profile__section--teams">
                <h2 class="profile__title">My teams</h2>
                <div class="teams">
                    <a class="edit-link edit-link--cherry" href="#">
                        <span class="edit-link__text">edit</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="edit-link__icon icon icon--middle" width="16" height="16" viewBox="0 0 84 84" fill="currentColor">
                            <path fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M42,2c1.1,0,2.3,0.2,3.6,0.2c1.3,0.1,2.8,2.2,3.5,3.7c0.7,1.8,0.6,3.9,0.9,5.9c0.6,4.6,3.9,6.1,7.6,3.5
                        c1.9-1.3,3.8-2.7,5.7-4.1c1.7-1.2,3.3-1.1,4.8,0.4c6.6,6.6,7.4,6,1.7,13.5c-0.7,0.9-1.3,1.8-1.9,2.7c-1.2,1.9,0.2,5.3,2.4,5.8
                        c1.1,0.3,2.2,0.4,3.3,0.5c9.9,0.6,8.4,3,8.4,10.9c0,2.4-1.4,3.9-3.8,4.3c-2.4,0.4-4.9,0.6-7.3,1c-3.2,0.5-4.2,2.7-2.5,5.4
                        c0.5,0.8,1.1,1.7,1.7,2.5c4.5,6.7,3.8,10-3.2,14.1c-1.2,0.7-3.4,0.3-4.9-0.2c-1.2-0.4-2-1.7-3-2.6c-1.3-1.2-2.2-3-4.7-2
                        c-2.5,1-4.4,2.1-4.1,5.1c0,0.3-0.1,0.7-0.1,1C48.9,81.8,48,82,42,82c-6,0-6.9-0.2-7.8-8.3c0-0.3-0.2-0.7-0.1-1
                        c0.3-3-1.6-4.1-4.1-5.1c-2.6-1.1-3.4,0.8-4.7,2c-1,0.9-1.9,2.2-3,2.6c-1.5,0.5-3.7,0.9-4.9,0.2c-7.1-4.1-7.7-7.4-3.2-14.1
                        c0.6-0.8,1.1-1.7,1.7-2.5c1.7-2.7,0.6-4.9-2.5-5.4c-2.4-0.4-4.9-0.6-7.3-1C3.5,49,2.1,47.5,2.1,45c0-7.9-1.5-10.4,8.4-10.9
                        c1.1-0.1,2.2-0.2,3.3-0.5c2.1-0.5,3.5-4,2.4-5.8c-0.6-0.9-1.3-1.8-1.9-2.7c-5.6-7.4-4.9-6.9,1.7-13.5c1.5-1.5,3.1-1.6,4.8-0.4
                        c1.9,1.4,3.8,2.7,5.7,4.1c3.7,2.6,7,1.1,7.6-3.5c0.3-2,0.1-4.1,0.9-5.9c0.6-1.5,2.2-3.6,3.5-3.7C39.7,2.2,40.9,2,42,2z"/>
                            <path fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M41.9,30.8c-6.4,0-11.5,5.1-11.5,11.4c0.1,6.2,5.2,11.2,11.5,11.1c6.3,0,11.5-4.9,11.5-11.1
                        c0.1-6.3-5-11.4-11.5-11.4H41.9z"/>
                        </svg>
                    </a>
                    <div class="teams__inner">
                        <!-- Если нет teams -->
                        <!-- <div class="team team--empty">
                          <div class="team__inner">
                            <div class="team__image">
                              <div class="team__ava team__ava--empty">
                                <div class="team__message">
                                  You don't have a team yet.<br />Read about our Testimonials!
                                </div>
                              </div>
                              <button class="team__count team__count--empty" type="button">0</button>
                            </div>
                            <div class="text-center">
                              <a class="button button--small button--yellow" href="#">
                                <span class="button__text button__text--ultrasmall">read</span>
                              </a>
                            </div>
                          </div>
                        </div> -->
                        <div class="team">
                            <a class="team__inner" href="#">
                                <div class="team__image">
                                    <div class="team__ava team__ava--default bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                                    <button class="team__count team__count--default" type="button">+4</button>
                                </div>
                                <p class="team__name">Opportunity 1</p>
                            </a>
                        </div>
                        <div class="team">
                            <a class="team__inner" href="#">
                                <div class="team__image">
                                    <div class="team__ava team__ava--default bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                                    <button class="team__count team__count--default" type="button">+2</button>
                                </div>
                                <p class="team__name">Opportunity 2</p>
                            </a>
                        </div>
                        <div class="team">
                            <a class="team__inner" href="#">
                                <div class="team__image">
                                    <div class="team__ava team__ava--default bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                                    <button class="team__count team__count--default" type="button">+7</button>
                                </div>
                                <p class="team__name">Opportunity 3</p>
                            </a>
                        </div>
                        <div class="team">
                            <a class="team__inner" href="#">
                                <div class="team__image">
                                    <div class="team__ava team__ava--default bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                                    <button class="team__count team__count--default" type="button">+4</button>
                                </div>
                                <p class="team__name">Opportunity 4</p>
                            </a>
                        </div>
                        <div class="team">
                            <a class="team__inner" href="#">
                                <div class="team__image">
                                    <div class="team__ava team__ava--default bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                                    <button class="team__count team__count--default" type="button">+2</button>
                                </div>
                                <p class="team__name">Opportunity 4</p>
                            </a>
                        </div>
                        <div class="team">
                            <a class="team__inner" href="#">
                                <div class="team__image">
                                    <div class="team__ava team__ava--default bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                                    <button class="team__count team__count--default" type="button">+7</button>
                                </div>
                                <p class="team__name">Opportunity 4</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
