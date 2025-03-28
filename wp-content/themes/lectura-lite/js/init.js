jQuery(document).ready(function($) { 

	/**
	* FitVids - Responsive Videos in posts
	*/
	$("#content").fitVids();

    $(function () {

        $('#lectura-menu-main').superfish({
            'speed': 'fast',
            'delay' : 0,
            'animation': {
                'height': 'show'
            }
        });

    });

});

function lectura_lite_toggle_class(element_id, class_name) {

	if (!element_id || !class_name){
		return;
	}

	var element = document.getElementById(element_id);
	element.classList.toggle(class_name);
}