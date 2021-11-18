function registro() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 10000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })
    
    Toast.fire({
      icon: 'success',
      iconColor: 'cyan',
      background: '#082330',
      title: '¡¡Registro exitoso!!!',
      text: 'Gracias por registrarte en Néfele Solutions.',
      customClass: {
        popup: 'colorswaldescarga'
      },
            
    })
  }
