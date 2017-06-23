$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

  $(function () {
    $('#myTab a:last').tab('show')
  })

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  e.target // activated tab
  e.relatedTarget // previous tab
})