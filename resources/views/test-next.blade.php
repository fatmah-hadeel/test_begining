@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- test next section -->
        <div class="row" id="test" style="background-color: #EBF0F2; padding: 6% 3% 3% 3%">
            <div class="col-12 justify-content-center">
                <div class="card">
                    <div class="row">
                        <div class="col-12" style="background-color: #6CCDD7; border-top-right-radius: 15px; border-top-left-radius: 15px;">
                            <div class="row" style="padding: 1%">
                                <div class="col-6 fw-bold text-end">الوقت المتبقي: 02:05</div>
                                <div class="col-6 fw-bold text-start">الأسئلة: 20/20</div>
                            </div>
                        </div>
                        <div class="col-12" style="background-color: #0B3E61; height: 10px"></div>
                        <div class="col-12" style="background-color: white; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                            <section>
                                <div class="row" style="padding: 1%">
                                    <div class="col-12 fw-bold">16. أيٍ من الجمل التالية توافق عليها أكثر؟</div>
                                </div>
                                <div class="row" style="padding: 1%">
                                    <img src="https://image-dall.fra1.digitaloceanspaces.com/static_images/images/Q-16.png" style="border-radius: 45px">
                                </div>
                                <form>
                                    <div class="row row-cols-1 row-cols-md-2 g-4" style="padding: 1% 2% 2% 3%">
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                الاختلاف والتنوع هما أساس الحياة
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                كل شيء له وقته ومكانه المناسبين
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                من يصل مبكرًا يحصد نجاحًا
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                استرح، واستمتع بالحياة وتفاصيلها
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <hr class="new2">
                            <section>
                                <div class="row" style="padding: 1%">
                                    <div class="col-12 fw-bold">17. غالبًا ما أتخذ قراراتي بالاعتماد على:</div>
                                </div>
                                <div class="row" style="padding: 1%">
                                    <img src="https://image-dall.fra1.digitaloceanspaces.com/static_images/images/Q-17.png" style="border-radius: 45px">
                                </div>
                                <form>
                                    <div class="row row-cols-1 row-cols-md-2 g-4" style="padding: 1% 2% 2% 3%">
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                الحقائق والوقائع الملموسة
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                حدسي وأحاسيسي الداخلية وما أشعر به
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                الاثنين معًا، لكن أميل إلى التفكير بعقلي
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                الاثنين معًا، لكن أميل إلى التفكير بقلبي
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <hr class="new2">
                            <section>
                                <div class="row" style="padding: 1%">
                                    <div class="col-12 fw-bold">18. إذا تعرضت لهجوم كلامي من أحدهم ماذا تفعل؟</div>
                                </div>
                                <form>
                                    <div class="row row-cols-1 row-cols-md-2 g-4" style="padding: 1% 2% 2% 3%">
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                غالبًا ما تتم استثارتي بسرعة وأقوم بتوجيه الكلام إليه كما فعل
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                أقوم بمحاورته واكتشاف سبب نقده لي وإقناعه بوجهة نظري
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                أتقبل الأمر ولا أكترث به كثيرًا
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                من الممكن أن يؤثر بي كلامه أو يجرح مشاعري ولا أدري إن كنت سأحاوره أم لا
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <hr class="new2">
                            <section>
                                <div class="row" style="padding: 1%">
                                    <div class="col-12 fw-bold">19. لقد طلب منك مشرفك القيام بعدة واجبات هامة في إطار زمني ضيق، ماذا تفعل؟</div>
                                </div>
                                <form>
                                    <div class="row row-cols-1 row-cols-md-2 g-4" style="padding: 1% 2% 2% 3%">
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                أُنظم وقتي وأضع مخطط زمني لجميع الواجبات لضمان تسليمها بالوقت المقرر
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                اختار العمل ضمن فريق وتوزيع الواجبات علينا لضمان إتمامها
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                ابتكر طرق ووسائل جديدة لإنجاز الواجبات
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                أقوم بالاعتذار عن تسليم الواجبات
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <hr class="new2">
                            <section>
                                <div class="row" style="padding: 1%">
                                    <div class="col-12 fw-bold">20. كيف تقضي عطلتك الأسبوعية؟</div>
                                </div>
                                <form>
                                    <div class="row row-cols-1 row-cols-md-2 g-4" style="padding: 1% 2% 2% 3%">
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                ممارسة هوايتي الفنية (كالرسم مثلًا) أو زيارة المتاحف أو المعارض الفنية
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                قضاء الوقت مع أصدقائي أو معارفي
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                إنجاز أعمالي أو الدراسة ثم القيام بالانشطة الترفيهية
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                أُفضل قضاء الوقت بالتسلية والترفيه ثم القيام بواجباتي المتراكمة بوقت لاحق
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <hr class="new2">
                            <section>
                                <div class="row" style="padding: 1% 2% 2% 3%">
                                    <div class="col text-end">
                                        <a type="button" class="btn " style="-webkit-appearance: none;border-radius: 10px; background-color: #0B3E61; color: white; " href="test.html">
                                            السابق
                                        </a>
                                    </div>
                                    <div class="col text-start">
                                        <button type="button" class="btn btn-secondary me-2" style="border-radius: 10px; width: 25%" disabled>
                                            التالي
                                        </button>
                                        <button type="button" class="btn btn-danger me-2" style=" border-radius: 10px; width: 25%"
                                                data-bs-toggle="modal" data-bs-target="#testDoneModal">
                                            إنهاء الاختبار
                                        </button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- test done Modal -->
        <div class="modal fade" id="testDoneModal" tabindex="-1" aria-labelledby="testDoneModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="border-radius: 15px; padding-bottom: 15%">
                    <div class="modal-header" style="border: none;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="https://image-dall.fra1.digitaloceanspaces.com/static_images/images/test-done.png" style="width: 60%">
                        <p class="fs-5 fw-bold">تهــــــانينا</p>
                        <p>لقد قمت بإنهاء الاختبار بنجـاح</p>
                        <a type="button" class="btn" style="-webkit-appearance: none; background-color: #0B3E61; color: white; width: 50%; border-radius: 10px"
                           href="{{ url('test-result') }}">احصـل على النتيــجة</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
