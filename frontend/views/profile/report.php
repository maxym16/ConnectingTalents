<?php
use yii\helpers\Url;

$this->title = 'Connecting Talents | Report';
$ar=array('fire'=>$utcdata->fire,'earth'=>$utcdata->earth,'water'=>$utcdata->water,'air'=>$utcdata->air); 
//debug($ar);
$max = array_keys($ar, max($ar))[0];
$fire=$earth=$water=$air='none';
$invfire=$invearth=$invwater=$invair='';
if($max=='fire'){$fire='';$invfire='none';}else{$fire='none';$invfire='';}
if($max=='earth'){$earth='';$invearth='none';}else{$earth='none';$invearth='';}
if($max=='water'){$water='';$invwater='none';}else{$water='none';$invwater='';}
if($max=='air'){$air='';$invair='none';}else{$air='none';$invair='';}
//debug($max);

?>

<!-- ================================= -->
<div class="report <?= $fire ?>">
    <div class="report__inner">
        <h1 class="report__title">Your UTC Basic report</h1>
    <h2 class="report__subtitle">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="56" height="56" viewBox="0 0 102.1 102.1">
            <circle fill-rule="evenodd" clip-rule="evenodd" fill="#F9C778" stroke="#551642" stroke-width="3" stroke-miterlimit="10" cx="51.1" cy="51.1" r="49.6"/>
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M75.8,51.6c-1-5.3-2.8-10.2-5.7-14.8c-1.3-2-3-3.6-4.7-5.5c0.2,1.6,0.4,3,0.5,4.4c0.2,2.1,0.2,4.3-0.6,6.3
              c-0.8,2-2.3,3-4,2.9c-1.4-0.1-2.6-0.9-3.4-2c-1.5-1.9-1.9-4.1-1.6-6.4c0.2-1.6,0.6-3.2,0.9-4.7c0.3-1.8,0.6-3.7,0.3-5.6
              c-0.7-3.5-4.3-7.1-8.1-7.9c0.3,1.1,0.5,2.2,0.7,3.3c0.6,2.9-0.1,5.2-2.7,6.8c-0.8,0.5-1.6,1.1-2.4,1.7c-4.1,3-6.3,7.1-6.1,12.2
              c0.1,1.6,0.4,3.1,0.6,4.7c0.3,2,0.1,3.9-1.5,5.3c-0.8,0.7-1.6,0.8-2.4,0.2c-0.4-0.3-0.7-0.6-1-0.9c-1.5-2-2-4.4-1.8-6.9
              c0.1-1.7,0.4-3.4,0.6-5.3c-0.4,0.5-0.7,0.9-1,1.3c-1.9,2.4-3.8,4.7-4.9,7.6c-2,5.2-2.1,10.4-0.8,15.7c1.5,6,4.5,11.2,9.4,15
              c5.4,4.2,11.6,5.6,18.3,4.8c7.1-0.8,12.7-4.1,16.8-9.9C75.8,67.2,77.5,59.7,75.8,51.6z M73.9,57.7c-0.3,8.6-3.7,15.6-11,20.4
              c-4.2,2.7-8.8,3.5-13.7,3.2c-5.8-0.4-10.7-2.8-14.6-7.1c-3.4-3.8-5.4-8.3-6.1-13.4c-0.6-4-0.3-7.8,1.2-11.6c0.1-0.3,0.3-0.7,0.4-1
              c0-0.1,0.1-0.1,0.2-0.2c0.2,0.7,0.3,1.3,0.6,1.9c0.6,1.7,1.5,3.3,2.9,4.4c1.8,1.4,4,1.3,5.8-0.2c2.2-1.9,2.8-4.3,2.4-7.1
              c-0.3-1.7-0.6-3.4-0.6-5.1c-0.1-4,1.6-7.2,4.8-9.6c1.1-0.9,2.3-1.6,3.5-2.4c2.1-1.5,3.3-3.5,3.2-6.1c0-0.1,0-0.2,0-0.4
              c1.2,1.2,1.8,2.5,2,4.1c0.2,2.2-0.3,4.3-0.8,6.5c-0.6,3-0.7,6,0.7,8.8c1.3,2.6,3.2,4.4,6.3,4.8c2.2,0.3,4-0.6,5.4-2.3
              c1.3-1.5,1.8-3.4,2.1-5.3c0-0.2,0-0.3,0.1-0.5c0.1,0,0.2-0.1,0.3-0.1c0.8,1.7,1.6,3.4,2.3,5.1C72.8,48.6,74.1,53,73.9,57.7z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M62.8,57.6c-1.9-2.3-4-4.4-5.9-6.7c-1.3-1.5-2.6-3.1-3.7-4.8c-1.5-2.4-2.2-5.1-2.2-7.9c0-0.9,0-1.7,0-2.8
              c-1.1,1-2.1,1.9-3,2.8c-3.1,3.1-4.2,6.9-2.9,11.1c0.7,2.5,1.9,4.9,2.8,7.4c0.6,1.5,1.2,3,1.6,4.6c0.6,2.7-1.4,4.8-4,4.4
              c-1.1-0.2-2.1-0.6-3-1.1c-1.7-1-2.7-2.7-3.4-4.5c-0.4-1-0.7-2.1-1.1-3.2c-0.5,1.1-1.1,2.2-1.5,3.2c-2.7,6.2-0.9,12.7,4.7,16.5
              c4.3,2.9,9.1,3.6,14.1,2.5c4.5-1,8-3.5,10.1-7.7c1.3-2.6,1.5-5.2,0.5-8C65.2,61.2,64.2,59.2,62.8,57.6z M63.1,70.2
              c-1.8,3.5-4.7,5.5-8.5,6.3c-4.5,0.9-8.7,0.3-12.4-2.5c-3.4-2.6-4.8-6-4.2-10.5c0.3,0.4,0.5,0.6,0.7,0.9c2,2.5,4.5,3.9,7.8,3.7
              c3.6-0.2,6.2-3.5,5.6-7.1c-0.4-2.5-1.5-4.7-2.5-6.9c-1-2.3-2-4.5-2.3-7c-0.2-2.1,0.1-4,1.3-5.8c0.3,1.1,0.6,2.2,1,3.3
              c1.1,3.1,3.2,5.6,5.3,7.9c2,2.2,4.1,4.3,5.9,6.7c1.1,1.4,1.8,3.1,2.5,4.7C64.4,66.1,64.1,68.2,63.1,70.2z"/>
          </svg>
          <span class="inline-block inline-block--middle">Your driver</span>
    </h2>
        <div class="report__desc default-text">
            <p><span class="bold">Understand your Drivers.</span>
            Drivers are powerful sources of energy that we rely on and that make you feel in your element. We all use the 4 drivers, but not in the same way: we tend to have a “preferred” driver, which we use most in our daily chores and in moments of difficulty. On the graph in your profile page you can read how much you tend to use each of them.
            </p>
          <p>
            <span class="bold">Your first driver is Fire: The power of decision.</span>
            You take initiative and keep your focus on reaching goals. You will try to influence others in reaching these and dare to take risks while doing so. You are good at taking quick decisions when a situation asks for that and you enjoy fast pace. You know how to be persuasive and take strategic action. You can be enthusiastic and tend to be impatient when things are going slow. Your ambition will get you far and you won’t accept limitations when they are blocking the goals to be reached. You enjoy winning.
          </p>
          <p>
            <span class="bold">What gives you ENERGY & what DISENGAGES you.</span>
            You like to be challenged in your work environment. Some competition is no problem for you, as you enjoy performing to reach challenging objectives. A fast pace work environment, where you are in the position to make decisions and influence others will give you energy.
          </p>
          <p>
            <span class="bold">Your motto/favorite verb</span>: I want
          </p>
        </div>
    </div>
