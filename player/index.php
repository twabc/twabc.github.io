<?php

$url = @$_GET['play'];
if (!empty($url))
    $url = htmlentities($url, ENT_QUOTES);
else {
    header('Refresh:3,Url=../');
    echo '<h1>地址出错，将返回首页。。。</h1>';
    die;
}
?>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=”applicable-device” content=”pc,mobile”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/video.js@7.4.1/dist/video-js.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/open-iconic@1.1.1/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../static/style.css">

    <title>阿斌云播放器</title>
	<center>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 1200固定 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:1000px;height:110px"
     data-ad-client="ca-pub-2234907034153013"
     data-ad-slot="5083621395"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>



</head>

<body>




    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm rounded nice-nav">
        <div class="container">
            <a class="navbar-brand logo" href="/"><img src="../static/logo5.png" alt="" class="mr-2">阿斌云播放器</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 py-">
                <video id="player" class="video-js vjs-16-9 vjs-big-play-centered" controls preload="auto" data-setup="{}">
                    <source id="video-player" src="<?php echo $url; ?>" type="application/x-mpegURL">
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
                <div class="my-3">
                    <div class="d-none history">
                        <div class="text-center"><a href="javascript:;" class="p-3 h-close nice-c"><span class="oi oi-chevron-top"></span></a></div>
                        <ul class="list-unstyled nice-c my-2 h-list">
                        </ul>
                        <a href="javascript:;" class="clear-history">清空播放记录</a>
                    </div>
                    <div class="text-center"><a href="javascript:;" class="p-3 h-open nice-c"><span class="oi oi-chevron-bottom"></span></span></a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/video.js@7.4.1/dist/video.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@videojs/http-streaming@1.10.3/dist/videojs-http-streaming.min.js"></script>
    <script src="../static/bundle.js"></script>
	
    <div class="d-none">
    </div>	
	

					<div id="ckplays"></div> 
						<div class="logos_lists" style="margin-left:30px;">					
							<center>
							<dl>
								<a target="_blank" href="https://ab01.vip"><img src="/img/ab.png" alt=""></a>
                                <a target="_blank" href="http://951ms.com/"><img src="/img/honghu.png" alt=""></a>
							    <a target="_blank" href="https://ab01.vip/music"><img src="/img/music.png" alt=""></a>
                                <a target="_blank" href="http://scjczj.com/"><img src="/img/youhuiquan.png" alt=""></a>
								<a target="_blank" href="https://ab01.vip/jiexi7"><img src="/img/jiexi.png" alt=""></a>
                                <a target="_blank" href="http://pay.ab01.vip/"><img src="/img/sanmaheyi.png" alt=""></a>
							</dl>
							<dl>
								<a target="_blank" href="http://dashang.ab01.vip"><img src="/img/dashang.png" alt=""></a>
                                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=656374177&site=qq&menu=yes"><img src="/img/qq.png" alt=""></a>
							</dl>
							</center>
						
						</div>
	
         <center><p><font color="#FFFFFF">© 2016-2019  <a href="https://ab01.vip" target="_blank">阿斌论坛</a>版权所有</font></p> </center>
	
	
	
</body>

</html>