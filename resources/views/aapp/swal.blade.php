
{{-- Delete SWAL --}}
<script type="text/javascript">


  $('body').on('click', @yield('swal-delete'), function (event) {
    event.preventDefault();

    var me = $(this),
    url = me.attr('href'),
    title = me.attr('title'),
    csrf_token = $('meta[name="csrf-token"]').attr('content');

    swal({
      title: 'Apakah anda yakin ?',
      text: 'Anda akan menghapus ' + title + '',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, yakin'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: url,
          type: "POST",
          data: {
            '_method': 'POST',
            '_token': csrf_token
          },

          success: function (response) {
            location.reload();
          },
          error: function (xhr) {
            swal({
              type: 'error',
              title: 'Oops...',
              text: 'Something went wrong!'
            });
          }
        });
      }
    });
  });
</script>


{{-- NonAktif SWAL --}}
<script type="text/javascript">
  $('body').on('click', @yield('swal-nonaktif'), function (event) {
    event.preventDefault();

    var me = $(this),
    url = me.attr('href'),
    title = me.attr('title'),
    csrf_token = $('meta[name="csrf-token"]').attr('content');

    swal({
      title: 'Apakah anda yakin ?',
      text: 'Menonkatifkan ' + title + '',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, yakin'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: url,
          type: "POST",
          data: {
            '_method': 'POST',
            '_token': csrf_token
          },

          success: function (response) {
            location.reload();
          },
          error: function (xhr) {
            swal({
              type: 'error',
              title: 'Oops...',
              text: 'Something went wrong!'
            });
          }
        });
      }
    });
  });
</script>

{{-- Aktif SWAL --}}
<script type="text/javascript">
  $('body').on('click', @yield('swal-aktif'), function (event) {
    event.preventDefault();

    var me = $(this),
    url = me.attr('href'),
    title = me.attr('title'),
    csrf_token = $('meta[name="csrf-token"]').attr('content');

    swal({
      title: 'Apakah anda yakin ?',
      text: 'Aktifkan ' + title + '',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, yakin'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: url,
          type: "POST",
          data: {
            '_method': 'POST',
            '_token': csrf_token
          },

          success: function (response) {
            location.reload();
          },
          error: function (xhr) {
            swal({
              type: 'error',
              title: 'Oops...',
              text: 'Something went wrong!'
            });
          }
        });
      }
    });
  });
</script>