</div>
<!-- -------- 2-->
<div class="report <?= $earth ?>">
    <div class="report__inner">
        <h1 class="report__title">Your UTC Basic report</h1>
    <h2 class="report__subtitle">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="56" height="56" viewBox="0 0 102.1 102.1">
                <circle fill-rule="evenodd" clip-rule="evenodd" fill="#F9C778" stroke="#551642" stroke-width="3" stroke-miterlimit="10" cx="51.1" cy="51.1" r="49.6"/>
                <path fill="#FFFFFF" d="M79.1,48.3c-0.1-0.6-0.3-1.2-0.4-1.8c-0.3-1.3-0.5-2.7-1-4C73.9,31.5,66,25,54.5,23.2c-0.2,0-0.3-0.1-0.5-0.1
                  C54,23,53.9,23,53.8,23l-5.3,0l-0.1,0c-0.5,0.1-0.9,0.2-1.4,0.3c-1,0.2-2,0.4-2.9,0.6c-11.2,2.8-19.6,12.5-20.9,24
                  C21.5,63.1,32,76.7,47,78.9c0.3,0.1,0.7,0.1,1,0.2l0.5,0.1l5.1,0l0.1,0c0.4-0.1,0.8-0.2,1.2-0.2c0.9-0.2,1.8-0.3,2.7-0.6
                  c11.6-2.9,19.7-12.1,21.2-24c0-0.1,0-0.2,0.1-0.2c0-0.1,0.1-0.1,0.1-0.2l0-0.1v-5.3L79.1,48.3z M46.2,70.7c-0.2-1.1-0.7-2-1.1-3
                  c-0.2-0.4-0.4-0.7-0.5-1.1c-0.5-1-0.4-2.3,0.3-3.3c0.7-1.1,1.9-1.7,3.3-1.6c0.2,0,0.5,0.2,0.8,0.4c0.2,0.2,0.4,0.3,0.6,0.5
                  c0.8,0.6,1.5,1.2,2.1,1.9c2.3,2.6,5.4,4.4,9.7,5.4c1.4,0.3,2.8,0.7,4.2,1l0.6,0.1c-3,2.8-9.9,5.1-15.7,5.1c-1.6,0-3-0.2-4.1-0.6
                  c0-0.4,0-0.8,0-1.1C46.4,73.3,46.4,72,46.2,70.7z M55,63.5c-0.9-0.8-1.8-1.6-2.7-2.4c-0.5-0.4-0.9-0.8-1.4-1.3
                  c-1.4-1.3-3.2-1.6-4.9-0.8c-1.5,0.7-2.7,1.5-3.6,2.4c-1.6,1.7-1.9,3.7-0.9,5.8c0.5,1,0.9,1.9,1.4,2.9c0.7,1.4,0.8,3,0.4,4.7
                  c-4.6-0.6-12.8-7.6-14.6-12.4c0.1,0,0.3,0,0.4-0.1c0.9-0.1,1.8-0.3,2.7-0.5c1.6-0.4,2.9-0.9,4.1-1.4c1.6-0.7,1.8-1.8,1.6-3.2
                  L37.5,57c-0.1-0.4-0.2-0.9-0.2-1.3c-0.1-1.4,0.4-1.9,1.8-2.1c0.4,0,0.7,0,1.1-0.1c0.7,0,1.4,0,2.2-0.2c1.1-0.3,2.1-1,2.8-1.7
                  c1.3-1.5,2.5-3.2,3.6-4.8l0.3-0.4c1.1-1.6,1-3.6-0.2-4.9c-1.8-1.8-3.7-3.3-5.4-4.6c-0.2-0.2-0.5-0.3-0.9-0.3c-0.5,0-1,0.1-1.4,0.4
                  c-0.8,0.5-1.4,1.1-2.1,1.8c-0.3,0.3-0.5,0.4-0.9,0.4h0c-0.1,0-0.2,0-0.4-0.1c-2.3-0.6-4.5-1.5-6.9-3.1c3.4-4.6,7.7-7.6,13-9.2
                  c2.7-0.8,5.5-1.2,8.5-1c0.3,0,0.4,0.1,0.4,0.1c0,0,0,0.1,0,0.3c-0.1,2.5,0.7,4.8,2.4,6.8c0.9,1,1.8,2,2.7,2.9l0.3,0.4
                  c1.1,1.1,2.5,1.7,4.1,1.5c0.3,0,0.6,0,1-0.1c0.4,0,0.7,0,1.1-0.1c0.2,0,0.3,0,0.3,0c0,0.1,0,0.2-0.1,0.3c-0.2,0.4-0.3,0.9-0.5,1.3
                  c-0.4,1.3-0.9,2.4-1.5,3.4c-1.3,1.9-1.7,3.9-1.1,6c0.5,2.2,1.1,4.2,1.9,6.2c0.6,1.7,2,2.7,4,2.7l0.2,0c0.6,0,1.1,0,1.7-0.1
                  c0.6,0,1.2-0.1,1.9-0.1c1.5,0,3,1.3,3.3,2.7c0,0.2,0,0.4-0.1,0.7c-1.1,2.7-2.7,5.2-4.7,7.2c-0.2,0.2-0.5,0.3-0.8,0.3
                  c-4.2-0.5-7.8-1.5-11.2-3c-0.7-0.3-1.3-0.8-1.9-1.4C55.3,63.8,55.1,63.7,55,63.5z M36.4,42c2.2,0.7,3.9,0.2,5.1-1.3
                  c0.2-0.2,0.5-0.5,0.8-0.7c0.1,0,0.1-0.1,0.2-0.1c0.3,0.3,0.6,0.5,0.9,0.8c1.1,1,2.2,1.9,3.2,3c0.4,0.4,0.3,0.9,0,1.4
                  c-0.4,0.5-0.8,1.1-1.2,1.6c-0.8,1.1-1.6,2.2-2.5,3.2c-0.3,0.4-1,0.6-1.6,0.8l-0.3,0.1c-0.2,0.1-0.5,0-0.8,0c-0.2,0-0.3,0-0.5,0
                  c-1.9,0-3.4,0.6-4.3,1.7c-0.9,1.1-1.2,2.7-0.9,4.5c0.1,0.5,0.2,1,0.1,1.1c-0.1,0.1-0.7,0.3-1,0.4c-1.4,0.4-2.9,0.7-4.4,1l-1.2,0.2
                  c-0.1,0-0.2,0-0.2,0c-0.1,0-0.2,0-0.3-0.3c-2.3-7.1-1.7-14,1.8-20.5l1.2,0.6c1.4,0.7,2.8,1.4,4.2,2c0.5,0.2,0.9,0.3,1.4,0.5
                  L36.4,42z M69.4,54.5c-0.8,0.1-1.4,0.2-1.9,0.2c-1.3,0-1.5-0.3-2.5-3.2c-0.4-1.3-0.7-2.7-0.8-4.2c0-0.7,0.2-1.5,0.6-2.2
                  c1.2-2.2,2.4-4.5,2.8-7.2c0.1-1,0-1.7-0.4-2.2c-0.5-0.6-1.4-0.8-2-0.9c-0.5,0-1,0-1.5,0c-0.5,0-1,0.1-1.4,0
                  c-0.9-0.1-1.5-0.3-1.8-0.6c-1.3-1.3-2.5-2.7-3.8-4.4c-0.6-0.8-0.9-1.9-0.8-3.3c6.4,0.9,12.3,4.7,16.2,10.6
                  c3.9,5.9,5.2,12.9,3.6,19.4c-1.3-1.3-2.9-2-4.9-2C70.2,54.5,69.8,54.5,69.4,54.5z"/>
                <path fill="#FFFFFF" d="M53,51.9l-0.1,0c-1.9,0-3.3,1.4-3.4,3.3c0,1.8,1.4,3.4,3.1,3.5l0.1,0c1.7,0,3.4-1.7,3.4-3.5
                  C56.2,53.3,54.8,51.9,53,51.9z M53,55c0,0,0.1,0.1,0.1,0.1c-0.1,0.1-0.3,0.2-0.4,0.3c0,0-0.1-0.1-0.1-0.1
                  C52.8,55.2,52.9,55.1,53,55z M52.7,58C52.7,58,52.7,58,52.7,58L52.7,58L52.7,58z"/>
              </svg>        
          <span class="inline-block inline-block--middle">Your driver</span>
    </h2>
        <div class="report__desc default-text">
            <p><span class="bold">Understand your Drivers.</span>
            Drivers are powerful sources of energy that we rely on and that make you feel in your element. We all use the 4 drivers, but not in the same way: we tend to have a “preferred” driver, which we use most in our daily chores and in moments of difficulty. On the graph in your profile page you can read how much you tend to use each of them.
            </p>
          <p>
            <span class="bold">Your first driver is Earth: The power of Action.</span>
            You like to structure things and have a preference for clear procedures. You are action oriented and enjoy finishing what you or others have started. You appreciate reliability and bring order for that purpose. Precision, structure and discipline help you to do your work the way you think it should be done or is expected from you. You prefer a pragmatic approach, like to find and seek practical solutions, and you like facts and figures.  You are normally patient and create clarity by ordering information, sometimes overly careful. Your perseverance and discipline bring practical results, also to others.
          </p>
          <p>
            <span class="bold">What gives you ENERGY & what DISENGAGES you.</span>
            You like a structured working environment with clear instructions, systems. It is important for you to deliver on your agreements and you expect others to do likewise. You enjoy task oriented assignments. Getting things done is your slogan, therefore you do not feel happy at work when people don’t finish their tasks. 
          </p>
          <p>
            <span class="bold">Your motto/favorite verb</span>: I do
        </div>
    </div>
