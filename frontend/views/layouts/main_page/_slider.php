<?php
use yii\helpers\Url;

$slides = [
        [
            'title' => 'Confused about your professional journey&nbsp;?',
            'text'  => 'If you are self-employed, un-employed or disengaged with your job, you face an uncertain future. In the maze of opportunities you have, picking the wrong one is a big risk.
Let us help you shape your future. Join our community.',
            'video_url' => ''            
        ],
        [
            'title' => 'Where do I start&nbsp;?',
            'text'  => 'If you are self-employed, un-employed or disengaged with your job, you face an uncertain future. In the maze of opportunities you have, picking the wrong one is a big risk.
Let us help you shape your future. Join our community.',
            'video_url' => ''            
        ],
        [
            'title' => 'Which job suits me&nbsp;?',
            'text'  => 'If you are self-employed, un-employed or disengaged with your job, you face an uncertain future. In the maze of opportunities you have, picking the wrong one is a big risk.
Let us help you shape your future. Join our community.',
            'video_url' => ''            
        ],
        [
            'title' => 'What are my strengths&nbsp;?',
            'text'  => 'If you are self-employed, un-employed or disengaged with your job, you face an uncertain future. In the maze of opportunities you have, picking the wrong one is a big risk.
Let us help you shape your future. Join our community.',
            'video_url' => ''            
        ],
        [
            'title' => 'How do I realise my idea&nbsp;?',
            'text'  => 'If you are self-employed, un-employed or disengaged with your job, you face an uncertain future. In the maze of opportunities you have, picking the wrong one is a big risk.
Let us help you shape your future. Join our community.',
            'video_url' => ''
        ],
        [
            'title' => 'What drives me at work&nbsp;?',
            'text'  => 'If you are self-employed, un-employed or disengaged with your job, you face an uncertain future. In the maze of opportunities you have, picking the wrong one is a big risk.
Let us help you shape your future. Join our community.',
            'video_url' => ''
        ],
];

?>
<div id="banner" class="banner bg-image" style="background-image: url(<?= Url::to('@web/assets/images/banner.jpg') ?>);">
    <?php foreach ($slides as $slide): ?>
    <div class="banner__item">
        <div class="banner__content">
            <div class="banner__info">
                <p class="banner__title"><?= $slide['title'] ?></p>
                <div class="banner__desc"><?= $slide['text'] ?></div>
                <?php if($slide['video_url'] != ''): ?>
                <a class="banner__watch" href="<?= $slide['video_url'] ?>">
                    <span class="banner__watch-text">Watch the video</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="18" height="18" viewBox="0 0 100 100" fill="currentColor">
                        <circle fill="#FBC700" cx="50" cy="50" r="40.194"/>
                        <polyline fill="#FFFFFF" points="44.779,37.998 63.004,50 44.779,62.002  "/>
                    </svg>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>