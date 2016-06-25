@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                	    You are logged in!
                	<br>
                	<br>
                	<div class="form-group">
                	    <button type="button" class="btn btn-default" onclick="location.href='/new_article'">
                	        <i class="fa fa-plus"></i> Add Article
                	    </button>
                	</div>
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection
