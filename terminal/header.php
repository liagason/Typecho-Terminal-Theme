<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
		<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.16.2/build/styles/default.min.css">


<style>
      @charset "UTF-8";:root{--global-font-size:15px;--global-line-height:1.4em;--global-space:10px;--font-stack:Menlo,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New,monospace,serif;--mono-font-stack:Menlo,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New,monospace,serif;--background-color:#fff;--page-width:60em;--font-color:#151515;--invert-font-color:#fff;--primary-color:#1a95e0;--secondary-color:#727578;--error-color:#d20962;--progress-bar-background:#727578;--progress-bar-fill:#151515;--code-bg-color:#e8eff2;--input-style:solid;--display-h1-decoration:none}*{box-sizing:border-box;text-rendering:geometricPrecision}body{font-size:var(--global-font-size);color:var(--font-color);margin:0;font-family:var(--font-stack);word-wrap:break-word;background-color:var(--background-color)}.logo,body,h1{line-height:var(--global-line-height)}a{color:var(--primary-color);text-decoration:none}strong{line-height:var(--global-line-height)}.logo,footer,h1,header,li,p,section,ul{float:none;margin:0;padding:0}.logo,h1,p,ul{margin-top:calc(var(--global-space) * 2);margin-bottom:calc(var(--global-space) * 2)}.logo,h1{position:relative;display:inline-block;display:table-cell;padding:calc(var(--global-space) * 2) 0;margin:0;overflow:hidden;font-weight:600}h1:after{content:"====================================================================================================";position:absolute;bottom:5px;left:0;display:var(--display-h1-decoration)}.terminal .logo,.terminal h1,.terminal strong{font-size:var(--global-font-size);font-style:normal;font-family:var(--font-stack);color:var(--font-color)}.terminal-prompt{position:relative;white-space:nowrap}.terminal-prompt:before{content:"> "}.terminal-prompt:after{content:"";animation:a .8s infinite;background:var(--primary-color);border-radius:0;display:inline-block;height:1em;margin-left:.2em;width:3px;bottom:-2px;position:relative}@keyframes a{0%{opacity:0}50%{opacity:1}to{opacity:0}}li{position:relative;display:block;padding-left:calc(var(--global-space) * 2)}nav>ul>li{padding-left:0}li:after{position:absolute;top:0;left:0}ul>li:after{content:"-"}nav ul>li:after{content:""}.terminal-menu li:after,.terminal-menu li:before{display:none}.terminal-menu{width:100%}.terminal-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-align:start;align-items:flex-start}.terminal-menu ul{list-style-type:none;padding:0!important;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;width:100%;-ms-flex-positive:1;flex-grow:1;font-size:var(--global-font-size);margin-top:0}.terminal-menu li{display:-ms-flexbox;display:flex;margin:0 0 .5em;padding:0}.terminal-menu li:last-child{margin-bottom:0}.terminal-menu li a:not(.btn){text-decoration:none;display:block;width:100%;border:none;color:var(--secondary-color)}p{margin:0 0 var(--global-line-height);color:var(--global-font-color)}.container{max-width:var(--page-width)}.container{margin:0 auto;padding:0 calc(var(--global-space) * 2)}img{width:100%}@media only screen and (min-width:30em){.terminal-menu ul,.terminal-nav{-ms-flex-direction:row;flex-direction:row;-ms-flex-align:center;align-items:center}.terminal-menu ul{-ms-grid-column-align:flex-end;justify-items:flex-end;-ms-flex-pack:end;justify-content:flex-end;margin-top:calc(var(--global-space) * 2)}.terminal-menu li{margin:0;margin-right:2em}.terminal-menu li:last-child{margin-right:0}}:root{--aqua:#7fdbff;--blue:#0074d9;--navy:#001f3f;--teal:#39cccc;--green:#2ecc40;--olive:#3d9970;--lime:#01ff70;--yellow:#ffdc00;--orange:#ff851b;--red:#ff4136;--fuchsia:#f012be;--purple:#b10dc9;--maroon:#85144b;--white:#fff;--silver:#ddd;--gray:#aaa;--black:#111;--primary-color:var(--blue);--error-color:var(--red);--font-stack:"iAWriterQuattro",Menlo,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New,monospace,serif;--mono-font-stack:"iAWriterMono",Menlo,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New,monospace,serif}@media (prefers-color-scheme:dark){:root{--global-font-size:15px;--global-line-height:1.4em;--global-space:10px;--background-color:#222225;--page-width:60em;--font-color:#e8e9ed;--invert-font-color:#222225;--secondary-color:#a3abba;--tertiary-color:#a3abba;--primary-color:#62c4ff;--error-color:#ff3c74;--progress-bar-background:#3f3f44;--progress-bar-fill:#62c4ff;--code-bg-color:#3f3f44;--input-style:solid;--display-h1-decoration:none}}@media screen and (max-device-width:40em){body{-webkit-text-size-adjust:100%}}img{width:auto;max-width:100%}ul li:before{content:none}#theme-select{font-family:emoji;background:0 0;text-decoration:none;display:inline;border:none;color:var(--secondary-color);padding:0;font-family:var(--font-stack);font-size:var(--global-font-size)}#theme-select .auto-theme,#theme-select .dark-theme,#theme-select .light-theme{display:none}body:not(.light):not(.dark) #theme-select .auto-theme{display:inline}.meta{margin-bottom:0}.meta,.meta a{color:var(--secondary-color)}.post{border-bottom:3px double var(--secondary-color);margin-bottom:calc(var(--global-line-height) * 2);padding-bottom:calc(var(--global-line-height) * 2)}.post .post-header h1{padding-top:0}.post .post-header{margin-top:var(--global-line-height)}.post h1:before{content:"# "}.post p img{max-height:var(--page-width);display:block;margin-left:auto;margin-right:auto}
    </style>

    <link href="/usr/themes/default/site-39bffce0.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link href="/usr/themes/default/site-39bffce0.css" rel="stylesheet">

    <script>
	!function(n){"use strict";n.loadCSS||(n.loadCSS=function(){});var o=loadCSS.relpreload={};if(o.support=function(){var e;try{e=n.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),o.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.addEventListener?t.removeEventListener("load",a):t.attachEvent&&t.detachEvent("onload",a),t.setAttribute("onload",null),t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(a,3e3)},o.poly=function(){if(!o.support())for(var t=n.document.getElementsByTagName("link"),e=0;e<t.length;e++){var a=t[e];"preload"!==a.rel||"style"!==a.getAttribute("as")||a.getAttribute("data-loadcss")||(a.setAttribute("data-loadcss",!0),o.bindMediaToggle(a))}},!o.support()){o.poly();var t=n.setInterval(o.poly,500);n.addEventListener?n.addEventListener("load",function(){o.poly(),n.clearInterval(t)}):n.attachEvent&&n.attachEvent("onload",function(){o.poly(),n.clearInterval(t)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:n.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
	</script>


    <?php $this->header(); ?>
	
</head>
<body class="terminal index">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

    <div class="container">
      <div class="terminal-nav">
        <header class="terminal-logo">
          <div class="logo terminal-prompt">
            <a href="https://liagason.com" class="no-style"><?php $this->options->title(); ?></a>
          </div>
        </header>
        <nav class="terminal-menu">
          <ul>
			<!--<li><a href="<?php $this->options->siteUrl();?>">Home</a></li>-->
			<li><?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?></li>
			<li>
              <button data-role="theme-toggle" id="theme-select" title="Toggle light and dark mode"><span class="light-theme">[Light]</span><span class="dark-theme">[Dark]</span><span class="auto-theme">[Auto]</span></button>
            </li>
          </ul>
        </nav>
      </div>
    </div>
	

    <div class="container">


    
    
