$(function() {
	var $panelMenu = $('#panel-left'),
		$panelSubMenu = $('#panel-center');

	enquire.register("screen and (max-width:768px)", {
		match : function() {
			$('#panel-left, #panel-center').wrapAll('<div class="m-wrp"/>');
		},
		unmatch : function() {
			$('#panel-left, #panel-center').unwrap();
		}
	});

	$('.m-header__toggle').click(function(e) {
		e.preventDefault();

		var $wrp = $('.m-wrp');

		$wrp.slideToggle('fast', function() {
			$wrp.toggleClass('is-opened');
		});
	})

	$("#myButt").click(function () {
        //var wohashDoc = $("[aria-describedby=cke_63]").html().replace('#document', '');
        //var hash = window.location.hash.replace('#document', '');
        //alert(wohashDoc);
        //var hash = window.location.hash;
        //alert(hash);
        /*html_string = '<h1>444444</h1>';
        $("iframe").src = "data:text/html;charset=utf-8," + html_string;*/
		//alert($("#ext-document").html());
		//alert(JSON.stringify($("iframe")));
		//console.log(JSON.stringify($("iframe")));
		//alert(a);
		//alert($('iframe').html());
        //html_string = '<h1>12345</h1>';
		//$("iframe").src = "data:text/html;charset=utf-8," + html_string;//cke_wysiwyg_frame cke_reset
        //document.getElementById('output_iframe1').src = "data:text/html;charset=utf-8," + html_string;
		//$("iframe").html('<p>oooo</p>');
		//alert($("iframe").html());
		//alert(editor.getSnapshot());
		//alert(CKEDITOR.instances.editor.insertHtml( '<p>This is a new paragraph.</p>' ));
        //alert($(".cke_editable").html());
        //alert($("[contenteditable=true]").html());
        //$("body").find("p").
        //alert($("#myTxt").html());
        //$(".cke_editable cke_editable_themed cke_contents_ltr cke_show_borders").html();
		//$("[contenteditable=true]").html();
		//alert(123);
		return false;
    });

    var attr = $('body').attr('contenteditable');

	// attribute exists?
    if(typeof attr !== undefined && attr !== false) {
        // do something…
		//alert('Yes');
        $("[contenteditable=true]").html(123);

    }
});