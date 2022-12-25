<!DOCTYPE html>
<html>
    <head>
        <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css rel=stylesheet>
        <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js rel=stylesheet>
        
        <title>DOM XSS in jQuery selector sink using a hashchange event</title>
        <style>
            body{
                    background-color:#1e1c2a;
                }

                .card{
                    border:none;
                    background-color:#252836;
                    color:#fff;
                    border-radius:12px;
                }
                .snipimage img{
                    height: 200px;
                }
         </style>
    </head>
    <body>
        <div class="container mt-4">
            <div class="card p-3 mt-2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="position-relative snipimage">
                            <img src="../img/injectionflaws.jpg" class="rounded img-fluid w-100 img-responsive">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mt-2">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-1">Injection Flaws</h5>
                            <span><i class="fa fa-heart text-danger"></i> </span>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- --------------------- -->
            <div class="card p-3 mt-2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="position-relative snipimage">
                            <img src="../img/xss.gif" class="rounded img-fluid w-100 img-responsive">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mt-2">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-1">Cross-Site Scripting (XSS)</h5>
                            <span><i class="fa fa-heart text-danger"></i> </span>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- ------------------------ -->

            <div class="card p-3 mt-2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="position-relative snipimage">
                            <img src="../img/idor.png" class="rounded img-fluid w-100 img-responsive">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-1">Insecure Direct Object References</h5>
                            <span><i class="fa fa-heart text-danger"></i> </span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="card p-3 mt-2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="position-relative snipimage">
                            <img src="../img/injectionflaws.jpg" class="rounded img-fluid w-100 img-responsive">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-1">Security Misconfiguration</h5>
                            <span><i class="fa fa-heart text-danger"></i> </span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <div class="card p-3 mt-2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="position-relative snipimage">
                            <img src="../img/xss.gif" class="rounded img-fluid w-100 img-responsive">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-1">Sensitive data exposure</h5>
                            <span><i class="fa fa-heart text-danger"></i> </span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../js/jquery_1-8-2.js"></script>
        <script src="../js/jqueryMigrate_1-4-1.js"></script>
        <script>
                 $(window).on('hashchange', function(){
                    var post = $('div.card h5:contains(' + decodeURIComponent(window.location.hash.slice(1)) + ')');
                    if (post) post.get(0).scrollIntoView();
                 });
        </script>
    </body>
</html>
