<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6501102057504_sweetalert</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

</head>

<body>
    <div class="container p-5 bg-warning text-danger mt-2 mb-2" Style="text-align: center; " >
        <h1>Sweet Alert</h1>
        <h2>Miss Suparat Tatara</h2>
    </div>

    <div class="container mb-2">
    <!-- button.btn.btn-info -->
        <button class="btn btn-info" onclick=sw0()
        >A basic message></button>

    </div>

    <div class="container mb-2">
    <!-- button.btn.btn-danger -->
        <button class="btn btn-danger " onclick=sw1()
        >A title with atext under></button>

    </div>

    <div class="container mb-2 ">
    <!-- button.btn.btn-info -->
        <button class="btn" Style="background-color:bisque"onclick=sw2()
        >A modal with a title></button>

    </div>

    <div class="container mb-2 ">
    <!-- button.btn.btn-info -->
        <button class="btn" Style="background-color:darkorange"onclick=sw3()
        >A dialog with three buttons></button>

    </div>

    <div class="container mb-2 ">
    <!-- button.btn.btn-info -->
        <button class="btn" Style="background-color:khaki"onclick=sw4()
        >A custom positioned dialog></button>

    </div>
    <div class="container mb-2 ">
    <!-- button.btn.btn-info -->
        <button class="btn" Style="background-color:cornflowerblue"onclick=sw5()
        >Custom animation with Animate.css </button>

    </div>

    </div>
    <div class="container mb-2 ">
    <!-- button.btn.btn-info -->
        <button class="btn" Style="background-color:blue"onclick=sw6()
        >A confirm dialog </button>

    </div>

    <div class="container mb-2 ">
    <!-- button.btn.btn-info -->
        <button class="btn" Style="background-color:blueviolet"onclick=sw7()
        >A confirm dialog, with a function attached to the "Confirm"-button Try me!</button>

    </div>

    <div class="container mb-2 ">
    <!-- button.btn.btn-info -->
        <button class="btn" Style="background-color:cadetblue"onclick=sw8()
        > and by passing a parameter, you can execute something else for "Cancel"</button>

    </div>

    <div class="container mb-2 ">
    <!-- button.btn.btn-info -->
        <button class="btn" Style="background-color:darkslategrey"onclick=sw9()
        > A message with a custom image</button>

    </div>



    <script>
        function sw0(){
            Swal.fire('Hello Miss.Suparat Tatara')
        }
        function sw1(){
            Swal.fire(
  'Miss Suparat Tatara',
  'That thing is still around?',
  'warning'
)
        }
        function sw2(){
            Swal.fire({
  icon: 'question',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '<a href="">[MV] 여자친구(GFRIEND) _ 너 그리고 나 (NAVILLERA)</a>'
})
        }
        function sw3(){
            Swal.fire({
  title: 'Do you want to save the changes?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Save',
  denyButtonText: `Don't save`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('Miss Suparat Tatara', '', 'error')
  } else if (result.isDenied) {
    Swal.fire('Miss Suparat Tatara', '', 'warning')
  }
})
        }
        function sw4(){
            Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
        }
        function sw5(){
            Swal.fire({
  title: 'Custom animation with Animate.css',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
        }
        function sw6(){
            Swal.fire({
  title: 'Custom animation with Animate.css',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
        }
        function sw7(){
            Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
        }
        function sw8(){
            const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
        }
        function sw9(){
            Swal.fire({
  title: 'Sweet!',
  text: 'Modal with a custom image.',
  imageUrl: 'https://unsplash.it/400/200',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
})
        
}
    </script>
</body>

</html>