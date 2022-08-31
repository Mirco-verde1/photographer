    @extends('page_elements.template')
    @section('content')
    <div class="container">
        <div class="row">
        <div class="content col-md-12 col-xs-12">
        {{-- SIDEBAR MENU --}}
        @include('page_elements.sidebar')
        <div>
            <a href='{{route("logout")}}'>Logout</a>
        </div>
        {{-- ADDING PHOTOS PART --}}
        <div class="add-photo-main-container">
            <form method="post" action="{{ route('admin.save-photo') }}" enctype="multipart/form-data">
        @csrf

        <div class="upload-image m-4 col-md-6 col-xs-12">
        <label><h4 class="mb-4">Aggiungi foto</h4></label>
        <input type="file" class="col-xs-12" required name="images" >
        </div>

         <div class="m-4 col-md-6 col-xs-12">
             {!! Form::select('category', $categories, null,['id' => 'category', 'class' => 'col-md-6 col-xs-12']) !!}
         </div>

        <div class="post_button m-4 col-xs-8">
        <button type="submit" class="btn btn-success">Procedi</button>
        </div>

    </form>
    {{-- Alerts --}}
       @include('page_elements.alerts')
    </div>
        </div>
    </div>
    </div>
</div>
@endsection

    @section('footer')

    @endsection

    @section('scripts')
    <script>
    $(".alert").delay(4000).slideUp(200, function() {
        $(this).alert('close');
    });
    </script>
    @endsection
