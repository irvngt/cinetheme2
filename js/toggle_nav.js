const toggleNav=()=>{
  const d= document,
  panel= d.querySelector('.Panel'),
  panelBtn=d.querySelector('.Panel-btn')

  panelBtn.addEventListener('click', e=>{
    e.preventDefault()
    panelBtn.classList.toggle('is-active')
    panel.classList.toggle('is-active')
  })
}
export default toggleNav


