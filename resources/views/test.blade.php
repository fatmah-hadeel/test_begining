@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- test section -->
        <div class="row" id="test" style="background-color: #EBF0F2; padding: 6% 3% 3% 3%">
            <div class="col-12 justify-content-center">
                <div class="card">
                    <div class="row">
                        <div class="col-12" style="background-color: #6CCDD7; border-top-right-radius: 15px; border-top-left-radius: 15px;">
                            <div class="row" style="padding: 1%">
                                <div class="col-6 fw-bold text-end">الوقت المتبقي: 09:40</div>
                                <div class="col-6 fw-bold text-start">الأسئلة: 05/20</div>
                            </div>
                        </div>
                        <div class="col-12" style="background-color: #0B3E61; height: 10px"></div>
                        <div class="col-12" style="background-color: white; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                            <section>
                                <div class="row" style="padding: 1%">
                                    <div class="col-12 fw-bold">‏1. ما هي الأسباب التي قد تدعوك لعدم حضور ورشة عمل أو ندوة قد تقدمت بطلب لحضورها وأتاك إشعارًا بقبول طلبك؟</div>
                                </div>
                                <form>
                                    <div class="row row-cols-1 row-cols-md-2 g-4" style="padding: 1% 2% 2% 3%">
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                قد أكتشف أنني غير مهتمًا بالحضور فيما بعد
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                قد أرتبط بموعد آخر في نفس الوقت وألغي حضوري بدلًا من تأجيل موعدي
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                غالبًا، لا أقوم بإلغاء أمرًا قد تقدمت إليه وكنت مهتمًا به منذ البداية
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                قد أفقد شغفي بذلك فيما بعد أو أكتشف بأنه هنالك أمورٌ أهم لأقوم بها
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <hr class="new2">
                            <section>
                                <div class="row" style="padding: 1%">
                                    <div class="col-12 fw-bold">2. هل سبق وفكرت بالاشتراك في دورات أو مسابقات في مجال تكنولوجيا المعلومات؟</div>
                                </div>
                                <form>
                                    <div class="row row-cols-1 row-cols-md-2 g-4" style="padding: 1% 2% 2% 3%">
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                لم التحق بأي دورة في مجال تكنولوجيا المعلومات ولا أنوي ذلك مستقبلا
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                التحقت بدورة/عدة دورات لكن لا أنوي الاشتراك بأي مسابقة
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                أنوي الالتحاق بدورات في مجال معين في تكنولوجيا المعلومات
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                لدي خلفية جيدة في مجال تكنولوجيا المعلومات
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <hr class="new2">
                            <section>
                                <div class="row" style="padding: 1%">
                                    <div class="col-12 fw-bold">3. ربحت دعوة لحضور حزمة دورات تدريبية مجانية في أحد المجالات التالية، ماذا ستختار؟</div>
                                </div>
                                <form>
                                    <div class="row row-cols-1 row-cols-md-2 g-4" style="padding: 1% 2% 2% 3%">
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                دورات لتعليم أي لغة أجنبية من اختيارك
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                دورات في مجال السياحة و/أو التجهيزات الفندقية
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                دورات في مجال الظهور الإعلامي والصحفي
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                لا شيء مما ذكر
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <hr class="new2">
                            <section>
                                <div class="row" style="padding: 1%">
                                    <div class="col-12 fw-bold">4. من أكثر المواد التي كنت أحصل بها على علامات متدنية كانت؟</div>
                                </div>
                                <form>
                                    <div class="row row-cols-1 row-cols-md-2 g-4" style="padding: 1% 2% 2% 3%">
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                الكيمياء
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                اللغة الإنجليزية
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                المواد التي تتطلب الكثير من الحفظ كالتاريخ أو الجغرافيا أو العلوم السياسية
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                لا شيء مما ذكر
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <hr class="new2">
                            <section>
                                <div class="row" style="padding: 1%">
                                    <div class="col-12 fw-bold">5. أستطيع الدراسة أو العمل خلف المكتب لمدة طويلة مع تحملي لذلك:</div>
                                </div>
                                <form>
                                    <div class="row row-cols-1 row-cols-md-2 g-4" style="padding: 1% 2% 2% 3%">
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                لا مشكلة لدي من الجلوس لمدة طويلة للعمل/الدراسة وأتحمل ذلك
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                أستطيع الجلوس لفترة طويلة فقط إذا كنت أحب ما أدرسه/أعمل به
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                أستطيع الجلوس لفترة طويلة لكن مع استمراري بتغيير المكان لكي لا أشعر بالملل
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn option-q btn-outline-secondary" style="width: 100%; border-radius: 30px">
                                                لا أحب الأعمال المكتبية أبدًا ولا أتحمل الجلوس مطولًا
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <hr class="new2">
                            <section>
                                <div class="row" style="padding: 1% 2% 2% 3%">
                                    <div class="col text-end">
                                        <button type="button" class="btn btn-secondary" style="-webkit-appearance: none; border-radius: 10px" disabled>
                                            السابق
                                        </button>
                                    </div>
                                    <div class="col text-start">
                                        <a type="button" class="btn me-2" style="-webkit-appearance: none;border-radius: 10px; background-color: #0B3E61; color: white; width: 25%"
                                           href="{{ url('test-next') }}">
                                            التالي
                                        </a>
                                        <a type="button" class="btn btn-danger me-2" style="-webkit-appearance: none; border-radius: 10px; width: 25%">
                                            إنهاء الاختبار
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