</div>
<!--------3---->
<div class="report <?= $water ?>">
    <div class="report__inner">
        <h1 class="report__title">Your UTC Basic report</h1>
    <h2 class="report__subtitle">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="56" height="56" viewBox="0 0 102.1 102.1">
                <circle fill-rule="evenodd" clip-rule="evenodd" fill="#F9C778" stroke="#551642" stroke-width="3" stroke-miterlimit="10" cx="51.1" cy="51.1" r="49.6"/>
                <path fill="#ffffff" d="M66.9,52.4c-1.4-2.5-3.1-4.8-4.8-7.1c-0.4-0.6-0.9-1.2-1.3-1.9L60.5,43c-1.9-2.7-3.9-5.5-5.5-8.5
                  c-0.8-1.5-1.8-3.6-2.2-5.9c-0.2-1.2-0.3-2.3-0.4-3.5c0-0.4-0.1-0.9-0.1-1.3c0-0.1,0-0.2,0-0.2c-2.9,2.8-5.1,5.2-6.9,7.6
                  c-2,2.7-3.8,5.5-5.4,8.2c-2.3,3.9-4,7.5-5.3,11.1C34,52.7,33.4,54.9,33,57c-0.5,2.6-0.4,5.3,0.3,7.9c1,3.7,3,6.9,6,9.4
                  c2.6,2.2,5.6,3.5,8.9,4c0.4,0.1,0.9,0.1,1.3,0.2l0.5,0.1h2c0.1,0,0.2-0.1,0.3-0.1c2.4-0.2,4.6-0.8,6.7-1.8c2.5-1.2,4.7-3,6.5-5.2
                  c1.2-1.5,2.1-3.1,2.7-4.9c0.8-2.1,1.2-4.4,1.1-6.6C69.4,57.1,68.2,54.7,66.9,52.4z M66.1,63.3c-0.5,2.7-1.7,5.1-3.5,7.1
                  c-2.7,3-5.9,4.7-9.8,5.1c-0.6,0.1-1.2,0.1-1.8,0.1l0,0c-3.4,0-6.5-1.1-9.2-3.2c-2.5-1.9-4.3-4.5-5.3-7.5c-0.8-2.5-0.9-5.3-0.4-8
                  c1-4.5,2.8-8.5,4.2-11.5c1.9-3.8,4-7.4,6.4-10.9c0.4-0.6,0.9-1.2,1.3-1.8l0.4-0.5c0.1-0.1,0.2-0.2,0.3-0.4l1.2-1.4l0.8,2
                  c0.1,0.3,0.2,0.6,0.3,0.8c1.1,2.7,2.6,5.3,4.7,8.4c1.1,1.6,2.2,3.1,3.3,4.7c1.1,1.5,2.2,3.1,3.3,4.6c1.5,2.2,2.6,4.2,3.4,6.2
                  C66.5,58.9,66.6,60.9,66.1,63.3z"/>
                <path fill="#ffffff" d="M44.1,62.8c-1.2-2.8-1.1-5.7-0.9-8.6c0.1-1.2,0.3-2.4,0.5-3.7c-2.2,2.3-3.4,5-3.6,8.2
                  c-0.2,3.1,0.8,5.8,2.7,8.1c1.6,1.9,3.6,3.3,6.2,3.7c0.8,0.1,1.6,0.2,2.5,0c-0.5-0.3-0.9-0.5-1.2-0.7
                  C47.3,68.3,45.3,65.9,44.1,62.8z"/>
              </svg>
        <span class="inline-block inline-block--middle">Your driver</span>
    </h2>
        <div class="report__desc default-text">
            <p><span class="bold">Understand your Drivers.</span>
            Drivers are powerful sources of energy that we rely on and that make you feel in your element. We all use the 4 drivers, but not in the same way: we tend to have a “preferred” driver, which we use most in our daily chores and in moments of difficulty. On the graph in your profile page you can read how much you tend to use each of them.
            </p>
          <p>
            <span class="bold">Your first driver is Water: The power of Connection.</span>
            You are sociable and keep your focus on harmony in the group. You like to collaborate with others, are accommodating and respectful. You are sensitive to feelings and pay attention to the opinions of others. You like to connect with other people and therefore you are usually a good networker. You actively strive for consensus in making decisions, and you foster team spirit. You show empathy and offer help to others when needed. You can be understanding, a good listener, cooperative, with a friendly attitude, and tend to avoid conflict. Your focus is on the other person and on the group, so sometimes you need to be more assertive for yourself.
          </p>
          <p>
            <span class="bold">What gives you ENERGY & what DISENGAGES you.</span>
            You flourish in working in teams with a good atmosphere and harmony. You don’t mind change, as long as there is a wide support for it. An environment where people can perform through consultation and decision making through consensus is highly appreciated. Not conflict though!
          </p>
          <p>
            <span class="bold">Your motto/favorite verb</span>: I feel
          </p>
        </div>
    </div>
