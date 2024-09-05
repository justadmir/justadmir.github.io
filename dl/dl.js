document.getElementById('downloadBtn').addEventListener('click', function(event) {
            event.preventDefault();
            var button = this;
            button.classList.add('downloading');
            button.innerHTML = 'Downloading...';
            setTimeout(function() {
                window.location.href = button.href;
            }, 2000); // Simulate a delay for downloading
        });
