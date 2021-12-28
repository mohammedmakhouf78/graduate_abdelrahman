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
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الطلبة
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('students') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('army.index')}}"
                                class="nav-link {{currentRequest('students/army') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>موقف التجنيد</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('center.index')}}"
                                class="nav-link {{currentRequest('students/center') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>المراكز</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('city.index')}}"
                                class="nav-link {{currentRequest('students/city') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>المدن</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('decisiontype.index')}}"
                                class="nav-link {{currentRequest('students/decisiontype') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>أنواع القرارات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('department.index')}}"
                                class="nav-link {{currentRequest('students/department') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الأقسام</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('nationality.index')}}"
                                class="nav-link {{currentRequest('students/nationality') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الجنسيات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('notetype.index')}}"
                                class="nav-link {{currentRequest('students/notetype') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>انواع الملاحظات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('organization.index')}}"
                                class="nav-link {{currentRequest('students/organization') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>المنظمات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('qualification.index')}}"
                                class="nav-link {{currentRequest('students/qualification') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>المؤهلات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('squad.index')}}"
                                class="nav-link {{currentRequest('students/squad') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الفرقة</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('status.index')}}"
                                class="nav-link {{currentRequest('students/status') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الحالات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sutdent.index')}}"
                                class="nav-link {{currentRequest('students/sutdent') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الطلاب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('studentphone.index')}}"
                                class="nav-link {{currentRequest('students/studentphone') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>تلفونات الطلاب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('note.index')}}"
                                class="nav-link {{currentRequest('students/note') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الملاحظات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('decision.index')}}"
                                class="nav-link {{currentRequest('students/decision') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>القرارات</p>
                            </a>
                        </li>
                    </ul>
                </li>




                {{-- الموظفين --}}
                <li class="nav-item {{currentRequest('employees') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('employees') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الموظفين
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('employees') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('employee.index')}}"
                                class="nav-link {{currentRequest('employees/employee') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الموظفين</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employeephone.index')}}"
                                class="nav-link {{currentRequest('employees/employeephone') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>تلفونات الموظفين</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('observer.index')}}"
                                class="nav-link {{currentRequest('employees/observer') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>المراقبين</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('professor.index')}}"
                                class="nav-link {{currentRequest('employees/professor') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الدكاترة</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('professorassistant.index')}}"
                                class="nav-link {{currentRequest('employees/professorassistant') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>المعيدين</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('professorprofessorassistant.index')}}"
                                class="nav-link {{currentRequest('employees/professorprofessorassistant') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>المعيدين والدكاترة</p>
                            </a>
                        </li>
                    </ul>
                </li>





                {{-- الماليات --}}
                <li class="nav-item {{currentRequest('payments') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('payments') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الماليات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('payments') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('paymentstate.index')}}"
                                class="nav-link {{currentRequest('payments/paymentstate') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>حالة الدفع</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('finance.index')}}"
                                class="nav-link {{currentRequest('payments/finance') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الماليات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('studentfinance.index')}}"
                                class="nav-link {{currentRequest('payments/studentfinance') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ماليات الطالب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('installment.index')}}"
                                class="nav-link {{currentRequest('payments/installment') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>التقسيط</p>
                            </a>
                        </li>
                    </ul>
                </li>





                {{-- الامتحانات --}}
                <li class="nav-item {{currentRequest('exams') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('exams') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الامتحانات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('exams') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('subject.index')}}"
                                class="nav-link {{currentRequest('exams/subject') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>المواد</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('committy.index')}}"
                                class="nav-link {{currentRequest('exams/committy') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>اللجان</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('exam.index')}}"
                                class="nav-link {{currentRequest('exams/exam') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الامتحانات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('exammarking.index')}}"
                                class="nav-link {{currentRequest('exams/exammarking') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>تصحيح الامتحانات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('floor.index')}}"
                                class="nav-link {{currentRequest('exams/floor') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الادوار</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('examobserver.index')}}"
                                class="nav-link {{currentRequest('exams/examobserver') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>مراقبين الامتحانات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sitnumber.index')}}"
                                class="nav-link {{currentRequest('exams/sitnumber') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
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