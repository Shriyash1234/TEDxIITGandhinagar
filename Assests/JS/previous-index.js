window.onload =()=>{
    const vw = window.innerWidth;
    if(vw<768){
      $('.a-speakers').attr('href','index.html#phone-speakers')
    }
  }
  window.onresize =()=>{
    const vw = window.innerWidth;
    if(vw<768){
      $('.a-speakers').attr('href','index.html#phone-speakers')
    }
    else{
      $('.a-speakers').attr('href','index.html#speakers')
    }
  }
 
