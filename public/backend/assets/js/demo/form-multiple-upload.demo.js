var handleJqueryFileUpload=function(){$('#fileupload').fileupload({autoUpload:false,disableImageResize:/Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),maxFileSize:5000000,acceptFileTypes:/(\.|\/)(gif|jpe?g|png)$/i,});$('#fileupload').fileupload('option','COLOR_REDirect',window.location.href.replace(/\/[^\/]*$/,'/cors/result.html?%s'));$('#fileupload').bind('fileuploadadd',function(e,data){$('#fileupload [data-id="empty"]').hide();});$('#fileupload').bind('fileuploadfail',function(e,data){var rowLeft=(data['originalFiles'])?data['originalFiles'].length:0;if(rowLeft===0){$('#fileupload [data-id="empty"]').show();}else{$('#fileupload [data-id="empty"]').hide();}});if($.support.cors){$.ajax({type:'HEAD'}).fail(function(){$('<div class="alert alert-danger"/>').text('Upload server currently unavailable - '+new Date()).appendTo('#fileupload');});}
$('#fileupload').addClass('fileupload-processing');$.ajax({url:$('#fileupload').fileupload('option','url'),dataType:'json',context:$('#fileupload')[0]}).always(function(){$(this).removeClass('fileupload-processing');}).done(function(result){$(this).fileupload('option','done').call(this,$.Event('done'),{result:result});});};var FormMultipleUpload=function(){"use strict";return{init:function(){handleJqueryFileUpload();}};}();$(document).ready(function(){FormMultipleUpload.init();});