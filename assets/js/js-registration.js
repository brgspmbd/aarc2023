const radioButtons = document.querySelectorAll('input[name="organization"]');
const inputText = document.getElementById('inputText');

radioButtons.forEach(function(radioButton) {
    radioButton.addEventListener('change', function() {
        if (this.id === 'organization5') {
            inputText.disabled = false;
        } else {
            inputText.disabled = true;
        }
    });
});