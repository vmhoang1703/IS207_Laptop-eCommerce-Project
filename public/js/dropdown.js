$(e => {
    $(".drop-down").click(function(e) {
      console.log(this)
      let target = this
      let indicator = $(target.children[1])
      let show = indicator.hasClass('deactive')
      let affected_list = $(target.parentNode.children[1])
      if (show) {
        affected_list.show()
        indicator.removeClass('deactive')
      } else {
        affected_list.hide()
        indicator.addClass('deactive')
      }
    })
  })
