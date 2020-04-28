window.addEventListener("load", function () {
  var all = document.querySelectorAll('span.close');
  for (var btn of all) {
    btn.addEventListener("click", function () {
      var bar = this.parentElement;
      bar.parentElement.removeChild(bar);
    });
  }
});