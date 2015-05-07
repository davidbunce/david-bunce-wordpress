<footer class="container main-footer">
            <div class="footer-bio">
                <?php if(ICL_LANGUAGE_CODE=='en'); ?>
                    <a href="/contact" class="hire-me-button">
                        Hire me
                    </a>
                <?php else: ?>
                    <a href="/de/kontakt" class="hire-me-button">
                        Mit mir arbeiten
                    </a>
                <?php endif; ?>
            </div>

            <div class="footer-social-media">
                <h4 class="footer-title">Find me on:</h4>
                <ul class="soc">
                    <li><a class="soc-github" href="https://github.com/davidbunce"></a></li>
                    <li><a class="soc-twitter" href="https://twitter.com/davidbunce_web"></a></li>
                    <li><a class="soc-linkedin" href="http://uk.linkedin.com/pub/david-bunce/2b/206/2b4/"></a></li>
                    <li><a class="soc-rss" href="http://davidbunce.com/feed/"></a></li>
                    <li><a class="soc-instagram soc-icon-last" href="http://instagram.com/davidbunce"></a></li>
                
                </ul>
               
                <p>Website copyright &copy; David Bunce 2015.<br>
                    <a href="/privacy-policy">Privacy</a> |
                    <a href="/de/contact">Impressum</a>
                </p>

            </div>
        </footer>
    </div> <!-- end .site-wrap -->
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
