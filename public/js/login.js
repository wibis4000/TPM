function submitForm() {
    var form = document.getElementById("myForm");
    form.submit(); 

    window.location.href = "{{route('homepage')}}";
  }