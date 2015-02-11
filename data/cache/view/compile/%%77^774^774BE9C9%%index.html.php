<?php /* Smarty version 2.6.26, created on 2009-12-24 15:46:28
         compiled from index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['_baseUrl']; ?>
/Global.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['_baseUrl']; ?>
/Style.css" type="text/css" media="all" />

        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['_baseUrl']; ?>
/Color.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['_baseUrl']; ?>
/Ui.css" type="text/css" media="all" />
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['_baseUrl']; ?>
/mootools-1.2.4-core.js"></script>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['_baseUrl']; ?>
/mootools-1.2.4.1-more.js"></script>
        
         
        <!--[if gte IE 6]>
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['_baseUrl']; ?>
/ie.css" type="text/css" media="all" />
        <![endif]-->  
        <script type="text/javascript"> 
        //<![CDATA[

            window.addEvent('domready', function() {
                var favorite_inside = $('favorite-inside');
                var favorite_first = $('favorite-first');
                favorite_inside.setStyle('display ', 'block');
                if (favorite_first.offsetWidth < favorite_inside.offsetWidth) {
                    favorite_first.setStyle('width', favorite_inside.offsetWidth - 4 + 'px');
                    favorite_inside.setStyle('width', favorite_first.offsetWidth - 4 + 'px');
                }
                favorite_inside.setStyle('display', 'none');
                favorite_inside.setStyle('width', favorite_first.offsetWidth - 4 + 'px');

                $$('.handlediv').each(function(element) {
                    element.addEvent('click', function() {
                        var parent = this.parentNode;
                        if (parent.get('class').trim() == 'postbox') {
                            $(parent).addClass('closed')
                        } else {
                            $(parent).removeClass('closed');
                        }
                    });
                });
                $$('.menu-toggle').each(function(element) {
                    element.addEvent('click', function() {
                        var parent = this.parentNode;
                        parent = $(parent) 
                        if (parent.hasClass('menu-open')) {
                            parent.removeClass('menu-open');
                        } else {
                            parent.addClass('menu-open');
                        }
                    })
                })
                $$('.favorite-toggle').each(function(element) {
                    element.addEvent('click', function() {
                        var ffirst = $('favorite-first');
                        var finside = $('favorite-inside');
                        if (ffirst.get('class').trim() == 'favorite-first') {
                            ffirst.addClass('slide-down');
                            finside.removeClass('slideUp');
                            finside.addClass('slideDown');
                            finside.setStyle('display', 'block');

                        } else {
                            ffirst.removeClass('slide-down');
                            finside.removeClass('slideDown');
                            finside.addClass('slideUp');
                            finside.setStyle('display', 'none');
                        }
                    })
                })
                $$('.show-settings').each(function(element) {
                    element.addEvent('click', function() {
                        if (this.get('class').trim() == 'show-settings') {
                            $(this.get('id') + '-wrap').setStyle('display', 'block');
                            $$('.show-settings').removeClass('open');
                            $$('.screen-meta-toggle').addClass('invisible');
                            this.removeClass('invisible').addClass('open');
                            this.parentNode.removeClass('invisible')

                        } else {
                            $$('.screen-meta-panel').setStyle('display', 'none');
                            $$('.show-settings').removeClass('open');
                            $$('.screen-meta-toggle').removeClass('invisible');
                        }
                    })
                })
                //editor =  $('iframeName在在').contentWindow;


                //editor.document.open();
                //editor.document.writeln('<html><body onclick="alert(window);"></body></html>');
                // editor.document.close();
                //editor.document.designMode="On";
                // editor.document.contentEditable =true;
                //  editor.document.body.name = "alert('a')"
                //var editor = new Editor();
            })
            //]]>

        </script>
        <title>后台管理 &rsaquo; 首页</title>
    </head>
    <body>
        <div class="wrap">
            <div class="innerwrap">
                <div class="head">
                    <div class="innerhead">
                        <div class="head-logo">
                        </div>
                        <h1>
                            <a href="javascript:;" onclick="return false;" title="查看站点">WordPress 博客 <span>&larr; 查看站点</span></a>
                        </h1>
                        <div class="head-info">
                            <div class="user_info">
                                <p>
                                    <a title="Edit your profile" href="javascript:;" onclick="return false;">admin</a>
                                    <span class="turbo-nag hidden" style="display: inline;"> | <a href="javascript:;" onclick="return false;">加速</a></span> |
                                    <a title="退出" href="javascript:;" onclick="return false;">退出</a></p>
                            </div>
                        </div>
                        <div id="favorite-actions" class="favorite-actions" >
                            <div id="favorite-first" class="favorite-first">
                                <a href="javascript:;" onclick="return false;">添加新</a>
                            </div>
                            <div id="favorite-toggle" class="favorite-toggle">
                                <br/>
                            </div>
                            <div id="favorite-inside" style="display: block;" class="favorite-inside slideUp">
                                <div class="favorite-action">
                                    <a href="javascript:;" onclick="return false;">添加新文章1</a>
                                </div>
                                <div class="favorite-action">
                                    <a href="javascript:;" onclick="return false;">添加新文章2</a>
                                </div>
                                <div class="favorite-action">
                                    <a href="javascript:;" onclick="return false;">添加新文章3</a>
                                </div>
                                <div class="favorite-action">
                                    <a href="javascript:;" onclick="return false;">添加新文章4</a>
                                </div>
                                <div class="favorite-action">
                                    <a href="javascript:;" onclick="return false;">添加新文章5</a>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="innercontent">
                        <ul id="adminmenu" class="adminmenu">
                            <li id="menu-dashboard" class="first-item  menu-top menu-top-first menu-top-last">
                                <div class="menu-image">
                                    <br/>
                                </div>
                                <div class="menu-toggle">
                                    <br/>
                                </div>
                                <a class="first-item  menu-top menu-top-first menu-top-last" tabindex="1" href="javascript:;" onclick="return false;">控制面板</a>
                            </li>
                            <li class="menu-separator"></li>
                            <li id="menu-posts" class="has-submenu menu-top menu-top-first has-current-submenu menu-open">
                                <div class="menu-image">
                                    <br/>
                                </div>
                                <div class="menu-toggle">
                                    <br/>
                                </div>
                                <a class="has-submenu menu-top menu-top-first has-current-submenu menu-open" tabindex="1" href="javascript:;" onclick="return false;">文章</a>
                                <div class="submenu">
                                    <div class="submenu-head">文章</div>
                                    <ul>
                                        <li class="first-item">
                                            <a tabindex="1" class="wp-first-item" href="javascript:;" onclick="return false;">编辑</a>
                                        </li>
                                        <li>
                                            <a tabindex="1" href="javascript:;" onclick="return false;">添加新文章</a>
                                        </li>
                                        <li class="current">
                                            <a tabindex="1" class="current" href="javascript:;" onclick="return false;">标签</a>
                                        </li>
                                        <li>
                                            <a tabindex="1" href="javascript:;" onclick="return false;">分类目录</a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                            <li id="menu-media" class="has-submenu menu-top">
                                <div class="menu-image">
                                    <br/>
                                </div>
                                <div class="menu-toggle">
                                    <br/>
                                </div>
                                <a class="has-submenu menu-top" tabindex="1" href="javascript:;" onclick="return false;">媒体</a>
                            </li>
                            <li id="menu-links" class="menu-top">
                                <div class="menu-image">
                                    <br/>
                                </div>
                                <div class="menu-toggle">
                                    <br/>
                                </div>
                                <a class="menu-top" tabindex="1" href="javascript:;" onclick="return false;">链接</a>
                                <div class="submenu">
                                    <div class="submenu-head">文章</div>
                                    <ul>
                                        <li class="first-item">
                                            <a tabindex="1" class="wp-first-item" href="javascript:;" onclick="return false;">编辑</a>
                                        </li>
                                        <li>
                                            <a tabindex="1" href="javascript:;" onclick="return false;">添加新文章</a>
                                        </li>
                                        <li class="current">
                                            <a tabindex="1" class="current" href="javascript:;" onclick="return false;">标签</a>
                                        </li>
                                        <li>
                                            <a tabindex="1" href="javascript:;" onclick="return false;">分类目录</a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                            <li id="menu-pages" class="has-submenu menu-top">
                                <div class="menu-image">
                                    <br/>
                                </div>
                                <div class="menu-toggle">
                                    <br/>
                                </div>
                                <a class="has-submenu menu-top" tabindex="1" href="javascript:;" onclick="return false;">页面</a>
                            </li>
                            <li id="menu-comments" class="has-submenu menu-top menu-top-last">
                                <div class="menu-image">
                                    <br/>
                                </div>
                                <div class="menu-toggle">
                                    <br/>
                                </div>
                                <a class="has-submenu menu-top menu-top-last" tabindex="1" href="javascript:;" onclick="return false;">评论</a>
                            </li>
                            <li class="menu-separator"></li>
                            <li id="menu-appearance" class="has-submenu menu-top menu-top-first">
                                <div class="menu-image">
                                    <br/>
                                </div>
                                <div class="menu-toggle">
                                    <br/>
                                </div>
                                <a class="has-submenu menu-top menu-top-first" tabindex="1" href="javascript:;" onclick="return false;">外观</a>
                            </li>
                            <li id="menu-plugins" class="has-submenu menu-top">
                                <div class="menu-image">
                                    <br/>
                                </div>
                                <div class="menu-toggle">
                                    <br/>
                                </div>
                                <a class="has-submenu menu-top" tabindex="1" href="javascript:;" onclick="return false;">
                                    插件
                                    <span class="item-count">
                                        <span>1</span>
                                    </span>
                                </a>
                            </li>
                            <li id="menu-users" class="has-submenu menu-top">
                                <div class="menu-image">
                                    <br/>
                                </div>
                                <div class="menu-toggle">
                                    <br/>
                                </div>
                                <a class="has-submenu menu-top" tabindex="1" href="javascript:;" onclick="return false;">用户</a>
                            </li>
                            <li id="menu-tools" class="has-submenu menu-top">
                                <div class="menu-image">
                                    <br/>
                                </div>
                                <div class="menu-toggle">
                                    <br/>
                                </div>
                                <a class="has-submenu menu-top" tabindex="1" href="javascript:;" onclick="return false;">工具</a>
                            </li>
                            <li id="menu-settings" class="has-submenu menu-top menu-top-last">
                                <div class="menu-image">
                                    <br/>
                                </div>
                                <div class="menu-toggle">
                                    <br/>
                                </div>
                                <a class="has-submenu menu-top menu-top-last" tabindex="1" href="javascript:;" onclick="return false;">设置</a>
                            </li>
                        </ul>
                        <div class="admin-panel">
                            <div id="screen-meta" class="screen-meta">
                                <div id="show-help-link-wrap" class="screen-meta-panel">
                                    <h5>在屏幕上显示帮助</h5>
                                </div>
                                <div id="show-settings-link-wrap" class="screen-meta-panel">
                                    <h5>在屏幕上显示设置</h5>
                                </div>
                                <div id="screen-meta-links" class="screen-meta-links">                              
                                    <div class="screen-meta-toggle">
                                        <a id="show-help-link" class="show-settings" href="javascript:;"  onclick="return false;">帮助</a>
                                    </div>
                                    <div class="screen-meta-toggle" >
                                        <a id="show-settings-link" class="show-settings" href="javascript:;" onclick="return false;">显示选项</a>
                                    </div>                                 
                                </div>
                            </div>
                            <div class="update-nag">
                                WordPress 2.8.5 版本可用！
                                <a href="javascript:;" onclick="return false;">现在升级</a>
                                。
                            </div>
                            <div class="admin-panel-wrap">
                                <div class="icon-edit icon32">
                                    <br/>
                                </div>
                                <h2>创建新文章</h2>
                                <div class="metabox-holder poststuff">
                                    <form method="post" action="post.php" onsubmit="return false;">
                                        <div class="inner-sidebar">
                                            <div class="postbox">
                                                <div class="handlediv" title="显示/隐藏">
                                                    <br/>
                                                </div>
                                                <h3 class="hndle">
                                                    <span>保存</span>
                                                </h3>
                                                <div class="inside">
                                                    <div class="inside-body">
                                                        <div class="submitbox">
                                                            <div class="minor-actions">
                                                                <input type="submit" class="button button-highlighted alignleft" tabindex="4" value="保存草稿"  name="save"/>
                                                            
                                                                <a tabindex="4" href="javascript:;" onclick="return false;" class="preview button alignright">预览</a>
                                                                <input type="hidden" value=""/>
                                                                <div class="clear"></div>
                                                            </div>                                                            
                                                            <div class="misc-actions">
                                                                <div class="misc-pub-section">
                                                                    <label for="post_status">状态：</label>
                                                                    <b>
                                                                        <span> 草稿</span>
                                                                    </b>
                                                                    <a class="edit-post-status" tabindex="4" href="javascript:;" onclick="return false;">编辑</a>
                                                                </div>
                                                                <div class="misc-pub-section">
                                                                    公开度：
                                                                    <b>
                                                                        <span>发布</span>
                                                                    </b>
                                                                    <a class="edit-visibility" href="javascript:;" onclick="return false;">编辑</a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="inside-footer">
                                                        <input class="button-primary" type="submit" value="发布" accesskey="p" tabindex="5" name="publish"/>
                                                        <div class="clear">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="has-sidebar">
                                            <div class="has-sidebar-content">
                                                <div class="post-body-content">
                                                    <div class="titlediv">
                                                        <div class="titlewrap">
                                                            <input type="text" class="title" value="" tabindex="1" size="30" name="post_title"/>
                                                        </div>
                                                        <div class="inside">
                                                            <b>
                                                                <b></b>
                                                            </b>
                                                            <div class="edit-slug-box">
                                                                <b>
                                                                    <b> </b>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="postarea">
                                                        <div class="editor-toolbar">
                                                            <b>
                                                                <b>
                                                                    <a onclick="return false;" class="active edButtonHTML">HTML</a>
                                                                    <a onclick="return false;" class="edButtonPreview">可视化</a>
                                                                </b>
                                                            </b>
                                                            <div class="media-buttons">
                                                                <b>
                                                                    <b>
                                                                        上传/插入
                                                                        <a title="添加一个图像" class="thickbox" id="add_image" href="javascript:;">
                                                                            <img alt="添加一个图像" src="images/media-button-image.gif"/>
                                                                        </a>
                                                                        <a title="添加视频" class="thickbox" id="add_video" href="javascript:;">
                                                                            <img alt="添加视频" src="images/media-button-video.gif"/>
                                                                        </a>
                                                                        <a title="添加音频" class="thickbox" id="add_audio" href="javascript:;">
                                                                            <img alt="添加音频" src="images/media-button-music.gif"/>
                                                                        </a>
                                                                        <a title="添加媒体" class="thickbox" id="add_media" href="javascript:;">
                                                                            <img alt="添加媒体" src="images/media-button-other.gif"/>
                                                                        </a>
                                                                    </b>
                                                                </b>
                                                            </div>
                                                        </div>
                                                        <div class="editorcontainer">
                                                            <table class="editLayout" cellspacing="0" cellpadding="0" style="width: 100%; height: 224px;">
                                                                <tbody>
                                                                    <tr class="editFirst">
                                                                        <td class="editToolbar editLeft editFirst editLast">
                                                                            <table class=" editToolbar editToolbarRow1 Enabled content_toolbar1" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="editToolbarStart editToolbarStartButton editFirst">
                                                                                            <span><!-- IE --></span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="醒目的 (Ctrl / Alt+Shift + B)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_bold" href="javascript:;" id="content_bold">
                                                                                                <span class="editIcon edit_bold"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="斜体 (Ctrl / Alt+Shift + I)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_italic" href="javascript:;" id="content_italic">
                                                                                                <span class="editIcon edit_italic"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="删除线 (Alt+Shift+D)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_strikethrough" href="javascript:;" id="content_strikethrough">
                                                                                                <span class="editIcon edit_strikethrough"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="editSeparator"></span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="未排序列表 (Alt+Shift+U)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_bullist" href="javascript:;" id="content_bullist">
                                                                                                <span class="editIcon edit_bullist"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="排序列表 (Alt+Shift+O)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_numlist" href="javascript:;" id="content_numlist">
                                                                                                <span class="editIcon edit_numlist"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="Blockquote (Alt+Shift+Q)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_blockquote" href="javascript:;" id="content_blockquote">
                                                                                                <span class="editIcon edit_blockquote"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="editSeparator"></span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="左对齐 (Alt+Shift+L)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_justifyleft" href="javascript:;" id="content_justifyleft">
                                                                                                <span class="editIcon edit_justifyleft"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="居中对齐 (Alt+Shift+C)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_justifycenter" href="javascript:;" id="content_justifycenter">
                                                                                                <span class="editIcon edit_justifycenter"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="右对齐 (Alt+Shift+R)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_justifyright" href="javascript:;" id="content_justifyright">
                                                                                                <span class="editIcon edit_justifyright"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="editSeparator"></span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="插入/编辑链接 (Alt+Shift+A)" onclick="return false;" onmousedown="return false;" class="editButton edit_link editButtonDisabled" href="javascript:;" id="content_link">
                                                                                                <span class="editIcon edit_link"></span></a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="取消链接 (Alt+Shift+S)" onclick="return false;" onmousedown="return false;" class="editButton edit_unlink editButtonDisabled" href="javascript:;" id="content_unlink">
                                                                                                <span class="editIcon edit_unlink"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="插入 “More” 标签 (Alt+Shift+T)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_wp_more" href="javascript:;" id="content_wp_more">
                                                                                                <span class="editIcon edit_more"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="editSeparator"></span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <table cellspacing="0" cellpadding="0" title="开关拼写检查 (Alt+Shift+N)" onmousedown="return false;" class="editSplitButton editSplitButtonEnabled edit_spellchecker" id="content_spellchecker">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="editFirst">
                                                                                                            <a title="开关拼写检查 (Alt+Shift+N)" onmousedown="return false;" onclick="return false;" class="editAction edit_spellchecker" href="javascript:;" id="content_spellchecker_action">
                                                                                                                <span class="editAction edit_spellchecker"></span>
                                                                                                            </a>
                                                                                                        </td>
                                                                                                        <td class="editLast">
                                                                                                            <a title="开关拼写检查 (Alt+Shift+N)" onmousedown="return false;" onclick="return false;" class="editOpen edit_spellchecker" href="javascript:;" id="content_spellchecker_open">
                                                                                                                <span class="editOpen edit_spellchecker"></span>
                                                                                                            </a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="开关全屏模式 (Alt+Shift+G)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_fullscreen" href="javascript:;" id="content_fullscreen">
                                                                                                <span class="editIcon edit_fullscreen"></span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="显示/关闭更多按钮 (Alt+Shift+Z)" onclick="return false;" onmousedown="return false;" class="editButton editButtonEnabled edit_wp_adv" href="javascript:;" id="content_wp_adv">
                                                                                                <span class="editIcon edit_toolbars"></span>
                                                                                            </a>

                                                                                        </td>
                                                                                        <td class="editToolbarEnd editToolbarEndButton editLast">
                                                                                            <span><!-- IE --></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--
                                                                            <iframe  id="iframeName" style="outline-style:none;width: 100%; height: 205px;">
                                                                            
                                                                            </iframe>
                                                                            <pre id="htmllook">
                                                                            </pre>
                                                                            -->
                                                                            <textarea  style="width: 100%; height: 205px;" rows="12" cols="12"  id="textHtml"></textarea>
                                                                            
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="editLast">
                                                                        <td class="editStatusbar editFirst editLast">
                                                                            <div class="content_path_row">
                                                                                路径:
                                                                                <span class="content_path">
                                                                                    <a>p</a>
                                                                                </span>
                                                                            </div>
                                                                            <a id="content_resize" class="editResize" href="javascript:;" onclick="return false;"></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="post-status-info">
                                                            <b>
                                                                <span class="edit-word-count alignleft">
                                                                    字数:
                                                                    <span id="word-count">0</span>
                                                                </span>
                                                                <span class="alignright">
                                                                    <span id="autosave"> </span>
                                                                </span>
                                                                <br class="clear"/>
                                                            </b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="admin-panel-wrap">
                                <div class=" icon-link-manager icon32">
                                    <br/>
                                </div>
                                <h2>编辑链接</h2>
                                <div class="metabox-holder poststuff">
                                    <form method="post" action="post.php" onsubmit="return false;">
                                        <div class="inner-sidebar">                                           
                                            <div class="postbox">
                                                <div class="handlediv" title="显示/隐藏">
                                                    <br/>
                                                </div>
                                                <h3 class="hndle">
                                                    <span>保存</span>
                                                </h3>
                                                <div class="inside">
                                                    <div class="inside-body">
                                                        <div class="submitbox">
                                                            <div>
                                                                <input type="submit" class="button button-highlighted alignleft" tabindex="4" value="保存草稿"  name="save"/>
                                                            </div>
                                                            <div>
                                                                <a tabindex="4" href="javascript:;" onclick="return false;" class="preview button alignright">预览</a>
                                                                <input type="hidden" value=""/>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                    <div class="inside-footer">
                                                        <input class="button-primary" type="submit" value="发布" accesskey="p" tabindex="5" name="publish"/>
                                                        <div class="clear">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="has-sidebar">
                                            <div class="has-sidebar-content">
                                                <div class="postbox">
                                                    <div class="handlediv" title="显示/隐藏">
                                                        <br/>
                                                    </div>
                                                    <h3 class="hndle">
                                                        <span>名称</span>
                                                    </h3>
                                                    <div class="inside">
                                                        <div class="inside-body">
                                                            <input type="text"  value="Development Blog" tabindex="1" size="30" name="" style="width: 98%;"/>
                                                            <p>例子：Nifty blogging software</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="postbox">
                                                    <div class="handlediv" title="显示/隐藏">
                                                        <br/>
                                                    </div>
                                                    <h3 class="hndle">
                                                        <span>高级</span>
                                                    </h3>
                                                    <div class="inside">
                                                        <div class="inside-body">
                                                            <input type="text"  value="Development Blog" tabindex="1" size="30" name="" style="width: 98%;"/>
                                                            <p>例子：Nifty blogging software</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="clear"></div>                                    
                                    </form>
                                </div>
                            </div>
                            <div class="admin-panel-wrap">
                                <div class="icon-edit icon32">
                                    <br/>
                                </div>
                                <h2>编辑文章</h2>
                                <form class="posts-filter" action="" method="get">
                                    <ul class="subsubsub">
                                        <li>
                                            <a class="current" href="javascript:;" onclick="return false;">
                                                全部<span class="count">(1)</span>

                                            </a>
                                            |
                                        </li>
                                        <li>
                                            <a class="" href="javascript:;" onclick="return false;">
                                                已发布<span class="count">(1)</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="search-box">
                                        <label class="hidden" for="post-search-input">搜索文章:</label>
                                        <input class="search-input" type="text" value="" name="s"/>
                                        <input class="button" type="submit" value="搜索文章"/>
                                    </p>
                                    <div class="tablenav">
                                        <div class="alignleft actions">
                                            <select name="action">
                                                <option selected="selected" value="-1">批量动作</option>
                                                <option value="edit">编辑</option>
                                                <option value="delete">删除</option>
                                            </select>
                                            <input class="button-secondary action doaction" type="submit" name="doaction" value="应用"/>
                                            <select name="m">
                                                <option value="0" selected="selected">显示所有日期</option>
                                                <option value="201011">十一月 2010</option>
                                            </select>
                                            <select class="postform" name="cat">
                                                <option value="0">查看全部分类目录</option>
                                                <option class="level-0" value="1">未分类</option>
                                            </select>
                                            <input class="button-secondary" type="submit" value="过滤"/>
                                        </div>
                                        <div class="view-switch">
                                            <a href="javascript:;" onclick="return false;">
                                                <span  class="view-switch-list " >

                                                </span>
                                            </a>
                                            <a href="javascript:;"  onclick="return false;">
                                                <span class="view-switch-excerpt current">

                                                </span>
                                            </a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                    <table class="widefat post fixed" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="manage-column column-cb check-column">
                                                    <input type="checkbox"/>
                                                </th>
                                                <th class="manage-column column-title" style="" scope="col">文章</th>
                                                <th class="manage-column column-author" style="" scope="col">作者</th>
                                                <th class="manage-column column-categories" style="" scope="col">分类目录</th>
                                                <th class="manage-column column-tags" style="" scope="col">标签</th>
                                                <th class="manage-column column-comments num" style="" scope="col">
                                                    <div class="vers">
                                                        备注
                                                    </div>
                                                </th>
                                                <th class="manage-column column-date" style="" scope="col">日期</th>
                                            </tr>
                                        </thead>                                        
                                        <tfoot>
                                            <tr>
                                                <th class="manage-column column-cb check-column">
                                                    <input type="checkbox"/>
                                                </th>
                                                <th class="manage-column column-title" style="" scope="col">文章</th>
                                                <th class="manage-column column-author" style="" scope="col">作者</th>
                                                <th class="manage-column column-categories" style="" scope="col">分类目录</th>
                                                <th class="manage-column column-tags" style="" scope="col">标签</th>
                                                <th class="manage-column column-comments num" style="" scope="col">
                                                    <div class="vers">
                                                        备注
                                                    </div>
                                                </th>
                                                <th class="manage-column column-date" style="" scope="col">日期</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr valign="top" class="alternate author-self status-publish ieditid=">
                                                <th class="check-column" scope="row">
                                                    <input type="checkbox" value="1" name="post[]"/>
                                                </th>
                                                <td class="post-title column-title">
                                                    <strong>
                                                        <a title='编辑 "Hello world！"' href="javascript:;" class="row-title" onclick="return false;">Hello world！</a>
                                                    </strong>
                                                    <div class="row-actions">
                                                        <span class="edit">
                                                            <a title="编辑这篇文章" href="http://hotaru.cc/wordpress/wp-admin/post.php?action=edit&amp;post=1">编辑</a> |
                                                        </span>
                                                        <span class="inline">
                                                            <a title="实时编辑这篇文章" class="editinline" href="#">快速编辑</a> |
                                                        </span>
                                                        <span class="delete">
                                                            <a onclick="if ( confirm('您将删除这篇文章“Hello world！”\n您确定么？') ) { return true;}return false;" href="javascript:;" title="删除这篇文章" class="submitdelete">删除</a> |
                                                        </span>
                                                        <span class="view">
                                                            <a rel="permalink" title='查看 "Hello world！"' href="http://hotaru.cc/wordpress/?p=1">查看</a>
                                                        </span>
                                                    </div>
                                                    <div class="hidden">
                                                        <div class="post_title">Hello world！</div>
                                                        <div class="post_name">hello-world</div>
                                                        <div class="post_author">1</div>
                                                        <div class="comment_status">open</div>
                                                        <div class="ping_status">open</div>
                                                        <div class="_status">publish</div>
                                                        <div class="jj">01</div>
                                                        <div class="mm">11</div>
                                                        <div class="aa">2010</div>
                                                        <div class="hh">08</div>
                                                        <div class="mn">45</div>
                                                        <div class="ss">59</div>
                                                        <div class="post_password"/>
                                                        <div class="tags_input"/>
                                                        <div class="post_category">1</div>
                                                        <div class="sticky"/></div>		</td>
                                                <td class="author column-author">
                                                    <a href="javascript:;" onclick="return false;">admin</a>
                                                </td>
                                                <td class="categories column-categories">
                                                    <a href="javascript:;" onclick="return false;"> 未分类</a>
                                                </td>
                                                <td class="tags column-tags">没有标签</td>
                                                <td class="comments column-comments">
                                                    <div class="post-com-count-wrapper">
                                                        <a class="post-com-count" title="0 待审中" href="javascript:;" onclick="return false;">
                                                            <span class="comment-count">1</span>
                                                        </a>		
                                                    </div>
                                                </td>
                                                <td class="date column-date">
                                                    <abbr title="2010/11/01 8:45:59 上午">2010/11/01</abbr><br/>已发布
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="tablenav">
                                        <div class="alignleft actions">
                                            <select name="action">
                                                <option selected="selected" value="-1">批量动作</option>
                                                <option value="edit">编辑</option>
                                                <option value="delete">删除</option>
                                            </select>
                                            <input class="button-secondary action doaction" type="submit" name="doaction" value="应用"/>
                                            <select name="m">
                                                <option value="0" selected="selected">显示所有日期</option>
                                                <option value="201011">十一月 2010</option>
                                            </select>
                                            <select class="postform" name="cat">
                                                <option value="0">查看全部分类目录</option>
                                                <option class="level-0" value="1">未分类</option>
                                            </select>
                                            <input class="button-secondary" type="submit" value="过滤"/>
                                        </div>
                                        <div class="view-switch">
                                            <a href="javascript:;" onclick="return false;">
                                                <span  class="view-switch-list " >

                                                </span>
                                            </a>
                                            <a href="javascript:;"  onclick="return false;">
                                                <span class="view-switch-excerpt current">

                                                </span>
                                            </a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </form>

                            </div>
                            <div class="admin-panel-wrap">
                                <div class="icon32 icon-options-general">
                                    <br/>
                                </div>
                                <h2>常规选项</h2>
                                <div class="updated fade" style="background-color: rgb(255, 251, 204);">
                                    <p>
                                        <strong>设置已保存。</strong>
                                    </p>
                                </div>
                                <table class="form-table">
                                    <tbody>
                                        <tr valign="top">
                                            <th scope="row">
                                                <label>博客标题</label>
                                            </th>
                                            <td>
                                                <input class="regular-text" type="text" value="WordPress 博客"/>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <th scope="row">
                                                <label>副标题</label>
                                            </th>
                                            <td>
                                                <input class="regular-text" type="text" value="又一个 WordPress 博客"/>
                                                <span class="setting-description">用简洁的文字描述该博客。</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <th scope="row">
                                                <label>副标题</label>
                                            </th>
                                            <td>
                                                <fieldset>
                                                    <legend class="hidden">成员资格</legend>
                                                    <label for="users_can_register">
                                                        <input type="checkbox" value="1" />
                                                        任何人可以注册
                                                    </label>
                                                </fieldset>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <th scope="row">
                                                <label>默认用户角色</label>
                                            </th>
                                            <td>
                                                <select name="default_role">
                                                    <option value="subscriber" selected="selected">订阅者</option>
                                                    <option value="administrator">管理员</option>
                                                    <option value="editor">编辑</option>
                                                    <option value="author">作者</option>
                                                    <option value="contributor">贡献者</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <th scope="row">
                                                <label>日期格式</label>
                                            </th>
                                            <td>
                                                <fieldset>
                                                    <legend class="hidden">日期格式</legend>
                                                    <label title="Y年m月j日">
                                                        <input type="radio" checked="checked" value="Y年m月j日" name="date_format"/> 2010年11月3日
                                                    </label>
                                                    <br/>
                                                    <label title="Y/m/d">
                                                        <input type="radio" value="Y/m/d" name="date_format"/> 2010/11/03
                                                    </label>
                                                    <br/>
                                                    <label title="m/d/Y">
                                                        <input type="radio" value="m/d/Y" name="date_format"/> 11/03/2010
                                                    </label>
                                                    <br/>
                                                    <label title="d/m/Y">
                                                        <input type="radio" value="d/m/Y" name="date_format"/> 03/11/2010
                                                    </label>
                                                    <br/>
                                                    <label>
                                                        <input type="radio" value="\c\u\s\t\o\m" name="date_format"/> 自定义：
                                                    </label>
                                                    <input type="text" class="small-text" value="Y年m月j日" name="date_format_custom"/> 2010年11月3日
                                                    <p>
                                                        <a href="http://codex.wordpress.org/Formatting_Date_and_Time">日期格式的相关文档</a>
                                                        。点击 “更新选项”更新样例输出。
                                                    </p>
                                                </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <label for="start_of_week">一星期开始于</label>
                                            </th>
                                            <td>
                                                <select name="start_of_week">
                                                    <option value="0">星期天</option>
                                                    <option selected="selected" value="1">星期一</option>
                                                    <option value="2">星期二</option>
                                                    <option value="3">星期三</option>
                                                    <option value="4">星期四</option>
                                                    <option value="5">星期五</option>
                                                    <option value="6">星期六</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="submit">
                                    <input class="button-primary" type="submit" value="保存更改" name="Submit"/>
                                </p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="footer">
                    <div class="innerfooter">

                    </div>
                </div>
            </div>
        </div>
        <div id="menu_content_content_spellchecker_menu" class="editSplitButtonMenu" style="position: absolute; left: 542px; top: 275px; z-index: 200000; width: 105px; height: 253px;display:none;">
            <div id="menu_content_content_spellchecker_menu_co" class="editMenu editSplitButtonMenu">
                <span class="editMenuLine"></span>
                <table cellspacing="0" cellpadding="0" border="0" id="menu_content_content_spellchecker_menu_tbl">
                    <tbody>
                        <tr id="edit_0" class="editMenuItem editFirst editMenuItemDisabled">
                            <td class="editMenuItemTitle">
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon"></span>
                                    <span class="editText" title="语言">语言</span>
                                </a>
                            </td>
                        </tr>
                        <tr id="edit_1" class="editMenuItem editMenuItemEnabled editMenuItemSelected">
                            <td>
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon edit_1"></span>
                                    <span class="editText" title="English">English</span>
                                </a>
                            </td>
                        </tr>
                        <tr id="edit_2" class="editMenuItem editMenuItemEnabled">
                            <td>
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon edit_1"></span>
                                    <span class="editText" title="Danish">Danish</span>
                                </a>
                            </td>
                        </tr>
                        <tr id="edit_3" class="editMenuItem editMenuItemEnabled">
                            <td>
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon edit_1"></span>
                                    <span class="editText" title="Dutch">Dutch</span>
                                </a>
                            </td>
                        </tr>
                        <tr id="edit_4" class="editMenuItem editMenuItemEnabled">
                            <td>
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon edit_1"></span>
                                    <span class="editText" title="Finnish">Finnish</span>
                                </a>
                            </td>
                        </tr>
                        <tr id="edit_5" class="editMenuItem editMenuItemEnabled">
                            <td>
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon edit_1"></span>
                                    <span class="editText" title="French">French</span>
                                </a>
                            </td>
                        </tr>
                        <tr id="edit_6" class="editMenuItem editMenuItemEnabled">
                            <td>
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon edit_1"></span>
                                    <span class="editText" title="German">German</span>
                                </a>
                            </td>
                        </tr>
                        <tr id="edit_7" class="editMenuItem editMenuItemEnabled">
                            <td>
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon edit_1"></span>
                                    <span class="editText" title="Italian">Italian</span>
                                </a>
                            </td>
                        </tr>
                        <tr id="edit_8" class="editMenuItem editMenuItemEnabled">
                            <td>
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon edit_1"></span>
                                    <span class="editText" title="Polish">Polish</span>
                                </a>
                            </td>
                        </tr>
                        <tr id="edit_9" class="editMenuItem editMenuItemEnabled">
                            <td>
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon edit_1"></span>
                                    <span class="editText" title="Portuguese">Portuguese</span>
                                </a>
                            </td>
                        </tr>
                        <tr id="edit_10" class="editMenuItem editMenuItemEnabled">
                            <td>
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon edit_1"></span>
                                    <span class="editText" title="Spanish">Spanish</span>
                                </a>
                            </td>
                        </tr>
                        <tr id="edit_11" class="editMenuItem editMenuItemEnabled editLast">
                            <td>
                                <a href="javascript:;" onclick="return false;" onmousedown="return false;">
                                    <span class="editIcon edit_1"></span>
                                    <span class="editText" title="Swedish">Swedish</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>