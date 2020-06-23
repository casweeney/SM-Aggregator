@if(!empty($errors->first()))
    <b class='text-center text-danger' style='font-family: Segoe UI;'>{{$errors->first()}}</b>
@endif

@if(session('success'))
    <b class='text-center text-success' style='font-family: Segoe UI;'>{{session('success')}}</b>
@endif

@if(session('error'))
    <b class='text-center text-danger' style='font-family: Segoe UI;'>{{session('error')}}</b>
@endif
