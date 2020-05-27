$(function(){
    let x_button = document.querySelector('.fa-times-circle');
        
    x_button.addEventListener('click', function(){
        let solicit_display = document.querySelector('.solicit');
        solicit_display.style.display = 'none';
    });
    
});