</div>
<!----------4-->
<div class="report <?= $air ?>">
    <div class="report__inner">
        <h1 class="report__title">Your UTC Basic report</h1>
    <h2 class="report__subtitle">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="56" height="56" viewBox="0 0 102.1 102.1">
                <circle fill-rule="evenodd" clip-rule="evenodd" fill="#F9C778" stroke="#551642" stroke-width="3" stroke-miterlimit="10" cx="51.1" cy="51.1" r="49.6"/>
                <path fill="#FFFFFF" d="M75.5,38c-2.7-0.6-5,0.1-6.8,2c-2.1,2.2-2.2,5.9-0.1,7.9c0.7,0.7,1.7,0.7,2.4,0.1c0.8-0.6,0.9-1.6,0.3-2.5
                  c-0.5-0.8-0.7-1.6-0.4-2.3c0.2-0.7,0.8-1.3,1.7-1.6c1.4-0.5,2.7-0.2,3.8,0.7c1.1,1,1.5,2.4,1.2,3.9c-0.5,2.1-2.6,3.6-5,3.6l-4.6,0
                  l-13.7,0c-6.2,0-12.4,0-18.5,0c-0.9,0-1.5,0.4-1.8,1.1c-0.2,0.6-0.2,1.2,0.2,1.6c0.4,0.5,1,0.8,1.8,0.8c2.9,0,5.9,0,8.8,0l9.6,0
                  l8.8,0c3,0,6.1,0,9.1,0c0.9,0,1.7-0.1,2.5-0.3c2.3-0.5,4.3-2,5.5-4c1.1-1.9,1.4-4.1,0.8-6.1C80.1,40.4,78.3,38.7,75.5,38z"/>
                <path fill="#FFFFFF" d="M60.3,59.3c-1.9,0-3.9-0.1-6.3-0.1c-1.6,0-3.3,0-4.9,0c-1.6,0-3.3,0-4.9,0h-0.5v0l-6.7,0c-2.8,0-5.6,0-8.5,0
                  c-0.6,0-1.1,0.1-1.5,0.4c-0.7,0.4-0.8,1.3-0.6,1.9c0.2,0.8,0.9,1.3,1.8,1.3c0.8,0,1.6,0,2.3,0l28.6,0c1.9,0,3.4,0.6,4.4,1.9
                  c1,1.2,1.2,2.6,0.7,4c-0.5,1.3-1.5,2.1-2.9,2.3c-1.1,0.2-2.2-0.3-2.8-1.1c-0.4-0.5-0.5-1.2-0.4-1.8c0.1-0.5,0.1-1.1-0.2-1.6
                  c-0.2-0.3-0.5-0.7-1.2-0.8c-0.1,0-0.3,0-0.4,0c-0.9,0-1.6,0.7-1.8,1.8C54.1,70,54.9,72,57,73.5c2.2,1.5,4.6,1.6,7.1,0.4
                  c2.5-1.3,3.8-3.4,4-6.2c0.1-2-0.7-4.1-2.2-5.7C64.4,60.3,62.4,59.3,60.3,59.3z"/>
                <path fill="#FFFFFF" d="M42.6,44.3c1.9,0,3.9,0,5.8,0c1,0,2-0.2,2.9-0.4c4.3-1.3,6.9-5.3,6.2-9.7c-0.6-3.8-4.1-6.8-8-6.8
                  c-0.5,0-1.1,0.1-1.6,0.2c-3.2,0.7-5.2,2.6-5.9,5.6c-0.2,0.7-0.2,1.5-0.1,2.4c0.1,0.9,0.9,1.5,1.9,1.3c0.9-0.1,1.6-0.8,1.5-1.8
                  c0-1.4,0.4-2.5,1.5-3.3c1.4-1,3.5-1.1,5.1-0.1c1.6,1,2.4,2.9,2,4.7c-0.6,2.5-2.8,4.2-5.4,4.2l-10.3,0c-5.1,0-10.3,0-15.4,0
                  c-0.5,0-0.9,0.1-1.2,0.2c-0.7,0.3-1.1,1.1-0.9,2c0.2,0.9,0.9,1.4,1.9,1.4c2.1,0,4.2,0,6.2,0l6.9,0L42.6,44.3z"/>
          </svg>        
          <span class="inline-block inline-block--middle">Your driver</span>
    </h2>
        <div class="report__desc default-text">
            <p><span class="bold">Understand your Drivers.</span>
            Drivers are powerful sources of energy that we rely on and that make you feel in your element. We all use the 4 drivers, but not in the same way: we tend to have a “preferred” driver, which we use most in our daily chores and in moments of difficulty. On the graph in your profile page you can read how much you tend to use each of them.
            </p>
          <p>
            <span class="bold">Your first driver is AIR: The power of Thought.</span>
            You like to analyse and think things through, look at the big picture and keep a helicopter view. You have an investigating attitude with an open mind and you are capable to come up with new solutions. You take your time to discover links between things and look at a problem from different angles to deepen your understanding. You will take action after you have examined all aspects of a situation. You can be flexible, curious, creative, you tend to be tolerant to the ideas of other people but also critical.
          </p>
          <p>
            <span class="bold">What gives you ENERGY & what DISENGAGES you.</span>
            You flourish in working situations where you can brainstorm and think out of the box. You want to have autonomy in your work and not to feel restricted in your thought and action. With this personal freedom you will get the best out of yourself.
          </p>
          <p>
            <span class="bold">Your motto/favorite verb</span>: I think
          </p>
        </div>
    </div>
