require(['jquery'], function ($) {
  // input 图片预览
  $(document).on('change', '.btn-file :file', function () {
    var preview = $(this).data('image-preview')

    if (preview) {
      if (this.files && this.files[0]) {
        var reader = new FileReader()

        reader.onload = function (e) {
          $(preview).attr('src', e.target.result)
        }
        reader.readAsDataURL(this.files[0])
      }
    }
  })
})
