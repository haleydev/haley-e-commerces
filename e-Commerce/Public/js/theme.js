themeColorClear = "rgb(26 26 26)"
// claro:
themeColorDark = "#6d79cb"

const nightMode = document.querySelector('#btn_theme')
const nightModeStorage = localStorage.getItem('idmode')

  nightMode.addEventListener('click', () => {
      document.documentElement.classList.toggle('theme-color')      
      if(document.documentElement.classList.contains('theme-color')) {
        localStorage.setItem('idmode', true)       
        document.querySelector("[name='theme-color']").content = themeColorClear;  
        return
      }
      localStorage.removeItem('idmode')   
      document.querySelector("[name='theme-color']").content = themeColorDark;   
  })    
  
  if(nightModeStorage) {
      document.documentElement.classList.add('theme-color')     
      nightMode.checked = true    
      document.querySelector("[name='theme-color']").content = themeColorClear;  
  }
