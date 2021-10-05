@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- my profile section -->
        <div class="row row-cols-2" id="contact-us" style="background-color: #EBF0F2; padding: 5% 1% 1% 1%">
            <div class="col-lg-3 col-xlg-3 col-md-12 col-12" style="padding: 2%">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="background-color: #0B3E61; border-radius: 15px; padding-top: 10%; padding-bottom: 10%;">
                            <div class="text-center">
                                <img src="assets/img/ibrahim.jpeg" class="card-img-top" alt="..." style=" width: 50%; border-radius: 50%; border: 5px white solid;">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h5 class="card-title" style="color: white">إبراهيم حسين</h5>
                                        <p class="card-text" style="color: white">Manager - Beginning</p>
                                        <p class="card-text" style="color: white">الرياض - المملكة العربية السعودية</p>
                                    </div>
                                    <div class="line" style="padding-top: 50px"></div>
                                    <div class="col-12">
                                        <div class="list-group" style="padding-bottom: 20px;">
                                            <a href="#" class="list-group-item list-group-item-action active profile-list"
                                               id="home-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">
                                                <div class="row">
                                                    <div class="col-3 text-center" style="padding-left: 0"><i class='fas fa-chart-bar'></i></div>
                                                    <div class="col-9" style="padding-right: 0">لوحة التحكم</div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action profile-list"
                                               id="home-tab" data-bs-toggle="tab" data-bs-target="#all-users" type="button" role="tab" aria-controls="all-users" aria-selected="true">
                                                <div class="row">
                                                    <div class="col-3 text-center" style="padding-left: 0"><i class='far fa-address-card'></i></div>
                                                    <div class="col-9" style="padding-right: 0">جميع المستخدمين</div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action profile-list"
                                               id="profile-tab" data-bs-toggle="tab" data-bs-target="#all-tests" type="button" role="tab" aria-controls="all-tests" aria-selected="false">
                                                <div class="row">
                                                    <div class="col-3 text-center" style="padding-left: 0"><i class='far fa-file-alt'></i></div>
                                                    <div class="col-9" style="padding-right: 0">الاختبارات</div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action profile-list"
                                               id="contact-tab" data-bs-toggle="tab" data-bs-target="#careers" type="button" role="tab" aria-controls="careers" aria-selected="false">
                                                <div class="row">
                                                    <div class="col-3 text-center" style="padding-left: 0"><i class='fas fa-briefcase'></i></div>
                                                    <div class="col-9" style="padding-right: 0">الوظائف</div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action profile-list"
                                               id="contact-tab" data-bs-toggle="tab" data-bs-target="#majors" type="button" role="tab" aria-controls="majors" aria-selected="false">
                                                <div class="row">
                                                    <div class="col-3 text-center" style="padding-left: 0"><i class='fas fa-graduation-cap'></i></div>
                                                    <div class="col-9" style="padding-right: 0">التخصصات</div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action profile-list"
                                               id="contact-tab" data-bs-toggle="tab" data-bs-target="#symbols" type="button" role="tab" aria-controls="symbols" aria-selected="false">
                                                <div class="row">
                                                    <div class="col-3 text-center" style="padding-left: 0"><i class='fas fa-magic'></i></div>
                                                    <div class="col-9" style="padding-right: 0">الخصائص</div>
                                                </div>
                                            </a>
                                            <hr style="color: white">
                                            <a href="#" class="list-group-item list-group-item-action profile-list"
                                               id="contact-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                                                <div class="row">
                                                    <div class="col-3 text-center" style="padding-left: 0"><i class='fas fa-cog'></i></div>
                                                    <div class="col-9" style="padding-right: 0">الاعدادات</div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action profile-list">
                                                <div class="row">
                                                    <div class="col-3 text-center" style="padding-left: 0"><i class='fas fa-sign-out-alt'></i></div>
                                                    <div class="col-9" style="padding-right: 0">تسجيل الخروج</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-xlg-9 col-md-12 col-12 text-start" style="padding: 2%">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="background-color: white; border-radius: 15px; padding: 5%;">
                                    <!--                    <div>-->
                                    <!--                      <button type="button" class="btn" style=" color: #0B3E61;" data-bs-toggle="modal" data-bs-target="#addUserModal"><i class='fas fa-user-plus'></i> إضافة مستخدم جديد</button>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="card text-end" style="border-radius: 15px;">-->
                                    <!--                      <div class="card-header" style="background-color: #0B3E61; color: white; border-top-right-radius: 15px; border-top-left-radius: 15px;">-->
                                    <!--                        <div class="row text-center">-->
                                    <!--                          <div class="col-3">اسم المستخدم</div>-->
                                    <!--                          <div class="col-3">نوع المستخدم</div>-->
                                    <!--                          <div class="col-3">البريد الالكتروني</div>-->
                                    <!--                          <div class="col-3">الاجراء</div>-->
                                    <!--                        </div>-->
                                    <!--                      </div>-->
                                    <!--                      <div class="card-body" style="max-height:470px; overflow-y: auto;">-->
                                    <!--                        <div class="row text-center" style="border-bottom: 1px solid lightgray; padding-top: 1%">-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            سمية محمد فلمبان-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            طالب ثانوي-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            hind2017adnan@gmail.com-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3 text-center d-flex align-items-center justify-content-center">-->
                                    <!--                            <button type="button" class="btn" style=" color: #0B3E61;" data-bs-toggle="tooltip" data-bs-placement="top" title="تعديل بيانات المستخدم"><i class='fas fa-user-edit'></i></button>-->
                                    <!--                            <button type="button" class="btn btn-outline-danger" style="border: none" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف مستخدم"><i class='fas fa-user-minus'></i></button>-->
                                    <!--                          </div>-->
                                    <!--                        </div>-->
                                    <!--                        <div class="row text-center" style="border-bottom: 1px solid lightgray; padding-top: 1%">-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            هند محمد عدنان-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            طالب جامعي-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            soma@gmail.com-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3 text-center d-flex align-items-center justify-content-center">-->
                                    <!--                            <button type="button" class="btn" style=" color: #0B3E61;" data-bs-toggle="tooltip" data-bs-placement="top" title="تعديل بيانات المستخدم"><i class='fas fa-user-edit'></i></button>-->
                                    <!--                            <button type="button" class="btn btn-outline-danger" style="border: none" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف مستخدم"><i class='fas fa-user-minus'></i></button>-->
                                    <!--                          </div>-->
                                    <!--                        </div>-->
                                    <!--                        <div class="row text-center" style="border-bottom: 1px solid lightgray; padding-top: 1%">-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            فاطمة ناصر اليامي-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            طالب جامعي-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            fatimah@gmail.com-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3 text-center d-flex align-items-center justify-content-center">-->
                                    <!--                            <button type="button" class="btn" style=" color: #0B3E61;" data-bs-toggle="tooltip" data-bs-placement="top" title="تعديل بيانات المستخدم"><i class='fas fa-user-edit'></i></button>-->
                                    <!--                            <button type="button" class="btn btn-outline-danger" style="border: none" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف مستخدم"><i class='fas fa-user-minus'></i></button>-->
                                    <!--                          </div>-->
                                    <!--                        </div>-->
                                    <!--                      </div>-->
                                    <!--                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="all-users" role="tabpanel" aria-labelledby="all-users-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="background-color: white; border-radius: 15px; padding: 5%;">
                                    <div style="padding-bottom: 1%;">
                                        <button type="button" class="btn" style=" color: #0B3E61; border: 1px solid #0B3E61; border-radius: 15px" data-bs-toggle="modal" data-bs-target="#addUserModal"><i class='fas fa-user-plus'></i> إضافة مستخدم</button>
                                    </div>
                                    <div class="card text-end" style="border-radius: 15px;">
                                        <div class="card-header" style="background-color: #0B3E61; color: white; border-top-right-radius: 15px; border-top-left-radius: 15px;">
                                            <div class="row text-center">
                                                <div class="col-1">#</div>
                                                <div class="col-2"></div>
                                                <div class="col-2">اسم المستخدم</div>
                                                <div class="col-2">نوع المستخدم</div>
                                                <div class="col-3">البريد الالكتروني</div>
                                                <div class="col-2">الاجراء</div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="max-height:575px; overflow-y: auto;">
                                            @foreach($users as $user)
                                            <div class="row text-center" style="border-bottom: 1px solid lightgray; padding-top: 1%">
                                                <div class="col-1">1</div>
                                                <div class="col-2">{{$user->name}} {{$user->last_name}}</div>
                                                <div class="col-2">soma</div>
                                                <div class="col-2">طالب ثانوي</div>
                                                <div class="col-3">soma64@gmail.com</div>
                                                <div class="col-2 text-center d-flex align-items-center justify-content-center">
                                                    <button type="button" class="btn" style=" color: #0B3E61;" data-bs-placement="top" title="عرض بيانات المستخدم" data-bs-toggle="modal" data-bs-target="#viewUserInfoModal"><i class='fas fa-address-card'></i></button>
                                                    <button type="button" class="btn" style=" color: #0B3E61;" data-bs-placement="top" title="تعديل بيانات المستخدم" data-bs-toggle="modal" data-bs-target="#editUserInfoModal"><i class='fas fa-user-edit'></i></button>
                                                    <button type="button" class="btn btn-outline-danger" style="border: none" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف مستخدم"><i class='fas fa-user-minus'></i></button>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="all-tests" role="tabpanel" aria-labelledby="all-tests-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="background-color: white; border-radius: 15px; padding: 5%;">
                                    <div style="padding-bottom: 2%">
                                        <form>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="" placeholder="الوظيفة بالعربي" value="">
                                                        <label for="">عنوان الاختبار</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-floating">
                                                        <select class="form-select" id="" aria-label="">
                                                            <option value="1">A-B-C-D</option>
                                                            <option value="2">V-L-I-T-O-R</option>
                                                            <option value="3">N-S-E-W</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">رموز الإجابة</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control" id="" placeholder="الوظيفة بالانجليزي" value="">
                                                        <label for="">عدد الأسئلة</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12 d-flex align-items-center justify-content-center">
                                                    <button type="submit" class="btn" style="background-color: #0B3E61; color: white; width: 100%">إضافة اختبار</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <hr>
                                    <div class="card">
                                        <div class="card-body" style="max-height:500px; overflow-y: auto;">
                                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                                <div class="col">
                                                    <div class="card text-end" style="border-bottom: 10px solid #ED7D31">
                                                        <div class="card-body">
                                                            <h5 class="card-title" style="color: #0B3E61;"><i class='fas fa-angle-left'></i>
                                                                <span class="fw-bold">هريمان </span>
                                                            </h5>
                                                            <br>
                                                            <h6 class="card-subtitle mb-2">عدد الأسئلة:
                                                                <span class="fw-light">15</span>
                                                            </h6>
                                                            <h6 class="card-subtitle mb-2">عدد الأقسام الفرعية:
                                                                <span class="fw-light">0</span>
                                                            </h6>
                                                            <p class="card-text fw-light" style="color: #A5A5A5; font-size: 14px;">
                                                                آخر تحديث:
                                                                <span>04/10/2021</span>
                                                            </p>
                                                            <hr style="height: 0.5px">
                                                            <div class="text-center d-flex align-items-center justify-content-center">
                                                                <a href="edit-test.html" type="button" class="btn" style=" color: #0B3E61;" data-bs-toggle="tooltip" data-bs-placement="top" title="تعديل الاختبار"><i class='fas fa-edit'></i></a>
                                                                <button type="button" class="btn btn-outline-danger" style="border: none" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف الاختبار"><i class="material-icons">delete_forever</i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="careers" role="tabpanel" aria-labelledby="careers-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="background-color: white; border-radius: 15px; padding: 5%;">
                                    <div style="padding-bottom: 2%">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="" placeholder="الوظيفة بالعربي" value="">
                                                    <label for="">الوظيفة بالعربي</label>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="" placeholder="الوظيفة بالانجليزي" value="">
                                                    <label for="">الوظيفة بالانجليزي</label>
                                                </div>
                                            </div>
                                            <div class="col-2 d-flex align-items-center justify-content-center">
                                                <button type="submit" class="btn" style="background-color: #0B3E61; color: white; width: 100%">إضافة وظيفة</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card text-end" style="border-radius: 15px;">
                                        <div class="card-header" style="background-color: #0B3E61; color: white; border-top-right-radius: 15px; border-top-left-radius: 15px;">
                                            <div class="row text-center">
                                                <div class="col-1">#</div>
                                                <div class="col-4">الوظيفة بالعربي</div>
                                                <div class="col-4">الوظيفة بالانجليزي</div>
                                                <div class="col-3">الاجراء</div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="max-height:565px; overflow-y: auto;">
                                            <div class="row text-center" style="border-bottom: 1px solid lightgray; padding-top: 1%">
                                                <div class="col-1">1</div>
                                                <div class="col-4">مطور مصادر طبيعية</div>
                                                <div class="col-4">Natural resource developer</div>
                                                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                                    <button type="button" class="btn" style=" color: #0B3E61;" data-bs-placement="top" title="تعديل بيانات الوظيفة" data-bs-toggle="modal" data-bs-target="#editCareerInfoModal"><i class='fas fa-edit'></i></button>
                                                    <button type="button" class="btn btn-outline-danger" style="border: none" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف وظيفة"><i class="material-icons">delete_forever</i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="majors" role="tabpanel" aria-labelledby="majors-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="background-color: white; border-radius: 15px; padding: 5%;">
                                    <div style="padding-bottom: 2%">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="" placeholder="التخصص بالعربي" value="">
                                                    <label for="">التخصص بالعربي</label>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="" placeholder="التخصص بالانجليزي" value="">
                                                    <label for="">التخصص بالانجليزي</label>
                                                </div>
                                            </div>
                                            <div class="col-2 d-flex align-items-center justify-content-center">
                                                <button type="submit" class="btn" style="background-color: #0B3E61; color: white; width: 100%">إضافة تخصص</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card text-end" style="border-radius: 15px;">
                                        <div class="card-header" style="background-color: #0B3E61; color: white; border-top-right-radius: 15px; border-top-left-radius: 15px;">
                                            <div class="row text-center">
                                                <div class="col-1">#</div>
                                                <div class="col-4">التخصص بالعربي</div>
                                                <div class="col-4">التخصص بالانجليزي</div>
                                                <div class="col-3">الاجراء</div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="max-height:565px; overflow-y: auto;">
                                            <div class="row text-center" style="border-bottom: 1px solid lightgray; padding-top: 1%">
                                                <div class="col-1">1</div>
                                                <div class="col-4">كلية الشريعة والدراسات الإسلامية	</div>
                                                <div class="col-4">College of Sharia and Islamic Studies</div>
                                                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                                    <button type="button" class="btn" style=" color: #0B3E61;" data-bs-placement="top" title="تعديل بيانات الوظيفة" data-bs-toggle="modal" data-bs-target="#editMajorInfoModal"><i class='fas fa-edit'></i></button>
                                                    <button type="button" class="btn btn-outline-danger" style="border: none" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف وظيفة"><i class="material-icons">delete_forever</i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="symbols" role="tabpanel" aria-labelledby="symbols-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="background-color: white; border-radius: 15px; padding: 5%;">
                                    <div style="padding-bottom: 2%">
                                        <form>
                                            <div class="row row-cols-1 row-cols-md-4">
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <select class="form-select" id="" aria-label="Floating label select example">
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                        </select>
                                                        <label for="floatingSelect">اختر التخصص الرئيسي</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <select class="form-select" id="" aria-label="Floating label select example">
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                        </select>
                                                        <label for="floatingSelect">اختر التخصص الفرعي</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <select class="form-select" id="" aria-label="Floating label select example">
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                        </select>
                                                        <label for="floatingSelect">اختر الوظيفة الرئيسي</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <select class="form-select" id="" aria-label="Floating label select example">
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                        </select>
                                                        <label for="floatingSelect">اختر الوظيفة الفرعي</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row row-cols-1 row-cols-md-3">
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="" placeholder="Password">
                                                        <label for="">الأحرف</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id=""></textarea>
                                                        <label for="">الوصف بالعربي</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id=""></textarea>
                                                        <label for="">الوصف بالانجليزي</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col">
                                                <button type="submit" class="btn" style="background-color: #0B3E61; color: white; width: 100%">إضافة</button>
                                            </div>
                                        </form>
                                    </div>
                                    <hr>
                                    <div class="card">
                                        <div class="card-body" style="max-height:425px; overflow-y: auto;">
                                            <div class="card text-end" style="border-right: 10px solid #ED7D31">
                                                <div class="card-body">
                                                    <h2 class="card-title">
                                                        <div class="row row-cols-2">
                                                            <div class="col">SID</div>
                                                            <div class="col text-start">
                                                                <button type="button" class="btn" style=" color: #0B3E61;" data-bs-placement="top" title="تعديل" data-bs-toggle="modal" data-bs-target="#editSymbolInfoModal"><i class='fas fa-edit'></i></button>
                                                                <button type="button" class="btn btn-outline-danger" style="border: none" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف وظيفة"><i class="material-icons">delete_forever</i></button>
                                                            </div>
                                                        </div>
                                                    </h2>
                                                    <h5 class="card-subtitle mb-2 ">
                                                        <div class="row row-cols-1">
                                                            <div class="col">مهندس كهربائي</div>
                                                            <div class="col text-muted">مخطط اقتصادي</div>
                                                            <div class="col">كلية الهندسة والعمارة</div>
                                                            <div class="col text-muted">كلية الهندسة الصناعية</div>
                                                        </div>
                                                    </h5>
                                                    <p class="card-text">
                                                        يتسم هذا الشخص بكونه يفضل العمل عن طريق النظريات و المعلومات،التفكير،التنظيم،و الفهم. من سمات هذه الشخصية أيضا: التحليل،الفضول، و الإستقلالية، العقلانية، و التحليل. يحب إجراء التجارب و الإشراف على البحوث. يدرك الكثير بالحدس أكثر من المنطق ، المال للأنفاق وليس للإكتناز ، يكره الروتين ،مندفع أحيانا ، تستهويه الأفكار الغريبة ، يعمل فى أكثر من شئ فى وقت واحد لايدقق فى التفاصيل ، يتمتع بحس الدعابة لايحب التقيد بالقوانين ، ويحاول إكتشاف الأشياء الجديدة بنفسه وهو عضو فريق، اجتماعي.ودود، محبوب.بطيء، مسترخ.متمركز حول العملية.متفهم، صبور ، متعاون
                                                    </p>
                                                    <hr>
                                                    <p class="card-text">
                                                        This person has the characteristics of preferring to work through theory and information, thinking, organizing, and understanding. Among the traits of this personality as well: analysis, curiosity, independence, rationality, and analysis. He should conduct experiments and supervise research. Many realize more with intuition than logic, money is for tunnels and not for hoarding, he hates routine, is impulsive sometimes, likes strange ideas, works on more than one thing at a time, does not scrutinize details, has a sense of humor, does not like to abide by laws, and tries to discover new things on himself while he is a member of a team, Social; Friendly, Lovable; Slow, Relaxed; Process Centered; Understanding, Patient, Helpful
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="background-color: white; border-radius: 15px; padding: 5%;">
                                    <!--                    <div>-->
                                    <!--                      <button type="button" class="btn" style=" color: #0B3E61;" data-bs-toggle="modal" data-bs-target="#addUserModal"><i class='fas fa-user-plus'></i> إضافة مستخدم جديد</button>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="card text-end" style="border-radius: 15px;">-->
                                    <!--                      <div class="card-header" style="background-color: #0B3E61; color: white; border-top-right-radius: 15px; border-top-left-radius: 15px;">-->
                                    <!--                        <div class="row text-center">-->
                                    <!--                          <div class="col-3">اسم المستخدم</div>-->
                                    <!--                          <div class="col-3">نوع المستخدم</div>-->
                                    <!--                          <div class="col-3">البريد الالكتروني</div>-->
                                    <!--                          <div class="col-3">الاجراء</div>-->
                                    <!--                        </div>-->
                                    <!--                      </div>-->
                                    <!--                      <div class="card-body" style="max-height:470px; overflow-y: auto;">-->
                                    <!--                        <div class="row text-center" style="border-bottom: 1px solid lightgray; padding-top: 1%">-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            سمية محمد فلمبان-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            طالب ثانوي-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            hind2017adnan@gmail.com-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3 text-center d-flex align-items-center justify-content-center">-->
                                    <!--                            <button type="button" class="btn" style=" color: #0B3E61;" data-bs-toggle="tooltip" data-bs-placement="top" title="تعديل بيانات المستخدم"><i class='fas fa-user-edit'></i></button>-->
                                    <!--                            <button type="button" class="btn btn-outline-danger" style="border: none" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف مستخدم"><i class='fas fa-user-minus'></i></button>-->
                                    <!--                          </div>-->
                                    <!--                        </div>-->
                                    <!--                        <div class="row text-center" style="border-bottom: 1px solid lightgray; padding-top: 1%">-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            هند محمد عدنان-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            طالب جامعي-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            soma@gmail.com-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3 text-center d-flex align-items-center justify-content-center">-->
                                    <!--                            <button type="button" class="btn" style=" color: #0B3E61;" data-bs-toggle="tooltip" data-bs-placement="top" title="تعديل بيانات المستخدم"><i class='fas fa-user-edit'></i></button>-->
                                    <!--                            <button type="button" class="btn btn-outline-danger" style="border: none" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف مستخدم"><i class='fas fa-user-minus'></i></button>-->
                                    <!--                          </div>-->
                                    <!--                        </div>-->
                                    <!--                        <div class="row text-center" style="border-bottom: 1px solid lightgray; padding-top: 1%">-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            فاطمة ناصر اليامي-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            طالب جامعي-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3">-->
                                    <!--                            fatimah@gmail.com-->
                                    <!--                          </div>-->
                                    <!--                          <div class="col-3 text-center d-flex align-items-center justify-content-center">-->
                                    <!--                            <button type="button" class="btn" style=" color: #0B3E61;" data-bs-toggle="tooltip" data-bs-placement="top" title="تعديل بيانات المستخدم"><i class='fas fa-user-edit'></i></button>-->
                                    <!--                            <button type="button" class="btn btn-outline-danger" style="border: none" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف مستخدم"><i class='fas fa-user-minus'></i></button>-->
                                    <!--                          </div>-->
                                    <!--                        </div>-->
                                    <!--                      </div>-->
                                    <!--                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- add user Model -->
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <!--        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">إضافة مستخدم جديد</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="الاسم الأول" value="">
                                        <label for="">الاسم الأول</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="الاسم الثاني" value="">
                                        <label for="">الاسم الثاني</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="الاسم الأخير" value="">
                                        <label for="">الاسم الأخير</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="name@example.com" value="">
                                        <label for="">البريد الالكتروني</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="رقم الجوال" value="">
                                        <label for="">رقم الجوال</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="">
                                            <option value="1">ذكر</option>
                                            <option value="2">أنثى</option>
                                        </select>
                                        <label for="floatingSelectGrid">الجنس</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="">
                                            <option value="1">طالب</option>
                                            <option value="2">خريج</option>
                                        </select>
                                        <label for="floatingSelectGrid">نوع السمتخدم</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="الصلاحيات" value="">
                                        <label for="">الصلاحيات</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="كلمة المرور" value="">
                                        <label for="">كلمة المرور</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="تأكيد كلمة المرور" value="">
                                        <label for="">تأكيد كلمة المرور</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                        <button type="button" class="btn" style="background-color: #0B3E61; color: white">إضافة</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit user info Model -->
        <div class="modal fade" id="editUserInfoModal" tabindex="-1" aria-labelledby="editUserInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات المستخدم</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="الاسم الأول" value="">
                                        <label for="">الاسم الأول</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="الاسم الثاني" value="">
                                        <label for="">الاسم الثاني</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="الاسم الأخير" value="">
                                        <label for="">الاسم الأخير</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="name@example.com" value="">
                                        <label for="">البريد الالكتروني</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="رقم الجوال" value="">
                                        <label for="">رقم الجوال</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="">
                                            <option value="1">ذكر</option>
                                            <option value="2">أنثى</option>
                                        </select>
                                        <label for="floatingSelectGrid">الجنس</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="">
                                            <option value="1">طالب</option>
                                            <option value="2">خريج</option>
                                        </select>
                                        <label for="floatingSelectGrid">نوع السمتخدم</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="الصلاحيات" value="">
                                        <label for="">الصلاحيات</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!--                <div class="row g-2">-->
                            <!--                  <div class="col-md">-->
                            <!--                    <div class="form-floating">-->
                            <!--                      <input type="email" class="form-control" id="" placeholder="كلمة المرور" value="">-->
                            <!--                      <label for="">كلمة المرور</label>-->
                            <!--                    </div>-->
                            <!--                  </div>-->
                            <!--                  <div class="col-md">-->
                            <!--                    <div class="form-floating">-->
                            <!--                      <input type="email" class="form-control" id="" placeholder="تأكيد كلمة المرور" value="">-->
                            <!--                      <label for="">تأكيد كلمة المرور</label>-->
                            <!--                    </div>-->
                            <!--                  </div>-->
                            <!--                </div>-->
                            <!--                <br>-->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                        <button type="button" class="btn" style="background-color: #0B3E61; color: white">تعديل</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- view user info Model -->
        <div class="modal fade" id="viewUserInfoModal" tabindex="-1" aria-labelledby="viewUserInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="border-right: 10px solid #0B3E61">
                    <div class="modal-body" >
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 fw-bold">الاسم الأول</div>
                                    <div class="col-8">سمية</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 fw-bold">الاسم الثاني</div>
                                    <div class="col-8">محمد</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 fw-bold">الاسم الثالث</div>
                                    <div class="col-8">فلمبان</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 fw-bold">اسم المستخدم</div>
                                    <div class="col-8">soma</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 fw-bold">البريد الالكتروني</div>
                                    <div class="col-8">soma64@gmail.com</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 fw-bold">الجوال</div>
                                    <div class="col-8">0123456789</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 fw-bold">الجنس</div>
                                    <div class="col-8">أنثى</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 fw-bold">الصورة</div>
                                    <div class="col-8">profile.png</div>
                                </div>
                            </div>
                            <div class="col-12 text-start">
                                <div class="row">
                                    <div class="col" style="color: #A5A5A5"><i class='far fa-clock'></i> آخر تحديث <span>10/3/2021</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #0B3E61; color: white">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- add test Model -->
        <div class="modal fade" id="addTestModal" tabindex="-1" aria-labelledby="addTestModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">إضافة اختبار</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="عنوان الاختبار" value="">
                                        <label for="">عنوان الاختبار</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="">
                                            <option value="1">A-B-C-D</option>
                                            <option value="2">V-L-I-T-O-R</option>
                                            <option value="3">N-S-E-W</option>
                                        </select>
                                        <label for="floatingSelectGrid">رموز الإجابة</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="عدد الأسئلة" value="">
                                        <label for="">عدد الأسئلة</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                        <button type="button" class="btn" style="background-color: #0B3E61; color: white">إضافة</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- add career Model -->
        <div class="modal fade" id="addCareerModal" tabindex="-1" aria-labelledby="addCareerModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">إضافة وظيفة جديدة</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="عنوان الوظيفة" value="">
                                        <label for="">عنوان الوظيفة</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="">
                                            <option value="1">وظيفة أساسية</option>
                                            <option value="2">وظيفة فرعية</option>
                                        </select>
                                        <label for="">نوع الوظيفة</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                        <button type="button" class="btn" style="background-color: #0B3E61; color: white">إضافة</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit career info Model -->
        <div class="modal fade" id="editCareerInfoModal" tabindex="-1" aria-labelledby="editCareerInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات الوظيفة</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="عنوان الوظيفة" value="">
                                        <label for="">عنوان الوظيفة</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="">
                                            <option value="1">وظيفة أساسية</option>
                                            <option value="2">وظيفة فرعية</option>
                                        </select>
                                        <label for="">نوع الوظيفة</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                        <button type="button" class="btn" style="background-color: #0B3E61; color: white">تعديل</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- add major Model -->
        <div class="modal fade" id="addMajorModal" tabindex="-1" aria-labelledby="addMajorModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">إضافة تخصص جديد</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="عنوان التخصص" value="">
                                        <label for="">عنوان التخصص</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="">
                                            <option value="1">تخصص أساسي</option>
                                            <option value="2">تخصص فرعي</option>
                                        </select>
                                        <label for="">نوع التخصص</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                        <button type="button" class="btn" style="background-color: #0B3E61; color: white">إضافة</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit major info Model -->
        <div class="modal fade" id="editMajorInfoModal" tabindex="-1" aria-labelledby="editMajorInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات التخصص</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="" placeholder="عنوان التخصص" value="">
                                        <label for="">عنوان التخصص</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="">
                                            <option value="1">تخصص أساسي</option>
                                            <option value="2">تخصص فرعي</option>
                                        </select>
                                        <label for="">نوع التخصص</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                        <button type="button" class="btn" style="background-color: #0B3E61; color: white">تعديل</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit symbol info Model -->
        <div class="modal fade" id="editSymbolInfoModal" tabindex="-1" aria-labelledby="editSymbolInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات التخصص</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="Floating label select example">
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                        </select>
                                        <label for="floatingSelect">اختر التخصص الرئيسي</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="Floating label select example">
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                        </select>
                                        <label for="floatingSelect">اختر التخصص الفرعي</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="Floating label select example">
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                        </select>
                                        <label for="floatingSelect">اختر الوظيفة الرئيسي</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="" aria-label="Floating label select example">
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                        </select>
                                        <label for="floatingSelect">اختر الوظيفة الفرعي</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row row-cols-1">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="" placeholder="Password">
                                        <label for="">الأحرف</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row row-cols-1">
                                <div class="col">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id=""></textarea>
                                        <label for="">الوصف بالعربي</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row row-cols-1">
                                <div class="col">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id=""></textarea>
                                        <label for="">الوصف بالانجليزي</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                        <button type="button" class="btn" style="background-color: #0B3E61; color: white">تعديل</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
