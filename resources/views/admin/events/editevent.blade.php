@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thương hiệu sẩn phẩm
                </header>
                <div class="panel-body">
                    <?php $message=Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message',null);
                        }  ?> 
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/update-event/'.$event_edit->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <label for="exampleInputEvent">Name event</label>
                            <input type="text" class="form-control" name="title" id="exampleInputEvent" placeholder="Name event" value="{{ $event_edit->title }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image event</label>
                            <input type="file" class="form-control" name="image"  id="exampleInputEmail1" placeholder="image event">
                            <img src="{{asset('storage/images/events/'.$event_edit->image)}}" alt="" width="150">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price event</label>
                            <input type="text" class="form-control" name="price" value="{{ $event_edit->price }}" id="exampleInputEmail1" placeholder="price event">
                        </div>
                        <div class="form-group">
                            <label for="start">Start date:</label>

                                <input type="date" id="start" name="date_start"
                                    value="{{ $event_edit->date_start }}"
                                    >
                                    <label for="start">Start date:</label>

                                <input type="date" id="start" name="date_end"
                                    value="{{ $event_edit->date_end }}"
                                    >
                        </div>
                        
                       
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea style="resize: none"  rows="5"class="form-control" name="description" id="exampleInputPassword1" placeholder="Mô tả sản phẩm">{{ $event_edit->description }}</textarea>
                        </div>
                        
                       
                        <button type="submit" name="add_event" class="btn btn-info">Add event</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection