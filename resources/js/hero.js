document.addEventListener("DOMContentLoaded", function () {
    const text = "Welcome To Blog System";
    const textElement = document.getElementById("animatedText");

    function type() {
        let index = 0;
        textElement.innerHTML = "";
        textElement.classList.add("typing");

        function typingEffect() {
            if (index < text.length) {
                textElement.innerHTML += text.charAt(index);
                index++;
                setTimeout(typingEffect, 70); // Adjust the typing speed here
            } else {
                textElement.classList.remove("typing");
                setTimeout(startTyping, 5000); // Wait 5 seconds before restarting the animation
            }
        }

        typingEffect();
    }

    function startTyping() {
        type();
    }

    startTyping();
});