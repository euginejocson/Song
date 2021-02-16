@extends('layouts.dashboard')

@section('style')
@endsection

@section('script')
	<script type="text/javascript" src="{{ asset('js/song.js') }}"></script>
@endsection

@section('content')
	<div class="container-fluid">
		<div class="card mb-4">
			<div class="card-header">
				<i class="fas fa-table mr-1"></i>
				Song List

				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#song-create">Create Song</button>
			</div>
		   <div class="card-body">
			  <div class="table-responsive">
				 <table class="table table-bordered" id="table-song" width="100%" cellspacing="0">
					<thead>
					    <tr>
						   <th>#</th>
						   <th>Title</th>
						   <th>Artist</th>
						   <th>Date Create</th>
					    </tr>
					</thead>
					<tfoot>
					    <tr>
						   <th>#</th>
						   <th>Title</th>
						   <th>Artist</th>
						   <th>Date Create</th>
					    </tr>
					</tfoot>
					<tbody>

					</tbody>
				 </table>
			  </div>
		   </div>
	    </div>
	</div>

	<div class="modal fade" id="song-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form method="POST" action="{{ route('song.store') }}">
				@csrf
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
							<div class="form-group">
								<label for="song-title">Title:</label>
								<input type="text" class="form-control" id="song-title" name="title"  >
							</div>
							<div class="form-group">
								<label for="song-artist">Artist:</label>
								<input type="text" class="form-control" id="song-artist" name="artist">
							</div>
							<div class="form-group">
								<label for="song-lyrics">Lyrics</label>
								<textarea class="form-control" id="song-lyrics" name="lyrics" ></textarea>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection
