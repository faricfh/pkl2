(function ($) {

    var grabedurl = window.location.pathname;
    var url = '/api' + grabedurl;
    var no = 1;
    //get 1 article by slug
    $.ajax({
        url: url,
        dataType: "json",
        method: "GET",
        success: function (getdata) {
            $("#blogdetail").append(
                `
                <div class="p-b-70">
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                                ${getdata.data.kategori.nama_kategori}
							</a>

							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                                ${getdata.data.judul}
							</h3>

							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
										By ${getdata.data.user.name}
									</a>

									<span class="m-rl-3">-</span>

									<span>
                                        ${getdata.data.created_at}
									</span>
								</span>
							</div>

							<div class="wrap-pic-max-w p-b-30">
								<img src="/assets/img/artikel/${getdata.data.foto}" alt="IMG">
							</div>

							<p class="f1-s-11 cl6 p-b-25">
                                ${getdata.data.konten}
							</p>

							<!-- Tag -->
							<div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-12 cl5 m-r-8">
									Tags:
								</span>

								<div class="flex-wr-s-s size-w-0">
                                    ${getdata.data.tag.nama_tag}
								</div>
							</div>
						</div>
                `
            );
            console.log(getdata);
        }
    });
    console.log(url)
})(jQuery);

