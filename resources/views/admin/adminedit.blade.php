@extends('admin.parent')

@section('content')
    <div class="contentwrapper">
 @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
    <form class="stdform stdform2" method="post" action="{{ url('admin/ad').'/'.$admin_id }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <p>
            <label>用户名</label>
            <span class="field"><input type="text" name="admin_name" id="" class="longinput" value="{{ $admin->admin_name}}" readonly></span>
        </p>

        <p>
            <label>密码</label>
            <span class="field"><input type="text" name="admin_password" id="" class="longinput" value="{{ $admin->admin_password}}"></span>
        </p>

{{--lkj--}}

        <p class="stdformbutton">
            <button class="submit radius2">提交</button>
            <input type="reset" class="reset radius2" value="重置">
        </p>
    </form>
    </div>
@endsection
