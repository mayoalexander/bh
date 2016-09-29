(function () {
    
    var DEFAULT_WIDTH = '';
    var DEFAULT_HEIGHT = '';
    var width = 'auto';
    var height = 'auto';

    var streaming = false;

    var video = null;
    var canvas = null; 
    var photo = null;
    var addedFrame = null;
    var data = {};


    var launchCameraButton = '<input type="file" id="launchCameraButton" accept="image/*">';
    var launchCameraButtonSafari = '<input type="file" id="launchCameraButton" accept="image/*;capture=camera">';
    var takePhotoHtml = '<img id="photo" style="width:100%; height:100%;display:none;" src="">';

    // Set all initial variables and events
    function startup(imgRef, isMobile) {
        if (window.location.protocol !== "https:" && window.location.hostname !== "localhost")
        {
            window.location.href = "https:" + window.location.href.substring(window.location.protocol.length);
        }

        if (isMobile.android.device || isMobile.apple.device) {
            var containerHeight = '430';
            $('.videoPlaceholder').css('height', containerHeight);
            var buttons = $('#HelicopterSelect button');
            $.each(buttons, function (index, button) {
                var url = button.getAttribute('data-href');
                var newUrl = url.replace('.png', '-sm.png');
                button.setAttribute('data-href', newUrl);
                console.log('currrent: ' + url);
                console.log('new: ' + newUrl);
            });
        } else {
            var containerHeight = '280';
        }
              
           
        //$.getScript("isMobile.min.js", function () {
        //    alert("isMobile script added")
        //})
        video = document.getElementById('video-stream');
        canvas = document.getElementById('canvas');
        photo = document.getElementById('photo');

        // Get Hero background image
        addedFrame = document.createElement("img");
        addedFrame.src = imgRef;
        addedFrame.setAttribute('id', 'framelayover');

        // adding global variables into data object
        data.containerHeight = containerHeight;
        data.isMobile = isMobile;
        initializeEvents(data);

        appendTrackingCode();
        // Set the image
        clearphoto();
    }

    function appendTrackingCode() {
        $.each($('#video button'), function (index, value) {
            var heliName = value.getAttribute('title').replace(/\s+/g, '');
            console.log(index + '-' + heliName);
            value.setAttribute('onclick', 'trackOutboundLink("http://luxurylounge.bh.com\/helicopter/' + heliName + '")');
        })
    }

    function resetVideoPlaceholder() {
        $('#contPhotoShare').hide();
        if (isMobile.apple.device)
        {
            $('#HelicopterSelect').hide();
            $('.videoPlaceholder').html(takePhotoHtml);
            $('#video').prepend(launchCameraButton);
            imageLayover();
            $('#launchCameraButton').change(function () {
                previewFile();
            });
        }
        else {
            $('#HelicopterSelect').show();
            $('#btnTakePhoto').show();
           
        }
                    
        photo.style.display = 'none';
        video.play();
        video.style.display = 'block';
        $('#framelayover').show();
        clearphoto();
    }

    function setimage(imgRef)
    {
        // Set frame image
        addedFrame.src = imgRef;
    }

    //function getOrientation(file, callback) { 
    //    var reader = new FileReader();
    //    reader.onload = function (e) {

    //        var view = new DataView(e.target.result);
    //        if (view.getUint16(0, false) != 0xFFD8) return callback(-2);
    //        var length = view.byteLength, offset = 2;
    //        while (offset < length) {
    //            var marker = view.getUint16(offset, false);
    //            offset += 2;
    //            if (marker == 0xFFE1) {
    //                if (view.getUint32(offset += 2, false) != 0x45786966) return callback(-1);
    //                var little = view.getUint16(offset += 6, false) == 0x4949;
    //                offset += view.getUint32(offset + 4, little);
    //                var tags = view.getUint16(offset, little);
    //                offset += 2;
    //                for (var i = 0; i < tags; i++)
    //                    if (view.getUint16(offset + (i * 12), little) == 0x0112)
    //                        return callback(view.getUint16(offset + (i * 12) + 8, little));
    //            }
    //            else if ((marker & 0xFF00) != 0xFF00) break;
    //            else offset += view.getUint16(offset, false);
    //        }
    //        return callback(-1);
    //    };
    //    reader.readAsArrayBuffer(file.src.slice(0, 64 * 1024));
    //}


    function getOrientation(file)
    {
            fr = new FileReader;

            fr.onloadend = function () {
                var exif = EXIF.readFromBinaryFile(new BinaryFile(this.result));
                alert(exif.Orientation);
            };

            fr.readAsBinaryString(file.src);

    }
    // usage:


    function getOrientation(file) {
        var exif = EXIF.readFromBinaryFile(new BinaryFile(file));

        switch(exif.Orientation){

            case 8:
                ctx.rotate(90*Math.PI/180);
                break;
            case 3:
                ctx.rotate(180*Math.PI/180);
                break;
            case 6:
                ctx.rotate(-90*Math.PI/180);
                break;
        }
        alert('getting orientation');
        console.log(ctx);
    }

    function displayButtonsShare() {
        $('#contPhotoShare').show();
        $('#btnRetake').show();
        $('#btnTakePhoto').hide();
        $('#HelicopterSelect').hide();
    }
    // Initialize all events for the page
    function initializeEvents(data) {

            video.addEventListener('canplay', function (ev) { 
                if (!streaming) {
                    height = $('.videoPlaceholder').height();
                    width = $('.videoPlaceholder').width();
                    DEFAULT_HEIGHT = height;
                    DEFAULT_WIDTH = width;

                    imageLayover(height, width);

                    video.setAttribute('width', width);
                    video.setAttribute('height', 'auto');
                    canvas.setAttribute('width', width);
                    canvas.setAttribute('height', height);
                    streaming = true;

                } 
            }, false);
        
        $('#next1').click(function () {
            $('#intro').hide();
            $('#video').show();
            if (isMobile.apple.device)
            {
                requestCameraiphone();
            } else {                
                requestCamera(isMobile);
            }

            
        });

        $('#btnTakePhoto').click(function () {
            takepicture(function () {
                displayButtonsShare();
                photo.style.display = 'block';
                video.pause();
                video.style.display = 'none';
            }, data);
            console.log(data);
        });
        $('#btnRetake').click(function () {
            $(this).hide();
            resetVideoPlaceholder();
        });
        $('#DownloadImage').click(function () {
        
            if (isMobile.apple.device) {
                var downloadUrl = $('.videoPlaceholder img')[0].src;
                window.open(downloadUrl);
                return;
            } else {
                console.log('not an ios');
            }
            var linkElement = document.createElement("a");
            linkElement.addEventListener('click', function (evt) {
                downloadPicture(this, 'photo', 'selfie.png');
            }, false);
            linkElement.click();
            //downloadPicture(this, 'photo', 'Selfie.png');
        });


        $('#HelicopterSelect .btn').click(function () {
            $('#HelicopterSelect .btn').removeClass('active');
            $(this).addClass('active');
            //change overlay image dynamically here
            //
            // get image url
            var imageURL = $(this).attr('data-href');
            //swap the image on the UI
            //$('#imageID').elem('href', imageURL);
            setimage(imageURL);
        });

        $('#Twitterbutton').click(function () {
            // Initialize OAuth with key
            OAuth.initialize("SqEYrHazoLdkAlaRkq2e8bWPi_g");
            postCanvasToURL();
        });

        $('#Facebookbutton').click(function () {
            // Initialize OAuth with key
            //OAuth.initialize("SqEYrHazoLdkAlaRkq2e8bWPi_g");
            PostImageToFacebook("");
        });

        function downloadPicture(link, refId, filename) {
            link.href = document.getElementById(refId).src;
            link.download = filename;
        }

        function postCanvasToURL() {
            // Convert canvas image to Base64
            if (isMobile.apple.device)
            {
                var img = $('.videoPlaceholder img')[0].src;
            }
            else
            {
                var img = canvas.toDataURL();
            }
            
            // Convert Base64 image to binary
            var file = dataURItoBlob(img);
            // Open a tweet popup and autopopulate with data
            OAuth.popup("twitter").then(function (result) {
                var data = new FormData();
                // Tweet text
                data.append('status', "I just took a Selfie!");
                // Binary image
                data.append('media[]', file, 'elfie.png');
                // Post to Twitter as an update with media
                return result.post('/1.1/statuses/update_with_media.json', {
                    data: data,
                    cache: false,
                    processData: false,
                    contentType: false
                });
                // Success/Error Logging
            }).done(function (data) {
                var str = JSON.stringify(data, null, 2);
                $('#result').html("Success\n" + str).show()
            }).fail(function (e) {
                var errorTxt = JSON.stringify(e, null, 2)
                $('#result').html("Error\n" + errorTxt).show()
            });
        }

        function dataURItoBlob(dataURI) {
            // convert base64/URLEncoded data component to raw binary data held in a string
            var byteString;
            if (dataURI.split(',')[0].indexOf('base64') >= 0)
                byteString = atob(dataURI.split(',')[1]);
            else
                byteString = unescape(dataURI.split(',')[1]);
            // separate out the mime component
            var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
            // write the bytes of the string to a typed array
            var ia = new Uint8Array(byteString.length);
            for (var i = 0; i < byteString.length; i++) {
                ia[i] = byteString.charCodeAt(i);
            }
            return new Blob([ia], { type: mimeString });
        }


    }

    function  PostImageToFacebook()
    {
        var params = {};
        params['message'] = 'publish_actions';
        params['name'] = 'Name';
        params['description'] = 'this is a description';
        params['link'] = 'http://www.somelink.com/page.htm';
        params['picture'] = '~/Content/Images/407.png';
        params['caption'] = 'Caption of the Post';

        FB.api('/me/feed', 'post', params, function (response) {
            if (!response || response.error) {
                // an error occured
                alert(JSON.stringify(response.error));
            } else {
                // Done
                alert('Published to stream');
            }
        });
    }

    // Request camera from device
    function requestCamera(desktop) {
        resetVideoPlaceholder();
        console.log(desktop);
        navigator.getMedia = (
            navigator.getUserMedia ||
            navigator.webkitGetUserMedia || 
            navigator.mozGetUserMedia ||
            navigator.msGetUserMedia ||
            navigate.MediaDevices.getUserMedia
        );
        navigator.getMedia({
            video: true,
            audio: false
        }, function (stream) {
            console.log(stream);
            if (navigator.mozGetUserMedia) {
                video.mozSrcObject = stream;
            } else {
                var vendorURL = window.URL || window.webkitURL;
                video.src = vendorURL.createObjectURL(stream);
            }
          
                video.play();
            
        }, function (err) {
        });
    }


    function previewFile() {
        var preview = document.querySelector('.videoPlaceholder img');
        var file = document.querySelector('#launchCameraButton').files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }


        height = $('.videoPlaceholder').height();
        width = $('.videoPlaceholder').width();
        //console.log(getOrientation(file, false));




        imageLayover(height, width);


        $('#HelicopterSelect').show();
        $('#completePhoto').show(); 
        $('#btnRetake').show();
        $('#launchCameraButton').remove();
        $('.videoPlaceholder img').show();
        $('#completePhoto').click(function () {
            $(this).hide();
            displayButtonsShare();
            takepicture(function () {              
                return;
            });
        });
    }

    function requestCameraiphone() {
       
        $('#btnTakePhoto').hide();
        $('#HelicopterSelect').hide();
        $('#video').prepend(launchCameraButton);
        $('#video-stream').remove();
        addedFrame.style.right = "20px";
        
        console.log(takePhotoHtml);

        $('#launchCameraButton').click(function (e) {
            //e.preventDefault();
            //$('#alertModal').modal('show');
            alert('Make sure to keep take your photos vertically upright');
        });
        $('#launchCameraButton').change(function () {
            previewFile();
        });
    }
    function imageLayover(height,width) {
        if (height)
        {
            var $videobox = $('.videoPlaceholder');

            addedFrame.style.position = 'absolute';
            addedFrame.style.top = "0px";
            addedFrame.height = height;
            addedFrame.width = width;            

            $videobox.append(addedFrame);
        }
    }

    function clearphotoApple()
    {

    }
    function clearphoto() {
        var context = canvas.getContext('2d');
        context.fillStyle = "#AAA";
        context.fillRect(0, 0, canvas.width, canvas.height);

        var data = canvas.toDataURL('image/png');
        photo.setAttribute('src', data);
    }



    function renderdesktop(height, width, context, data) {

        var videoHalf_W = width;
        var videoHalf_H = height;
        var videoLeft = (width) - (videoHalf_W);
        var videoTop = (height) - (videoHalf_H);
        var crutchVideo = 40;
        var crutchLayover = 0;

        if (isMobile.android.device) {
            crutchVideo = 152;
            crutchLayover = 150; 
        }
        context.drawImage(video, videoLeft, videoTop, videoHalf_W, (data.containerHeight - crutchVideo));
        context.drawImage(addedFrame, 0, 0, width, data.containerHeight - crutchLayover);
        
        $('#framelayover').hide();

        var data = canvas.toDataURL('image/png');
        photo.setAttribute('src', data);

    }


    function rendermobile(height,width, context, data)
    {
        // orientation
        var Fileimage = $('.videoPlaceholder #photo').get(0);

        if (isMobile.apple)
        Fileimage.className = "rotateimagecss";
        Fileimage.style.width = "430px";
        Fileimage.style.height = "320px";

        console.log($('.videoPlaceholder'));
        //getOrientation(Fileimage);
        //context.rotate(90 * Math.PI / 180);
        html2canvas($('.videoPlaceholder')).then(function (canvas) {
            $('.videoPlaceholder').html(canvas);
            var dataUrl = canvas.toDataURL();
            var wrap = $('.videoPlaceholder').html('<img src="' + dataUrl + '">');
            console.log(wrap);
            //wrap[0].src = dataUrl;
            canvas.hide();
            console.log(dataUrl);
        })

        //context.rotate(90 * Math.PI / 180);
        //context.drawImage(video, 0, 0, width, height);
        //context.drawImage(addedFrame, 0, 0, width, height);
        //console.log(context);
        //var data = canvas.toDataURL('image/png');
        //photo.setAttribute('src', data);
        //$('#framelayover').hide();
        displayButtonsShare();
    }
 
    function takepicture(callback, data) {
        var context = canvas.getContext('2d'); 

        //if (width && height) {
        //    canvas.width = DEFAULT_WIDTH;
        //    canvas.height = "280";

        //    height = video.videoHeight / (video.videoWidth / width);

            // Firefox currently has a bug where the height can't be read from
            // the video, so we will make assumptions if this happens.
             canvas.width = DEFAULT_WIDTH;
             canvas.height = "280";
             height = video.videoHeight / (video.videoWidth / width);
            if (isNaN(height)) {
                height = width / (4 / 3);
            }

            if (isMobile.apple.device)
            {
                rendermobile(height, width, context, data);
            }
            else {
                renderdesktop(height, width, context, data);
            }

            return callback();
        //} else {
        //    clearphoto();
        //}

        callback();
    }

    window.addEventListener('load', startup(config.base, isMobile), false);
})();