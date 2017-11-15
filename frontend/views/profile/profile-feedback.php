<?php include('./_includes/_head.php'); ?>
  <body>
    <div class="wrapper">
      <?php include('./_includes/_header.php'); ?>
      <main class="main">
        <div class="feedback">
          <div id="feedback-tabs" class="feedback__inner">
            <p class="feedback__title">Feedback page UTC</p>
            <div class="feedback__nav">
              <span class="feedback__nav-item t-eui-tab-nav-item--active">Rate our Talent Coding</span>
            </div>
            <div class="feedback__content">
              <div class="feedback__tab t-eui-tab-item--active">
                <div class="feedback__form">
                  <form>
                    <fieldset class="form">
                      <div class="form-group">
                        <label class="form-group__title">How much do you agree with the outcome of the Basic UTC?</label>
                        <div class="rating">
                          <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1-5">
                          <label for="rating-input-1-5" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1-4">
                          <label for="rating-input-1-4" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1-3">
                          <label for="rating-input-1-3" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1-2">
                          <label for="rating-input-1-2" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1-1">
                          <label for="rating-input-1-1" class="rating-star"></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-group__title">How much did the outcome of the Basic UTC surprise you?</label>
                        <div class="rating">
                          <input type="radio" class="rating-input" id="rating-input-2-5" name="rating-input-2-5">
                          <label for="rating-input-2-5" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-2-4" name="rating-input-2-4">
                          <label for="rating-input-2-4" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-2-3" name="rating-input-2-3">
                          <label for="rating-input-2-3" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-2-2" name="rating-input-2-2">
                          <label for="rating-input-2-2" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-2-1" name="rating-input-2-1">
                          <label for="rating-input-2-1" class="rating-star"></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-group__title">How much would vou recommend our Basic UTC to your friends?</label>
                        <div class="rating">
                          <input type="radio" class="rating-input" id="rating-input-3-5" name="rating-input-3-5">
                          <label for="rating-input-3-5" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-3-4" name="rating-input-3-4">
                          <label for="rating-input-3-4" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-3-3" name="rating-input-3-3">
                          <label for="rating-input-3-3" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-3-2" name="rating-input-3-2">
                          <label for="rating-input-3-2" class="rating-star"></label>
                          <input type="radio" class="rating-input" id="rating-input-3-1" name="rating-input-3-1">
                          <label for="rating-input-3-1" class="rating-star"></label>
                        </div>
                      </div>
                      <div class="form-group form-group--last">
                        <div class="feedback__cell feedback__cell--type_field">
                          <label class="form-group__title" for="feedback-explaining">Please help us improve by explaining your rating</label>
                          <textarea id="feedback-explaining" class="input input--area" name="FeedbackFeed[text]" maxlength="350" placeholder="Write a small bio about you... (MAX 350 char.)"></textarea>
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
                  <p class="feedback__notice-sentence">
                    Please send us more detailed feedback, or write down your questions. What would you like to further understand?
                  </p>
                  <p class="feedback__notice-sentence">
                    Our staff will be glad to reply to your message
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <div class="cookie clearfix js-cookie-banner none">
        <div class="cookie__text">
          <p>We have placed cookies on our computer to hel make this website better.</p>
          <p>You can <a class="underline" href="#">change your cookie settings</a> at any time. Please, click on the button or scroll down to continue.</p>
        </div>
        <div class="cookie__buttons">
          <div class="cookie__button">
            <button class="button button--small button--flat button--yellow" type="button">
              <span class="button__text button__text--small">accept</span>
            </button>
          </div>
          <div class="cookie__button">
            <button class="cookie__scroll js-scroll-cookie" type="button">
              <span class="italic light">or </span>scroll down
            </button>
          </div>
        </div>
      </div>
      <?php include('./_includes/_footer.php'); ?>

      <link rel="stylesheet" href="./dist/css/content.css" />

      <script src="./dist/js/common.js"></script>
    </div>
  </body>
</html>
