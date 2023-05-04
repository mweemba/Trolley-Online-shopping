	$(function() {
				
				$('#Thumbnail').uberuploadcropper({
					//---------------------------------------------------
					// uploadify options..
					//---------------------------------------------------
					fineuploader: {
						//debug : true,
						request	: { 
							// params: {}
							endpoint: 'upload.php' 
						},						
						validation: {
							//sizeLimit	: 0,
							allowedExtensions: ['jpg','jpeg','png','gif']
						}
					},
					//---------------------------------------------------
					//now the cropper options..
					//---------------------------------------------------
					jcrop: {
						aspectRatio  : 1, 
						allowSelect  : false, //can reselect
						allowResize  : true,  //can resize selection
						setSelect    : [ 0, 0, 200, 200 ], //these are the dimensions of the crop box x1,y1,x2,y2
						minSize      : [ 200, 200 ], //if you want to be able to resize, use these
						maxSize      : [ 500, 500 ]
					},
					//---------------------------------------------------
					//now the uber options..
					//---------------------------------------------------
					folder           : 'uploads/', // only used in uber, not passed to server
					cropAction       : 'crop_small.php', // server side request to crop image
					onComplete       : function(e,imgs,data){ 
						var $PhotoPrevs = $('#PhotoPrevs');

						for(var i=0,l=imgs.length; i<l; i++){
							updateDBimgs(imgs[i].filename,'thumbnail');
							$PhotoPrevs.append('<img src="uploads/'+ imgs[i].filename +'?d='+ (new Date()).getTime() +'" />');
						}
					}
				});
				});
				
				$(function() {
				$('#picture1').uberuploadcropper({
					//---------------------------------------------------
					// uploadify options..
					//---------------------------------------------------
					fineuploader: {
						//debug : true,
						request	: { 
							// params: {}
							endpoint: 'upload.php' 
						},						
						validation: {
							//sizeLimit	: 0,
							allowedExtensions: ['jpg','jpeg','png','gif']
						}
					},
					//---------------------------------------------------
					//now the cropper options..
					//---------------------------------------------------
					jcrop: {
						aspectRatio  : 1.333333333, 
						allowSelect  : false, //can reselect
						allowResize  : true,  //can resize selection
						setSelect    : [ 0, 0, 500, 375 ], //these are the dimensions of the crop box x1,y1,x2,y2
						minSize      : [ 500, 375 ], //if you want to be able to resize, use these
						maxSize      : [ 500, 375 ]
					},
					//---------------------------------------------------
					//now the uber options..
					//---------------------------------------------------
					
					folder           : 'uploads/', // only used in uber, not passed to server
					cropAction       : 'crop.php', // server side request to crop image
					onComplete       : function(e,imgs,data){ 
					
						for(var i=0,l=imgs.length; i<l; i++){
							console.log(imgs[i].filename);
							
							updateDBimgs(imgs[i].filename,'picture1');
							$PhotoPrevs.append('<img src="uploads/'+ imgs[i].filename +'?d='+ (new Date()).getTime() +'" />');
						}
					}
				});
			});
			
			$(function() {
				
				$('#picture2').uberuploadcropper({
					//---------------------------------------------------
					// uploadify options..
					//---------------------------------------------------
					fineuploader: {
						//debug : true,
						request	: { 
							// params: {}
							endpoint: 'upload.php' 
						},						
						validation: {
							//sizeLimit	: 0,
							allowedExtensions: ['jpg','jpeg','png','gif']
						}
					},
					//---------------------------------------------------
					//now the cropper options..
					//---------------------------------------------------
					jcrop: {
						aspectRatio  : 1.333333333, 
						allowSelect  : false, //can reselect
						allowResize  : true,  //can resize selection
						setSelect    : [ 0, 0, 500, 375 ], //these are the dimensions of the crop box x1,y1,x2,y2
						minSize      : [ 500, 375 ], //if you want to be able to resize, use these
						maxSize      : [ 500, 375 ]
					},
					//---------------------------------------------------
					//now the uber options..
					//---------------------------------------------------
					
					folder           : 'uploads/', // only used in uber, not passed to server
					cropAction       : 'crop.php', // server side request to crop image
					onComplete       : function(e,imgs,data){ 
					
						for(var i=0,l=imgs.length; i<l; i++){
							console.log(imgs[i].filename);
							
							updateDBimgs(imgs[i].filename,'picture2');
							$PhotoPrevs.append('<img src="uploads/'+ imgs[i].filename +'?d='+ (new Date()).getTime() +'" />');
						}
					}
				});
				});
			$(function() {
				
				$('#picture3').uberuploadcropper({
					//---------------------------------------------------
					// uploadify options..
					//---------------------------------------------------
					fineuploader: {
						//debug : true,
						request	: { 
							// params: {}
							endpoint: 'upload.php' 
						},						
						validation: {
							//sizeLimit	: 0,
							allowedExtensions: ['jpg','jpeg','png','gif']
						}
					},
					//---------------------------------------------------
					//now the cropper options..
					//---------------------------------------------------
					jcrop: {
						aspectRatio  : 1.333333333, 
						allowSelect  : false, //can reselect
						allowResize  : true,  //can resize selection
						setSelect    : [ 0, 0, 500, 375 ], //these are the dimensions of the crop box x1,y1,x2,y2
						minSize      : [ 500, 375 ], //if you want to be able to resize, use these
						maxSize      : [ 500, 375 ]
					},
					//---------------------------------------------------
					//now the uber options..
					//---------------------------------------------------
					
					folder           : 'uploads/', // only used in uber, not passed to server
					cropAction       : 'crop.php', // server side request to crop image
					onComplete       : function(e,imgs,data){ 
					
						for(var i=0,l=imgs.length; i<l; i++){
							console.log(imgs[i].filename);
							
							updateDBimgs(imgs[i].filename,'picture3');
							$PhotoPrevs.append('<img src="uploads/'+ imgs[i].filename +'?d='+ (new Date()).getTime() +'" />');
						}
					}
				});
				});
			
			
				$(function() {
				$('#picture4').uberuploadcropper({
					//---------------------------------------------------
					// uploadify options..
					//---------------------------------------------------
					fineuploader: {
						//debug : true,
						request	: { 
							// params: {}
							endpoint: 'upload.php' 
						},						
						validation: {
							//sizeLimit	: 0,
							allowedExtensions: ['jpg','jpeg','png','gif']
						}
					},
					//---------------------------------------------------
					//now the cropper options..
					//---------------------------------------------------
					jcrop: {
						aspectRatio  : 1.333333333, 
						allowSelect  : false, //can reselect
						allowResize  : true,  //can resize selection
						setSelect    : [ 0, 0, 500, 375 ], //these are the dimensions of the crop box x1,y1,x2,y2
						minSize      : [ 500, 375 ], //if you want to be able to resize, use these
						maxSize      : [ 500, 375 ]
					},
					//---------------------------------------------------
					//now the uber options..
					//---------------------------------------------------
					
					folder           : 'uploads/', // only used in uber, not passed to server
					cropAction       : 'crop.php', // server side request to crop image
					onComplete       : function(e,imgs,data){ 
					
						for(var i=0,l=imgs.length; i<l; i++){
							console.log(imgs[i].filename);
							
							updateDBimgs(imgs[i].filename,'picture4');
							$PhotoPrevs.append('<img src="uploads/'+ imgs[i].filename +'?d='+ (new Date()).getTime() +'" />');
						}
					}
				});
				});
			
			
			
			function updateDBimgs(filename, pic){
				
				$.ajax({
       type: "POST",
       url: 'do_update.php',//sends data to update the database
	   data:"filename="+filename+"&picture="+pic,
       success:  function(data)
       {
          if (data.trim() === 'success') { 
			//document.getElementById("total").innerHTML="ZMK"+data;
		  //document.getElementById("cartTotal").innerHTML="ZMK"+data;
		console.log(data);
			
          }
          else {
		 console.log(data);
		  //document.getElementById("total").innerHTML="ZMK"+data;
		  //document.getElementById("cartTotal").innerHTML="ZMK"+data;
          }
       }
   });
				
			}