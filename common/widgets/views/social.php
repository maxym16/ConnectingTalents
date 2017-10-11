<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/** @var $this View */
/** @var $id string */
/** @var $services stdClass[] See EAuth::getServices() */
/** @var $action string */
/** @var $popup bool */
/** @var $assetBundle string Alias to AssetBundle */

Yii::createObject(['class' => $assetBundle])->register($this);

// Open the authorization dilalog in popup window.
if ($popup) {
    $options = [];
    foreach ($services as $name => $service) {
        $options[$service->id] = $service->jsArguments;
    }
    $this->registerJs('$("#' . $id . '").eauth(' . json_encode($options) . ');');
}

?>
<div id="<?php echo $id; ?>">
        <?php
        foreach ($services as $name => $service) {

            if($service->id == 'google_oauth'){
                echo Html::beginTag('a',[
                    'class' => 'form__social form__social--gp',
                    'data-eauth-service' => $service->id,
                    'href' => Url::to([$action, 'service' => $name])
                ]);
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" height="40" width="40" viewBox="0 0 500 500" fill="currentColor">
                    <path d="M 50 0 C 22.3 0 -1.0018638e-016 22.3 0 50 L 0 450 C 0 477.7 22.3 500 50 500 L 450 500 C 477.7 500 500 477.7 500 450 L 500 50 C 500 22.3 477.7 -1.0018638e-016 450 0 L 50 0 z M 200.75 52.875 L 305.625 52.875 L 273.21875 71.9375 L 240.8125 71.9375 C 252.07142 79.0895 261.27482 88.62393 267.46875 101.5 C 273.6932 114.36995 276.09375 128.51636 276.09375 142.5 C 276.09375 154.25932 274.94342 164.74803 271.3125 173.96875 C 267.65105 183.03692 263.21683 190.32255 257.96875 195.90625 C 252.72069 201.45943 246.99806 206.36586 241.75 211.15625 C 236.50192 215.76355 232.0677 220.37251 228.40625 225.4375 C 224.74482 230.38043 222.6875 235.95124 222.6875 241.6875 C 222.6875 245.80662 223.93698 250.09594 226.5 254.0625 C 229.18505 258.02906 232.84963 261.83855 236.96875 265.5 C 241.27094 269.16145 246.21627 272.97094 251.28125 276.9375 C 256.37676 280.90407 261.46626 285.36884 266.53125 290.28125 C 271.62675 295.04113 275.75662 299.82552 279.90625 305.53125 C 284.17793 311.11496 287.84251 317.63011 290.375 325.59375 C 293.09057 333.37431 294.18815 342.25045 294.21875 351.3125 C 294.18823 376.7595 283.05575 398.65687 260.8125 418.0625 C 236.64702 438.87169 203.26699 449.53125 160.6875 449.53125 C 151.31117 449.53125 141.7874 449.21179 132.09375 447.625 C 122.55874 446.00796 113.35232 442.84524 103.5 439.03125 C 93.806334 435.36981 85.216293 431.24067 77.75 425.6875 C 70.280666 420.28686 63.453476 412.47643 58.6875 403.75 C 53.918484 395.17613 52 385.80419 52 375.125 C 52 365.45269 54.714088 354.49712 60.59375 342.75 C 65.680095 332.58951 73.299099 324.29163 83.46875 316.96875 C 93.641459 309.4933 104.91128 303.65775 117.78125 299.84375 C 130.65426 295.87719 143.20942 292.98846 154.96875 291.21875 C 166.72807 289.32701 179.13526 288.71136 191.1875 288.40625 C 181.02701 275.19455 175.9375 262.65237 175.9375 252.15625 C 175.9375 250.2645 175.63239 249.11419 175.9375 247.375 C 176.27313 245.45274 177.3868 243.87598 177.875 242.625 C 178.36319 241.34348 178.95742 238.94982 179.78125 236.875 C 180.57455 234.64763 180.38311 233.4065 180.71875 232.125 C 174.34173 232.91829 169.29722 233.0625 164.53125 233.0625 C 140.85393 233.0625 120.50432 225.77913 103.5 210.1875 C 86.654313 194.62637 77.7464 174.61239 77.75 151.09375 C 77.746959 128.8444 85.527655 109.45212 100.625 91.96875 C 115.71928 74.33281 133.84987 62.55573 155.9375 57.625 C 170.87618 54.44566 185.9822 52.879 200.75 52.875 z M 168.34375 70.03125 C 153.56374 70.03429 142.10398 75.28398 134 86.25 C 125.89601 97.21601 121.59375 111.02525 121.59375 126.28125 C 121.59375 133.7506 122.72043 140.92486 124.46875 149.1875 C 126.37576 157.45625 129.2485 165.7061 133.0625 173.96875 C 136.87651 182.2436 141.31988 190.16161 146.40625 196.84375 C 151.48953 203.34279 158.15809 208.94338 165.46875 213.0625 C 172.77639 217.18163 180.25881 218.78125 188.375 218.78125 C 203.78356 218.78125 214.91458 214.01974 221.71875 204.5 C 228.73652 194.7972 232.21875 182.24661 232.21875 166.34375 C 232.21875 156.8057 231.12182 146.4612 228.40625 135.8125 C 225.87376 125.00517 221.88044 114.38598 216.9375 104.375 C 212.17762 94.36097 205.51138 86.07682 196.9375 79.5625 C 188.5162 73.04514 178.82463 70.03525 168.34375 70.03125 z M 357.125 144.40625 L 387.625 144.40625 L 387.625 205.4375 L 448.65625 205.4375 L 448.65625 235.9375 L 387.625 235.9375 L 387.625 296.96875 L 357.125 296.96875 L 357.125 235.9375 L 296.09375 235.9375 L 296.09375 205.4375 L 357.125 205.4375 L 357.125 144.40625 z M 200.28125 302.5625 C 198.17593 302.60446 195.74903 302.71875 193.125 302.71875 C 184.55112 302.71875 176.59726 302.52731 168.34375 303.65625 C 160.0811 304.75468 151.49104 307.47562 142.59375 310.34375 C 133.6934 313.18137 125.42296 316.35775 118.75 320.8125 C 112.07396 325.26726 106.82428 331.43082 102.53125 338.90625 C 98.24126 346.38171 95.875 355.13723 95.875 364.6875 C 95.875 375.48873 98.87517 384.82868 104.4375 393.25 C 110.15545 401.82387 117.31599 408.52139 126.375 413.28125 C 135.59268 418.2242 144.95777 421.4013 154.96875 423.78125 C 164.97974 426.16118 175.33951 427.59375 185.5 427.59375 C 194.8672 427.59375 203.7662 426.79431 212.1875 424.75 C 220.76138 422.82775 229.52381 419.48969 236.96875 415.1875 C 244.44418 411.06838 249.85406 405.5067 254.15625 398.03125 C 258.61099 390.58633 260.8125 381.35168 260.8125 371.34375 C 260.8125 367.98743 260.66758 364.83319 259.84375 361.8125 C 259.23352 358.63925 258.76207 355.75125 257.96875 353.21875 C 257.17545 350.50319 255.2318 348.43137 253.1875 345.59375 C 251.26524 342.72562 249.84106 339.8605 248.4375 337.96875 C 247.156 335.89394 244.5876 333.99681 241.75 331.28125 C 238.88187 328.56568 236.64913 325.9065 235.0625 324.625 C 233.62844 323.19094 231.09894 321.59129 227.4375 318.90625 C 223.92862 316.19067 221.24655 314.13263 219.8125 313.15625 C 218.531 312.21037 216.15406 310.15381 212.1875 307.46875 C 208.37352 304.75319 206.44588 303.32898 205.5 302.71875 C 204.15747 302.55093 202.38657 302.52054 200.28125 302.5625 z "/>
                </svg>
                <?php
                echo Html::endTag('a');
            }
            if($service->id == 'facebook'){
                echo Html::beginTag('a',[
                    'class' => 'form__social form__social--fb',
                    'data-eauth-service' => $service->id,
                    'href' => Url::to([$action, 'service' => $name])
                ]);
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="40" height="40" viewBox="0 0 416 416" fill="currentColor">
                    <rect width="100%" height="100%" x="0" y="0" fill="none" stroke="none"/>
                    <path d="M352,0 H64 c-35.344,0 -64,28.656 -64,64 v288 c0,35.344 28.656,64 64,64 h128 V272 h-64 v-64 h64 v-72 c0,-30.93 25.07,-56 56,-56 h8 h80 v64 h-64 c-11.664,0 -16,4.5 -16,16 v48 h64 v64 h-64 v144 h96 c35.344,0 64,-28.656 64,-64 V64 C416,28.656000000000006 387.344,0 352,0 z"/>
                </svg>
                <?php
                echo Html::endTag('a');
            }
            if($service->id == 'linkedin_oauth2'){
                echo Html::beginTag('a',[
                    'class' => 'form__social form__social--linkedin',
                    'data-eauth-service' => $service->id,
                    'href' => Url::to([$action, 'service' => $name])
                ]);
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="40" height="40" viewBox="0 0 49 50" fill="currentColor">
                    <rect width="100%" height="100%" x="0" y="0" fill="none" stroke="none"/>
                    <path d="M26.57700004196167,22.434000183105468 v-0.07700000000000001 c-0.016000000000000004,0.026000000000000006 -0.03300000000000001,0.05200000000000001 -0.05000000000000001,0.07700000000000001 H26.57700004196167 z"/>
                    <path d="M45.77100004196167,1.831054685652589e-7 H3.6510000419616695 c-2.016,0 -3.6510000000000002,1.596 -3.6510000000000002,3.563 v42.613 c0,1.9660000000000002 1.6350000000000002,3.5620000000000003 3.6510000000000002,3.5620000000000003 h42.12 c2.019,0 3.654,-1.597 3.654,-3.5620000000000003 V3.563000183105469 C49.42500004196167,1.5950001831054692 47.78900004196167,1.831054685652589e-7 45.77100004196167,1.831054685652589e-7 zM14.981000041961671,41.63700018310547 h-7.465 V19.178000183105468 h7.465 V41.63700018310547 zM11.24900004196167,16.11000018310547 h-0.05000000000000001 c-2.504,0 -4.124,-1.725 -4.124,-3.88 c0,-2.203 1.6700000000000002,-3.88 4.223,-3.88 c2.5540000000000003,0 4.125,1.677 4.175,3.88 C15.473000041961669,14.385000183105468 13.851000041961669,16.11000018310547 11.24900004196167,16.11000018310547 zM41.90000004196167,41.63700018310547 h-7.465 V29.61900018310547 c0,-3.018 -1.08,-5.078 -3.781,-5.078 c-2.062,0 -3.29,1.389 -3.831,2.731 c-0.19700000000000004,0.47900000000000004 -0.24500000000000002,1.149 -0.24500000000000002,1.8210000000000002 v12.543 h-7.465 c0,0 0.09800000000000003,-20.354 0,-22.459 h7.465 v3.179 c0.992,-1.53 2.766,-3.709 6.729,-3.709 c4.911,0 8.594,3.211 8.594,10.11 V41.63700018310547 z"/>
                </svg>
                <?php
                echo Html::endTag('a');
            }

        }
        ?>
</div>