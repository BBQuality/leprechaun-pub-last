<form action="{{ route('contact.submit') }}" method="POST">
    @csrf
    <label for="name">Ім'я:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Повідомлення:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Надіслати</button>
</form>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


<script>
document.getElementById('feedbackForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    let formData = new FormData(this);

    fetch('/contact', {
        method: 'POST',
        body: formData,
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
    })
    .then(response => response.json())
    .then(data => document.getElementById('feedbackMessage').textContent = data.message)
    .catch(error => console.error('Error:', error));
});
</script>