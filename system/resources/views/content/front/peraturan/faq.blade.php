@extends('template.client')
@section('content')
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            FAQ
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="index.html">Home</a></span><span
                                class="page-title-content-inner">Peraturan</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /.page-title -->

    <!-- main content -->
    <section class="flat-blog-standard">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="0" data-smobile="0">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="post-wrap">
                        <article class="article-1">
                            <div class="content-box">
                                <div class="content-art">
                                    <h5 class="section-title has-text-align-center">
                                        FAQ
                                    </h5>
                                    <hr>
                                    <div class="flat-accordion">
                                        <h1 style="color: BLACK;font-family: 'Jost', sans-serif;">
                                            -Barang Bawaan Penumpang
                                        </h1>
                                        <br>
                                        <div class="flat-toggle text-pri2-color">
                                            @foreach ($list_faq as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">Quam
                                                    commodo velit ?</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                        nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                        dolores et ea rebum. Stet
                                                        clita kasd gubergren, no sea takimata</p>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- /toggle -->
                                        <div class="flat-toggle text-pri2-color">
                                            <h6 class="toggle-title section-heading-rubik-size16 fw-500">Neque orci
                                                rhoncus ?</h6>
                                            <div class="toggle-content section-desc" style="display: none;">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                    dolores et ea rebum. Stet
                                                    clita kasd gubergren, no sea takimata</p>
                                            </div>
                                        </div>
                                        <!-- /toggle -->
                                        <div class="flat-toggle text-pri2-color">
                                            <h6 class="toggle-title section-heading-rubik-size16 fw-500">Pulvinar
                                                lacus faucibus ?</h6>
                                            <div class="toggle-content section-desc" style="display: none;">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                    dolores et ea rebum. Stet
                                                    clita kasd gubergren, no sea takimata</p>
                                            </div>
                                        </div>
                                        <!-- /toggle -->
                                        <!-- /toggle -->
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                        </article>
                        <!-- end art1-->
                        <!-- end pagination-->
                    </div>
                    <!-- /.post-wrap -->
                </div>
                <!-- /.col-md-8 -->

                <div class="col-md-4">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60">
                    </div>
                    <div class="side-bar">
                        <div class="widgets-category">
                            <h3 class="widgets-side-bar-title">
                                Menu Utama
                            </h3>
                            <ul class="list-category">
                                <li><a href="#">Pengaduan</a></li>
                                <li><a href="#">Kurs Pajak </a></li>
                                <li><a href="#">Tracking Barang Kiriman </a></li>
                                <li><a href="#">Registasi IMEI </a></li>

                            </ul>
                        </div>
                        <!-- /.widget_lastest -->
                    </div>
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.row -->
            </div>
        </div> <!-- /.container -->
    </section><!-- /flat-blog -->
@endsection
