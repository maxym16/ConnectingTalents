<?php
use yii\helpers\Url;
?>
<div class="intro">
  <div id="intro" class="intro__inner">
    <div class="intro__slide">
      <div class="intro__box">
        <img src="<?= Url::to('@web/assets/images/intro-slide-1.png') ?>" alt="" />
      </div>
    </div>
    <div class="intro__slide">
      <div class="intro__box">
        <img src="<?= Url::to('@web/assets/images/intro-slide-2.png') ?>" alt="" />
      </div>
    </div>
    <div class="intro__slide">
      <div class="intro__box">
        <img src="<?= Url::to('@web/assets/images/intro-slide-3.png') ?>" alt="" />
        <p class="intro__phrase intro__phrase--1">
          Discover your <span class="bold">Talent</span>
        </p>
      </div>
    </div>
    <div class="intro__slide">
      <div class="intro__box">
        <img src="<?= Url::to('@web/assets/images/intro-slide-4.png') ?>" alt="" />
        <p class="intro__phrase intro__phrase--2">
          Unlock your <span class="bold">POTENTIAL</span>
        </p>
      </div>
    </div>
    <div class="intro__slide">
      <div class="intro__box">
        <img src="<?= Url::to('@web/assets/images/intro-slide-5.png') ?>" alt="" />
        <p class="intro__phrase intro__phrase--3">
          Explore new <span class="bold">OPPORTUNITIES</span>
        </p>
      </div>
    </div>
    <div class="intro__slide">
      <div class="intro__box">
        <img src="<?= Url::to('@web/assets/images/intro-slide-6.png') ?>" alt="" />
        <p class="intro__phrase intro__phrase--4">
          Turn your <span class="bold">TALENT</span> into <span class="bold">OPPORTUNITY</span>
        </p>
      </div>
    </div>
    <div class="intro__slide">
      <div class="intro__box">
        <img src="<?= Url::to('@web/assets/images/intro-slide-7.png') ?>" alt="" />
        <p class="intro__phrase intro__phrase--5">
          <span class="bold">Follow</span> your <span class="bold">PASSIONS</span>
        </p>
      </div>
    </div>
  </div>
  <button class="intro__arrow">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="17" viewBox="0 0 30 17" fill="currentColor">
      <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="none" stroke="none"/>
      <polyline fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" points="28.438003540039062,2 15.352001190185547,14.587997436523438 2,2 "/>
    </svg>
  </button>
</div>
