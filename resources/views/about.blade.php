<!DOCTYPE html>
<html lang="zh">

@include('layouts.header')

<body class="page-body boxed-container">
    <nav class="navbar horizontal-menu navbar-fixed-top">
        <div class="navbar-inner">
            <div class="navbar-brand">
                <a href="/" class="logo">
                    <img src="/vendor/web-stack/images/logo_dark@2x.png" width="100%" alt="" class="hidden-xs">
                    <img src="/vendor/web-stack/images/logo@2x.png" width="100%" alt="" class="visible-xs">
                </a>
            </div>
            <div class="navbar-mobile-clear"></div>
            <a href="https://github.com/hui-ho/WebStack-Laravel" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
        </div>
    </nav>
    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <div class="main-content" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- 关于项目 -->
                        <h4 class="text-gray">关于项目</h4>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <blockquote>
                                        <p>这是一个开源的网址导航网站项目，您可以拿来制作自己的网址导航，也可以做与导航无关的网站。</p>
                                        </br>
                                        <p>网站前台静态页面采用 <a href="http://viggoz.com/" target="_blank">viggoz</a> 的 <a href="https://github.com/WebStackPage/WebStackPage.github.io">WebStack</a> 项目源码。</p>
                                        <p>如果对本项目有任何建议都可以发起 issue。</p>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- 关于作者 -->
                            <h4 class="text-gray">关于作者</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://www.viggoz.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="http://www.viggoz.com/">
                                        <div class="xe-comment-entry">
                                            <a class="xe-user-img">
                                                <img src="https://avatars1.githubusercontent.com/u/28501148?s=460&v=4" class="img-circle" width="40">
                                            </a>
                                            <div class="xe-comment">
                                                <a href="#" class="xe-user-name overflowClip_1">
                                                    <strong>Designer. hui-ho.</strong>
                                                </a>
                                                <p class="overflowClip_2"> hui-ho@outlook.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <br />
                                            <blockquote>
                                                <p>
                                                    这是一个公益项目，而且是<a href="https://github.com/hui-ho/WebStack-Laravel"> 开源 </a>的。你也可以拿来制作自己的网址导航。如果你有更好的想法，可以通过邮件与我联系，欢迎与我交流分享。
                                                </p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Footer -->
            <footer class="main-footer sticky footer-type-1 fixed">
                <div class="footer-inner">
                    <div class="footer-text">
                        &copy; 2019
                        <a href="../cn/about.html"><strong>WebStack</strong></a> design by <a href="https://github.com/hui-ho" target="_blank"><strong>hui-ho</strong></a>
                    </div>
                    <div class="go-up">
                        <a href="#" rel="go-top">
                            <i class="fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Bottom Scripts -->
    <script src="/vendor/web-stack/js/bootstrap.min.js"></script>
    <script src="/vendor/web-stack/js/TweenMax.min.js"></script>
    <script src="/vendor/web-stack/js/resizeable.js"></script>
    <script src="/vendor/web-stack/js/joinable.js"></script>
    <script src="/vendor/web-stack/js/xenon-api.js"></script>
    <script src="/vendor/web-stack/js/xenon-toggles.js"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="/vendor/web-stack/js/xenon-custom.js"></script>
</body>
</html>