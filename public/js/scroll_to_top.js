function scrollToTop() { 
    window.scrollTo({ top: 0, behavior: 'smooth' }); 
} 

document.getElementById('scroll-return').addEventListener('click', scrollToTop);