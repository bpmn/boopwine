<?php
/**
 * Tooltips CSS
 */




$loader = 'mod/overlay/vendors/nyromodal/graphics/ajaxLoader.gif';
$loader = elgg_normalize_url($loader);

$close = 'mod/overlay/vendors/nyromodal/graphics/close.gif';
$close = elgg_normalize_url($close);
?>

.nyroModalBg {
	position: fixed;
	overflow: hidden;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	background: #000;
	opacity: 0.7;
        //z-index: 0;
}
.nmReposition {
	position: absolute;
        z-index: 20000; //z-index de elgg-page-topbar= 9000
}
.nyroModalCloseButton {
	top: -13px;
	right: -13px;
	width: 12px;
	height: 12px;
	text-indent: -9999em;
	background: url(<?php echo $close ?>);
}
.nyroModalTitle {
	top: -26px;
	left: 0;
	margin: 0;
    font-size: 1.1em;
	color: #ddd;
}
.nyroModalCont {
	position: absolute;
	border: 4px solid #600000;
	margin: 25px;
	background: #fffafa;
        
        
}
.nyroModalCont iframe {
	width: 600px;
	height: 400px;
}
.nyroModalError {
	border: 4px solid red;
	color: red;
	width: 250px;
	height: 250px;
}
.nyroModalError div {
	min-width: 0;
	min-height: 0;
	padding: 10px;
}
.nyroModalLink, .nyroModalDom, .nyroModalForm, .nyroModalFormFile {
	position: relative;
	padding: 10px;
	//min-height: 250px;
	//min-width: 250px;
        min-width: 1000px;
        min-height: 500px;
	max-width: 1000px;
}
.nyroModalImage, .nyroModalSwf, .nyroModalIframe, .nyroModalIframeForm {
	position: relative;
	overflow: hidden;
}
.nyroModalImage img {
    vertical-align: top;
}
.nyroModalHidden {
	left: -9999em;
	top: -9999em;
}
.nyroModalLoad {
	position: absolute;
	width: 100px;
	height: 100px;
	background: #fff url(<?php echo $loader ?>) no-repeat center;
	padding: 0;
}
.nyroModalPrev, .nyroModalNext {
	outline: none;
	position: absolute;
	top: 0;
	height: 60%;
	width: 150px;
	min-height: 50px;
	max-height: 300px;
	cursor: pointer;
	text-indent: -9999em;
	background: transparent url('data:image/gif;base64,AAAA') left 20% no-repeat;
}
.nyroModalImage .nyroModalPrev, .nyroModalImage .nyroModalNext {
	height: 100%;
	width: 40%;
	max-height: none;
}
.nyroModalPrev {
	left: 0;
}
.nyroModalPrev:hover {
	background-image: url(../img/prev.gif);
}
.nyroModalNext {
	right: 0;
	background-position: right 20%;
}
.nyroModalNext:hover {
	background-position: right 20%;
	background-image: url(../img/next.gif);
}