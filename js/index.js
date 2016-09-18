require(['jquery', 'search'], function($){
    $(function () {
        $('.blog-cate a').on('click',function () {
            $(this).parent().siblings().children('a').removeClass();
            $(this).addClass('active');
            var cateId=$(this).data('id');//$(this).attr('data-id');
            var $blogList=$('.blog-list');
            $.get('welcome/get_blogs',{cateId:cateId},function (data) {
                $blogList.empty();
                var html = '';

                for(var i=0;i<data.length;i++){
                    var blog=data[i];
                    html+=`<li class="blog">
                                <a href="welcome/view_blog?blogId=`+blog.blog_id+`">
                                    <img src="`+blog.img+`" alt="图片加载失败">
                                    <div class="blog-desc">
                                        <p class="blog-title">`+blog.title+`</p>
                                        <span class="blog-click">`+blog.clicked+`</span>
                                    </div>
                                    <div class="mask">
                                        <h4>PHOTO</h4>
                                        <span>VIEW PHOTO</span>
                                    </div>
                                </a>
                            </li>`;
                }
                $blogList.append(html);
            },'json');
        });


    });
});