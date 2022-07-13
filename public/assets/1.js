let isGutenberg = true;
	let miniAudioPlayer_replaceDefault = 1;
	let miniAudioPlayer_excluded = "map_excluded";
	let miniAudioPlayer_replaceDefault_show_title = 1;

	let miniAudioPlayer_defaults = {
				inLine:true,
                width:"350",
				skin:"black",
				animate:true,
				volume:.2,
				autoplay:false,
				showVolumeLevel:true,
				allowMute: true,
				showTime:true,
				id3:false,
				showRew:true,
				addShadow: false,
				downloadable:false,
				downloadPage: null,
				swfPath:"https://baotanghdh.vn/wp-content/plugins/wp-miniaudioplayer/js/",
				onReady: function(player, $controlsBox){
				   if(player.opt.downloadable && player.opt.downloadablesecurity && !false){
				        jQuery(".map_download", $controlsBox).remove();
				   }
				}
		};

    function initializeMiniAudioPlayer(){
         jQuery(".mejs-container a").addClass(miniAudioPlayer_excluded);
         jQuery("a[href *= '.mp3']").not(".map_excluded").not(".wp-playlist-caption").not("[download]").mb_miniPlayer(miniAudioPlayer_defaults);
    }

    //if(1)
        jQuery("body").addClass("map_replaceDefault");

	jQuery(function(){
     // if(1)
         setTimeout(function(){replaceDefault();},10);
      
      initializeMiniAudioPlayer();
      jQuery(document).ajaxSuccess(function(event, xhr, settings) {
        initializeMiniAudioPlayer();
      });
	});