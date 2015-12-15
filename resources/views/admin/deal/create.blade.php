@extends('admin')

@section('content')

    {!! Form::open(['url'=> '/admin/deals']) !!}

    <div class="row">
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <button class="btn-floating btn-large green">
                <i class="large material-icons">done</i>
            </button>
            <a href="/admin/deals" class="btn-floating btn-large red">
                <i class="large material-icons">replay</i>
            </a>
        </div>

        <div class="row">
            <div class="col s6">
                <div class="card ">
                    <div class="card-content">
                        <div class="card-title">
                            THÔNG TIN CƠ BẢN
                        </div>
                        <div class="row">
                            <div class="input-field">
                                <input name="name" type="text" class="validate" required>
                                <label for="name">Tiêu đề deal</label>
                            </div>
                            <div class="input-field col s12">
                                {!! Form::select('partner_id', $partners , null, ['placeholder' => 'Chọn nhà cung cấp']) !!}
                                <label for="partner_id">Nhà cung cấp</label>
                            </div>
                            <div class="input-field col s12">
                                {!! Form::select('category_id', $categories , null, ['placeholder' => 'Chọn danh mục']) !!}
                                <label for="partner_id">Thuộc danh mục</label>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <div class="col s6">
                <div class="card ">
                    <div class="card-content">
                        <div class="card-title">
                            GIAO DỊCH
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="list_price" type="number" class="validate" required>
                                <label for="list_price">Giá gốc</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="deal_price" type="number" class="validate" pattern="" required>
                                <label for="deal_price">Giá mua chung</label>
                            </div>
                            <div class="input-field col s12">
                                <input name="location" type="text" class="validate">
                                <label for="location">Địa điểm </label>
                            </div>
                            <div class="input-field col s12">
                                <input required name="time_expired" type="date" class="datepicker" placeholder="Chọn thời gian hết hạn (24:00 kết thúc)">
                                <label for="time_expired">Thời hạn mua chung</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="stock" type="number" class="validate" required>
                                <label for="stock">Số lượng sẵn có</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="deal_amount" type="number" class="validate" required>
                                <label for="deal_amount">Số lượng yêu cầu</label>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-title">
                            Mô tả ngắn cho sản phẩm
                        </div>
                        <div class="row">
                            <div class="col s12">
                        <textarea name="short_description" id="editor2" rows="10" cols="110">
                            Thông tin sản nó phẩm...
                        </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="card">
                   <div class="card-content">
                       <div class="card-title">
                           Mô tả sản phẩm
                       </div>
                       <div class="row">
                           <div class="col s12">
                        <textarea name="description" id="editor1" rows="10" cols="110">
                            Thông tin sản nó phẩm...
                        </textarea>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-title">
                            Lưu ý khi mua
                        </div>
                        <div class="row">
                            <div class="col s12">
                        <textarea name="noted" id="editor3" rows="10" cols="110">
                            Lưu ý khi mua...
                        </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');
    </script>
@stop