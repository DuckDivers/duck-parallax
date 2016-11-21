// JavaScript Document
jQuery(window).on('load resize', function(){var bodywidth = jQuery('body').width();var conatinerwidth = jQuery('#content').width();var offset = '-' + ((bodywidth - conatinerwidth) / 2)-15 + 'px';	jQuery('section.parallax-section').css('left', offset);
});