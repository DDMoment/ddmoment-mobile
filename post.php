<?php
include "./include/header.php";
?>
<link rel="stylesheet" href="./asset/index.css">
<body>
<div class="page-tab">
</div>
<div class="wrapper">
    <div class="container-wrap">
        <div id="feed">
            <?php include_once "./include/loader.php"; ?>
        </div>
    </div>
</div>
</body>
<?php
include_once "./include/footer.php";
include_once "./include/image_viewer.php";
?>
<script>
    var root = 'https://jsonplaceholder.typicode.com';
    $.ajax({
        url: root + '/posts/<?php echo $_GET['id']+1 ?>',
        method: 'GET'
    }).then(function (data) {
        $("#progress").hide();
            var template = `
<div class="card grey lighten-5 row z-depth-1 feed_card" style="">
    <div class="card-title">
        <div class="row valign-wrapper">
            <div class="col s2">
                <img src="./asset/img/user.png" alt="" class="circle responsive-img feed_user_icon" >
            </div>
            <div class="col s10">
            <span class="black-text">
               ${data.title}
            </span>
            </div>
        </div>
        <hr>
    </div>
    <div class="card-content">
        <p>
            ${data.body}
        </p>

       <ul class="docs-pictures my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
            <li itemscope itemprop="associatedMedia"><img src="http://via.placeholder.com/512x512" itemprop="thumbnail" alt="Cuo Na Lake"></li>
            <!--<li itemscope itemprop="associatedMedia"><img src="http://via.placeholder.com/512x512" itemprop="thumbnail" alt="Tibetan Plateau"></li>-->
            <!--<li><img src="http://via.placeholder.com/512x512" alt="Jokhang Temple"></li>-->
            <!--<li><img src="http://via.placeholder.com/512x512" alt="Potala Palace 1"></li>-->
            <!--<li><img src="http://via.placeholder.com/512x512" alt="Potala Palace 2"></li>-->
            <!--<li><img src="http://via.placeholder.com/512x512" alt="Potala Palace 3"></li>-->
            <!--<li><img src="http://via.placeholder.com/512x512" alt="Lhasa River"></li>-->
            <!--<li><img src="http://via.placeholder.com/512x512" alt="Namtso 1"></li>-->
            <!--<li><img src="http://via.placeholder.com/512x512" alt="Namtso 2"></li>-->
          </ul>
    </div>

    <div class="card-action" style="width: 100%;display: table;table-layout: fixed">
        <a href="#" style="display: table-cell;text-align: left"><i class="material-icons" style="position:relative; top: 6px;">&nbsp;thumb_up</i>Like</a>
        <a href="#" style="display: table-cell;text-align: center"><i class="material-icons" style="position:relative; top: 6px;">comment</i>&nbsp;Comment</a>
        <a href="#" style="display: table-cell;text-align: right"><i class="material-icons" style="position:relative; top: 6px;">share</i>&nbsp;Share</a>
    </div>
</div>
        `
            $("#feed").append(template);
        initPhotoSwipeFromDOM('.my-gallery');
    });
</script>
<script src="/asset/js/image_viwer.js"></script>