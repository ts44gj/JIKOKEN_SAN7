@section('aside')
<aside>
    <div class="card-body">
  <h2>USER_NAME</h2>
  <h3> big_targets</h3>
  <h4>middle_targets</h4>
  <a href="{{action('TargetController@index')}}">
    <button class="btn btn-danger" type="submit">newpost(targets)</button>
</a>
<!-- <div class="card-body">
    <div> -->
<h4>Everyone's post</h4>
<a href="/post/timeline">
    <button class="btn btn-danger" type="submit">more</button>
</a>
<!-- </div> -->
</div>

</aside>
@endsection
