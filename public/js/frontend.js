(function($) {
    "use strict";

    var browserWindow = $(window);
    var url = 'api/frontend';

    // :: 1.0 Preloader Active Code
    browserWindow.on("load", function() {
        $("#preloader").fadeOut("slow", function() {
            $(this).remove();
        });
    });
    
    // latest
    $.ajax({
        url: url,
        datatype : 'json',
        success : function(berhasil){
            $.each(berhasil.data.latest_artikel, function(key, value){
                console.log(berhasil)
                $(".latest").append(
                `
                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45 ">
                            <a href="blog-detail/${value.slug}" class="wrap-pic-w hov1 trans-03">
                                <img src="/assets/img/artikel/${value.foto}" alt="IMG" style="height:200px">
                            </a>
    
                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="blog-detail/${value.slug}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        ${value.judul}
                                    </a>
                                </h5>
    
                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        By ${value.author}
                                    </a>
    
                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>
    
                                    <span class="f1-s-3">
                                        ${value.created_at}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                `
                );
            });
        }
    });
    
    // MULAI KATEGORI DAN ARTIKEL
    
    $.ajax({
        url: url,
        datatype : 'json',
        success : function(berhasil){
            $.each(berhasil.data.adventure, function(key, value){
                console.log(berhasil)
                $(".adventure").append(
                `
                <div class="flex-wr-sb-s m-b-30">
                    <a href="blog-detail/${value.slug}" class="size-w-1 wrap-pic-w hov1 trans-03">
                        <img src="/assets/img/artikel/${value.foto}" alt="IMG" style="height:75px">
                    </a>
    
                    <div class="size-w-2">
                        <h5 class="p-b-5">
                            <a href="blog-detail/${value.slug}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                ${value.judul}
                            </a>
                        </h5>
    
                        <span class="cl8">
                            <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                By ${value.author}
                            </a>
    
                            <span class="f1-s-3 m-rl-3">
                                -
                            </span>
    
                            <span class="f1-s-3">
                                ${value.created_at}
                            </span>
                        </span>
                    </div>
                </div>
                `
                );
            });
        }
    });
    
    $.ajax({
        url: url,
        datatype : 'json',
        success : function(berhasil){
            $.each(berhasil.data.rpg, function(key, value){
                console.log(berhasil)
                $(".rpg").append(
                `
                <div class="flex-wr-sb-s m-b-30">
                    <a href="blog-detail/${value.slug}" class="size-w-1 wrap-pic-w hov1 trans-03">
                        <img src="/assets/img/artikel/${value.foto}" alt="IMG" style="height:75px">
                    </a>
    
                    <div class="size-w-2">
                        <h5 class="p-b-5">
                            <a href="blog-detail/${value.slug}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                ${value.judul}
                            </a>
                        </h5>
    
                        <span class="cl8">
                            <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                By ${value.author}
                            </a>
    
                            <span class="f1-s-3 m-rl-3">
                                -
                            </span>
    
                            <span class="f1-s-3">
                                ${value.created_at} 
                            </span>
                        </span>
                    </div>
                </div>
                `
                );
            });
        }
    });
    
    $.ajax({
        url: url,
        datatype : 'json',
        success : function(berhasil){
            $.each(berhasil.data.fps, function(key, value){
                console.log(berhasil)
                $(".fps").append(
                `
                <div class="flex-wr-sb-s m-b-30">
                    <a href="blog-detail/${value.slug}" class="size-w-1 wrap-pic-w hov1 trans-03">
                        <img src="/assets/img/artikel/${value.foto}" alt="IMG" style="height:75px">
                    </a>
    
                    <div class="size-w-2">
                        <h5 class="p-b-5">
                            <a href="blog-detail/${value.slug}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                ${value.judul}
                            </a>
                        </h5>
    
                        <span class="cl8">
                            <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                By ${value.author}
                            </a>
    
                            <span class="f1-s-3 m-rl-3">
                                -
                            </span>
    
                            <span class="f1-s-3">
                                ${value.created_at}
                            </span>
                        </span>
                    </div>
                </div>
                `
                );
            });
        }
    });
    
    // AKHIR KATEGORI AND ARTIKEL
    
    // MULAI MOST POPULAR
    $.ajax({
        url: url,
        datatype : 'json',
        success : function(berhasil){
            $.each(berhasil.data.most_popular, function(key, value){
                console.log(berhasil)
                $(".most_popular").append(
                `
                <li class="flex-wr-sb-s p-b-22">
                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                        >
                    </div>
    
                    <a href="blog-detail/${value.slug}" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                        ${value.judul}
                    </a>
                </li>
                `
                );
            });
        }
    });
    
    // AKHIR MOST PUPULAR
    
    $.ajax({
        url: url,
        datatype : 'json',
        success : function(berhasil){
            $.each(berhasil.data.blog, function(key, value){
                console.log(berhasil)
                $(".blog_grid").append(
                `
                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                    <div class="m-b-45">
                        <a href="blog-detail/${value.slug}" class="wrap-pic-w hov1 trans-03">
                            <img src="/assets/img/artikel/${value.foto}" alt="IMG" style="height:200px">
                        </a>
    
                        <div class="p-t-16">
                            <h5 class="p-b-5">
                                <a href="blog-detail/${value.slug}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                    ${value.judul}
                                </a>
                            </h5>
    
                            <span class="cl8">
                                <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    ${value.kategori}
                                </a>
    
                                <span class="f1-s-3 m-rl-3">
                                    -
                                </span>
    
                                <span class="f1-s-3">
                                    ${value.created_at}
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
    
                `
                );
            });
        }
    });
    
    $.ajax({
        url: url,
        datatype : 'json',
        success : function(berhasil){
            $.each(berhasil.data.tag, function(key, value){
                console.log(berhasil)
                $(".tag").append(
                `
                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    ${value.nama_tag}
                </a>
    
                `
                );
            });
        }
    });
    
    $.ajax({
        url: url,
        datatype : 'json',
        success : function(berhasil){
            $.each(berhasil.data.kategori, function(key, value){
                console.log(berhasil)
                $(".footer_kategori").append(
                `
                <li class="how-bor1 p-rl-5 p-tb-10">
                    <a href="${value.slug}" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                        ${value.nama_kategori}
                    </a>
                </li>
    
                `
                );
            });
        }
    });
    
    //  MULAI POPULAR POST
    
    $.ajax({
        url: url,
        datatype : 'json',
        success : function(berhasil){
            $.each(berhasil.data.popular_post, function(key, value){
                console.log(berhasil)
                $(".popular_post").append(
                `
                <li class="flex-wr-sb-s p-b-30">
                    <a href="blog-detail/${value.slug}" class="size-w-10 wrap-pic-w hov1 trans-03">
                        <img src="/assets/img/artikel/${value.foto}" alt="IMG" style="height:75px">
                    </a>
    
                    <div class="size-w-11">
                        <h6 class="p-b-4">
                            <a href="blog-detail/${value.slug}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                ${value.judul}
                            </a>
                        </h6>
    
                        <span class="cl8 txt-center p-b-24">
                            <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                ${value.kategori}
                            </a>
    
                            <span class="f1-s-3 m-rl-3">
                                -
                            </span>
    
                            <span class="f1-s-3">
                                ${value.created_at}
                            </span>
                        </span>
                    </div>
                </li>
    
                `
                );
            });
        }
    });

    // AKHIR MOST POPULAR

    // MULAI CATEGORY
    // $.ajax({
    //     url: url,
    //     datatype : 'json',
    //     success : function(berhasil){
    //         $.each(berhasil.data.category, function(key, value){
    //             console.log(berhasil)
    //             $(".category").append(
    //             `
    //             <div class="col-sm-6 p-r-25 p-r-15-sr991">
    //                 <!-- Item latest -->
    //                 <div class="m-b-45">
    //                     <a href="blog-detail/${value.slug}" class="wrap-pic-w hov1 trans-03">
    //                         <img src="/assets/img/artikel/${value.foto}" alt="IMG" style="height:200px">
    //                     </a>

    //                     <div class="p-t-16">
    //                         <h5 class="p-b-5">
    //                             <a href="blog-detail/${value.slug}" class="f1-m-3 cl2 hov-cl10 trans-03">
    //                                 ${value.judul}
    //                             </a>
    //                         </h5>

    //                         <span class="cl8">
    //                             <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
    //                                 By ${value.author}
    //                             </a>

    //                             <span class="f1-s-3 m-rl-3">
    //                                 -
    //                             </span>

    //                             <span class="f1-s-3">
    //                                 ${value.created_at}
    //                             </span>
    //                         </span>
    //                     </div>
    //                 </div>
    //             </div>

    //             `
    //             );
    //         });
    //     }
    // });
    // AKHIR CATEGORY
})(jQuery);

