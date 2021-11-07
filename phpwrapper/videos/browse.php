<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="/favicon.png" type="image/png">
	<title>Video Browser</title>
	<meta name="description" content="PHPWrapper's Video Browser">
	<link rel="stylesheet" type="text/css" href="/pages/css/modern-normalize.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/global.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/list.css">
</head>
<body>

<header>
	<a href="/">
		<h1 style="margin:0"><img id="logo" src="/pages/img/list_logo.svg" alt="PHPWrapper"></h1>
	</a>
	<nav id="headbuttons">
		<a class="button_small" id="back" onclick="creationType()" style="display: none">BACK</a>
	</nav>
</header>

<main>

<h1 id="video-browser">Video Browser</h1>

<div>
	<?php
		////
		//// This PHP loads all the videos
		////
		
		// Get latest video ID
		include_once("../goapi/function/videoId.php");

		// If the user has created no videos,
		if ($id == 0) {
			echo "
				<div id=\"no-videos\">
					<p>You have not created any videos.</p>
					<a href=\"./create.php\" class=\"button_big\">Create one now!</a>
				</div>
			";
		} else {
			// Loop video div with decreasing ID until it reaches the first ID
			for ($videoId = $id; $videoId >= 1; $videoId-=1) {
				echo "
					<div class=\"theme pick_creation\">
						<div>
							<img src=\"/_user-files/videos/video-thumb-{$videoId}.png\" alt=\Video thumbnail #{$videoId}\" style=\"height:90px\" />
							<p><a href=\"./create.php?video={$videoId}\">Edit</a><br />
								<a href=\"./player.php?video={$videoId}\">Play</a><p>
						</div>
						<p class=\"pick_creation_type\">Video #{$videoId}</p>
						<p class=\"pick_creation_description\">Description placeholder.</p>
					</div>
				";
			}
		}
	?>
</div>

</main>

<footer>
	<nav id="foot-left">
		<a href="https://localhost:4664/faq.html">FAQ</a>
		<a href="https://discord.gg/2SUpuZnxRq">PHPWrapper Discord</a>
	</nav>

	<nav id="foot-right">
		<a href="https://localhost:4664">Server Page</a>
		<a href="https://localhost:4664/caillou.html">Caillou</a>
	</nav>
</footer>


</body></html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="//josephcrosmanplays532.github.io">

<title>Your Videos on GoAnimate</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">
<meta property="og:site_name" content="Vyond">
<meta property="fb:app_id" content="177116303202">

<meta name="google-site-verification" content="K_niiTfCVi72gwvxK00O4NjsVybMutMUnc-ZnN6HUuA">


<link href="https://josephcrosmanplays532.github.io/fonts/1/sailec.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/static/ad44370a650793d9/go/css/common_combined.css.gz.css" rel="stylesheet" type="text/css">

<link href="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/css/watermark.css.gz.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/css/video.css.gz.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/static/ad44370a650793d9/go/css/myvideos.css.gz.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/css/video_export.css.gz.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/css/vm5_alpha/banner.css.gz.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<style text="text/css">
.top-nav.collapse {height: auto;overflow: visible;}
</style>
<![endif]-->

<script>
var srv_tz_os = -4, view_name = "go", user_cookie_name = "u_info";
var user_role = 9;
</script>

<script src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/common_combined.js.gz.js"></script>
<script type="text/javascript" src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/../po/goserver_js-en_US.json.gz.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>

<script src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/jquery/jquery-ui-1.9.2.custom-core-interactions.min.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/jquery/jquery.tmpl.min.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/trial_upsell.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/lib/moment.min.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/sessionChecker.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/amplitude/go_amp.js.gz.js"></script>

<!-- Vyond Cookie Consent -->
<script>(function(v,y,o,n){v[n]=v[n]||[];
var f=y.getElementsByTagName(o)[0],d=y.createElement(o);
d.type='text/javascript';d.async=true;d.src=
'https://ga.vyond.com/ajax/cookie_policy';
f.parentNode.insertBefore(d,f);
})(window,document,'script','_vyccq');</script>
<!-- End Vyond Cookie Consent -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TXV7MD');

dataLayer.push({"userId":"0Gpjt2-YIoGs","roleName":"Other","bl":"No"});
</script>
<!-- Google Tag Manager -->

