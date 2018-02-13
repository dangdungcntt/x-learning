<link rel="stylesheet" href="{{asset('css/fonts.css')}}">
<link rel="stylesheet" href="{{asset('css/docs.css')}}">
<link rel="stylesheet" href="">
<style>
    .page-404 {padding:50px 0; }
    .page-404 .page-img {padding:70px 0 50px 0; display:block; text-align:center; }
    .page-404 .error-text {display:block; text-align:center; }
    .page-404 .error-text p { color: #666666; font-size: 20px; line-height: 28px; max-width: 750px;  text-align: center; width:100%; display:inline-block; }
    .page-404 .error-text p a {color:#02cbf7; }
    h2 {
        font-family: 'poetsenoneregular';
    }
    p {
        font-family: 'Roboto';
    }
</style>
<div class="page-404">
    <div class="container">
        <div class="section-title">
            <h2>This Page Could Not Be Found!</h2>
            <p>Opps Error</p>
        </div>
        <div class="page-img">
            <img src="{{asset('images/404Img.jpg')}}" alt="" style="max-width:400px">
        </div>
        <div class="error-text">
            <p>Page doesn’t exist or some other error occured. Go to our <a href="/">home page</a>
        </div>
    </div>
</div>