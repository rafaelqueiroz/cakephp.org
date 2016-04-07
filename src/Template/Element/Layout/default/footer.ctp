<section id="socials" class="back-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5  social text-center">
                <div class="col-sm-3 col-xs-3">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div id="fb-root-face" class="fb-like" data-href="https://www.facebook.com/CakePHP/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
                </div>

                <div class="col-sm-3 col-xs-3">
                    <iframe src="https://ghbtns.com/github-btn.html?user=cakephp&amp;repo=cakephp&amp;type=star&amp;count=true&amp;size=small" frameborder="0" scrolling="0" width="120px" height="30px"></iframe>
                </div>

                <div class="col-sm-3 col-xs-3">
                    <iframe src="https://ghbtns.com/github-btn.html?user=cakephp&amp;repo=cakephp&amp;type=fork&amp;count=true&amp;size=small" frameborder="0" scrolling="0" width="120px" height="30px"></iframe>
                </div>

                <div class="col-sm-3 col-xs-3">
                    <a href="https://twitter.com/CakePHP" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @CakePHP</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-7 social-footer text-center ">

                <a href="#" data-toggle="tooltip" title="Twitter"><i class="fa icon-social fa-twitter"></i>
                    <a href="#" data-toggle="tooltip" title="Facebook"><i class="fa icon-social fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" title="Google Plus"><i class="fa icon-social  fa-google-plus"></i></a>
                    <a href="#" data-toggle="tooltip" title="Youtube"><i class="fa icon-social fa-youtube-play"></i></a>
                    <a href="#" data-toggle="tooltip" title="Linkedin"><i class="fa icon-social fa-linkedin"></i></a>
                    <a href="#" data-toggle="tooltip" title="Github"><i class="fa icon-social fa-git"></i></a>
                    <a href="#" data-toggle="tooltip" title="Quora"><span class="glyph_range icon-social">T</span></a>
                    <a href="#" data-toggle="tooltip" title="Stack Overflow"><i class="fa icon-social fa-stack-overflow"></i></a>
                    <a href="#" data-toggle="tooltip" title="IRC" class="icon-irc">#IRC</a>
            </div>

        </div>
    </div>
</section>


<footer id="footer" class="footer-wrapper">
    <div class="container">
        <div class="row col-p30">

            <div class="col-sm-12 col-md-3">
                <div class="footer-widget t-footer">
                    <form class="form" method="post" action="">
                        <h4>My CakePHP</h4>
                        <div class="col-md-12 p0 form-user">
                            <label class="mb10">Username<input type="text" name="val_fname" id="val_fname" class="form-control"></label>
                            <label class="mb10">Password<input type="password" name="val_lname" id="val_lname" class="form-control"></label>
                        </div>

                        <div class="col-md-4  col-xs-6 p0 pull-right">
                            <button type="submit" class=" btn-user">Login</button>
                        </div>

                        <div class="col-md-8 col-xs-6 p0 register">
                            <label><input type="checkbox">Remember me</label>
                            <p>Forgot your password?<br>New user?<a href=""> Register!</a></p>
                            <a href="https://www.openhub.net/p/cakephp">
                                <img src="images/open-hub.png">
                            </a>
                            <div class="mt10">
                                <a href="https://www.rackspace.com/">
                                    <img src="images/rackspace.png">
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="col-sm-12 col-md-9">
                <div class="col-sm-3">
                    <ul class="footer-menu">
                        <li class="menu-title menu-title-m"><i class="fa fa-menu-title fa-book"></i><?= __('Documentation')?></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('CookBook')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Api')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Videos')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Privacy Policy')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Logos & Trademerks')?></a></li>

                        <li class="menu-title mt30"><a href="#"><i class="fa fa-menu-title fa-briefcase"></i>Business Solutions</a></li>
                        <li class="menu-title mt30"><a href="#"><i class="fa fa-menu-title fa-desktop"></i>Showcase</a></li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <ul class="footer-menu">
                        <li class="menu-title"><i class="fa fa-menu-title fa-users"></i><?= __('Community')?></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Get Involved')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Blog')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Newsletter')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Certification')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Calendar')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('My Cakephp')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Cakefest')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Oss Bounty')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Forum')?></a></li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <ul class="footer-menu">
                        <li class="menu-title"><i class="fa fa-menu-title fa-comments-o"></i><?= __('Help & Support')?></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Issues (Github)')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Youtube Channel')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Google Groups')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Stack Overflow')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Commercial')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Irc')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Quora')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Facebook')?></a></li>

                        <li class="menu-title mt30"><i class="fa fa-menu-title fa-calendar-o"></i><?= __('Calendar')?></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Meetups')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Events')?></a></li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <ul class="footer-menu">
                        <li class="menu-title"><i class="fa fa-menu-title fa-tags"></i><?= __('Marketplace')?></li>
                        <li class="menu-sub"><?= __('Service Providers')?></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Cakedc')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Phpstorm')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Rackspace')?></a></li>
                        <li class="menu-sub">Jobs</li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Freelance App')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Cakephp Jobs')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Cakexperts')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Job Board')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Linkedin')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Freelancer')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Upwork')?></a></li>
                    </ul>
                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-md-12 text-center mt30">
                <p class="copyright">&copy; <?= __('Copyright 2005-2016 Cake Software Foundation, Inc. All rights reserved.')?></p>
            </div>
        </div>
    </div>
</footer>