.formError {
	position: absolute;
	top: 300px;
	left: 300px;
	padding-bottom: 13px;
	display: block;
	z-index: 5000;
}

#debugMode {
	background: #000;
	position: fixed;
	width: 100%;
	height: 200px;
	top: 0;
	left: 0;
	overflow: scroll;
	opacity: 0.8;
	display: block;
	padding: 10px;
	color: #fff;
	font-size: 14px;
	z-index: 100000;
}

.ajaxSubmit {
	padding: 20px;
	background: #55ea55;
	border: 1px solid #999;
	display: none
}

.formError .formErrorContent {
	width: 100%;
	background: #ee0101;
	color: #fff;
	width: auto;
	font-family: tahoma;
	font-size: 11px;
	border: 2px solid #ddd;
	box-shadow: 0px 0px 6px #000;
	-moz-box-shadow: 0px 0px 6px #000;
	-webkit-box-shadow: 0px 0px 6px #000;
	padding: 4px 10px 4px 10px;
	border-radius: 6px;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	width:300px
	height:70px
}

.greenPopup .formErrorContent {
	background: #33be40;
}

.blackPopup .formErrorContent {
	background: #393939;
	color: #FFF;
}

.formError .formErrorArrow {
	position: absolute;
	bottom: 0;
	left: 20px;
	width: 15px;
	height: 15px;
	z-index: 5001;
}

.formError .formErrorArrowBottom {
	top: 0;
	margin: -6px;
}

.formError .formErrorArrow div {
	border-left: 2px solid #ddd;
	border-right: 2px solid #ddd;
	box-shadow: 0px 2px 3px #444;
	-moz-box-shadow: 0px 2px 3px #444;
	-webkit-box-shadow: 0px 2px 3px #444;
	font-size: 0px;
	height: 1px;
	background: #ee0101;
	margin: 0 auto;
	line-height: 0px;
	font-size: 0px;
	display: block;
}

.formError .formErrorArrowBottom div {
	box-shadow: none;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
}

.greenPopup .formErrorArrow div {
	background: #33be40;
}

.blackPopup .formErrorArrow div {
	background: #393939;
	color: #FFF;
}

.formError .formErrorArrow .line10 {
	width: 15px;
	border: none;
}

.formError .formErrorArrow .line9 {
	width: 13px;
	border: none;
}

.formError .formErrorArrow .line8 {
	width: 11px;
}

.formError .formErrorArrow .line7 {
	width: 9px;
}

.formError .formErrorArrow .line6 {
	width: 7px;
}

.formError .formErrorArrow .line5 {
	width: 5px;
}

.formError .formErrorArrow .line4 {
	width: 3px;
}

.formError .formErrorArrow .line3 {
	width: 1px;
	border-left: 2px solid #ddd;
	border-right: 2px solid #ddd;
	border-bottom: 0px solid #ddd;
}

.formError .formErrorArrow .line2 {
	width: 3px;
	border: none;
	background: #ddd;
}

.formError .formErrorArrow .line1 {
	width: 1px;
	border: none;
	background: #ddd;
}/*
* jQuery UI CSS Framework
* Copyright (c) 2009 AUTHORS.txt (http://jqueryui.com/about)
* Dual licensed under the MIT (MIT-LICENSE.txt) and GPL (GPL-LICENSE.txt) licenses.
*/

/* Layout helpers
----------------------------------*/
.ui-helper-hidden { display: none; }
.ui-helper-hidden-accessible { position: absolute; left: -99999999px; }
.ui-helper-reset { margin: 0; padding: 0; border: 0; outline: 0; line-height: 1.3; text-decoration: none; font-size: 100%; list-style: none; }
.ui-helper-clearfix:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; }
.ui-helper-clearfix { display: inline-block; }
/* required comment for clearfix to work in Opera \*/
* html .ui-helper-clearfix { height:1%; }
.ui-helper-clearfix { display:block; }
/* end clearfix */
.ui-helper-zfix { width: 100%; height: 100%; top: 0; left: 0; position: absolute; opacity: 0; filter:Alpha(Opacity=0); }


/* Interaction Cues
----------------------------------*/
.ui-state-disabled { cursor: default !important; }


/* Icons
----------------------------------*/

/* states and images */
.ui-icon { display: block; text-indent: -99999px; overflow: hidden; background-repeat: no-repeat; }


/* Misc visuals
----------------------------------*/

/* Overlays */
.ui-widget-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }



