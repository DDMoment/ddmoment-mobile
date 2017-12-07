<?php
include_once('./include/header.php');
include('./include/top_nav.php');
?>
<link rel="stylesheet" href="./asset/index.css">
<div class="wrapper">
    <div class="container-wrap">
        <div id="feed">
            <div id="progress" style="">
                <div class="preloader-wrapper active"
                     style="width: 128px;height: 128px;margin: 0 auto;display: block;top: 30vh;">
                    <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p style="font-size: x-large;display: table;margin: 0 auto">数据加载中...</p>
            </div>
        </div>
    </div>
</div>
<?php
include_once('./include/footer_nav.php');
include_once('./include/footer.php');
?>
<script>
    var root = 'https://jsonplaceholder.typicode.com';
    $.ajax({
        url: root + '/posts',
        method: 'GET'
    }).then(function (data) {
        $("#progress").hide()
        for (var i = 0; i < data.length; i++) {
            var template = `
<div class="card grey lighten-5 row z-depth-1" style="padding:4vh;padding-bottom: 0;">
    <div class="card-title">
        <div class="row valign-wrapper">
            <div class="col s2">
                <img src="./asset/img/user.png" alt="" class="circle responsive-img " style="display: inherit">
            </div>
            <div class="col s10">
            <span class="black-text">
               ${data[i].title}
            </span>
            </div>
        </div>
        <hr>
    </div>
    <div class="card-content">
        <p>
            ${data[i].body}
        </p>

       <ul class="docs-pictures my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
            <li itemscope itemprop="associatedMedia"><img src="http://via.placeholder.com/512x512" itemprop="thumbnail" alt="Cuo Na Lake"></li>
            <li itemscope itemprop="associatedMedia"><img src="http://via.placeholder.com/512x512" itemprop="thumbnail" alt="Tibetan Plateau"></li>
            <li><img src="http://via.placeholder.com/512x512" alt="Jokhang Temple"></li>
            <li><img src="http://via.placeholder.com/512x512" alt="Potala Palace 1"></li>
            <li><img src="http://via.placeholder.com/512x512" alt="Potala Palace 2"></li>
            <li><img src="http://via.placeholder.com/512x512" alt="Potala Palace 3"></li>
            <li><img src="http://via.placeholder.com/512x512" alt="Lhasa River"></li>
            <li><img src="http://via.placeholder.com/512x512" alt="Namtso 1"></li>
            <li><img src="http://via.placeholder.com/512x512" alt="Namtso 2"></li>
          </ul>
    </div>

    <div class="card-action" style="width: 100%;display: table;table-layout: fixed">
        <a href="#" style="display: table-cell;text-align: left">Like</a>
        <a href="#" style="display: table-cell;text-align: center">Comment</a>
        <a href="#" style="display: table-cell;text-align: right">Share</a>
    </div>
</div>
        `
            $("#feed").append(template);
        }
        initPhotoSwipeFromDOM('.my-gallery');
    });
</script>
    <script src="/asset/js/image_viwer.js"></script>
<?php
include_once('./include/image_viewer.php');
?>