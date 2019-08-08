@extends('layouts.frontend')
@section('content')
	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="{{ url('/') }}" class="breadcrumb-item f1-s-3 cl9">
					Home
				</a>

				<a href="{{ url('/blog-grid') }}" class="breadcrumb-item f1-s-3 cl9">
					Blog
				</a>

				<span class="breadcrumb-item f1-s-3 cl9">
					 {{ $artikel->judul }}
				</span>
			</div>
		</div>
	</div>

	<!-- Content -->
	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991 single">
                        <!-- Blog Detail -->
                        <div id="blogdetail">

                        </div>


						<!-- Leave a comment -->
						<div>
                            <div id="disqus_thread"></div>
						</div>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">
						<!-- Category -->
						<div class="p-b-60">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Category
								</h3>
							</div>

							<ul class="p-t-35">
                                {{-- @foreach ($kategori as $data)
								<li class="how-bor3 p-rl-4">
									<a href="{{ url('kategori/'.$data->slug) }}" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										{{ $data->nama_kategori }}
									</a>
								</li>
                                @endforeach --}}
							</ul>
						</div>

						<!-- Popular Posts -->
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Popular Post
								</h3>
							</div>

							<ul class="p-t-35">

							</ul>
						</div>

						<!-- Tag -->
						<div>
							<div class="how2 how2-cl4 flex-s-c m-b-30">
								<h3 class="f1-m-2 cl3 tab01-title">
									Tags
								</h3>
							</div>

							<div class="flex-wr-s-s m-rl--5">
								{{-- @foreach ($tags as $data)
                                <a href="{{ url('blog-grid/'.$data->slug) }}" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    {{ $data->nama_tag }}
                                </a>
                            @endforeach --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

