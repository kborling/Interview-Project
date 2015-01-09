$(document).ready( function() {

	// Upload/Progress Bar Settings
	var progressbar = $("#progressbar"),
        bar         = progressbar.find('.uk-progress-bar'),
        settings    = {
        action: '../uploads/', // upload url
        allow : '*.(jpg|gif|png)', // allow only images
        loadstart: function() {
            bar.css("width", "0%").text("0%");
            progressbar.removeClass("uk-hidden");
        },
        progress: function(percent) {
            percent = Math.ceil(percent);
            bar.css("width", percent+"%").text(percent+"%");
        },
        allcomplete: function(response) {
            bar.css("width", "100%").text("100%");
            setTimeout(function(){
                progressbar.addClass("uk-hidden");
            }, 250);
            alert("Upload Completed") // REMOVE
        }
    };
    var select = $.UIkit.uploadSelect($("#upload-select"), settings),
        drop   = $.UIkit.uploadDrop($("#upload-drop"), settings);
}); // End ready