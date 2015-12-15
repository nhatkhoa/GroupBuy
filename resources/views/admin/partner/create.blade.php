@extends('admin')

@section('heading')
    <h3>Thêm Đối Tác Mới</h3>
    @stop

@section('content')

    <form action="/admin/partners" method="post">
        {!! csrf_field() !!}
        <div class="card-content">
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" name="company_name"/>
                    <label for="company_name">Tên Đối Tác</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="email"/>
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="address"/>
                    <label for="address">Địa Chỉ</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="phone_number"/>
                    <label for="phone_number">Điện Thoại</label>
                </div>
                <div class="input-field col s12">
                    <textarea name="description" class="materialize-textarea"></textarea>
                    <label for="phone_number">Giới Thiệu</label>
                </div>

            </div>

            <div class="divider"></div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="waves-effect waves-light btn green">
                        <i class="material-icons left">check</i>
                        Thêm Đối Tác
                    </button>
                </div>
            </div>
        </div>
    </form>
@stop