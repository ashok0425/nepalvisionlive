  // This sample still does not showcase all CKEditor 5 features (!)
  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
  const token = document.querySelector('meta[name="csrf-token"]').content;

  ClassicEditor.create(document.getElementById("summernote"), {
    licenseKey: '',
    simpleUpload: {
        uploadUrl: '/admin/blog-posts/upload',
        withCredentials: true,
        headers: {
            "X-CSRF-TOKEN": `${token}`,
            // Authorization: 'Bearer <JSON Web Token>'
        }
    }
}).then(editor => {
    // window.editor = editor;
}).catch(error => {
    console.error('Oops, something went wrong!');
});




  // This sample still does not showcase all CKEditor 5 features (!)
  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
  if (document.getElementById("summernote1")) {

  CKEDITOR.ClassicEditor.create(document.getElementById("summernote1"), {

  });
  }





  // This sample still does not showcase all CKEditor 5 features (!)
  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
  if(document.getElementById("summernote2")){

  CKEDITOR.ClassicEditor.create(document.getElementById("summernote2"), {

  });
  }





  // This sample still does not showcase all CKEditor 5 features (!)
  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.f
  if(document.getElementById("summernote3")){
  CKEDITOR.ClassicEditor.create(document.getElementById("summernote3"), {

  });

  }




  // This sample still does not showcase all CKEditor 5 features (!)
  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
  if(document.getElementById("summernote4")){

  CKEDITOR.ClassicEditor.create(document.getElementById("summernote4"), {

  });
  }





  // This sample still does not showcase all CKEditor 5 features (!)
  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
  if(document.getElementById("summernote6")){
  CKEDITOR.ClassicEditor.create(document.getElementById("summernote6"), {

  });
}


if(document.getElementById("summernote7")){
    CKEDITOR.ClassicEditor.create(document.getElementById("summernote7"), {

    });
  }

  if(document.getElementById("summernote8")){
    CKEDITOR.ClassicEditor.create(document.getElementById("summernote8"), {

    });
  }
