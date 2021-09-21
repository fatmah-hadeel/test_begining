@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- test result section -->
        <div class="row" id="test" style="background-color: white; padding: 6% 3% 3% 3%">
            <div class="col-12 justify-content-center">
                <div class="card">
                    <div class="row">
                        <div class="col-12" style="background-color: #0B3E61; border-top-right-radius: 15px; border-top-left-radius: 15px; padding-bottom: 10%">
                            <div class="row row-cols-1" style="padding: 1%; color: white">
                                <div class="col text-center fs-4" style="padding-top: 1%">النتيجة النهائية لقياس قدرات</div>
                                <div class="col text-center fs-4" style="padding-top: 1%"><span class="fw-bold">الاسم: </span>محمد أحمد محمود عبدالله</div>
                                <div class="col text-center fs-4" style="padding-top: 1%; padding-bottom: 1%"><span class="fw-bold">رقم الطالب: </span>JDHFJ2222</div>
                            </div>
                        </div>
                        <div class="col-12" style="background-color: #EBF0F2; ">
                            <div class="col text-center" style="margin-top: -8%; padding-bottom: 1%;">
                                <img src="{{ asset('storage/images/icons8-user-100.png') }}" style="border-radius: 50%; border: 10px white solid; width: 15%;">
                            </div>
                        </div>
                        <div class="col-12" style="background-color: #EBF0F2; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                            <section>
                                <div class="row" style="padding: 2%">
                                    <div class="col-12 fw-bold fs-4">النتائج التالية هي التخصصات والمهن التي لديها توافق مع قدراتك وميولك العلمي والمهني</div>
                                </div>
                            </section>
                            <section style="padding: 0 2% 2% 2%">
                                <div class="row row-cols-1 row-cols-md-5 g-4  me-2">
                                    <div class="col" style="padding: 1%">
                                        <h5 class="card-title fw-bold" style="color: #0B3E61;">التخصص الرئيسي</h5>
                                    </div>
                                    <div class="col" style="padding: 1%; background-color: white">
                                        <h5 class="card-title text-center">مهندس برمجيات</h5>
                                    </div>
                                    <div class="col">
                                    </div>
                                    <div class="col" style="padding: 1%">
                                        <h5 class="card-title fw-bold" style="color: #E99424;">التخصص الفرعي</h5>
                                    </div>
                                    <div class="col" style="padding: 1%; background-color: white">
                                        <h5 class="card-title text-center">مدرس حاسب</h5>
                                    </div>
                                </div>
                            </section>
                            <section style="padding: 0 2% 2% 2%">
                                <div class="row row-cols-1 row-cols-md-5 g-4  me-2">
                                    <div class="col" style="padding: 1%">
                                        <h5 class="card-title fw-bold" style="color: #0B3E61;">المهنة الرئيسية</h5>
                                    </div>
                                    <div class="col" style="padding: 1%; background-color: white">
                                        <h5 class="card-title text-center">كهربائي سيارات</h5>
                                    </div>
                                    <div class="col">
                                    </div>
                                    <div class="col" style="padding: 1%">
                                        <h5 class="card-title fw-bold" style="color: #E99424;">المهنة الفرعية</h5>
                                    </div>
                                    <div class="col" style="padding: 1%; background-color: white">
                                        <h5 class="card-title text-center">ميكانيكي</h5>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="row" style="padding: 2%">
                                    <div class="col-12 fw-bold fs-4">نسبة توافق الرغبة الشخصية <span style="color: #0B3E61">( طبيب ) </span> المدخلة من قبل المستفيد<span style="color: #0B3E61"> 60%</span></div>
                                    <div class="col-12 fw-bold fs-4" style="color: #0B3E61">وقياسها من خلال الذكاء الاصطناعي مع نتائج الاختبارات</div>
                                </div>
                            </section>
                            <section>
                                <div class="row" style="padding: 1%">
                                    <div class="col-12 fw-bold fs-4">يعرض لك الرسم البياني المجاور نسبة ميولك العلمية في أربع مسارات أكاديمية وهي؛ علوم الحاسب والتقنية, العلوم الشرعية والاجتماعية, وعلوم الصحة والحياة.</div>
                                </div>
                            </section>
                            <section style="padding: 1%">
                                <div class="row row-cols-1 row-cols-md-2 g-4 text-center fs-4">
                                    <div class="col">القدرات الاجتماعية</div>
                                    <div class="col">المسارات الأكاديمية</div>
                                </div>
                            </section>
                            <section style="padding: 1%">
                                <div class="row row-cols-1 row-cols-md-2 g-4 text-center ">
                                    <div class="col"><img src="{{ asset('storage/images/Picture9.png') }}" style="width: 50%"></div>
                                    <div class="col"><img src="{{ asset('storage/images/Picture10.png') }}" style="width: 50%"></div>
                                </div>
                            </section>
                            <section style="padding: 1%">
                                <div class="row row-cols-2">
                                    <div class="col">
                                        <div class="row row-cols-2 text-center">
                                            <div class="col-auto"><div style="background: #4472C3; width: 15px; height: 15px; -webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;"></div></div>
                                            <div class="col-auto"><div>قائد المجموعة مهتم بتحقيق الهدف</div></div>
                                        </div>
                                        <div class="row row-cols-2 text-center">
                                            <div class="col-auto"><div style="background: #ED7D31; width: 15px; height: 15px; -webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;"></div></div>
                                            <div class="col-auto"><div>مخطط المجموعة مهتم بالتفاصيل</div></div>
                                        </div>
                                        <div class="row row-cols-2 text-center">
                                            <div class="col-auto"><div style="background: #A5A5A5; width: 15px; height: 15px; -webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;"></div></div>
                                            <div class="col-auto"><div>متفهم المجموعة متعاون وصديق لكل الأفراد</div></div>
                                        </div>
                                        <div class="row row-cols-2 text-center">
                                            <div class="col-auto"><div style="background: #FFBF00; width: 15px; height: 15px; -webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;"></div></div>
                                            <div class="col-auto"><div>مبتكر المجموعة والمتجدد والمغامر</div></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row row-cols-2 text-center">
                                            <div class="col-auto"><div style="background: #4472C3; width: 15px; height: 15px; -webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;"></div></div>
                                            <div class="col-auto"><div>علوم الصحة والحياة</div></div>
                                        </div>
                                        <div class="row row-cols-2 text-center">
                                            <div class="col-auto"><div style="background: #ED7D31; width: 15px; height: 15px; -webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;"></div></div>
                                            <div class="col-auto"><div>العلوم الشرعية والاجتماعية</div></div>
                                        </div>
                                        <div class="row row-cols-2 text-center">
                                            <div class="col-auto"><div style="background: #A5A5A5; width: 15px; height: 15px; -webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;"></div></div>
                                            <div class="col-auto"><div>علوم الحاسب والتقنية</div></div>
                                        </div>
                                        <div class="row row-cols-2 text-center">
                                            <div class="col-auto"><div style="background: #FFBF00; width: 15px; height: 15px; -webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;"></div></div>
                                            <div class="col-auto"><div>الربع الرابع</div></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section style="padding: 2%">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col fw-bold fs-4 d-flex align-items-center justify-content-center">الختم والتوقيع</div>
                                    <div class="col text-start d-flex align-items-center justify-content-center"><img src="{{ asset('storage/images/logo%20-%20name%20(2).png') }}" style="width: 50%"></div>
                                </div>
                            </section>
                            <section style="padding: 2%">
                                <div class="row row-cols-1 g-4">
                                    <div class="col fw-bold fs-4 d-flex align-items-center justify-content-center"> نسسبة الصدق في النتائج حسب المعايير العلمية والتجارب تصل إلى <span style="color: #0B3E61">&nbsp; 83.65%&nbsp;</span></div>
                                </div>
                            </section>
                            <section style="padding: 2%">
                                <div class="row row-cols-1 g-4">
                                    <div class="col fw-bold fs-4 d-flex align-items-center justify-content-center"><button type="button" class="btn"
                                                                                                                           style="background-color: #0B3E61; color: white; width: 35%; border-radius: 10px;"
                                                                                                                           data-bs-toggle="modal" data-bs-target="#shareTestModal">شـارك نتيجتــك</button></div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- share your test result Modal -->
        <div class="modal fade" id="shareTestModal" tabindex="-1" aria-labelledby="shareTestModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="border-radius: 15px; padding-bottom: 15%">
                    <div class="modal-header" style="border: none;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p class="fs-5 fw-bold">شارك نتيجة اختبارك مع أصدقائك</p>
                        <p class="fs-5">عبر منصات السوشيال ميديا</p>
                        <div class="row text-center">
                            <form class=" me-auto">
                                <button class="btn " type="submit" style="padding-left: 0; padding-right: 0"><img src="{{ asset('storage/images/icons8-instagram-logo-48.png') }}"></button>
                                <button class="btn " type="submit" style="padding-left: 0; padding-right: 0"><img src="{{ asset('storage/images/icons8-twitter-squared-48.png') }}"></button>
                                <button class="btn " type="submit" style="padding-left: 0; padding-right: 0"><img src="{{ asset('storage/images/icons8-whatsapp-48.png') }}"></button>
                                <button class="btn " type="submit" style="padding-left: 0; padding-right: 0"><img src="{{ asset('storage/images/icons8-facebook-48.png') }}"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
