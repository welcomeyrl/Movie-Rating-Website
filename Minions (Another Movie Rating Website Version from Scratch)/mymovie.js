$(document).ready(function() {
	
	var change_img_time     = 5000; 
    var simple_slideshow    = $(".top-wrapper"),
        listItems           = simple_slideshow.children('div'),
        listLen             = listItems.length,
        i                   = 0,

        changeList = function () {

            listItems.eq(i).fadeOut("slow", function () {
                i += 1;
                if (i === listLen) {
                    i = 0;
                }
                listItems.eq(i).fadeIn("slow");
            });

        };

    listItems.not(':first').hide();
    setInterval(changeList, change_img_time);	

});
