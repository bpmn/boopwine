<?php
/**
 * Tooltips CSS
 */


$transparent = 'mod/overlay/vendors/jquery_tools/graphics/transparent.png';
$transparent = elgg_normalize_url($transparent);

$white = 'mod/overlay/vendors/jquery_tools/graphics/white_big.png';
$white = elgg_normalize_url($white);

$blue = 'mod/overlay/vendors/jquery_tools/graphics/blue.png';
$blue = elgg_normalize_url($blue);

$close = 'mod/overlay/vendors/jquery_tools/graphics/close.png';
$close = elgg_normalize_url($close);
?>

.tooltip {
	display: none;
	background: transparent url(<?php echo $img; ?>);
	font-size: 12px;
	height: 70px;
	width: 160px;
	padding: 25px;
	color: #fff;
}

/* use a semi-transparent image for the overlay */
#overlay {
    //background-image:url(<?php echo $white; ?>);

   //height:700px;
}

/* container for external content. uses vertical scrollbar, if needed */
div.contentWrap {
        height:580px;
        overflow-y:auto;
        background: white;
        
} 


/* the overlayed element */
.apple_overlay {
    /* initially overlay is hidden */
    display:none;
    /* growing background image */
    background-image:url(<?php echo $white; ?>);
  
    /*
    width after the growing animation finishes
    height is automatically calculated
    */
    width:970px;
    height:600px;
    /* some padding to layout nested elements nicely */
    padding:35px;
    /* a little styling */
    font-size:13px;
}



/* default close button positioned on upper right corner */
.apple_overlay .close {
        background-image:url(<?php echo $close; ?>);
        position:absolute; right:5px; top:5px;
        cursor:pointer;
        height:35px;
        width:35px;
}


/* root element for tabs */
ul#tabb {
    list-style:none;
    margin:0 !important;
    padding:0;
    border-bottom:1px solid #666;
    height:25px;
    }
/* single tab */
ul#tabb li {
    float:left;
    text-indent:0;
    padding:0;
    margin:0 !important;
    list-style-image:none !important;
}
/* link inside the tab. uses a background image */
ul#tabb a {
    background: url(<?php echo $blue; ?>) no-repeat -420px 0;
    font-size:11px;
    display:block;
    height: 25px;
    line-height:25px;
   // width: 134px;
    width: 70px;
    text-align:center;
    text-decoration:none;
    color:#333;
    padding:0px;
    margin:0px;
    position:relative;
    top:1px;
}
ul#tabb a:active {
    outline:none;
} 
 


/* when mouse enters the tab move the background image */
ul#tabb a:hover {
    background-position: -420px -31px;
    color:#fff;
}
/* active tab uses a class name "current". its highlight is also done by moving the background image. */
ul#tabb a.current, ul#tabb a.current:hover, ul#tabb li.current a {
    background-position: -420px -62px;
    cursor:default !important;
    color:#000 !important;
}
/* Different widths for tabs: use a class name: w1, w2, w3 or w2 */
/* width 1 */
ul#tabb a.s { background-position: -553px 0; width:81px; }
ul#tabb a.s:hover { background-position: -553px -31px; }
ul#tabb a.s.current { background-position: -553px -62px; }
/* width 2 */
ul#tabb a.l { background-position: -248px -0px; width:174px; }
ul#tabb a.l:hover { background-position: -248px -31px; }
ul#tabb a.l.current { background-position: -248px -62px; }
/* width 3 */
ul#tabb a.xl { background-position: 0 -0px; width:248px; }
ul#tabb a.xl:hover { background-position: 0 -31px; }
ul#tabb a.xl.current { background-position: 0 -62px; }

/* initially all panes are hidden */
.panes .pane {
    display:none;
} 

/* tab pane styling */
.panes div {
    display:none;
    //padding:15px 10px;
    border:1px solid #999;
    border-top:0;
   // height:100px;
    font-size:12px;
    background-color:#fff;
}