</div>
<!-- -------------------- -->

<!--  ================================   -->
<div class="report">
  <div class="report__inner">
      
<div class="report__elements">
  <div class="report__elements-inner">
      
    <div class="report__element <?= $invwater ?>">
      <h3 class="report__element-title">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="34" height="34" viewBox="0 0 100 100">
          <circle fill-rule="evenodd" clip-rule="evenodd" fill="#FBCD76" cx="50" cy="49.557" r="49.557"/>
          <path fill="#FFFFFF" d="M65.872,50.935c-1.389-2.479-3.104-4.833-4.762-7.11c-0.449-0.617-0.898-1.234-1.342-1.854l-0.318-0.445
            c-1.937-2.703-3.938-5.499-5.523-8.542c-0.806-1.549-1.779-3.62-2.153-5.905c-0.189-1.155-0.281-2.326-0.368-3.457
            c-0.034-0.443-0.068-0.886-0.108-1.328c-0.009-0.082-0.016-0.162-0.021-0.243c-2.917,2.755-5.101,5.158-6.867,7.555
            c-1.994,2.708-3.796,5.458-5.354,8.174c-2.252,3.923-3.976,7.545-5.267,11.072c-0.862,2.354-1.469,4.536-1.854,6.672
            c-0.469,2.608-0.358,5.251,0.329,7.855c0.986,3.734,2.999,6.896,5.979,9.393c2.602,2.179,5.582,3.532,8.859,4.023
            c0.441,0.066,0.881,0.129,1.321,0.191l0.528,0.075h2.022c0.086-0.024,0.197-0.051,0.329-0.062
            c2.383-0.193,4.633-0.799,6.685-1.797c2.549-1.239,4.731-3.003,6.485-5.243c1.165-1.487,2.089-3.15,2.746-4.94
            c0.788-2.149,1.168-4.356,1.131-6.559C68.301,55.648,67.13,53.181,65.872,50.935z M65.008,61.761
            c-0.544,2.674-1.737,5.054-3.547,7.074c-2.653,2.963-5.944,4.672-9.78,5.08c-0.595,0.062-1.189,0.094-1.768,0.094l0,0
            c-3.364-0.001-6.461-1.061-9.204-3.15c-2.528-1.927-4.315-4.451-5.31-7.502c-0.83-2.544-0.948-5.251-0.353-8.046
            c0.951-4.469,2.759-8.489,4.228-11.491c1.853-3.782,4.018-7.44,6.436-10.874c0.428-0.608,0.874-1.203,1.32-1.798l0.377-0.503
            c0.084-0.113,0.181-0.221,0.3-0.35l1.231-1.374l0.759,1.975c0.107,0.286,0.209,0.551,0.314,0.814
            c1.078,2.672,2.576,5.347,4.715,8.416c1.096,1.573,2.215,3.13,3.334,4.688c1.103,1.534,2.204,3.067,3.284,4.616
            c1.545,2.212,2.62,4.178,3.384,6.185C65.409,57.405,65.498,59.358,65.008,61.761z"/>
          <path fill="#FFFFFF" d="M43,61.349c-1.179-2.786-1.146-5.711-0.857-8.649c0.12-1.227,0.299-2.45,0.45-3.674
            c-2.247,2.296-3.441,5.04-3.646,8.197c-0.198,3.069,0.759,5.767,2.733,8.111c1.638,1.946,3.646,3.293,6.185,3.746
            c0.812,0.146,1.634,0.246,2.534-0.017c-0.466-0.25-0.859-0.453-1.243-0.672C46.291,66.756,44.276,64.364,43,61.349z"/>
        </svg>
        <span class="report__element-title-name inline-block inline-block--top">Water</span>
      </h3>

      <div class="default-text">
        <p>Water driven people are sociable and have their focus on harmony in the group. They like to collaborate with others, they are accommodating and respectful and sensitive to feelings and thoughts of others. They like to connect with other people and are therefore usually good networkers. They strive for consensus in making decisions. They are empathetic and offer help to others when needed. They can be understanding, are good listeners, cooperative, friendly, loyal, and tend to avoid conflict.</p>
      </div>
    </div>
