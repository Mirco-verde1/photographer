@extends('page_elements.template')
@section('content')
<div class="container">
    <div class="sidebar-menu">
     <div class="menu-options">
    <div class="option-title">
            <h3>@lang('admin.menu')</h3>
    </div>
     </div>
     <div class="menu-options">
        <div class="option-title">
            <h3>@lang('admin.add_photo')</h3>
        </div>
        <div class="option-icon">
            <a href="{{route('admin.add-photo')}}">
                <i class="fa fa-plus-square fa-2x"></i>
            </a>
        </div>
    </div>
    <div class="menu-options">
        <div class="option-title">
            <H3>@lang('admin.add_category')</H3>
        </div>
        <div class="option-icon">
            <a href="{{route('admin.add-category')}}">
                <i class="fa fa-plus-square fa-2x"></i>
            </a>
        </div>
    </div>
    </div>
</div>
@endsection

@section('footer')

@endsection

@section('scripts')

<script>
$("#test").click(function(){
  $("p").hide();
});
</script>
@endsection
