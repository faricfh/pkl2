var url = 'api/frontend';
    
// latest
$.ajax({
        url: url,
        datatype : 'json',
        success : function(berhasil){
            $.each(berhasil.data.artikel, function(key, value){
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
            $.each(berhasil.data.entertainment, function(key, value){
                console.log(berhasil)
                $(".adventure").append(
                `
                <div class="flex-wr-sb-s m-b-30">
                <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                    <img src="/assets/img/artikel/${value.foto}" alt="IMG">
                </a>

                <div class="size-w-2">
                    <h5 class="p-b-5">
                        <a href="blog-detail/${value.slug}" class="f1-s-5 cl3 hov-cl10 trans-03">
                            ${value.judul}
                        </a>
                    </h5>

                    <span class="cl8">
                        <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                            Music
                        </a>

                        <span class="f1-s-3 m-rl-3">
                            -
                        </span>

                        <span class="f1-s-3">
                            Feb 17
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
            $.each(berhasil.data.artikel, function(key, value){
                console.log(berhasil)
                $(".blog_grid").append(
                `
                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                    <div class="m-b-45">
                        <a href="blog-detail/${value.slug}" class="wrap-pic-w hov1 trans-03">
                            <img src="/assets/img/artikel/${value.foto}" alt="IMG" >
                        </a>

                        <div class="p-t-16">
                            <h5 class="p-b-5">
                                <a href="blog-detail/${value.slug}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                ${value.judul}
                                </a>
                            </h5>

                            <span class="cl8">
                                <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    by John Alvarado
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