<!-------22---> 
    <div class="report__element <?= $invearth ?>">
      <h3 class="report__element-title">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="34" height="34" viewBox="0 0 100 100">
                      <circle fill-rule="evenodd" clip-rule="evenodd" fill="#FBCD76" cx="49.557" cy="49.557" r="49.557"/>
                      <path fill="#FFFFFF" d="M77.613,46.845c-0.137-0.606-0.255-1.218-0.375-1.83c-0.259-1.338-0.527-2.721-0.991-4.035
                        c-3.886-10.997-11.703-17.485-23.234-19.283c-0.155-0.024-0.306-0.074-0.457-0.122c-0.091-0.029-0.182-0.058-0.274-0.083
                        l-5.318-0.024l-0.125,0.013c-0.451,0.092-0.902,0.178-1.354,0.265c-0.967,0.185-1.967,0.377-2.945,0.621
                        c-11.242,2.812-19.634,12.462-20.885,24.013c-1.645,15.192,8.837,28.804,23.863,30.987c0.345,0.05,0.689,0.113,1.033,0.177
                        l0.519,0.094l5.105,0.01l0.061-0.013c0.413-0.083,0.828-0.16,1.243-0.238c0.9-0.169,1.831-0.342,2.741-0.573
                        c11.575-2.933,19.697-12.139,21.199-24.025c0.006-0.052,0.048-0.15,0.085-0.236c0.031-0.073,0.061-0.146,0.087-0.22l0.037-0.101
                        v-5.259L77.613,46.845z M44.734,69.202c-0.176-1.065-0.67-2.042-1.148-2.989c-0.183-0.363-0.367-0.726-0.53-1.09
                        c-0.47-1.049-0.364-2.27,0.281-3.265c0.721-1.113,1.94-1.731,3.254-1.592c0.228,0.025,0.535,0.175,0.804,0.395
                        c0.198,0.161,0.398,0.32,0.599,0.479c0.786,0.625,1.527,1.214,2.132,1.917c2.271,2.641,5.357,4.352,9.709,5.38
                        c1.417,0.335,2.832,0.674,4.247,1.014l0.601,0.144c-2.983,2.798-9.934,5.112-15.722,5.112c-1.616,0-3.038-0.192-4.146-0.559
                        c0.007-0.383,0.021-0.767,0.034-1.15C44.896,71.751,44.943,70.46,44.734,69.202z M53.46,62.029
                        c-0.901-0.776-1.783-1.578-2.664-2.378c-0.465-0.422-0.93-0.845-1.398-1.265c-1.423-1.272-3.21-1.558-4.871-0.778
                        c-1.498,0.705-2.702,1.523-3.58,2.432c-1.597,1.653-1.912,3.698-0.888,5.757c0.474,0.955,0.926,1.92,1.375,2.886
                        c0.67,1.442,0.812,2.982,0.429,4.691c-4.611-0.646-12.784-7.582-14.629-12.371c0.143-0.021,0.286-0.042,0.429-0.062
                        c0.879-0.125,1.788-0.254,2.673-0.481c1.585-0.405,2.939-0.861,4.139-1.395c1.618-0.719,1.794-1.756,1.554-3.198l-0.056-0.33
                        c-0.078-0.448-0.151-0.873-0.171-1.291c-0.063-1.389,0.379-1.909,1.755-2.06c0.363-0.039,0.736-0.048,1.131-0.058
                        c0.712-0.017,1.449-0.035,2.163-0.247c1.094-0.323,2.128-0.955,2.768-1.692c1.311-1.509,2.486-3.159,3.623-4.757l0.295-0.415
                        c1.121-1.573,1.024-3.615-0.229-4.856c-1.773-1.758-3.726-3.332-5.4-4.641c-0.226-0.177-0.535-0.267-0.917-0.267
                        c-0.485,0-1.042,0.145-1.42,0.369c-0.776,0.457-1.42,1.107-2.067,1.79c-0.27,0.285-0.533,0.412-0.854,0.412h0
                        c-0.117,0-0.247-0.017-0.386-0.052c-2.316-0.564-4.534-1.546-6.934-3.076c3.407-4.551,7.671-7.562,13.017-9.192
                        c2.662-0.812,5.534-1.159,8.475-1.042c0.31,0.013,0.377,0.062,0.379,0.057c0.004,0.007,0.036,0.078,0.023,0.292
                        c-0.15,2.499,0.673,4.798,2.448,6.833c0.863,0.99,1.772,1.962,2.651,2.902l0.33,0.353c1.069,1.144,2.463,1.651,4.096,1.507
                        c0.318-0.028,0.637-0.042,0.956-0.058c0.361-0.017,0.723-0.034,1.083-0.068c0.15-0.014,0.273-0.004,0.326,0.008
                        c-0.003,0.055-0.02,0.153-0.077,0.3c-0.169,0.436-0.327,0.88-0.485,1.326c-0.445,1.256-0.865,2.442-1.544,3.448
                        c-1.283,1.902-1.659,3.856-1.146,5.973c0.524,2.162,1.149,4.244,1.858,6.188c0.624,1.709,2.041,2.651,3.991,2.651l0.167-0.002
                        c0.554-0.015,1.107-0.048,1.66-0.081c0.622-0.037,1.243-0.074,1.907-0.085c1.452,0,3.026,1.27,3.302,2.664
                        c0.032,0.159-0.013,0.42-0.109,0.653c-1.13,2.722-2.707,5.155-4.684,7.234c-0.162,0.171-0.516,0.329-0.844,0.323
                        c-4.165-0.547-7.823-1.516-11.183-2.965c-0.682-0.294-1.291-0.841-1.935-1.42C53.813,62.339,53.637,62.181,53.46,62.029z
                         M34.852,40.522c2.214,0.653,3.866,0.208,5.115-1.316c0.199-0.244,0.462-0.465,0.794-0.745c0.058-0.048,0.117-0.098,0.177-0.149
                        c0.302,0.271,0.605,0.539,0.907,0.807c1.072,0.951,2.18,1.934,3.191,2.958c0.354,0.359,0.343,0.865-0.028,1.353
                        c-0.405,0.534-0.799,1.077-1.192,1.62c-0.784,1.08-1.593,2.197-2.475,3.202c-0.314,0.359-1.004,0.573-1.612,0.762l-0.337,0.107
                        c-0.172,0.055-0.48,0.048-0.783,0.03c-0.156-0.009-0.319-0.021-0.527-0.017c-1.894,0.03-3.381,0.631-4.302,1.738
                        c-0.914,1.101-1.232,2.656-0.915,4.523c0.083,0.495,0.17,1.004,0.127,1.116c-0.099,0.11-0.738,0.284-1.046,0.367
                        c-1.427,0.386-2.916,0.677-4.356,0.959l-1.237,0.244c-0.084,0.017-0.163,0.028-0.237,0.028c-0.105,0-0.182,0-0.277-0.288
                        c-2.346-7.073-1.736-13.959,1.833-20.49l1.153,0.563c1.421,0.696,2.811,1.376,4.212,2.035c0.46,0.216,0.94,0.349,1.404,0.477
                        L34.852,40.522z M67.915,53.03c-0.792,0.093-1.422,0.155-1.917,0.155c-1.342,0-1.494-0.312-2.471-3.172
                        c-0.432-1.265-0.703-2.691-0.808-4.238c-0.044-0.656,0.183-1.513,0.591-2.237c1.221-2.163,2.441-4.499,2.769-7.163
                        c0.125-1.011,0-1.685-0.405-2.188c-0.523-0.649-1.414-0.801-2.039-0.858c-0.51-0.047-1.026-0.018-1.542,0.013
                        c-0.481,0.029-0.963,0.062-1.437,0.007c-0.928-0.107-1.545-0.307-1.834-0.595c-1.275-1.267-2.547-2.742-3.778-4.384
                        c-0.622-0.829-0.876-1.871-0.802-3.327c6.408,0.906,12.267,4.734,16.153,10.582c3.904,5.874,5.189,12.874,3.589,19.36
                        c-1.288-1.345-2.937-2.026-4.915-2.026C68.699,52.96,68.311,52.984,67.915,53.03z"/>
                      <path fill="#FFFFFF" d="M51.524,50.368l-0.104-0.001c-1.895,0-3.347,1.42-3.378,3.304c-0.03,1.794,1.421,3.417,3.106,3.474
                        l0.092,0.001c1.747,0,3.403-1.711,3.409-3.521C54.655,51.789,53.34,50.418,51.524,50.368z M51.511,53.519
                        c0.044,0.04,0.094,0.084,0.139,0.127c-0.136,0.112-0.262,0.214-0.37,0.285c-0.036-0.042-0.072-0.087-0.104-0.131
                        C51.263,53.698,51.383,53.597,51.511,53.519z M51.239,56.515c0,0,0,0,0.001,0v0.007L51.239,56.515z"/>
                    </svg>
        <span class="report__element-title-name inline-block inline-block--top">Earth</span>
      </h3>

      <div class="default-text">
        <p>Earth driven people tend to structure things and prefer to follow procedures. They are action oriented and enjoy finishing what they have started or finish what others have started. They like things to be reliable and order things for that purpose. Order, structure and discipline helps them to do their work the way they think it should be done or the way they think others expect them to do it. They prefer a pragmatic approach, like to find and seek practical solutions, have patience, and they like facts and figures. They can be perseverance, disciplined, careful, bring clarity by ordering (concrete) information.</p>
      </div>
    </div>
