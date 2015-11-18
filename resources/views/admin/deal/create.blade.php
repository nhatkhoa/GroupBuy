@extends('admin')

@section('content')

    {!! Form::open(['url'=> '/admin/deals']) !!}

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary pull-right">Tạo mới</button>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Thông tin
                    </div>
                    <div class="card-block">
                        <fieldset class="form-group">
                            <label for="name">Tên Deal</label>
                            <input name="name" type="text" class="form-control" placeholder="Tên của sản phẩm"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="list_price">Giá gốc</label>
                            <input name="list_price" type="number" class="form-control" placeholder="Giá gốc của sản phẩm"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="deal_price">Giá đã giảm</label>
                            <input name="deal_price" type="number" class="form-control" placeholder="Nhập giá sau khi giảm"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="deal_amount">Số lượng yêu cầu</label>
                            <input name="deal_amount" type="number" class="form-control" placeholder="Số lượng cần đạt được"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="time_expired">Thời gian kết thúc</label>
                            {!! Form::datetimeLocal('time_expired', \Carbon\Carbon::now(), ['class'=> 'form-control']) !!}
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="location">Địa điểm</label>
                            <input name="location" type="text" class="form-control" placeholder="Nhập địa điểm của deal"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="partner_id">Nhà cung cấp</label>
                            {!! Form::select('partner_id', $partners , null, ['placeholder' => 'Chọn nhà cung cấp...', 'class' => 'form-control']) !!}
                        </fieldset>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Hình ảnh
                    </div>
                    <div class="card-block">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Mô tả sản phẩm
                    </div>
                    <div class="card-block">
                        <textarea name="editor1" id="editor1" rows="10" cols="110">
                            Thông tin sản nó phẩm...
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
@stop