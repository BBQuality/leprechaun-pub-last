<form id="subscriptionForm">
    <input type="email" name="email" placeholder="Ваш Email" required>
    <button type="submit">Підписатися</button>
</form>
<p id="subscriptionMessage"></p>

<script>
document.getElementById('subscriptionForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    let formData = new FormData(this);

    fetch('/subscribe', {
        method: 'POST',
        body: formData,
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
    })
    .then(response => response.json())
    .then(data => document.getElementById('subscriptionMessage').textContent = data.message)
    .catch(error => console.error('Error:', error));
});
</script>
