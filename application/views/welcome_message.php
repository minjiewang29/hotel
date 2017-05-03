<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
        
</head>
<body>
    

    <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="files/1.jpg" class="img-responsive center-block" alt="First slide">
                <div class="carousel-caption">
                    <p>美丽的花</p>            
                </div>
            </div>
            <div class="item">
                <img src="files/2.jpg" class="img-responsive center-block" alt="First slide">
                <div class="carousel-caption">
                    <p>黄石？</p>            
                </div>
            </div>
            <div class="item">
                <img src="files/3.jpg" class="img-responsive center-block" alt="First slide">
                 <div class="carousel-caption">
                    <p>绿叶紫花</p>            
                </div>
            </div>
            <div class="item">
                <img src="files/4.jpg" class="img-responsive center-block" alt="First slide">
                 <div class="carousel-caption">
                    <p>致命美丽</p>            
                </div>
            </div>
            <div class="item">
                <img src="files/5.jpg" class="img-responsive center-block" alt="First slide">
                 <div class="carousel-caption">
                    <p>小兔子?</p>            
                </div>
            </div>
            <div class="item">
                <img src="files/6.jpg" class="img-responsive center-block" calt="First slide">
                 <div class="carousel-caption">
                    <p>岛屿</p>            
                </div>
            </div>
            <div class="item">
                <img src="files/7.jpg" class="img-responsive center-block"alt="First slide">
                 <div class="carousel-caption">
                    <p>三人行</p>            
                </div>
            </div>
            <div class="item">
                <img src="files/8.jpg" class="img-responsive center-block" alt="First slide">
                 <div class="carousel-caption">
                    <p>郁金香</p>            
                </div>
            </div>
        </div>
        
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>            
    </div> 

  
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>


</body>
</html>