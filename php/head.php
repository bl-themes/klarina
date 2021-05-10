<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>
<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>
<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>
<!-- Include Bootstrap CSS file bootstrap.css -->
<?php echo Theme::cssBootstrap(); ?>
<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/bootstrap.min.css'); ?>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
<!-- Inline CSS -->
<style>
h1,h2,h3 {font-family: 'Fjalla One', sans-serif;}
.thumb-post img {
object-fit: none;
object-position: center;
max-height: 250px;
margin-bottom: 1rem;
}
p a{color:#dc3646;text-decoration: none;}
p a:hover{color:#dc3646;text-decoration: none;}
.plugin-content{color:#8d9193;}
.sticky {position: sticky;top: 104px;}
.col-sm-9 p img{width: 100%;border-radius: 5px;margin-top:20px;margin-bottom: 30px;}
.video-container iframe {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}
</style>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/99398214e6.js" crossorigin="anonymous"></script>