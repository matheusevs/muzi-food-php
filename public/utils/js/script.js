function redirectWithDelay(url, delay = 1000) {
    setTimeout(function() {
        window.location.href = url;
    }, delay);
}