<script>
    dataLayer.push({ 'useQualaroo': 1 });

</script>

<!-- Start of Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(c){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("//assets.zendesk.com/embeddable_framework/main.js","goanimate.zendesk.com");/*]]>*/</script>
<!-- End of Zendesk Widget script -->
<script>
zE(function() {
    zE.identify({"name":"devorem248","email":"devorem248@brayy.com"});
    zE.hide();
});
</script>


</head>
<body class="en_US has-user" >
<script type="text/javascript">
if (self !== top) {
            jQuery('body').hide();
    }
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TXV7MD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script type="text/javascript">
        jQuery.extend(CCStandaloneBannerAdUI, {"actionshopSWF":"https:\/\/josephcrosmanplays532.github.io\/animation\/66453a3ba2cc5e1b\/actionshop.swf","apiserver":"\/","clientThemePath":"https:\/\/josephcrosmanplays532.github.io\/static\/55910a7cd204c37c\/<client_theme>","userId":"0Gpjt2-YIoGs"});
</script>

<div class="page-container">


<div class="site-header">
    <div class="navbar site-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                <a class="navbar-brand" href="https://web.archive.org/web/20170423180521/https://goanimate.com/" title="GoAnimate">
                    <img alt="Make a Video Online with GoAnimate.com" src="https://web.archive.org/web/20170423180521im_/https://d3v4eglovri8yt.cloudfront.net/static/895f21f07de33c92/go/img/business_video/home/logo.png">
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                
                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="https://web.archive.org/web/20170423180521/https://goanimate.com/signup">Free Trial</a></li>
                    <li><a href="https://web.archive.org/web/20170423180521/https://goanimate.com/login">Login</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="https://web.archive.org/web/20170423180521/https://goanimate.com/videos" data-toggle="dropdown">Explore <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://web.archive.org/web/20170423180521/http://resources.goanimate.com/">Resources</a></li>
                            <li><a href="https://web.archive.org/web/20170423180521/http://blog.goanimate.com/">Blog</a></li>
                            <li><a href="https://web.archive.org/web/20170423180521/https://goanimate.com/videos">Featured Videos</a></li>
                            <li><a href="https://web.archive.org/web/20170423180521/http://blog.goanimate.com/topic/case-studies">Case Studies</a></li>
                            <li><a href="https://web.archive.org/web/20170423180521/https://support.goanimate.com/">Help Center</a></li>
                        </ul>
                    </li>
                                    <li class="plans-and-pricing">
                        <a href="https://web.archive.org/web/20170423180521/https://goanimate.com/business/videoplans/?hook=header_button.site">Plans &amp; Pricing</a>
                    </li>
                    <li>
                        <a class="hidden-sm hidden-md hidden-lg" href="https://web.archive.org/web/20170423180521/https://goanimate.com/videomaker">Make a Video</a>
                        <span class="site-nav-btn hidden-xs"><a class="btn btn-orange" href="https://web.archive.org/web/20170423180521/https://goanimate.com/videomaker">Make a Video</a></span>
                    </li>
                </ul>
            </div>

            <div class="noti_tooltips_container"></div>
        </div>
    </div>
</div>
    <script>var notiTooltips = new NotificationTooltips($('#idxNotibtn'));</script>


<script>
    jQuery('.logout-link').click(function(){
        amplitudeTrackEvent(AMPLITUDE_EVENT.LOGOUT, null);
    });
    </script>


<!-- END OF HEADER -->

<?php
		////
		//// This PHP loads all the videos
		////
		
		// Get latest video ID
		include_once("../goapi/function/videoId.php");

		// If the user has created no videos,
		if ($id == 0) {
			echo "
				<div id=\"no-videos\">
					<p>You have not created any videos.</p>
					<a href=\"./create.php\" class=\"button_big\">Create one now!</a>
				</div>
			";
		} else {
			// Loop video div with decreasing ID until it reaches the first ID
			for ($videoId = $id; $videoId >= 1; $videoId-=1) {
				echo '
					<div class="my-video-container">

<div class="container">
    <div class="page-header">
        <h1 class="h2">
            <ol class="breadcrumb video-breadcrumb">
                <li class="base" data-folder-id="" data-category="all" data-page="1" data-sort-by="lastmod" data-status="" data-keyword="" data-folder-name="">Your Videos</li>
            </ol>
        </h1>
    </div>

    <div class="row" id="video-listing">
        <div class="col-md-4 col-md-push-8">
            <div id="videos-nav" class="list-group folder-list folder-access">
                <div class="list-group-item folder-item active droppable" data-folder-id="" data-category="all" data-page="1" data-sort-by="lastmod" data-status="" data-keyword="" data-folder-name="">
                    <span class="caret-container">
                        <span class="caret"></span>
                    </span>
                    <span class="title folder-name">Your Videos</span>
                    (<span class="video-count count-all">0</span>)
                </div>

                <div id="videos-folders-nav" class="list-group-item sub-folder-list">
                </div>

                <div class="list-group-item folder-item" style="display:none" data-page="1" data-status="" data-category="folders/sharedwith" data-sort-by="lastmod">
                    <span class="title folder-name">Shared with you</span>
                    (<span class="video-count count-sharedwith">0</span>)
                </div>

                <div class="list-group-item folder-item" data-category="trash" data-sort-by="lastmod">
                    <span class="title folder-name">Trash</span>
                    (<span class="video-count count-trash">0</span>)
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-pull-4">
            <input type="hidden" name="ct" value="Qyeie+pwtXSZbKSaIcP1NQfIMcSROG8unA0YjztpNNqS+zYMKemmW6gOPcArE7Vg8vtXD3zhpArh8ggfqo00VLx16eR8P58cKp5nh58COXyyP132NVQNALlf7ZJo+mgSJ1BWwEa+UL6dpvV4g_WKrrok4Q0C4ex1yWYjK7faA+31Hh00NWT+AtuRw97PsbjKiQgNg9QpYHwTalNmVZd1AG2yF2Xwp7WBL6PXzDQYs=" />

<div class="grid video-listing-grid hide-folders folder-access" id="video-listing-grid">
    <div class="video-list-header">
        <div class="video-status-filter pull-right">
            Show:            <a class="link-secondary active" data-status="">All</a> / <a class="link-secondary" data-status="">Draft</a> / <a class="link-secondary" data-status="">Private</a>
        </div>
        <table class="table table-hover table-generic">
           <thead>
			<tr>
				<td></td>
				<td>Video Title</td>
				<td>Last Modified</td>
				<td></td>
			</tr>
		</thead>
		<tbody>'?><?php include_once ("../goapi/function/videoId.php"); for ($videoId = $id; $videoId >= 1; $videoId-=1) { echo "<tr><td><img src=\"/_user-files/videos/video-thumb-{$videoId}.png\"></td><td><div>Video #{$videoId}</div><div>00:02</div></td><td><a href=\"/videomaker/full/editcheck/?video={$videoId}\"><span class=\"glyph-pro glyph-pencil\"></span></a><a class=\"button\" title=\"Settings\" data-remote=\"/ajax/videoSettings/?video={$videoId}\" data-action=\"video-share\"><span class=\"glyph-pro glyph-settings\"></span</a></td></tr></tbody>"; } ?><?php echo '
	</table
    </div>
</div>
</div>

<div id="autosave-overlay" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title">Your video was autosaved</h3>
            </div>
            <div class="modal-body">
                <span class="autosave-message"></span>
            </div>
            <div class="modal-footer">
                <button class="load-manualsave btn btn-default text-uppercase">Manually saved</button>
                <button class="load-autosave btn btn-default btn-orange text-uppercase">Load autosaved</button>
            </div>
        </div>
    </div>
</div>

        </div>

    </div>

</div>

<script type="text/javascript" charset="utf-8">
var _kiq = _kiq || [];
_kiq.push(['identify', "devorem248@brayy.com"]);
</script>
</div>


<!-- modals -->
<div class="modal" id="export-details" role="dialog" aria-hidden="true" style="z-index:1050;">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header has-back">
        <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
        <button class="modal-back" title="Back" data-dismiss="modal" aria-hidden="true">&lt;</button>
        <h3 class="modal-title">Video formats comparison</h3>
    </div>
    <div class="modal-body">

            <table id="video-comparison-table">
                <tr>
                    <td style="width:50px;"></td>
                    <td style="width:70px;"></td>
                    <td style="width:140px;"><div class="head">360p</div></td>
                    <td style="width:140px;"><div class="head">HD 720p</div></td>
                    <td style="width:140px;"><div class="head">Full HD 1080p</div></td>
                </tr>
                <tr>
                    <td rowspan="4" style="border-right:1px solid #ccc"><h5>Video</h5></td>
                    <td style="text-align:left;"><strong>Resolution</strong></td>
                    <td><strong>640 x 360</strong></td>
                    <td><strong>1280 x 720</strong></td>
                    <td><strong>1920 x 1080</strong></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Encoding</td>
                    <td>H.264</td>
                    <td>H.264</td>
                    <td>H.264</td>
                </tr>
                <tr>
                    <td style="text-align:left;">Bit rate</td>
                    <td>3,200 kbps</td>
                    <td>3,200 kbps</td>
                    <td>3,200 kbps</td>
                </tr>
                <tr>
                    <td style="text-align:left;">Frame rate</td>
                    <td>24 frames / sec</td>
                    <td>24 frames / sec</td>
                    <td>24 frames / sec</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td rowspan="4" style="border-right:1px solid #ccc"><h5>Audio</h5></td>
                    <td style="text-align:left;">Encoding</td>
                    <td>AAC</td>
                    <td>AAC</td>
                    <td>AAC</td>
                </tr>
                <tr>
                    <td style="text-align:left;">Sampling rate</td>
                    <td>44.1 kHz</td>
                    <td>44.1 kHz</td>
                    <td>44.1 kHz</td>
                </tr>
                <tr>
                    <td style="text-align:left;"><strong>Bit rate</strong></td>
                    <td><strong>192 kbps</strong></td>
                    <td><strong>192 kbps</strong></td>
                    <td><strong>192 kbps</strong></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Channels</td>
                    <td>Stereo</td>
                    <td>Stereo</td>
                    <td>Stereo</td>
                </tr>
            </table>
    </div>
    <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
</div>

<script>
var videoCounts = {"all":"0","trash":"0"};

// Folder counts. To be updated by myvideos.js.
var folderCounts = 0;

</script>

<script src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/video.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/myvideos.js.gz.js"></script>
				';
			}
		}
	?>
<div class="my-video-container">

<div class="container">
    <div class="page-header">
        <h1 class="h2">
            <ol class="breadcrumb video-breadcrumb">
                <li class="base" data-folder-id="" data-category="all" data-page="1" data-sort-by="lastmod" data-status="" data-keyword="" data-folder-name="">Your Videos</li>
            </ol>
        </h1>
    </div>

    <div class="row" id="video-listing">
        <div class="col-md-4 col-md-push-8">
            <div id="videos-nav" class="list-group folder-list folder-access">
                <div class="list-group-item folder-item active droppable" data-folder-id="" data-category="all" data-page="1" data-sort-by="lastmod" data-status="" data-keyword="" data-folder-name="">
                    <span class="caret-container">
                        <span class="caret"></span>
                    </span>
                    <span class="title folder-name">Your Videos</span>
                    (<span class="video-count count-all">0</span>)
                </div>

                <div id="videos-folders-nav" class="list-group-item sub-folder-list">
                </div>

                <div class="list-group-item folder-item" style="display:none" data-page="1" data-status="" data-category="folders/sharedwith" data-sort-by="lastmod">
                    <span class="title folder-name">Shared with you</span>
                    (<span class="video-count count-sharedwith">0</span>)
                </div>

                <div class="list-group-item folder-item" data-category="trash" data-sort-by="lastmod">
                    <span class="title folder-name">Trash</span>
                    (<span class="video-count count-trash">0</span>)
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-pull-4">
            <input type="hidden" name="ct" value="Qyeie+pwtXSZbKSaIcP1NQfIMcSROG8unA0YjztpNNqS+zYMKemmW6gOPcArE7Vg8vtXD3zhpArh8ggfqo00VLx16eR8P58cKp5nh58COXyyP132NVQNALlf7ZJo+mgSJ1BWwEa+UL6dpvV4g_WKrrok4Q0C4ex1yWYjK7faA+31Hh00NWT+AtuRw97PsbjKiQgNg9QpYHwTalNmVZd1AG2yF2Xwp7WBL6PXzDQYs=" />

<div class="grid video-listing-grid hide-folders folder-access" id="video-listing-grid">
    <div class="video-list-header">
        <div class="video-status-filter pull-right">
            Show:            <a class="link-secondary active" data-status="">All</a> / <a class="link-secondary" data-status="">Draft</a> / <a class="link-secondary" data-status="">Private</a>
        </div>
        <table class="table table-hover table-generic">
           <thead>
			<tr>
				<td></td>
				<td>Video Title</td>
				<td>Last Modified</td>
				<td></td>
			</tr>
		</thead>
		<tbody><tr><td><img src="/web/20210205201831im_/https://wrapper.online/movie_thumbs/m-433.png"></td><td><div>taken down</div><div id="description"></div><div>00:02</div></td><td><span>2</span><span>0</span><span>2</span><span>1</span><span>-</span><span>0</span><span>2</span><span>-</span><span>0</span><span>5</span><span> </span><span>2</span><span>0</span><span>:</span><span>1</span><span>7</span><span>:</span><span>0</span><span>3</span><span>.</span><span>3</span><span>8</span><span>1</span><span>Z</span></td><td><a href="javascript:;" onclick="popup('m-433')"></a><a href="/web/20210205201831mp_/https://wrapper.online/videomaker?movieId=m-433"></a><a href="/web/20210205201831mp_/https://wrapper.online/movies/m-433.xml" download="taken down"></a></td></tr></tbody>
		<tfoot>
			<tr>
				<td colspan="127"><a id="load_more" href="javascript:;">LOAD MORE...</a></td>
			</tr>
		</tfoot>
	</table>
    </div>
</div>
</div>

<div id="autosave-overlay" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title">Your video was autosaved</h3>
            </div>
            <div class="modal-body">
                <span class="autosave-message"></span>
            </div>
            <div class="modal-footer">
                <button class="load-manualsave btn btn-default text-uppercase">Manually saved</button>
                <button class="load-autosave btn btn-default btn-orange text-uppercase">Load autosaved</button>
            </div>
        </div>
    </div>
</div>

        </div>

    </div>

</div>

<script type="text/javascript" charset="utf-8">
var _kiq = _kiq || [];
_kiq.push(['identify', "devorem248@brayy.com"]);
</script>
</div>


<!-- modals -->
<div class="modal" id="export-details" role="dialog" aria-hidden="true" style="z-index:1050;">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header has-back">
        <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
        <button class="modal-back" title="Back" data-dismiss="modal" aria-hidden="true">&lt;</button>
        <h3 class="modal-title">Video formats comparison</h3>
    </div>
    <div class="modal-body">

            <table id="video-comparison-table">
                <tr>
                    <td style="width:50px;"></td>
                    <td style="width:70px;"></td>
                    <td style="width:140px;"><div class="head">360p</div></td>
                    <td style="width:140px;"><div class="head">HD 720p</div></td>
                    <td style="width:140px;"><div class="head">Full HD 1080p</div></td>
                </tr>
                <tr>
                    <td rowspan="4" style="border-right:1px solid #ccc"><h5>Video</h5></td>
                    <td style="text-align:left;"><strong>Resolution</strong></td>
                    <td><strong>640 x 360</strong></td>
                    <td><strong>1280 x 720</strong></td>
                    <td><strong>1920 x 1080</strong></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Encoding</td>
                    <td>H.264</td>
                    <td>H.264</td>
                    <td>H.264</td>
                </tr>
                <tr>
                    <td style="text-align:left;">Bit rate</td>
                    <td>3,200 kbps</td>
                    <td>3,200 kbps</td>
                    <td>3,200 kbps</td>
                </tr>
                <tr>
                    <td style="text-align:left;">Frame rate</td>
                    <td>24 frames / sec</td>
                    <td>24 frames / sec</td>
                    <td>24 frames / sec</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td rowspan="4" style="border-right:1px solid #ccc"><h5>Audio</h5></td>
                    <td style="text-align:left;">Encoding</td>
                    <td>AAC</td>
                    <td>AAC</td>
                    <td>AAC</td>
                </tr>
                <tr>
                    <td style="text-align:left;">Sampling rate</td>
                    <td>44.1 kHz</td>
                    <td>44.1 kHz</td>
                    <td>44.1 kHz</td>
                </tr>
                <tr>
                    <td style="text-align:left;"><strong>Bit rate</strong></td>
                    <td><strong>192 kbps</strong></td>
                    <td><strong>192 kbps</strong></td>
                    <td><strong>192 kbps</strong></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Channels</td>
                    <td>Stereo</td>
                    <td>Stereo</td>
                    <td>Stereo</td>
                </tr>
            </table>
    </div>
    <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
</div>

<script>
var videoCounts = {"all":"0","trash":"0"};

// Folder counts. To be updated by myvideos.js.
var folderCounts = 0;

</script>

<script src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/video.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/js/myvideos.js.gz.js"></script>

<div id="trial-unlock-overlay" class="modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Subscribe to unlock more features</h3>
            </div>

            <div class="modal-body text-center">
                <div class="trial-upsell trial-upsell-unlock">
                    <h2><img src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/img/trial/lock.png" alt=""> Unlock these features now</h2>

                    <p class="text-feature">
                        Remove the full screen watermark<br>
                        Download up to 1080P (Full HD)<br>
                        One-click publish                    </p>

                    <div class="text-muted">
                        <div>Publish to <img class="logo" src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/img/trial/logo_ga.png" alt=""> or export to</div>
                        <div>
                            <img class="logo-partner" src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/img/trial/logo_youtube20.png" alt="">
                            <img class="logo-partner" src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/img/trial/logo_wistia20.png" alt="">
                            <img class="logo-partner" src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/img/trial/logo_vidyard20.png" alt="">
                        </div>
                        <div>... and many more!</div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <a class="btn btn-orange" href="https://ga.vyond.com/business/videoplans?hook=preview.site">View Plans & Pricing</a>
            </div>
        </div>
    </div>
</div>
<div id="trial-expired-overlay" class="modal" id="normal-modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="left: auto;margin-right: auto;margin-left: auto;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title">
                    Your free trial has ended!                </h3>
            </div>
            <div class="modal-body text-center">
                <img style="width: 100%;" src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/img/trial/expired.png" alt="">
            </div>
            <div class="modal-footer">
                <a class="btn btn-orange" href="https://www.vyond.com/pricing">View Plans & Pricing</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-alpha-vm5" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Before You Head To Vyond Studio</h3>
            </div>
            <div class="modal-body">
                <img class="center-block img-responsive"
                    src="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/img/vm5_alpha/video_copy.png"
                    srcset="https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/img/vm5_alpha/video_copy.png 1x, https://josephcrosmanplays532.github.io/static/55910a7cd204c37c/go/img/vm5_alpha/video_copy_2x.png 2x"
                ><br>
                <p>
                    There may be content in this video that is not compatible with Vyond Studio (e.g. imported videos, PPT files, retired content, retired music).                </p>
                <p>
                    Your original video will not be impacted by making this copy to Vyond Studio. Videos created and edited in Vyond Studio cannot be copied to Legacy Video Maker.                </p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-default text-uppercase" href="#" data-dismiss="modal">Cancel</a>
                <a class="btn btn-orange text-uppercase proceed-migration" href="#" target="_blank">Proceed</a>
            </div>
        </div>
    </div>
</div>


<!-- FOOTER -->

<div class="site-footer">
    <div class="container">
        <div class="site-footer-nav row">
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4><span>About GoAnimate</span></h4>
                    <ul class="list-unstyled">
                        <li><a href="https://web.archive.org/web/20170423180521/https://goanimate.com/about">Who we are</a></li>
                        <li><a href="https://web.archive.org/web/20170423180521/https://resources.goanimate.com/careers/">Careers</a></li>
                        <li><a href="https://web.archive.org/web/20170423180521/https://goanimate.com/contactus">Contact Us</a></li>
                        <li><a href="https://web.archive.org/web/20170423180521/https://blog.goanimate.com/">Blog</a></li>
                        <li><a href="https://web.archive.org/web/20170423180521/https://press.goanimate.com/">Press</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4><span>GoAnimate Solutions</span></h4>
                    <ul class="list-unstyled">
                        <li><a href="https://web.archive.org/web/20170423180521/https://goanimate.com/business/videoplans?hook=footer_button.site">Plans and Pricing</a></li>
                        <li><a href="https://web.archive.org/web/20170423180521/https://goanimate.com/business/videoplans/federal?hook=footer_button.site">Plans for Federal Agencies</a></li>
                        <li><a href="https://web.archive.org/web/20170423180521/https://goanimate4schools.com/" target="_blank">GoAnimate for Schools</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4><span>Usage Guidelines</span></h4>
                    <ul class="list-unstyled">
                        <li><a href="https://web.archive.org/web/20170423180521/https://goanimate.com/termsofuse">Terms of Service</a></li>
                        <li><a href="https://web.archive.org/web/20170423180521/https://goanimate.com/privacy">Privacy Policy</a></li>
                        <li><a href="//web.archive.org/web/20170423180521/http://support.goanimate.com/hc/en-us/articles/202408574" target="_blank">Cancellation Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4>Getting Help</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://web.archive.org/web/20170423180521/https://resources.goanimate.com/">Resources</a></li>
                        <li><a href="https://web.archive.org/web/20170423180521/https://support.goanimate.com/">Help Center</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <div class="site-footer-socials-container">
                    Follow us on:
                    <ul class="site-footer-socials">
                        <li><a class="glyph-social glyph-facebook" href="https://web.archive.org/web/20170423180521/https://www.facebook.com/GoAnimateInc"><span class="sr-only">Facebook</span></a></li>
                        <li><a class="glyph-social glyph-twitter" href="https://web.archive.org/web/20170423180521/https://twitter.com/GoAnimate"><span class="sr-only">Twitter</span></a></li>
                        <li><a class="glyph-social glyph-linked-in" href="https://web.archive.org/web/20170423180521/https://www.linkedin.com/company/goanimate"><span class="sr-only">LinkedIn</span></a></li>
                        <li><a class="glyph-social glyph-google-plus" href="https://web.archive.org/web/20170423180521/https://plus.google.com/+goanimate"><span class="sr-only">Google+</span></a></li>
                        <li><a class="glyph-social glyph-youtube" href="https://web.archive.org/web/20170423180521/https://www.youtube.com/user/GoAnimate"><span class="sr-only">YouTube</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="site-footer-copyright">
                    <img src="https://web.archive.org/web/20170423180521im_/https://d3v4eglovri8yt.cloudfront.net/static/895f21f07de33c92/go/img/footer/logo_amazon.png" alt="AWS Partner Network"/>
                    &nbsp;&nbsp;&nbsp;
                    <div class="ga-copy">GoAnimate &copy; 2021</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="studio_container" style="display: none;">
    <div id="studio_holder"><!-- Full Screen Studio -->
        <div style="top: 50%; position: relative;">
            You can't use Vyond 2018 because Flash might be disabled. <a href="https://drive.google.com/file/d/1g3V42Wb-N67OpVWABSyU7H3X58fwfEMI/view">Enable Flash</a>.
        </div>
    </div>
</div>

</div>
<!-- END OF PAGE STRUCTURE -->



<div id="offer_container">
</div>
<script type="text/javascript">
</script>

<script>
		const closeReq = new XMLHttpRequest();
		closeReq.open('GET', '/events/close');
		closeReq.send();

		var json;
		var tbody = document.getElementsByTagName('tbody')[0];
		var loadMore = document.getElementById('load_more');
		const listReq = new XMLHttpRequest();
		listReq.open('GET', '/ajax/myvideos');
		listReq.send();

		var C = 0;
		function loadRows() {
			let c = C; C += 69;
			for (; c < C; c++) {
				if (c > json.length - 1) {
					loadMore.remove();
					break;
				}

				const tbl = json[c];
				const date = tbl.date.substr(0, 10) + ' ' + tbl.date.substr(11);
				tbody.insertAdjacentHTML('beforeend',
					'<tr><td><img src="/movie_thumbs/' + tbl.id + '.png"></td><td><div>' + tbl.title.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;") + '</div><div>' + tbl.durationString + '</div></div></td><td><span>' + date + '</span></td><td><a title="Edit" href="https://action-ouranimate.herokuapp.com/videomaker/full/editcheck/?video=' + tbl.id + '"><span class="glyph-pro glyph-pencil"></span></a><a class="button" title="Settings" data-remote="https://action-ouranimate.herokuapp.com/ajax/videoSettings/?video=' + tbl.id + '" data-action="video-share"><span class="glyph-pro glyph-settings"></span</a><a class="dropdown-toggle" href="/movies/' + tbl.id + '" download="' + tbl.title + '" data-toggle="dropdown"><span class="glyph-pro glyph-dots"></span></a><ul class="dropdown-menu"><li><a class="button" title="Delete Your Video" data-remote="/ajax/deleteVideo" data-action="video-share"><span class="glyph-pro glyph-delete"></span> Delete</button></li><a class="button" title="Play Your Video" data-remote="/ajax/playVideo?movieId=' + tbl.id + '" data-action="video-share"><span class="glyph-pro glyph-delete"></span> Play Video</a></li></td></tr>');
			}
		}

		loadMore.onclick = loadRows;
		listReq.onreadystatechange = function (e) {
			if (listReq.readyState != 4) return;
			json = JSON.parse(listReq.responseText);
			loadRows();
		}

		function popup(id) {
			window.open('/player?movieId=' + id, 'MsgWindow', 'width=1280,height=720,left=' + (screen.width / 2 - 640) + ',top=' + (screen.height / 2 - 360));
		}
	</script>
<style>
    table {
			width: 100%;
			max-width: 100%;
			margin-bottom: 0px;
			margin-right: auto;
			margin-left: auto;
			margin-top: 0px;
			background-color: transparent;
			border-collapse: collapse;
			border-spacing: 0;
			font-size: 14px;
		}

		@media(min-width: 768px) {
			table {
				width: 750px;
			}
		}

		@media(min-width: 992px) {
			table {
				width: 970px;
			}
		}

		@media(min-width: 400px) {
			table {
				width: 750px;
			}
		}

		thead {
			font-weight: 200;
		}

		td {
			padding: 8px;
			vertical-align: middle;
			line-height: 1.42857143;
		}

		thead {
			border-bottom: 2px solid #ddd;
			border-top: 1px solid #ddd;
		}

		tbody>tr {
			border-top: 0;
			border-bottom: 1px solid #ddd;
		}

		tbody>tr:hover {
			background-color: #f5f5f5;
		}

		tr>:nth-child(1) {
			width: 64px;
		}

		tr>:nth-child(1)>img {
			height: 36px;
		}

		tr>:nth-child(1) {
			word-break: break-word;
		}

		tr>:nth-child(2) {
			color: #999;
		}

		tr>:nth-child(3) {
			width: 250px;
		}

		tr>:nth-child(3)>* {
			display: inline-block;
			text-align: center;
			font-size: 12px;
			width: 8.5px;
		}

		tr>:nth-child(4) {
			font-family: 'GlyphiconsRegular';
			text-decoration: none;
			padding-top: 5px;
			font-size: 14px;
			width: 80px;
		}

		tr>:nth-child(4)>a {
			display: inline-block;
			text-decoration: none;
			padding-right: 10px;
			color: #474747;
		}

		tr>:nth-child(4)>a:hover {
			color: #2d9e88;
		}

		tr>:nth-child(4)>:nth-child(1)::before {
			content: '\E174';
		}

		tr>:nth-child(4)>:nth-child(2)::before {
			content: '\E235';
		}

		tr>:nth-child(4)>:nth-child(3)::before {
			content: '\E182';
		}

		tfoot>tr>td {
			text-align: center;
			border: none;
		}

		tfoot>tr>td>a {
			text-decoration: none;
			color: #474747;
			font-size: 14px;
		}
		@font-face {
			font-family: 'Sailec';
			font-weight: 100;
			src: url('/html/Sailec-Thin.woff') format('woff');
		}

		@font-face {
			font-family: 'Sailec';
			font-weight: 200;
			src: url('/html/Sailec-Light.woff') format('woff');
		}

		@font-face {
			font-family: 'Sailec';
			font-weight: 400;
			src: url('/html/Sailec-Regular.woff') format('woff');
		}

		@font-face {
			font-family: 'Sailec';
			font-weight: 500;
			src: url('/html/Sailec-Medium.woff') format('woff');
		}

		/* font weight 500 and font weight 700 (bold) are the same for better integration support */
		@font-face {
			font-family: 'Sailec';
			font-weight: 700;
			src: url('/html/Sailec-Medium.woff') format('woff');
		}

		@font-face {
			font-family: 'GlyphiconsRegular';
			src: url('/html/glyphicons-regular.woff') format('woff');
			font-weight: normal;
			font-style: normal;
		}
</style>
</body>
</html>
