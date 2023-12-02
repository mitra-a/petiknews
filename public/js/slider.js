//Miuvy Slider

$(document).ready(function(){
    slider = $('.slider-group');
    sliderTime = $('.slider').attr('time');
    _sliderActive = 0;
    slider[_sliderActive].style.display = 'flex';
    
    $('.slider-left').click(function () {
        _new = _sliderActive - 1;
    
        if (_new < 0) {
            _new = slider.length - 1;
            _sliderActive = _new;
            slider.css('display', 'none');
            slider[_sliderActive].style.display = 'flex';
        } else {
            _sliderActive = _new;
            slider.css('display', 'none');
            slider[_sliderActive].style.display = 'flex';
        }
    })
    
    $('.slider-right').click(function () {
        _new = _sliderActive + 1;
    
        if (_new > slider.length - 1) {
            _new = 0;
            _sliderActive = _new;
            slider.css('display', 'none');
            slider[_new].style.display = 'flex';
        } else {
            _sliderActive = _new;
            slider.css('display', 'none');
            slider[_new].style.display = 'flex';
        }
    })
    
    if (sliderTime) {
        window.setInterval(function(){
            _new = _sliderActive + 1;
    
            if (_new > slider.length - 1) {
                _new = 0;
                _sliderActive = _new;
                slider.css('display', 'none');
                slider[_new].style.display = 'flex';
            } else {
                _sliderActive = _new;
                slider.css('display', 'none');
                slider[_new].style.display = 'flex';
            }
        },sliderTime)
    }
})