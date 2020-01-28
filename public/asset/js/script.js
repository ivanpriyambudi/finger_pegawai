$('button').click(function(){
  
  swal({
  title: 'Are you sure?',
  text: "It will permanently deleted !",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function() {
  swal(
    'Deleted!',
    'Your file has been deleted.',
    'success'
  );
})
  
})