<!-------33---> 
    <div class="report__element <?= $invfire ?>">
      <h3 class="report__element-title">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="34" height="34" viewBox="0 0 100 100">
                      <circle fill-rule="evenodd" clip-rule="evenodd" fill="#FBCD76" cx="50" cy="49.557" r="49.557"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M74.787,50.084c-1.049-5.25-2.808-10.225-5.66-14.785
                        c-1.267-2.024-2.999-3.635-4.743-5.462c0.187,1.569,0.383,2.963,0.511,4.364c0.197,2.135,0.197,4.264-0.633,6.296
                        c-0.798,1.954-2.281,3.017-4.032,2.855c-1.441-0.133-2.572-0.879-3.445-1.996c-1.485-1.898-1.921-4.105-1.646-6.437
                        c0.187-1.587,0.56-3.151,0.855-4.726c0.347-1.843,0.628-3.699,0.281-5.564c-0.656-3.524-4.348-7.117-8.081-7.921
                        c0.25,1.102,0.505,2.192,0.745,3.286c0.627,2.851-0.126,5.153-2.671,6.758c-0.829,0.524-1.648,1.069-2.437,1.652
                        c-4.106,3.037-6.314,7.064-6.146,12.226c0.051,1.569,0.408,3.128,0.627,4.691c0.282,2.003,0.143,3.884-1.531,5.327
                        c-0.79,0.682-1.579,0.757-2.417,0.153c-0.363-0.263-0.708-0.584-0.972-0.945c-1.495-2.043-2.007-4.376-1.831-6.855
                        c0.121-1.691,0.376-3.373,0.595-5.261c-0.413,0.524-0.707,0.895-0.998,1.269c-1.852,2.38-3.752,4.729-4.869,7.584
                        c-2.013,5.15-2.13,10.417-0.848,15.73c1.459,6.048,4.468,11.183,9.41,15.048c5.396,4.221,11.601,5.586,18.32,4.839
                        c7.057-0.784,12.704-4.104,16.816-9.855C74.778,65.655,76.41,58.203,74.787,50.084z M72.836,56.19
                        c-0.335,8.558-3.684,15.635-11.024,20.425c-4.153,2.71-8.824,3.541-13.736,3.166c-5.806-0.444-10.693-2.779-14.564-7.137
                        c-3.4-3.827-5.356-8.34-6.079-13.391c-0.564-3.951-0.298-7.829,1.157-11.581c0.129-0.334,0.284-0.658,0.432-0.984
                        c0.027-0.059,0.082-0.106,0.175-0.223c0.193,0.657,0.343,1.268,0.553,1.856c0.608,1.717,1.466,3.273,2.943,4.416
                        c1.823,1.409,4.044,1.334,5.775-0.188c2.179-1.916,2.839-4.334,2.428-7.136c-0.251-1.702-0.594-3.407-0.639-5.118
                        c-0.108-4.019,1.613-7.213,4.792-9.623c1.124-0.853,2.323-1.606,3.477-2.419c2.125-1.495,3.271-3.508,3.215-6.147
                        c-0.001-0.085,0.015-0.171,0.035-0.388c1.243,1.192,1.843,2.542,1.988,4.113c0.205,2.208-0.347,4.328-0.792,6.456
                        c-0.626,2.994-0.71,5.952,0.661,8.776c1.275,2.629,3.247,4.432,6.266,4.786c2.222,0.262,4.036-0.581,5.449-2.272
                        c1.287-1.541,1.816-3.394,2.069-5.344c0.021-0.161,0.034-0.322,0.052-0.483c0.087-0.031,0.175-0.062,0.262-0.092
                        c0.771,1.712,1.616,3.396,2.301,5.142C71.719,47.1,73.019,51.539,72.836,56.19z"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M61.753,56.072c-1.905-2.275-3.978-4.41-5.895-6.675
                        c-1.311-1.548-2.59-3.145-3.688-4.846c-1.54-2.386-2.166-5.083-2.151-7.924c0.004-0.868,0-1.735,0-2.784
                        c-1.097,1.018-2.073,1.864-2.984,2.775c-3.113,3.117-4.152,6.866-2.929,11.068c0.736,2.534,1.895,4.942,2.825,7.423
                        c0.57,1.517,1.202,3.03,1.559,4.601c0.608,2.68-1.358,4.846-3.999,4.432c-1.054-0.165-2.132-0.583-3.047-1.138
                        c-1.697-1.029-2.71-2.667-3.358-4.523c-0.36-1.035-0.688-2.081-1.072-3.244c-0.542,1.144-1.056,2.167-1.518,3.213
                        c-2.725,6.161-0.9,12.731,4.66,16.537c4.296,2.94,9.061,3.592,14.07,2.488c4.521-0.997,7.989-3.482,10.079-7.692
                        c1.279-2.576,1.51-5.243,0.543-8C64.122,59.707,63.159,57.75,61.753,56.072z M62.015,68.692c-1.761,3.521-4.7,5.544-8.486,6.337
                        c-4.469,0.936-8.703,0.332-12.4-2.486c-3.391-2.585-4.827-6.049-4.159-10.492c0.294,0.378,0.485,0.641,0.691,0.89
                        c2.036,2.456,4.548,3.932,7.84,3.737c3.631-0.215,6.196-3.482,5.611-7.071c-0.401-2.466-1.486-4.679-2.481-6.928
                        c-0.998-2.253-1.998-4.507-2.289-6.989c-0.241-2.06,0.135-3.983,1.302-5.769c0.343,1.132,0.613,2.222,1.002,3.268
                        c1.139,3.066,3.157,5.551,5.32,7.942c1.99,2.201,4.062,4.344,5.875,6.687c1.076,1.392,1.81,3.08,2.538,4.707
                        C63.309,64.603,63.01,66.704,62.015,68.692z"/>
                    </svg>          
        <span class="report__element-title-name inline-block inline-block--top">Fire</span>
      </h3>

      <div class="default-text">
        <p>Fire driven people take initiative and have their focus on reaching goals. The will try to influence others in reaching them and dare to take risks. They are good at taking quick decisions when a situation asks for that and they enjoy fast pace. They know how to be persuasive and show strategic action. They can be enthusiastic and have a tendency to be impatient when things are going slow and goals aren’t reached as fast as they want. Their ambition will get them far and they won’t accept borders when these are blocking the goals to be reached. They enjoy winning.</p>
      </div>
    </div>
