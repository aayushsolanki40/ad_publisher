
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Ad Builder</title>
   <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">
    <!-- Bootstrap core CSS -->
   
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .editTextRow{
        margin-top: 60px;
        
      }

      /* textarea{
        width: 100%;
        border: 1px solid grey;
        resize: none;
        border-radius: 5px;
        padding: 10px;
    } */

    .addPreview{
        width: 400px;
        border: 2px solid #800020;
    }

    .titleBox{
        width: 100%;
        background: #800020;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .titleBox span.title{
        color: white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 18px;
        font-weight: 700;
    }

    .descriptionBox{
        height: 300px;
        padding: 10px;
    }
    .descriptionBox span{
      font-weight: 700;
      
    }

    .footerSec{
        background-color: #ddd;
        padding: 10px;
    }

    .footerSec .footerText{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .descriptiontext{
      word-break: break-word;
    }

    .btnBoxes{
        width: 400px;
        display: flex;
        justify-content: center;
    }

    .btn{
        border: 1px solid grey;
        box-shadow: 0px 0px 4px 0px grey;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        width: 100%;
    }

    .btn-local{
      margin-top: 10px;
    }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ad Creation</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <div class="row editTextRow">
        <div class="col-md-6">
           <div id="summernote"></div>
           <div class="addBorderBox">
              <input type="checkbox" name="addborderInp" id="addborderInp"> <label for="addborderInp"> Add border</label>
           </div>
        </div>
        <div class="col-md-6">
            <div class="addPreview" id="html-content-holder">
                <div class="titleBox">
                    <span class="title">Ad Preview</span>
                </div>
                <div class="descriptionBox">
                    <div class="span">
                        <div class="descriptionText"></div>
                    </div>
                </div>
                <div class="footerSec">
                    <span class="footerText">Font size in the preview is not as per scale. Actual word/lines may vary based on selected enhancements.</span>
                </div>
            </div>
            <div class="btnBoxes">
                <btn class="btn btn-local" id="btn_convert1">Download Image</btn>
            </div>
        </div>
    </div>
  </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" type="text/javascript"></script> 
  <script>
    $('#summernote').summernote({
      placeholder: 'Type your ad here',
      tabsize: 2,
      height: 350,
      callbacks: {
        onKeyup: function(e) {
          setTimeout(function(){
            $(".descriptionText").html($('.note-editable').html());
          },200);
        }
      },
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', []],
        ['table', []]
      ]
    });
    document.getElementById("btn_convert1").addEventListener("click", function() {
      html2canvas(document.getElementById("html-content-holder")).then(function (canvas) {			var anchorTag = document.createElement("a");
          document.body.appendChild(anchorTag);
          // document.getElementById("previewImg").appendChild(canvas);
          anchorTag.download = "filename.jpg";
          anchorTag.href = canvas.toDataURL();
          anchorTag.target = '_blank';
          anchorTag.click();
        });
    });

    $("#addborderInp").change(function(){
      const ckbx = $(this).is( ":checked" );
      if(ckbx){
        $(".descriptionText").css('border', '2px solid black').css('padding', '10px');
      }
      else{
        $(".descriptionText").css('border', 'none').css('padding', '0');
      }
    });
  </script>
  </body>
</html>
