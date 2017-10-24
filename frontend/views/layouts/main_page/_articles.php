<?php
use yii\helpers\Url;
?>
<section class="articles">
    <div class="articles__inner">
        <h2 class="articles__title">Window on <span class="text-black">Talents & Opportunities</span></h2>
        <div id="articles" class="articles__content">
            <article class="articles__item article">
                <div class="article__inner">
                    <a class="article__image bg-image" href="http://openblog.connectingtalents.org/2017/10/19/we-struggled-to-find-our-right-tech-partners/" style="background-image: url(<?= Url::to('@web/assets/images/fab.jpg') ?>);"></a>
                    <div class="article__info">
                        <a class="article__title" href="http://openblog.connectingtalents.org/2017/10/19/we-struggled-to-find-our-right-tech-partners/">Meet Fabrizio</a>
                        <div class="article__desc">
                            It took us some time, but then we discovered a visionary entrepreneur in the field of education
                        </div>
                        <div class="article__date">
                            <time>October 19 2017</time> by <span class="bold">Nicole De Windt</span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="articles__item article">
                <div class="article__inner">
                    <a class="article__image bg-image" href="http://openblog.connectingtalents.org/2017/10/18/lets-sail-towards-sustainability-with-enrico-and-cristiana/" style="background-image: url(<?= Url::to('@web/assets/images/OneOcean1-265.jpg') ?>);"></a>
                    <div class="article__info">
                        <a class="article__title" href="http://openblog.connectingtalents.org/2017/10/18/lets-sail-towards-sustainability-with-enrico-and-cristiana/">Sailing towards sustainability ?</a>
                        <div class="article__desc">
                            Let’s make a change together with Enrico e Cristiana
                        </div>
                        <div class="article__date">
                            <time>October 18 2017</time> by <span class="bold">Nicole De Windt</span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="articles__item article">
                <div class="article__inner">
                    <a class="article__image bg-image" href="http://openblog.connectingtalents.org/2017/10/02/are-you-beast-or-beauty/" style="background-image: url(<?= Url::to('@web/assets/images/image001.jpeg') ?>);"></a>
                    <div class="article__info">
                        <a class="article__title" href="http://openblog.connectingtalents.org/2017/10/02/are-you-beast-or-beauty/">Are you Beast or Beauty ?</a>
                        <div class="article__desc">
                            IBelle and her boyfriend personify the three elements of successful collaboration...
                        </div>
                        <div class="article__date">
                            <time>October 2 2017</time> by <span class="bold">Stephen Welch</span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="articles__item article">
                <div class="article__inner">
                    <a class="article__image bg-image" href="http://openblog.connectingtalents.org/2017/10/15/what-happens-when-the-lemonade-sours/" style="background-image: url(<?= Url::to('@web/assets/images/FullSizeRender-10.jpg') ?>);"></a>
                    <div class="article__info">
                        <a class="article__title" href="http://openblog.connectingtalents.org/2017/10/15/what-happens-when-the-lemonade-sours/">What happens when ...</a>
                        <div class="article__desc">
                            …the lemonade sours ? Failure helps!
                        </div>
                        <div class="article__date">
                            <time>October 15 2017</time> by <span class="bold">Stephen Welch</span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="articles__item article">
                <div class="article__inner">
                    <a class="article__image bg-image" href="http://openblog.connectingtalents.org/2017/10/15/does-your-talent-get-in-the-way-of-opportunity/" style="background-image: url(<?= Url::to('@web/assets/images/FullSizeRender-8.jpg') ?>);"></a>
                    <div class="article__info">
                        <a class="article__title" href="http://openblog.connectingtalents.org/2017/10/15/does-your-talent-get-in-the-way-of-opportunity/">What if talent meeting opportunity...</a>
                        <div class="article__desc">
                            ...is actually an inhibitor in the long run? Invest for creativity and new approaches !
                        </div>
                        <div class="article__date">
                            <time>October 15 2017</time> by <span class="bold">Stephen Welch</span>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <button class="articles__arrow articles__arrow--prev" type="button" data-relation="articles-prev">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="17" height="30" viewBox="0 0 17 30" fill="currentColor">
                <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="none" stroke="none"/>
                <polyline fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" points="14.587997436523438,28.442001342773438 2,15.358001708984375 14.587997436523438,2 " />
            </svg>
        </button>
        <button class="articles__arrow articles__arrow--next" type="button" data-relation="articles-next">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="17" height="30" viewBox="0 0 17 30" fill="currentColor">
                <rect width="100%" height="100%" x="0" y="0" fill="none" stroke="none"/>
                <polyline fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" points="2,2 14.587997436523438,15.081001281738281 2,28.438003540039062 "/></g>
            </svg>
        </button>
    </div>
</section>
