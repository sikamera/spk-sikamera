<?= $this->extend('index'); ?>

<?= $this->section('content'); ?>

   <!-- Subintro
================================================== -->
<section id="subintro">
      <div class="container">
        <div class="row">
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Blog</a><i class="icon-angle-right"></i></li>
              <li class="active">Blog with right sidebar</li>
            </ul>
          </div>
          <div class="span4">
            <div class="search">
              <form class="input-append">
                <input class="search-form" id="appendedPrependedInput" type="text" placeholder="Search here.." />
                <button class="btn btn-dark" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span8">
            <!-- start article 1 -->
            <article class="blog-post">
              <div class="post-heading">
                <h3><a href="#">This is an example of standard post format</a></h3>
              </div>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <a href="#"><img src="assets/img/dummies/blog1.jpg" alt="" /></a>
                  </div>
                  <ul class="post-meta">
                    <li class="first"><i class="icon-calendar"></i><span>Mar 13, 2013</span></li>
                    <li><i class="icon-comments"></i><span><a href="#">4 comments</a></span></li>
                    <li class="last"><i class="icon-tags"></i><span><a href="#">Design</a>, <a href="#">Blog</a>, <a href="#">Tutorial</a></span></li>
                  </ul>
                  <div class="clearfix">
                  </div>
                  <p>
                    Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                    qui, no vituperata assueverit.
                  </p>
                  <a href="#" class="btn btn-small btn-theme">Read more</a>
                </div>
              </div>
            </article>
            <!-- end article 1 -->
            <!-- start article 2 -->
            <article class="blog-post">
              <div class="post-heading">
                <h3><a href="#">This post uses nice video post format</a></h3>
              </div>
              <div class="row">
                <div class="span8">
                  <div class="video-container">
                    <iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">
							</iframe>
                  </div>
                  <ul class="post-meta">
                    <li class="first"><i class="icon-calendar"></i><span>Feb 13, 2013</span></li>
                    <li><i class="icon-comments"></i><span><a href="#">5 comments</a></span></li>
                    <li class="last"><i class="icon-tags"></i><span><a href="#">Design</a>, <a href="#">Blog</a>, <a href="#">Tutorial</a></span></li>
                  </ul>
                  <div class="clearfix">
                  </div>
                  <p>
                    Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                    qui, no vituperata assueverit.
                  </p>
                  <a href="#" class="btn btn-small btn-theme">Read more</a>
                </div>
              </div>
            </article>
            <!-- end article 2 -->
            <!-- start article 3 -->
            <article class="blog-post">
              <div class="post-heading">
                <h3><a href="#">Great blog post with quote post format</a></h3>
              </div>
              <div class="row">
                <div class="span8">
                  <div class="post-quote">
                    <blockquote>
                      <p>
                        <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, vidit postea ex nec, tantas eruditi conceptam eu vim
                      </p>
                    </blockquote>
                  </div>
                  <a href="#" class="btn btn-small btn-theme">Read more</a>
                </div>
              </div>
            </article>
            <!-- end article 3 -->
            <div class="pagination">
              <ul>
                <li><a href="#">Prev</a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
              </ul>
            </div>
          </div>
          <div class="span4">
            <aside>
              <div class="widget">
                <h4 class="rheading">Categories<span></span></h4>
                <ul class="cat">
                  <li><a href="#">Web design (114)</a></li>
                  <li><a href="#">Internet news (15)</a></li>
                  <li><a href="#">Tutorial and tips (20)</a></li>
                  <li><a href="#">Design trends (15)</a></li>
                  <li><a href="#">Online business (10)</a></li>
                </ul>
              </div>
              <div class="widget">
                <h4 class="rheading">Recent posts<span></span></h4>
                <ul class="recent-posts">
                  <li><a href="#">Lorem ipsum dolor sit amet munere commodo ut nam</a>
                    <div class="clear">
                    </div>
                    <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                    <span class="comment"><i class="icon-comment"></i> 4 Comments</span>
                  </li>
                  <li><a href="#">Sea nostrum omittantur ne mea malis nominavi insolens</a>
                    <div class="clear">
                    </div>
                    <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                    <span class="comment"><i class="icon-comment"></i> 2 Comments</span>
                  </li>
                  <li><a href="#">Eius graece recusabo no pri odio tale quo id, mea at saepe</a>
                    <div class="clear">
                    </div>
                    <span class="date"><i class="icon-calendar"></i> 4 March, 2013</span>
                    <span class="comment"><i class="icon-comment"></i> 12 Comments</span>
                  </li>
                  <li><a href="#">Malorum deserunt at nec usu ad graeco elaboraret at rebum</a>
                    <div class="clear">
                    </div>
                    <span class="date"><i class="icon-calendar"></i> 3 March, 2013</span>
                    <span class="comment"><i class="icon-comment"></i> 3 Comments</span>
                  </li>
                </ul>
              </div>
              <div class="widget">
                <h4 class="rheading">Post tags<span></span></h4>
                <ul class="tags">
                  <li><a href="#" class="btn">Tutorial</a></li>
                  <li><a href="#" class="btn">Tricks</a></li>
                  <li><a href="#" class="btn">Design</a></li>
                  <li><a href="#" class="btn">Trends</a></li>
                  <li><a href="#" class="btn">Online</a></li>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>


<?= $this->endSection(); ?>