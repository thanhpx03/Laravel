<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white ">
  <h1>Quản Lý Sách</h1> 
  <span><div class=" ">
							
              <div class="alert alert-success alert-dismissable mt-5">
              <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <x-dropdown-link :href="route('logout')"
                                  onclick="event.preventDefault();
                                              this.closest('form').submit();">
                              {{ __('Đăng xuất') }}
                          </x-dropdown-link>
                      </form>
              </div>
            </div></span>
  
  
</div>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="{{route('Category.index')}}">Danh Mục</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('product.index')}}">sản phẩm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">nhân viên </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">hóa đơn</a>
      </li>
    </ul>
  </div>
</nav>


   @yield('content')

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
<script>
  new DataTable('#list');
</script>

<!-- https://code.jquery.com/jquery-3.7.0.js
https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js
https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js -->

</html>