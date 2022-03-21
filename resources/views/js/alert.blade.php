<script>
  var title = "{{ Session::get('title') }}";
  var alert_success = "{{ Session::has('success') }}";
  var messange_success = "{!! Session::get('success') !!}";
  var alert_warning = "{{ Session::has('warning') }}";
  var messange_warning = "{!! Session::get('warning') !!}";
  var alert_error = "{{ Session::has('error') }}";
  var messange_error = "{!! Session::get('error') !!}";
  var alert_confirm = "{{ Session::has('confirm') }}";
  var messange_confirm = "{{ Session::get('confirm') }}";
  if (alert_success){
    Swal.fire({
      title: title,
      text: messange_success,
      icon: 'success', 
      // timer: 5000,
      confirmButtonColor: '#ff4500',
    })
  }else if(alert_warning){
    Swal.fire({
      title: title,
      text: messange_warning,
      icon: 'warning', 
      timer: 5000,
    })
  }else if(alert_error){
    Swal.fire({
      title: title,
      text: messange_error,
      icon: 'error', 
      timer: 5000,
    })
  }else if(alert_confirm){
    Swal.fire({
    title: 'Apakah Kamu Yakin ?',
    text: "Pastikan kamu sudah paham akan artikel yang ada!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Lanjutkan'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Selamat Mengerjakan!',
          'Pastikan Jujur dan Cermat',
          'success'
        )
        // window.location = "/soal";
      }
    })
  }

</script>