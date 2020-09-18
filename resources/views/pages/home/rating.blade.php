@extends('.pages.layout')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container">
  <div class="container">
  	<div class="row">
  		
  		<div class="col-6">
  			<form action="{{route('post-rate', $company->id)}}" class="tr-form" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label >Tiêu đề</label>
			    <input type="text" class="form-control" name="title"  value="">
			    
			  </div>
			  <div class="form-group">
			    <label >Điều bạn hài lòng</label>
			    
			    <textarea name="pros" class="form-control"   rows="5"></textarea>
			  </div>
			  <div class="form-group">
			    <label >Điều bạn không hài lòng</label>
			    
			    <textarea name="cons" class="form-control"   rows="5"></textarea>
			  </div>
			 
			  <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
			</form>
  		</div>
  	</div>
  </div>
</div>

@endsection