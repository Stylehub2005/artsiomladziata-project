function toggleAccordion(element) {
    element.classList.toggle('active');
    var panel = element.querySelector('.panel');
    if (panel.style.display === 'block') {
        panel.style.display = 'none';
        element.style.height = element.querySelector('.accordion').offsetHeight + 'px';
    } else {
        panel.style.display = 'block';
        element.style.height = element.scrollHeight + 'px';
    }
}