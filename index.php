<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 Integration Example</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
 </head>
 <body>
    <textarea class="ckeditor" id="editor"></textarea>
    
    <script type="text/javascript">
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                ckfinder: {
                    uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                },
                toolbar: [ 'ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
            }).catch( function( error ) {
                console.error( error );
            });
     </script>
 </body>
 </html>