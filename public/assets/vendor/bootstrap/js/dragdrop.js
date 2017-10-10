
function allowDrop(event) {
    event.preventDefault();
   // event.stopPropagation()
}

function drop(event) {
    event.preventDefault();
    var data = event.dataTransfer.files;
    event.target.appendChild(document.getElementById(data));
}

$(document).ready(function(){
  $('form input').change(function () {
    $('form p').text(this.files.length + " file(s) selected");
  });
});

// var div = document.createElement('div');
// return ('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)

// return 'FormData' in window;

// 'FileReader' in window

// var isAdvancedUpload = function() {
//   var div = document.createElement('div');
//   return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
// }();

// if (isAdvancedUpload) {
//   // ...
// }

// var $form = $('.box');

// if (isAdvancedUpload) {
//   $form.addClass('has-advanced-upload');
// }

// if (isAdvancedUpload) {

//   var droppedFiles = false;

//   $form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
//     e.preventDefault();
//     e.stopPropagation();
//   })
//   .on('dragover dragenter', function() {
//     $form.addClass('is-dragover');
//   })
//   .on('dragleave dragend drop', function() {
//     $form.removeClass('is-dragover');
//   })
//   .on('drop', function(e) {
//     droppedFiles = e.originalEvent.dataTransfer.files;
//   });

// }

// $form.on('submit', function(e) {
//   if ($form.hasClass('is-uploading')) return false;

//   $form.addClass('is-uploading').removeClass('is-error');

//   if (isAdvancedUpload) {
//     // ajax for modern browsers
//   } else {
//     // ajax for legacy browsers
//   }
// });

// var $input    = $form.find('input[type="file"]'),
//     $label    = $form.find('label'),
//     showFiles = function(files) {
//       $label.text(files.length > 1 ? ($input.attr('data-multiple-caption') || '').replace( '{count}', files.length ) : files[ 0 ].name);
//     };

// // ...

// .on('drop', function(e) {
//   droppedFiles = e.originalEvent.dataTransfer.files; // the files that were dropped
//   showFiles( droppedFiles );
// });

// //...

// $input.on('change', function(e) {
//   showFiles(e.target.files);
// });

// var obj = $("#dragandrophandler");
// obj.on('dragenter', function (e) 
// {
//     e.stopPropagation();
//     e.preventDefault();
//     $(this).css('border', '2px solid #0B85A1');
// });
// obj.on('dragover', function (e) 
// {
//      e.stopPropagation();
//      e.preventDefault();
// });
// obj.on('drop', function (e) 
// {
 
//      $(this).css('border', '2px dotted #0B85A1');
//      e.preventDefault();
//      var files = e.originalEvent.dataTransfer.files;
 
//      //We need to send dropped files to Server
//      handleFileUpload(files,obj);
// });

// $(document).on('dragenter', function (e) 
// {
//     e.stopPropagation();
//     e.preventDefault();
// });
// $(document).on('dragover', function (e) 
// {
//   e.stopPropagation();
//   e.preventDefault();
//   obj.css('border', '2px dotted #0B85A1');
// });
// $(document).on('drop', function (e) 
// {
//     e.stopPropagation();
//     e.preventDefault();
// });

// function handleFileUpload(files,obj)
// {
//    for (var i = 0; i < files.length; i++) 
//    {
//         var fd = new FormData();
//         fd.append('file', files[i]);
 
//         var status = new createStatusbar(obj); //Using this we can set progress.
//         status.setFileNameSize(files[i].name,files[i].size);
//         sendFileToServer(fd,status);
 
//    }
// }

// function sendFileToServer(formData,status)
// {
//     var uploadURL ="http://hayageek.com/examples/jquery/drag-drop-file-upload/upload.php"; //Upload URL
//     var extraData ={}; //Extra Data.
//     var jqXHR=$.ajax({
//             xhr: function() {
//             var xhrobj = $.ajaxSettings.xhr();
//             if (xhrobj.upload) {
//                     xhrobj.upload.addEventListener('progress', function(event) {
//                         var percent = 0;
//                         var position = event.loaded || event.position;
//                         var total = event.total;
//                         if (event.lengthComputable) {
//                             percent = Math.ceil(position / total * 100);
//                         }
//                         //Set progress
//                         status.setProgress(percent);
//                     }, false);
//                 }
//             return xhrobj;
//         },
//         url: uploadURL,
//         type: "POST",
//         contentType:false,
//         processData: false,
//         cache: false,
//         data: formData,
//         success: function(data){
//             status.setProgress(100);
 
//             //$("#status1").append("File upload Done<br>");           
//         }
//     }); 
 
//     status.setAbort(jqXHR);
// }