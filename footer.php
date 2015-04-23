<footer class="container main-footer">
            <div class="footer-bio">
                <img class="footer-bio-img" src="<?php echo get_template_directory_uri(); ?>/img/live/footer-image.png">
                <h4 class="footer-title"><?php _e('About David'); ?></h4>
                <p>
                    <?php _e('<strong>I am a web designer and front end developer based in Austria.</strong> I work with design agencies, charities and churches to build high quality websites. <a href="/web-design">More</a>.'); ?>
                </p>
                <p>
                    I would <strong>love</strong> to work with you on your web project. <a href="/contact">Get in touch</a>
                </p>
            </div>

            <div class="footer-social-media">
                <h4 class="footer-title">Find me on:</h4>
                <div class="social-media-icons">
                    <a href="https://twitter.com/bunce_web" class="webicon twitter large">Follow me on Twitter</a>
                    <a href="https://plus.google.com/+DavidBunce" class="webicon googleplus large">Follow me on Google Plus</a>
                    <a href="http://instagram.com/davidbunce" class="webicon instagram large">Follow on Instagram</a>
                    <a href="http://uk.linkedin.com/pub/david-bunce/2b/206/2b4/" class="webicon linkedin large">Connect on LinkedIn</a>
                    <a href="https://github.com/davidbunce" class="webicon github large">Follow me on Github</a>
                    <a href="http://davidbunce.com/feed/" class="webicon rss large">RSS</a>
                </div>
                <p>Website copyright &copy; David Bunce 2014.<br>
                    <a href="/privacy-policy">Privacy</a> |
                    <a href="/de/contact">Impressum</a>
                </p>

            </div>
        </footer>
        <?php wp_footer(); ?>
        <script>
          (function(d) {
            var config = {
              kitId: 'ojd0aib',
              scriptTimeout: 3000
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
          })(document);
        </script>


    </body>
</html>