<!-------44---> 
    <div class="report__element <?= $invair ?>">
      <h3 class="report__element-title">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon--middle" width="34" height="34" viewBox="0 0 100 100">
                      <circle fill-rule="evenodd" clip-rule="evenodd" fill="#FBCD76" cx="50" cy="49.558" r="49.557"/>
                      <path fill="#FFFFFF" d="M74.445,36.535c-2.668-0.628-4.994,0.053-6.829,2.006c-2.093,2.225-2.151,5.905-0.126,7.873
                        c0.675,0.657,1.735,0.721,2.431,0.146c0.759-0.628,0.891-1.638,0.323-2.459c-0.522-0.752-0.682-1.571-0.449-2.305
                        c0.23-0.725,0.823-1.295,1.67-1.605c1.397-0.511,2.748-0.246,3.846,0.75c1.13,1.025,1.529,2.37,1.155,3.889
                        c-0.525,2.137-2.601,3.629-5.044,3.631l-4.562,0l-13.686-0.003c-6.18,0-12.36,0-18.541,0.006c-0.893,0-1.542,0.405-1.83,1.137
                        c-0.226,0.575-0.17,1.155,0.156,1.635c0.367,0.539,1.008,0.848,1.758,0.849c2.944,0.005,5.89,0.006,8.834,0.006l9.633-0.001
                        l8.828,0.002c3.041,0,6.081-0.002,9.122-0.015c0.877-0.004,1.722-0.097,2.513-0.276c2.309-0.525,4.304-1.965,5.473-3.954
                        c1.107-1.883,1.386-4.055,0.783-6.116C79.088,38.942,77.253,37.194,74.445,36.535z"/>
                      <path fill="#FFFFFF" d="M59.228,57.799c-1.872-0.046-3.882-0.067-6.323-0.067c-1.626,0-3.252,0.01-4.878,0.019
                        c-1.629,0.009-3.257,0.019-4.886,0.019h-0.538v-0.043l-6.723-0.003c-2.823,0-5.646,0.004-8.468,0.022
                        c-0.556,0.004-1.131,0.147-1.539,0.384c-0.698,0.405-0.813,1.25-0.618,1.908c0.244,0.823,0.893,1.282,1.826,1.292
                        c0.781,0.007,1.562,0.01,2.344,0.01l28.599-0.01c1.933,0,3.376,0.615,4.42,1.879c1.003,1.215,1.244,2.593,0.699,3.986
                        c-0.515,1.318-1.533,2.129-2.944,2.345c-1.085,0.166-2.166-0.271-2.76-1.055c-0.407-0.538-0.536-1.174-0.363-1.792
                        c0.149-0.535,0.078-1.105-0.195-1.565c-0.178-0.298-0.526-0.686-1.174-0.833c-0.135-0.03-0.269-0.045-0.398-0.045
                        c-0.891,0-1.62,0.724-1.815,1.8c-0.45,2.479,0.383,4.475,2.477,5.934c2.17,1.512,4.597,1.647,7.066,0.397
                        c2.496-1.264,3.838-3.363,3.987-6.237c0.105-2.043-0.683-4.131-2.164-5.73C63.366,58.803,61.314,57.849,59.228,57.799z"/>
                      <path fill="#FFFFFF" d="M41.59,42.802c1.947,0,3.894-0.006,5.841-0.029c0.994-0.011,1.994-0.159,2.896-0.429
                        c4.331-1.294,6.897-5.264,6.242-9.654c-0.57-3.814-4.103-6.804-8.041-6.804c-0.545,0-1.087,0.06-1.613,0.179
                        c-3.184,0.719-5.165,2.604-5.89,5.601c-0.171,0.708-0.196,1.545-0.074,2.423c0.124,0.891,0.947,1.472,1.949,1.349
                        c0.939-0.108,1.573-0.831,1.543-1.761c-0.049-1.436,0.427-2.512,1.45-3.292c1.383-1.05,3.516-1.107,5.053-0.134
                        c1.594,1.006,2.431,2.94,2.036,4.705c-0.553,2.468-2.759,4.194-5.363,4.198L37.366,39.16c-5.126,0-10.252,0.003-15.378,0.013
                        c-0.45,0.001-0.881,0.082-1.214,0.225c-0.72,0.312-1.118,1.141-0.947,1.975c0.174,0.85,0.94,1.421,1.906,1.423
                        c2.075,0.003,4.151,0.004,6.226,0.004l6.922-0.006L41.59,42.802z"/>
                    </svg>
        <span class="report__element-title-name inline-block inline-block--top">Air</span>
      </h3>

      <div class="default-text">
        <p>Air driven people tend to analyse, look at the big picture and keep a helicopter view on things. They are thinkers, open minded, creative and analytic.
            They enjoy brainstorming and thinking out of the box, bring creativity and explore new solutions to problems.
            They can be flexible, curious, take time to think things through.
            They do well in brainstorming sessions and innovative situations. As long as they have the possibility and time to think things through and understand underlying processes.</p>
      </div>
    </div>
<!-------=========--->      
  </div>
</div>

            <h2 class="report__title">Rate your report</h2>
            <div class="report__ending default-text">
              <p>Our smart coding system needs your feedback to improve. Just a few click !</p>
            </div>
            <div class="text-center">
              <a class="button button--small button--yellow" href="<?= Url::to(['profile/feedback']) ?>">
                <span class="button__text button__text--small">feedback</span>
              </a>
            </div>

      
  </div>
</div>
<!--------->



