let navStatus = false;

$('#btnBox').click(function(){
  
    if(navStatus === false){  
      $('.btnBottom').animate({
        left: '176px',
        top: '35px'
      }).animate({
        width: '5px',
        height: '30px'
      });
    $('.btnTop').animate({
        top: '35px',
        left: '150px'
      }).animate({
        width: '5px',
        height: '30px'
      });
    $('.btnMid').animate({
      top: '-100px'
    }).animate({
      top: '34px',
      left: '150px'
    });
    $('.btnHide').animate({
      top: '64px',
      left: '150px'
    }, 'slow');
    $('.btnClose').animate({
      opacity: '.3',
      left: '167px',
      top: '110px'
    }).delay(200).animate({
      top: '50px',
      opacity: '1'
    });
      $('.navSide').fadeIn();
      navStatus = true;
    } else {
          $('.btnBottom').animate({
        left: '0px',
        top: '19px'
      }).animate({
        width: '30px',
        height: '6px'
      });
    $('.btnTop').animate({
        left: '0',
        top: '0px'
      }).animate({
        width: '30px',
        height: '6px'
      });
    $('.btnMid').animate({
      top: '0',
      height:'30px',
      width: '6px'
    }).animate({
      top: '9px',
      left: '0',
      height: '6px',
      width: '30px'
    });
    $('.btnHide').animate({
      top: '1000px',
      left: '-1000px'
    });
    $('.btnClose').animate({
      opacity: '0',
    });
      $('.navSide').fadeOut();
      navStatus = false;
    }
    
    });