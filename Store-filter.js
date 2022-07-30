$(document).ready(function(){
    $('.list').click(function(){
        const value = $(this).attr('data-filter');
        if (value == 'All'){
            $('.pxx').show('1000');
        }
        else {
          $('.pxx').not('.'+value).hide('1000');
          $('.pxx').filter('.'+value).show('1000');
        }
    })
    // add active class on selected item
    $('.list').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    })
  })