/*
* jQuery UI CSS Framework
* Copyright (c) 2009 AUTHORS.txt (http://jqueryui.com/about)
* Dual licensed under the MIT (MIT-LICENSE.txt) and GPL (GPL-LICENSE.txt) licenses.
* To view and modify this theme, visit http://jqueryui.com/themeroller/?ffDefault=Trebuchet%20MS,%20Tahoma,%20Verdana,%20Arial,%20sans-serif&fwDefault=bold&fsDefault=1.1em&cornerRadius=4px&bgColorHeader=f6a828&bgTextureHeader=12_gloss_wave.png&bgImgOpacityHeader=35&borderColorHeader=e78f08&fcHeader=ffffff&iconColorHeader=ffffff&bgColorContent=eeeeee&bgTextureContent=03_highlight_soft.png&bgImgOpacityContent=100&borderColorContent=dddddd&fcContent=333333&iconColorContent=222222&bgColorDefault=f6f6f6&bgTextureDefault=02_glass.png&bgImgOpacityDefault=100&borderColorDefault=cccccc&fcDefault=1c94c4&iconColorDefault=ef8c08&bgColorHover=fdf5ce&bgTextureHover=02_glass.png&bgImgOpacityHover=100&borderColorHover=fbcb09&fcHover=c77405&iconColorHover=ef8c08&bgColorActive=ffffff&bgTextureActive=02_glass.png&bgImgOpacityActive=65&borderColorActive=fbd850&fcActive=eb8f00&iconColorActive=ef8c08&bgColorHighlight=ffe45c&bgTextureHighlight=03_highlight_soft.png&bgImgOpacityHighlight=75&borderColorHighlight=fed22f&fcHighlight=363636&iconColorHighlight=228ef1&bgColorError=b81900&bgTextureError=08_diagonals_thick.png&bgImgOpacityError=18&borderColorError=cd0a0a&fcError=ffffff&iconColorError=ffd27a&bgColorOverlay=666666&bgTextureOverlay=08_diagonals_thick.png&bgImgOpacityOverlay=20&opacityOverlay=50&bgColorShadow=000000&bgTextureShadow=01_flat.png&bgImgOpacityShadow=10&opacityShadow=20&thicknessShadow=5px&offsetTopShadow=-5px&offsetLeftShadow=-5px&cornerRadiusShadow=5px
*/


