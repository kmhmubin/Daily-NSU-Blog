<!-- Define Root Path -->
<?php include('path.php'); ?>
<!-- include header -->
<?php include(ROOT_PATH . '/includes/_header.php'); ?>
<!-- include navbar -->
<?php include(ROOT_PATH . '/includes/_navbar.php'); ?>


<main class="container">
  <!-- thread details section -->
  <section class="mtb-2">
    <!-- thread title -->
    <div class="mb-2">
      <h1>Why is people so bad at css?</h1>
    </div>
    <!-- category links -->
    <div class="ptb-2">
      <a href="#" class="btn" role="button">Web development</a>
      <a href="#" class="btn" role="button">GitHub</a>
      <a href="#" class="btn" role="button">Self-Improvement</a>
    </div>
    <article class="flex-container thread-body">
      <div class="flex-items">
        <!-- thread author image -->
        <div>
          <img src="assets/image/avatar.png" alt="avatar" width="64" height="64" />
        </div>
      </div>
      <div class="flex-items">
        <!-- Author name and thread date -->
        <div class="inline-flex">
          <div>
            <a href="#">
              <h5>Alisa Hester</h5>
            </a>
          </div>
          <div>
            <h5>|</h5>
          </div>
          <div>
            <h5>
              <span class="text-muted">
                <i class="far fa-clock"></i>
                <time datetime="2022-01-01"> January 1, 2022 </time>
              </span>
            </h5>
          </div>
        </div>
        <!-- thread content -->
        <div>
          <p>
            In many communities i have been, exists certain dislike towards
            writing css, people get frustrated, or tend to settle towards a
            certain technology or strategy because it is what certain author
            says, or is just more comfortable
          </p>
          <p>
            I will talk a little about myself, Im gracrys, you can call me
            hazy, i have been working for more than 5 years as UI designer
            and web developer, lately studying and practicing as UX
            designer, worked with many frameworks like react, vue, and my
            favorite svelte, but specialized on interfaces, on interactions,
            on what the user sees, you can know a little more about the
            differences between front end developers on the article called
            the great divide i studied css a lot, css frameworks from the
            inside, different html and css preprocessors and even advanced
            html and semantics, like when not to use a div for example, but
            thats another topic, and, css has become opinionated, so, in
            summary, im gracrys, and i make web layouts with floats.
          </p>
          <h2>Css has become opinionated</h2>
          <p>
            Now that i just dropped the scary headline, there is nothing bad
            with some technology being opinionated, most frameworks are,
            even javascript or html, but if you get used to those tactics
            and approaches, your tendency is to look over what you know, to
            repeat these approaches and struggle over creative
            technicalities. The design patterns exist for one reason, but
            they arent a bible to follow, you can adapt your algoritms to
            the language you are using and can work even better if you trust
            your capabilities.
          </p>
          <p>
            And no, i am not a float css developer, i used other
            technologies too, but overcomplicating things when floats do the
            work is something you have to ask yourself, most of the time i
            have read "dont use grid because flex can do the work" and you
            have to use more steps, more lines, and two @medias to solve the
            issue.... No thanks. thats where the opinionated part comes, use
            what you know, and when it does fail, break the glass, and hack
            the part
          </p>
          <h2>hacking the code</h2>
          <p>
            "just set the image in absolute and -20 top and it does the
            work" for the sake of love no. Your code must be comprehensible
            and meaningfull, if you hack different things and drop different
            aproaches you are losing consistency, cohesion, your future self
            will get lost, and pray that something doesnt work. Learning how
            to solve an issue properly can save a lot of tape.
          </p>
          <h2>Trust your methodology</h2>
          <p>
            "Yes i use xx methodology, but i just staple some of this some
            of that and some hacks too" Or imagine this case you are using
            certain framework, and your css sheets are full of some other
            methodology and classes that dont adapt together methodologies
            exist after years of research of many people who colectively
            worked to make that strategy viable to most cases, so trust
            them, or better, question them. Whatever at the end you can work
            around them,but do it consistently
          </p>

          <h2>Why is css haaard?</h2>
          <p>
            Because you are dumb, and we all are. Learning a new thing is
            always hard, and css is something you probably never seen
            before, and can get out of hands really easy, practice makes
            perfection, learn what others people use, dont be afraid of
            checking others pages, and learn from your mistakes. And more
            important; take notes.
          </p>

          <h2>There are other things...</h2>
          <p>
            That i would wish to touch here, take risks, if your mentor,
            tutor, jedi, etc, uses certain things, ask him why, dont be
            afraid, he is just more accustomed to certain technologies, over
            scared of them, if you cant ask, look online, or try yourself,
            whats the difference.
          </p>
          <p>
            Frameworks are for lazy people... No. after you get a certain
            level of knowledge, using certain framework can really agilize
            your work, and tailwind is nothing magical, imagine having all
            classes that you need, without writing and rewriting them, wow!
            thats a library, and you can even make your own, tailwind is an
            interesting case while it may seem like syntactic sugar, it can
            add to many classes that you dont need to your code, but using
            it correctly, oof, that can be rewarding
          </p>
        </div>
      </div>
    </article>
    <hr />
  </section>
  <!-- Discussion section -->
  <section class="mtb-2">
    <div>
      <h1>Discussion <span>( 3 )</span></h1>
    </div>
    <div class="comment">
      <textarea name="message" class="text-input contact-input" placeholder="Add your comment....."></textarea><br>
      <button type="submit" class="btn">
        <i class="fas fa-envelope"></i> Submit
      </button>
    </div>
    <div class="comment-container" id="first-comment">
      <!-- first comment card start-->
      <div class="comment-card">
        <h3 class="comment-title">The first comments</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus
          mollitia excepturi quidem! Autem, nemo veniam iste optio vel odit
          quae?
        </p>
        <div class="comment-footer">
          <div>Likes 123</div>
          <div>Dislikes 123</div>
          <div class="show-reply">Reply 2</div>
        </div>
        <!-- first comment card end -->
      </div>
      <!-- second comment card start-->
      <div class="comment-container" dataset="first-comment" id="first-reply">
        <!-- first comment reply card start-->
        <div class="comment-card">
          <h3 class="comment-title">The first reply</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus
            mollitia excepturi quidem! Autem, nemo veniam iste optio vel
            odit quae?
          </p>
          <div class="comment-footer">
            <div>Likes 123</div>
            <div>Dislikes 123</div>
            <div class="show-reply">Reply 2</div>
          </div>
          <!-- first comment reply card end -->
        </div>

        <div class="comment-container" dataset="first-reply" id="second-reply">
          <!-- first comment card start-->
          <div class="comment-card">
            <h3 class="comment-title">The second reply</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Natus mollitia excepturi quidem! Autem, nemo veniam iste optio
              vel odit quae?
            </p>
            <div class="comment-footer">
              <div>Likes 123</div>
              <div>Dislikes 123</div>
              <div class="show-reply">Reply 2</div>
            </div>
            <!-- first comment card end -->
          </div>
          <!-- second comment card start-->
          <div class="comment-container" dataset="first-comment" id="second-comment">
            <!-- first comment reply card start-->
            <div class="comment-card">
              <h3 class="comment-title">The first comments reply</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Natus mollitia excepturi quidem! Autem, nemo veniam iste
                optio vel odit quae?
              </p>
              <div class="comment-footer">
                <div>Likes 123</div>
                <div>Dislikes 123</div>
                <div class="show-reply">Reply 2</div>
              </div>
              <!-- first comment reply card end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- footer -->
<?php include(ROOT_PATH . '/includes/_footer.php'); ?>