$(document).ready( function () {
	// $('#table-song').DataTable();
	$('#table-song').dataTable({
		processing: true,
		serverSide: true,
		ajax: '/song/list',
		columns: [
			{ data: 'id', name: 'id' },
			{ data: 'title', name: 'title' },
			{ data: 'artist', name: 'artist' },
			{ data: 'created_at', name: 'created_at' }
		]
	});
} );
