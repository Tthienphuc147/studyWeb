@extends('masterPage')
@section('title')
Môn học
@endsection
@section('titlePage')
Danh sách môn học
@endsection
@section('content')
 <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-full-width">
                        <div class="container">
                       		@if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    	@endif  
                            <div class="booksmedia-fullwidth">
                                <ul>
                                  @foreach ($datamonhoc as $item)
                                    <li>
                                        <div class="book-list-icon blue-icon"></div>
                                        <figure>
                                            <a href="/baihoc/{{ $idlophoc }}/{{ $item->id_monhoc }}"><img src="https://images.all-free-download.com/images/graphiclarge/student_graduation_background_boy_education_design_elements_icons_6837816.jpg" alt="Book"></a>
                                            <figcaption>
                                                <header>
                                                    <h4>{{ $item->tenlophoc}}</h4>
                                                    <p><strong>Môn học:</strong>  {{ $item->tenmonhoc }}</p>
                                                </header>
                                                {{-- <p style="padding-top:30px">Làm quen với các phép cộng trừ,đếm đến 10.Nhận biết hình vuông,hình tròn...</p> --}}
                                                <a href="/baihoc/{{ $idlophoc }}/{{ $item->id_monhoc }}">
                                                    <div class="actions">
                                                        Vào học <i class="fa fa-long-arrow-right"></i>
                                                    </div>
                                                </a>
                                              
                                            </figcaption>
                                        </figure>                                                
                                    </li>
                       @endforeach
                                
                                </ul>
                            </div>
                            
                        </div>
                     
                    </div>
                </main>
            </div>
        </div>

@endsection
