@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- payments method section -->
        <div class="row row-cols-2" id="contact-us" style="background-color: #EBF0F2; padding: 3%">
            <div class="col-lg-6 col-xlg-6 col-md-6 col-12 justify-content-center">
                <div class="row" style="">
                    <div class="col-12">
                        <div class="" style="padding-top: 1%">
                            <h3 class="fw-bold">اختر طريقة الدفع</h3>
                            <h3 class="fw-bold">test 2</h3>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 3%">
                        <div class="col">
                            <div class="row row-cols-2">
                                <div class="col">
                                    <a class="btn paypal" data-bs-toggle="collapse" href="#collapsePayPal" role="button" aria-expanded="false" aria-controls="collapsePayPal">
                                        PayPal <img src="{{ asset('storage/images/icons8-paypal-30.png') }}">
                                    </a>
                                </div>
                                <div class="col">
                                    <button class="btn credit-card" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCreditCard" aria-expanded="false" aria-controls="collapseCreditCard">
                                        Credit/ Debit Card <img src="{{ asset('storage/images/icons8-credit-card-30.png') }}">
                                    </button>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 3%">
                                <div class="collapse" id="collapsePayPal">
                                    <div class="card card-body">
                                        <div class="row" style="padding-top: 1%">
                                            <div class="col">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">البريد الالكتروني</label>
                                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="مثال: example@gmail.com">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">كلمة السر</label>
                                                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="مثال: **** ****">
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="row">
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <label class="form-check-label" for="flexCheckDefault">حفظ الحساب</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 text-center">
                                                        <button type="button" class="btn" style="width: 100%; border-radius: 10px; background-color: #0B3E61;
                                                        color: white" data-bs-toggle="modal" data-bs-target="#paymentDoneModal">الدفع الآن</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 3%">
                                <div class="collapse" id="collapseCreditCard">
                                    <div class="card card-body">
                                        <div class="row" style="padding-top: 1%">
                                            <div class="col">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">اسم حامل البطاقة</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="مثال: محمد أحمد محمود">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">رقم البطاقة</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="مثال: **** **** **** ****">
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="exampleFormControlInput1" class="form-label">تاريخ الصلاحية</label>
                                                                <input type="date" class="form-control" id="exampleFormControlInput1">
                                                            </div>
                                                            <div class="col">
                                                                <label for="exampleFormControlInput1" class="form-label">CVV كود الحماية</label>
                                                                <a type="button" class="btn" data-toggle="tooltip"
                                                                   title="كود الحماية هو رمز أمان البطاقة (CVV)، وهو رقم مكون من 3 أرقام على ظهر البطاقة.">
                                                                    <i class='far fa-question-circle' style="color: grey"></i>
                                                                </a>
                                                                <input type="text" class="form-control" id="exampleFormControlInput1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        $(document).ready(function(){
                                                            $('[data-toggle="tooltip"]').tooltip();
                                                        });
                                                    </script>
                                                    <div class="mb-3">
                                                        <div class="row">
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <label class="form-check-label" for="flexCheckDefault">حفظ هذه البطاقة</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 text-center">
                                                        <a type="button" class="btn" style="width: 100%; border-radius: 10px; background-color: #0B3E61;
                                                        color: white" data-bs-toggle="modal" data-bs-target="#paymentDoneModal">الدفع الآن</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment done Modal -->
                            <div class="modal fade" id="paymentDoneModal" tabindex="-1" aria-labelledby="paymentDoneModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content" style="border-radius: 15px; padding-bottom: 15%">
                                        <div class="modal-header" style="border: none;">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="{{ asset('storage/images/payment-done.png') }}" style="width: 60%">
                                            <p class="fs-5 fw-bold">تهــــــانينا</p>
                                            <p>تمـت عمليـة الدفـع بنجـاح</p>
                                            <button type="button" class="btn" style="background-color: #0B3E61; color: white; width: 50%; border-radius: 10px">بدء الاختبــار</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xlg-6 col-md-6 col-12 d-flex align-items-center justify-content-center">
                <div class="card" style=" border-radius: 20px;">
                    <img src="{{ asset('storage/images/p1.png') }}" class="card-img-top" alt="..." style="padding: 3%; border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="card-title">اسم الاختبـار:</h5>
                        <p class="card-text">اختبـار تحليـل الشخصيـة</p>
                        <h5 class="card-title">وصف بسيـط عن الاختبـار:</h5>
                        <p class="card-text">يسـاعدك هذا الاختبـار من خلال مجموعة الأسئلة الدقيقة في التعرف علة شخصيتك عن كثب في مختلف المجالات</p>
                        <h5 class="card-title">تكلفـة الاختبـار:</h5>
                        <a href="#" class="btn" style="background-color: #E99424; color: white; border-radius: 20px;">200 ريال سسعودي</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal الشروط والأحكام -->
        <div class="modal fade" id="staticCondition" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 15px">
                    <div class="modal-header" style="border: none">
                        <span class="text-center"><h5 class="modal-title" id="staticBackdropLabel">الشـروط والأحكـام</h5></span>
                        <span class="text-start"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></span>
                    </div>
                    <div class="modal-body">
                        <div class="scroll" >
                            <div class="card" style="border-radius: 15px">
                                <div class="card-body">
                                    <div class="row" style="max-height:350px; overflow-y: auto;">
                                        <div class="col">
                                            <h5 class="card-title">مرحباَ بك في بيجنينج</h5>
                                            <ul>
                                                <li>يهدف هذا الموقع إلى تقديم خدمـات واختبارات علمية وأدوات الذكاء الاصطناعي لمساعدة الطلاب
                                                    والباحثين عن عمل والشركات والجهات الحكومية والخاصة في الشرق الأوسط على اختيار مسسارهم في
                                                    المرحلة الثانوية والمعاهد والجامعات وقياس القدرات.
                                                </li>
                                                <li>
                                                    جميع المواد المنشورة في هذا الموقع تخضع لقوانين الحقوق الفكرية المطبقة في دولة المملكة
                                                    العربية السسعودية ويشمل ذلك المواد المجانية والمدفوعة، لذلك إن أي محاولة لنسخ أو إعادة نشر هذه المواد
                                                    دون إذن خطي إدارة الموقع سيعرضك للمسائلة القانونية.
                                                </li>
                                                <li>
                                                    نتيح عبر هذا الموقع الالكتروني مساحة مخصصة لمحتويات المستخدم كالنصوص والصور ومقاطع الفيديو والأرآء وما إلى ذلك.
                                                    إن نشر هذا المحتوى عبر الموقع الالكتروني (Begining)، يمنحنا ترخيصاَ من دون حقوق الملكية، وغير قابل للرجوع،
                                                    وغير حصري، ونافذ طوال فترة الحماية القانونية لحقوق الملكية الفكرية. لإعادة إنتاج محتوى المستخدم، أو عرضه، أو استخدامه،
                                                    أو نسسخه، أو تعديله، أو تكييفه، أو تنقيحه، أو توزيعه، أو ترجمته، أو إنشاء أعمال مشتقة منه، أو دمجه في أعمال أخرى
                                                    أو توزيعه (بشكل كلي أو جزئي).
                                                </li>
                                                <li>
                                                    قد يتطلب الوصول إلى الموقع الالكتروني و/ أو إلى أقسام معينة منهاستخدام كلمات سر شخصية. في هذه الحالة، يجب
                                                    عليك اتخاذ الخطوات اللازمة لإبقاء هذه الكلمات سرية. كما يمكنك تغييرها في أي وقت. ويرجى إبلاغنا عن أي استخدام احتيالي
                                                    علمت به. وفي حال الاخلال بالقواعد المنصوص عليها في شروط الاستخدام هذه، نحتفظ بحق تعليق إمكانية الوصول إلى الموقع الالكتروني.
                                                </li>
                                                <li>
                                                    إن نشر هذا المحتوى عبر الموقع الالكتروني (Begining)، يمنحنا ترخيصاَ من دون حقوق الملكية، وغير قابل للرجوع،
                                                    وغير حصري، ونافذ طوال فترة الحماية القانونية لحقوق الملكية الفكرية. لإعادة إنتاج محتوى المستخدم، أو عرضه، أو استخدامه،
                                                    أو نسسخه، أو تعديله، أو تكييفه، أو تنقيحه، أو توزيعه، أو ترجمته، أو إنشاء أعمال مشتقة منه، أو دمجه في أعمال أخرى.
                                                </li>
                                                <li>
                                                    لقد قمنا ببذل كافة الجهود لعرض بأدق صورة ممكنة للخدمات التي نقدمها، ولكن لا نستطيع ضمان استفادتك
                                                    الكاملة منها لنه ذلك يخضع لأمور عديدة. وسنسعد بتلقي ملاحظاتكم ونحاول تنفيذها قدر الإمكان.
                                                </li>
                                                <li>
                                                    لا نضمن دقة نتائج المقاييس التي تقوم بأخذها على الموقع.
                                                    بنسبة 100%  لقد قمنا بتجربة وتقنين هذه المقاييس بشكل جيد
                                                    لكن دقتها تصل الى نسبة 83.36% يخضع ‏20HK لعوامل متعددة وتجربة الصدق ومعيار.
                                                </li>
                                                <li>
                                                    نحتفظ بالحق بعدم بيع منتجاتنا أو خدماتنا لأي شخص، أو منطقة جغرافية أو قضائية.
                                                    وقد نطبق هذا الحق في بعض الحالات. نحتفظ بحق لتحديد الكميات لأي منتجات أو خدمات نقدمها.
                                                </li>
                                                <li>
                                                    جميع المواصفات للمنتجات أو أسعار المنتجات خاضعة للتغيير في أي وقت بدون تنبيه. نحتفظ بحق عدم توفير
                                                    أي منتج في أي وقت. يعتبر أي عرض لأي منتج أو خدمة يتم تقديمه على هذا المتجر لا غيا إذا كان محظوراً.
                                                </li>
                                                <li>
                                                    نود أن نعلمك اننا نقوم بطلب التسجيل في الموقع من اجل هدف واحد
                                                    وهو حفظ تقارير ونتائج  المقاييس التي تقوم بها. ومن حقك إدخال إيميل وهمي إذ لا نطلب
                                                    تفعيل الحساب عبر الإيميل، كما أن من حقك حذف الحساب في أي لحظة عبر أيقونة إغلاق الحساب في قسم الملف الشخصي.
                                                </li>
                                                <li>
                                                    لا يحق للموقع إرسال معلوماتك الشخصية إلى أي كائن ما كان ولأي سبب إلا ضمن الشروط التي تنص عليها هذه السياسة.
                                                </li>
                                                <li>
                                                    لنا الحق في إجراء أي تعديل طفيف أو جذري لشروط سياسة الخصوصية
                                                    من وقت لآخر من دون الحاجة إلى تقديم إخطار بذلك. وإذا كنت ترغب (Begining) يحتفظ موقع
                                                    بالاستمرار في استخدام موقعنا بعد إدخال التعديلات على سياسة الخصوصية هذه، فإن هذا يعني قبولك لهذه التغييرات.
                                                </li>
                                                <li>
                                                    يتبع هذا الموقع والعاملين فيه سياسة أمن معلومات شاملة وصارمة.
                                                    ولا يتاح إلا للموظفين المخولين فقط بالوصول إلى المعلومات الشخصية التعريفية وقد تعهد هؤلاء
                                                    الموظفون بتأمين سرية هذه المعلومات وفقا للأنظمة المعمول بها في المملكة العربية السعودية.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn " style="border-radius: 10px; background-color: #0B3E61; color: white; width: 25%">متـابعة</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal سياسة الخصوصية -->
        <div class="modal fade" id="staticPrivicy" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 15px">
                    <div class="modal-header" style="border: none">
                        <span class="text-center"><h5 class="modal-title" id="staticBackdropLabel">سيـاسة الخصوصيـة</h5></span>
                        <span class="text-start"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></span>
                    </div>
                    <div class="modal-body">
                        <div class="scroll" >
                            <div class="card" style="border-radius: 15px">
                                <div class="card-body">
                                    <div class="row" style="max-height:350px; overflow-y: auto;">
                                        <div class="col">
                                            <h5 class="card-title">مرحباَ بك في بيجنينج</h5>
                                            <p>
                                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص
                                                الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. اذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو
                                                مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية
                                                .لتصميم الموقع  هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. اذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                                            </p>
                                            <p>
                                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص
                                                الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. اذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو
                                                مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية
                                                .لتصميم الموقع  هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. اذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn " style="border-radius: 10px; background-color: #0B3E61; color: white; width: 25%">متـابعة</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