/* Component containers
----------------------------------*/
.ui-widget { font-family: Trebuchet MS, Tahoma, Verdana, Arial, sans-serif; font-size: 11px; }
.ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button { font-family: Trebuchet MS, Tahoma, Verdana, Arial, sans-serif; font-size: 1em; }
.ui-widget-content { border: 1px solid #dddddd; background: #eeeeee url(../images/ui-bg_highlight-soft_100_eeeeee_1x100.png) 50% top repeat-x; color: #333333; }
.ui-widget-content a { color: #333333; }
.ui-widget-header { border: 1px solid #e78f08; background: #f6a828 url(../images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x; color: #ffffff; font-weight: bold; }
.ui-widget-header a { color: #ffffff; }

/* Interaction states
----------------------------------*/
.ui-state-default, .ui-widget-content .ui-state-default { border: 1px solid #cccccc; background: #f6f6f6 url(../images/ui-bg_glass_100_f6f6f6_1x400.png) 50% 50% repeat-x; font-weight: bold; color: #1c94c4; outline: none; }
.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited { color: #1c94c4; text-decoration: none; outline: none; }
/*.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus { border: 1px solid #fbcb09; background: #fdf5ce url(../images/ui-bg_glass_100_fdf5ce_1x400.png) 50% 50% repeat-x; font-weight: bold; color: #c77405; outline: none; }*/
.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus { border-bottom: 1px solid #fbcb09; background: #fdf5ce url(../images/ui-bg_glass_85_dfeffc_1x400.png) 50% 50% repeat-x; font-weight: bold; color: #c77405; outline: none; }
.ui-state-hover a, .ui-state-hover a:hover { color: #c77405; text-decoration: none; outline: none; }
.ui-state-active, .ui-widget-content .ui-state-active { border: 1px solid #fbd850; background: #ffffff url(../images/ui-bg_glass_65_ffffff_1x400.png) 50% 50% repeat-x; font-weight: bold; color: #eb8f00; outline: none; }
.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited { color: #eb8f00; outline: none; text-decoration: none; }

/* Interaction Cues
----------------------------------*/
.ui-state-highlight, .ui-widget-content .ui-state-highlight {border: 1px solid #fed22f; background: #ffe45c url(../images/ui-bg_highlight-soft_75_ffe45c_1x100.png) 50% top repeat-x; color: #363636; }
.ui-state-highlight a, .ui-widget-content .ui-state-highlight a { color: #363636; }
.ui-state-error, .ui-widget-content .ui-state-error {border: 1px solid #cd0a0a; background: #b81900 url(../images/ui-bg_diagonals-thick_18_b81900_40x40.png) 50% 50% repeat; color: #ffffff; }
.ui-state-error a, .ui-widget-content .ui-state-error a { color: #ffffff; }
.ui-state-error-text, .ui-widget-content .ui-state-error-text { color: #ffffff; }
.ui-state-disabled, .ui-widget-content .ui-state-disabled { opacity: .35; filter:Alpha(Opacity=35); background-image: none; }
.ui-priority-primary, .ui-widget-content .ui-priority-primary { font-weight: bold; }
.ui-priority-secondary, .ui-widget-content .ui-priority-secondary { opacity: .7; filter:Alpha(Opacity=70); font-weight: normal; }

/* Icons
----------------------------------*/

/* states and images */
.ui-icon { width: 16px; height: 16px; background-image: url(../images/ui-icons_222222_256x240.png); }
.ui-widget-content .ui-icon {background-image: url(../images/ui-icons_222222_256x240.png); }
.ui-widget-header .ui-icon {background-image: url(../images/ui-icons_ffffff_256x240.png); }
.ui-state-default .ui-icon { background-image: url(../images/ui-icons_ef8c08_256x240.png); }
.ui-state-hover .ui-icon, .ui-state-focus .ui-icon {background-image: url(../images/ui-icons_ef8c08_256x240.png); }
.ui-state-active .ui-icon {background-image: url(../images/ui-icons_ef8c08_256x240.png); }
.ui-state-highlight .ui-icon {background-image: url(../images/ui-icons_228ef1_256x240.png); }
.ui-state-error .ui-icon, .ui-state-error-text .ui-icon {background-image: url(../images/ui-icons_ffd27a_256x240.png); }

/* positioning */
.ui-icon-carat-1-n { background-position: 0 0; }
.ui-icon-carat-1-ne { background-position: -16px 0; }
.ui-icon-carat-1-e { background-position: -32px 0; }
.ui-icon-carat-1-se { background-position: -48px 0; }
.ui-icon-carat-1-s { background-position: -64px 0; }
.ui-icon-carat-1-sw { background-position: -80px 0; }
.ui-icon-carat-1-w { background-position: -96px 0; }
.ui-icon-carat-1-nw { background-position: -112px 0; }
.ui-icon-carat-2-n-s { background-position: -128px 0; }
.ui-icon-carat-2-e-w { background-position: -144px 0; }
.ui-icon-triangle-1-n { background-position: 0 -16px; }
.ui-icon-triangle-1-ne { background-position: -16px -16px; }
.ui-icon-triangle-1-e { background-position: -32px -16px; }
.ui-icon-triangle-1-se { background-position: -48px -16px; }
.ui-icon-triangle-1-s { background-position: -65px -16px; }
.ui-icon-triangle-1-sw { background-position: -80px -16px; }
.ui-icon-triangle-1-w { background-position: -96px -16px; }
.ui-icon-triangle-1-nw { background-position: -112px -16px; }
.ui-icon-triangle-2-n-s { background-position: -128px -16px; }
.ui-icon-triangle-2-e-w { background-position: -144px -16px; }
.ui-icon-arrow-1-n { background-position: 0 -32px; }
.ui-icon-arrow-1-ne { background-position: -16px -32px; }
.ui-icon-arrow-1-e { background-position: -32px -32px; }
.ui-icon-arrow-1-se { background-position: -48px -32px; }
.ui-icon-arrow-1-s { background-position: -64px -32px; }
.ui-icon-arrow-1-sw { background-position: -80px -32px; }
.ui-icon-arrow-1-w { background-position: -96px -32px; }
.ui-icon-arrow-1-nw { background-position: -112px -32px; }
.ui-icon-arrow-2-n-s { background-position: -128px -32px; }
.ui-icon-arrow-2-ne-sw { background-position: -144px -32px; }
.ui-icon-arrow-2-e-w { background-position: -160px -32px; }
.ui-icon-arrow-2-se-nw { background-position: -176px -32px; }
.ui-icon-arrowstop-1-n { background-position: -192px -32px; }
.ui-icon-arrowstop-1-e { background-position: -208px -32px; }
.ui-icon-arrowstop-1-s { background-position: -224px -32px; }
.ui-icon-arrowstop-1-w { background-position: -240px -32px; }
.ui-icon-arrowthick-1-n { background-position: 0 -48px; }
.ui-icon-arrowthick-1-ne { background-position: -16px -48px; }
.ui-icon-arrowthick-1-e { background-position: -32px -48px; }
.ui-icon-arrowthick-1-se { background-position: -48px -48px; }
.ui-icon-arrowthick-1-s { background-position: -64px -48px; }
.ui-icon-arrowthick-1-sw { background-position: -80px -48px; }
.ui-icon-arrowthick-1-w { background-position: -96px -48px; }
.ui-icon-arrowthick-1-nw { background-position: -112px -48px; }
.ui-icon-arrowthick-2-n-s { background-position: -128px -48px; }
.ui-icon-arrowthick-2-ne-sw { background-position: -144px -48px; }
.ui-icon-arrowthick-2-e-w { background-position: -160px -48px; }
.ui-icon-arrowthick-2-se-nw { background-position: -176px -48px; }
.ui-icon-arrowthickstop-1-n { background-position: -192px -48px; }
.ui-icon-arrowthickstop-1-e { background-position: -208px -48px; }
.ui-icon-arrowthickstop-1-s { background-position: -224px -48px; }
.ui-icon-arrowthickstop-1-w { background-position: -240px -48px; }
.ui-icon-arrowreturnthick-1-w { background-position: 0 -64px; }
.ui-icon-arrowreturnthick-1-n { background-position: -16px -64px; }
.ui-icon-arrowreturnthick-1-e { background-position: -32px -64px; }
.ui-icon-arrowreturnthick-1-s { background-position: -48px -64px; }
.ui-icon-arrowreturn-1-w { background-position: -64px -64px; }
.ui-icon-arrowreturn-1-n { background-position: -80px -64px; }
.ui-icon-arrowreturn-1-e { background-position: -96px -64px; }
.ui-icon-arrowreturn-1-s { background-position: -112px -64px; }
.ui-icon-arrowrefresh-1-w { background-position: -128px -64px; }
.ui-icon-arrowrefresh-1-n { background-position: -144px -64px; }
.ui-icon-arrowrefresh-1-e { background-position: -160px -64px; }
.ui-icon-arrowrefresh-1-s { background-position: -176px -64px; }
.ui-icon-arrow-4 { background-position: 0 -80px; }
.ui-icon-arrow-4-diag { background-position: -16px -80px; }
.ui-icon-extlink { background-position: -32px -80px; }
.ui-icon-newwin { background-position: -48px -80px; }
.ui-icon-refresh { background-position: -64px -80px; }
.ui-icon-shuffle { background-position: -80px -80px; }
.ui-icon-transfer-e-w { background-position: -96px -80px; }
.ui-icon-transferthick-e-w { background-position: -112px -80px; }
.ui-icon-folder-collapsed { background-position: 0 -96px; }
.ui-icon-folder-open { background-position: -16px -96px; }
.ui-icon-document { background-position: -32px -96px; }
.ui-icon-document-b { background-position: -48px -96px; }
.ui-icon-note { background-position: -64px -96px; }
.ui-icon-mail-closed { background-position: -80px -96px; }
.ui-icon-mail-open { background-position: -96px -96px; }
.ui-icon-suitcase { background-position: -112px -96px; }
.ui-icon-comment { background-position: -128px -96px; }
.ui-icon-person { background-position: -144px -96px; }
.ui-icon-print { background-position: -160px -96px; }
.ui-icon-trash { background-position: -176px -96px; }
.ui-icon-locked { background-position: -192px -96px; }
.ui-icon-unlocked { background-position: -208px -96px; }
.ui-icon-bookmark { background-position: -224px -96px; }
.ui-icon-tag { background-position: -240px -96px; }
.ui-icon-home { background-position: 0 -112px; }
.ui-icon-flag { background-position: -16px -112px; }
.ui-icon-calendar { background-position: -32px -112px; }
.ui-icon-cart { background-position: -48px -112px; }
.ui-icon-pencil { background-position: -64px -112px; }
.ui-icon-clock { background-position: -80px -112px; }
.ui-icon-disk { background-position: -96px -112px; }
.ui-icon-calculator { background-position: -112px -112px; }
.ui-icon-zoomin { background-position: -128px -112px; }
.ui-icon-zoomout { background-position: -144px -112px; }
.ui-icon-search { background-position: -160px -112px; }
.ui-icon-wrench { background-position: -176px -112px; }
.ui-icon-gear { background-position: -192px -112px; }
.ui-icon-heart { background-position: -208px -112px; }
.ui-icon-star { background-position: -224px -112px; }
.ui-icon-link { background-position: -240px -112px; }
.ui-icon-cancel { background-position: 0 -128px; }
.ui-icon-plus { background-position: -16px -128px; }
.ui-icon-plusthick { background-position: -32px -128px; }
.ui-icon-minus { background-position: -48px -128px; }
.ui-icon-minusthick { background-position: -64px -128px; }
.ui-icon-close { background-position: -80px -128px; }
.ui-icon-closethick { background-position: -96px -128px; }
.ui-icon-key { background-position: -112px -128px; }
.ui-icon-lightbulb { background-position: -128px -128px; }
.ui-icon-scissors { background-position: -144px -128px; }
.ui-icon-clipboard { background-position: -160px -128px; }
.ui-icon-copy { background-position: -176px -128px; }
.ui-icon-contact { background-position: -192px -128px; }
.ui-icon-image { background-position: -208px -128px; }
.ui-icon-video { background-position: -224px -128px; }
.ui-icon-script { background-position: -240px -128px; }
.ui-icon-alert { background-position: 0 -144px; }
.ui-icon-info { background-position: -16px -144px; }
.ui-icon-notice { background-position: -32px -144px; }
.ui-icon-help { background-position: -48px -144px; }
.ui-icon-check { background-position: -64px -144px; }
.ui-icon-bullet { background-position: -80px -144px; }
.ui-icon-radio-off { background-position: -96px -144px; }
.ui-icon-radio-on { background-position: -112px -144px; }
.ui-icon-pin-w { background-position: -128px -144px; }
.ui-icon-pin-s { background-position: -144px -144px; }
.ui-icon-play { background-position: 0 -160px; }
.ui-icon-pause { background-position: -16px -160px; }
.ui-icon-seek-next { background-position: -32px -160px; }
.ui-icon-seek-prev { background-position: -48px -160px; }
.ui-icon-seek-end { background-position: -64px -160px; }
.ui-icon-seek-first { background-position: -80px -160px; }
.ui-icon-stop { background-position: -96px -160px; }
.ui-icon-eject { background-position: -112px -160px; }
.ui-icon-volume-off { background-position: -128px -160px; }
.ui-icon-volume-on { background-position: -144px -160px; }
.ui-icon-power { background-position: 0 -176px; }
.ui-icon-signal-diag { background-position: -16px -176px; }
.ui-icon-signal { background-position: -32px -176px; }
.ui-icon-battery-0 { background-position: -48px -176px; }
.ui-icon-battery-1 { background-position: -64px -176px; }
.ui-icon-battery-2 { background-position: -80px -176px; }
.ui-icon-battery-3 { background-position: -96px -176px; }
.ui-icon-circle-plus { background-position: 0 -192px; }
.ui-icon-circle-minus { background-position: -16px -192px; }
.ui-icon-circle-close { background-position: -32px -192px; }
.ui-icon-circle-triangle-e { background-position: -48px -192px; }
.ui-icon-circle-triangle-s { background-position: -64px -192px; }
.ui-icon-circle-triangle-w { background-position: -80px -192px; }
.ui-icon-circle-triangle-n { background-position: -96px -192px; }
.ui-icon-circle-arrow-e { background-position: -112px -192px; }
.ui-icon-circle-arrow-s { background-position: -128px -192px; }
.ui-icon-circle-arrow-w { background-position: -144px -192px; }
.ui-icon-circle-arrow-n { background-position: -160px -192px; }
.ui-icon-circle-zoomin { background-position: -176px -192px; }
.ui-icon-circle-zoomout { background-position: -192px -192px; }
.ui-icon-circle-check { background-position: -208px -192px; }
.ui-icon-circlesmall-plus { background-position: 0 -208px; }
.ui-icon-circlesmall-minus { background-position: -16px -208px; }
.ui-icon-circlesmall-close { background-position: -32px -208px; }
.ui-icon-squaresmall-plus { background-position: -48px -208px; }
.ui-icon-squaresmall-minus { background-position: -64px -208px; }
.ui-icon-squaresmall-close { background-position: -80px -208px; }
.ui-icon-grip-dotted-vertical { background-position: 0 -224px; }
.ui-icon-grip-dotted-horizontal { background-position: -16px -224px; }
.ui-icon-grip-solid-vertical { background-position: -32px -224px; }
.ui-icon-grip-solid-horizontal { background-position: -48px -224px; }
.ui-icon-gripsmall-diagonal-se { background-position: -64px -224px; }
.ui-icon-grip-diagonal-se { background-position: -80px -224px; }


/* Misc visuals
----------------------------------*/

/* Corner radius */
.ui-corner-tl { -moz-border-radius-topleft: 4px; -webkit-border-top-left-radius: 4px; }
.ui-corner-tr { -moz-border-radius-topright: 4px; -webkit-border-top-right-radius: 4px; }
.ui-corner-bl { -moz-border-radius-bottomleft: 4px; -webkit-border-bottom-left-radius: 4px; }
.ui-corner-br { -moz-border-radius-bottomright: 4px; -webkit-border-bottom-right-radius: 4px; }
.ui-corner-top { -moz-border-radius-topleft: 4px; -webkit-border-top-left-radius: 4px; -moz-border-radius-topright: 4px; -webkit-border-top-right-radius: 4px; }
.ui-corner-bottom { -moz-border-radius-bottomleft: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-bottomright: 4px; -webkit-border-bottom-right-radius: 4px; }
.ui-corner-right {  -moz-border-radius-topright: 4px; -webkit-border-top-right-radius: 4px; -moz-border-radius-bottomright: 4px; -webkit-border-bottom-right-radius: 4px; }
.ui-corner-left { -moz-border-radius-topleft: 4px; -webkit-border-top-left-radius: 4px; -moz-border-radius-bottomleft: 4px; -webkit-border-bottom-left-radius: 4px; }
.ui-corner-all { -moz-border-radius: 4px; -webkit-border-radius: 4px; }

/* Overlays */
.ui-widget-overlay { background: #666666 url(../images/ui-bg_diagonals-thick_20_666666_40x40.png) 50% 50% repeat; opacity: .50;filter:Alpha(Opacity=50); }
.ui-widget-shadow { margin: -5px 0 0 -5px; padding: 5px; background: #000000 url(../images/ui-bg_flat_10_000000_40x100.png) 50% 50% repeat-x; opacity: .20;filter:Alpha(Opacity=20); -moz-border-radius: 5px; -webkit-border-radius: 5px; }/* Datepicker
----------------------------------*/
.ui-datepicker { width: 17em; padding: .2em .2em 0; }
.ui-datepicker .ui-datepicker-header { position:relative; padding:.2em 0; }
.ui-datepicker .ui-datepicker-prev, .ui-datepicker .ui-datepicker-next { position:absolute; top: 2px; width: 1.8em; height: 1.8em; }
.ui-datepicker .ui-datepicker-prev-hover, .ui-datepicker .ui-datepicker-next-hover { top: 1px; }
.ui-datepicker .ui-datepicker-prev { left:2px; }
.ui-datepicker .ui-datepicker-next { right:2px; }
.ui-datepicker .ui-datepicker-prev-hover { left:1px; }
.ui-datepicker .ui-datepicker-next-hover { right:1px; }
.ui-datepicker .ui-datepicker-prev span, .ui-datepicker .ui-datepicker-next span { display: block; position: absolute; left: 50%; margin-left: -8px; top: 50%; margin-top: -8px;  }
.ui-datepicker .ui-datepicker-title { margin: 0 2.3em; line-height: 1.8em; text-align: center; }
.ui-datepicker .ui-datepicker-title select { float:left; font-size:1em; margin:1px 0; }
.ui-datepicker select.ui-datepicker-month-year {width: 100%;}
.ui-datepicker select.ui-datepicker-month, 
.ui-datepicker select.ui-datepicker-year { width: 49%;}
.ui-datepicker .ui-datepicker-title select.ui-datepicker-year { float: right; }
.ui-datepicker table {width: 100%; font-size: .9em; border-collapse: collapse; margin:0 0 .4em; }
.ui-datepicker th { padding: .7em .3em; text-align: center; font-weight: bold; border: 0;  }
.ui-datepicker td { border: 0; padding: 1px; }
.ui-datepicker td span, .ui-datepicker td a { display: block; padding: .2em; text-align: right; text-decoration: none; }
.ui-datepicker .ui-datepicker-buttonpane { background-image: none; margin: .7em 0 0 0; padding:0 .2em; border-left: 0; border-right: 0; border-bottom: 0; }
.ui-datepicker .ui-datepicker-buttonpane button { float: right; margin: .5em .2em .4em; cursor: pointer; padding: .2em .6em .3em .6em; width:auto; overflow:visible; }
.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current { float:left; }

/* with multiple calendars */
.ui-datepicker.ui-datepicker-multi { width:auto; }
.ui-datepicker-multi .ui-datepicker-group { float:left; }
.ui-datepicker-multi .ui-datepicker-group table { width:95%; margin:0 auto .4em; }
.ui-datepicker-multi-2 .ui-datepicker-group { width:50%; }
.ui-datepicker-multi-3 .ui-datepicker-group { width:33.3%; }
.ui-datepicker-multi-4 .ui-datepicker-group { width:25%; }
.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header { border-left-width:0; }
.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header { border-left-width:0; }
.ui-datepicker-multi .ui-datepicker-buttonpane { clear:left; }
.ui-datepicker-row-break { clear:both; width:100%; }

/* RTL support */
.ui-datepicker-rtl { direction: rtl; }
.ui-datepicker-rtl .ui-datepicker-prev { right: 2px; left: auto; }
.ui-datepicker-rtl .ui-datepicker-next { left: 2px; right: auto; }
.ui-datepicker-rtl .ui-datepicker-prev:hover { right: 1px; left: auto; }
.ui-datepicker-rtl .ui-datepicker-next:hover { left: 1px; right: auto; }
.ui-datepicker-rtl .ui-datepicker-buttonpane { clear:right; }
.ui-datepicker-rtl .ui-datepicker-buttonpane button { float: left; }
.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current { float:right; }
.ui-datepicker-rtl .ui-datepicker-group { float:right; }
.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header { border-right-width:0; border-left-width:1px; }
.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header { border-right-width:0; border-left-width:1px; }

/* IE6 IFRAME FIX (taken from datepicker 1.5.3 */
.ui-datepicker-cover {
    display: none; /*sorry for IE5*/
    display/**/: block; /*sorry for IE5*/
    position: absolute; /*must have*/
    z-index: -1; /*must have*/
    filter: mask(); /*must have*/
    top: -4px; /*must have*/
    left: -4px; /*must have*/
    width: 200px; /*must have*/
    height: 200px; /*must have*/
}
input.datepicker_size_2{
	width:20px;
}
input.datepicker_size_4{
	width:34px;
}
img.ui-datepicker-trigger{
	padding:2px 5px 0 3px;
}
#emf-container img.ui-datepicker-trigger{
	padding-top:2px;
}
/*
    ColorBox Core Style:
    The following CSS is consistent between example themes and should not be altered.
*/
#colorbox, #cboxOverlay, #cboxWrapper{position:absolute; top:0; left:0; z-index:9999; overflow:hidden;}
#cboxOverlay{position:fixed; width:100%; height:100%;}
#cboxMiddleLeft, #cboxBottomLeft{clear:left;}
#cboxContent{position:relative;}
#cboxLoadedContent{overflow:auto;}
#cboxTitle{margin:0;}
#cboxLoadingOverlay, #cboxLoadingGraphic{position:absolute; top:0; left:0; width:100%;}
#cboxPrevious, #cboxNext, #cboxClose, #cboxSlideshow{cursor:pointer;}
.cboxPhoto{float:left; margin:auto; border:0; display:block;}
.cboxIframe{width:100%; height:100%; display:block; border:0;}

/* 
    User Style:
    Change the following styles to modify the appearance of ColorBox.  They are
    ordered & tabbed in a way that represents the nesting of the generated HTML.
*/
#cboxOverlay{background:url(../images/colorbox/images/overlay.png) repeat 0 0;}
#colorbox{}
    #cboxTopLeft{width:21px; height:21px; background:url(../images/colorbox/images/controls.png) no-repeat -100px 0;}
    #cboxTopRight{width:21px; height:21px; background:url(../images/colorbox/images/controls.png) no-repeat -129px 0;}
    #cboxBottomLeft{width:21px; height:21px; background:url(../images/colorbox/images/controls.png) no-repeat -100px -29px;}
    #cboxBottomRight{width:21px; height:21px; background:url(../images/colorbox/images/controls.png) no-repeat -129px -29px;}
    #cboxMiddleLeft{width:21px; background:url(../images/colorbox/images/controls.png) left top repeat-y;}
    #cboxMiddleRight{width:21px; background:url(../images/colorbox/images/controls.png) right top repeat-y;}
    #cboxTopCenter{height:21px; background:url(../images/colorbox/images/border.png) 0 0 repeat-x;}
    #cboxBottomCenter{height:21px; background:url(../images/colorbox/images/border.png) 0 -29px repeat-x;}
    #cboxContent{background:#fff; overflow:hidden;}
        #cboxError{padding:50px; border:1px solid #ccc;}
        #cboxLoadedContent{margin-bottom:28px;}
        #cboxTitle{position:absolute; bottom:4px; left:0; text-align:center; width:100%; color:#949494;}
        #cboxCurrent{position:absolute; bottom:4px; left:58px; color:#949494;}
        #cboxSlideshow{position:absolute; bottom:4px; right:30px; color:#0092ef;}
        #cboxPrevious{position:absolute; bottom:0; left:0; background:url(../images/colorbox/images/controls.png) no-repeat -75px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxPrevious.hover{background-position:-75px -25px;}
        #cboxNext{position:absolute; bottom:0; left:27px; background:url(../images/colorbox/images/controls.png) no-repeat -50px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxNext.hover{background-position:-50px -25px;}
        #cboxLoadingOverlay{background:url(../images/colorbox/images/loading_background.png) no-repeat center center;}
        #cboxLoadingGraphic{background:url(../images/colorbox/images/loading.gif) no-repeat center center;}
        #cboxClose{position:absolute; bottom:0; right:0; background:url(../images/colorbox/images/controls.png) no-repeat -25px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxClose.hover{background-position:-25px -25px;}

/*
  The following fixes a problem where IE7 and IE8 replace a PNG's alpha transparency with a black fill
  when an alpha filter (opacity change) is set on the element or ancestor element.  This style is not applied to IE9.
*/
.cboxIE #cboxTopLeft,
.cboxIE #cboxTopCenter,
.cboxIE #cboxTopRight,
.cboxIE #cboxBottomLeft,
.cboxIE #cboxBottomCenter,
.cboxIE #cboxBottomRight,
.cboxIE #cboxMiddleLeft,
.cboxIE #cboxMiddleRight {
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);
}

/*
  The following provides PNG transparency support for IE6
*/
.cboxIE6 #cboxTopLeft{background:url(../images/colorbox/images/ie6/borderTopLeft.png);}
.cboxIE6 #cboxTopCenter{background:url(../images/colorbox/images/ie6/borderTopCenter.png);}
.cboxIE6 #cboxTopRight{background:url(../images/colorbox/images/ie6/borderTopRight.png);}
.cboxIE6 #cboxBottomLeft{background:url(../images/colorbox/images/ie6/borderBottomLeft.png);}
.cboxIE6 #cboxBottomCenter{background:url(../images/colorbox/images/ie6/borderBottomCenter.png);}
.cboxIE6 #cboxBottomRight{background:url(../images/colorbox/images/ie6/borderBottomRight.png);}
.cboxIE6 #cboxMiddleLeft{background:url(../images/colorbox/images/ie6/borderMiddleLeft.png);}
.cboxIE6 #cboxMiddleRight{background:url(../images/colorbox/images/ie6/borderMiddleRight.png);}

.cboxIE6 #cboxTopLeft,
.cboxIE6 #cboxTopCenter,
.cboxIE6 #cboxTopRight,
.cboxIE6 #cboxBottomLeft,
.cboxIE6 #cboxBottomCenter,
.cboxIE6 #cboxBottomRight,
.cboxIE6 #cboxMiddleLeft,
.cboxIE6 #cboxMiddleRight {
    _behavior: expression(this.src = this.src ? this.src : this.currentStyle.backgroundImage.split('"')[1], this.style.background = "none", this.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src=" + this.src + ", sizingMethod='scale')");
}
#emf-form {margin-bottom: 0;}
#emf-form td {padding: 2px;}
#emf-form input {padding: 1px 0;}
.emf-error-message{color:red;font-weight:bold;padding:5px 20px;}


#emf-container {text-align: left;margin: 0 auto;width: 640px;font-size:13px;-moz-border-radius:7px;-webkit-border-radius:7px;}
#emf-container .emf-small-font {font-size:85% !important; }
#emf-container .emf-bold {font-weight: bold;}
#emf-container .emf-clear{clear:both;}
#emf-container .emf-right{float:right !important}
#emf-container .emf-left{float:left !important}
#emf-container .emf-full{width:100%}
#emf-container .emf-half{width:49%; padding-right:0px !important;}
#emf-container .emf-text-left{text-align:left;}
#emf-container .emf-text-right{text-align:right;}
#emf-container .emf-text-center{text-align:center;}
#emf-container .emf-block{display:block;}
#emf-container .emf-inline{display:inline !important;}
#emf-container .emf-hide{display:none !important;}
#emf-container #emf-logo a {display: block;height: 0;overflow: hidden;}
#emf-container #emf-form-instruction{padding-left: 5px;padding-bottom: 10px;}
#emf-container #emf-form-title{font-size: 20px;}
#emf-container #emf-form-description{font-size: 15px;}
#emf-container #emf-form{position: relative;padding:15px 15px 5px 15px;}
#emf-container #emf-form.rightLabel label.emf-label-desc{text-align: right;}
#emf-container #emf-form.leftLabel label.emf-label-desc ,
#emf-container #emf-form.rightLabel label.emf-label-desc{float:left;width:34%;}
#emf-container #emf-form.leftLabel div.emf-div-field,
#emf-container #emf-form.rightLabel div.emf-div-field{float:left;width:64%;}

#emf-container ul{list-style-type:none; padding:0px; margin:0px;}
#emf-container ul li{margin:5px 0 5px 0;padding:5px 0 5px 0;width:100%;vertical-align: top; clear:both;}
#emf-container ul li.emf-li-half-width{ zoom: 1; display: inline-block; *display: inline; clear:none;width:49%}
#emf-container li label.emf-label-desc{font-weight: bold;padding-right:2px;padding-bottom:5px;display:block;}
#emf-container li .emf-div-instruction{clear:both;font-size: 13px;padding:2px 0;}
#emf-container li .emf-section-text{clear:both;font-size: 13px;padding:2px 0;}
#emf-container li label.emf-label-desc span{color:#ff0000;}
#emf-container #emf-li-post-button.left{padding-left:5px;text-align: left;}
#emf-container #emf-li-post-button.middle{text-align: center;}
#emf-container #emf-li-post-button.right{text-align: right;}
#emf-container li#emf-li-captcha #emf-captcha-bottom-settings #emf-captcha-image-settings,
#emf-container li#emf-li-captcha #emf-captcha-bottom-settings #emf-captcha-input-settings{float: left;}
#emf-container li#emf-li-captcha div.emf-clear{clear:both;}
#emf-container #emf-captcha-top-settings{padding:1px;font-weight: bold;}
#emf-container #emf-captcha-input-settings{padding-left:5px;}
#emf-container li label.emf-label-desc span{color:#ff0000;}
#emf-container li div.emf-div-field div.one_column{width: 100%;padding-bottom:5px;}
#emf-container li div.emf-div-field div.two_column{float:left;width: 50%;padding-bottom:5px;}
#emf-container li div.emf-div-field div.three_column{float:left;width: 33%;padding-bottom:5px;}
#emf-container li div.emf-div-field div.side_by_side{float:left;padding-bottom:5px;}
#emf-container li .emf-section-separator{border-bottom:1px dotted #CCCCCC; margin:14px 0px 0px;}
#emf-container li div.emf-div-field-section h3{font-size:14px; margin:0px 0px 14px; padding:10px 0 6px;position:static;}
#emf-container li div.emf-div-field div.emf-allow-other{margin-left:20px;}
#emf-container li div.emf-div-field label.padleft-w5{padding-left:5px;}
#emf-container li div.emf-div-field span{float:left;padding-right:5px;}
#emf-container li div.emf-div-field span.emf-sep{line-height:20px;}
#emf-container li div.emf-div-field span input.emf-input-w20{width:20px;}
#emf-container li div.emf-div-field span input.emf-input-w30{width:30px;}
#emf-container li div.emf-div-field span input.emf-input-w40{width:40px;}
#emf-container li div.emf-div-field span input.emf-input-w60{width:60px;}
#emf-container li div.emf-div-field span input.emf-input-w100{width:100px;}
#emf-container select.emf-address{width:190px;}
#emf-form table td{vertical-align:top;}

#emf-container .emf-link {
    background: none repeat scroll 0 0 transparent;
    border: medium none;
    color: blue;
    cursor: pointer;
    text-decoration: underline;
    margin-left:15px;
}
#emf-container .emf-page-operations{
	*float:left; 
}
#emf-container .emf-marker {
    float: right;
    padding:5px;
}
#emf-container .emf-head-widget {
    border-bottom: 1px dotted #CCCCCC;
    padding: 10px 0px;
}

#emf-container #emf-page-info .emf-page-number{
	vertical-align: middle;
}
#emf-container #emf-page-info .emf-page-number.emf-selected span{
    border: 1px solid #E6DEAD;
    color: #000000;
    font-weight: bold;
    background-color:#FBFFCF;
}
#emf-container #emf-page-info .emf-page-number span{
	background-color:#FFFFFF;
	border: 1px solid #CCCCCC;
	border-radius: 10px 10px 10px 10px;
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
	color: #000000;
	height: 20px;
	line-height: 19px;
	text-align: center;
	width: 20px;
	padding:0px;
	margin-left:8px ;
	margin-right:5px ;
}
#emf-container #emf-page-info .emf-page-label{
	padding:2px;
	line-height:21px;
   	vertical-align: middle;
}
#emf-container #emf-page-info .emf-steps{
	width:100%;
	margin-bottom:24px;	
}
#emf-container #emf-page-info .emf-steps span{
	float:left;
}
#emf-container #emf-page-info .emf-percentage{
	border: 1px solid #CCCCCC;
	border-radius: 12px 12px 12px 12px;
	box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
	margin:0px 5px 5px;
	padding:0px;
	background-color:#ffffff;
}
#emf-container #emf-page-info .emf-percentage .emf-zero-progress{
    display: inline-block;
    text-align:right;
    padding-left:10px;
    padding-right:4px;
}
#emf-container #emf-page-info .emf-percentage .emf-progress {
    background: none repeat scroll 0 0 #FFF7C0;
    border-radius: 12px 12px 12px 12px;
    box-shadow: 1px 0 0 rgba(0, 0, 0, 0.15);
    display: inline-block;
    text-align:right;
    margin-right:4px;
}
#emf-container #emf-form ul li.emf-li-field{
	padding-left: 5px;
	overflow-x:hidden;
}
#emf-container .emf-fake-li-wrapper{
	margin-top:10px;
}
#emf-container .emf-protect-password-form{
	text-align:center;
	padding-bottom:25px;
}
#emf-container .emf-protect-password-form input.emf-protect-password{
	font-size:18px;
	width:300px;
}
#emf-container .emf-protect-password-form-title{
	font-size:18px;
	font-weight:bold;
	padding: 15px 0px;
}
#emf-container .emf-protect-password-form-desc{
	font-size:16px;
	padding: 10px 0px;
}
#emf-recaptcha_widget{
	border:1px solid #ccc;
	width:332px;
	font-size:13px;
}
#emf-recaptcha_widget span{
	margin:3px 5px;
	line-height:30px;
}
#emf-recaptcha_widget .image_container{
	border-bottom:1px solid #ccc;
	text-align:center;
}
#emf-container .emf-bottom-label{display:block;}

.emf-likert{
	border-collapse: collapse;
	margin: 0 0 .9em 0;
	background: white;
	width: 100%;
	border: 1px solid #DEDEDE;
	border-bottom: none;
}
.emf-likert thead td, .emf-likert thead th {
	background-color: #E6E6E6;
	padding: 10px 6px;
}
.emf-likert th, .emf-likert td {
	border-bottom: 1px solid #DEDEDE;
	padding: 8px 8px;
}
.emf-likert th{
	text-align: left;
	font-weight:bold;
}
#emf-form .emf-likert td {
	border-left: 1px solid #CCC;
	text-align: center;
	vertical-align:middle;
}
.emf-likert td label{
	display:block;
	margin-top:3px;
}
#emf-container  #emf-form .emf-likert-desc label.emf-label-desc{
	float:none;
	width:100%;
}
#emf-container .emf-delete_file_link{
	color:red;
}