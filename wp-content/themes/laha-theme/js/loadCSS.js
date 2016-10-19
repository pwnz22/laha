function loadCSS( href, before, media ){
	"use strict";
	var ss = window.document.createElement( "link" );
	var ref = before || window.document.getElementsByTagName( "script" )[ 0 ];
	ss.rel = "stylesheet";
	ss.href = href;
	ss.media = "only x";
	ref.parentNode.insertBefore( ss, ref );
	setTimeout( function(){
		ss.media = media || "all";
	} );
	return ss;
}

// load Google Web Font
// loadCSS( "http://dev.ils-team.ru/wp-content/themes/laha-theme/libs/bootstrap/css/bootstrap.min.css?ver=1.0.0" );
// loadCSS( "http://dev.ils-team.ru/wp-content/themes/laha-theme/libs/slick/css/slick.css?ver=1.0.0" );
// loadCSS( "http://dev.ils-team.ru/wp-content/themes/laha-theme/libs/slick/css/slick-theme.css?ver=1.0.0" );
// loadCSS( "http://dev.ils-team.ru/wp-content/themes/laha-theme/libs/magnific/magnific-popup.css?ver=1.0.0" );
