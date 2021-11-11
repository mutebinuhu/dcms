

  window.addEventListener("DOMContentLoaded",()=>{
  	const showModel = document.querySelector('.add_cloth_button')
	showModel.addEventListener('click', ()=>{
		let modal = document.querySelector('.modal');
		let wholeBody = document.querySelector('.wholebody')
		modal.classList.remove('hidden')
		wholeBody.classList.add('bg-red-500')
	
	})
  })