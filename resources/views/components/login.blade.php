<form id="loginForm">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <x-log-button></x-log-button>
</form>
<p id="loginMessage"></p>

<script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    let formData = new FormData(this);

    fetch('/account', {
        method: 'POST',
        body: formData,
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
    })
    .then(response => response.json())
    .then(data => {
        if (data.user) {
            document.getElementById('loginMessage').textContent = 'Вхід успішний!';
        } else {
            document.getElementById('loginMessage').textContent = 'Помилка: ' + data.error;
        }
    })
    .catch(error => console.error('Error:', error));
});
</script>