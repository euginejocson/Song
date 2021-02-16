$(document).ready( function () {
	// $('#table-song').DataTable();
	$('#table-song').DataTable({
		processing: true,
		serverSide: true,
		ajax: '/song/list',
		columns: [
			{ data: 'id', name: 'id' },
			{ data: 'title', name: 'title' },
			{ data: 'author', name: 'author' },
			{ data: 'created_at', name: 'created_at' }
		]
	});
} );
