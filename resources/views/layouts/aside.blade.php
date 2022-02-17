<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('/adminLTE') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/adminLTE') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">


            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                {{-- students --}}
                <li class="nav-item {{currentRequest('students') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('students') ? 'active' : ''}}">
                        <i class="fas fa-user-graduate mr-3"></i>
                        <p>
                            الخصائص الشخصية
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('students') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('army.index')}}"
                                class="nav-link {{currentRequest('students/army') ? 'active' : ''}}">
                                <i class="far fa-flag ml-3 mr-3"></i>
                                <p>موقف التجنيد</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('center.index')}}"
                                class="nav-link {{currentRequest('students/center') ? 'active' : ''}}">
                                <i class="fas fa-city ml-3 mr-3"></i>
                                <p>المركز</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('city.index')}}"
                                class="nav-link {{currentRequest('students/city') ? 'active' : ''}}">
                                <i class="fas fa-globe-europe ml-3 mr-3"></i>
                                <p>المحافظة</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('decisiontype.index')}}"
                                class="nav-link {{currentRequest('students/decisiontype') ? 'active' : ''}}">
                                <i class="fas fa-code-branch ml-3 mr-3"></i>
                                <p>نوع قرار الطالب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('department.index')}}"
                                class="nav-link {{currentRequest('students/department') ? 'active' : ''}}">
                                <i class="fas fa-ellipsis-v ml-3 mr-3"></i>
                                <p>الشعبة</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('nationality.index')}}"
                                class="nav-link {{currentRequest('students/nationality') ? 'active' : ''}}">
                                <i class="fas fa-dna ml-3 mr-3"></i>
                                <p>الجنسية</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('notetype.index')}}"
                                class="nav-link {{currentRequest('students/notetype') ? 'active' : ''}}">
                                <i class="fas fa-code-branch ml-3 mr-3"></i>
                                <p>نوع ملاحظة الطالب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('organization.index')}}"
                                class="nav-link {{currentRequest('students/organization') ? 'active' : ''}}">
                                <i class="fas fa-school ml-3 mr-3"></i>
                                <p>الجهة</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('qualification.index')}}"
                                class="nav-link {{currentRequest('students/qualification') ? 'active' : ''}}">
                                <i class="fas fa-graduation-cap ml-3 mr-3"></i>
                                <p>المؤهل</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('squad.index')}}"
                                class="nav-link {{currentRequest('students/squad') ? 'active' : ''}}">
                                <i class="fas fa-users ml-3 mr-3"></i>
                                <p>الفرقة المقيد بها</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('status.index')}}"
                                class="nav-link {{currentRequest('students/status') ? 'active' : ''}}">
                                <i class="fas fa-thermometer-three-quarters ml-3 mr-3"></i>
                                <p>حالة الطالب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('student.index')}}"
                                class="nav-link {{currentRequest('students/student') ? 'active' : ''}}">
                                <i class="fas fa-user-graduate ml-3 mr-3"></i>
                                <p>الطالب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('studentphone.index')}}"
                                class="nav-link {{currentRequest('students/studentphone') ? 'active' : ''}}">
                                <i class="fas fa-phone ml-3 mr-3"></i>
                                <p>هاتف الطالب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('note.index')}}"
                                class="nav-link {{currentRequest('students/note') ? 'active' : ''}}">
                                <i class="far fa-clipboard ml-3 mr-3"></i>
                                <p>ملاحظات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('decision.index')}}"
                                class="nav-link {{currentRequest('students/decision') ? 'active' : ''}}">
                                <i class="fas fa-cash-register ml-3 mr-3"></i>
                                <p>قرار متعلق بالطالب</p>
                            </a>
                        </li>
                    </ul>
                </li>




                {{-- الموظفين --}}
                <li class="nav-item {{currentRequest('employees') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('employees') ? 'active' : ''}}">
                        <i class="fas fa-user-tie mr-3"></i>
                        <p>
                            الموظفين
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('employees') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('employee.index')}}"
                                class="nav-link {{currentRequest('employees/employee') ? 'active' : ''}}">
                                <i class="fas fa-users-cog ml-3 mr-3"></i>
                                <p>الموظفين</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employeephone.index')}}"
                                class="nav-link {{currentRequest('employees/employeephone') ? 'active' : ''}}">
                                <i class="fas fa-phone ml-3 mr-3"></i>
                                <p>هواتف الموظفين</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('observer.index')}}"
                                class="nav-link {{currentRequest('employees/observer') ? 'active' : ''}}">
                                <i class="fas fa-eye ml-3 mr-3"></i>
                                <p>المراقبين</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('professor.index')}}"
                                class="nav-link {{currentRequest('employees/professor') ? 'active' : ''}}">
                                <i class="fas fa-user-tie ml-3 mr-3"></i>
                                <p>الدكتور</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('professorassistant.index')}}"
                                class="nav-link {{currentRequest('employees/professorassistant') ? 'active' : ''}}">
                                <i class="fas fa-chalkboard-teacher ml-3 mr-3"></i>
                                <p>المعيد</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('professor_professorassistant.index')}}"
                                class="nav-link {{currentRequest('employees/professor_professorassistant') ? 'active' : ''}}">
                                <i class="fas fa-users ml-3 mr-3"></i>
                                <p> اعضاء هيئة التدريس</p>
                            </a>
                        </li>
                    </ul>
                </li>





                {{-- الماليات --}}
                <li class="nav-item {{currentRequest('payments') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('payments') ? 'active' : ''}}">
                        <i class="fas fa-coins mr-3"></i>
                        <p>
                            الماليات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('payments') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('paymentstate.index')}}"
                                class="nav-link {{currentRequest('payments/paymentstate') ? 'active' : ''}}">
                                <i class="fas fa-money-check-alt ml-3 mr-3"></i>
                                <p>حالة الدفع</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('finance.index')}}"
                                class="nav-link {{currentRequest('payments/finance') ? 'active' : ''}}">
                                <i class="fas fa-wallet ml-3 mr-3"></i>
                                <p>الماليات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('studentfinance.index')}}"
                                class="nav-link {{currentRequest('payments/studentfinance') ? 'active' : ''}}">
                                <i class="fas fa-graduation-cap ml-3 mr-3"></i>
                                <p>ماليات الطالب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('installment.index')}}"
                                class="nav-link {{currentRequest('payments/installment') ? 'active' : ''}}">
                                <i class="fas fa-money-check-alt ml-3 mr-3"></i>
                                <p>التقسيط</p>
                            </a>
                        </li>
                    </ul>
                </li>





                {{-- الامتحانات --}}
                <li class="nav-item {{currentRequest('exams') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('exams') ? 'active' : ''}}">
                        <i class="fas fa-spell-check mr-3"></i>
                        <p>
                            النجاح والرسوب
                            <i class="right fas fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('exams') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('subject.index')}}"
                                class="nav-link {{currentRequest('exams/subject') ? 'active' : ''}}">
                                <i class="fas fa-book ml-3 mr-3"></i>
                                <p>المواد</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('committy.index')}}"
                                class="nav-link {{currentRequest('exams/committy') ? 'active' : ''}}">
                                <i class="fas fa-school ml-3 mr-3"></i>
                                <p>اللجان</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('exam.index')}}"
                                class="nav-link {{currentRequest('exams/exam') ? 'active' : ''}}">
                                <i class="fas fa-book-open ml-3 mr-3"></i>
                                <p>الامتحانات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('exammarking.index')}}"
                                class="nav-link {{currentRequest('exams/exammarking') ? 'active' : ''}}">
                                <i class="fas fa-check-double ml-3 mr-3"></i>
                                <p>تصحيح الامتحانات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('floor.index')}}"
                                class="nav-link {{currentRequest('exams/floor') ? 'active' : ''}}">
                                <i class="fas fa-layer-group ml-3 mr-3"></i>
                                <p>الطوابق</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('examobserver.index')}}"
                                class="nav-link {{currentRequest('exams/examobserver') ? 'active' : ''}}">
                                <i class="fab fa-watchman-monitoring ml-3 mr-3"></i>
                                <p>مراقبين الامتحانات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sitnumber.index')}}"
                                class="nav-link {{currentRequest('exams/sitnumber') ? 'active' : ''}}">
                                <i class="fas fa-list-ol ml-3 mr-3"></i>
                                <p>ارقام الجلوس</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>


        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>