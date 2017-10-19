<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';

$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile(
    '@web/assets/js/about-page.js',
    [
        'depends' => [\frontend\assets\CTAsset::className()],
        'position' => \yii\web\View::POS_END
    ]
);
?>

<div class="about bg-image">
    <div class="about__inner">
        <div class="about__text about-text">
            <div class="about-text__inner">
                <h1 class="about-text__title text-yellow">About us</h1>
                <h2 class="about-text__subtitle">We believe in collaboration to shape the future</h2>
                <div class="about-text__desc">
                    Our vision is to help people navigate the <span class="extrabold text-yellow">future of work</span>, where entrepreneurship and human talent are at the heart! Our ambition is simple; enable this powerful transformation by equipping persons and teams with the tools to realise their <span class="extrabold text-yellow">opportunities</span>.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-text about-text--standalone">
    <div class="about-text__inner">
        <h2 class="about-text__title">Team</h2>
        <h3 class="about-text__subtitle">Our team turns diversity into reality</h3>
        <div class="about-text__desc about-text__desc--weight_light">
            Our team has a rich variety of backgrounds in terms of culture and education. We have different professional paths and cumulate over 100 years of diverse work experience. Our focus today is Europe, but tomorrow…
        </div>
    </div>
</div>
<div class="team-members">
    <div class="team-members__inner">
        <?php
            $members = [
                [
                    'img' => 'linda.jpg',
                    'name' => 'Linda van Andel',
                    'position' => 'team builder',
                    'linkedin' => 'http://it.linkedin.com/in/linda-van-andel-71821a',
                    'description' => 'I have a passion for connecting ideas and people. This mix of interests has fostered my curiosity for the new, for the different, for the unusual. My European background has given me the wings to explore many different jobs in different places. This way I now have a broad base of experience and skills, some very business, but mostly related to the behaviour of people in teams.'
                ],
                [
                    'img' => 'dario.jpg',
                    'name' => 'Dario Montebugnoli',
                    'position' => 'opportunity builder',
                    'linkedin' => 'http://it.linkedin.com/in/dariomontebugnolihttp://it.linkedin.com/in/dariomontebugnoli',
                    'description' => 'I am continuously expanding my horizons. I started my professional roadmap with a passion in Chemistry, then moved from the lab to large corporation with a significant intermezzo at a large consulting firm.  I like to use my scientific skills and business acumen to invent new opportunities. This way I can act as a catalyst for opportunities by mixing and matching my knowledge'
                ],
                [
                    'img' => 'femke.jpg',
                    'name' => 'Femke Ohn',
                    'position' => 'talent architect',
                    'linkedin' => 'http://nl.linkedin.com/in/femkeohm',
                    'description' => 'As a social psychologist, my biggest passions are Talent development and group dynamics in teams. I have been working since 1999 as a trainer for different organizations and I have identified the key factors for successful collaboration in teams. Guiding people to become self aware and grow their Talent is exactly what makes me happy.'
                ],
                [
                    'img' => 'jonathan.jpg',
                    'name' => 'Jonathan Ambrogi',
                    'position' => 'multiculture talent',
                    'linkedin' => 'http://www.connectingtalents.org/#',
                    'description' => 'I am interested in internationalization and multiculturality. I am a motivated travelling University student, I love the exposure to different languages and cultures and I am passionate about personal Talent growth in a multinational context. Today I am also exploring South Amerca’s talents.'
                ],
                [
                    'img' => 'stephen.jpg',
                    'name' => 'Stephen Welch',
                    'position' => 'communication talent',
                    'linkedin' => 'https://www.linkedin.com/in/stephenwelch11',
                    'description' => 'I love seeing people grow and develop new Talents they didn’t know they had, especially when they access new opportunities as a result. I work in the liminal space between HR and Communications, helping individuals and companies get their message across in a compelling way.  I like seeking out new challenges and new experiences, and to take a chance.'
                ],
            ];
        ?>
        <?php foreach($members as $member): ?>
        <div class="team-member">
            <div class="team-member__inner">
                <div class="team-member__ava bg-image" style="background-image: url(<?= Url::to('@web/assets/images/'.$member['img']) ?>);"></div>
                <div class="team-member__info">
                    <p class="team-member__name"><?= $member['name'] ?></p>
                    <p class="team-member__post">(<?= $member['position'] ?>)</p>
                    <p class="team-member__name">
                        <a href="<?= $member['linkedin'] ?>">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </p>
                    <div class="team-member__desc"><?= $member['description'] ?></div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="members">
    <div class="members__inner">
        <h2 class="members__title">Members of our Archipelago</h2>
        <div class="members__items">
            <div class="member">
                <div class="member__inner">
                    <div class="member__image"></div>
                    <p class="member__name">Name</p>
                </div>
            </div>
            <div class="member">
                <div class="member__inner">
                    <div class="member__image"></div>
                    <p class="member__name">Name</p>
                </div>
            </div>
            <div class="member">
                <div class="member__inner">
                    <div class="member__image"></div>
                    <p class="member__name">Name</p>
                </div>
            </div>
            <div class="member">
                <div class="member__inner">
                    <div class="member__image"></div>
                    <p class="member__name">Name</p>
                </div>
            </div>
            <div class="member">
                <div class="member__inner">
                    <div class="member__image"></div>
                    <p class="member__name">Name</p>
                </div>
            </div>
            <div class="member">
                <div class="member__inner">
                    <div class="member__image"></div>
                    <p class="member__name">Name</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map">
    <h2 class="map__title">Talents in the world</h2>
    <div id="map" class="map__inner"></div>
</div>

