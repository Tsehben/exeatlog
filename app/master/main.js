const heading1 = document.querySelector('#h1'),
      content1 = document.querySelector('.head1-cont'),
      heading2 = document.querySelector('#h2'),
      content2 = document.querySelector('.head2-cont'),
	  heading3 = document.querySelector('#h3'),
      content3 = document.querySelector('.head3-cont'),
      mainCont = document.querySelector('.main-content'),
      mainCont2 = document.querySelector('.main-content2'),
      mainCont3 = document.querySelector('.main-content3');


heading1.addEventListener('click',function(){
	content1.classList.toggle('open');
	mainCont.classList.toggle('open');
});   

heading2.addEventListener('click',function(){
	content2.classList.toggle('open');
	mainCont2.classList.toggle('open');
})
heading3.addEventListener('click',function(){
	content3.classList.toggle('open');
	mainCont3.classList.toggle('open');
})