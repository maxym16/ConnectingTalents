<?php



/**

 * Lombardia Informatica S.p.A.

 * OPEN 2.0

 *

 * @see http://example.com Developers'community

 * @license GPLv3

 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License version 3

 *

 * @package    lispa\amos\basic\template

 * @category   CategoryName

 * @author     Lombardia Informatica S.p.A.

 */



/* @var $this yii\web\View */



use yii\helpers\Html;



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
            Reshape the text of this section without bullets. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
        </div>
    </div>
</div>
<div class="team-members">
    <div class="team-members__inner">
        <div class="team-member">
            <div class="team-member__inner">
                <div class="team-member__ava bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                <div class="team-member__info">
                    <p class="team-member__name">Name Surname</p>
                    <p class="team-member__post">(senior partner)</p>
                    <div class="team-member__desc">
                        Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem
                    </div>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-member__inner">
                <div class="team-member__ava bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                <div class="team-member__info">
                    <p class="team-member__name">Name Surname</p>
                    <p class="team-member__post">(senior partner)</p>
                    <div class="team-member__desc">
                        Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem
                    </div>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-member__inner">
                <div class="team-member__ava bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                <div class="team-member__info">
                    <p class="team-member__name">Name Surname</p>
                    <p class="team-member__post">(senior partner)</p>
                    <div class="team-member__desc">
                        Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem
                    </div>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-member__inner">
                <div class="team-member__ava bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                <div class="team-member__info">
                    <p class="team-member__name">Name Surname</p>
                    <p class="team-member__post">(senior partner)</p>
                    <div class="team-member__desc">
                        Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem
                    </div>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-member__inner">
                <div class="team-member__ava bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                <div class="team-member__info">
                    <p class="team-member__name">Name Surname</p>
                    <p class="team-member__post">(senior partner)</p>
                    <div class="team-member__desc">
                        Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem
                    </div>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-member__inner">
                <div class="team-member__ava bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                <div class="team-member__info">
                    <p class="team-member__name">Name Surname</p>
                    <p class="team-member__post">(senior partner)</p>
                    <div class="team-member__desc">
                        Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem
                    </div>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-member__inner">
                <div class="team-member__ava bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                <div class="team-member__info">
                    <p class="team-member__name">Name Surname</p>
                    <p class="team-member__post">(senior partner)</p>
                    <div class="team-member__desc">
                        Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem
                    </div>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="team-member__inner">
                <div class="team-member__ava bg-image" style="background-image: url('./tmp_images/avatar.jpg');"></div>
                <div class="team-member__info">
                    <p class="team-member__name">Name Surname</p>
                    <p class="team-member__post">(senior partner)</p>
                    <div class="team-member__desc">
                        Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem Lorem ipsum dolo sit amet Description Lorem ipsum dolo sit amet lorem
                    </div>
                </div>
            </div>
        </div>
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

