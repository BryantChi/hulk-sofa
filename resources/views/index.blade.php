@extends('layouts_main.master')

@section('content')
    <section class="pt-5 mt-5">
        <div class="container">
            <div class="row" id="feature">
                <div class="col-lg-4 mb-4 feature-item text-center">
                    <div
                        class="feature-content d-flex flex-column justify-content-center align-items-center mb-4 ftco-animate">
                        <h4>品質保證，台灣製造</h4>
                        <div class="feature-line mb-3"></div>
                        <p>工廠直營，嚴選材質，<br>確保沙發與床組的高品質。</p>
                    </div>
                    <div class="feature-img mb-4 ftco-animate">
                        <img src="{{asset('assets/images/feature01.jpg')}}" class="img-fluid" alt="">
                        <div class="feature-inner-line"></div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 feature-item text-center d-lg-block d-none">
                    <div class="feature-img mb-4 ftco-animate">
                        <img src="{{asset('assets/images/feature02.jpg')}}" class="img-fluid" alt="">
                        <div class="feature-inner-line"></div>
                    </div>
                    <div
                        class="feature-content d-flex flex-column justify-content-center align-items-center mb-4 ftco-animate">
                        <h4>客製化服務</h4>
                        <div class="feature-line mb-3"></div>
                        <p>提供沙發維修、客製化沙發，打造專屬空間。</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 feature-item text-center d-lg-none d-block">

                    <div
                        class="feature-content d-flex flex-column justify-content-center align-items-center mb-4 ftco-animate">
                        <h4>客製化服務</h4>
                        <div class="feature-line mb-3"></div>
                        <p>提供沙發維修、客製化沙發，打造專屬空間。</p>
                    </div>
                    <div class="feature-img mb-4 ftco-animate">
                        <img src="{{asset('assets/images/feature02.jpg')}}" class="img-fluid" alt="">
                        <div class="feature-inner-line"></div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 feature-item text-center">
                    <div
                        class="feature-content d-flex flex-column justify-content-center align-items-center mb-4  ftco-animate">
                        <h4>一站式裝修訂製</h4>
                        <div class="feature-line mb-3"></div>
                        <p>皮革與泡綿更換、床組設計製作，<br>全程專業團隊一手包辦。</p>
                    </div>
                    <div class="feature-img mb-4  ftco-animate">
                        <img src="{{asset('assets/images/feature03.jpg')}}" class="img-fluid" alt="">
                        <div class="feature-inner-line"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section pb-0">
        <div class="container">
            <div class="row" id="process">
                <div class="col-lg-12 mb-5 pb-3">
                    <div class="heading-section mb-5 pl-md-5 heading-section-with-line">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading">Process</span>
                            <h2 class="mb-4">訂製流程</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 pb-5">
                    <div class="process-box ftco-animate">
                        <div class="process-header">
                            <span>01</span>
                            <h3>需求溝通</h3>
                        </div>
                        <div class="process-content text-center">
                            <img src="{{asset('assets/images/process01.jpg')}}" class="img-fluid w-50" alt="">
                            <p>確認尺⼨、⾵格、材質及功能需求。</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-5">
                    <div class="process-box ftco-animate">
                        <div class="process-header">
                            <span>02</span>
                            <h3>設計規劃</h3>
                        </div>
                        <div class="process-content text-center">
                            <img src="{{asset('assets/images/process02.jpg')}}" class="img-fluid w-50" alt="">
                            <p>提供設計圖或參考圖⽚，<br>討論細節與調整。</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-5">
                    <div class="process-box ftco-animate">
                        <div class="process-header">
                            <span>03</span>
                            <h3>報價與下單</h3>
                        </div>
                        <div class="process-content text-center">
                            <img src="{{asset('assets/images/process03.jpg')}}" class="img-fluid w-50" alt="">
                            <p>根據材質與⼯法提供報價，<br>確認訂製細節、下單。</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-5">
                    <div class="process-box ftco-animate">
                        <div class="process-header">
                            <span>04</span>
                            <h3>正式製作</h3>
                        </div>
                        <div class="process-content text-center">
                            <img src="{{asset('assets/images/process04.jpg')}}" class="img-fluid w-50" alt="">
                            <p>依試坐結果進⾏泡棉、⾯料加⼯與組裝。</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-5">
                    <div class="process-box ftco-animate">
                        <div class="process-header">
                            <span>05</span>
                            <h3>品質檢查</h3>
                        </div>
                        <div class="process-content text-center">
                            <img src="{{asset('assets/images/process05.jpg')}}" class="img-fluid w-50" alt="">
                            <p>完⼯後嚴格檢驗，確保品質與細節無誤。</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-5">
                    <div class="process-box ftco-animate">
                        <div class="process-header">
                            <span>06</span>
                            <h3>交付與安裝</h3>
                        </div>
                        <div class="process-content text-center">
                            <img src="{{asset('assets/images/process06.jpg')}}" class="img-fluid w-50" alt="">
                            <p>送貨⾄指定地點，完成安裝與確認。</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row" id="product">
                <div class="col-lg-8 mb-5">
                    <div class="heading-section mb-5 pl-md-5 heading-section-with-line ftco-animate">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading">Product</span>
                            <h2 class="mb-4">產品目錄</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul class="nav nav-pills mb-3 w-fit ftco-animate" id="pills-tab" role="tablist">

                        @foreach ($categories ?? [] as $key => $category)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $key == 0 ? 'active' : '' }}" id="pills-{{ $category->id }}-tab"
                                    data-toggle="pill" data-target="#pills-{{ $category->id }}"
                                    type="button" role="tab" aria-controls="pills-{{ $category->id }}"
                                    aria-selected="false">{{ $category->name }}</button>
                            </li>

                        @endforeach

                    </ul>

                </div>
            </div>

            <div class="tab-content ftco-animate mt-5" id="pills-tabContent">
                @foreach ($categories ?? [] as $category)
                    {{-- // 同一個類別的產品會在同一個 tab 中的row 中顯示 --}}

                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="pills-{{ $category->id }}"
                        role="tabpanel" aria-labelledby="pills-{{ $category->id }}-tab">

                        <!-- 產品清單包在一個容器中方便分頁 -->
                        <div class="product-wrapper" data-category-id="{{ $category->id }}">
                            <div class="row product-list" id="product-list-{{ $category->id }}">
                                @foreach ($cases ?? [] as $case)
                                    @if ($case->category_id != $category->id)
                                        @continue
                                    @endif
                                    <div class="col-lg-4 col-md-6 mb-4 product-item">
                                        <div class="product-box pb-4 ftco-animate">
                                            <a href="{{ env('APP_URL') . '/uploads/' . $case->image }}" data-fancybox="gallery">
                                                <img src="{{ env('APP_URL') . '/uploads/' . $case->image }}" class="img-fluid" alt="">
                                            </a>
                                            <div class="product-content text-center mt-3 mb-4 px-3">
                                                <h3>{{ $case->name }}</h3>
                                                <p>{!! $case->content !!}</p>
                                            </div>
                                            <div class="product-btn d-flex justify-content-end">
                                                <img src="{{ asset('assets/images/product-arrow.png') }}" class="img-fluid product-arrow" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- 分頁控制器 -->
                            <div class="pagination-container d-flex justify-content-center mt-4" id="pagination-{{ $category->id }}"></div>
                        </div>
                    </div>


                @endforeach


            </div>


        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-end" id="product-details">
                <div class="col-lg-8 mb-5">
                    <div class="heading-section mb-5 pr-md-5 text-md-right heading-section-with-line ftco-animate">
                        <div class="pr-md-5 mr-md-5">
                            <span class="subheading">Product Details</span>
                            <h2 class="mb-4">產品細節</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center">

                <div class="col-lg-5 mb-3">
                    <img src="{{asset('assets/images/pro-details01.jpg')}}" class="img-fluid pro-details-img ftco-animate" alt="">
                </div>
                <div class="col-lg-5 mb-3">
                    <img src="{{asset('assets/images/pro-details02.jpg')}}" class="img-fluid pro-details-img ftco-animate" alt="">
                </div>
                <div class="col-lg-5 mb-3">
                    <img src="{{asset('assets/images/pro-details03.jpg')}}" class="img-fluid pro-details-img ftco-animate" alt="">
                </div>
                <div class="col-lg-5 mb-3">
                    <img src="{{asset('assets/images/pro-details04.jpg')}}" class="img-fluid pro-details-img ftco-animate" alt="">
                </div>


            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row" id="qa">
                <div class="col-lg-6 position-relative d-flex align-items-start pt-5 mb-lg-0 mb-5">
                    <img src="{{asset('assets/images/qa-bg.jpg')}}" class="img-fluid qa-bg ftco-animate" alt="">
                    <div class="position-relative mt-lg-0 mt-3 ftco-animate"
                        style="z-index: 1;background-color: #ffffffcc !important;">
                        <div class="heading-section mt-3 mb-5 pl-md-5 px-lg-0 px-3 heading-section-with-line w-75"
                            style="z-index: 2;">
                            <div class="pl-md-5 ml-md-5">
                                <span class="subheading text-info">Q&A</span>
                                <h2 class="mb-4 font-weight-bold">各式沙發與床墊相關問答</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 position-relative mt-4" style="z-index: 2;">
                    <div class="faq-item-box px-3 ftco-animate">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span class="text-info">Q1.</span>客製化沙發製作需時多久？</h5>
                            <span class="faq-item-arrow-p"><i class="bi bi-plus-lg"></i></span>
                            <span class="faq-item-arrow-d d-none"><i class="bi bi-dash-lg"></i></span>
                        </div>
                        <div class="faq-item-line"></div>
                        <div class="faq-item-a">
                            <p>
                                製作時間通常為4至8週，視設計複雜度和選材而定。製作過程包括設計確認、選材、製作及質檢。
                            </p>
                        </div>
                    </div>

                    <div class="faq-item-box px-3 ftco-animate">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span class="text-info">Q2.</span>是否可以選擇不同風格和功能？</h5>
                            <span class="faq-item-arrow-p"><i class="bi bi-plus-lg"></i></span>
                            <span class="faq-item-arrow-d d-none"><i class="bi bi-dash-lg"></i></span>
                        </div>
                        <div class="faq-item-line"></div>
                        <div class="faq-item-a">
                            <p>
                                可以。提供多種設計風格，並可根據需求自訂功能，如可調座椅、附加收納等。
                            </p>
                        </div>
                    </div>

                    <div class="faq-item-box px-3 ftco-animate">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span class="text-info">Q3.</span>沙發尺寸或形狀可以調整嗎？</h5>
                            <span class="faq-item-arrow-p"><i class="bi bi-plus-lg"></i></span>
                            <span class="faq-item-arrow-d d-none"><i class="bi bi-dash-lg"></i></span>
                        </div>
                        <div class="faq-item-line"></div>
                        <div class="faq-item-a">
                            <p>
                                可根據空間需求調整尺寸，選擇直線型、L型、圓弧型等多種設計，確保最合適的配置
                            </p>
                        </div>
                    </div>

                    <div class="faq-item-box px-3 ftco-animate">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span class="text-info">Q4.</span>客製化沙發能選擇不同的腳部設計嗎？</h5>
                            <span class="faq-item-arrow-p"><i class="bi bi-plus-lg"></i></span>
                            <span class="faq-item-arrow-d d-none"><i class="bi bi-dash-lg"></i></span>
                        </div>
                        <div class="faq-item-line"></div>
                        <div class="faq-item-a">
                            <p>
                                可以，提供多種腳部設計，如木製、金屬、塑料等，您可以根據整體風格選擇最適合的腳部材質和顏色。
                            </p>
                        </div>
                    </div>

                    <div class="faq-item-box px-3 ftco-animate">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span class="text-info">Q5.</span>沙發的填充物有哪些選擇？</h5>
                            <span class="faq-item-arrow-p"><i class="bi bi-plus-lg"></i></span>
                            <span class="faq-item-arrow-d d-none"><i class="bi bi-dash-lg"></i></span>
                        </div>
                        <div class="faq-item-line"></div>
                        <div class="faq-item-a">
                            <p>
                                常見填充物包括高密度海綿、記憶泡棉、羽絨等，根據舒適度需求選擇合適的填充物。
                            </p>
                        </div>
                    </div>

                    <div class="faq-item-box px-3 ftco-animate">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span class="text-info">Q6.</span>如何選擇沙發的深度和座高？</h5>
                            <span class="faq-item-arrow-p"><i class="bi bi-plus-lg"></i></span>
                            <span class="faq-item-arrow-d d-none"><i class="bi bi-dash-lg"></i></span>
                        </div>
                        <div class="faq-item-line"></div>
                        <div class="faq-item-a">
                            <p>
                                座深和座高應根據使用者的身高和坐姿需求來選擇，設計師會根據您的需求提供建議，確保最大舒適度。
                            </p>
                        </div>
                    </div>


                    <div class="faq-item-box px-3 ftco-animate">
                        <div class="faq-item-q d-flex justify-content-between">
                            <h5><span class="text-info">Q7.</span>客製化沙發的價格範圍大概是多少？</h5>
                            <span class="faq-item-arrow-p"><i class="bi bi-plus-lg"></i></span>
                            <span class="faq-item-arrow-d d-none"><i class="bi bi-dash-lg"></i></span>
                        </div>
                        <div class="faq-item-line"></div>
                        <div class="faq-item-a">
                            <p>
                                價格範圍會根據選材、設計、尺寸等因素而異，通常從幾萬到十幾萬不等。設計師會根據預算提供不同選項。
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row" id="contact">
                <div class="col-lg-4 align-self-center mb-lg-0 mb-3">
                    <div class="contact-box h-100 ftco-animate">
                        <div class="contact-content m-3 text-center">
                            <h4 class="text-uppercase m-0 text-light font-weight-bold">
                                好客沙發 <br class="d-lg-none d-block">你的客製沙發專家</h4>
                            <div class="liner-h-2 mx-auto my-4"></div>
                            <div class="cta-s-1 text-center p-3 mb-3 mx-auto"
                                style="width: fit-content;background-color: #FFFFFFCC !important;">
                                {{-- <h4>預約方式</h4> --}}
                                <h5 style="font-size: 20px;"><a href="https://lin.ee/TIk7DIc"
                                        style="color: #14476e !important; ">立馬線上預約</a>
                                </h5>
                                <div class="liner-h mx-auto"></div>
                                <a href="https://lin.ee/TIk7DIc">
                                    <img src="https://qr-official.line.me/gs/M_745imvkz_BW.png?oat_content=qr"
                                        class="img-fluid mt-3" width="200" alt="">
                                </a>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <a href="javascript:void(0);"><img src="{{asset('assets/images/icon/facebook.png')}}" class="img-fluid mx-2"
                                        width="26" alt=""></a>
                                <a href="javascript:void(0);"><img src="{{asset('assets/images/icon/line.png')}}" class="img-fluid mx-2"
                                        width="26" alt=""></a>
                                <a href="javascript:void(0);"><img src="{{asset('assets/images/icon/instagram.png')}}" class="img-fluid mx-2"
                                        width="26" alt=""></a>
                            </div>
                            <p>
                                <a href="https://maps.app.goo.gl/modzuwMtiDpo2Ex9A" class="text-light"><i
                                        class="icon bi bi-geo-alt flex-shrink-0"></i> 412 台中市⼤⾥區公園街 415 號</a><br>
                                <a href="tel:0987-946-618" class="text-light"><i
                                        class="icon bi bi-telephone flex-shrink-0"></i>
                                    0987-946-618</a><br>
                                <a href="javascript:void(0);" class="text-light">
                                    <i class="icon bi bi-clock flex-shrink-0"></i>
                                    營業時間： 星期⼀〜五 08:00–17:20</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 align-self-center ftco-animate">
                    <iframe style="width: 100%; height: 400px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3642.493111004323!2d120.69121407534627!3d24.084148478444206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693dbd305365a3%3A0x861a22e6b36a769b!2z5aW95a6i5rKZ55m8IGh1bGsgc29mYQ!5e0!3m2!1szh-TW!2stw!4v1746251685499!5m2!1szh-TW!2stw"
                        frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
    </section>
@endsection


@push('page-scripts')
<script>
    $(document).ready(function () {
        // 每頁顯示幾個產品
        var itemsPerPage = 6;

        // 對每個分類的產品區塊套用分頁
        $('.product-wrapper').each(function () {
            var $wrapper = $(this);
            var categoryId = $wrapper.data('category-id');
            var $items = $wrapper.find('.product-item');
            var $pagination = $('#pagination-' + categoryId);

            // 若產品少於等於 itemsPerPage，則不顯示分頁
            if ($items.length <= itemsPerPage) {
                $pagination.hide();
                return;
            }

            // 初始化分頁
            $pagination.pagination({
                items: $items.length,
                itemsOnPage: itemsPerPage,
                // cssStyle: 'light-theme',
                prevText: `<i class="fas fa-arrow-left"></i>`,
                nextText: `<i class="fas fa-arrow-right"></i>`,
                onPageClick: function (pageNumber) {
                    // 計算目前頁面應該顯示的產品項目索引
                    var start = (pageNumber - 1) * itemsPerPage;
                    var end = start + itemsPerPage;

                    // 隱藏所有項目，僅顯示當前頁的
                    $items.hide().slice(start, end).show();
                }
            });

            // 預設顯示第一頁
            $items.hide().slice(0, itemsPerPage).show();
        });

        // 每次切換 tab 時，觸發分頁更新（防止內容未初始化）
        $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
            var targetId = $(e.target).attr('data-target').replace('#pills-', '');
            $('#pagination-' + targetId).pagination('drawPage', 1);
        });
    });
</script>

@endpush
