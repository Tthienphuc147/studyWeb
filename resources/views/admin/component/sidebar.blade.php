<ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTa90fY1hy-RvmpgvIxS80JzkK_fu-NBNpomZOrW-zvfUq2eRMO" class="img-circle" width="80"></a></p>
          @if (request()->session()->has('id'))

                <h5 class="centered">Xin chào  {{ request()->session()->get('namelogin') }}</h5>
          @endif

          @if (request()->session()->get('role')==2)
          <li class="mt">
            <a href="">
              <i class="fa fa-dashboard"></i>
              <span>Quản lý tài khoản </span>
              </a>
          </li>
          @endif
          @if (request()->session()->get('role')==3)
          <li class="mt">
            <a href="/admin/teacher/viewprofile">
              <i class="fa fa-dashboard"></i>
              <span>Quản lý tài khoản</span>
              </a>
          </li>
          @endif
          @if (request()->session()->get('role')==2)
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users" aria-hidden="true"></i>
              <span>Quản lý giáo viên</span>
              </a>
            <ul class="sub">
              <li><a href="/admin/teacher/list">Danh sách giáo viên</a></li>
              <li><a href="/admin/teacher/addview">Thêm giáo viên</a></li>
            </ul>
          </li>
          @endif

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users" aria-hidden="true"></i>
              <span>Quản lý lớp học</span>
              </a>
            <ul class="sub">
              <li><a href="/admin/class/list">Danh sách lớp học</a></li>
              @if(Request()->session()->get('role')==2)<li><a href="/admin/class/addview">Thêm lớp học</a></li>@endif
            </ul>
          </li>
          @if(Request()->session()->get('role')==2)
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users" aria-hidden="true"></i>
              <span>Quản lý môn học</span>
              </a>
            <ul class="sub">
              <li><a href="/admin/subject/list">Danh sách môn học</a></li>
              <li><a href="/admin/subject/addview">Thêm môn học</a></li>
            </ul>
          </li>
          @endif
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span>Quản lý bài học</span>
              </a>
            <ul class="sub">
              <li><a href="">Danh sách bài học</a></li>
              <li><a href="">Thêm bài học</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span>Quản lý loại bài học</span>
              </a>
            <ul class="sub">
              <li><a href="/loaibaihoc">Danh sách loại bài học</a></li>
              <li><a href="/loaibaihoc/create">Thêm loại bài học</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span>Quản lý loại trắc nghiệm</span>
              </a>
            <ul class="sub">
              <li><a href="">Danh sách loại trắc nghiệm</a></li>
              <li><a href="">Thêm loại trắc nghiệm</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span>Quản lý môn học</span>
              </a>
            <ul class="sub">
              <li><a href="">Danh sách môn học</a></li>
              <li><a href="">Thêm môn học</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span>Quản lý mức độ bài học</span>
              </a>
            <ul class="sub">
              <li><a href="/mucdo">Danh sách mức độ</a></li>
              <li><a href="/mucdo/create">Thêm mức độ bài học</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span>Quản lý loại đáp án</span>
              </a>
            <ul class="sub">
              <li><a href="">Danh sách đáp án</a></li>
              <li><a href="">Quản lý đáp án</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span>Quản lý học viên</span>
              </a>
            <ul class="sub">
              <li><a href="">Danh sách học viên</a></li>
              <li><a href="">Quản lý</a></li>
            </ul>
          </li>
          @if(request()->session()->get('role')==2)
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span>Quản lý loại tài khoản</span>
              </a>
            <ul class="sub">
              <li><a href="/admin/accounttype/list">Danh sách loại tài khoản</a></li>
              <li><a href="/admin/accounttype/addview">Thêm loại tài khoản</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span>Quản lý phân quyền</span>
              </a>
            <ul class="sub">
            <li><a href="/admin/role/list">Danh sách loại phân quyền</a></li>
              <li><a href="/admin/role/addview">Thêm loại phân quyền</a></li>
            </ul>
          </li>
          @endif
        </ul>
